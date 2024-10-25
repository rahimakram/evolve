@extends('admin.layouts.master-without-nav')

@section('title')
    @lang('translation.Login')
@endsection

@section('body')

    <body>
    @endsection

    @section('content')
        <div class="account-pages akr-log-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary-subtle akr-logform-bg">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="p-4">
                                            <img src="{{ URL::asset('dist/images/logo-black.png') }}" alt=""
                                                class="img-fluid welcom-back-logo">
                                        </div>
                                    </div>
                                    <div class="col-7 align-self-end">
                                        <div class="text-black p-4">
                                            <h5>Welcome Back !</h5>
                                            <p>Sign in to continue to Evolve.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                {{-- <div class="auth-logo">
                                    <a href="index" class="auth-logo-light">
                                        <div class="avatar-lg profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{ URL::asset('dist/images/logo.png') }}" alt=""
                                                    class="">
                                            </span>
                                        </div>
                                    </a>

                                    <a href="index" class="auth-logo-dark">
                                        <div class="avatar-lg profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="{{ URL::asset('dist/images/logo.png') }}" alt=""
                                                    class="img-fluid">
                                            </span>
                                        </div>
                                    </a>
                                </div> --}}
                                <div class="p-2">
                                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="username" class="form-label">Email <span
                                                    class="text-danger">*</span></label>
                                            <input name="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                value="{{ old('email') }}" id="username" placeholder="Enter Email"
                                                autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <div
                                                class="input-group auth-pass-inputgroup @error('password') is-invalid @enderror">
                                                <input type="password" name="password"
                                                    class="form-control  @error('password') is-invalid @enderror"
                                                    id="userpassword" value="" placeholder="Enter password"
                                                    aria-label="Password" aria-describedby="password-addon">
                                                <button class="btn btn-light " type="button" id="password-addon"><i
                                                        class="mdi mdi-eye-outline"></i></button>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember-check">
                                            <label class="form-check-label" for="remember-check"
                                                {{ old('remember') ? 'checked' : '' }}>
                                                Remember me
                                            </label>
                                        </div>

                                        <div class="mt-3 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">Log
                                                In</button>
                                        </div>

                                        {{-- <div class="mt-4 text-center">
                                            <h5 class="font-size-14 mb-3">Sign in with</h5>

                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="javascript::void()"
                                                        class="social-list-item bg-primary text-white border-primary">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript::void()"
                                                        class="social-list-item bg-info text-white border-info">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript::void()"
                                                        class="social-list-item bg-danger text-white border-danger">
                                                        <i class="mdi mdi-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> --}}

                                        {{-- <div class="mt-4 text-center">
                                            <a href="auth-recoverpw" class="text-muted"><i
                                                    class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                        </div> --}}
                                    </form>
                                </div>

                            </div>
                        </div>
                        {{-- <div class="mt-5 text-center">

                            <div>
                                <p>Don't have an account ? <a href="auth-register" class="fw-medium text-primary">
                                        Signup now </a> </p>
                                <p>© <script>
                                        document.write(new Date().getFullYear())

                                    </script> Skote. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                                </p>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
        </div>
        <!-- end account-pages -->
    @endsection
