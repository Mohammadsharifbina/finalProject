<?php

use App\Http\Controllers\bookController;
use App\Http\Controllers\classController;
use App\Http\Controllers\commeteeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\curriculumController;
use App\Http\Controllers\departmentConroller;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\eventCotnroller;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\googleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\marksController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\researchController;
use App\Http\Controllers\semesterController;
use App\Http\Controllers\skillsController;
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
    return redirect('home');
})->middleware('auth');
route::get('home', [GeneralController::class, 'home'])->middleware('auth');
route::view("/about", "project.layout.about")->middleware("auth");
route::view("/contact", "project.layout.contact")->middleware("auth");
route::get("/staf", [GeneralController::class,'staff'])->middleware("auth");


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/redirect', [HomeController::class, 'redirect']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// routes/web.php

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

    route::get('home', [GeneralController::class, 'home'])->middleware('auth');

    Route::get('test', function () {
        return View::make('test');
    });
route::resource('student', student_controller::class);
route::get('studentMarks/{id}', [student_controller::class, 'studentMarks']);
    route::any('panel', [departmentConroller::class, 'general'])->name('panel')->middleware('auth');
    route::get('storeStudent', [student_controller::class, 'store']);
    route::get('createStudent', [student_controller::class, 'createStudent']);
    route::get('home', [GeneralController::class, 'home'])->middleware('auth');
    route::view("/about", "project.layout.about")->middleware("auth");
    route::view("/contact", "project.layout.contact")->middleware("auth");
    route::get("/staf", [GeneralController::class,'staff'])->middleware("auth");
    route::resource('employee', employeeController::class);
    route::resource('teacher', teacher_controller::class);
route::resource('book', bookController::class);
route::resource('department', departmentConroller::class);
route::resource('commettee', commeteeController::class);
route::resource('class', classController::class);
route::get('SIC/{id}', [classController::class, 'SIC']);
route::view('addmin', 'addminpenal');


route::view("/graph", "project.layout.graph");

route::get('add_depart', [departmentConroller::class, 'create']);

route::resource('curriculum', curriculumController::class);

route::resource('employee', employeeController::class);
route::resource('research', researchController::class);
route::resource('semester', semesterController::class);

// route::get('T_in_C',[teacher_controller::class,'teacher_committee']);
route::view('dash', 'project.dashboard.dashboar');
route::any('panel', [departmentConroller::class, 'general'])->name('panel')->middleware('auth');

route::get('T_in_C', [teacher_controller::class, 'teacher_committee']);

route::resource('NW', newsController::class);

route::get('sid/{id}', [departmentConroller::class, 'S_in_D']);

route::resource('TC', TeacherInCommitee::class);

route::view('create', [TeacherInCommitee::class, 'create']);
route::delete('DTC/{id1}/{id2}', [TeacherInCommitee::class, 'delete']);

route::get('sat', [student_controller::class, 'studentAndteachers']);
route::get('google', [googleController::class, 'redirect'])->name('google-auth');
route::get('http://127.0.0.1:8000/auth/google/call-back', [googleController::class, 'callbackgoogle']);


route::post('send', [student_controller::class, 'addmarks']);
route::resource('marks', marksController::class);

route::get('domarks/{id}', [marksController::class, 'create']);
route::resource('index', ContactController::class);
route::get('SCS', [student_controller::class, 'studentSemesterChange']);
route::get('contacts', [ContactController::class, 'index']);
route::get('Teacher', [GeneralController::class, 'teacher']);
route::get('allteachers', [GeneralController::class, 'allTeacher']);
route::get('teacherInfo/{id}', [GeneralController::class, 'teacherInfo']);
route::resource('SK', skillsController::class);
route::resource('project', projectController::class);
route::get('deleteMarks/{id}', [marksController::class, 'destroy']);
route::get('konkor', [GeneralController::class, 'kankor']);
route::get('checkStudent', [GeneralController::class, 'checkStudent']);
route::get('loginTo', [GeneralController::class, 'login']);
route::post('storeStudent',[student_controller::class,'portal']);
route::get('notify',[GeneralController::class,'notify']);
route::post('SS',[GeneralController::class,'SS']);
route::post('signupTo',[GeneralController::class,'signup']);

// route::view('events','project.events.events');
// route::view('createEvents','project.events.createEvenet');
route::resource('event',eventCotnroller::class);

route::get('registered/{id}',[GeneralController::class,'registeredStudent']);
route::get('signup',function(){
    return view('project.signUp');
});

});

route::get('send',[GeneralController::class,'notification']);
route::view('l', 'project.login');
route::get('p',[GeneralController::class,'practice']);

route::get('studentInfo/{id}',[GeneralController::class,'studentInfo']);
route::get('studentDetails/{id}',[GeneralController::class,'studentDetails']);
route::get('feedback/{id}',[GeneralController::class,'feedback']);
route::view('studentSignin','project.portal.signin');
/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/
