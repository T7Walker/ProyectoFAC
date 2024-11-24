<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\MapsController;

use App\Http\Controllers\BooksController;

use App\Http\Controllers\PublicationsController;

use App\Http\Controllers\BusesController;

use App\Http\Controllers\ZonesController;

use App\Http\Controllers\ScalesController;


//
//ruta de la pagina principal junto 5 publicaciones recientes
//
route::get('/PagesPrincipals/principal',[PublicationsController::class,'principal'])->name('PagesPrincipals.principal');
//
//ruta de CRUD publicaciones
//
route::get('/Publications/allPublication',[PublicationsController::class,'allPublication'])->name('Publications.allPublication');
route::get('/Publications/createInfo',[PublicationsController::class,'infoPublication'])->name('Publications.createInfo');
route::delete('/Publications/{$id}',[PublicationsController::class,'deletePublication'])->name('Publication.delete');
route::post('/Publications/{$id}',[PublicationsController::class,'viewPublication'])->name('Publications.viewPublication');
route::post('/Publications/{$id}/editPublication',[PublicationsController::class,'editPublication'])->name('Publications.edit');
route::put('/Publications/{$id}',[PublicationsController::class,'updatePublication'])->name('Publications.updatePublication');
//
//rutas CRUD libros
//
route::get('/Books/allBooks',[BooksController::class,'allBooks'])->name('Books.llBooks');
route::get('/Books/pushBooks',[BooksController::class,'storeBook'])->name('Books.pushBooks');
route::delete('/Books/{$id}',[BooksController::class,'deleteBook'])->name('Books.delete');
route::post('/Books/{$id}',[BooksController::class,'viewBook'])->name('Books.viewBooks');
route::post('/Books/{$id}/editBooks',[BooksController::class,'editBooks'])->name('Books.editBooks');
route::put('/Books/{$id}',[BooksController::class,'updateBooks'])->name('Books.updateBooks');
//
//rutas CRUD libros
//
route::get('/Books/allBooks',[BooksController::class,'allBooks'])->name('Books.llBooks');
route::get('/Books/pushBooks',[BooksController::class,'storeBook'])->name('Books.pushBooks');
route::delete('/Books/{$id}',[BooksController::class,'deleteBook'])->name('Books.delete');
route::post('/Books/{$id}',[BooksController::class,'viewBook'])->name('Books.viewBooks');
route::post('/Books/{$id}/editBooks',[BooksController::class,'editBooks'])->name('Books.editBooks');
route::put('/Books/{$id}',[BooksController::class,'updateBooks'])->name('Books.updateBooks');
//
//rutas CRUD Usuarios
//
route::get('/Users/yourProfile',[UserController::class,'yourProfile'])->name('Users.yourProfile');
route::get('/LoginPages/registrer',[UserController::class,'record'])->name('LoginPages.record');
route::delete('/User/{$id}',[UserController::class,'closeProfile'])->name('Users.closeProfile');
route::post('/Users/{$id}/editProfile',[UserController::class,'editProfile'])->name('Users.editProfile');
route::put('/Users/{$id}',[UserController::class,'updateProfile'])->name('Users.updateProfile');




