<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Skillhunt - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('frontendtemplate/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontendtemplate/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('frontendtemplate/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontendtemplate/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontendtemplate/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('frontendtemplate/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('frontendtemplate/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontendtemplate/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('frontendtemplate/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('frontendtemplate/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontendtemplate/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('frontendtemplate/css/style.css')}}">
  </head>
  <body>
    
	<nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-light ftco-navbar-light shadow p-3 mb-5 bg-white rounded" id="ftco-navbar">
	    <div class="container-fluid px-md-4	">
	      <a class="navbar-brand" href="index.html">Skillhunt</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="{{ route('homedesign') }}" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="{{ route('jobpost') }}" class="nav-link">Search Jobs</a></li>
	          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('jslogin') }}">{{ __('Sign in') }}</a>
          </li>
          @if(Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('jsreg') }}">{{ __('Register') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-primary text-light" href="{{ route('emplogin') }}">For Employer</a>
          </li>
           @endif
          @else
          <li class="nav-item"><a href="{{ route('cvform') }}" class="nav-link">My CV</a></li>
          <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>

                  </div>
              </li>
             @endguest
	          {{-- <li class="nav-item cta mr-md-1"><a href="new-post.html" class="nav-link">Post a Job</a></li> --}}
	          {{-- <li class="nav-item cta cta-colored"><a href="job-post.html" class="nav-link">Want a Job</a></li> --}}

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    @yield('content')

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
        	<div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Skillhunt Jobboard</h2>
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
                <li><a href="#" class="pb-1 d-block">Browse Candidates</a></li>
                <li><a href="#" class="pb-1 d-block">Post a Job</a></li>
                <li><a href="#" class="pb-1 d-block">Employer Listing</a></li>
                <li><a href="#" class="pb-1 d-block">Resume Page</a></li>
                <li><a href="#" class="pb-1 d-block">Dashboard</a></li>
                <li><a href="#" class="pb-1 d-block">Job Packages</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Candidate</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="pb-1 d-block">Browse Jobs</a></li>
                <li><a href="#" class="pb-1 d-block">Submit Resume</a></li>
                <li><a href="#" class="pb-1 d-block">Dashboard</a></li>
                <li><a href="#" class="pb-1 d-block">Browse Categories</a></li>
                <li><a href="#" class="pb-1 d-block">My Bookmarks</a></li>
                <li><a href="#" class="pb-1 d-block">Candidate Listing</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Account</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="pb-1 d-block">My Account</a></li>
                <li><a href="#" class="pb-1 d-block">Sign In</a></li>
                <li><a href="#" class="pb-1 d-block">Create Account</a></li>
                <li><a href="#" class="pb-1 d-block">Checkout</a></li>
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('frontendtemplate/js/jquery.min.js')}}"></script>
  <script src="{{asset('frontendtemplate/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('frontendtemplate/js/popper.min.js')}}"></script>
  <script src="{{asset('frontendtemplate/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontendtemplate/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('frontendtemplate/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('frontendtemplate/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('frontendtemplate/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontendtemplate/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('frontendtemplate/js/aos.js')}}"></script>
  <script src="{{asset('frontendtemplate/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('frontendtemplate/js/scrollax.min.js')}}"></script>
  <script src="{{asset('frontendtemplate/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')}}"></script>
  <script src="{{asset('frontendtemplate/js/google-map.js')}}"></script>
  <script src="{{asset('frontendtemplate/js/main.js')}}"></script>
    @stack('scripts')
    @yield('script')
  </body>
</html>