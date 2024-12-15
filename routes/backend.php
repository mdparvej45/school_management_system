<?php 

use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\StudentController;
use App\Http\Controllers\Backend\TeacherController;
use App\Http\Controllers\ProfileController;



// ***Dashboard ***
Route::get('/dashboard', function () {
    return view('backend.dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->
prefix('admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('teacher', TeacherController::class);
    Route::patch('/teacher//{id}/status', [TeacherController::class, 'status'])->name('teacher.status');
    Route::resource('student', StudentController::class);
    Route::resource('employee', EmployeeController::class);

});