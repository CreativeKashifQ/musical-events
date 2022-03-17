<?php

namespace App\Http\Livewire\Payment\Manage;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use App\Models\Payment;

class ConnectStripe extends Component
{
    use AuthorizesRequests;

    /*
    |--------------------------------------------------------------------------
    | Public Data
    |--------------------------------------------------------------------------
    | This data will be visible to client. Don't instantiate any instance of a class
    | containing sensitive information
    */

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

    public function mount()
    {
    }

    public function render()
    {
        return view('livewire.payment.manage.connect-stripe')->layout('layouts.cms');
    }


    /*
    |--------------------------------------------------------------------------
    | Methods
    |--------------------------------------------------------------------------
    | User defined methods like, register, verify or load
    */

    public function connectStripe()
    {
        //Access authenticated user
        $user = auth()->user();

        //Set Stripe key
        \Stripe\Stripe::setApiKey(env('STRIPE_TEST_KEY'));

        //Ensure user must have a stripe account for stripe onboarding
        //If user don't have an account then create stripe express account
        //and store account id in user object
        $this->ensureStripeAccountCreated($user);

        //Make request validator for stripe callback, Generate secret
        //and create stripe return & refresh callback links
        $requestValidator = $user->makeRequestValidator('Stripe Connect',$user);
        $secret = $requestValidator->makeSecret();

        $refresh_url = route('payment.manage.stripe_onboard_fail',['fail',$requestValidator,$secret]);
        $return_url = route('payment.manage.stripe_onboard_success',['success',$requestValidator,$secret]);

        //Create stripe connect onboard link
        $accountLink = \Stripe\AccountLink::create([
            'account' => $user->stripe_account,
            'refresh_url' => $refresh_url,
            'return_url' => $return_url,
            'type' => 'account_onboarding'
        ]);

        //Generate account link and redirect to stripe onboarding
        //acountLink = $this->makeAccountLink($user);
        return redirect($accountLink->url);

    }

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |--------------------------------------------------------------------------
    | Class helper functions
    */
    public function ensureStripeAccountCreated($user)
    {
        //Stripe account property is not set means user don't have an account
        if($user->stripe_account == null){
            //Stripe express account with card payments and transfer capabilities
            $account = \Stripe\Account::create([
                'type' => 'express',
                'capabilities' => [
                    'card_payments' => ['requested' => true],
                    'transfers' => ['requested' => true],
                ],
            ]);
            $user->setStripeAccount($account->id);
        }
    }
}
