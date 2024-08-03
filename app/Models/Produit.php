<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;
use App\Models\ArticleDePanier;
use App\Models\Lignedecommande;

class Produit extends Model
{
    use HasFactory;

    protected $fillable=["categorie_id","nom","description","prix","quantiteEnStock"];

    public function categorie(){

        return $this->belongsTo(Categorie::class);
    }

    public function articledepanier(){

        return $this->HasMany(ArticleDePanier::class);
    }

    public function lignedecommande(){

        return $this->HasMany(Lignedecommande::class);
    }
}






