<?php

namespace App\Http\Controllers;

use App\Models\Commandes;
use App\Models\Categories;
use App\Models\Produits;
use Illuminate\Http\Request;
use Cart;


class CommandesController extends Controller
{

    public function store(Request $request)
    {        
        $produit_id = $request->produit_id;
        $quantite = $request->quantite;
        $content = Cart::getContent();
        $countCmd = count($content);

        for ($i=0; $i <$countCmd ; $i++)
        {
            $cmd = new Commandes;
            $cmd -> client_name = $request->client_name;
            $cmd -> client_email = $request->client_email;
            $cmd -> client_tel = $request->client_tel;
            $cmd -> produit_id = $produit_id[$i];
            $cmd -> quantite = $quantite[$i];
            $cmd -> etat = $request->etat;
            $cmd->save();
            
        }
        
        return redirect('/panier')->with('addCmd','Votre commande effectuée avec succès ');
    }
    
    public function destroy($id)
    {   
        
        Cart::remove($id);
        return redirect()->back();
    }
}
