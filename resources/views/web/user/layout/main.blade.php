@extends('layouts.app')
@section('container')
    @include('web.user.partials.navbar')
    <div class="min-vh-100">
        @yield('content')
    </div>
    @include('web.user.partials.footer')
@endsection