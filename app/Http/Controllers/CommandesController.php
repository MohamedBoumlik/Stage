<?php

namespace App\Http\Controllers;

use App\Models\Commandes;
use App\Models\Categories;
use App\Models\Produits;
use Illuminate\Http\Request;

class CommandesController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // foreach($$request-> as $request){

        //     $cmd = new Commandes;
        //     $cmd ->client_name = $request->client_name;
        //     $cmd->client_email = $request->client_email;
        //     $cmd->client_tel = $request->client_tel;
        //     $cmd->produit_id = $request->produit_id;
        //     $cmd->quantite = $request->quantity;
        //     $cmd->etat = $request->etat;
        //     $cmd->save();
        //     // $data= [
        //     //     [$cmd->client_email = $request->client_email],
        //     //     [$cmd ->client_name = $request->client_name],
        //     //     [$cmd->client_tel = $request->client_tel],
        //     //     [$cmd->produit_id = $request->produit_id],
        //     //     [$cmd->quantite = $request->quantity],
        //     //     [$cmd->etat = $request->etat]
        //     // ];
        //     // Commandes::save($data);
        // }
        // return redirect('/');
    }

}
