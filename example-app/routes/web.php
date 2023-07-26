<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MySheduleController;
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

Route::get('/shedule', [MySheduleController::class, 'index'])->name('shedule.index');
Route::get('/shedule/{selectedDate}/lessons', [MySheduleController::class, 'getLessonDates'])->name('shedule.lessons');
Route::get('/shedule/{selectedDate}/lessons/{lessonDate}', [MySheduleController::class, 'getLessons'])->name('shedule.lessons.details');
