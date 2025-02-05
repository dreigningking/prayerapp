<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactFormAutoReply extends Notification implements ShouldQueue
{
    use Queueable;

    protected $contactData;

    /**
     * Create a new notification instance.
     */
    public function __construct($contactData)
    {
        $this->contactData = $contactData;
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
            ->subject('We received your message - Gbeya')
            ->greeting('Hello ' . $this->contactData['name'] . '!')
            ->line('Thank you for contacting Gbeya. We have received your message and will get back to you as soon as possible.')
            ->line('For your reference, here is a copy of your message:')
            ->line('Category: ' . $this->contactData['type'])
            ->line('Message:')
            ->line($this->contactData['message'])
            ->line('If you need immediate assistance, please check our FAQ section or support documentation.')
            ->action('Visit Our Help Center', url('/help'))
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