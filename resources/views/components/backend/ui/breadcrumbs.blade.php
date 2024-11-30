@php
    $list = $attributes->get('list');
@endphp
<div class="row ">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    @foreach ($list as $item )
                    <li class="breadcrumb-item active">{{ $item }}</li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</div>
