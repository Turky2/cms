<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>Maham Cloud</title>
		
		<!-- Favicon -->
        <link rel="icon" href="{{asset('assets/cms/img/favicon.ico')}}"  >
		
				<!--خطوط -->
				<link rel="stylesheet"  href="https://fonts.googleapis.com/earlyaccess/droidarabickufi.css">



		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('new/css/bootstrap.min.css')}}">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="{{asset('new/css/nice-select.css')}}">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{asset('new/css/font-awesome.min.css')}}">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="{{asset('new/css/icofont.css')}}">
		<!-- Slicknav -->
		<link rel="stylesheet" href="{{asset('new/css/slicknav.min.css')}}">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{asset('new/css/owl-carousel.css')}}">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="{{asset('new/css/datepicker.css')}}">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('new/css/animate.min.css')}}">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{asset('new/css/magnific-popup.css')}}">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="{{asset('new/css/normalize.css')}}">
        <link rel="stylesheet" href="{{asset('new/style.css')}}">
        <link rel="stylesheet" href="{{asset('new/css/responsive.css')}}">
		
    </head>
    <body>
	
		<!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div > 
					<img  src="{{asset('new/f2.png')}}"  />
                </div>
            </div>
        </div>
        <!-- End Preloader -->
		

	
		@include('new.header')
		<!-- End Header Area -->
		
		
		
	
		<!--/End Start schedule Area -->

		
		
	


		
		<!-- Pricing Table -->
		<section dir="rtl" class="pricing-table section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>برنامج مهام السحابي محاسبي و نقاط بيع
</h2>
							<p class="ht htt" style="color: black;font-size:14pt">الباقات الخاصة بموقعنا</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Single Table -->
					@for ($i = '1'; $i <= '16'; $i++)

					<div class="col-lg-4 col-md-12 col-12">

						<div class="single-table">
							<!-- Table Head -->
							<div class="table-head">
							
								<h1 style="font-size: 20pt;font-weight:bold"  class="title">باقة مهام لايت
</h1>
								<div class="price">
									<p class="amount">600 ريال<span>/ فى السنة</span></p>
								</div>	
							</div>
							<!-- Table List -->
							<ul class="table-list">
								<li><i class="icofont icofont-ui-check"></i> 1 فروع النشاط/مراكز التكلفة
</li>
								<li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Nullam interdum enim</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Donec ultricies metus</li>
								<li class="cross"><i class="icofont icofont-ui-close"></i>Pellentesque eget nibh</li>
							</ul>
							<div class="table-bottom">
								<a class="btn buttonm" href="#">التسجيل والاشتراك</a>
							</div>
							<!-- Table Bottom -->
						</div>
					</div>
					@endfor
					<!-- End Single Table-->
				


				</div>	
			</div>	
		</section>	
		<!--/ End Pricing Table -->
		
		
		
	
		
		
		
		
		
		
		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>برنامج المهام  السحابى المحاسبى</h2>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-google-plus"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
									<li><a href="#"><i class="icofont-pinterest"></i></a></li>
								</ul>
								<!-- End Social -->
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2018  |  All Rights Reserved by <a href="https://www.wpthemesgrid.com" target="_blank">wpthemesgrid.com</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->
		
		<!-- jquery Min JS -->
        <script src="{{asset('new/js/jquery.min.js')}}"></script>
		<!-- jquery Migrate JS -->
		<script src="{{asset('new/js/jquery-migrate-3.0.0.js')}}"></script>
		<!-- jquery Ui JS -->
		<script src="{{asset('new/js/jquery-ui.min.js')}}"></script>
		<!-- Easing JS -->
        <script src="{{asset('new/js/easing.js')}}"></script>
		<!-- Color JS -->
		<script src="{{asset('new/js/colors.js')}}"></script>
		<!-- Popper JS -->
		<script src="{{asset('new/js/popper.min.js')}}"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="{{asset('new/js/bootstrap-datepicker.js')}}"></script>
		<!-- Jquery Nav JS -->
        <script src="{{asset('new/js/jquery.nav.js')}}"></script>
		<!-- Slicknav JS -->
		<script src="{{asset('new/js/slicknav.min.js')}}"></script>
		<!-- ScrollUp JS -->
        <script src="{{asset('new/js/jquery.scrollUp.min.js')}}"></script>
		<!-- Niceselect JS -->
		<script src="{{asset('new/js/niceselect.js')}}"></script>
		<!-- Tilt Jquery JS -->
		<script src="{{asset('new/js/tilt.jquery.min.js')}}"></script>
		<!-- Owl Carousel JS -->
        <script src="{{asset('new/js/owl-carousel.js')}}"></script>
		<!-- counterup JS -->
		<script src="{{asset('new/js/jquery.counterup.min.js')}}"></script>
		<!-- Steller JS -->
		<script src="{{asset('new/js/steller.js')}}"></script>
		<!-- Wow JS -->
		<script src="{{asset('new/js/wow.min.js')}}"></script>
		<!-- Magnific Popup JS -->
		<script src="{{asset('new/js/jquery.magnific-popup.min.js')}}"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="{{asset('new/js/bootstrap.min.js')}}"></script>
		<!-- Main JS -->
		<script src="{{asset('new/js/main.js')}}"></script>
    </body>
</html>