<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Backend\Employee;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Backend\EmployeeRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.employee.partials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRequest $request)
    {
        $unique_id = 'EMPL' . random_int(1000000, 9999999);
        if(isset($request->designation)){
            DB::table('users')->insert([
                'role' => 'Employee',
                'unique_id' => $unique_id,
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'password' => Hash::make( 'password123'),
            ]);
            $user = User::where('unique_id', $unique_id)->firstOrFail();
            DB::table('employees')->insert([
                'user_id' => $user->id,
                'unique_id' => $user->unique_id,
                'image' => $request->image,
                'name' => $request->name,
                'blood_group' => $request->blood_group,
                'designation' => $request->designation,
                'qualification'=> $request->qualification,
                'department'=> $request->department,
                'monthly_salary'=> $request->monthly_salary,
                'father_name' => $request->father_name,
                'mother_name'=> $request->mother_name,
                'gender' => $request->gender,
                'religion' => $request->religion,

            ]);
        }else{
            DB::table('users')->insert([
                'role' => $request->type,
                'unique_id' => strtoupper(substr($request->type, 0, 4)) . random_int(1000000, 9999999),
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'password' => Hash::make('password123'),
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeRequest $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
