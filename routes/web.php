<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\SessionController;
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

Route::view('/login', 'login')->name('view.login');
Route::post('/login', [SessionController::class, 'login'])->name('login');
Route::post('/logout', [SessionController::class, 'logout'])->middleware('auth')->name('logout');

Route::middleware(['auth'])->group(function () {
	Route::controller(BookController::class)->group(function () {
		Route::prefix('dashboard/books')->group(function () {
			Route::get('/', 'index')->name('show.books');
			Route::delete('/{book}', 'destroy')->name('delete.book');
			Route::post('/create', 'create')->name('create.book');
			Route::get('/edit-book/{book}', 'edit')->name('edit.book');
			Route::put('/update-book/{book}', 'update')->name('update.book');
		});
	});
    Route::controller(AuthorController::class)->group(function () {
		Route::prefix('dashboard/authors')->group(function () {
			Route::get('/', 'index')->name('show.authors');
			Route::post('/create', 'create')->name('create.author');
		});
	});
});
