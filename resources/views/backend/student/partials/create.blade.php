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
                        @php
                        $list = ['hello', 'three']
                        @endphp
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
                                            @forelse ($list as $item)
                                            <option value="1">2024-25</option>
                                            @empty
                                            <option>No Class Found</option>
                                            @endforelse
                                        </x-backend.forms.select>
                                    </div>
                                    <div class="col-md-6">
                                        <x-backend.forms.select name="section" id="section" label="Section" required placeholder="Choise Section..." >
                                            @forelse ($list as $item)
                                            <option value="1">2024-25</option>
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
                                <x-backend.forms.input name="admission_fee" type="number" required readonly label="Admission Fee" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="roll" type="text" required label="Roll" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.select name="group" id="group" label="Group" placeholder="Choise Group..." >
                                    <option value="General">General</option>
                                    <option value="Science">Science</option>
                                    <option value="Business studies">Business Studies</option>
                                    <option value="Humanities">Humanities</option>
                                </x-backend.forms.select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.input name="scholarship" type="text" required label="Scholarship" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.select name="admission_session" id="session" label="Admission Session" placeholder="Choise Admission Session..." >
                                    <option value="2025">2025</option>
                                    <option value="2024">2024</option>
                                    <option value="2023">2023</option>
                                    <option value="2022">2022</option>
                                </x-backend.forms.select>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.select name="admission_year" id="year" label="Admission Year" placeholder="Choise Admission Year..." >
                                    <option value="2025">2025</option>
                                    <option value="2024">2024</option>
                                    <option value="2023">2023</option>
                                    <option value="2022">2022</option>
                                </x-backend.forms.select>
                            </div>   
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.input name="father_name_en" type="text" required label="Father Name(English)" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="father_name_bn" type="text" required label="Father Name(বাংলা)" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="father_mobile" type="number" required label="Father Mobile" ></x-backend.forms.input>
                            </div>   
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.input name="mother_name_en" type="text" required label="Mother Name(English)" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="mother_name_bn" type="text" required label="Mother Name(বাংলা)" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="mother_mobile" type="number" required label="Mother Mobile" ></x-backend.forms.input>
                            </div>   
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.input name="father_occ" type="text" required label="Father Occupation" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="mother_occ" type="text" required label="Mother Occupation" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.select name="blood_group" id="blood" label="Blood Group" required placeholder="Choise Blood Group..." >
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
                                </x-backend.forms.select>
                            </div>  
                            <div class="col-md-4">
                                <x-backend.forms.input name="nationality" type="text" required label="Nationality" ></x-backend.forms.input>
                            </div> 
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.input name="email" type="text" required label="Email" ></x-backend.forms.input>                           
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="dob" type="date" required label="Date of Birth" ></x-backend.forms.input>                           
                            </div>  
                            <div class="col-md-4">
                                <x-backend.forms.input name="guardian_name" type="text" required label="Guardian Name" ></x-backend.forms.input>
                            </div> 
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.input name="guardian_occupation" type="text" required label="Guardian Occupation" ></x-backend.forms.input>                           
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="guardian_mobile" type="number" required label="Guardian Mobile" ></x-backend.forms.input>                           
                            </div>  
                            <div class="col-md-4">
                                <x-backend.forms.select name="guardian_relation" id="guardian" label="Guardian Relation" required placeholder="Choise Relation..." >
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
                                    57px" placeholder="Presant Address"></textarea>
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
                                    57px" placeholder="Parmanent Address"></textarea>
                                @error('parmanent_address')
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