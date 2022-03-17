<?php

namespace App\Services;

use App\Models\Role;
use App\Models\User;
use App\Helpers\UserRoles;
use App\Helpers\ApiResponser;
use App\Models\RequestValidator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\ThrottlesLogins;


class AccountService
{
    use ThrottlesLogins;

    //////////////////////////////////////////////////////////////////////////////
    // ACCOUNT REGISTER
    /////////////////////////////////////////////////////////////////////////////

    // in $data we expect the following attributes
    // name, email, password, roles
    public function register($data)
    {

        // create user
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->setPassword($data['password']);
        $user->save();

        // way of selection using arrays
        $hashedRoles = [
            'venue_provider' => UserRoles::VENUE_PROVIDER,
            'event_host' =>  UserRoles::EVENT_HOST,
            'musical_artist' =>  UserRoles::MUSICAL_ARTIST,
            'manager' =>  UserRoles::ARTIST_MANAGER,
            'equipment_provider' =>  UserRoles::EQUIPMENT_PROVIDER,
            'food_supplier' =>  UserRoles::FOOD_SUPPLIER,
            'promoter' =>  UserRoles::PROMOTER,
            'sponser' =>  UserRoles::SPONSER,
        ];

        // create role
        foreach($data['roles'] as $role){
            $role = Role::where('name', $hashedRoles[$role] )->first();
            $user->roles()->attach($role->id);
        }

        if($user && $role){
            $user->setActiveRole();
            Auth::login($user,true);
            $user->dispatchRequestValidator(RequestValidator::EMAIL_VERIFICATION,'account.consume.verify-email');
            Session::forget('roles');
            return true;
        }else{
            return false;
        }

    }

    //////////////////////////////////////////////////////////////////////////////
    // VERIFY EMAIL WITH OTP TOKEN
    //////////////////////////////////////////////////////////////////////////////

    public $verifyEmailRules = [
        'otp' => 'required',
        'id' => 'required',
    ];
    //In $data we expects otp,user_id
    public function verifyOTP($data)
    {

        $requestValidator = RequestValidator::where('user_id', $data['id'])->first();
        if ($requestValidator) {
            $isValid = $requestValidator->isValidOtpSecret($data['otp']);
            if (!$isValid) {
                return 'Otp is not valid';
            } else {
                $requestValidator->delete();
                return 'Otp is valid';
            }
        } else {
            return 'otp expired';
        }
    }

    //////////////////////////////////////////////////////////////////////////////
    // RESEND OTP
    //////////////////////////////////////////////////////////////////////////////
    public $resendOtpRules = [
        'id' => 'required'
    ];
    //$data expects user id
    public function resendOtp($data)
    {
        ///delete previous one
        $requestValidator = RequestValidator::where('user_id', $data['id'])->first();
        if ($requestValidator) {
            $requestValidator->delete();
            $user = User::where('id', $data['id'])->first();
            $otp = $user->dispatchVerifyEmailNotification();
            return $otp;
        }else{
            return 'otp expired';
        }
    }
    //////////////////////////////////////////////////////////////////////////////
    // ACCOUNT LOGIN WITH RULES
    //////////////////////////////////////////////////////////////////////////////

    public $loginRules = [
        'email' => 'required',
        'password' => 'required',
    ];

    //In $data we expect following Attributes
    //email,password
    public function login($data)
    {

        //We need to inject user email in current request instance to monitor user login attempts.
        $request = request();
        $request->attributes->set('email', $data['email']);

        //This method is defined in ThrottlesLogins. it is used to block user requests if user has too many failed
        //attempts to login to the system.
        $tooManyAttemptes = $this->hasTooManyLoginAttempts($request);
        if ($tooManyAttemptes) {
            $this->fireLockoutEvent($request);
            $this->sendLockoutError();
            return null;
        }

        //Find use and send login failed error is user do not exists or fails password challenge.
        $user = User::where('email', $data['email'])->first();
        $invalidCredentials = $user == null || $user->failPasswordChallenge($data['password']);
        if ($invalidCredentials) {
            $this->incrementLoginAttempts($request);
            $this->sendFailedError();
            return null;
        }

        //User credentails are valid. Login current user and clear the failed attempt counter
        Auth::login($user, true);
        $this->clearLoginAttempts($request);


        //redirect to dashboard
        return redirect()->route('dashboard.manage.dashboard');
    }

    private function sendFailedError()
    {
        return back()->with('error', 'Invalid email or password');
    }

    private function sendLockoutError()
    {
        return back()->with('warning', 'You attempted too many times.');
    }

    //This method must be defined here becuase ThrottlesLogins depends on this method to process the request.
    public function username()
    {
        return 'email';
    }

    //////////////////////////////////////////////////////////////////////////////
    // ACCOUNT FORGOT PASSWORD
    //////////////////////////////////////////////////////////////////////////////


    // $data expects email attribute
    public function forgotPassword($data)
    {

        $user = User::where('email', $data['email'])->first();
        if($user){
             $user->dispatchRequestValidator(RequestValidator::FORGOT_PASSWORD,'account.consume.reset-password');
             return back()->with('success','Password reset link sent to your email');
        }else{
            return back()->with('error','Email does\'t exist in our record');
        }

    }

    //////////////////////////////////////////////////////////////////////////////
    // ACCOUNT RESET PASSWORD
    //////////////////////////////////////////////////////////////////////////////

    //$data expects secret,requestValidator,email
    public function updatePassword($data)
    {

        $user = User::where('id', $data['id'])->where('email',$data['email'])->first();
        if($user){
            $user->setPassword($data['password']);
            $user->update();
            return true;
        }else{
            abort('400', 'We did\'nt find record for this record');
        }



    }
}
