<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ConcertController;
use App\Http\Controllers\ManagementController;
use App\Http\Middleware\AdminAccess;

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
})->name('landing');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/concert', [ConcertController::class, 'getConcert'])->name('concert');

Route::middleware(['auth'])->group(function () {
    Route::get('/ticket', [TicketController::class, 'getMyTicket'])->name('myTicket');
    Route::post('/ticket/buy', [TicketController::class, 'buyTicket'])->name('buyTicket');

    // Management
    Route::middleware([AdminAccess::class])->group(function () {
        Route::get('/buyer', [ManagementController::class, 'getBuyer'])->name('management.buyer');
        Route::get('/buyer/{id}', [ManagementController::class, 'getSingleBuyer'])->name('management.buyer.edit');
        Route::post('/buyer/{id}', [ManagementController::class, 'updateSingleBuyer'])->name('management.buyer.update');
        Route::post('/buyer/delete', [ManagementController::class, 'deleteBuyer'])->name('management.buyer.delete');
        Route::get('/process', [ManagementController::class, 'getProcess'])->name('management.process');
        Route::post('/process', [ManagementController::class, 'postProcess'])->name('management.post.process');
    });
});
