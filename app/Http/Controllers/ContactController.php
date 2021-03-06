<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function receipt(Request $in)
    {
        $title = $in->demand;
        if (empty($in->observation)) {
            $in->observation = "Nenhuma";
        }
        $content = [
            "name" => $in->name,
            "email" => $in->email,
            "phone" => $in->phone,
            "demand" => $in->demand,
            "observation" => $in->observation,
        ];

        Mail::send('emails.contact', ['title' => $title, 'content' => $content], function ($message) use ($in) {
            $message->subject("[Contato pelo site]");
            $message->from('suporte@modeon.co', 'Modeon Devhouse');
            $message->to($in->email);
            $message->cc('suporte@modeon.co');
        });
        return response()->json(['status' => 1, 'message' => 'Request completed']);
    }
}
