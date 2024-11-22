<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\MapsController;

use App\Http\Controllers\BooksController;

use App\Http\Controllers\PublicationsController;

use App\Http\Controllers\BusesController;

use App\Http\Controllers\ZonesController;

use App\Http\Controllers\ScalesController;

//ruta pagina principal junto a 5 ultimas publicaciones
route::put('/PagesPrincipal',[PublicationsController::class,'principal'])->name('PagePrincipal');
//ruta de los registros de usuarios
route::get('/LoginPages/registrer',[UserController::class,'registrer'])->name('LoginPages.registrer');
//ruta de las publicaciones recientes
route::get('/PagesPrincipal/principal',[PublicationsController::class,'principal'])->name('PagesPrincipal.publication');
//ruta de CRUD publicaciones
route::get('/Publications/allPublication',[PublicationsController::class,'allPublication'])->name('Publications.allPublication');
route::get('/Publications/createInfo',[PublicationsController::class,'infoPublication'])->name('Publications.createInfo');
route::delete('/Publications/{$id}',[PublicationsController::class,'deletePublication'])->name('Publication.delete');
route::post('/Publications/{$id}',[PublicationsController::class,'viewPublication'])->name('Publications.viewPublication');
route::post('/Publications/{$id}/editPublication',[PublicationsController::class,'editPublication'])->name('Publications.edit');
route::post('/Publications/{$id}',[PublicationsController::class,'updatePublication'])->name('Publications.updatePublication');




