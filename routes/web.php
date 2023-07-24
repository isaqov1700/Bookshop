<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::put('shop', [OrderController::class, 'update'])->name('shop');
    Route::get('orders', [OrderController::class, 'index'])->name('front.order');
    Route::get('book_save', [OrderController::class, 'store'])->name('book_save');
    Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
    Route::put('admin.store', [AdminController::class, 'store'])->name('admin.store');
    Route::get('books', [BookController::class, 'index'])->name('books');
    Route::get('search', [BookController::class, 'search'])->name('search');
    Route::get('new', [BookController::class, 'create'])->name('new');
    Route::get('user', [UserController::class, 'index'])->name('user');
    Route::put('book.store', [BookController::class, 'store'])->name('book.store');
    Route::get('category', [CategoryController::class, 'index'])->name('category');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
