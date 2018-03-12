@extends('home.layouts.master')
@section('content')
<section id="content">
	<div class="container">

		<div class="row">
			<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
				<form role="form" class="register-form">
					<h2>Sign in <small>manage your account</small></h2>
					<hr class="colorgraph">
					<div class="form-group">
						<input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username" tabindex="4">
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password">
					</div>
					<hr class="colorgraph">
					<div class="row">
						<div class="col-lg-offset-10 col-md-offset-2 col-sm-offset-3 col-xs-offset-5">
							<button type="button" name="submit" class="btn btn-lg btn-theme" id="login">LOGIN</button>   
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
@endsection