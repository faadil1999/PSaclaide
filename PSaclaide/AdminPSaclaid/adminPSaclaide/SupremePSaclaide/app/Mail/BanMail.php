<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BanMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(String $name)
    {
        
        $this->name = $name;
        //
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Ban Mail',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
       
        $title = "Vous avez ete ban";
        $content ="Salut {$this->name} .Je suis désolé de vous informer que votre compte a été banni en raison de nombreuses plaintes émanant d'autres utilisateurs concernant votre comportement sur notre plateforme. Nous prenons très au sérieux les préoccupations de nos utilisateurs et sommes donc contraints de prendre des mesures appropriées pour protéger notre communauté. Si vous avez des questions ou souhaitez contester cette décision, veuillez contacter notre équipe de support.";
        return new Content(
            view: 'mails.decision_mail',
            with:[
                'title' => $title,
                'content'=>$content
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
