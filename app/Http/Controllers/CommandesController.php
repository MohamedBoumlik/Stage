<?php

namespace App\Http\Controllers;

use App\Models\Commandes;
use App\Models\Categories;
use App\Models\Produits;
use Illuminate\Http\Request;

class CommandesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cmd = Commandes::all();
        // return response()->json($cmd);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cmd = new Commandes;
        $cmd ->client_name = $request->client_name;
        $cmd->client_email = $request->client_email;
        $cmd->client_tel = $request->client_tel;
        $cmd->quantite = $request->quantite;
        $cmd->save();
        // return response()->json($cmd);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commandes  $commandes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cmd = Commandes::findOrFail($id);
        Commandes::destroy($id);
        // return response()->json('done');
    }
}
