<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('backend.home');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ---------------------------Categories:---------------------------

// Route::resource('categorie',"App\Http\Controllers\CategoriesController");
Route::get('/categorie',"App\Http\Controllers\CategoriesController@index");
Route::Post('/categorie/store',"App\Http\Controllers\CategoriesController@store");
Route::put('/categorie/update',"App\Http\Controllers\CategoriesController@update");
Route::delete('/categorie/delete/{id}',"App\Http\Controllers\CategoriesController@destroy");


// ---------------------------Produits:---------------------------

Route::get('/produit',"App\Http\Controllers\ProduitsController@index");
Route::Post('/produit/store',"App\Http\Controllers\ProduitsController@store");
Route::get('/produit/show/{id}',"App\Http\Controllers\ProduitsController@show");
Route::put('/produit/update/{id}',"App\Http\Controllers\ProduitsController@update");
Route::delete('/produit/delete/{id}',"App\Http\Controllers\ProduitsController@destroy");


// ---------------------------Contact:---------------------------

// Route::resource('contact',"App\Http\Controllers\ContactController");
Route::get('/contact',"App\Http\Controllers\ContactController@index");
Route::Post('/contact/store',"App\Http\Controllers\ContactController@store");
Route::get('/contact/show/{id}',"App\Http\Controllers\ContactController@show");
Route::delete('/contact/delete/{id}',"App\Http\Controllers\ContactController@destroy");


// ---------------------------Commandes:---------------------------

Route::get('/commandes',"App\Http\Controllers\CommandesController@index");
Route::Post('/commandes/store',"App\Http\Controllers\CommandesController@store");
Route::delete('/commandes/delete/{id}',"App\Http\Controllers\CommandesController@destroy");


// ---------------------------Services:---------------------------

Route::get('/services',"App\Http\Controllers\ServicesController@index");
Route::Post('/services/store',"App\Http\Controllers\ServicesController@store");
Route::put('/services/update/{id}',"App\Http\Controllers\ServicesController@update");
Route::delete('/services/delete/{id}',"App\Http\Controllers\ServicesController@destroy");
Route::get('/services/show/{id}',"App\Http\Controllers\ServicesController@show");



// ----------------------------------------------------------------- Admin: -----------------------------------------------------------------


// ---------------------------Produits:---------------------------

Route::get('/admin/produit',"App\Http\Controllers\Controller@index");
// Route::get('/admin/produit/create',"App\Http\Controllers\Controller@create");
Route::Post('/admin/produit/store',"App\Http\Controllers\Controller@store");
Route::get('/admin/produit/show/{id}',"App\Http\Controllers\Controller@show");
Route::get('/admin/produit/edit/{id}',"App\Http\Controllers\Controller@edit");
Route::put('/admin/produit/update/{id}',"App\Http\Controllers\Controller@update");
Route::delete('/admin/produit/delete/{id}',"App\Http\Controllers\Controller@destroy");

// ---------------------------Contact:---------------------------

Route::get('/admin/contact',"App\Http\Controllers\Controller@indexContact");
Route::Post('/admin/contact/store',"App\Http\Controllers\Controller@storeContact");
Route::get('/admin/contact/show/{id}',"App\Http\Controllers\Controller@showContact");
Route::delete('/admin/contact/delete/{id}',"App\Http\Controllers\Controller@destroyContact");

// ---------------------------Services:---------------------------

Route::get('/admin/services',"App\Http\Controllers\Controller@indexServ");
Route::get('/admin/services/create',"App\Http\Controllers\Controller@createServ");
Route::Post('/admin/services/store',"App\Http\Controllers\Controller@storeServ");
Route::get('/admin/services/edit/{id}',"App\Http\Controllers\Controller@editServ");
Route::put('/admin/services/update/{id}',"App\Http\Controllers\Controller@updateServ");
Route::delete('/admin/services/delete/{id}',"App\Http\Controllers\Controller@destroyServ");

// ---------------------------Commandes:---------------------------

Route::get('/admin/commandes',"App\Http\Controllers\Controller@indexCmd");
Route::get('/admin/commandes/show',"App\Http\Controllers\Controller@showCmd");
Route::Post('/admin/commandes/store',"App\Http\Controllers\Controller@storeCmd");
Route::delete('/admin/commandes/delete/{id}',"App\Http\Controllers\Controller@destroyCmd");


Route::get('/admin',"App\Http\Controllers\Controller@homeAdmin");

