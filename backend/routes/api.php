<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/books', [BookController::class, 'index']); // Fetch all books
Route::get('/books/{id}', [BookController::class, 'show']); // Get a single book
Route::post('/books', [BookController::class, 'store']); // Add a book
Route::put('/books/{id}', [BookController::class, 'update']); // Edit a book
Route::delete('/books/{id}', [BookController::class, 'destroy']); // Delete a book

