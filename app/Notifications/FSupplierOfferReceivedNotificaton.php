<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class FSupplierOfferReceivedNotificaton extends Notification
{
    use Queueable;

    public $fSupplier,$offer;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($fSupplier,$offer)
    {
      
        $this->fSupplier = $fSupplier;
        $this->offer = $offer;
      
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
        return (new MailMessage)
                    ->subject('Food Supplier '. ' ' .$this->fSupplier->user->name)
                    ->line('Offer received, proceed for bargaining')
                    ->action('Respond to offer', url('https://app.popuplive.net'))
                    ->line('Thank you for using our application!');
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
