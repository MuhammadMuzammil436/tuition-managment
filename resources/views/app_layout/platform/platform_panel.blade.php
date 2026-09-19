<!doctype html>
<html lang="en">

<head>
    <title>SMS | @yield('title', 'Default')</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    {{-- <meta
      name="description"
      content="Oculux Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities."
    />
    <meta name="author" content="GetBootstrap, design by: puffintheme.com" /> --}}

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('app_assets/assets/vendor/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('app_assets/assets/vendor/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('app_assets/assets/vendor/animate-css/vivify.min.css') }}" />
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('app_assets/assets/css/site.min.css') }}" />
</head>

<body class="theme-cyan font-montserrat light_version">
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
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <div id="wrapper">
        <nav class="navbar top-navbar">
            <div class="container-fluid">
                <div class="navbar-left">
                    <div class="navbar-btn">
                        <a href="index.html"><img src="{{ asset('app_assets/assets/images/icon.svg') }}"
                                alt="Oculux Logo" class="img-fluid logo" /></a>
                        <button type="button" class="btn-toggle-offcanvas">
                            <i class="lnr lnr-menu fa fa-bars"></i>
                        </button>
                    </div>
                </div>
                <div class="navbar-right">
                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="page-login.html" class="icon-menu"><i class="icon-power"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="progress-container">
                <div class="progress-bar" id="myBar"></div>
            </div>
        </nav>
        <div id="left-sidebar" class="sidebar">
            <div class="navbar-brand">
                <a href="index.html"><img src="{{ asset('app_assets/assets/images/icon.svg') }}" alt="Oculux Logo"
                        class="img-fluid logo" /><span>Oculux</span></a>
                <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right">
                    <i class="lnr lnr-menu icon-close"></i>
                </button>
            </div>
            <div class="sidebar-scroll">
                {{-- user-account --}}
                @include('app_layout.school.common.user_account')
                {{-- user-account --}}

                {{-- left-sidebar-nav --}}
                @include('app_layout.school.common.sidebar')
                {{-- left-sidebar-nav --}}

            </div>
        </div>

        <div id="main-content">
            <div class="container-fluid">
                <div class="block-header">
                    <div class="row clearfix">
                        <div class="col-md-6 col-sm-12">
                            <h2>Stater Page</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Oculux</a></li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Stater Page
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        {{-- <div class="col-md-6 col-sm-12 text-right hidden-xs">
                            <a href="javascript:void(0);" class="btn btn-sm btn-primary btn-round" title="">Add
                                New</a>
                        </div> --}}
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src="{{ asset('app_assets/assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('app_assets/assets/bundles/vendorscripts.bundle.js') }}"></script>
    <script src="{{ asset('app_assets/assets/bundles/mainscripts.bundle.js') }}"></script>
</body>

</html>
