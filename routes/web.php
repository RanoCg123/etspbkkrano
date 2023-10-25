<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;
use app\Http\Controllers\DoctorController;
use app\Http\Controllers\PatientController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/add-record', [RecordController::class, 'create'])->name('add-record');
Route::post('/add-record', [RecordController::class, 'store']);
Route::get('/records', [RecordController::class, 'show']) -> name('records');
Route::get('/doctor/{doctor}', [DoctorController::class, 'show']) -> name('doctors');
Route::get('/patient/{patient}', [PatientController::class, 'show']) -> name('patients');
require __DIR__.'/auth.php';
