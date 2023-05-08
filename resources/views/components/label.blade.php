@props(['for', 'value', 'required' => false, 'tooltip' => null])

{{-- @php
    $requiredClasses = 'text-danger';
    $requiredLabel = '*';
@endphp --}}

<label for="{{ $for }}" {{ $attributes->merge(['class' => 'form-label fs-5']) }}>
    {{ $value ?? $slot }}
    @if ($required)
        {{-- <span class="{{ $requiredClasses }}">{{ $requiredLabel }}</span> --}}
        <span class="text-danger">*</span>
    @endif
    @if($tooltip)
        <i class="text-danger" data-feather="info" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $tooltip }}"></i>
    @endif
</label>
