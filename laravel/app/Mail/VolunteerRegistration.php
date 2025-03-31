<?php

namespace App\Mail;

use App\Models\Volunteer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VolunteerRegistration extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The volunteer instance.
     *
     * @var \App\Models\Volunteer
     */
    public $volunteer;

    /**
     * Whether this is an admin notification.
     *
     * @var bool
     */
    public $isAdminNotification;

    /**
     * Create a new message instance.
     */
    public function __construct(Volunteer $volunteer, bool $isAdminNotification = false)
    {
        $this->volunteer = $volunteer;
        $this->isAdminNotification = $isAdminNotification;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $subject = $this->isAdminNotification 
            ? 'Nieuwe vrijwilliger registratie: ' . $this->volunteer->voornaam . ' ' . $this->volunteer->naam
            : 'Bedankt voor je registratie als vrijwilliger bij Detectum';

        return new Envelope(
            subject: $subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $view = $this->isAdminNotification 
            ? 'emails.volunteer-registration-admin'
            : 'emails.volunteer-registration';

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
