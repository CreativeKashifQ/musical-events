<?php

namespace App\Traits;

trait ModalMessage
{

    public $modalMessage, $message, $title, $mode, $backUrl;

    public function showModalMessage($mode, $title, $message, $backUrl)
    {
        $this->mode = $mode;
        $this->title = $title;
        $this->message = $message;
        $this->backUrl = $backUrl;
        $this->modalMessage = true;
    }

    public function hideModalMessage()
    {
        $this->showModal = false;
    }
}
