<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ServiceAcceptOrDeclineNotification extends Notification
{
    use Queueable;
    public $offer, $status;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($offer,$status)
    {
        $this->offer = $offer;
        $this->status = $status;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
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
        if($this->status == 'decline'){
            return (new MailMessage)
            ->subject('Offer Declined')
            ->line('Please proceed to resend offer')
            ->action('Get Started', url('https://app.popuplive.net'))
            ->line('Thank you for using our application!');
        }else{
            return (new MailMessage)
            ->subject('Offer Accepted! ')
            ->line('Please proceed to payment')
            ->action('Get Started', url('https://app.popuplive.net'))
            ->line('Thank you for using our application!');
        }

    }

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
