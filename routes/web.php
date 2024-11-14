<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\MapsController;

use App\Http\Controllers\BooksController;

use App\Http\Controllers\PublicationsController;

use App\Http\Controllers\BusesController;

use App\Http\Controllers\ZonesController;

use App\Http\Controllers\ScalesController;

//ruta de los registros de usuarios
route::get('/LoginPages/registrer',[UserController::class,'registrer'])->name('LoginPages.registrer');
//ruta de las publicaciones recientes
route::get('/PagesPrincipal/principal',[PublicationsController::class,'registrer'])->name('PagesPrincipal.publication');
//ruta de crear publicaciones
route::get('/Publications/createPost',[PublicationsController::class,'infoPublication'])->name('Publications.infoPublication');
route::get('/Publications/createPost',[PublicationsController::class,'createPublication'])->name('Publications.createPost');


