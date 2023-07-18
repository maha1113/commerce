
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Fruitkha</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="{{ asset('site2assets/image/png" href="assets/img/favicon.png') }}">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{ asset('site2assets/assets/css/all.min.css') }}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ asset('site2assets/assets/bootstrap/css/bootstrap.min.css') }}">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{ asset('site2assets/assets/css/owl.carousel.css') }}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{ asset('site2assets/assets/css/magnific-popup.css') }}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{ asset('site2assets/assets/css/animate.css') }}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{ asset('site2assets/assets/css/meanmenu.min.css') }}">
	<!-- main style -->
	<link rel="stylesheet" href="{{ asset('site2assets/assets/css/main.css') }}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{ asset('site2assets/assets/css/responsive.css') }}">


</head>
<body>
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="{{ route('site2.index') }}">
								<img src="{{ asset('site2assets/assets/img/logo.png') }}" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="{{ route('site2.index') }}">{{ __('app.home') }}</a>
									<ul class="sub-menu">
										<li><a href="{{ route('site2.index') }}">{{ __('app.static home') }}</a></li>
										<li><a href="{{ route('site2.index_2') }}">{{ __('app.slider home') }}</a></li>
									</ul>
								</li>
								<li><a href="{{ route('site2.about') }}">{{ __('app.about') }}</a></li>
								<li><a href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href="{{ route('site2.not.found') }}">404 page</a></li>
										<li><a href="{{ route('site2.about') }}">{{ __('app.about') }}</a></li>
										<li><a href="{{ route('site2.cart') }}">{{ __('app.cart') }}</a></li>
                        				<li><a href="{{ route('site2.checkout') }}">{{ __('app.check out') }}</a></li>
										<li><a href="{{ route('site2.contact') }}">{{ __('app.contact') }}</a></li>
										<li><a href="{{ route('site2.news') }}">{{ __('app.news') }}</a></li>
										<li><a href="{{ route('site2.shop') }}">{{ __('app.shop') }}</a></li>
									</ul>
								</li>
								<li><a href="{{ route('site2.news') }}">{{ __('app.news') }}</a>
									<ul class="sub-menu">
										<li><a href="{{ route('site2.news') }}">{{ __('app.news') }}</a></li>
										<li><a href="{{ route('site2.single.news') }}">{{ __('app.single news') }}</a></li>
									</ul>
								</li>
								<li><a href="{{ route('site2.contact') }}">{{ __('app.contact') }}</a></li>
								<li><a href="{{ route('site2.shop') }}">{{ __('app.shop') }}</a>
									<ul class="sub-menu">
										<li><a href="{{ route('site2.shop') }}">{{ __('app.shop') }}</a></li>
										<li><a href="{{ route('site2.checkout') }}">{{ __('app.check out') }}</a></li>
										<li><a href="{{ route('site2.single.product') }}">{{ __('app.single product') }}</a></li>
										<li><a href="{{ route('site2.cart') }}">{{ __('app.cart') }}</a></li>
									</ul>
								</li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="{{ route('site2.cart') }}"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

    @yield('content')


	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>34/8, East Hukupara, Gifirtok, Sadan.</li>
							<li>support@fruitkha.com</li>
							<li>+00 111 222 3333</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">{{ __('app.pages') }}</h2>
						<ul>
							<li><a href="{{ route('site2.index') }}">{{ __('app.home') }}</a></li>
							<li><a href="{{ route('site2.about') }}">{{ __('app.about') }}</a></li>
							<li><a href="{{ route('site2.shop') }}">{{ __('app.shop') }}</a></li>
							<li><a href="{{ route('site2.news') }}">{{ __('app.news') }}</a></li>
							<li><a href="{{ route('site2.contact') }}">{{ __('app.contact') }}</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->

	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.<br>
						Distributed By - <a href="https://themewagon.com/">Themewagon</a>
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->

	<!-- jquery -->
	<script src="{{ asset('site2assets/assets/js/jquery-1.11.3.min.js') }}"></script>
	<!-- bootstrap -->
	<script src="{{ asset('site2assets/assets/bootstrap/js/bootstrap.min.js') }}"></script>
	<!-- count down -->
	<script src="{{ asset('site2assets/assets/js/jquery.countdown.js') }}"></script>
	<!-- isotope -->
	<script src="{{ asset('site2assets/assets/js/jquery.isotope-3.0.6.min.js') }}"></script>
	<!-- waypoints -->
	<script src="{{ asset('site2assets/assets/js/waypoints.js') }}"></script>
	<!-- owl carousel -->
	<script src="{{ asset('site2assets/assets/js/owl.carousel.min.js') }}"></script>
	<!-- magnific popup -->
	<script src="{{ asset('site2assets/assets/js/jquery.magnific-popup.min.js') }}"></script>
	<!-- mean menu -->
	<script src="{{ asset('site2assets/assets/js/jquery.meanmenu.min.js') }}"></script>
	<!-- sticker js -->
	<script src="{{ asset('site2assets/assets/js/sticker.js') }}"></script>
	<!-- main js -->
	<script src="{{ asset('site2assets/assets/js/main.js') }}"></script>

</body>
</html>
