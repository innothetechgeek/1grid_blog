<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<html>
    <head>
        <title>1grid blog - @yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
        <meta name="author" content="Creative Tim">
        <title>Cool Blog</title>        
        <!-- Favicon -->
        <link rel="icon" href="{{ asset('assets/img/brand/favicon.png') }}" type="image/png">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <!-- Icons -->
        <link rel="stylesheet" href="{{ asset('assets/backend/css/vendor/nucleo/css/nucleo.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/backend/css/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
        <!-- Argon CSS -->
        <link rel="stylesheet" href="{{ asset('assets/backend/css/argon.css?v=1.2.0') }}" type="text/css">

        <link rel="stylesheet" href="{{ asset('assets/backend/css/jquery.toast.min.css') }}" type="text/css">
        
        <link rel="stylesheet" href="{{ asset('assets/backend/css/jquery-confirm.min.css') }}" type="text/css">
    </head>
    <body>
        @section('sidebar')
            <!-- Sidenav -->
            <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
                <div class="scrollbar-inner">
                    <!-- Brand -->
                    <div class="sidenav-header  align-items-center">
                        <a class="navbar-brand" href="javascript:void(0)">
                            <img src="{{ asset('assets/backend/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
                        </a>
                    </div>
                    <div class="navbar-inner">
                        <!-- Collapse -->
                        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                            <!-- Nav items -->
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">
                                        <i class="ni ni-tv-2 text-primary"></i>
                                        <span class="nav-link-text">Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('post/list') }}">
                                        <i class="ni ni-bullet-list-67 text-default"></i>
                                        <span class="nav-link-text">Posts</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="profile.html">
                                        <i class="ni ni-single-02 text-yellow"></i>
                                        <span class="nav-link-text">Profile</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('logout') }}">
                                        <i class="ni ni-key-25 text-info"></i>
                                        <span class="nav-link-text">Logout</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- Divider -->
                            <hr class="my-3">
                
                        </div>
                    </div>
                </div>
            </nav>
        @show
        
        @yield('content')
        
    </body>
</html>