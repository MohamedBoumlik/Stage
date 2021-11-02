<?php

namespace App\Http\Controllers;

use App\Models\Produits;
use App\Models\Services;
use App\Models\Contact;
use App\Models\Categories;
use Illuminate\Http\Request;
use Mail;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $prod = Produits::all();
        $serv = Services::all();
        $cat = Categories::all();
        // $categ = Categories::all();
        return view('home',compact('prod', 'serv','cat'));
        // return view('home');
    }

    public function store(Request $request)
    {
        $msg = new Contact;
        $msg->name = $request->name;
        $msg->email = $request->email;
        $msg->sujet = $request->sujet;
        $msg->message = $request->message;

        // $to_email="mohamed.boumlik.19@gmail.com";
        // $title="Message test";
        // $message="vous avez un nouveau message sur test:". $msg;

        // // $cc="";
        // $data = array("body"=>$message);

        // Mail::send('mail', $data, function($message) use ($to_email, $title) {
        //     $message->to($to_email)->subject($title);
        // });
    

        $to_email ="achouqfi@gmail.com";

        $title="Message safi surf club";
        $message="vous avez un nouveau message sur safi surf club:". $msg;
        // $cc="";
        $data = array("body"=>$message);

        Mail::send('mail', $data, function($message) use ($to_email, $title) {
            $message->to($to_email)->subject($title);
        });
        $msg->save();
    
        return redirect()->back();
    }
}
