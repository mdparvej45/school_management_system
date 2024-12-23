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

    protected $blood_groups = [
        'A(+)',
        'A(-)',
        'B(+)',
        'B(-)',
        'AB(+)',
        'AB(-)',
        'O(+)',
        'O(-)',
    ];

    protected $genders = [
        'Male',
        'Female',
    ];

    protected $religions = [
        'Islam',
        'Hinduisum',
        'Buddist',
        'Chirstian',
    ];

    protected $guardians = [
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


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = DB::table('students')->select('id', 'unique_id', 'roll', 'image', 'name_en', 'name_bn', 'father_name_en', 'father_name_bn', 'mother_name_en', 'mother_name_bn', 'dob', 'religion','admission_session', 'blood_group', 'admission_fee', 'scholarship', 'group', 'section','status' )->orderBy('roll', 'asc')->get();
        return view('backend.student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classData = DB::table('institute_classes')->first();
        $classes = json_decode($classData->name, true);
        $sections = json_decode($classData->section, associative: true);
        $groups = json_decode($classData->group, true);
        $guardians = $this->guardians;
        $blood_groups = $this->blood_groups;
        $religions = $this->religions;
        $genders = $this->genders;
        $currentYear = date('Y');
        $years = range($currentYear + 1, $currentYear - 5);
        return view('backend.student.partials.create', compact('guardians', 'classes', 'sections', 'groups', 'blood_groups', 'religions', 'genders', 'years'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        // dd($request);
        DB::table('users')->insert([
            'role' => 'Student',
            'unique_id' => $request->unique_id,
            'name' => $request->name_en,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => Hash::make('password123'),
        ]);
        try {
            $user = User::where('unique_id', $request->unique_id)->firstOrFail(); // Will throw an exception if no user found
            DB::table('students')->insert([
                'user_id' => $user->id,
                'unique_id' => $request->unique_id,
                'image' => saveImage($request->image, 'backend/student/' . $request->unique_id, 'profile'),
                'name_en' => $request->name_en,
                'name_bn'=> $request->name_bn,
                'class' => $request->class,
                'section' => $request->section,
                'admission_fee' => $request->admission_fee,
                'roll' => $request->roll,
                'group' => $request->group,
                'scholarship' => $request->scholarship,
                'admission_session' => $request->admission_session,
                'admission_year' => $request->admission_year,
                'father_name_en' => $request->father_name_en,
                'father_name_bn' => $request->father_name_bn,
                'father_mobile' => $request->father_mobile,
                'mother_name_en' => $request->mother_name_en,
                'mother_name_bn' => $request->mother_name_bn,
                'mother_mobile' => $request->mother_mobile,
                'father_occ' => $request->father_occ,
                'mother_occ' => $request->mother_occ,
                'blood_group' => $request->blood_group,
                'gender' => $request->gender,
                'religion' => $request->religion,
                'nationality' => $request->nationality,
                'email' => $request->email,
                'dob' => $request->dob,
                'guardian_name' => $request->guardian_name,
                'guardian_occ' => $request->guardian_occ,
                'guardian_mobile' => $request->guardian_mobile,
                'guardian_relation' => $request->guardian_relation,
                'present_address' => $request->present_address,
                'parmanent_address' => $request->parmanent_address,
                'about' => $request->about,
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
        return view('backend.student.partials.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $classData = DB::table('institute_classes')->first();
        $classes = json_decode($classData->name, true);
        $sections = json_decode($classData->section, associative: true);
        $groups = json_decode($classData->group, true);
        $guardians = $this->guardians;
        $blood_groups = $this->blood_groups;
        $religions = $this->religions;
        $genders = $this->genders;
        $currentYear = date('Y');
        $years = range($currentYear + 1, $currentYear - 5);
        return view('backend.student.partials.edit', compact('student','guardians', 'classes', 'sections', 'groups', 'blood_groups', 'religions', 'genders', 'years'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, Student $student)
    {
        $date = Student::findOrFail($student->id);
        $date->update([
            'image' => updateFile($request->image, $student->image, 'backend/student/' . $student->unique_id, 'profile'),
            'name_en' => $request->name_en,
            'name_bn'=> $request->name_bn,
            'class' => $request->class,
            'section' => $request->section,
            'admission_fee' => $request->admission_fee,
            'roll' => $request->roll,
            'group' => $request->group,
            'scholarship' => $request->scholarship,
            'admission_session' => $request->admission_session,
            'admission_year' => $request->admission_year,
            'father_name_en' => $request->father_name_en,
            'father_name_bn' => $request->father_name_bn,
            'father_mobile' => $request->father_mobile,
            'mother_name_en' => $request->mother_name_en,
            'mother_name_bn' => $request->mother_name_bn,
            'mother_mobile' => $request->mother_mobile,
            'father_occ' => $request->father_occ,
            'mother_occ' => $request->mother_occ,
            'blood_group' => $request->blood_group,
            'gender' => $request->gender,
            'religion' => $request->religion,
            'nationality' => $request->nationality,
            'dob' => $request->dob,
            'guardian_name' => $request->guardian_name,
            'guardian_occ' => $request->guardian_occ,
            'guardian_mobile' => $request->guardian_mobile,
            'guardian_relation' => $request->guardian_relation,
            'present_address' => $request->present_address,
            'parmanent_address' => $request->parmanent_address,
            'about' => $request->about,
        ]);
        return back();
    }



      /**
     * This is teacher active and deactive method.
     */
    public function status(Request $student)
    {
       $find = Student::find($student->id);
      if($find->status == 'Unapproved'){
        Student::find($student->id)->update(['status' => 'Active']);

      }elseif($find->status == 'Inactive'){
        Student::find($student->id)->update(['status' => 'Active']);
      }else{
        Student::find($student->id)->update(['status' => 'Inactive']);

      }
      return back();
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
