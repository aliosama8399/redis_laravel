<?php
use App\Mail\MailtrapExample;
use Illuminate\Support\Facades\Mail;
function sendMail($template, $to, $subject, $data)
{
    info('hi');
    info($subject);
    info($to);


    \Mail::send($template,$data->toArray(), function($message) use( $to,$subject ){
        $message -> subject($subject);
        $message -> to($to);
    });
}
