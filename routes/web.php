<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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
    return view ('welcome');
});
Route::get('student-list',[StudentController::class,'index'])->name('student-list');
Route::get('add-student',[StudentController::class,'addstudent']);
Route::post('save-student',[StudentController::class,'savestudent']);
Route::get('edit-student/{id}', [StudentController::class, 'editstudent'])->name('edit-student');
Route::post('update-student', [StudentController::class, 'updatestudent'])->name('update-student');
Route::get('delete-student/{id}', [StudentController::class, 'deletestudent'])->name('delete-student');
Route::post('confirm-delete-student/{id}', [StudentController::class, 'confirmDeleteStudent'])->name('confirm-delete-student');
