@extends('layouts.app')

@section('content')
<title>Register</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css"
			href="vendor/bootstrap/css/bootstrap.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css"
			href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css"
			href="fonts/iconic/css/material-design-iconic-font.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css"
			href="vendor/css-hamburgers/hamburgers.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css"
			href="vendor/animsition/css/animsition.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css"
			href="vendor/daterangepicker/daterangepicker.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<!--===============================================================================================-->
		<style>
			p {
  				font-family: Poppins-Regular;
  				font-size: 16px;
				color: #5a0353;
				font-weight: 600;
  				line-height: 1.2;

  				display: block;
  				width: 100%;
  				height: 45px;
 				background: transparent;

			}
			::placeholder { 
				color: #424242;
				opacity: 1;
				}

				:-ms-input-placeholder {
				color: #424242;
				}

				::-ms-input-placeholder {
				color: #424242;
				}
			.wrap-input100 {
				width: 100%;
				position: relative;
				border-bottom: 2px solid rgba(255,255,255,0.24);
				margin-bottom: 30px;
				}
		</style>



<div class="limiter">
<div class="container-login100" style="background-image:url('images/bg-02.jpg');">
       
            
               <div class="wrap-login100">
                <span class="login100-form-logo">
							<i class="zmdi zmdi-landscape"></i>
						</span>

						<span class="login100-form-title p-b-34 p-t-27">
							Register
						</span>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                           <div class="wrap-input100 validate-input" data-validate="Enter username">
                                        <p>Username</p>
                                    <input class="input100" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Username" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            
                        <div class="wrap-input100 validate-input" data-validate="Enter Email">
                            <p>Email</p>
                                <input class="input100" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email"value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                        <div class="wrap-input100 validate-input" data-validate="Enter Password">
                            <p>Password
                                <input class="input100" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            

                        <div class="wrap-input100 validate-input" data-validate="Enter Same Password">
                            <p>Confirm Password</p>
                                <input class="input100" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                        <div class="container-login100-form-btn">
                                <button type="submit" class="login100-form-btn">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
