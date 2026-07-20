<?php

use App\Http\Controllers\Map;
use App\Http\Controllers\Login;
use App\Http\Controllers\Profile;
use App\Http\Controllers\MainPage;
use App\Http\Controllers\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\PublicationController;

/*
    Rutas públicas (accesibles sin autenticación)
*/

// Registro
Route::get('/register', [Register::class, 'index'])->name('register.index');
Route::post('/register/save-user', [Register::class, 'store'])->name('register.saveUser');

// Login
Route::get('/login', [Login::class, 'index'])->name('login.index');
Route::post('/login/check', [Login::class, 'login'])->name('login.check');
Route::post('/logout', [Login::class, 'logout'])->name('login.logout');

// Página principal (pública pero con datos condicionales)
Route::get('/', [MainPage::class, 'index'])->name('mainPage.index');

/*
    Rutas protegidas (requieren autenticación)
*/
Route::middleware('auth')->group(function () {

    // Perfil de usuario
    Route::post('/profile/updateData', [Profile::class, 'update'])->name('profile.updateData');
    Route::post('/profile/delUser', [Profile::class, 'deleted'])->name('profile.delUser');

    // Publicaciones
    Route::get('Publications/allPublication', [PublicationController::class, 'all'])->name('Publications.allPublication');
    Route::get('Publications/viewPublication/{id}', [PublicationController::class, 'show'])->name('Publications.viewPublication');
    Route::get('Publications/createPost', [PublicationController::class, 'create'])->name('Publications.createPost');
    Route::post('Publications/infoPublication', [PublicationController::class, 'store'])->name('Publications.infoPublication');
    Route::get('Publications/editPublication/{id}', [PublicationController::class, 'edit'])->name('Publications.editPublication');
    Route::delete('Publications/deletePublication/{id}', [PublicationController::class, 'destroy'])->name('Publications.deletePublication');
    Route::post('Publications/updatePublication/{id}', [PublicationController::class, 'update'])->name('Publications.updatePublication');

    // Libros
    Route::get('Books/allBooks', [BooksController::class, 'all'])->name('Books.allBooks');
    Route::get('Books/viewBooks/{id}', [BooksController::class, 'show'])->name('Books.viewBooks');
    Route::get('Books/pushBooks', [BooksController::class, 'push'])->name('Books.pushBook');
    Route::post('Books/infoBooks', [BooksController::class, 'store'])->name('Books.infoBook');
    Route::get('Books/editBooks/{id}', [BooksController::class, 'edit'])->name('Books.editBooks');
    Route::delete('Books/deleteBook/{id}', [BooksController::class, 'destroy'])->name('Books.deleteBook');
    Route::post('Books/updateBook/{id}', [BooksController::class, 'update'])->name('Books.updateBook');

    // Mapa
    Route::get('/map', [Map::class, 'index'])->name('map.mainPage');
});