<?php

namespace App\Http\Controllers\Backend;

use App\Models\Backend\InstituteClass;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Backend\Student;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Backend\StudentRequest;

class StudentController extends Controller
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
        $classData = DB::table('institute_classes')->first();
        $find = json_decode($classData->name, true);
        // dd($find['play']);
        $guardians = [
            'Grand mother',
            'Grand daughter',
            'Grand father',
            'Grandma',
            'Aunt',
            'Grandpa',
            'Brother',
            'Grandson',
            'Maid',
            'Caretaker',
            'Maternal Anut',
            'Cousin',
            'Maternal Uncle',
            'Daughter',
            'Mother',
            'Nephew',
            'Driver',
            'Elder Sister',
            'Father',
            'Niece',
            'Paternal Aunt',
            'Paternul Uncle',
            'Sister',
            'Son',
            'Staff',
            'Uncle',
            'Watchman',
            'Others',
        ];
        return view('backend.student.partials.create', compact('guardians'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        DB::table('users')->insert([
            'role' => 'Teacher',
            'unique_id' => $request->unique_id,
            'name' => $request->name_en,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => Hash::make('password123'),
        ]);
        try {
            $user = User::where('unique_id', $request->unique_id)->firstOrFail(); // Will throw an exception if no user found
            DB::table('teachers')->insert([
                'user_id' => $user->id,
                'unique_id' => $request->unique_id,
                'name_en' => $request->name_en,
                'name_bn'=> $request->name_bn,
                'qualification'=> $request->qualification,
                'designation'=> $request->designation,
                'assign_class'=> $request->assign_class,
                'assign_section' => $request->assign_section,
                'department'=> $request->department,
                'father_name'=> $request->father_name,
                'mother_name'=> $request->mother_name,
                'gender'=> $request->gender,
                'religion'=> $request->religion,
                'mobile'=> $request->mobile,
                'dob'=> $request->dob,
                'date_of_join' => $request->date_of_join,
                'married_status' => $request->married_status,
                'marriage_date' => $request->marriage_date,
                'email' => $request->email,
                'salary' => $request->salary,
                'blood_group' => $request->blood_group,
                'present_address'=> $request->present_address,
                'parmanent_address' => $request->parmanent_address,
                'status' => 'Unapproved', //For status
            ]);
            return back();
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            echo 'User not found';
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
