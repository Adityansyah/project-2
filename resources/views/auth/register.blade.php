@extends('auth.layouts-auth')
@section('title', 'Register')
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
                        <h4 class="text-dark-50 text-center mt-0 fw-bold">Free Sign Up</h4>
                        <p class="text-muted mb-4">Don't have an account? Create your account, it takes less than a minute
                        </p>
                    </div>
                    @livewire('auth.register-controller')
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>
    </div>
@endsection
