<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ConcertController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/concert', [ConcertController::class, 'getConcert'])->name('concert');

Route::middleware(['auth'])->group(function () {
    Route::get('/ticket', [TicketController::class, 'getMyTicket'])->name('myTicket');
    Route::post('/ticket/buy', [TicketController::class, 'buyTicket'])->name('buyTicket');
});
