<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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


Route::get('/', [UserController::class, 'index']);
Route::get('/', [UserController::class, 'home']);

Route::get('/approve/{id}', [AdminController::class, 'approve'])->name('approve')->middleware('auth');
Route::get('/cancel/{id}', [AdminController::class, 'cancel'])->name('cancel')->middleware('auth');
Route::get('/delete/{id}', [UserController::class, 'delete'])->name('delete')->middleware('auth');

Route::middleware('auth')->group(function(){
    Route::prefix('redirect/')->group(function () {
        Route::get('', [UserController::class, 'index']);
        Route::get('book', [UserController::class, 'book'])->name('book');
        Route::post('add_book', [UserController::class, 'add_book'])->name('add_book');
        Route::get('room', [UserController::class, 'room'])->name('room');
        Route::get('class', [AdminController::class, 'Aroom'])->name('Aroom');
        Route::get('orders', [AdminController::class, 'orders'])->name('orders');
        Route::post('add_class', [AdminController::class, 'add_class'])->name('add_class');
        Route::get('trainers', [AdminController::class, 'trainers'])->name('trainers');
        Route::get('all_trainers', [AdminController::class, 'all_trainers'])->name('all_trainers');
        Route::post('add_trainers', [AdminController::class, 'add_trainers'])->name('add_trainers');
        
    });
});







Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
