<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produit;
use App\Models\Commande;

class Lignedecommande extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_produit', 'commande_id', 'produit_id', 'nom_produit', 'quantite', 'prix',
    ];

    public function produit()
    {
        return $this->belongsTo(Produit::class, 'produit_id');
    }

    public function commande()
    {
        return $this->belongsTo(Commande::class, 'commande_id');
    }
}



