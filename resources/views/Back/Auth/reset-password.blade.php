@extends('Front.Auth.partials.auth-master')
@section('title')
    Forget-Password Page
@endsection

@section('content')
    <h4 class="mb-2">Rest Your Password Password? 🔒</h4>
    <form id="formAuthentication" class="mb-3" action="{{ route('back.password.store') }}" method="POST">
        @csrf
         <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{$request->email }}"
                placeholder="Enter your email" autofocus />
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
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
        <button class="btn btn-primary d-grid w-100">Reset Passwor</button>
    </form>
@endsection
