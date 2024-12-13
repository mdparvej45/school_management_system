@extends('backend.layouts.app')
@section('content')
<x-backend.ui.breadcrumbs :list="['Dashboard', 'Student', 'Add Student']" ></x-backend.ui.breadcrumbs>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-primary bg-pattern align-items-center d-flex">
                <h4 class="card-title fw-semibold text-white mb-0 flex-grow-1">Add Student</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="live-preview">
                   <form action="{{ route('student.store') }}" method="post" enctype="multipart/form-data" >
                    @csrf
                    @method('POST')
                    <div class="row gy-4">
                        <div class="row mt-4">
                            <div class="col-md-4 h-25">
                                <x-backend.forms.image-input class="" label="Photo" id="photo" name="image" />
                            </div>
                            <div class="col-md-8">
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <x-backend.forms.input name="name_en" type="text" required label="Student Name(English)" ></x-backend.forms.input>
                                    </div>
                                    <div class="col-md-6">
                                        <x-backend.forms.input name="name_bn" type="text" required label="Student Name(বাংলা)" ></x-backend.forms.input>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <x-backend.forms.select name="class" id="class" label="Class" required placeholder="Choise Class..." >
                                            @forelse ($classes as $class)
                                            <option value="{{ $class }}">{{ $class }}</option>
                                            @empty
                                            <option>No Class Found</option>
                                            @endforelse
                                        </x-backend.forms.select>
                                    </div>
                                    <div class="col-md-6">
                                        <x-backend.forms.select name="section" id="section" label="Section" required placeholder="Choise Section..." >
                                            @forelse ($sections as $section)
                                            <option value="{{ $section }}">{{ $section }}</option>
                                            @empty
                                            <option>No Section Found</option>
                                            @endforelse
                                        </x-backend.forms.select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.input name="admission_fee" type="number" readonly label="Admission Fee" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="roll" type="number" required label="Roll" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.select name="group" id="group" required label="Group" placeholder="Choise Group..." >
                                    @forelse ($groups as $group)
                                            <option value="{{ $group }}">{{ $group }}</option>
                                            @empty
                                            <option>No Group Found</option>
                                            @endforelse
                                </x-backend.forms.select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.input name="scholarship" type="text" label="Scholarship" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.select name="admission_session" required id="session" label="Admission Session" placeholder="Choise Admission Session..." >
                                    <option value="2025">2025</option>
                                    <option value="2024">2024</option>
                                    <option value="2023">2023</option>
                                    <option value="2022">2022</option>
                                </x-backend.forms.select>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.select name="admission_year" required id="year" label="Admission Year" placeholder="Choise Admission Year..." >
                                    <option value="2025">2025</option>
                                    <option value="2024">2024</option>
                                    <option value="2023">2023</option>
                                    <option value="2022">2022</option>
                                </x-backend.forms.select>
                            </div>   
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.input name="father_name_en" type="text" label="Father Name(English)" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="father_name_bn" type="text" label="Father Name(বাংলা)" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="father_mobile" type="number" label="Father Mobile" ></x-backend.forms.input>
                            </div>   
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.input name="mother_name_en" type="text" label="Mother Name(English)" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="mother_name_bn" type="text" label="Mother Name(বাংলা)" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="mother_mobile" type="number" label="Mother Mobile" ></x-backend.forms.input>
                            </div>   
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.input name="father_occ" type="text" label="Father Occupation" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="mother_occ" type="text" label="Mother Occupation" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.select name="blood_group" id="blood" label="Blood Group" placeholder="Choise Blood Group..." >
                                    <option value="A(+)">A(+)</option>
                                    <option value="A(-)">A(-)</option>
                                    <option value="B(+)">B(+)</option>
                                    <option value="B(-)">B(-)</option>
                                    <option value="AB(+)">AB(+)</option>
                                    <option value="AB(-)">AB(-)</option>
                                    <option value="O(+)">O(+)</option>
                                    <option value="O(-)">O(-)</option>
                                </x-backend.forms.select>
                            </div>   
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.select name="gender" id="gender" label="Gender" required placeholder="Choise Gender..." >
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </x-backend.forms.select>                            
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.select name="religion" id="religion" label="Religion" required placeholder="Choise Religion..." >
                                    <option value="Islam">Islam</option>
                                    <option value="Hinduisum">Hinduisum</option>
                                    <option value="Buddist">Buddist</option>
                                    <option value="Chirstian">Chirstian</option>
                                    <option value="Others">Others</option>
                                </x-backend.forms.select>
                            </div>  
                            <div class="col-md-4">
                                <x-backend.forms.input name="nationality" type="text" label="Nationality" ></x-backend.forms.input>
                            </div> 
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.input name="email" type="text" label="Email" ></x-backend.forms.input>   
                                <x-backend.forms.input name="unique_id" type="text" hidden value="{{'STUD' . random_int(1000000, 9999999) }}" label="Email" ></x-backend.forms.input>
                        
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="dob" type="date" required label="Date of Birth" ></x-backend.forms.input>                           
                            </div>  
                            <div class="col-md-4">
                                <x-backend.forms.input name="guardian_name" type="text" label="Guardian Name" ></x-backend.forms.input>
                            </div> 
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.input name="guardian_occ" type="text" label="Guardian Occupation" ></x-backend.forms.input>                           
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="guardian_mobile" type="number" label="Guardian Mobile" ></x-backend.forms.input>                           
                            </div>  
                            <div class="col-md-4">
                                <x-backend.forms.select name="guardian_relation" id="guardian" label="Guardian Relation" placeholder="Choise Relation..." >
                                    @foreach ($guardians as $guardian)
                                    <option value="{{ $guardian }}">{{ $guardian }}</option>
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
                                    57px" ></textarea>
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
                                    57px" ></textarea>
                                @error('parmanent_address')
                                    <span class="text-danger"></span>
                                @enderror  
                            </div>
                    </div>
                    <div class="row">
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