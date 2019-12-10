<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!*/



Route::get('/', function () {
    return view('home');
});

/*Route::get("/", "produitController@index");

Route::get("/produits/{id}", function($id) {
    return "Je suis le produit $id";
});

*/
Route::get("/commentaire/{id}", "commentsController@show");
Route::get("/backoffice", "BackofficesController@back");
Route::get("/conteneur", function(){
    return view('conteneur');
});
//Enregistrenemt personnes et edit
Route::get("/acceuil", "HomeController@acceuil")->name('acceuil');
Route::get("/create", "PersonneController@create")->name('ajout_employers');
Route::post("personne/create", "PersonneController@store")->name('ajout_employer');
Route::get('acceuil/{id}/edit',"PersonneController@edit")->name("edit_employer");
Route::patch('update/{id}/edit', 'PersonneController@update')->name('update_employer');

//Enregistrement Conges /update / edit and delete
Route::get("/vuconge", "CongeController@vuconge")->name('vuconge');
Route::get("/createconge", "CongeController@createconge")->name('planifier_conge');
Route::post("Conges/createconge", "CongeController@store")->name('Conges');
//updateConges
Route::patch('updateconges/{id}/edit', 'CongeController@updateconges')->name('updateconges');
Route::get('vuconge/{id}/editconge',"CongeController@editconge")->name("edit_conge");
//======Supression Conge =========//
Route::delete('Conges/{id}',"CongeController@destroy");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//La supprission
Route::delete('personne/{id}',"PersonneController@destroy");
