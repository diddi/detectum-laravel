<?php

namespace App\Mail;

use App\Models\Event;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EventStatusUpdate extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The event instance.
     *
     * @var \App\Models\Event
     */
    public $event;

    /**
     * The status of the event.
     *
     * @var string
     */
    public $status;

    /**
     * Create a new message instance.
     */
    public function __construct(Event $event, string $status)
    {
        $this->event = $event;
        $this->status = $status;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $subject = $this->status === 'approved' 
            ? 'Je evenementvoorstel is goedgekeurd: ' . $this->event->titel
            : 'Update over je evenementvoorstel: ' . $this->event->titel;

        return new Envelope(
            subject: $subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $view = $this->status === 'approved' 
            ? 'emails.event-approved'
            : 'emails.event-rejected';

        return new Content(
            view: $view,
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
