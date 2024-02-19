<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CatagoryController;
use Illuminate\Support\Facades\Route;

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



// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth','verified')->group(function () {
    // User Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy'); 
    // Catagory
    Route::post('/catagory/add', [CatagoryController::class, 'create'])->name('catagory.add');
    Route::get('/catagory', [CatagoryController::class, 'show'])->name('catagory');
    Route::get('/catagory', [CatagoryController::class, 'edit'])->name('catagory.edit');
    Route::patch('/catagory', [PageController::class, 'update'])->name('catagory.update');
    Route::delete('/catagory/{id}', [PageController::class, 'destroy'])->name('catagory.destroy');
    Route::get('/catagory',[PageController::class,'Portfolio'])->name('catagory');
    // Portfolio
    Route::get('/portfolio', [PageController::class, 'edit'])->name('portfolio.edit');
    Route::patch('/portfolio', [PageController::class, 'update'])->name('portfolio.update');
    Route::delete('/portfolio', [PageController::class, 'destroy'])->name('portfolio.destroy');
    Route::get('/portfolios',[PageController::class,'Portfolio'])->name('portfolios');
    // Blog
    Route::get('/blog', [PageController::class, 'edit'])->name('blog.edit');
    Route::patch('/blog', [PageController::class, 'update'])->name('blog.update');
    Route::delete('/blog', [PageController::class, 'destroy'])->name('blog.destroy');
    Route::get('/blogs',[PageController::class,'Portfolio'])->name('blogs');
    // Contact Messages
    Route::delete('/messages', [PageController::class, 'destroy'])->name('messages.destroy');
    Route::get('/messages',[PageController::class,'Portfolio'])->name('messages');

});

require __DIR__.'/auth.php';


// Fontend
Route::get('/', function () {
    return view('fontend/index');
});
// Blog Page
Route::get('/blog',[PageController::class,'blogPage'])->name('blog');
// Blog Page
Route::get('/single_blog',[PageController::class,'SingleBlog'])->name('single_blog');
