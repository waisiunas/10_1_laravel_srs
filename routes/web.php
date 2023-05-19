<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\auth\AuthController;
use Illuminate\Support\Facades\Hash;

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

Route::get('/create', function () {
    $data = [
        'name' => 'The Admin',
        'email' => 'admin@gmail.com',
        'password' => Hash::make('12345'),
    ];
    User::create($data);
    return redirect()->route('login');
});

Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/course/create', [CourseController::class, 'create'])->name('course.create');
Route::get('/course/edit', [CourseController::class, 'edit'])->name('course.edit');
