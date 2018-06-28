@extends('layouts.master')
@section('content')
<?php $page="user";   $avatar=Auth::user()->avatar; $firstname=Auth::user()->fname;?>

		<section id="page-title">
			<div class="container clearfix">
				<h1>{{ucfirst("$firstname")}} 's Profile</h1>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Profile</a></li>
				</ol>
			</div>
		</section>
		<!-- Content
		============================================= -->
		<section id="content">
			 <div class="container">
			 	<br>
		<div class="card testimonial-card">
			{{ Form::open(['route' => ['user.update',Auth::user()->id], 'class' => '', 'role' => 'form', 'method' => 'PATCH', 'id' => 'user_edit']) }}
				{{csrf_field()}}
				<input name="_method" type="hidden" value="PUT">
				

		    <!-- Bacground color -->
		    <div class="card-up default-card">
		    	<br>
		    	<div class="text-center">
		    		<p>{{strtoupper("$firstname")}}'s PHOTO</p>
		    	</div>
		    </div>
		    <!-- Avatar -->
		    <div class="avatar mx-auto white">
		    	<input type="File" name="upimg" class="upload-photo">
		    	@if(Auth::user()->avatar)
		    	<img src='{{asset("/storage/$avatar")}}' class='rounded-circle'>
		    	@else
		    	<img src='{{asset("/storage/default.png")}}' class='rounded-circle'>
		    	@endif

		    </div>

		    <div class="card-body">
		        <!-- Name -->
		       
		        <!-- Quotation -->
		       
				<div class="text-center">
					
					<hr>
					<p>User's Information <p>
				</div>
		        	<!-- <form> -->
		    <!-- Grid row -->
		    <div class="row">
		        <!-- Grid column -->
		        <div class="col-md-6">
		            <!-- Material input -->
					 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		                <input class="mdl-textfield__input" name="fname" type="text" value="{{Auth::user()->fname}}"  id="sample3">
		                <label class="mdl-textfield__label" for="sample3">First Name</label>
		              </div>
		        </div>
		        <!-- Grid column -->

		        <!-- Grid column -->
		        <div class="col-md-6">
		            <!-- Material input -->
		            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		                <input class="mdl-textfield__input" name="lname"type="text" value="{{Auth::user()->lname}}"  id="lname">
		                <label class="mdl-textfield__label" for="lname">Last Name</label>
		              </div>
		        </div>
		        <!-- Grid column -->
		    </div>
		    <!-- Grid row -->

		    
		    <div class="row">
		        <!-- Grid column -->
		        <div class="col-md-6">
		            <!-- Material input -->
		            <!-- Material input -->
		            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		                <input class="mdl-textfield__input" name="email" type="text" value="{{Auth::user()->email}}" disable="disable" id="email">
		                <label class="mdl-textfield__label" for="email">Email</label>
		              </div>
		        </div>
		        <!-- Grid column -->

		        <!-- Grid column -->
		        <div class="col-md-6">
		            <!-- Material input -->
		            <!-- Material input -->
		            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		                <input class="mdl-textfield__input" name="password" type="text" id="password">
		                <input type="hidden" name="oldpass" value="{{Auth::user()->password}}">
		                <label class="mdl-textfield__label" for="password">Password</label>
		              </div>
		        </div>
		        <!-- Grid column -->
		    </div>
		    <!-- Grid row -->
		    <div class="row">
		        <!-- Grid column -->
		        <div class="col-md-6">
		            <!-- Material input -->
		            <!-- Material input -->
		            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		                <input class="mdl-textfield__input" type="text" value="{{Auth::user()->company}}" name="cname" id="cname">
		                <label class="mdl-textfield__label" for="cname">Company Name</label>
		              </div>
		        </div>
		        <!-- Grid column -->

		        <!-- Grid column -->
		        <div class="col-md-6">
		            <!-- Material input -->
		            <!-- Material input -->
		            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		                <input class="mdl-textfield__input" name="mobile" type="text" value="{{Auth::user()->mobile}}" id="mobile">
		                <label class="mdl-textfield__label" for="mobile">Phone No</label>
		              </div>
		        </div>
		        <!-- Grid column -->
		    </div>
		    <!-- Grid row -->

		    <!-- Grid row -->
		    
		  
    		<button type="submit" class="button button-small pull-right">SAVE</button>
	{{ Form::close() }}
		    </div>

		</div>
	</div>
			<br>
		</section><!-- #content end -->
@endsection