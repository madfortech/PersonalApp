<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\TermController;
use App\Http\Controllers\Admin\PrivacyController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\User\SearchController;
use App\Http\Controllers\User\LikeController;
use App\Http\Controllers\User\ChartController;
use App\Http\Controllers\User\PostController;
use App\Http\Controllers\User\CategoryController;
use App\Http\Controllers\User\UserHomeController;
use App\Http\Controllers\User\WatchlistController;
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
   
    // $post = Post::all();
    $post = Post::withRichText()->get();
    return view('welcome',compact('post'));
  
});
// Admin Dashboard
Route::group(['middleware' => ['auth','role:super-admin'] ], function () {
    // Home
    Route::get('/admin/home', [HomeController::class, 'index'])->name('admin.dashboard');
    // User
    Route::get('/admin/users', [UsersController::class, 'index'])->name('users.index');
    Route::get('/admin/users/{id}', [UsersController::class, 'show'])->name('users.show');

    // Posts Routes
    Route::resource('posts', PostController::class)->only([
       'index' ,'create', 'store'
    ]);
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

    // Category
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::delete('/categories/{categories}', [CategoryController::class, 'destroy'])->name('categories.destroy');

    // Archive Post Data
    Route::get('/archive', [ArchiveController::class, 'index'])->name('archive.index');
    Route::delete('/archive/{id}', [ArchiveController::class, 'destroy'])->name('archive.destroy');
    Route::patch('/archive/{id}/show', [ArchiveController::class, 'show'])->name('archive.show');

    // Terms
    Route::get('/terms/{term}/edit', [TermController::class, 'edit'])->name('terms.edit');
    Route::put('/terms/{term}', [TermController::class, 'update'])->name('terms.update');
   

    // Privacy
    Route::get('/privacy/{privacy}/edit', [PrivacyController::class, 'edit'])->name('privacy.edit');
    Route::put('/privacy/{privacy}', [PrivacyController::class, 'update'])->name('privacy.update');
});

// User Dashboard
Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/search', [SearchController::class, 'search'])->name('global-search');  

    // User
    Route::get('/user/home', [UserHomeController::class, 'index'])->name('user.dashboard');
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Like
    Route::post('posts/{id}/like', [LikeController::class, 'like'])->name('posts.like');
    Route::delete('posts/{id}/unlike', [LikeController::class, 'unlike'])->name('posts.unlike');

    // Chart Controller
    Route::get('/chart', [ChartController::class, 'index'])->name('chart.index');

    // Watchlist
    Route::get('/watchlist', [WatchlistController::class, 'index'])->name('watchlist.index');
    Route::post('/add-to-watchlist/{watchlist}', [WatchlistController::class, 'store'])->name('watchlist.store');

});


require __DIR__.'/auth.php';

 
Route::get('/privacy', [PrivacyController::class, 'index'])->name('privacy.index');  
Route::get('/terms', [TermController::class, 'index'])->name('terms.index');  
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::feeds();
