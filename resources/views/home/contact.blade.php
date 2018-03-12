@extends('home.layouts.master')
@section('content')
<div id="contact-page" class="container">
	<div class="bg">  	
		<div class="row">  	
			<div class="col-md-8 col-md-offset-2">
				<div class="contact-form">
					<h2>Contact us <small>get in touch with us by filling form below</small></h2>
					<div class="status alert alert-success" style="display: none"></div>
					<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
						<div class="form-group col-md-6">
							<input type="text" name="name" class="form-control" required placeholder="Name">
						</div>
						<div class="form-group col-md-6">
							<input type="email" name="email" class="form-control" required placeholder="Email">
						</div>
						<div class="form-group col-md-12">
							<input type="text" name="subject" class="form-control" required placeholder="Subject">
						</div>
						<div class="form-group col-md-12">
							<textarea name="message" id="message" required class="form-control" rows="8" placeholder="Your Message Here"></textarea>
						</div>                        
						<div class="form-group col-md-12">
							<input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
						</div>
					</form>
				</div>
			</div>

		</div>  
	</div>	
</div>
@endsection
@section('footer')
<div class="container">
	<div class="row">
		<div class="col-lg-4">
			<div class="widget">
				<h5 class="widgetheading">Get in touch with us</h5>
				<address>
				<strong>ITransform Corporation</strong><br>
				 Emerald Avenue, Ortigas Center<br>
				 Pasig City, Metro Manila </address>
				<p>
					<i class="icon-phone"></i>+63 910 4123 107<br>
					<i class="icon-phone"></i>430 41 71<br>
					<i class="icon-envelope-alt"></i> itransformcorp@gmail.com
				</p>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="widget">
				<h5 class="widgetheading">Pages</h5>
				<ul class="link-list">
					<li>Home</a></li>
					<li>Services</a></li>
					<li>About Us</a></li>
					<li>Contact</a></li>
					<li>Cart</a></li>
					<li>Log In</a></li>
				</ul>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="widget">
				<h5 class="widgetheading">System</h5>
				<ul class="link-list">
					<li>Point-of-Sale and Inventory System</a></li>
					<li>Accounting System</a></li>
					<li>Logistics Managment System</a></li>
					<li>Decision Support System</a></li>
					<li>Service Management System</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection