<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//for Admin dashboard
Route::prefix('admin')->middleware(['admin:admin'])->name('admin.')->group(function () {
    Route::get('/login', [AdminController::class, 'adminLogin'])->name('login');

    Route::post('/login', [AdminController::class, 'store'])->name('store');
});

Route::post('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

//admin middleware
// Route::middleware(['auth:admin'])->group(function () {
//     Route::middleware(['auth:sanctum,admin', 'verified'])->name('admin.')->get('/admin/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::middleware(['auth:sanctum,admin', 'verified', 'auth:admin'])->name('admin.')->get('/admin/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//user middleware
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
