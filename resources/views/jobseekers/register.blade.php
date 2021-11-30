@extends('frontendtemplate')
@section('title','Register Form')
@section('content')
<link rel="stylesheet" href="{{asset('logintemplate/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
<link rel="stylesheet" href="{{asset('logintemplate/css/style.css')}}">
    <section class="signup  mt-5 mb-5">
            <div class="container sign_container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h3 class="form-title">JobSeeker Sign up</h3>
                        <form method="POST" action="{{ url('jsreg') }}" class="register-form" id="register-form">
                            @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" class="@error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email"/>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password" class="@error('password') is-invalid @enderror" required autocomplete="new-password"/>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password_confirmation" id="re_pass" placeholder="Confirm your password" required autocomplete="new-password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{asset('logintemplate/images/signup-image.jpg')}}" alt="sing up image"></figure>
                        <a href="{{ route('jslogin') }}" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

    <script src="{{asset('logintemplate/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('logintemplate/js/main.js')}}"></script>
@endsection