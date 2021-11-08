<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    use HasFactory;

    public function produit () {

        return $this-> belongsTo ("App\Models\Produits")->first();
    
    }

}
