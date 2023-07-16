<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $job;
    /**
     * Create a new message instance.
     */
    public function __construct($user, $job)
    {
        $this->user = $user;
        $this->job = $job;
    }
    public function build()
    {
        $job = $this->job;
        return $this->subject('Job Vacancy Politeknik Penerbangan Surabaya')->view('mail');
    }
}
