<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
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


route::get('/home', [AdminController::class, 'index']);

route::get('/books_page', [AdminController::class, 'books_page']);
route::get('/book_page', [AdminController::class, 'book_page']);

route::post('/add_books', [AdminController::class, 'add_books']);

route::get('/book_delete/{id}', [AdminController::class, 'book_delete']);
route::get('/book_update/{id}', [AdminController::class, 'book_update']);

route::post('/update_book/{id}', [AdminController::class, 'update_book']);

