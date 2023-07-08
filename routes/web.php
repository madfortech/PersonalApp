<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SiteTermsController;
use App\Http\Controllers\SitePriviciesController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\ChangePasswordController;

use App\Http\Controllers\ExportController;
use Spatie\Honeypot\ProtectAgainstSpam;
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

Route::middleware(ProtectAgainstSpam::class)->group(function() {
    Auth::routes(
        [
            'register' => false,
            'login' => true,
            'verify' => true,
        ]
    );
});

Route::feeds();

Route::group([
    'prefix' => 'admin', 
    'as' => 'admin.', 
    'namespace' => 'Admin', 
    'middleware' => ['auth', 'role:super-admin'] // <= This is our new middleware
], function () {
    Route::get('admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])
    ->name('admin.home');
    // Post Routes
    Route::resource('admin/posts', PostController::class)->middleware(ProtectAgainstSpam::class)
    ->only(['index','store','create','update','edit','destroy']);
    Route::get('/clear-cache', 'HomeController@clearCache')->name('clearCache');
    Route::get('export', [ExportController::class, 'export'])->name('admin.export');


});	


// Legal
Route::group([
    'prefix' => 'legal', 
    'as' => 'legal', 
], function () {
    // Site Term 
    Route::get('user/siteterms', [App\Http\Controllers\SiteTermsController::class, 'index'])
    ->name('siteterm.index');
    // Site Privicy 
    Route::get('user/siteprivicy', [App\Http\Controllers\SitePriviciesController::class, 'index'])
    ->name('siteprivicy.index');
});	

    Route::get('admin/posts/show/{slug}', [App\Http\Controllers\Admin\PostController::class, 'show'])
    ->name('posts.show');
   


// Legal
Route::group([
    'prefix' => 'legal', 
    'as' => 'legal', 
], function () {
    // Site Term 
    Route::get('user/siteterms', [App\Http\Controllers\SiteTermsController::class, 'index'])
    ->name('siteterm.index');
    // Site Privicy 
    Route::get('user/siteprivicy', [App\Http\Controllers\SitePriviciesController::class, 'index'])
    ->name('siteprivicy.index');
});

// Auth 
Route::group([
    'middleware' => ['auth','verified',ProtectAgainstSpam::class] // <= This is our new middleware
], function () {
    // Profile
    Route::get('admin/admin/profile', [App\Http\Controllers\ProfileController::class, 'edit'])
    ->name('profile.edit');
    Route::post('admin/profile', [App\Http\Controllers\ProfileController::class, 'update'])
    ->name('profile.update');
    // Password
    Route::get('passwords', [App\Http\Controllers\Auth\ChangePasswordController::class, 'edit'])
    ->name('password.edit');
});	

