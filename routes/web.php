<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AuthController::class, 'login_view'])->name('login');
Route::post('/', [AuthController::class, 'login_process']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/course/create', [CourseController::class, 'create'])->name('course.create');
Route::get('/course/edit', [CourseController::class, 'edit'])->name('course.edit');
