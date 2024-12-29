<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\Frontend\AdmissionApplicationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Frontend\AdmissionApplication;

class AdmissionApplicationController extends Controller
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
        // echo 'Hello world';
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
