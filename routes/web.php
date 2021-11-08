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

// ---------------------------Panier:---------------------------

Route::post('/panier/add/{id}','App\Http\Controllers\HomeController@add');
Route::get('/panier','App\Http\Controllers\HomeController@panier');
Route::post('/panier/confirmation','App\Http\Controllers\CommandesController@store');
Route::get('/commandes/delete/{id}',"App\Http\Controllers\CommandesController@destroy");

// ---------------------------Produits:---------------------------

Route::get('/',"App\Http\Controllers\HomeController@index");
// Route::Post('/produit/store',"App\Http\Controllers\HomeController@store");
Route::get('/produit/show/{id}',"App\Http\Controllers\HomeController@showProd");
Route::put('/produit/update/{id}',"App\Http\Controllers\ProduitsController@update");
Route::delete('/produit/delete/{id}',"App\Http\Controllers\ProduitsController@destroy");


// // ---------------------------Contact:---------------------------

// Route::resource('contact',"App\Http\Controllers\ContactController");
Route::get('/contact',"App\Http\Controllers\ContactController@index");
Route::Post('/contact/store',"App\Http\Controllers\HomeController@store");
Route::get('/contact/show/{id}',"App\Http\Controllers\ContactController@show");
Route::delete('/contact/delete/{id}',"App\Http\Controllers\ContactController@destroy");


// // ---------------------------Commandes:---------------------------

// Route::get('/commandes',"App\Http\Controllers\CommandesController@index");
// Route::Post('/commandes/store',"App\Http\Controllers\CommandesController@store");
Route::delete('/commandes/delete/{id}',"App\Http\Controllers\CommandesController@destroy");


// // ---------------------------Services:---------------------------

// Route::get('/services',"App\Http\Controllers\ServicesController@index");
// Route::Post('/services/store',"App\Http\Controllers\ServicesController@store");
// Route::put('/services/update/{id}',"App\Http\Controllers\ServicesController@update");
// Route::delete('/services/delete/{id}',"App\Http\Controllers\ServicesController@destroy");
Route::get('/services/show/{id}',"App\Http\Controllers\HomeController@showServ");



// ----------------------------------------------------------------- Admin: -----------------------------------------------------------------

Route::get('/admin',"App\Http\Controllers\Controller@homeAdmin")->middleware('auth');

// ---------------------------Produits:---------------------------

Route::get('/admin/produit',"App\Http\Controllers\Controller@index")->middleware('auth');
// Route::get('/admin/produit/create',"App\Http\Controllers\Controller@create");
Route::Post('/admin/produit/store',"App\Http\Controllers\Controller@store")->middleware('auth');
Route::get('/admin/produit/show/{id}',"App\Http\Controllers\Controller@show")->middleware('auth');
Route::get('/admin/produit/edit/{id}',"App\Http\Controllers\Controller@edit")->middleware('auth');
Route::put('/admin/produit/update/{id}',"App\Http\Controllers\Controller@update")->middleware('auth');
Route::delete('/admin/produit/delete/{id}',"App\Http\Controllers\Controller@destroy")->middleware('auth');

// ---------------------------Contact:---------------------------

Route::get('/admin/contact',"App\Http\Controllers\Controller@indexContact")->middleware('auth');
// Route::Post('/admin/contact/store',"App\Http\Controllers\Controller@storeContact");
Route::get('/admin/contact/show/{id}',"App\Http\Controllers\Controller@showContact")->middleware('auth');
Route::delete('/admin/contact/delete/{id}',"App\Http\Controllers\Controller@destroyContact")->middleware('auth');

// ---------------------------Services:---------------------------

Route::get('/admin/services',"App\Http\Controllers\Controller@indexServ")->middleware('auth');
Route::get('/admin/services/show/{id}',"App\Http\Controllers\Controller@showServ")->middleware('auth');
Route::get('/admin/services/create',"App\Http\Controllers\Controller@createServ")->middleware('auth');
Route::Post('/admin/services/store',"App\Http\Controllers\Controller@storeServ")->middleware('auth');
Route::get('/admin/services/edit/{id}',"App\Http\Controllers\Controller@editServ")->middleware('auth');
Route::put('/admin/services/update/{id}',"App\Http\Controllers\Controller@updateServ")->middleware('auth');
Route::delete('/admin/services/delete/{id}',"App\Http\Controllers\Controller@destroyServ")->middleware('auth');

// ---------------------------Commandes:---------------------------

Route::get('/admin/commandes',"App\Http\Controllers\Controller@indexCmd")->middleware('auth');
Route::get('/admin/commandes/show/{id}',"App\Http\Controllers\Controller@showCmd")->middleware('auth');
Route::Post('/admin/commandes/store',"App\Http\Controllers\Controller@storeCmd")->middleware('auth');
Route::delete('/admin/commandes/delete/{id}',"App\Http\Controllers\Controller@destroyCmd")->middleware('auth');

// ---------------------------Categories:---------------------------

// Route::resource('categorie',"App\Http\Controllers\CategoriesController");
Route::get('/categorie',"App\Http\Controllers\CategoriesController@index")->middleware('auth');
Route::Post('/categorie/store',"App\Http\Controllers\CategoriesController@store")->middleware('auth');
Route::get('/categorie/edit/{id}',"App\Http\Controllers\CategoriesController@edit")->middleware('auth');
Route::put('/categorie/update/{id}',"App\Http\Controllers\CategoriesController@update")->middleware('auth');
Route::delete('/categorie/delete/{id}',"App\Http\Controllers\CategoriesController@destroy")->middleware('auth'); 


