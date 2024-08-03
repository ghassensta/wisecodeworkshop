<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Panier extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'total_price'];

    public function panier(){

        return $this->HasOne(User::class);
    }
}
