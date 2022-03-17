<?php

namespace App\Http\Livewire\Account\Consume;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Account;
use App\Models\RequestValidator;

class VerifyEmail extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */

    public $isValid;

    /*
    |--------------------------------------------------------------------------
    | Override Properties
    |--------------------------------------------------------------------------
    | Component properties like rules, messages
    */

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

        if ($this->isValid = $requestValidator->isValidSecret($secret)) {
            // $requestValidator->user->update(['email_verified_at' => now()]);
            $user = $requestValidator->user;
            $user->email_verified_at = now();
            $user->update();
            $requestValidator->expire();
            return redirect()->route('dashboard.manage.dashboard');
        } else {
            abort('400', 'This link is expired or not valid');
        }
    }

    public function render()
    {
        return view('livewire.account.consume.verify-email')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function verifyEmail()
    {
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
}
