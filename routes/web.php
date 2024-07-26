<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PinjamController;
use App\Http\Controllers\PengembalianController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['guest'])->group(function () {
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});

Route::get('/home', function () {
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/admin/admin', [AdminController::class, 'admin'])->name('dashboard');
    Route::get('/admin/user', [AdminController::class, 'user']);
    Route::get('/logout', [SesiController::class, 'logout'])->name('logout');
});

Route::resource('bukus', BukuController::class);
Route::resource('members', MemberController::class);
Route::resource('pinjams', PinjamController::class);
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::resource('pengembalians', PengembalianController::class);
// Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
