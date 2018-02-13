<?php

namespace App\Notifications;

use App\Application;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class UserApplication extends Notification
{
    use Queueable;

    private $application;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Application $application)
    {
        $this->application = $application;
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
                    ->subject('Se ha procesado su solicitud')
                    ->greeting('Saludos, '.$notifiable->name)
                    ->line('Hemos recibido su solicitud de inscripción en la '. mb_strtolower($this->application->promotion->title, 'UTF-8'))
                    ->line('Aquí te dejamos el codigo de tu solicitud: '. $this->application->code)
                    ->line('Te esperamos en nuestras oficinas, se te solicitará el codigo para culminar la inscripción')
                    ->action('Ver solicitud', url('/'))
                    ->line('Gracias por preferirnos. Club Atletico Boral');
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
