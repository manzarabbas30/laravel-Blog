<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\welcomeMail;

class mailController extends Controller
{
    function sendmail(Request $req)
    {

        $to=$req->input('to');
        $subject=$req->input('subject');
        $msg=$req->input(key: 'msg');
        
        try {
            Mail::to($to)->send(new  welcomeMail($msg, $subject));
            return "Message sent successfully.";
        } catch (\Exception $e) {
            return "Failed to send message. Error: " . $e->getMessage();
        }
    }
}
