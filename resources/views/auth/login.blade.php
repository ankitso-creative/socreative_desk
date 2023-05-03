@extends('layouts.app')

@section('content')

<style>
.footer-sec {
    width: 100%;
    position: fixed;
    bottom: 0;
}
.copyright p {
    color: #000;
}
</style>
<section class="login_banner">
<div class="page-content--bge5">
    <div class="container">
		<div class="col-lg-12 col-12 text-center">
			<a href="#">
				<img src="{{ asset('assets/admin/images/logo.png') }}"class="home-logo img-fluid">
			</a>
		</div>
		<div class="login-wrap">
			<div class="login-content">
				<div class="login-logo">
					<h2 class="login-text">
						User Login
					</h2>
				</div>
				
				<div class="login-form">
					<form method="POST" action="{{ route('login') }}">
                        @csrf
						<div class="form-group">
							<label>Email Address</label>
							<input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
						<div class="form-group">
							<label>Password</label>
							<input class="au-input au-input--full" type="password" name="password" placeholder="Password">
							<input  type="hidden" name="s" value="ok">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
						</div>
						<div class="login_button"><button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button></div>
						<div class="login-checkbox text-center">
							<!--<label>
								<input type="checkbox" name="remember">Remember Me
							</label>-->
							<label>
								<a href="{{ route('password.request') }}">Forgot your password?</a>
							</label>
						</div>
					  
					</form>
				</div>
			</div>
		</div>
    </div>
</div>
</section>
@endsection
