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
                   <form action="{{ route('teacher.update', $teacher) }}" method="post" enctype="multipart/form-data" >
                    @csrf
                    @method('PATCH')
                    <div class="row gy-4">
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <x-backend.forms.image-input label="Photo" id="teacher" name="image" />
                            </div>
                            <div class="col-md-8">
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <x-backend.forms.input name="name_en" :value="$teacher->name_en ?? old('name_en')" type="text" required label="Teacher Name(English)" ></x-backend.forms.input>
                                    </div>
                                    <div class="col-md-6">
                                        <x-backend.forms.input name="name_bn" :value="$teacher->name_bn ?? old('name_bn')" type="text" required label="Teacher Name(বাংলা)" ></x-backend.forms.input>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <x-backend.forms.input name="qualification" :value="$teacher->qualification ?? old('qualification')" type="text" label="Qualification" ></x-backend.forms.input>
                                    </div>
                                    <div class="col-md-6">
                                        <x-backend.forms.input name="designation" :value="$teacher->designation ?? old('designation')" type="text" label="Designation" ></x-backend.forms.input>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.select name="assign_class" id="assign_class" label="Assign Class" placeholder="Choise Assign Class..." >
                                    <option value="Ten">Ten</option>
                                </x-backend.forms.select>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.select name="assign_section" id="assign_section" label="Assign Section" placeholder="Choise Assign Section..." >
                                    <option value="A">A</option>
                                </x-backend.forms.select>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.select name="department" id="department" label="Department" placeholder="Choise Department..." >
                                    <option value="Accounting">Accounting</option>
                                </x-backend.forms.select>                            
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.input name="father_name" :value="$teacher->father_name ?? old('father_name')" type="text" label="Father Name" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="mother_name" :value="$teacher->mother_name ?? old('mother_name')" type="text" label="Mother Name" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.select name="gender" id="gender" label="Gender" placeholder="Choise Gender..." >
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </x-backend.forms.select>
                            </div>   
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.select name="religion" id="religion" label="Religion" placeholder="Choise Religion..." >
                                    <option value="Islam">Islam</option>
                                    <option value="Hinduisum">Hinduisum</option>
                                    <option value="Buddist">Buddist</option>
                                    <option value="Chirstian">Chirstian</option>
                                </x-backend.forms.select>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="mobile" :value=" '0'. $teacher->mobile ?? old('mobile')" type="number" required label="Mobile" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="dob" :value="$teacher->dob ?? old('dob')" type="date" required label="Date of BIrth" ></x-backend.forms.input>
                            </div>   
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.input name="date_of_join" :value="$teacher->date_of_join ?? old('date_of_join')" type="date" required label="Date of Join" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.select name="married_status" :value="$teacher->married_status ?? old('married_status')" id="married_status" label="Married Status" placeholder="Choise Married Status..." >
                                    <option value="Marrid">Marrid</option>
                                    <option value="Unmarrid">Unmarrid</option>
                                </x-backend.forms.select>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="marriage_date" :value="$teacher->marriage_date ?? old('marriage_date')" type="date" label="Marriage Date" ></x-backend.forms.input>
                            </div>   
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.input type="text" :value="$teacher->email ?? old('email')"  label="Email" ></x-backend.forms.input>
                                <x-backend.forms.input name="unique_id" :value="$teacher->unique_id ?? old('unique_id')" type="text" hidden value="{{'TECH-' . random_int(100000, 999999) }}" label="Email" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="salary" :value="$teacher->salary ?? old('salary')" type="number" required label="Salary" ></x-backend.forms.input>
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
                            <div class="col-md-6">
                                <label for="present_address" class="form-label">Present Address</label>
                                <textarea id="message"
                                    class="form-control @error('present_address')
                                    is-invalid
                                @enderror"
                                    name="present_address" :value="$teacher->present_address ?? old('present_address')" style="height
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
                                    name="parmanent_address" :value="$teacher->parmanent_address ?? old('parmanent_address')" style="height
                                    57px" placeholder="Parmanent Address"></textarea>
                                @error('parmanent_address')
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