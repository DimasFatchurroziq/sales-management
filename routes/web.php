<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

// Route::get('/', function () {
//     return view('event');
// });

Route::get('/events/index', [EventController::class, 'index'])->name('events.index');; // Untuk membaca data acara
// Route::post('/events', [EventController::class, 'store']); // Untuk menyimpan data acara baru
// Route::put('/events/{id}', [EventController::class, 'update']); // Untuk memperbarui data acara
// Route::delete('/events/{id}', [EventController::class, 'destroy']); // Untuk menghapus data acara
// Menampilkan halaman utama kalender
// Route::get('/calendar', [EventController::class, 'index']);

// // Mengambil data acara dari API
// Route::get('/api/events', [EventController::class, 'getEvents']);

// // Menyimpan acara baru ke database
// Route::post('/api/events', [EventController::class, 'storeEvent']);

// // Mengupdate acara yang sudah ada di database
// Route::put('/api/events/{id}', [EventController::class, 'updateEvent']);

// // Menghapus acara dari database
// Route::delete('/api/events/{id}', [EventController::class, 'deleteEvent']);


Route::get('/api/events', [EventController::class, 'getEvents'])->name('events.api');

Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::get('/events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::put('/events/{id}', [EventController::class, 'update'])->name('events.update');
Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
