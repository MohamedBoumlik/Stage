<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    use HasFactory;

    public function categorie() {

        return $this-> belongsTo("App\Models\Categories")->first();
        
    }
        
    public function cmd () {
        
        return $this-> belongsTo("App\Models\Commandes")->first();
        
    }

}
