<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HallController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ShowtimeController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PriceController;

Route::get('/', function () {
    return view('welcome');
});

Route::get( '/hello', function () {
    return view(  'hello', ['title' => 'hello world']);
});

Route::get('/halls', [HallController::class, 'index'])->name('halls.index');
Route::get('/halls/{id}', [HallController::class, 'show'])->name('halls.show');

Route::get('/seats', [SeatController::class, 'index'])->name('seats.index');
Route::get('/seats/{id}', [SeatController::class, 'show'])->name('seats.show');

Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show');

Route::get('/showtimes', [ShowtimeController::class, 'index'])->name('showtimes.index');
Route::get('/showtimes/{id}', [ShowtimeController::class, 'show'])->name('showtimes.show');

Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
Route::get('/tickets/{id}', [TicketController::class, 'show'])->name('tickets.show');

Route::get('/prices', [PriceController::class, 'index'])->name('prices.index');
Route::get('/prices/{id}', [PriceController::class, 'show'])->name('prices.show');
Route::get('/tickets/{id}', [TicketController::class, 'show'])->name('tickets.show');

Route::get('/halls/{id}', [HallController::class, 'show'])->name('halls.show');
