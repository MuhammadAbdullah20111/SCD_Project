<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminController;


Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/products', [PageController::class, 'products']);
Route::get('/login', [PageController::class, 'login']);
Route::get('/register', [PageController::class, 'register']);
Route::get('/products', [PageController::class, 'data'])->name('products.data');


Route::prefix('admin')->name('admin.')->group(function() {
    Route::resource('products', AdminController::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Dashboard Route
Route::get('/Layouts/admin', function () {
    return view('admin.admin'); // Adjust if the view is named differently
})->name('admin.dashboard')->middleware('auth');
Route::get('/layouts/admin', [AdminController::class, 'admin'])->name('admin');

Route::get('/admin/create', [AdminController::class, 'create'])->name('create');
Route::post('/admin/store', [AdminController::class, 'store'])->name('store');
Route::get('/{id}/edit', [AdminController::class, 'edit'])->name('edit');
Route::put('/{id}', [AdminController::class, 'update'])->name('update');
Route::delete('/{id}', [AdminController::class, 'destroy'])->name('destroy');
require __DIR__.'/auth.php';
