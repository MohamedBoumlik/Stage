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

    public function homeAdmin()
    {
        $cmd = Commandes::all();
        $Contact = Contact::all();
        $Produits = Produits::all();
        $serv = Services::all();
        $countCmd=count($cmd);
        $countProduit=count($Produits);
        $countContact=count($Contact);
        $countServ=count($serv);
        return view('backend.Home',compact('countCmd','countContact', 'countProduit', 'countServ','cmd'));
    }

    // ---------------------------------------------- Produit ---------------------------------------------- 

    public function index()
    {
        $types = Categories::all();
        $prod = Produits::all();
        return view('backend.produits.index',compact('prod','types'));
    }

    // public function create()
    // {
    //     $type = Categories::all();
    //     return view('backend.produits.index', compact('type'));
    // }

    public function store(Request $request)
    {
    
        $prod = new Produits;
        $prod->name = $request->name;
        $prod->prix = $request->prix;
        $prod->description = $request->description;
        $prod->categorie_id = $request->categorie_id;

         //insertion de la photo
         $file = $request->pic;
         $ext = $file->getClientOriginalExtension();
         $filename = time() . ".".$ext;
         $filepath ="storage/public/";
         $file->move($filepath,$filename);
         $prod->pic = $filepath.$filename;

        $prod->save();
        return redirect()->back()->with('addProd','Produit ajouté avec succès');

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
        $prod->prix = $request->prix;
        $prod->description = $request->description;
        $prod->categorie_id = $request->categorie_id;

        $file = $request->pic;
         $ext = $file->getClientOriginalExtension();
         $filename = time() . ".".$ext;
         $filepath ="storage/public/";
         $file->move($filepath,$filename);
         $prod->pic = $filepath.$filename;

        $prod->save();
        return redirect('/admin/produit')->with("editProd","Produit bien modifiée");
    }

    public function destroy($id)
    {
        $prod = Produits::findOrFail($id);
        Produits::destroy($id);
        return redirect()->back()->with("dltProd","Produit supprimé");
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

        // add pic
        $file = $request->pic;
         $ext = $file->getClientOriginalExtension();
         $filename = time() . ".".$ext;
         $filepath ="storage/public/";
         $file->move($filepath,$filename);
         $serv->pic = $filepath.$filename;

        $serv->save();
        return redirect('/admin/services')->with('addServ','Service ajouté avec succès');
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

        // add pic
        $file = $request->pic;
         $ext = $file->getClientOriginalExtension();
         $filename = time() . ".".$ext;
         $filepath ="storage/public/";
         $file->move($filepath,$filename);
         $serv->pic = $filepath.$filename;
        $serv->save();
        return redirect('/admin/services')->with("editServ","Mis à jour avec succés");
    }

    public function destroyServ($id)
    {
        $serv = Services::findOrFail($id);
        Services::destroy($id);
        return redirect()->back()->with("dltServ","Service supprimé");

    }

    // ---------------------------------------------- commandes ---------------------------------------------- 

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
