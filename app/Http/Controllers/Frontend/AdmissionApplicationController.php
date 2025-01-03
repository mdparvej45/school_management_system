<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Frontend\AdmissionApplication;
use App\Http\Requests\Frontend\AdmissionApplicationRequest;

class AdmissionApplicationController extends Controller
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
        //
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
        return view('backend.online-admission.partials.create', compact('classes', 'sections', 'groups', 'guardians', 'blood_groups', 'genders', 'currentYear', 'religions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdmissionApplicationRequest $request)
    {
        // dd(time() . random_int(1000, 9999));
        DB::table('admission_applications')->insert([
            'tracking_id' => 'AD' . time() . random_int(1000, 9999),
            'image' => saveImage($request->image, 'backend/student/' . $request->unique_id, 'profile'),
            'name_en' => $request->name_en,
            'birth_reg_no' => $request->birth_reg_no,
            'gender' => $request->gender,
            'blood_group' => $request->blood_group,
            'dob' => $request->dob,
            'religion' => $request->religion,
            'nationality' => $request->nationality,
            'admission_year' => $request->admission_year,
            'class' => $request->class,
            'section' => $request->section,
            'father_name_en' => $request->father_name_en,
            'f_nid' => $request->f_nid,
            'f_occ' => $request->f_occ,
            'f_orgz' => $request->f_orgz,
            'f_mobile' => $request->f_mobile,
            'f_email' => $request->f_email,
            'mother_name_en' => $request->mother_name_en,
            'm_nid' => $request->m_nid,
            'm_occ' => $request->m_occ,
            'm_orgz' => $request->m_orgz,
            'm_mobile' => $request->m_mobile,
            'm_email' => $request->m_email,
            'emerg_number' => $request->emerg_number,
            'guardian_name' => $request->guardian_name,
            'guardian_occ' => $request->guardian_occ,
            'guardian_mobile' => $request->guardian_mobile,
            'guardian_relation' => $request->guardian_relation,
            'guardian_email' => $request->guardian_email,
            'present_address' => $request->present_address,
            'parmanent_address' => $request->parmanent_address,
            'about' => $request->about,
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(AdmissionApplication $admissionApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdmissionApplication $admissionApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdmissionApplicationRequest $request, AdmissionApplication $admissionApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdmissionApplication $admissionApplication)
    {
        //
    }
}
