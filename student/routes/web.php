<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudInsertController;
use App\Http\Controllers\StudDeleteController;
use App\Http\Controllers\Attendance;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [StudInsertController::class, 'create']);
Route::post('/students', [StudInsertController::class, 'store'])->name('student.store');

Route::get('/delete-student', [StudDeleteController::class, 'index']);
Route::get('/delete/{id}', [StudDeleteController::class, 'destroy'])->name('student.delete');

Route::get('/addsheet', [Attendance::class, 'addsheet']);


Route::get('/attandance', [Attendance::class, 'attendancelist']);
Route::get('/present/{id}', [Attendance::class, 'makePresent'])->name('student.present');
Route::get('/absent/{id}', [Attendance::class, 'makeAbsent'])->name('student.absent');

Route::get('/student/{id}', [Attendance::class, 'student'])->name('student.student');

