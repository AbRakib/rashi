<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// frontend routes
Route::get('/', [PostController::class, 'show'])->name('home');
Route::post('/search', [PostController::class, 'search'])->name('search');
Route::get('/details/{slug}', [PostController::class, 'view'])->name('post.view');

Route::get('/privacy-policy', function () {
    return view('pages.privacy');
})->name('privacy');

Route::get('/terms-conditions', function () {
    return view('pages.terms');
})->name('terms');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
// frontend routes

Route::middleware(['guest'])->group(function () {
    // login & Register user
    Route::get('/login-user', [AuthController::class, 'login'])->name('login');
    Route::post('/user-access', [AuthController::class, 'checkLogin'])->name('check');
    Route::get('/login-register', [AuthController::class, 'register'])->name('register');
    Route::post('/user-save', [AuthController::class, 'store'])->name('user.store');

});


//backend routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // post route
    Route::get('/post-list', [PostController::class, 'index'])->name('post.index');
    Route::get('/post-create', [PostController::class, 'create'])->name('post.create');
    Route::post('/post-store', [PostController::class, 'store'])->name('post.store');
    Route::get('/post-edit/{slug}', [PostController::class, 'edit'])->name('post.edit');
    Route::post('/post-update/{slug}', [PostController::class, 'update'])->name('post.update');
    Route::get('/post-delete/{slug}', [PostController::class, 'destroy'])->name('post.delete');

    // logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
//backend routes


// redirect to home when you try to access wrong route
    // Route::any('{query}', function() { return redirect()->route('home'); })->where('query', '.*');