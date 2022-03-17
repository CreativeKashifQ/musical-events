<?php

namespace App\Http\Livewire\Payment\Manage;

use Livewire\Component;
use App\Models\RequestValidator;

class StripeOnboardSuccess extends Component
{
    public function mount($requesteValidator,$secret)
    {

        $validator =  RequestValidator::where('id',$requesteValidator)->first();
        $validate = $validator->isValidSecret($secret);
        if(!$validate){
            return redirect()->back();
        }else{
            $validator->expire();
            return redirect()->route('payment.manage.connect-stripe');
        }
    }
    public function render()
    {
        return view('livewire.payment.manage.stripe-onboard-success')->layout('layouts.cms');
    }
}
