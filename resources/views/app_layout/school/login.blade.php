<!doctype html>
<html lang="en">

<head>
    <title>Oculux | Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description"
        content="Oculux Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
    <meta name="author" content="GetBootstrap, design by: puffintheme.com">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('app_assets/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app_assets/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app_assets/assets/vendor/animate-css/vivify.min.css') }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('app_assets/assets/css/site.min.css') }}">


</head>

<body class="theme-cyan font-montserrat light_version" style="background-color: #f3f7fb;">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
            <div class="bar4"></div>
            <div class="bar5"></div>
        </div>
    </div>

    <!-- Login -->
    <div class="auth-main2 particles_js">
        <div class="auth_div vivify fadeInTop">

            <div class="card shadow-sm border-0">
                <div class="body p-4">

                    <!-- Logo / Image -->
                    <div class="login-img text-center mb-4">
                        <img class="img-fluid" src="{{ asset('app_assets/assets/images/login-img.png') }}"
                            alt="Login">
                    </div>

                    <!-- Login Form -->
                    <form class="form-auth-small" action="{{ route('school.login.form') }}" method='post'>
                        @csrf
                        <div class="text-center mb-4">
                            <h4 class="font-weight-bold mb-1 roboto-slab-font">
                                Welcome Back
                            </h4>
                            <p class="text-muted mb-0">
                                Login to your account
                            </p>
                        </div>

                        <!-- Email -->
                        <div class="form-group mb-3">
                            <label for="signin-email" class="small font-weight-bold text-muted">
                                Email Address
                            </label>

                            <input type="email" class="form-control" id="signin-email" placeholder="Enter your email"
                                autocomplete="false" autocomplete="email" name='{{ old('email') }}'>

                            @error('email')
                                <span class='text-danger'>{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="form-group mb-3">
                            <label for="signin-password" class="small font-weight-bold text-muted">
                                Password
                            </label>

                            <input type="password" class="form-control" id="signin-password"
                                placeholder="Enter your password" autocomplete="current-password" name='password'>
                            @error('password')
                                <span class='text-danger'>{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Remember / Forgot -->
                        <div class="d-flex justify-content-between align-items-center mb-4">

                            <label class="fancy-checkbox element-left mb-0">
                                <input type="checkbox">
                                <span>Remember me</span>
                            </label>

                            <a href="page-forgot-password.html" class="small">
                                Forgot password?
                            </a>

                        </div>

                        <!-- Login -->
                        <button type="submit" class="btn btn-primary btn-block">
                            LOGIN
                        </button>

                        <!-- Register -->
                        <div class="text-center mt-4">
                            <span class="text-muted small">
                                Don't have an account?
                            </span>

                            <a href="page-register.html" class="small font-weight-bold">
                                Register
                            </a>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('app_assets/assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('app_assets/assets/bundles/vendorscripts.bundle.js') }}"></script>
    <script src="{{ asset('app_assets/assets/bundles/mainscripts.bundle.js') }}"></script>

</body>

</html>
