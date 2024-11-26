@php
    $label = $attributes->get('label');
    $required = $attributes->get('required');
    $name = $attributes->get('name');
    $class = $attributes->get('class');
    $class = str($class)->contains('dotted-border') ? $class : 'form-control px-3 py-2 border-focus-2' . $class;
    $type = $attributes->get('type');
    // dd($type);
@endphp

<div class="mb-3">
    @if ($label)
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
        @if ($required)
        <span class="text-danger">*</span>
        @endif
    @endif

    @if ($type == 'password')
    <div class="position-relative auth-pass-inputgroup mb-3">
        <input class="{{ $class }} pe-5 
        @error($name)
        is-invalid
        @enderror"
        {{ $attributes->merge(['placeholder' => $label])->merge(['value' => old($name)]) }}>
        <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
        @error($name)
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    @else
    <input class="{{ $class }} 
        @error($name)
         is-invalid
        @enderror"
        {{ $attributes->merge(['placeholder' => $label])->merge(['value' => old($name)]) }}>
        @error($name)
        <span class="text-danger">{{ $message }}</span>
        @enderror
    @endif


</div> 