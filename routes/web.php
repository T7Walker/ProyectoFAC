<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;

use App\Http\Controllers\MapsController;

use App\Http\Controllers\BooksController;

use App\Http\Controllers\PublicationsController;

use App\Http\Controllers\BusesController;

use App\Http\Controllers\ZonesController;

use App\Http\Controllers\ScalesController;



route::get('/Publications/Principal',[PublicationsController::class,'Principal']);
route::get('/Users/Principal',[UsersController::class,'Principal']);
