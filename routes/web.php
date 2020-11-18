<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FavoriteController;


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//rotas
Route::get ('/favorites',[FavoriteController::class, 'index']);
Route::post ('/createFavorite',[FavoriteController::class, 'store']);
Route::get ('/favorites/{type}',[FavoriteController::class, 'getType']);
Route::delete ('/deleteFavorite', [FavoriteController::class, 'delete'])->name ('delete');


Route::get ('/{type}/{page}', [App\Http\Controllers\ConsumeApiController::class,'getApi'])->name ('getApi');
