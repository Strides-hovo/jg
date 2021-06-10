<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PasswordReset extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public $token;


    public function __construct($token)
    {
        $this->token = $token;
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
         ->greeting('Привет!')

        ->line('Вы получили это письмо, потому что мы получили запрос на сброс пароля для вашей учетной записи.') 
        ->action('Сброс пароля', url('password/reset', $this->token))
        ->line('Если вы не запрашивали сброс пароля, никаких дальнейших действий не требуется.');
    }

    /**
     * Get the array representation of the notification.
     *'trouble-clicking' => 'If you’re having trouble clicking the ":actionText" button, copy and paste the URL below into your web browser:',
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
