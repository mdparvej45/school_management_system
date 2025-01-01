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
        dd($request);
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
