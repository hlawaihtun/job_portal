@extends('employertemplate')
@section('title','Login Form')
@section('content')
<link rel="stylesheet" href="{{asset('logintemplate/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
<link rel="stylesheet" href="{{asset('logintemplate/css/style.css')}}">
	<section class="sign-in mt-5 mb-5">
            <div class="container sign_container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{asset('logintemplate/images/signin-image.jpg')}}" alt="sing up image"></figure>
                        <a href="{{ route('empreg') }}" class="signup-image-link">Create a new account</a>
                    </div>

                    <div class="signin-form">
                        <h3 class="form-title">Employer Sign In</h3>
                        <form method="POST" action="{{ route('login') }}" class="login-form" id="login-form">
                            @csrf
                            <div class="form-group">
                                <label for="inputEmail"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="inputEmail" placeholder="Your Email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputPass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="inputPass" placeholder="Password" class="@error('password') is-invalid @enderror" required autocomplete="current-password"/>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember" id="remember" class="agree-term" {{ old('remember') ? 'checked' : '' }}/>
                                <label for="remember" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Login"/>
                                 @if (Route::has('password.request'))
                                    <a class="btn btn-link forg-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            

                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <script src="{{asset('logintemplate/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('logintemplate/js/main.js')}}"></script>
@endsection