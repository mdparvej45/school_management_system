<?php 

use App\Http\Controllers\Backend\EmployeeController;




// *** Landing Page ***

Route::get('/', function () {
    return view('welcome');
});


Route::resource('employee', EmployeeController::class);




