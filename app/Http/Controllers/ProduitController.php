<?php

namespace App\Http\Controllers;

use App\produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index()
    {
        $produits = produit::inRandomOrder()->take(5)->get();

        return  view('welcome')->with('produits',$produits);
    }

    public function show($id)
    {
        $produit = produit::where('id',$id)->firstOrFail();

        return view('show',compact('produit'));
    }
}
