<?php

namespace App\Http\Controllers;

use App\Models\Produits;
use App\Models\Services;
use App\Models\Contact;
use App\Models\Categories;
use Illuminate\Http\Request;
use Mail;
use Cart;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $prod = Produits::paginate(4);
        $serv = Services::paginate(3);
        $cat = Categories::all();
        $content = Cart::getContent();
        $countCmd = count($content);
        // $categ = Categories::all();
        return view('home',compact('prod', 'serv','cat','countCmd'));
        // return view('home');
    }

    
    public function showServ($id)
    {
        $serv = Services::findOrFail($id);
        return view('servShow', compact('serv'));

    }


    // public function store(Request $request)
    // {
    //     $msg = new Contact;
    //     $msg->name = $request->name;
    //     $msg->email = $request->email;
    //     $msg->sujet = $request->sujet;
    //     $msg->message = $request->message;

    //     // $to_email="mohamed.boumlik.19@gmail.com";
    //     // $title="Message test";
    //     // $message="vous avez un nouveau message sur test:". $msg;

    //     // // $cc="";
    //     // $data = array("body"=>$message);

    //     // Mail::send('mail', $data, function($message) use ($to_email, $title) {
    //     //     $message->to($to_email)->subject($title);
    //     // });
    

    //     $to_email ="achouqfi@gmail.com";

    //     $title="Message safi surf club";
    //     $message="vous avez un nouveau message sur safi surf club:". $msg;
    //     // $cc="";
    //     $data = array("body"=>$message);

    //     Mail::send('mail', $data, function($message) use ($to_email, $title) {
    //         $message->to($to_email)->subject($title);
    //     });
    //     $msg->save();
    
    //     return redirect()->back();
    // }


    public function show($id)
    {
        $serv = Services::findOrFail($id);
        return view('servShow', compact('serv')); 
    }

    public function showProd($id)
    {
        $prod = Produits::findOrFail($id);
        return view('prodShow', compact('prod'));

    }

    public function add(Request $request ,$id){
        $produit= Produits::find($request->id) ;
        Cart::add(array(
            'id' => $produit->id, // inique row ID
            'name' => $produit->name,
            'price' => $produit->prix,
            'quantity' => 1,
            'photo' => array($produit->path) ,
            'attributes' => array()
        ));
        return redirect('/');

    }

    public function panier(){
        $content = Cart::getContent();
        $countCmd = count($content);
        return view('panier',compact('content','countCmd'));
    }

}
