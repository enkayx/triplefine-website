<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

route::get('/home', [HomeController::class, 'home'])->name('home');
route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/why', [HomeController::class, 'why'])->name('why');
route::get('/testimonial', [HomeController::class, 'testimonial'])->name('testimonial');
route::get('/contact', [HomeController::class, 'contact'])->name('contact');

route::get('/admin/dashboard', [HomeController::class, 'admin'])->middleware(['auth', 'admin']);
