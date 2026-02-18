<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
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
    return view('welcome');
  
});
// Admin Dashboard
Route::group(['middleware' => ['auth','role:super-admin'] ], function () {
    // Home
    Route::get('/admin/home', [HomeController::class, 'index'])->name('admin.dashboard');
    // Post
    
    Route::livewire('/posts/create', 'pages::post.create')->name('post.create');




});
 

require __DIR__.'/auth.php';


Route::feeds();
