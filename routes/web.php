<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/api/events', [EventController::class, 'getEvents'])->name('events.api');

Route::get('/', function () {
    return view('autentikasi.login');
});

Route::get('/events/index', [EventController::class, 'index'])->name('events.index');
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');
Route::get('/events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::put('/events/{id}', [EventController::class, 'update'])->name('events.update');
Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');

Route::get('/dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index');
// Route::get('/dashboard/create', [EventController::class, 'create'])->name('dashboard.create');
// Route::post('/events', [EventController::class, 'store'])->name('events.store');
// Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');
// Route::get('/events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
// Route::put('/events/{id}', [DashboardController::class, 'update'])->name('events.update');
Route::delete('/events/{id}', [DashboardController::class, 'destroy'])->name('dashboard.destroy');