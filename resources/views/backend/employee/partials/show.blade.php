@extends('backend.layouts.app')
@section('content')
<x-backend.ui.breadcrumbs :list="['Dashboard', 'Employee', 'Show']" ></x-backend.ui.breadcrumbs>
<div class="profile-foreground position-relative mx-n4 mt-n4">
    <div class="profile-wid-bg">
        <img src="{{ useImage($employee->image) }}" alt="" class="profile-wid-img" />
    </div>
</div>
<div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
    <div class="row g-4">
        <div class="col-auto">
            <div class="avatar-lg">
                <img src="{{ useImage($employee->image) }}" alt="user-img" class="img-thumbnail rounded-circle" />
            </div>
        </div>
        <!--end col-->
        <div class="col">
            <div class="p-2">
                <h3 class="text-white mb-1">{{ $employee->name }}</h3>
                <p class="text-white-75">{{ $employee->unique_id }}</p>
                <div class="hstack text-white-50 gap-1">
                    <div class="me-2"><i class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i>{{ $employee->present_address }}</div>
                    <div>
                        <i class="ri-building-line me-1 text-white-75 fs-16 align-middle"></i>{{ $employee->parmanent_address }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
</div>

<div class="row">
    <div class="col-lg-12">
        <div>
            <div class="d-flex">
                <!-- Nav tabs -->
                <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                            <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Overview</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-14" data-bs-toggle="tab" href="#personal_information" role="tab">
                            <i class="ri-list-unordered d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Personal Information</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-14" data-bs-toggle="tab" href="#about" role="tab">
                            <i class="ri-price-tag-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">About</span>
                        </a>
                    </li>
                </ul>
                <div class="flex-shrink-0 btn-group">
                    <a href="{{ route('employee.index') }}" class="btn btn-info"><i class="ri-arrow-go-back-line align-bottom"></i> Back</a>
                    <a href="{{ route('employee.edit', $employee) }}" class="btn btn-success"><i class="ri-edit-box-line align-bottom"></i> Edit Profile</a>
                </div>
            </div>
            <!-- Tab panes -->
            <div class="tab-content pt-4 text-muted">
                <div class="tab-pane active" id="overview-tab" role="tabpanel">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-5">Complete Your Profile</h5>
                                    <div class="progress animated-progress custom-progress progress-label">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                            <div class="label">30%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Overview</h5>
                                    <div class="row">
                                        <div class="col-6 col-md-4">
                                            <div class="d-flex mt-4">
                                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                    <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                        <i class="ri-at-line"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="mb-1">ID :</p>
                                                    <h6 class="text-truncate mb-0">{{ 	$employee->unique_id }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="d-flex mt-4">
                                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                    <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                        <i class="ri-at-line"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="mb-1">Name :</p>
                                                    <h6 class="text-truncate mb-0">{{ 	$employee->name }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="d-flex mt-4">
                                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                    <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                        <i class="ri-at-line"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="mb-1">Qualification :</p>
                                                    <h6 class="text-truncate mb-0">{{ $employee->qualification }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="col-6 col-md-4">
                                            <div class="d-flex mt-4">
                                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                    <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                        <i class="ri-at-line"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="mb-1">Email :</p>
                                                    <h6 class="text-truncate mb-0">{{ $employee->email }}</h6>
                                                </div>
                                            </div>
                                        </div>          
                                        <div class="col-6 col-md-4">
                                            <div class="d-flex mt-4">
                                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                    <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                        <i class="ri-at-line"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="mb-1">Mobile :</p>
                                                    <h6 class="text-truncate mb-0">0{{ $employee->mobile }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="d-flex mt-4">
                                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                    <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                        <i class="ri-at-line"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="mb-1">Date of Birth :</p>
                                                    <h6 class="text-truncate mb-0">{{ $employee->dob }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="col-6 col-md-4">
                                            <div class="d-flex mt-4">
                                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                    <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                        <i class="ri-at-line"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="mb-1">Married Status :</p>
                                                    <h6 class="text-truncate mb-0">{{ $employee->married_status }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="d-flex mt-4">
                                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                    <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                        <i class="ri-at-line"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="mb-1">Department :</p>
                                                    <h6 class="text-truncate mb-0">{{ $employee->department }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="d-flex mt-4">
                                                <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                    <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                        <i class="ri-at-line"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <p class="mb-1">Salary :</p>
                                                    <h6 class="text-truncate mb-0">{{ $employee->	monthly_salary }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end card-body-->
                            </div><!-- end card -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <div class="tab-pane fade" id="personal_information" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Personal Information</h5>
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                            <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                <i class="ri-at-line"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="mb-1">Father Name :</p>
                                            <h6 class="text-truncate mb-0">{{ 	$employee->father_name }}</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                            <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                <i class="ri-at-line"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="mb-1">Mother Name :</p>
                                            <h6 class="text-truncate mb-0">{{ 	$employee->mother_name }}</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                            <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                <i class="ri-at-line"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="mb-1">Gender :</p>
                                            <h6 class="text-truncate mb-0">{{ 	$employee->gender }}</h6>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <div class="col-6 col-md-4">
                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                            <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                <i class="ri-at-line"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="mb-1">Religion :</p>
                                            <h6 class="text-truncate mb-0">{{ $employee->religion }}</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                            <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                <i class="ri-at-line"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="mb-1">NID :</p>
                                            <h6 class="text-truncate mb-0">{{ $employee->nid }}</h6>
                                        </div>
                                    </div>
                                </div>          
                                <div class="col-6 col-md-4">
                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                            <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                <i class="ri-at-line"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="mb-1">Blood Group :</p>
                                            <h6 class="text-truncate mb-0">{{ $employee->blood_group }}</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                            <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                <i class="ri-at-line"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="mb-1">Join Date :</p>
                                            <h6 class="text-truncate mb-0">{{ $employee->	join_date }}</h6>
                                        </div>
                                    </div>
                                </div>
                                <hr/>
                                <!--end col-->
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                            <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                <i class="ri-at-line"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="mb-1">Presant Address :</p>
                                            <h6 class="text-truncate mb-0">{{ $employee->presant_address }}</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                            <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                <i class="ri-at-line"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="mb-1">Parmanent Address :</p>
                                            <h6 class="text-truncate mb-0">{{ $employee->parmanent_address }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end tab-pane-->
                <div class="tab-pane fade" id="about" role="tabpanel">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">About</h5>
                            <p>{{ $employee->about }} </p>

                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end tab-pane-->
            </div>
            <!--end tab-content-->
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->
@endsection    
    
    
