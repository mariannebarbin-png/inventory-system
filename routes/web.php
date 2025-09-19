<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facade\Route;

Route::get('/', funstion(){
           return view('welcome');
});

Route::get('/dashboard', function(){
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(funstion(){
    Route::get('/profile',[ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile',[ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile',[ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Admin-only routes
Routes::middleware(['auth', 'role:admin'])->group(funtion(){
    Route::resource('item', App\Http\Controllers\ItemController::class);
});

require_DIR_.'/auth.php';
