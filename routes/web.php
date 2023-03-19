<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\ChangePasswordControler;
use App\Http\Controllers\Auth\EditProfileController;
use App\Http\Controllers\UsersController;

// https://hdtuto.com/article/laravel-8-spatie-roles-and-permissions-tutorial
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return View('welcome');
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth','verified']], function () {
    // Change Password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', [App\Http\Controllers\Auth\ChangePasswordController::class, 'edit'])->name('password.edit');
        Route::post('password',  [App\Http\Controllers\Auth\ChangePasswordController::class, 'update'])->name('password.update');
    }
    // Edit Profile
    if (file_exists(app_path('Http/Controllers/Auth/EditProfileController.php'))) {
        Route::get('profile', [App\Http\Controllers\Auth\EditProfileController::class, 'edit'])->name('profile.edit');
        Route::post('profile',  [App\Http\Controllers\Auth\EditProfileController::class, 'update'])->name('profile.update');
    }
});

Auth::routes(
    [
        'register' => true,
        'login' => true,
        'verify' => true,
    ]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home')
    ->middleware(['auth','verified']);

Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);

});