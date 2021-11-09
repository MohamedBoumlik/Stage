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
        $msg->save();
        return redirect()->back();
        
    }
    
}
