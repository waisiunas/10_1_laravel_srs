<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\RedirectIfAuthenticated;
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

Route::controller(AuthController::class)->group(function () {
    Route::middleware(RedirectIfAuthenticated::class)->group(function () {
        Route::get('/', 'login_view')->name('login');
        Route::post('/', 'login_process');
    });
    Route::get('/logout', 'logout')->name('logout')->middleware(Authenticate::class);
});

Route::middleware(Authenticate::class)->group(function () {
    Route::controller(CourseController::class)->group(function () {
        Route::get('/courses', 'index')->name('courses');
        Route::get('/course/create', 'create')->name('course.create');
        Route::post('/course/create', 'store');
        Route::get('/course/{course}/edit', 'edit')->name('course.edit');
        Route::post('/course/{course}/edit', 'update');
        Route::get('/course/{course}/delete', 'destroy')->name('course.delete');
    });

    Route::controller(StudentController::class)->group(function () {
        Route::get('/students', 'index')->name('students');
        Route::get('/student/create', 'create')->name('student.create');
        Route::post('/student/create', 'store');
        Route::get('/student/{student}/edit', 'edit')->name('student.edit');
        Route::post('/student/{student}/edit', 'update');
        Route::get('/student/{student}/delete', 'destroy')->name('student.delete');
    });

    Route::controller(RegistrationController::class)->group(function () {
        Route::get('/registrations', 'index')->name('registrations');
        Route::get('/registration/create', 'create')->name('registration.create');
        Route::post('/registration/create', 'store');
        Route::get('/registration/{registration}/edit', 'edit')->name('registration.edit');
        Route::post('/registration/{registration}/edit', 'update');
        Route::get('/registration/{registration}/delete', 'destroy')->name('registration.delete');
    });
});

// Route::get('/', [AuthController::class, 'login_view'])->name('login');
// Route::post('/', [AuthController::class, 'login_process']);
// Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/courses', [CourseController::class, 'index'])->name('courses');
// Route::get('/course/create', [CourseController::class, 'create'])->name('course.create');
// Route::post('/course/create', [CourseController::class, 'store']);
// Route::get('/course/{course}/edit', [CourseController::class, 'edit'])->name('course.edit');
// Route::post('/course/{course}/edit', [CourseController::class, 'update']);
// Route::get('/course/{course}/delete', [CourseController::class, 'destroy'])->name('course.delete');

// Route::get('/students', [StudentController::class, 'index'])->name('students');
// Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
// Route::post('/student/create', [StudentController::class, 'store']);
// Route::get('/student/{student}/edit', [StudentController::class, 'edit'])->name('student.edit');
// Route::post('/student/{student}/edit', [StudentController::class, 'update']);
// Route::get('/student/{student}/delete', [StudentController::class, 'destroy'])->name('student.delete');

Route::get('/create', function () {
    $data = [
        'name' => 'The Admin',
        'email' => 'admin@gmail.com',
        'password' => Hash::make('12345'),
    ];
    User::create($data);
    return redirect()->route('login');
});
