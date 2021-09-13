@extends('layouts.frontend')
@section('content')

<!-- preloader -->
<div id="preloader">
	<div class="book">
		<div class="inner">
			<div class="left"></div>
			<div class="middle"></div>
			<div class="right"></div>
		</div>
		<ul>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</div>

<!-- site wrapper -->
<div class="site-wrapper">

	<div class="main-overlay"></div>

    <div class="container-xl">
        <!-- header -->
        <header class="header-minimal">
            
            <div class="row align-items-center">

                <div class="col-4">
                    <button class="burger-menu icon-button">
                        <span class="burger-icon"></span>
                    </button>
                </div>

                <div class="col-4 text-center">
                    <!-- site logo -->
                    <a class="navbar-brand" href="minimal.html"><img src="{{ asset('assets/frontend/images/logo.svg') }}" alt="logo" /></a> 
                </div>

                <div class="col-4">
                    <button class="search icon-button float-end">
                        <i class="icon-magnifier"></i>
                    </button>
                </div>

            </div>

        </header>
    </div>

	<!-- section main content -->
	<section class="main-content-lg">
        <div class="container-minimal">

            @foreach($posts as $key => $post)
                <!-- post -->
                <div class="post post-xl">
                    <!-- top section -->
                    <div class="post-top">
                        <ul class="meta list-inline mb-0">
                            <li class="list-inline-item"><a href="#"><img height="20" width="20" src="https://i.pravatar.cc/150?img={{$post->id}}" class="author" alt="author"/>Katen Doe</a></li>
                            <li class="list-inline-item">29 March 2021</li>
                            <li class="list-inline-item"><i class="icon-bubble"></i> (0)</li>
                            <li class="list-inline-item rate-post" data-post-id = "{{$post->id}}"  data-bs-toggle="modal" data-bs-target="#ratingModal"><a href="#"><i class="fas fa-star"></i> Rate this post</a></li>
                        </ul>
                        <h5 class="post-title mb-0 mt-4"><a href="blog-single.html">{{$post->title}}</a></h5>
                    </div>
                    <!-- thumbnail -->
                    <div class="thumb rounded">
                        <a href="category.html" class="category-badge lg position-absolute">Inspiration</a>
                        <a href="blog-single.html">
                            <div class="inner">
                                <?php $post_id = $post->id;
                                    $image = $post->image;
                                ?>
                                <img src='<?php echo asset("images/post_images/$post_id/$image")?>' alt="post-title" />
                            </div>
                        </a>
                    </div>
                    <!-- details -->
                    <div class="details">
                        <p class="excerpt mb-0">{{ substr($post->content,0,60) }}..</p>
                    </div>
                    <div class="post-bottom clearfix d-flex align-items-center">
                        <div class="social-share me-auto">
                            <button class="toggle-button icon-share"></button>
                            <ul class="icons list-unstyled list-inline mb-0">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                            </ul>
                        </div>
                        <div class="float-end d-none d-md-block">
                            <a href='{{ url("post/detail/$post->id") }}' class="more-link">Continue reading<i class="icon-arrow-right"></i></a>
                        </div>
                        <div class="more-button d-block d-md-none float-end">
                            <a href="blog-single.html"><span class="icon-options"></span></a>
                        </div>
                    </div>
                </div>
            @endforeach



            <!-- pagination -->
            <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item active" aria-current="page">
                        <span class="page-link">1</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
            </nav>
        </div>
	</section>

	<!-- footer -->
	<footer>
		<div class="container-xl">
			<div class="footer-inner">
				<div class="row d-flex align-items-center gy-4">
					<!-- copyright text -->
					<div class="col-md-4">
						<span class="copyright">© 2021 Katen. Template by ThemeGer.</span>
					</div>

					<!-- social icons -->
					<div class="col-md-4 text-center">
						<ul class="social-icons list-unstyled list-inline mb-0">
							<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
						</ul>
					</div>

					<!-- go to top button -->
					<div class="col-md-4">
						<a href="#" id="return-to-top" class="float-md-end"><i class="icon-arrow-up"></i>Back to Top</a>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div><!-- end site wrapper -->

<!-- search popup area -->
<div class="search-popup">
	<!-- close button -->
	<button type="button" class="btn-close" aria-label="Close"></button>
	<!-- content -->
	<div class="search-content">
		<div class="text-center">
			<h3 class="mb-4 mt-0">Press ESC to close</h3>
		</div>
		<!-- form -->
		<form class="d-flex search-form">
			<input class="form-control me-2" type="search" placeholder="Search and press enter ..." aria-label="Search">
			<button class="btn btn-default btn-lg" type="submit"><i class="icon-magnifier"></i></button>
		</form>
	</div>
</div>

<!-- canvas menu -->
<div class="canvas-menu position-left d-flex align-items-end flex-column">
	<!-- close button -->
	<button type="button" class="btn-close" aria-label="Close"></button>

	<!-- logo -->
	<div class="logo">
		<img src="{{ asset('assets/frontend/images/logo.svg') }}" alt="Katen" />
	</div>

	<!-- menu -->
	<nav>
		<ul class="vertical-menu">
			<li class="active">
				<a href="index.html">Home</a>
				<ul class="submenu">
					<li><a href="index.html">Magazine</a></li>
					<li><a href="personal.html">Personal</a></li>
					<li><a href="personal-alt.html">Personal Alt</a></li>
					<li><a href="minimal.html">Minimal</a></li>
					<li><a href="classic.html">Classic</a></li>
				</ul>
			</li>
			<li><a href="category.html">Lifestyle</a></li>
			<li><a href="category.html">Inspiration</a></li>
			<li>
				<a href="#">Pages</a>
				<ul class="submenu">
					<li><a href="category.html">Category</a></li>
					<li><a href="blog-single.html">Blog Single</a></li>
					<li><a href="blog-single-alt.html">Blog Single Alt</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
	</nav>

	<!-- social icons -->
	<ul class="social-icons list-unstyled list-inline mb-0 mt-auto w-100">
		<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
		<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
	</ul>
</div>

<!-- Modal -->
<div class="modal fade" id="ratingModal" tabindex="-1" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="ratingForm" action = '{{ url("post/rate") }}' method= "POST">
            @csrf
            <div class="modal-body">
                        
                    <div id="ratingOptions">              
                    </div>

                    <input type = "hidden" name='rating' />
                    <input type = "hidden" name='post_id' />
                    
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
      </form>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<script>

  
    $('.rate-post').click(function(){
        var post_id = $(this).attr('data-post-id');
        $('#ratingForm').find('input[name=post_id]').val(post_id)
    });
    $(function () {
 
        $("#ratingOptions").rateYo({
            normalFill: "#A0A0A0"
        });

    });

    $(function(){

         $("#ratingOptions").rateYo().on("rateyo.change",function(e,data){

            var rating = data.rating;
          
            $(this).parent().find('input[name=rating]').val(rating);          

         });

    });
</script>
@endsection