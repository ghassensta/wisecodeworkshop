<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Panier;
use App\Models\Lignedecommande;

class Commande extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'panier_id',
        'etat',
        'total_prix',
    ];

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function panier(){

        return $this->HasOne(Panier::class);
    }

    public function lignedecommande(){

        return $this->HasMany(Lignedecommande::class);
    }
}


