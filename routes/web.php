<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CRUDController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('crud', [CRUDController::class, "index"])->name("post.index");
Route::post('crud', [CRUDController::class, "post"])->name("post.store");
Route::get('create', [CRUDController::class, "create"]);
Route::delete('destroy/{id}', [CRUDController::class, "destroy"])->name("post.destroy");
Route::get('edit/{id}', [CRUDController::class, "edit"])->name("post.edit");
Route::put('update/{id}', [CRUDController::class, "update"])->name("post.update");

// loged in
Route::group([
    // 'middleware' => 'auth',
    'prefix' => 'h',
    'as' => 'home.',
], function () {
    Route::view('dashboard', 'admin.home.apps.dashboard')->name('dashboard');
});

// not login yet
Route::group(
    [
        'middleware' => 'web',
        'prefix' => 'auth',
        'as' => 'auth.'
    ],
    function () {
        Route::view('login', 'admin.auth/login')->name("login");
        Route::view('register', 'admin.auth/register')->name("register");
    }
);
