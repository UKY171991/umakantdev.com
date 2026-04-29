<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Contact;

use Illuminate\Mail\Mailables\Address;

class ContactNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    /**
     * Create a new message instance.
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $siteName = \App\Models\Setting::get('site_name', 'ThinkBiz');
        $adminEmail = \App\Models\Setting::get('site_email', 'admin@umakantdev.com');
        
        return new Envelope(
            from: new Address(config('mail.from.address'), $siteName),
            to: [
                new Address($adminEmail, $siteName . ' Administrator'),
            ],
            replyTo: [
                new Address($this->contact->email, $this->contact->first_name . ' ' . $this->contact->last_name),
            ],
            subject: 'New Website Inquiry from ' . $this->contact->first_name . ' (' . $this->contact->project_type . ')',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-notification',
            text: 'emails.contact-notification-text',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
