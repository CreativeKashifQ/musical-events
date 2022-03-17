<?php

namespace App\Helpers;

use Livewire\Component;

class  Toaster extends Component {

    public static function alert($type,$message,$code)
    {
        $this->dispatchBrowserEvent('alert',
        ['type' => 'success',  'message' => 'Updated Successfully!']);
    }
}
