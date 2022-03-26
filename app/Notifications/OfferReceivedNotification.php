<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OfferReceivedNotification extends Notification
{
    use Queueable;
    public $venue,$offer;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($venue,$offer)
    {
        $this->venue = $venue;
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
                    ->subject('Offer received on '. ' ' .$this->venue->name)
                    ->line('Offer Details : ')
                    ->line('Offer Price/h : ' . ' $' .$this->offer->rate)
                    ->line('Venue Detail : ')
                    ->line('Venue Price/h : ' . '$'. $this->offer->service->hourly_rate)
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
