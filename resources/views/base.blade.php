<!DOCTYPE html>
<html lang="en">
  <head>
    <title>JobPortal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{!! asset('assets/css/open-iconic-bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/animate.css') !!}">

    <link rel="stylesheet" href="{!! asset('assets/css/owl.carousel.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/owl.theme.default.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/magnific-popup.css') !!}">

    <link rel="stylesheet" href="{!! asset('assets/css/aos.css') !!}">

    <link rel="stylesheet" href="{!! asset('assets/css/ionicons.min.css') !!}">

    <link rel="stylesheet" href="{!! asset('assets/css/bootstrap-datepicker.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/jquery.timepicker.css') !!}">


    <link rel="stylesheet" href="{!! asset('assets/css/flaticon.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/icomoon.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
  </head>
  <body>

	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">JobPortal</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
	          <li class="nav-item cta mr-md-2"><a href="{{ route('company.login') }}" class="nav-link">Post a Job</a></li>
	          <li class="nav-item cta cta-colored"><a href="{{ route('apllicant.login') }}" class="nav-link">Want a Job</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap js-fullheight" style="background-image: url('assets/images/image_5.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We have great job offers you deserve!</p>
            <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Your Dream <br><span>Job is Waiting</span></h1>


          </div>
        </div>
      </div>
    </div>



@yield('content')

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
        	<div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Employers</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Register</a></li>
                <li><a href="#" class="py-2 d-block">Post a Job</a></li>
                <li><a href="#" class="py-2 d-block">Advance Skill Search</a></li>
                <li><a href="#" class="py-2 d-block">Recruiting Service</a></li>
                <li><a href="#" class="py-2 d-block">Blog</a></li>
                <li><a href="#" class="py-2 d-block">Faq</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Workers</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Register</a></li>
                <li><a href="#" class="py-2 d-block">Post Your Skills</a></li>
                <li><a href="#" class="py-2 d-block">Job Search</a></li>
                <li><a href="#" class="py-2 d-block">Emploer Search</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://laradevsbd.com" target="_blank">LaradevsBD</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{!! asset('assets/js/jquery.min.js') !!}"></script>
  <script src="{!! asset('assets/js/jquery-migrate-3.0.1.min.js') !!}"></script>
  <script src="{!! asset('assets/js/popper.min.js') !!}"></script>
  <script src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
  <script src="{!! asset('assets/js/jquery.easing.1.3.js') !!}"></script>
  <script src="{!! asset('assets/js/jquery.waypoints.min.js') !!}"></script>
  <script src="{!! asset('assets/js/jquery.stellar.min.js') !!}"></script>
  <script src="{!! asset('assets/js/owl.carousel.min.js') !!}"></script>
  <script src="{!! asset('assets/js/jquery.magnific-popup.min.js') !!}"></script>
  <script src="{!! asset('assets/js/aos.js') !!}"></script>
  <script src="{!! asset('assets/js/jquery.animateNumber.min.js') !!}"></script>
  <script src="{!! asset('assets/js/bootstrap-datepicker.js') !!}"></script>
  <script src="{!! asset('assets/js/jquery.timepicker.min.js') !!}"></script>
  <script src="{!! asset('assets/js/scrollax.min.js') !!}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{!! asset('assets/js/google-map.js') !!}"></script>
  <script src="{!! asset('assets/js/main.js') !!}"></script>

  </body>
</html>
