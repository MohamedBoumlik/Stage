<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    use HasFactory;

    protected $with = ['categorie'];
    public function categorie() {

        return $this-> belongsTo(Categories::class, 'categorie_id', 'id');
        
    }
        
    public function cmd () {
        
        return $this-> belongsTo("App\Models\Commandes")->first();
        
    }

}
