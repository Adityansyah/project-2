@extends('admin.auth.layouts-auth')
@section('title', 'Login')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xxl-4 col-lg-5">
            <div class="card">
                <!-- Logo -->
                <div class="card-header pt-4 pb-4 text-center bg-primary">
                    <a href="index.html">
                        <span><img src="assets/images/logo.png" alt="" height="18"></span>
                    </a>
                </div>

                <div class="card-body p-4">

                    <div class="text-center w-75 m-auto">
                        <h4 class="text-dark-50 text-center pb-0 fw-bold">Sign In</h4>
                        <p class="text-muted mb-4">Enter your email address and password to access admin panel.
                        </p>
                    </div>
                    @livewire('admin.auth.auth-login-controller')
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->

            <div class="row mt-3">
                <div class="col-12 text-center">
                    <p class="text-muted">Don't have an account?
                        <a href="{{ route('auth.register') }}" class="text-muted ms-1"><b>Sign Up</b></a>
                    </p>
                </div> <!-- end col -->
            </div>

        </div>
    </div>

@endsection
