<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Produits;
use App\Models\Categories;
use App\Models\Contact;
use App\Models\Services;
use App\Models\Commandes;
use Illuminate\Http\Request;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware('auth');
    }

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
        return view('backend.produits.index')->with('addProd','Produit ajouté avec succès');

    }

    public function show($id)
    {
        $prod = Produits::findOrFail($id);
        return view('backend.produits.show', compact('prod'));

    }

    public function edit($id)
    {
        $prod = Produits::findOrFail($id);
        $type = Categories::all();
        return view('backend.produits.edit', compact('prod','type'));
    }

    public function update(Request $request, $id)
    {
    
        $prod = Produits::findOrFail($id);
        $prod->name = $request->name;
        $prod->pic = $request->pic;
        $prod->description = $request->description;
        $prod->categorie_id = $request->type;
        $prod->save();
        return view('backend.produits.index',compact('prod'))->with("editProd","Mis à jour avec succés");
    }

    public function destroy($id)
    {
        $prod = Produits::findOrFail($id);
        Produits::destroy($id);
        return redirect()->back()->with("dltprod","Produit supprimé");
    }

    // ---------------------------------------------- Contact ---------------------------------------------- 

    public function indexContact()
    {
        $msg = Contact::all();
        return view('backend.contact.index',compact('msg'));
    }

    public function showContact($id)
    {
        $msg = Contact::findOrFail($id);
        return view('backend.contact.show', compact('msg'));    
    }

    public function destroyContact($id)
    {
        $msg = Contact::findOrFail($id);
        Contact::destroy($id);
        return redirect()->back()->with("dltmsg","Message supprimé");
    }

    // ---------------------------------------------- Service ---------------------------------------------- 

    public function indexServ()
    {
        $serv = Services::all();
        return view('backend.services.index', compact('serv'));
    }

    public function createServ()
    {
        return view('backend.services.create');
    }

    public function storeServ(Request $request)
    {
        $serv = new Services;
        $serv->titre = $request->titre; 
        $serv->description = $request->description;
        $serv->save();
        return view('backend.services.index')->with('addServ','Service ajouté avec succès');
    }

    public function editServ($id)
    {
        $serv = Services::findOrFail($id);
        return view('backend.services.edit',compact('serv'));
    }

    public function updateServ(Request $request, $id)
    {
        $serv = Services::findOrFail($id);
        $serv->titre = $request->titre; 
        $serv->description = $request->description;
        $serv->save();
        return view('backend.services.index',compact('serv'))->with("editServ","Mis à jour avec succés");
    }

    public function destroyServ($id)
    {
        $serv = Services::findOrFail($id);
        Services::destroy($id);
        return redirect()->back()->with("dltServ","Service supprimé");

    }

    // ---------------------------------------------- Service ---------------------------------------------- 

    public function indexCmd()
    {
        $cmd = Commandes::all();
        return view('backend.commandes.index', compact('cmd'));
    }

    public function showCmd($id)
    {
        $cmd = Commandes::findOrFail($id);
        return view('backend.commandes.show', compact('cmd'));

    }

    public function destroyCmd($id)
    {
        $cmd = Commandes::findOrFail($id);
        Commandes::destroy($id);
        return redirect()->back()->with("dltCmd","Service supprimé");
    }
}
