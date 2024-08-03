<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use Illuminate\Support\Facades\DB;

class ProduitController extends Controller
{


    public function affiche(){

      $produitexemple1=Produit::all();
      /*  $produitexemple2 = Produit::get();
       //$produitexemple3 = DB::select('produits')->get(); */
      //  dd($produitexemple2->all());
        return view('affiche',compact('produitexemple1'));
    }





}
