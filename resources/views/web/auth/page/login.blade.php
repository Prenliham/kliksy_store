@extends('web.auth.layout.main')
@section('title', config('app.name') . ' | Login')
@section('content')
    @if (session('error'))
        <x-alert type="error" title="Error">{{ session('error') }}</x-alert>
    @endif
    <section class="px-4 py-5 shadow-lg rounded-5 form-auth">
        <div class=" text-center">
            <div class="fs-4 fw-medium">Welcome <span class="fw-semibold">Back!</span></div>
            <div class="opacity-75"><small>We missed you! Please login to continue.</small></div>
        </div>
        <form action="{{ route('login.store') }}" method="POST">
            @csrf
            {{-- input form  --}}
            <div class="d-grid gap-2 mt-4">
                <div class="d-grid gap-1">
                    <label for="email" class="fw-medium ms-2">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="d-grid gap-1">
                    <label for="password" class="fw-medium ms-2">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Enter your password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            {{-- get password  --}}
            <div class="d-flex align-items-center justify-content-between mt-3">
                <div class="d-flex align-items-center gap-1">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember"><small>Remember me</small></label>
                </div>
                <a href="" class="text-decoration-none"><small>Forgot password?</small></a>
            </div>
            {{-- button submit --}}
            <div class="d-grid gap-3 mt-3">
                <button type="submit" class="btn btn-primary">Login</button>
                <button type="button" class="btn btn-light d-flex align-items-center justify-content-center gap-1 shadow"><x-icon name="google"></x-icon><span class="opacity-75">Sign in with google</span></button>
            </div>
            {{-- register  --}}
            <div class="text-center mt-4">
                <div>Don't have account? <a href="{{ route('register') }}" class="text-decoration-none">Sign up</a></div>
            </div>
        </form>
    </section>
@endsection
