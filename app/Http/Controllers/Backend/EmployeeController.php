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
        $employees = DB::table('employees')->select('id', 'image', 'name', 'unique_id', 'blood_group', 'designation', 'qualification', 'mobile', 'email','nid', 'join_date', 'monthly_salary', 'status')->orderBy('id', 'desc')->get();
        return view('backend.employee.index', compact('employees'));
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
                'image' => saveImage($request->image, 'backend/employee/' . $request->unique_id, 'profile'),
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
                'nationality'=> $request->nationality,
                'nid'=> $request->nid,
                'mobile'=> $request->mobile,
                'email'=> $request->email,
                'join_date'=> $request->join_date,
                'dob'=> $request->dob,
                'married_status'=> $request->married_status,
                'present_address'=> $request->present_address,
                'permanent_address' => $request->permanent_address,
                'about' => $request->about,
                'status' => 'Unapproved', //For status

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
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('backend.employee.partials.show', compact('employee'));
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

      /**
     * This is employee active and deactive method.
     */
    public function status(Request $employee)
    {
       $find = Employee::find($employee->id);
      if($find->status == 'Unapproved'){
        Employee::find($employee->id)->update(['status' => 'Active']);

      }elseif($find->status == 'Inactive'){
        Employee::find($employee->id)->update(['status' => 'Active']);
      }else{
        Employee::find($employee->id)->update(['status' => 'Inactive']);

      }
      return back();
    }
}
