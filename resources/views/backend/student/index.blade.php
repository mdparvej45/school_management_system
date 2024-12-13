@extends('backend.layouts.app')
@section('content')
<x-backend.ui.breadcrumbs :list="['Dashboard', 'Teacher', 'All Student Information']" ></x-backend.ui.breadcrumbs>
<div class="row text-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-primary d-flex" id="hello" >
                <div class="me-auto">
                    <h5 class="card-title text-white fw-semibold mt-2" >Student Information</h5>
                </div>
                <div class="ms-auto">
                    <input type="text" class="form-control form-control-sm w-100" placeholder="Search">
                </div>
            </div>
            <div class="card-body">
                <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                    <thead>
                        <tr class="text-muted h6" >
                            <th scope="col" style="width: 10px;">
                                <div class="form-check">
                                    <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                                </div>
                            </th>
                            <th data-ordering="false">ROLL~ID</th>
                            <th data-ordering="false">
                                PHOTO~NAME
                            </th>
                            <th data-ordering="false">
                                FATHER~MOTHER
                            </th>
                            <th data-ordering="false">
                                D.O.B~RELIGION
                            </th>
                        
                            <th data-ordering="false">
                                SESSION~BLOOD
                            </th>
                            <th data-ordering="false">TUITION FEE~SCHOLARSHIP~SESSION</th>
                            <th data-ordering="false">GROUP~SECTION~SHIFT</th>
                            <th data-ordering="false">
                                STATUS
                            </th>
                            <th data-ordering="false">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                      @forelse ( $students as $key => $student)
                      <tr>
                            <th scope="row">
                                <div class="form-check">
                                    <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                </div>
                            </th>
                            <td>{{ $student->roll }}
                                <br/>
                                {{ $student->unique_id }}
                            </td>
                            <td>
                                {{-- {{ dd($student->image) }} --}}
                                <div class="d-flex gap-1 align-items-center">
                                    <div class="flex-shrink-0">
                                        <img src="{{ useImage($student->image) }}" alt="" class=" border border-primary avatar-xs rounded-circle" />
                                    </div>
                                    <div class="">
                                        {{ $student->name_en }}
                                    </div>
                                </div>
                            </td>
                            <td>{{ $student->father_name_en }}
                                <br/>
                                {{ $student->mother_name_en }}
                            </td>
                            <td>{{ $student->dob }}
                                <br/>
                                {{ $student->religion }}
                            </td>
                            </td>
                            <td>{{ $student->admission_session }}
                                <br/>
                              <span class="text-danger">{{ $student->blood_group }}</span>
                            </td>
                            <td>{{ $student->admission_fee }}
                                <br/>
                                {{ $student->scholarship }}
                            </td>
                            <td>{{ $student->group }}
                                <br/>
                                {{ $student->section }}
                            </td>
                                {{-- class="{{ $student->status == 'Unapproved' ? "text-warning" : ($student->status == 'Active' ? "text-success" : "text-danger") }}" --}}
                                <td><i class="ri-checkbox-blank-circle-fill align-bottom me-2"></i>{{ $student->status }}
                            <td>
                                <div class="dropdown d-inline-block">
                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-fill align-middle"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" style="">
                                        <li><a href="" class="btn btn-success dropdown-item text-success"><i class="ri-eye-fill align-bottom me-2"></i> View</a></li>
                                        <li><a href="" class="dropdown-item edit-item-btn text-secondary"><i class="ri-pencil-fill align-bottom me-2"></i> Edit</a></li>
                                        <li>
                                            <form action="" method="post">
                                                @csrf
                                                @method('PATCH')
                                           
                                                    {{-- <x-backend.ui.button type="submit" class="dropdown-item remove-item-btn text-danger">
                                                        <span class="{{ $teacher->status == 'Unapproved' ? "text-primary" : ($teacher->status == 'Active' ? "text-danger" : "text-success") }}"><i class="{{ $teacher->status == 'Unapproved' ? "ri-close-circle-line" : ($teacher->status == 'Active' ? "ri-close-circle-line" : "ri-checkbox-blank-circle-fill") }} align-bottom me-2"></i> {{ $teacher->status == 'Unapproved' ? "Approve" : ($teacher->status == 'Active' ? "Inactive" : "Active") }}</span>
                                                    </x-backend.ui.button> --}}
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>

                    </tr>
                      @empty
                          <p>Lorem, ipsum dolor.</p>
                      @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div><!--end col-->
</div><!--end row-->
<!--end row-->



{{-- class="modal fade bs-example-modal-lg" --}}



    <!--  Large modal example -->
    <div id="modal" class="modal fade" style="display: none;"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content mb-2">
                <span class="close" onclick="document.getElementById('modal').style.display='none';">&times;</span>

                <div class="modal-body">
                    <div class="container-fluid mt-2">
                        <div class="profile-foreground position-relative mx-n4 mt-n4">
                            <div class="profile-wid-bg">
                                <img src="{{ asset('backend/assets/images/avatar.png') }}" alt="" class="profile-wid-img" />
                            </div>
                        </div>
                        <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
                            <div class="row g-4">
                                <div class="col-auto">
                                    <div class="avatar-lg">
                                        <img src="{{ asset('backend/assets/images/avatar.png') }}" alt="user-img" class="img-thumbnail rounded-circle" />
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col">
                                    <div class="p-2">
                                        <h3 class="text-white mb-1">Anna Adame</h3>
                                        <p class="text-white-75">Owner & Founder</p>
                                        <div class="hstack text-white-50 gap-1">
                                            <div class="me-2"><i class="ri-map-pin-user-line me-1 text-white-75 fs-16 align-middle"></i>California, United States</div>
                                            <div>
                                                <i class="ri-building-line me-1 text-white-75 fs-16 align-middle"></i>Themesbrand
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-12 col-lg-auto order-last order-lg-0">
                                    <div class="row text text-white-50 text-center">
                                        <div class="col-lg-6 col-4">
                                            <div class="p-2">
                                                <h4 class="text-white mb-1">24.3K</h4>
                                                <p class="fs-14 mb-0">Followers</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-4">
                                            <div class="p-2">
                                                <h4 class="text-white mb-1">1.3K</h4>
                                                <p class="fs-14 mb-0">Following</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
    
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
                                                <a class="nav-link fs-14" data-bs-toggle="tab" href="#activities" role="tab">
                                                    <i class="ri-list-unordered d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Activities</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fs-14" data-bs-toggle="tab" href="#projects" role="tab">
                                                    <i class="ri-price-tag-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Projects</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="flex-shrink-0">
                                            <a href="pages-profile-settings.html" class="btn btn-success"><i class="ri-edit-box-line align-bottom"></i> Edit Profile</a>
                                        </div>
                                    </div>
                                    <!-- Tab panes -->
                                    <div class="tab-content pt-4 text-muted">
                                        <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                            <div class="row">
                                                {{-- <div class="col-xxl-3">
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
    
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-3">Info</h5>
                                                            <div class="table-responsive">
                                                                <table class="table table-borderless mb-0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">Full Name :</th>
                                                                            <td class="text-muted">Anna Adame</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">Mobile :</th>
                                                                            <td class="text-muted">+(1) 987 6543</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">E-mail :</th>
                                                                            <td class="text-muted">daveadame@velzon.com</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">Location :</th>
                                                                            <td class="text-muted">California, United States
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">Joining Date</th>
                                                                            <td class="text-muted">24 Nov 2021</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div><!-- end card body -->
                                                    </div><!-- end card -->
    
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-4">Portfolio</h5>
                                                            <div class="d-flex flex-wrap gap-2">
                                                                <div>
                                                                    <a href="javascript:void(0);" class="avatar-xs d-block">
                                                                        <span class="avatar-title rounded-circle fs-16 bg-dark text-light">
                                                                            <i class="ri-github-fill"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div>
                                                                    <a href="javascript:void(0);" class="avatar-xs d-block">
                                                                        <span class="avatar-title rounded-circle fs-16 bg-primary">
                                                                            <i class="ri-global-fill"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div>
                                                                    <a href="javascript:void(0);" class="avatar-xs d-block">
                                                                        <span class="avatar-title rounded-circle fs-16 bg-success">
                                                                            <i class="ri-dribbble-fill"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div>
                                                                    <a href="javascript:void(0);" class="avatar-xs d-block">
                                                                        <span class="avatar-title rounded-circle fs-16 bg-danger">
                                                                            <i class="ri-pinterest-fill"></i>
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div><!-- end card body -->
                                                    </div><!-- end card -->
    
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-4">Skills</h5>
                                                            <div class="d-flex flex-wrap gap-2 fs-15">
                                                                <a href="javascript:void(0);" class="badge badge-soft-primary">Photoshop</a>
                                                                <a href="javascript:void(0);" class="badge badge-soft-primary">illustrator</a>
                                                                <a href="javascript:void(0);" class="badge badge-soft-primary">HTML</a>
                                                                <a href="javascript:void(0);" class="badge badge-soft-primary">CSS</a>
                                                                <a href="javascript:void(0);" class="badge badge-soft-primary">Javascript</a>
                                                                <a href="javascript:void(0);" class="badge badge-soft-primary">Php</a>
                                                                <a href="javascript:void(0);" class="badge badge-soft-primary">Python</a>
                                                            </div>
                                                        </div><!-- end card body -->
                                                    </div><!-- end card -->
    
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center mb-4">
                                                                <div class="flex-grow-1">
                                                                    <h5 class="card-title mb-0">Suggestions</h5>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="dropdown">
                                                                        <a href="#" role="button" id="dropdownMenuLink2" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ri-more-2-fill fs-14"></i>
                                                                        </a>
    
                                                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink2">
                                                                            <li><a class="dropdown-item" href="#">View</a></li>
                                                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="d-flex align-items-center py-3">
                                                                    <div class="avatar-xs flex-shrink-0 me-3">
                                                                        <img src="assets/images/users/avatar-3.jpg" alt="" class="img-fluid rounded-circle" />
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div>
                                                                            <h5 class="fs-14 mb-1">Esther James</h5>
                                                                            <p class="fs-13 text-muted mb-0">Frontend Developer</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-2">
                                                                        <button type="button" class="btn btn-sm btn-outline-success"><i class="ri-user-add-line align-middle"></i></button>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center py-3">
                                                                    <div class="avatar-xs flex-shrink-0 me-3">
                                                                        <img src="assets/images/users/avatar-4.jpg" alt="" class="img-fluid rounded-circle" />
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div>
                                                                            <h5 class="fs-14 mb-1">Jacqueline Steve</h5>
                                                                            <p class="fs-13 text-muted mb-0">UI/UX Designer</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-2">
                                                                        <button type="button" class="btn btn-sm btn-outline-success"><i class="ri-user-add-line align-middle"></i></button>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex align-items-center py-3">
                                                                    <div class="avatar-xs flex-shrink-0 me-3">
                                                                        <img src="assets/images/users/avatar-5.jpg" alt="" class="img-fluid rounded-circle" />
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <div>
                                                                            <h5 class="fs-14 mb-1">George Whalen</h5>
                                                                            <p class="fs-13 text-muted mb-0">Backend Developer</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-shrink-0 ms-2">
                                                                        <button type="button" class="btn btn-sm btn-outline-success"><i class="ri-user-add-line align-middle"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- end card body -->
                                                    </div>
                                                    <!--end card-->
    
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center mb-4">
                                                                <div class="flex-grow-1">
                                                                    <h5 class="card-title mb-0">Popular Posts</h5>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="dropdown">
                                                                        <a href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ri-more-2-fill fs-14"></i>
                                                                        </a>
    
                                                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink1">
                                                                            <li><a class="dropdown-item" href="#">View</a></li>
                                                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mb-4">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/small/img-4.jpg" alt="" height="50" class="rounded" />
                                                                </div>
                                                                <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                    <a href="javascript:void(0);">
                                                                        <h6 class="text-truncate fs-14">Design your apps in your own way</h6>
                                                                    </a>
                                                                    <p class="text-muted mb-0">15 Dec 2021</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex mb-4">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/small/img-5.jpg" alt="" height="50" class="rounded" />
                                                                </div>
                                                                <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                    <a href="javascript:void(0);">
                                                                        <h6 class="text-truncate fs-14">Smartest Applications for Business</h6>
                                                                    </a>
                                                                    <p class="text-muted mb-0">28 Nov 2021</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="flex-shrink-0">
                                                                    <img src="assets/images/small/img-6.jpg" alt="" height="50" class="rounded" />
                                                                </div>
                                                                <div class="flex-grow-1 ms-3 overflow-hidden">
                                                                    <a href="javascript:void(0);">
                                                                        <h6 class="text-truncate fs-14">How to get creative in your work</h6>
                                                                    </a>
                                                                    <p class="text-muted mb-0">21 Nov 2021</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end card-body-->
                                                    </div>
                                                    <!--end card-->
                                                </div> --}}
                                                <!--end col-->
                                                <div class="col-xxl-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-3">About</h5>
                                                            <p>Hi I'm Anna Adame, It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is European languages are members of the same family.</p>
                                                            <p>You always want to make sure that your fonts work well together and try to limit the number of fonts you use to three or less. Experiment and play around with the fonts that you already have in the software you’re working with reputable font websites. This may be the most commonly encountered tip I received from the designers I spoke with. They highly encourage that you use different fonts in one design, but do not over-exaggerate and go overboard.</p>
                                                            <div class="row">
                                                                <div class="col-6 col-md-4">
                                                                    <div class="d-flex mt-4">
                                                                        <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                                            <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                                                <i class="ri-user-2-fill"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-grow-1 overflow-hidden">
                                                                            <p class="mb-1">Designation :</p>
                                                                            <h6 class="text-truncate mb-0">Lead Designer / Developer</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-6 col-md-4">
                                                                    <div class="d-flex mt-4">
                                                                        <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                                            <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                                                <i class="ri-global-line"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-grow-1 overflow-hidden">
                                                                            <p class="mb-1">Website :</p>
                                                                            <a href="#" class="fw-semibold">www.velzon.com</a>
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
                                        <div class="tab-pane fade" id="activities" role="tabpanel">
                                            <div class="col-xxl-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title mb-3">About</h5>
                                                        <p>Hi I'm Anna Adame, It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is European languages are members of the same family.</p>
                                                        <p>You always want to make sure that your fonts work well together and try to limit the number of fonts you use to three or less. Experiment and play around with the fonts that you already have in the software you’re working with reputable font websites. This may be the most commonly encountered tip I received from the designers I spoke with. They highly encourage that you use different fonts in one design, but do not over-exaggerate and go overboard.</p>
                                                        <div class="row">
                                                            <div class="col-6 col-md-4">
                                                                <div class="d-flex mt-4">
                                                                    <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                                        <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                                            <i class="ri-user-2-fill"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-grow-1 overflow-hidden">
                                                                        <p class="mb-1">Designation :</p>
                                                                        <h6 class="text-truncate mb-0">Lead Designer / Developer</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-6 col-md-4">
                                                                <div class="d-flex mt-4">
                                                                    <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                                        <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                                            <i class="ri-global-line"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-grow-1 overflow-hidden">
                                                                        <p class="mb-1">Website :</p>
                                                                        <a href="#" class="fw-semibold">www.velzon.com</a>
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
                                            <!--end card-->
                                        </div>
                                        <!--end tab-pane-->
                                        <div class="tab-pane fade" id="projects" role="tabpanel">
                                            <div class="col-xxl-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title mb-3">About</h5>
                                                        <p>Hi I'm Anna Adame, It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is European languages are members of the same family.</p>
                                                        <p>You always want to make sure that your fonts work well together and try to limit the number of fonts you use to three or less. Experiment and play around with the fonts that you already have in the software you’re working with reputable font websites. This may be the most commonly encountered tip I received from the designers I spoke with. They highly encourage that you use different fonts in one design, but do not over-exaggerate and go overboard.</p>
                                                        <div class="row">
                                                            <div class="col-6 col-md-4">
                                                                <div class="d-flex mt-4">
                                                                    <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                                        <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                                            <i class="ri-user-2-fill"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-grow-1 overflow-hidden">
                                                                        <p class="mb-1">Designation :</p>
                                                                        <h6 class="text-truncate mb-0">Lead Designer / Developer</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-6 col-md-4">
                                                                <div class="d-flex mt-4">
                                                                    <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                                        <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                                            <i class="ri-global-line"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-grow-1 overflow-hidden">
                                                                        <p class="mb-1">Website :</p>
                                                                        <a href="#" class="fw-semibold">www.velzon.com</a>
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
                                            <!--end card-->
                                        </div>
                                    </div>
                                    <!--end tab-content-->
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
    
                    </div><!-- container-fluid -->
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
                    <button type="button" class="btn btn-primary ">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->  

@endsection