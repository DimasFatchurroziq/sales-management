<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;
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
    return view('autentikasi.signup');
});

Route::get('/events/index', [EventController::class, 'index'])->name('events.index');
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::get('/events/{id}', [EventController::class, 'show'])->name('events.show');
Route::get('/events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::put('/events/{id}', [EventController::class, 'update'])->name('events.update');
Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');

Route::get('/dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index');
// Route::get('/dashboard/create', [DashboardController::class, 'create'])->name('dashboard.create');
Route::post('/events', [DashboardController::class, 'store'])->name('dashboard.store');
// Route::get('/dashboard/{id}', [DashboardController::class, 'show'])->name('dashboard.show');
// Route::get('/dashboard/{id}/edit', [DashboardController::class, 'edit'])->name('dashboard.edit');
// Route::put('/dashboard/{id}', [DashboardController::class, 'update'])->name('dashboard.update');
Route::delete('/events/{id}', [DashboardController::class, 'destroy'])->name('dashboard.destroy');

Route::get('/order/index', [OrderController::class, 'index'])->name('order.index');
// Route::get('/order/create', [OrderController::class, 'create'])->name('order.create');
// Route::post('/order', [OrderController::class, 'store'])->name('order.store');
// Route::get('/order/{id}', [OrderController::class, 'show'])->name('order.show');
// Route::get('/order/{id}/edit', [OrderController::class, 'edit'])->name('order.edit');
// Route::put('/order/{id}', [OrderController::class, 'update'])->name('order.update');
// Route::delete('/order/{id}', [OrderController::class, 'destroy'])->name('order.destroy');

Route::get('/product/index', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

Route::get('/employee/index', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('/employee', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('/employee/{id}', [EmployeeController::class, 'show'])->name('employee.show');
Route::get('/employee/{id}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('/employee/{id}', [EmployeeController::class, 'update'])->name('employee.update');
Route::delete('/employee/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');