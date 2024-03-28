@extends('Back.Auth.partials.auth-master')
@section('title')
    Register Page || Back
@endsection
@section('content')
    <h4 class="mb-2">Welcome to Back! 👋</h4>
    <p class="mb-4">Please sign-in to your account and start the adventure</p>
    <form id="formAuthentication" class="mb-3" action="{{ route('back.register') }}"method="POST">
        @csrf
        <!-- name -->
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="name" value="{{ old('name') }}"
                placeholder="Enter your username" autofocus />
        </div>
        @error('name')
            <span class="text-danger mt-2">{{ $message }}</span>
        @enderror
        <!-- end name -->
        <!-- Emial -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email"
                value="{{ old('email') }}" />
        </div>
        @error('email')
            <span class="text-danger mt-2">{{ $message }}</span>
        @enderror
        <!-- end Email -->
        <!-- Password -->
        <div class="mb-3 form-password-toggle">
            <label class="form-label" for="password">Password</label>
            <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
            </div>
        </div>
        @error('password')
            <span class="text-danger mt-2">{{ $message }}</span>
        @enderror
        <!-- end password -->
        <!-- Password Confirmation -->
        <div class="mb-3 form-password-toggle">
            <label class="form-label" for="password">Password_confirmation</label>
            <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password_confirmation"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
            </div>
        </div>
        @error('password_confirmation')
            <span class="text-danger mt-2">{{ $message }}</span>
        @enderror
        <!-- end password_confirmation -->
        {{--  <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                <label class="form-check-label" for="terms-conditions">
                    I agree to
                    <a href="javascript:void(0);">privacy policy & terms</a>
                </label>
            </div>
        </div>  --}}
        <button class="btn btn-primary d-grid w-100">Sign up</button>
    </form>

    <p class="text-center">
        <span>Already have an account?</span>
        <a href="{{ route('back.login') }}">
            <span>Sign in instead</span>
        </a>
    </p>
@endsection
