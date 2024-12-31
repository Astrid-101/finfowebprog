<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;

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
    return view('home');
})->name('home');
Route::get('/facts', function () {
    return view('facts');
})->name('facts');
Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/reports', function () {
    return view('reports');
})->name('reports');
Route::get('/detail-facts', function () {
    return view('detail-facts');
})->name('detail-facts');
Route::get('/detail-services', function () {
    return view('detail-service');
})->name('detail-services');
Route::get('/detail-reports', function () {
    return view('detail-reports');
})->name('detail-reports');
Route::get('/report', function () {
    return view('form-report');
})->name('report');

Route::post('/report', [ReportController::class, 'store'])->name('report.store');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
