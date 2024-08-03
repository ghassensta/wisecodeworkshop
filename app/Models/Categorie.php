<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produit;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = ['nom','description'];

    public function produit(){

        return $this->HasMany(Produit::class);
    }

}
