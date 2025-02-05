<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewsletterSubscription extends Notification implements ShouldQueue
{
    use Queueable;

    protected $email;

    /**
     * Create a new notification instance.
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Welcome to Gbeya Newsletter!')
            ->greeting('Welcome to Gbeya!')
            ->line('Thank you for subscribing to our newsletter. We\'re excited to keep you updated with the latest news, features, and tips about tax and accounting management.')
            ->line('What you can expect from our newsletter:')
            ->line('• Latest updates about Gbeya platform')
            ->line('• Tax and accounting tips')
            ->line('• Industry news and insights')
            ->line('• Special offers and promotions')
            ->action('Visit Our Blog', url('/blog'))
            ->line('You can unsubscribe at any time using the unsubscribe link in our emails.')
            ->line('Thank you for choosing Gbeya!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
} 