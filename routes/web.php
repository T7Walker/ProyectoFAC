<?php

use App\Http\Controllers\Register;
use App\Http\Controllers\Login;
use App\Http\Controllers\Profile;
use App\Http\Controllers\MainPage;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

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
Route::get('Publications/allPublication', [PublicationController::class, 'all'])->name('Publications.Publication'); //todas las publicaciones
Route::get('Publications/viewPublication/{id}',  [PublicationController::class, 'show'])->name('Publications.viewPublication'); //ver la publicacion
Route::get('Publications/createPost', [PublicationController::class, 'create'])->name('Publications.createPost'); //pagina para crear publicaciones
Route::post('Publications/infoPublication', [PublicationController::class, 'store'])->name('Publications.infoPublication'); //formulario de la publicacion
Route::post('Publications/editPublication/{id}', [PublicationController::class, 'edit'])->name('Publications.editPublication'); //editar publicaion
Route::post('Publications/deletePublication/{id}', [PublicationController::class, 'destroy'])->name('Publications.deletePublication'); //borrar publicacion
/*
	Todo lo de libros
*/
Route::get('Books/allBooks', [BooksController::class, 'all'])->name('Books.allBooks'); //pagina para ver todos los libros 

Route::get('Books/viewBooks/{id}', [BooksController::class, 'show'])->name('Books.viewBooks'); //pagina para ver los libros

Route::get('Books/pushBooks', [BooksController::class, 'push'])->name('Books.pushBook'); //pagina para subir libros

Route::post('Books/infoBooks', [BooksController::class, 'store'])->name('Books.infoBook'); //formulario para subir libros

Route::post('Books/editBooks/{id}', [BooksController::class, 'edit'])->name('Books.editBooks'); //editar libro

Route::post('Books/deleteBook/{id}', [BooksController::class, 'destroy'])->name('Books.deleteBook');//borrar libro


/* Codigo antiguo guardado por si algo  */

// use App\Http\Controllers\UserController;
// use App\Http\Controllers\BooksController;
// use App\Http\Controllers\PublicationsController;
// use App\Http\Controllers\ImagesController;
// use App\Http\Controllers\AuthController;

// // Página principal junto con 5 publicaciones recientes
// Route::get('/PagesPrincipals/principal', [PublicationsController::class, 'principal'])->name('PagesPrincipals.principal');

// // Grupo de rutas para CRUD de Publicaciones
// Route::prefix('Publications')->name('Publications.')->group(function () {
//     Route::get('allPublication', [PublicationsController::class, 'allPublication'])->name('allPublication');
//     Route::get('createInfo', [PublicationsController::class, 'infoPublication'])->name('createInfo');
//     Route::delete('/{id}', [PublicationsController::class, 'deletePublication'])->name('delete');
//     Route::post('/{id}', [PublicationsController::class, 'viewPublication'])->name('viewPublication');
//     Route::post('/{id}/editPublication', [PublicationsController::class, 'editPublication'])->name('edit');
//     Route::put('/{id}', [PublicationsController::class, 'updatePublication'])->name('update');
// });

// // Grupo de rutas para CRUD de Libros
// Route::prefix('Books')->name('Books.')->group(function () {
//     Route::get('allBooks', [BooksController::class, 'allBooks'])->name('allBooks');
//     Route::get('pushBooks', [BooksController::class, 'storeBook'])->name('pushBooks');
//     Route::delete('/{id}', [BooksController::class, 'deleteBook'])->name('delete');
//     Route::post('/{id}', [BooksController::class, 'viewBook'])->name('viewBooks');
//     Route::post('/{id}/editBooks', [BooksController::class, 'editBooks'])->name('editBooks');
//     Route::put('/{id}', [BooksController::class, 'updateBooks'])->name('updateBooks');
// });

// // Grupo de rutas para CRUD de Usuarios
// Route::prefix('Users')->name('Users.')->group(function () {
//     Route::get('navBar', [UserController::class, 'yourProfile'])->name('yourProfile');
//     Route::delete('/{id}', [UserController::class, 'closeProfile'])->name('closeProfile');
//     Route::post('/{id}/editProfile', [UserController::class, 'editProfile'])->name('editProfile');
//     Route::put('/{id}', [UserController::class, 'updateProfile'])->name('Users.updateProfile');
// });

// // Ruta para subir imágenes
// Route::post('/upload', [ImagesController::class, 'store'])->name('upload.image');

// // Grupo de rutas para autenticación
// Route::middleware(['auth'])->group(function () {
//     Route::get('/LoginPages/registrer', [AuthController::class, 'showRegisterForm'])->name('LoginPages.registrer');
//     Route::post('/LoginPages/record', action: [AuthController::class, 'register']);
//     Route::get('/LoginPages/login', [AuthController::class, 'showLoginForm'])->name('LoginPages.login');
//     Route::post('/login', [AuthController::class, 'login']);
//     Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// });
