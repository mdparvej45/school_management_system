<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Backend\Teacher;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Backend\TeacherRequest;


class TeacherController extends Controller
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

            $user = User::find(10); // Find the user by ID

            // Fetch the teacher associated with the user
            $teacher = $user->teacher;
        return view('backend.teacher.partials.create', compact('teacher'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeacherRequest $request)
    {
        $storeUser = DB::table('users')->insert([
            'role' => 'Superadmin',
            'name' => $request->name_en,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => Hash::make('password123'),
        ]);
        try {
            $user = User::where('email', $request->email)->firstOrFail(); // Will throw an exception if no user found
            DB::table('teachers')->insert([
                'user_id' => $user->id,
                'name_en' => $request->name_en,
                'name_bn'=> $request->name_bn,
                'qualification'=> $request->qualification,
                'designation'=> $request->designation,
                'father_name'=> $request->father_name,
                'mother_name'=> $request->mother_name,
                'gender'=> $request->gender,
                'religion'=> $request->religion,
                'mobile'=> $request->mobile,
                'dob'=> $request->dob,
                'date_of_join' => $request->date_of_join,
                'married_status' => $request->married_status,
                'email' => $request->email,
                'salary' => $request->salary,
                'present_address'=> $request->present_address,
                'parmanent_address' => $request->parmanent_address,
            ]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            echo 'User not found';
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeacherRequest $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
