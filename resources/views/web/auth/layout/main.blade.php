@extends('layouts.app')
@section('container')
    <div class="min-vh-100 d-flex flex-column">
        @include('web.auth.partials.navbar')
        <div class="flex-grow-1 d-grid">
            <div class="container d-flex align-items-center justify-content-center py-4">
                @yield('content')
            </div>
        </div>
    </div>
@endsection