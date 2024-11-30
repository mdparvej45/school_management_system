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
                    <div class="row gy-4">
                        <div class="col-xxl-3 col-md-6">
                           <x-backend.forms.input name="name" type="text" required label="Student name" ></x-backend.forms.input>
                        </div>
                        <!--end col-->
                        @php
                            $list = ['hello', 'three']
                        @endphp
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <x-backend.forms.select name="class" id="class" label="Class Name" required placeholder="Choice Class..." >
                                    @forelse ($list as $item)
                                    <option value="1">Declined Payment</option>
                                    @empty
                                    <option>No Class Found</option>
                                    @endforelse
                                </x-backend.forms.select>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-3 col-md-6">
                            <div>
                                <label for="iconInput" class="form-label">Input with Icon</label>
                                <div class="form-icon">
                                    <input type="email" class="form-control form-control-icon" id="iconInput" placeholder="example@gmail.com">
                                    <i class="ri-mail-unread-line"></i>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
  
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
@endsection