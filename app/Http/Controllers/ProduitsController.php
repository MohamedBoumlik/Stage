<?php

namespace App\Http\Controllers;

use App\Models\Produits;
use App\Models\Services;
use App\Models\Categories;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prod = Produits::all();
        $serv = Services::all();
        return view('home',compact('prod', 'serv', ));
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
    // public function store(Request $request)
    // {
    //     $request -> validate([
    //         'name' => 'required',
    //         'description' => 'required',
    //     ]);

    //     $prod = new Produits;
    //     $prod->name = $request->name;
    //     $prod->pic = $request->pic;
    //     $prod->description = $request->description;
    //     $prod->categorie_id = $request->type;
    //     $prod->save();
    //     return response()->json($prod);

    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $prod = Produits::findOrFail($id);
    //     // return response()->json($prod);

    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    public function edit(Produits $produits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $prod = Produits::findOrFail($id);
    //     $prod->name = $request->name;
    //     $prod->pic = $request->pic;
    //     $prod->description = $request->description;
    //     $prod->categorie_id = $request->type;
    //     $prod->save();
    //     // return response()->json($prod);
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produits  $produits
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $prod = Produits::findOrFail($id);
    //     Produits::destroy($id);
    //     // return response()->json('done');
    // }
}
