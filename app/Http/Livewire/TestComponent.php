<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TestComponent extends Component
{


    public function go()
    {
        
    }


    public function render()
    {
        return view('livewire.test-component')->layout('layouts.cms');
    }
}
