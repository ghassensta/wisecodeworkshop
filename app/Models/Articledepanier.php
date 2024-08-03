<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Panier;
use App\Models\Produit;

class articledepanier extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_produit', 'panier_id', 'produit_id', 'quantite', 'prix'
    ];

    public function panier(){

        return $this->belongsTo(Panier::class);
    }

    public function produit(){

        return $this->belongsTo(Produit::class);
    }
}





