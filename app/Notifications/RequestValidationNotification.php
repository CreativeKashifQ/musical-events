<?php

namespace App\Notifications;

use App\Models\RequestValidator;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RequestValidationNotification extends Notification
{
    use Queueable;

    public $type,$link;
    public function __construct($link, $type)
    {
        $this->link = $link;
        $this->type = $type;
    }


    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $message = new MailMessage;

        switch ($this->type) {
            case RequestValidator::EMAIL_VERIFICATION:
                $message->line('We received an email verification request from your account. Follow the link to veify you email');
                $message->action('Notification Action', url($this->link));
                $message->line('Thank you for using our application!');
                break;
            default:
                $message->line('Email format not defined');
        }

        return $message;
    }

    // public function toNexmo()
    // {
    //     // otp for mobile
    // }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
