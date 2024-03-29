<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentClassController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('./auth/login');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route::get('student', [StudentController::class, 'index'])->name('student.index');

// Route::get('student/create', [StudentController::class, 'create'])->name('student.create');

// Route::post('/student',[StudentController::class,'store'])->name('student.store');

// Route::get('student/{id}/edit', [StudentController::class, 'edit'])->name('student.edit');

// Route::put('student/{id}', [StudentController::class, 'update'])->name('student.update');

// Route::get('student/delete/{id}', [StudentController::class, 'delete'])->name('student.delete');

// Route::get('/kelas', [ClassController::class, 'index'])->name('kelas.index');


Route::resource('student', StudentController::class)->middleware('auth');
Route::resource('class', StudentClassController::class)->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
