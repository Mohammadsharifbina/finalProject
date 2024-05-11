<?php

use App\Http\Controllers\bookController;
use App\Http\Controllers\classController;
use App\Http\Controllers\commeteeController;
use App\Http\Controllers\curriculumController;
use App\Http\Controllers\departmentConroller;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\googleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\researchController;
use App\Http\Controllers\semesterController;
use App\Http\Controllers\student_controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\teacher_controller;
use App\Http\Controllers\TeacherInCommitee;
use App\Models\Cllass;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/redirect',[HomeController::class, 'redirect']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 
require __DIR__.'/auth.php';
route::resource('student',student_controller::class);
route::resource('teacher',teacher_controller::class);
route::resource('book',bookController::class);
route::resource('department',departmentConroller::class);
route::resource('commettee',commeteeController::class);
route::resource('class',classController::class);
route::get('SIC/{id}',[classController::class,'SIC']);
route::view('addmin','addminpenal');

route::get('add_depart',[departmentConroller::class,'create']);

route::resource('curriculum',curriculumController::class);

route::resource('employee',employeeController::class);
route::resource('research',researchController::class);
route::resource('semester',semesterController::class);

// route::get('T_in_C',[teacher_controller::class,'teacher_committee']);
route::view('dash','project.dashboard.dashboar');
route::any('panel',[departmentConroller::class,'general'])->name('panel')->middleware('auth');

route::get('T_in_C',[teacher_controller::class,'teacher_committee']);

route::resource('news',newsController::class);

route::get('sid/{id}',[departmentConroller::class,'S_in_D']);

route::resource('TC',TeacherInCommitee::class);

route::view('create',[TeacherInCommitee::class,'create']);
route::delete('DTC/{id1}/{id2}',[TeacherInCommitee::class,'delete']);

route::get('sat',[student_controller::class,'studentAndteachers']);
route::get('google',[googleController::class,'redirect'])->name('google-auth');
route::get('http://127.0.0.1:8000/auth/google/call-back',[googleController::class,'callbackgoogle']);
route::get('studentMarks',[student_controller::class,'studentMarks']);