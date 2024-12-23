@extends('backend.layouts.app')
@section('content')
<x-backend.ui.breadcrumbs :list="['Dashboard', 'Employee', 'Edit Information']" ></x-backend.ui.breadcrumbs>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-primary bg-pattern align-items-center d-flex">
                <h4 class="card-title fw-semibold text-white mb-0 flex-grow-1">Employee Joining</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="live-preview">
                   <form action="{{ route('employee.store') }}" method="post" enctype="multipart/form-data" >
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
                                        <x-backend.forms.select name="type" id="dropdown" label="Employee Type" placeholder="Choise employee Type..." >
                                            @foreach ($employess as $item )
                                            <option value="{{ $item }}" @selected($employee->type == $item) > {{ $item }} </option>
                                            @endforeach
                                        </x-backend.forms.select>
                                    </div>
                                    <div class="col-md-6">
                                        <x-backend.forms.input name="card_no" :value="$employee->unique_id" type="text" label="Card No." ></x-backend.forms.input>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <x-backend.forms.input name="name" :value="$employee->name" type="text" required label="Name" ></x-backend.forms.input>
                                    </div>
                                    <div class="col-md-6">
                                        <x-backend.forms.input name="designation" :value="$employee->designation" id="designation" type="text" label="Designation" ></x-backend.forms.input>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.input name="qualification" :value="$employee->qualification" type="text" label="Qualification" ></x-backend.forms.input>
                      
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="monthly_salary" :value="$employee->monthly_salary" type="number" required label="Monthly Salary" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.select name="blood_group" id="blood" label="Blood Group" placeholder="Choise Blood Group..." >
                                    @foreach ($blood_groups as $blood_group )
                                    <option value="{{ $blood_group }}" @selected($employee->blood_group == $blood_group) >{{ $blood_group }}</option>
                                    @endforeach
                                </x-backend.forms.select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.input name="department" :value="$employee->department" type="text" label="Department" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.select name="gender" id="gender" label="Gender" required placeholder="Choise Gender..." >
                                    @foreach ($genders as $gender )
                                    <option value="{{ $gender }}" @selected($employee->gender == $gender) >{{ $gender }}</option>
                                    @endforeach
                                </x-backend.forms.select> 
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.select name="religion" id="religion" label="Religion" required placeholder="Choise Religion..." >
                                    @foreach ($religions as $religion )
                                    <option value="{{ $religion }}" @selected($employee->religion == $religion) >{{ $religion }}</option>
                                    @endforeach
                                </x-backend.forms.select>
                            </div>   
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.input name="nationality" :value="$employee->nationality" type="text" label="Nationality" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="nid" :value="$employee->nid" type="number" required label="NID Card No." ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="mobile" :value="$employee->mobile" type="number" label="Mobile" ></x-backend.forms.input>
                            </div>   
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.input name="email" type="email" disabled :value="$employee->email" label="Email" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="join_date" :value="$employee->join_date" type="date"  required label="Join Date" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="dob" :value="$employee->dob" type="date"  required label="Date of Birth" ></x-backend.forms.input>
                            </div>   
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <x-backend.forms.input name="father_name" type="text" :value="$employee->father_name" label="Father Name" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.input name="mother_name" :value="$employee->mother_name" type="text" label="Father Name" ></x-backend.forms.input>
                            </div>
                            <div class="col-md-4">
                                <x-backend.forms.select name="married_status" id="married_status" label="Married Status" placeholder="Choise Married Status..." >
                                    @foreach ($married_status as $status )
                                    <option value="{{ $status }}" @selected($employee->married_status == $status) >{{ $status }}</option>
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
                                    57px" >{{ $employee->present_address }}</textarea>
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
                                    57px" >{{ $employee->parmanent_address }}</textarea>
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
                                    57px">{{ $employee->about }}</textarea>
                                @error('about')
                                    <span class="text-danger"></span>
                                @enderror                            
                            </div>
                        </div>
                    <div class="mt-3">
                        <x-backend.ui.button class="w-100" type=submit >
                            Update
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
@push('customJs')
<script>
    // Get references to the dropdown and input field
    const dropdown = document.getElementById('dropdown');
    const textInput = document.getElementById('designation');

    // Add an event listener to the dropdown
    dropdown.addEventListener('change', () => {
      const selectedValue = dropdown.value; // Get the selected option value

      // Enable or disable the input field based on the dropdown value
      if (selectedValue == 'Employee') {
        textInput.removeAttribute('disabled'); // Enable the input field
      } else if (selectedValue == 'Superadmin' || 'Principle' || 'Accountant' || 'Operator') {
        textInput.setAttribute('disabled', 'true');
      }
    });
  </script>
@endpush
@endsection 
