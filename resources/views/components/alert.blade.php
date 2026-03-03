@props([
    'type' => '',
    'title' => 'title',
])

@php
    $typeList = ['success', 'error'];
@endphp

@if (in_array($type, $typeList))
    <section class="alert-section">
        <div class="alert-custom {{ $type == 'error' ? 'bg-danger' : 'bg-success' }} text-light">
            {{-- message  --}}
            <div><small><span class="fw-bold">{{ $title }} </span> {{ $slot }}</small></div>
            {{-- icons  --}}
            <div><x-icon name="{{ $type }}" width="28"></x-icon></div>
        </div>
    </section>
@else
    <section class="alert-section">
        <div class="alert-custom bg-danger text-light">
           <div>Type alert not found!</div>
        </div>
    </section>
@endif
