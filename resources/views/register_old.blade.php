@extends('layouts.master')
@section('content')
<?php $page="register";?>
	<section id="page-title">
			<div class="container clearfix">
				<h1>Register</h1>
				<ol class="breadcrumb">
					<li><a href="{{route('home')}}">Home</a></li>
					<li><a href="#">Register</a></li>
				</ol>
			</div>
		</section>
		<!-- Content
		============================================= -->
		<section id="content">
			 <div class="container">
			 	<br>
		<div class="card testimonial-card">
				<form  name="frmreg" id="frmreg" action="{{route('register')}}" enctype="multi-part/form-data" method="post">
		        		{{csrf_field()}}
		    <!-- Bacground color -->
		    <div class="card-up default-card">
		    	<br>
		    	<div class="text-center">
		    		<p>UPLOAD PHOTO</p>
		    	</div>
		    </div>
		    <!-- Avatar -->
		    <div class="avatar mx-auto white">
		    	<input type="File" name="avatar" class="upload-photo">
		    	<img src="images/profile.jpeg" class="rounded-circle">

		    </div>

		    <div class="card-body">
		        <!-- Name -->
		       
		        <!-- Quotation -->
		       
				<div class="text-center">
					
					<hr>
					<p>Register with Email / Phone <p>
				</div>
		        	
		    <!-- Grid row -->
		    <div class="row">
		        <!-- Grid column -->
		        <div class="col-md-6">
		            <!-- Material input -->
					 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		                <input class="mdl-textfield__input" type="text" id="sample3" name="fname">
		                <label class="mdl-textfield__label" for="sample3">First Name</label>
		              </div>
		        </div>
		        <!-- Grid column -->

		        <!-- Grid column -->
		        <div class="col-md-6">
		            <!-- Material input -->
		            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		                <input class="mdl-textfield__input" type="text" name="lname" id="lname">
		                <label class="mdl-textfield__label" for="lname">Last Name</label>
		              </div>
		        </div>
		        <!-- Grid column -->
		    </div>
		    <!-- Grid row -->

		    <!-- Grid row -->
		    <div class="row">
		        <!-- Grid column -->
		        <div class="col-md-6">
		            <!-- Material input -->
		            <!-- Material input -->
		            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		                <input class="mdl-textfield__input" name="email" type="text" id="email">
		                <label class="mdl-textfield__label" for="email">Email</label>
		              </div>
		        </div>
		        <!-- Grid column -->

		        <!-- Grid column -->
		        <div class="col-md-6">
		            <!-- Material input -->
		            <!-- Material input -->
		            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		                <input class="mdl-textfield__input" type="text" id="pw">
		                <label class="mdl-textfield__label" for="lname">Password</label>
		              </div>
		        </div>
		        <!-- Grid column -->
		    </div>
		    <!-- Grid row -->

		    <!-- Grid row -->
		    <div class="row">
		        <!-- Grid column -->
		        <div class="col-md-6">
		            <!-- Material input -->
		            <!-- Material input -->
		            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		                <input class="mdl-textfield__input" name="cname" type="text" id="cname">
		                <label class="mdl-textfield__label" for="cname">Company Name</label>
		              </div>
		        </div>
		        <!-- Grid column -->

		        <!-- Grid column -->
		        <div class="col-md-6">
		            <!-- Material input -->
		            <!-- Material input -->
		            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		                <input class="mdl-textfield__input" name="ph" type="text" id="ph">
		                <label class="mdl-textfield__label" for="ph">Phone No</label>
		              </div>
		        </div>
		       
		        <!-- Grid column -->
		  </div>
		  <!-- Grid row -->
		  	<div class="pull-left">
		  		<a href="{{ route('social.redirect', ['provider' => 'facebook']) }}" class="btn btn-fb waves-effect waves-light pull-left">
			    <i class="icon icon-facebook left"></i> Register with Facebook</a>
		  	</div>
    		<button type="submit" class="btn btn-primary pull-right">REGISTER</button>
	</form>
		    </div>

		</div>
	</div>
			<br>
		</section><!-- #content end -->
@endsection