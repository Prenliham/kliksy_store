@props([
    'name',
    'color' => "currentColor",
    'width' => 24,
    'height',
])

@php
    if (!isset($height)) {
        $height = $width;
    }
    $path = '';
    if (isset($name)) {
        $path = "components.icons.$name";
    }
@endphp

@if (view()->exists($path))
    <span style="color:{{ $color }};" class="d-flex">
        @include($path)
    </span>
@else
    <span>icon not found!</span>
@endif