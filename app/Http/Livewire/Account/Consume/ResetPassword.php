<?php

namespace App\Http\Livewire\Account\Consume;

use App\Models\Account;
use Livewire\Component;
use App\Models\RequestValidator;
use App\Services\AccountService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ResetPassword extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $email,$password,$password_confirm,$toggleModal=false;
    /*
    |--------------------------------------------------------------------------
    | Override Properties
    |--------------------------------------------------------------------------
    | Component properties like rules, messages
    */
    protected $rules = [
        'email' => 'required',
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
    public function mount(RequestValidator $requestValidator, $secret)
    {
        $this->user = $requestValidator->user;
        $this->email = $this->user->email;
        // if ($this->isValid = $requestValidator->isValidSecret($secret)) {
        //     $requestValidator->expire();
        //         $this->email = $requestValidator->user->email;
        // } else {
        //     abort('400', 'This link is expired or not valid');
        // }
    }

    public function render()
    {
        return view('livewire.account.consume.reset-password')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function updatePassword(AccountService $accountService)
    {
        $data = $this->validate();
        $data['id']  = $this->user->id;
        $isUpdatePassword =  $accountService->updatePassword($data);
        if($isUpdatePassword){
            $this->toggleModal = true;
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
