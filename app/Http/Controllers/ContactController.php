<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $msg = Contact::all();
    //     return view('contact', compact('msg'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $msg = new Contact;
        $msg->name = $request->name;
        $msg->email = $request->email;
        $msg->sujet = $request->sujet;
        $msg->message = $request->message;

        $to_email ="boumlik.mohamed.19@gmail.com";

        $title="Message test";
        $message="vous avez un nouveau message sur test:". $msg;
        // $cc="";
        $data = array("body"=>$message);

        Mail::send('mail', $data, function($message) use ($to_email, $title) {
            $message->to($to_email)->subject($title);
        });

        $msg->save();
        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    
}
