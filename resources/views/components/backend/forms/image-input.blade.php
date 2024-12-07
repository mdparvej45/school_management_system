@php
    $name = $attributes->get('name');
    $id = $attributes->has('id') ? $attributes->get('id') : 'imageFile';
    $image = $attributes->get('image');
    $class = $attributes->get('class');
    $style = $attributes->get('style');
    $style = $attributes->get('required');
    $label_class = $attributes->get('label_class') ? $attributes->get('label_class') : 'label';

    $note = $attributes->has('note') ? $attributes->get('note') : 'Accepted files : <span class="text-success" style="font-weight: 500;">jpg, png, svg, webp up to 5 MB</span> ';
@endphp
<div class="mb-2">
    <label for="{{ $id }}" class="{{ $label_class }}">
        @if ($attributes->has('label'))
            <div class="mb-1">
                <span class="form-label text-capitalize">{{ $attributes->get('label') }}
                  @if ($attributes->has('required'))
                  <span class="text-danger">
                    *</span>
                  @endif
                </span>
            </div>
        @endif
        <input id="{{ $id }}" name="{{ $name }}"
        @if ($attributes->has('required'))
            required
        @endif
        type="file" hidden>
        <img class="w-100 border border-1 border-primary {{ $class }}" style="{{ $style }}"
            id="live-{{ $id }}"
            src="{{ $image ? useImage($image) : asset('backend/assets/images/placeholder.jpg') }}">
    </label>

    @error($name)
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

@push('customJs')
    {{-- Photo Preview for uploads --}}
    <script>
        $(document).ready(function() {

            const input = $('#{{ $id }}')
            input.on('input', e => {
                const image = $('#live-' + e.target.id)
                const url = URL.createObjectURL(e.target.files[0])
                image.attr('src', url)
            })
        });
    </script>
    {{-- Photo Preview for uploads --}}
@endPush
