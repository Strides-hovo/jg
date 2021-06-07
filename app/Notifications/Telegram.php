<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;

class Telegram extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public $details = [];

    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        // return ['mail'];
        return [TelegramChannel::class];
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
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
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



    public function toTelegram($notifiable)
    {
        $url = url('/home' );
        $url1 = url('telegram' ) . '/' . $this->details['id'] . '/ok';
        $url2 = url('telegram' ) . '/' . $this->details['id'] . '/no';

        return TelegramMessage::create()
            // Optional recipient user id.
//             ->to($notifiable->telegram_user_id)
            // Markdown supported.
            ->content("Запрос регистрация в сайта\n 
            имя {$this->details['name']} \n 
            Почта {$this->details['email']} \n 
            месенджер {$this->details['messenger']} \n 
            логин {$this->details['messenger_login']}")
            
            // (Optional) Blade template for the content.
            // ->view('notification', ['url' => $url])
            
            // (Optional) Inline Buttons
            ->button('Принять', $url1)
            ->button('Отказать', $url2);
    }







}
