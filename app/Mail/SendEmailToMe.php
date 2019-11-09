<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailToMe extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $address = 'lucas.alcantarilla97@gmail.com';//myemail
        $name = 'Lucas Martines';// my name

        $subject = 'Email do cliente '.$this->data['nameOfUser'].'!';
        
       
        return $this->view('email.sendToMe')
                    ->from($address, $name)
                    ->cc($address, $name)
                    ->bcc($address, $name)
                    ->replyTo($address, $name)
                    ->subject($subject)
                    ->with([
                        'content'     => $this->data['content'] ,
                        'nameOfUser'  => $this->data['nameOfUser'] ,
                        'emailOfuser' => $this->data['emailOfuser']
                    ]);

    }
}
