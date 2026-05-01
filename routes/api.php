<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Admin\CategoriaController;
use App\Http\Controllers\Api\Admin\UserController;
use App\Http\Controllers\Api\Admin\EmpresaController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\client\EmpresaController as EmpresaClient;
use App\Http\Controllers\Api\FrontController;

Route::prefix('v1')->group(function () {
    ///Public
    //::public
    Route::get('/public/{slug}', [FrontController::class, 'categoria']);
    //::auth
    Route::post('/auth/register', [AuthController::class, 'register']);
    Route::post('/auth/login', [AuthController::class, 'login']);

    ///Private
    Route::group(['middleware'=> 'auth/sanctum'], function () {
        //::auth
        Route::post('/auth/logout', [AuthController::class, 'logout']);
        //::rol client
        Route::apiResource('/client/empresa', EmpresaClient::class);
        //::rol admin
        Route::apiResource('/admin/user', UserController::class);
        Route::apiResource('/admin/categoria', CategoriaController::class);
        Route::apiResource('/admin/empresa', EmpresaController::class);
    });
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
