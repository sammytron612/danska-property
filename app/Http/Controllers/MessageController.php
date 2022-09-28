<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\Acknowlegement;
use App\Notifications\sendMe;
use Notification;

class MessageController extends Controller
{
    public function message(Request $request)
    {
        $type = $request->type;
        $name = $request->name;
        $subject = $request->subject;
        $message = $request->message;
        $email = $request->email;

        $this->messageMe($type,$name,$subject,$message,$email);


        if($type == 'enquiry')
        {
            $data = ['name' => $name,
                'title' => 'Thanks for your enquiry!',
                'support' => '',
                'support1' => ""
        ];
            Notification::route('mail', [
                $email => $name,
            ])->notify(new Acknowlegement($data));


            return redirect()->back()->with('message', 'Your Message has been sent');


        }

        if($type == 'demo')
        {
            $data = ['name' => $name,
                'title' => 'Thanks for your enquiry to book a demo!',
                'support' => '',
                'support1' => ""
        ];

            Notification::route('mail', [
                    $email => $name,
                ])->notify(new Acknowlegement($data));

                return redirect()->back()->with('message', 'Your request for a demo has been sent');
        }

        if($type == 'support')
        {

            $number = rand(10000,19999);
            $data = ['name' => $name,
                'title' => 'Thanks for contacting support!',
                'support' => "A support ticket has been raised. Your ticket number is $number",
                'support1' => "You can monitor the progress of your support ticket in your portal."
        ];

            Notification::route('mail', [
                $email => $name,
            ])->notify(new Acknowlegement($data));

            return redirect()->back()->with('message', 'Your Support request has been sent');
            }

    }

    public function messageMe($type,$name,$subject,$message,$email)
    {
        $data = ['name' => $name,
                'type' => $type,
                'subject' => $subject,
                'message' => $message,
                'email' => $email];

            Notification::route('mail', [
                'kevin.wilson@kevinlwilson.co.uk',
            ])->notify(new sendMe($data));

            return;
    }
}
