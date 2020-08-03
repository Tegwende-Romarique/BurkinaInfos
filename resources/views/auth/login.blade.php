@extends('layouts.app')

@section('content')

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/general/login.css" />
</head>
<body>
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Forgot Password</label>
		<div class="login-form">
			<div class="sign-in-htm">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="group">
                            <label for="email" class="label">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="group">
                            <label for="password" class="label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror input" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                        </div>
                        <div class="group">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="button">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>

                        <div class="hr"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/general/login.css" />
</head>
<body>
<div class="login-wrap">



	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Forgot Password</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Username or Email</label>
					<input id="user" type="text" class="input">
                </div> -->
				<!-- <div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
                </div>
                 -->
				<!-- <div class="group">
					<input type="submit" class="button" value="Sign In">
                </div>
                





				<div class="hr"></div>
			</div>
			<div class="for-pwd-htm">
				<div class="group">
					<label for="user" class="label">Username or Email</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Reset Password">
				</div>
				<div class="hr"></div>
			</div>
		</div>
	</div>
</div>
</body> -->
@endsection
