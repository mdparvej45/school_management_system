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
        $teachers = DB::table('teachers')->select('id', 'name_en', 'designation', 'unique_id', 'qualification', 'mobile', 'email', 'blood_group', 'status','image')->orderBy('id', 'desc')->get();
        return view('backend.teacher.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        return view('backend.teacher.partials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeacherRequest $request)
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
                'image' => saveImage($request->image, 'backend/teacher/' . $request->unique_id, 'profile'),
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
    public function show(Teacher $teacher)
    {
        return view('backend.teacher.partials.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        return view('backend.teacher.partials.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeacherRequest $request, Teacher $teacher)
    {
        // dd($teacher);
    }



  /**
     * This is teacher active and deactive method.
     */
    public function status(Request $teacher)
    {
       $find = Teacher::find($teacher->id);
      if($find->status == 'Unapproved'){
        Teacher::find($teacher->id)->update(['status' => 'Active']);

      }elseif($find->status == 'Inactive'){
        Teacher::find($teacher->id)->update(['status' => 'Active']);
      }else{
        Teacher::find($teacher->id)->update(['status' => 'Inactive']);

      }
      return back();
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
