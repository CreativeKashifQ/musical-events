<?php

namespace App\Http\Livewire\Account\Consume;

use App\Models\User;
use App\Models\Account;
use Livewire\Component;
use App\Models\RequestValidator;
use App\Services\AccountService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Register extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $name,$email,$password,$password_confirm,$roles;
    /*
    |--------------------------------------------------------------------------
    | Override Properties
    |--------------------------------------------------------------------------
    | Component properties like rules, messages
    */
    protected $rules = [
        'name' => 'required',
        'email' => 'required|unique:users',
        'password' => 'required',
        // 'password' => 'required|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/|same:password_confirm',

    ];

    protected $messages = [
        'password.regex' => 'Password should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character.'
    ];
    /*
    |--------------------------------------------------------------------------
    | Listeners
    |--------------------------------------------------------------------------
    | Livewire event listeners like created, updated or deleted
    */

    /*
    |--------------------------------------------------------------------------
    | Lifecycle Hooks
    |--------------------------------------------------------------------------
    | Component hooks like hydrate, updated, render
    */

    public function mount()
    {
        $this->user = new User();
        if(Session::has('roles')){
            $this->roles = Session::get('roles');
        }
    }

    public function render()
    {
        return view('livewire.account.consume.register')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function store(AccountService $accountService)
    {
        $data = $this->validate();
        $data['roles']  = $this->roles;
        $isRegistered = $accountService->register($data);
        if($isRegistered){
            return redirect()->route('dashboard.manage.dashboard');
        }else{
            abort(400);
        }

        $this->toggleModal = true;

        // $this->validate();
        // $this->user->setPassword($this->password);
        // $this->user->save();
        // Auth::login($this->user,true);
        // $this->user->dispatchRequestValidator(RequestValidator::EMAIL_VERIFICATION, 'account.consume.verify-email');
        // return redirect()->route('dashboard');
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
