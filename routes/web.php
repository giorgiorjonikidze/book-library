<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [HomepageController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/authors', [DashboardController::class, 'showAuthors'])->name('dashboard.authors');

Route::delete('/dashboard/{book}', [DashboardController::class, 'destroy'])->name('delete.book');

Route::post('/dashboard/create-author', [DashboardController::class, 'createAuthor'])->name('create.author');