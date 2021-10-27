<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Produits;
use App\Models\Categories;
use Illuminate\Http\Request;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $prod = Produits::all();
        return view('backend.produits.index',compact('prod'));
    }

    public function create()
    {
        $type = Categories::all();
        return view('backend.produits.create', compact('type'));
    }

    public function store(Request $request)
    {
    
        $prod = new Produits;
        $prod->name = $request->name;
        $prod->pic = $request->pic;
        $prod->description = $request->description;
        $prod->categorie_id = $request->type;
        $prod->save();
        return view('backend.produits.index',compact('prod'));

    }

    public function show($id)
    {
        $prod = Produits::findOrFail($id);
        return view('backend.produits.index', compact('prod'));

    }
}
