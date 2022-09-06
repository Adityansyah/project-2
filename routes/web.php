<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CRUDController;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('crud', [CRUDController::class, "index"])->name("post.index");
Route::post('crud', [CRUDController::class, "post"])->name("post.store");
Route::get('create', [CRUDController::class, "create"]);
Route::delete('destroy/{id}', [CRUDController::class, "destroy"])->name("post.destroy");
Route::get('edit/{id}', [CRUDController::class, "edit"])->name("post.edit");
Route::put('update/{id}', [CRUDController::class, "update"])->name("post.update");



Route::view('dashboard', 'home.apps.dashboard')->name("dashboard");

Route::group(
    [
        'middleware' => 'web',
        'prefix' => 'auth',
        'as' => 'auth.'
    ],
    function () {
        Route::view('login', 'auth/login')->name("login");
        Route::view('register', 'auth/register')->name("register");
    }
);
