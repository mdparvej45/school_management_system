@extends('backend.layouts.app')
@section('content')
<x-backend.ui.breadcrumbs :list="['Dashboard', 'Students', 'Student Add']" ></x-backend.ui.breadcrumbs>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-primary bg-pattern align-items-center d-flex">
                <h4 class="card-title fw-semibold text-white mb-0 flex-grow-1">Student Add</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="live-preview">
                   <form action="{{ route('student.store') }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="row gy-4">
                        @php
                        $list = ['hello', 'three']
                        @endphp
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <x-backend.forms.image-input class="" label="Picture of Student" id="student" name="image" />
                            </div>
                            <div class="col-md-8">
                                <div class="col-xxl-6 col-md-12">
                                    <x-backend.forms.select name="class" id="class" label="Class Name" required placeholder="Choice class..." >
                                        @forelse ($list as $item)
                                        <option value="1">Declined Payment</option>
                                        @empty
                                        <option>No Class Found</option>
                                        @endforelse
                                    </x-backend.forms.select>
                                </div>
                                <div class="col-xxl-6 col-md-12">
                                    <x-backend.forms.select name="session" id="session" label="Session" required placeholder="Choise session..." >
                                        @forelse ($list as $item)
                                        <option value="1">2024-25</option>
                                        @empty
                                        <option>No Class Found</option>
                                        @endforelse
                                    </x-backend.forms.select>
                                </div>
                                <div class="col-xxl-6 col-md-12">
                                    <x-backend.forms.select name="section" id="section" label="Section" required placeholder="Choise section..." >
                                        @forelse ($list as $item)
                                        <option value="1">2024-25</option>
                                        @empty
                                        <option>No Class Found</option>
                                        @endforelse
                                    </x-backend.forms.select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                        <x-backend.forms.input name="name" type="text" required label="Student name" ></x-backend.forms.input>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <x-backend.forms.input name="father_name" type="text" required label="Father's Name" ></x-backend.forms.input>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <x-backend.forms.input name="father_nid" type="number" required label="Father NID Number" ></x-backend.forms.input>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <x-backend.forms.input name="mother_name" type="text" required label="Mother's Name" ></x-backend.forms.input>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <x-backend.forms.input name="mother_nid" type="number" required label="Mother NID Number" ></x-backend.forms.input>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <x-backend.forms.input name="student_dob" type="date" required label="Student Birth Date" ></x-backend.forms.input>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <x-backend.forms.select name="group" id="group" label="Group" placeholder="Choise group..." >
                                <option value="Science">Science</option>
                                <option value="Business studies">Business studies</option>
                                <option value="Humanities">Humanities</option>
                            </x-backend.forms.select>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <x-backend.forms.input name="student_contact_no" type="number" required label="Student Contact Number" ></x-backend.forms.input>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <x-backend.forms.input name="parent_contact_no" type="number" required label="Parent Contact Number" ></x-backend.forms.input>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="iconInput" class="form-label">Student Email</label>
                                <div class="form-icon">
                                    <input name="student_email" type="email" class="form-control form-control-icon" id="iconInput" placeholder="example@gmail.com">
                                    <i class="ri-mail-unread-line"></i>
                                </div>
                            </div>
                        </div>                     
                        <div class="form-group col-md-12">
                            <label for="exampleFormControlTextarea3">Present Address</label>
                            <textarea name="present_address" class="form-control" id="exampleFormControlTextarea3" rows="7"></textarea>
                        </div>   
                        <div class="form-group col-md-12">
                            <label for="exampleFormControlTextarea3">Parmanent Address</label>
                            <textarea name="parmanent_address" class="form-control" id="exampleFormControlTextarea3" rows="7"></textarea>
                        </div>  
                            <!--end col-->
                    </div>
                    <x-backend.ui.button type=submit >
                        Submit
                    </x-backend.ui.button>
                   </form>
                </div>
  
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
@endsection