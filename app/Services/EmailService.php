<?php
namespace App\Services;

use Illuminate\Support\Facades\Mail;

class EmailService
{
    public function sendEmail($to, $subject, $message)
    {
        Mail::raw($message, function ($mail) use ($to, $subject) {
            $mail->to($to)->subject($subject);
        });
    }
}
