<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Models\Post;
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
    $posts = Post::latest()->get();
    return view('welcome', compact('posts'));
});


Auth::routes(
    [
        'register' => true,
        'login' => true,
        'verify' => true,
    ]
);

Route::group([
    'prefix' => 'admin', 
    'as' => 'admin.', 
    'namespace' => 'Admin', 
    'middleware' => ['auth', 'role:super-admin'] // <= This is our new middleware
], function () {
    Route::get('admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])
    ->name('admin.home');
    // Post Routes
    Route::resource('admin/posts', PostController::class)
    ->only(['store','create','update','edit','destroy']);
});	

   
    Route::get('admin/posts/show/{post}', [App\Http\Controllers\Admin\PostController::class, 'show'])
    ->name('posts.show');


Route::group([
    'middleware' => ['auth'] // <= This is our new middleware
], function () {
    // Setting
    Route::get('/account', [App\Http\Controllers\SettingController::class, 'index'])
    ->name('account.index');
    // Profile
    Route::get('admin/admin/profile', [App\Http\Controllers\ProfileController::class, 'edit'])
    ->name('profile.edit');
    Route::post('admin/profile', [App\Http\Controllers\ProfileController::class, 'update'])
    ->name('profile.update');
    // Password
    Route::get('passwords', [App\Http\Controllers\Auth\ChangePasswordController::class, 'edit'])
    ->name('password.edit');
});	

