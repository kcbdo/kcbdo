<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Entrar;
use App\Http\Controllers\Cadastrar; 

Route::get('/', function () {
    return view('welcome');
});


"teste";

Route::get('/contact', function () 
{
    return view('contact');
});

Route::get('/produtos', function ()
{
    $busca = request ('search');


    return view('products', ['busca' => $busca]);
});

Route::get('/produtos_teste/{id?}', function ($id = null)  
{
    return view('product', ['id'=> $id]);
});

Route::get('/', [EventController::class, 'index']); 
Route::get('/events/create', [EventController::class, 'create']); 


Route::get('/entrar', [Entrar::class, 'entrar']); 
Route::get('/cadastrar', [Cadastrar::class, 'cadastrar']); 
Route::post('/events', [EventController::class, 'store']); 
