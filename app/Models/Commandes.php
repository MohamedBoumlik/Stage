<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    use HasFactory;

    public function CmdProduits () {

        return $this-> hasMany ("App\Models\Produits")->get();
    
    }

}
