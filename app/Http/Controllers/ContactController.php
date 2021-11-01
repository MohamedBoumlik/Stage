<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $msg = new Contact;
        $msg->name = $request->name;
        $msg->email = $request->email;
        $msg->sujet = $request->sujet;
        $msg->message = $request->message;

        $to_email ="benbazide.0000@gmail.com";

        $title="Message test";
        $message="vous avez un nouveau message sur test:". $msg;
        // $cc="";
        $data = array("body"=>$message);

        Mail::send('mailee', $data, function($message) use ($to_email, $title) {
            $message->to($to_email)->subject($title);
        });

        $msg->save();
        return redirect()->back();
        
    }
    
}
