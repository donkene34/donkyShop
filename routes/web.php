<?php

use Illuminate\Support\Facades\Route;
use Gloudemans\Shoppingcart\Facades\Cart;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/videpanier', function () {
    // return view('welcome');
    Cart::destroy();
});

// routes panier
Route::get('/panier','CartController@index')->name('cart.index');
Route::post('/panier/ajouter','CartController@store')->name('cart.store');
Route::delete('/panier/{rowId}','CartController@destroy')->name('cart.destroy');


// routes produits
Route::get('/','ProduitController@index')->name('produit.index');
Route::get('/{id}','ProduitController@show')->name('produit.show');

