<?php

namespace App\Http\Livewire\Payment\Manage;

use Livewire\Component;

class StripeOnboardFail extends Component
{

    public function render()
    {
        return view('livewire.payment.manage.stripe-onboard-fail')->layout('layouts.cms');
    }
}
