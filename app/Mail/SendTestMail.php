<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class SendTestMail extends Mailable
{
    use Queueable, SerializesModels;

   

    /**
     * Create a new message instance.
     *
     * @return void
     */


    public function __construct($post)
    {
        $this->post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
                ->subject('確認のお願い')
                ->view('emails.applicant_message')
                ->text('emails.applicant_message')
                // ->to('******@*****.com')//ここに確認者の名前とメールアドレスが記載されるように設定
                ->from('test@test.com')//ここに申請者の名前とメールアドレスが記載されるように設定
                ->with(['post'=>$this->post]);
            
                
    }
}
