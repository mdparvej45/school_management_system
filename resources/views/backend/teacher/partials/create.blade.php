@extends('backend.layouts.app')
@section('content')
<x-backend.ui.breadcrumbs :list="['Dashboard', 'Teacher', 'Add Teacher']" ></x-backend.ui.breadcrumbs>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-primary bg-pattern align-items-center d-flex">
                <h4 class="card-title fw-semibold text-white mb-0 flex-grow-1">Add Teacher</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="live-preview">
                   <form action="{{ route('teacher.store') }}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="row gy-4">
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <x-backend.forms.image-input label="Photo" id="teacher" name="image" />
                            </div>
                            <div class="col-md-8">
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <x-backend.forms.input name="name_en" type="text" required label="Teacher Name(English)" ></x-backend.forms.input>
                                    </div>
                                    <div class="col-md-6">
                                        <x-backend.forms.input name="name_bn" type="text" required label="Teacher Name(বাংলা)" ></x-backend.forms.input>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <x-backend.forms.input name="qualification" type="text" label="Qualification" ></x-backend.forms.input>
                                    </div>
                                    <div class="col-md-6">
                                        <x-backend.forms.input name="designation" type="text" label="Designation" ></x-backend.forms.input>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.select name="assign_class" id="assign_class" label="Assign Class" placeholder="Choise Assign Class..." >
                                    @foreach (json_decode($institute_classes->name) as $class )
                                    <option value="{{ $class }}" >{{ $class }}</option>
                                    @endforeach
                                </x-backend.forms.select>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.select name="assign_section" id="assign_section" label="Assign Section" placeholder="Choise Assign Section..." >
                                    @foreach (json_decode($institute_classes->section) as $section )
                                    <option value="{{ $section }}" >{{ $section }}</option>
                                    @endforeach
                                </x-backend.forms.select>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.select name="department" id="department" label="Department" placeholder="Choise Department..." >
                                    @foreach (json_decode($institute_classes->group) as $group )
                                    <option value="{{ $group }}" >{{ $group }}</option>
                                    @endforeach
                                </x-backend.forms.select>                            
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.input name="father_name" type="text" label="Father Name" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="mother_name" type="text" label="Mother Name" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.select name="gender" id="gender" label="Gender" placeholder="Choise Gender..." >
                                    @foreach ($genders as $gender )
                                    <option value="{{ $gender }}" >{{ $gender }}</option>
                                    @endforeach
                                </x-backend.forms.select>
                            </div>   
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.select name="religion" id="religion" label="Religion" placeholder="Choise Religion..." >
                                    @foreach ($religions as $religion )
                                    <option value="{{ $religion }}" >{{ $religion }}</option>
                                    @endforeach
                                </x-backend.forms.select>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="mobile" type="number" required label="Mobile" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="dob" type="date" required label="Date of BIrth" ></x-backend.forms.input>
                            </div>   
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.input name="date_of_join" type="date" required label="Date of Join" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.select name="married_status" id="married_status" label="Married Status" placeholder="Choise Married Status..." >
                                    @foreach ($married_status as $status )
                                    <option value="{{ $status }}" >{{ $status }}</option>
                                    @endforeach
                                </x-backend.forms.select>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="marriage_date" type="date" label="Marriage Date" ></x-backend.forms.input>
                            </div>   
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.input name="email" type="text"  label="Email" ></x-backend.forms.input>
                                <x-backend.forms.input name="unique_id" type="text" hidden value="{{'TECH' . random_int(1000000, 9999999) }}" label="Email" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="salary" type="number" required label="Salary" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.select name="blood_group" id="blood" label="Blood Group" placeholder="Choise Blood Group..." >
                                    @foreach ($blood_groups as $blood_group )
                                    <option value="{{ $blood_group }}" >{{ $blood_group }}</option>
                                    @endforeach
                                </x-backend.forms.select>
                            </div>   
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="present_address" class="form-label">Present Address</label>
                                <textarea id="message"
                                    class="form-control @error('present_address')
                                    is-invalid
                                @enderror"
                                    name="present_address" style="height
                                    57px"></textarea>
                                @error('present_address')
                                    <span class="text-danger"></span>
                                @enderror                            
                            </div>
                            <div class="col-md-6">
                                <label for="parmanent_address" class="form-label">Parmanent Address</label>
                                <textarea id="message"
                                    class="form-control @error('parmanent_address')
                                    is-invalid
                                @enderror"
                                    name="parmanent_address" style="height
                                    57px"></textarea>
                                @error('parmanent_address')
                                    <span class="text-danger"></span>
                                @enderror  
                            </div>
                            <div class="col-md-12">
                                <label for="about" class="form-label">About</label>
                                <textarea id="message"
                                    class="form-control @error('about')
                                    is-invalid
                                @enderror"
                                    name="about" style="height
                                    57px"></textarea>
                                @error('about')
                                    <span class="text-danger"></span>
                                @enderror  
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <x-backend.ui.button class="w-100" type=submit >
                            Submit
                        </x-backend.ui.button>
                    </div>
                   </form>
                </div>
  
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
@endsection