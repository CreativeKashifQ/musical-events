<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ModalMessage extends Component
{

    public $mode,$icon,$title,$message,$backUrl,$backurlText,$nextUrl,$nexturlText,$textColor,$show,$type;

    public function __construct($type=null, $mode = null, $icon = null, $title = null , $message = null, $backUrl = null, $backurlText=null,$nextUrl = null, $nexturlText= null,$textColor=null,$show = false)
    {
        $this->type = $type;
        $this->mode = $mode;
        $this->icon = $icon;
        $this->title = $title;
        $this->message = $message;
        $this->backUrl = $backUrl;
        $this->backurlText = $backurlText;
        $this->nextUrl = $nextUrl;
        $this->nexturlText = $nexturlText;
        $this->textColor = $textColor;
        $this->show = $show;

    }


    public function render()
    {
        return view('components.modal-message');
    }
}
