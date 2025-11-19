<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

    Route::middleware("guest")->group(function(){
        // rutas para llegar a la raiz, registro, registrar y para iniciar se
    Route::get('/',[AuthController::class, 'login'])->name('login');
    Route::get('/registro',[AuthController::class, 'registro'])->name('registro');
    Route::post('/registrar',[AuthController::class,'registrar'])->name('registrar');
    Route::post('/logear',[AuthController::class,'logear'])->name('logear');
    });
        // rutas con auth para que no permita entrar si no estamos con sesion iniciada
    Route::middleware("auth")->group(function(){
    Route::get('/home',[AuthController::class,'home'])->name('home');
    Route::post('/logout',[AuthController::class,'logout'])->name('logout');
    Route::get('/usuarios', [AuthController::class, 'usuarios'])->name('usuarios');
    Route::patch('/usuarios/{id}/estado', [AuthController::class, 'cambiarEstado'])->name('usuarios.cambiarEstado');

        // aqui creamos en donde realizara la parte de modificaciones
    Route::get('/create',[AuthController::class,'create'])->name('create');
    Route::post('/store',[AuthController::class,'store'])->name('store');
    Route::get('/show/{id}',[AuthController::class,'show'])->name('show');
    Route::get('/edit/{id}',[AuthController::class,'edit'])->name('edit');
    Route::put('/update/{id}',[AuthController::class,'update'])->name('update');
    Route::delete('/destroy/{id}',[AuthController::class,'destroy'])->name('destroy');

    });

