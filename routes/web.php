<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\User\SessionController;
use Illuminate\Support\Facades\Route;
use App\Models\Post; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $posts = Post::with('user')->get();
    return view('welcome', ['posts' => $posts]);

});
// Admin Dashboard
Route::group(['middleware' => ['auth','role:super-admin'] ], function () {
    Route::get('/admin', function () {
        return view('admin.home');
    })->name('admin.dashboard');
    // Posts Routes
    Route::resource('posts', PostController::class)->only([
        'create', 'store'
    ]);
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});

// User Dashboard
Route::group(['middleware' => ['auth']], function () {
    Route::get('/user', function () {
        return view('dashboard');
    })->name('user.dashboard');
    //Sessions
    Route::get('/user/login-activity', [SessionController::class, 'index'])->name('login.activity');

    
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');
Route::feeds();
