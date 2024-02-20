<?php
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\User\UserHomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
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
   
    $post = Post::all();
    return view('welcome',compact('post'));

});
// Admin Dashboard
Route::group(['middleware' => ['auth','role:super-admin'] ], function () {
    // Home
    Route::get('/admin/home', [HomeController::class, 'index'])->name('admin.dashboard');
    // User
    Route::get('/admin/users', [UsersController::class, 'index'])->name('users.index');

    // Posts Routes
    Route::resource('posts', PostController::class)->only([
       'index' ,'create', 'store'
    ]);
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});

// User Dashboard
Route::group(['middleware' => ['auth']], function () {
    
    // User
    Route::get('/user/home', [UserHomeController::class, 'index'])->name('user.dashboard');
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';

Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::feeds();
