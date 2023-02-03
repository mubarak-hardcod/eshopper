@extends('main')
@section('main-content')

	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				@if(session('success'))
				<div class="alert alert-success" role="alert" style="margin-left: 10%;margin-right:20%;">
					<h4>{{session('success')}}</h4>
				</div>
				@endif

				@if (session('msg'))
				<div class="alert alert-danger" role="alert" style="margin-left: 10%;margin-right:20%;">
				<h4>{{session('msg')}}</h4>
				</div>
				@endif
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form method="POST" action="{{ route('login.custom') }}">
							@csrf
							<input type="email" placeholder="Email" name="emails" />
							@if ($errors->has('emails'))
							<span class="text-danger">{{ $errors->first('emails') }}</span>
							@endif
							<input type="password" placeholder="Password" name="password" />
							@if ($errors->has('password'))
							<span class="text-danger">{{ $errors->first('password') }}</span>
							@endif
							<br>
							<span>
								<input type="checkbox" class="checkbox">
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="{{ route('register.custom') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<input type="text" placeholder="Name" name="name" />
							@if ($errors->has('name'))
							<span class="text-danger">{{ $errors->first('name') }}</span>
							@endif
							<input type="email" placeholder="Email Address" name="email" />
							@if ($errors->has('email'))
							<span class="text-danger">{{ $errors->first('email') }}</span>
							@endif
							<input type="password" placeholder="Password" name="passwords" />
							@if ($errors->has('passwords'))
							<span class="text-danger">{{ $errors->first('passwords') }}</span>
							@endif
							<input type="password" placeholder="Confirm Password" name="confirm_password" />
							@if ($errors->has('confirm_password'))
							<span class="text-danger">{{ $errors->first('confirm_password') }}</span>
							@endif

							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

@endsection