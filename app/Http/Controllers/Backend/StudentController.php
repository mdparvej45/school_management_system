<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\StudentRequest;
use Illuminate\Http\Request;
use App\Models\Backend\Student;
use App\Http\Controllers\Controller;

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
        dd($request);
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
