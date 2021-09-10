<html lang="en"><head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Katen - Minimal Blog &amp; Magazine HTML Theme</title>
        <meta name="description" content="Katen - Minimal Blog &amp; Magazine HTML Theme">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

       <!-- STYLES -->
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/all.min.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/simple-line-icons.css') }}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" type="text/css" media="all">
    <style>
.error{
    color:#FE4F70;
}
</style></head>
    <body class="antialiased">

        <div id="app">
            <div class="site-wrapper">
                <header class="header-default">
                    <nav class="navbar navbar-expand-lg"><div class="container-xl">
                        <a href="index.html" class="navbar-brand">
                            <img src="{{ asset('assets/frontend/images/logo.svg') }}" alt="logo">
                        </a> 
                        <div class="collapse navbar-collapse">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item dropdown active">
                                    <a href="index.html" class="nav-link dropdown-toggle">Home</a>
                                     <ul class="dropdown-menu">
                                         <li>
                                            <a href="index.html" class="dropdown-item">Magazine</a>
                                        </li>
                                         <li>
                                             <a href="personal.html" class="dropdown-item">Personal</a>
                                         </li> 
                                         <li>
                                             <a href="personal-alt.html" class="dropdown-item">Personal Alt</a>
                                        </li> 
                                        <li>
                                            <a href="minimal.html" class="dropdown-item">Minimal</a>
                                        </li> 
                                        <li>
                                            <a href="classic.html" class="dropdown-item">Classic</a>
                                        </li>
                                    </ul>
                                </li> 
                                <li class="nav-item">
                                    <a href="category.html" class="nav-link">Lifestyle</a>
                                </li> 
                                <li class="nav-item dropdown">
                                    <a href="/register" class="nav-link">Register</a>
                                </li> 
                                <li class="nav-item">
                                    <a href="/login" aria-current="page" class="nav-link router-link-exact-active router-link-active">Login</a>
                                </li>
                            </ul>
                        </div> 
                        <div class="header-right">
                            <ul class="social-icons list-unstyled list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li> 
                                <li class="list-inline-item"><a href="#">
                                    <i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-instagram"></i></a>
                                    </li> 
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-pinterest"></i></a></li> 
                                        <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li> 
                                        <li class="list-inline-item"><a href="#"><i class="fab fa-youtube">

                                        </i></a></li></ul> 
                                        <div class="header-buttons">
                                            <button class="search icon-button"><i class="icon-magnifier"></i>
                                            </button> <button class="burger-menu icon-button"><span class="burger-icon"></span>
                                            </button>
                                        </div>
                                </div>
                            </div>
                        </nav>
                    </header> 
                    <section class="main-content">
                        <div class="container-xl">
                            <div class="row gy-4 d-flex justify-content-center">
                                <div class="col-lg-6">
                                    <form>
                                        <div class="col-12 d-flex justify-content-end"><!----><br>
                                            </div> 
                                                <div class="form-group row">
                                                    <label for="email" class="col-sm-2 col-form-label">Email</label> 
                                                    <div class="col-sm-10">
                                                        <input type="email" name="email" id="email" placeholder="Email" class="form-control"> 
                                                        <div class="col-12 d-flex justify-content-end"><!----><br>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label> 
                                            <div class="col-sm-10"><input type="password" name="password" id="inputPassword3" placeholder="Password" class="form-control"> 
                                                <div class="col-12 d-flex justify-content-end"><!----><br>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="form-group row">
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn" style="background: linear-gradient(to right, rgb(254, 79, 112) 0%, rgb(255, 163, 135) 100%); padding: 1rem 4rem;">Login</button>
                                        </div>
                                        </div>
                                    </form>
                                </div>
                            </div> 
                            <footer>
                                <div class="container-xl">
                                    <div class="footer-inner">
                                        <div class="row d-flex align-items-center gy-4">
                                            <div class="col-md-4"><span class="copyright">© 2021 Ela - the tech nerd.</span>
                                        </div>
                                        <div class="col-md-4 text-center">
                                        <ul class="social-icons list-unstyled list-inline mb-0">
                                            <li class="list-inline-item">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li> 
                                                <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li> 
                                                <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li> 
                                                <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li> 
                                                <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4"><a href="#" id="return-to-top" class="float-md-end">
                                        <i class="icon-arrow-up"></i>Back to Top</a></div></div></div></div></footer></div></section></div></div>
        <!-- JAVA SCRIPTS -->
        <script src="/js/app.js"></script>
    

</body></html>