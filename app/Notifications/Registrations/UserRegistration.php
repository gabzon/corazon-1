<?php

namespace App\Notifications\Registrations;

use App\Contracts\Registrable;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserRegistration extends Notification
{
    use Queueable;
    public Registrable $model;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Registrable $model)
    {
        $this->model = $model;
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
        $route = strtolower(class_basename($this->model)) . '.show';
        
        return (new MailMessage)
                    ->subject("You have registered for " . $this->model->name)
                    ->greeting('Hi ' . $notifiable->name . '!')
                    ->line('We have notified the organizer your interest for ' . $this->model->name . ' ' . $this->model->type . ' on ' . $this->model->start_date->format('D d F Y'))
                    ->line('Soon they will contact to complet the registration process')
                    ->action('View registration', route($route, $this->model))
                    ->line('Thank you for using corazon!');
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
