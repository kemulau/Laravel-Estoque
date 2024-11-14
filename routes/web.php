<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; //add
use App\Http\Controllers\TesteController;
use App\Http\Controllers\Cliente;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\GoogleLoginController;

Route::get('cadastrarCliente', [Cliente::class,'create']);
Route::post('cadastrarCliente', [Cliente::class,'store']);

Route::resource('categorias', CategoriaController::class); 
Route::get('/', function(){
    return view('login');
});

Route::get('google/redirect', [GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('auth/google/callback', [GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');

Route::get('/', function(){
    return view('login');
});









/* Route::get('/', [TesteController::class,'home']);

Route::get('/faleconosco', [TesteController::class,'faleconosco']);

Route::get('/galeria', [TesteController::class,'galeria']); */