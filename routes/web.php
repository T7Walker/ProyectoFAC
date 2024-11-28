<?php

use App\Http\Controllers\Register;
use App\Http\Controllers\Login;
use App\Http\Controllers\Profile;
use App\Http\Controllers\MainPage;
use Illuminate\Support\Facades\Route;

Route::get('/register', [Register::class, 'index'])->name('register.index');
Route::post('/register/save-user', [Register::class, 'store'])->name('register.saveUser');

Route::get('/login', [Login::class, 'index'])->name('login.index');
Route::post('/login/check', [Login::class, 'login'])->name('login.check');
Route::post('/logout', [Login::class, 'logout'])->name('login.logout');

Route::get('/', [MainPage::class, 'index'])->name('mainPage.index');

Route::post('/profile/updateData', [Profile::class, 'update'])->name('profile.updateData');
Route::post('/profile/delUser', [Profile::class, 'deleted'])->name('profile.delUser');








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
