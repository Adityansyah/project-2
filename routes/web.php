<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CRUDController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return redirect()->route('home.dashboard');
});

Route::get('crud', [CRUDController::class, "index"])->name("post.index");
Route::post('crud', [CRUDController::class, "post"])->name("post.store");
Route::get('create', [CRUDController::class, "create"]);
Route::delete('destroy/{id}', [CRUDController::class, "destroy"])->name("post.destroy");
Route::get('edit/{id}', [CRUDController::class, "edit"])->name("post.edit");
Route::put('update/{id}', [CRUDController::class, "update"])->name("post.update");

// loged in
Route::group([
    'middleware' => ['auth:web'],
    'prefix' => 'h',
    'as' => 'home.',
], function () {
    Route::view('dashboard', 'admin.home.apps.dashboard')->name('dashboard');
    Route::view('post/create-new', 'admin.home.content.menu.post.create-new')->name('create-new');
    Route::view('post/all-post', 'admin.home.content.menu.post.all-post')->name('all-post');
    Route::view('my/profile', 'admin.home.content.menu.profile.my-account')->name('profile');
});

// not login yet
Route::group(
    [
        'middleware' => ['guest:web'],
        'prefix' => 'auth',
        'as' => 'auth.'
    ],
    function () {
        Route::view('login', 'admin.auth/login')->name("login");
        Route::view('register', 'admin.auth/register')->name("register");
    }
);
