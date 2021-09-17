<?php

namespace App\Notifications;

use App\Models\Task;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;
class SampleNotification extends Notification
{
    use Queueable;

    public $task;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject("A Task Added: " . $this->task->title)
            ->greeting($this->task->title)
            ->line($this->task->description)
            ->action(__('View'), route('tasks.show', $this->task));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }

    // public function toWebPush($notifiable, $notification)
    // {
    //     return (new WebPushMessage())
    //         ->title($this->task->title)
    //         ->body($this->task->description)
    //         ->action('Open', route('tasks.show', $this->task));
    // }

    // public function toTelegram($notifiable)
    // {
    //     return TelegramMessage::create()
    //         // Optional recipient user id.
    //         ->to("596310835")
    //         // Markdown supported.
    //         ->content("**" . $this->task->description . "**")

    //         // (Optional) Blade template for the content.
    //         // ->view('notification', ['url' => $url])

    //         // (Optional) Inline Buttons
    //         ->button('View Task', route('tasks.show', $this->task));
    // }
}
