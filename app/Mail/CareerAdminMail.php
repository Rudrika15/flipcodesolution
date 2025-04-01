<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CareerAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $ccAddresses;
    public $attachmentPath;

    /**
     * Create a new message instance.
     */
    public function __construct($user, $ccAddresses = [], $attachmentPath = null)
    {
        $this->user = $user;
        $this->ccAddresses = $ccAddresses;
        $this->attachmentPath = $attachmentPath;
    }

    public function build()
    {
        $email = $this->markdown('visitor.emails.careerAdmin')
                      ->subject(config('app.name') . ', Contact us');
        
        if (!empty($this->ccAddresses)) {
            $email->cc($this->ccAddresses);
        }

        if ($this->attachmentPath) {
            $email->attach($this->attachmentPath);
        }

        return $email;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Application from ' . $this->user->fullname . ' - ' . config('app.name'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'visitor.emails.careerAdmin',  // Ensure this view path is correct
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return $this->attachmentPath
            ? [Attachment::fromPath($this->attachmentPath)]
            : [];
    }
}
