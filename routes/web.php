<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;


//un usuario acceda a la URL "/..", Laravel llamará al método "...." en la clase "MenuController", 
//que debería devolver la vista.

Route::get('/', [MenuController::class,'landing'])->name('landing');

Route::get('/calendario', [MenuController::class, 'calendario'])->name ('calendario');


Route::get('/carreras', [MenuController::class, 'carreras'])->name('carreras');



