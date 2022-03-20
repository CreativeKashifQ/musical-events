<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OfferReceivedNotification extends Notification
{
    use Queueable;
    public $service,$offer;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($service,$offer)
    {
        $this->service = $service;
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
                    ->subject('Offer received on '. ' ' .$this->service->name)
                    ->line('Offer Details : ')
                    ->line('Offer Price/h : ' . ' $' .$this->offer->rate)
                    ->line('Service Detail : ')
                    ->line('Service Price/h : ' . '$'. $this->offer->service->hourly_rate)
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
