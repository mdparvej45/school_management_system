<?php 

use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Frontend\AdmissionApplicationController;




// *** Landing Page ***

Route::get('/', function () {
    return view('welcome');
});


Route::resource('employee', EmployeeController::class);
Route::resource('admission-application', AdmissionApplicationController::class);



