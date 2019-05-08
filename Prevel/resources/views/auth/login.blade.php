@extends('layouts.app')

@section('content')
<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    
    <div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-02.jpg');">
    <div class="wrap-login100">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
       
        <span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
                    </span>
                    
                    <span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

                    
                    
                     
                    <form method="POST" action="{{ route('login') }}">
                   
                        @csrf

                        <div class="form-group row">
                            

                            <div class="wrap-input100 validate-input" data-validate = "Enter username">
                               
                            <input class="input100" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter your Email"value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            
                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                                <input class="input100" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter your password" required autocomplete="current-password">
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- 
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="contact100-form-checkbox">
                                    <input class="input-checkbox100" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                      
                            <div class="container-login100-form-btn">
                            
                                <button type="submit" class="login100-form-btn">
                                  {{ __('Login') }}
                                </button>

                                
                                
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
