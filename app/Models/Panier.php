<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Commande;
use App\Models\Articledepanier;

class Panier extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'total_price'];

    public function user(){

        return $this->HasOne(User::class);
    }

    public function commande(){

        return $this->HasOne(Commande::class);
    }

    public function articledepanier(){

        return $this->HasMany(Articledepanier::class);
    }
}
