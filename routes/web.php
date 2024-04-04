<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController          :: class, 'index']);
Route :: group(['prefix' => 'user'], function () {
    Route ::get('/',          [UserController ::class, 'index']);
    Route :: post('/list',    [UserController :: class, 'list']);
    Route ::get('/create',    [UserController :: class, 'create']);
    Route :: post('/',        [UserController :: class, 'store']);
    Route ::get('/{id}',      [UserController :: class, 'show']);
    Route ::get('/{id}/edit', [UserController :: class, 'edit']); // menampilkan halaman form edit user
    Route ::put('/{id}',      [Usercontroller :: class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
    });

Route::group(['prefix' => 'level'], function(){
        Route::get('/',            [LevelController::class, 'index']);
        Route::post('/', [LevelController          ::class, 'store']);
        Route::post('/list', [LevelController      ::class, 'list']);
        Route::get('/create', [LevelController     ::class, 'create']);
        Route::post('/store', [LevelController     ::class, 'store']);
        Route::get('/{id}', [LevelController       ::class, 'show']);
        Route::get('/{id}/edit', [LevelController  ::class, 'edit']);
        Route::put('/{id}/update', [LevelController::class, 'update']);
        Route::delete('/{id}', [LevelController    ::class, 'destroy']);
    });