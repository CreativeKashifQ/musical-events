<?php

namespace App\Http\Livewire\Account\Manage;

use App\Models\Account;
use Livewire\Component;
use App\Models\RequestValidator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class EmailVerificationRequired extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */
    public $toggleModal=true,$email;
    /*
    |--------------------------------------------------------------------------
    | Override Properties
    |--------------------------------------------------------------------------
    | Component properties like rules, messages
    */
    protected $rules = [
        'email' => 'required'
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
    }

    public function render()
    {
        return view('livewire.account.manage.email-verification-required')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function resendLink()
    {
        $user = Auth::user();
        $user->dispatchRequestValidator(RequestValidator::EMAIL_VERIFICATION,'account.consume.verify-email');
        return back()->with('success','Just to make verify your email, we have sent an email verification link again on your email' .'  '.$user->email);
    }

    public function changeEmail()
    {
        $this->validate();
        $user = Auth::user();
        $user->email = $this->email;
        $user->save();
        $this->toggleModal = true;
        $user->dispatchRequestValidator(RequestValidator::EMAIL_VERIFICATION,'account.consume.verify-email');
        return back()->with('success','Just to make verify your email, we have sent an email verification link again on your email' .'  '.$user->email);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
