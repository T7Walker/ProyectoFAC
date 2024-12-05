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
    Todo lo del registro, recuerda que:
    - Get es para enviar datos.
    - Post es para recibir e interpretar los datos. Ya sea en js o en controllers.
 */

Route::get('/register', [Register::class, 'index'])->name('register.index'); // Solo es el formulario
Route::post('/register/save-user', [Register::class, 'store'])->name('register.saveUser'); // Manda los datos del formulario para interpretarse.

/*
    Todo lo de login
 */
Route::get('/login', [Login::class, 'index'])->name('login.index'); // Vista del login y formulario
Route::post('/login/check', [Login::class, 'login'])->name('login.check'); // Revision del login y autenticacion
Route::post('/logout', [Login::class, 'logout'])->name('login.logout'); // Cerrar sesion del usuario

/*
    Todo de la pagina principal
*/
Route::get('/', [MainPage::class, 'index'])->name('mainPage.index'); // Vista de la pagina principal.

/*
    Todo lo del perfil
*/
Route::post('/profile/updateData', [Profile::class, 'update'])->name('profile.updateData'); // Envia los cambios hechos del perfil para interpretarse.
Route::post('/profile/delUser', [Profile::class, 'deleted'])->name('profile.delUser'); // Enviar datos de eliminacion para interpretarse.

/*
    Todo lo de publicaciones
*/
Route::get('Publications/allPublication', [PublicationController::class, 'all'])->name('Publications.allPublication'); //todas las publicaciones
Route::get('Publications/viewPublication/{id}', [PublicationController::class, 'show'])->name('Publications.viewPublication'); //ver la publicacion
Route::get('Publications/createPost', [PublicationController::class, 'create'])->name('Publications.createPost'); //pagina para crear publicaciones
Route::post('Publications/infoPublication', [PublicationController::class, 'store'])->name('Publications.infoPublication'); //formulario de la publicacion
Route::get('Publications/editPublication/{id}', [PublicationController::class, 'edit'])->name('Publications.editPublication'); //editar publicaion
Route::delete('Publications/deletePublication/{id}', [PublicationController::class, 'destroy'])->name('Publications.deletePublication'); //borrar publicacion
Route::post('Publications/updatePublication/{id}', [PublicationController::class, 'update'])->name('Publications.updatePublication'); //actualizar publicacion
/*
    Todo lo de libros
*/
Route::get('Books/allBooks', [BooksController::class, 'all'])->name('Books.allBooks'); //pagina para ver todos los libros
Route::get('Books/viewBooks/{id}', [BooksController::class, 'show'])->name('Books.viewBooks'); //pagina para ver los libros
Route::get('Books/pushBooks', [BooksController::class, 'push'])->name('Books.pushBook'); //pagina para subir libros
Route::post('Books/infoBooks', [BooksController::class, 'store'])->name('Books.infoBook'); //formulario para subir libros
Route::get('Books/editBooks/{id}', [BooksController::class, 'edit'])->name('Books.editBooks'); //editar libro
Route::post('Books/deleteBook/{id}', [BooksController::class, 'destroy'])->name('Books.deleteBook');//borrar libro
Route::post('Books/updateBook/{id}', [BooksController::class, 'update'])->name('Books.updateBook'); //actualizar libro

/*
    Todo del mapa
*/
Route::get('/map', [Map::class, 'index'])->name('map.mainPage');

