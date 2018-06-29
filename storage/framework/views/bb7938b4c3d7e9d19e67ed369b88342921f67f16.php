<?php $__env->startSection('content'); ?>
<?php $page="register";?>

	<section id="page-title">
			<div class="container clearfix">
				<h1>Register</h1>
				<ol class="breadcrumb">
					<li><a href="<?php echo e(route('home')); ?>">Home</a></li>
					<li><a href="#">Register</a></li>
				</ol>
			</div>
			<div class="alart alart-danger">
				<?php echo $__env->make('errors.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
		</section>
		<!-- Content
		============================================= -->
		<section id="content">
			 <div class="container">
			 	<br>
		<div class="card testimonial-card">
				<form  name="frmreg" id="frmreg" action="<?php echo e(route('register')); ?>" enctype="multi-part/form-data" method="post">
		        		<?php echo e(csrf_field()); ?>

		    <!-- Bacground color -->
		    <div class="card-up default-card">
		    	<br>
		    	<div class="text-center">
		    		<p>UPLOAD PHOTO</p>
		    	</div>
		    </div>
		    <!-- Avatar -->
		    <div class="avatar mx-auto white">
		    	<input type="File" name="upimg" class="upload-photo">
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
		                <input class="mdl-textfield__input" type="text" id="fname" name="fname">
		                <label class="mdl-textfield__label" for="fname">First Name</label>
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
		                <input class="mdl-textfield__input" name="password" type="password" id="password">
		                <label class="mdl-textfield__label" for="password">Password</label>
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
		                <input class="mdl-textfield__input" name="mobile" type="text" id="mobile">
		                <label class="mdl-textfield__label" for="mobile">Phone No</label>
		              </div>
		        </div>
		       
		        <!-- Grid column -->
		  </div>
		  <!-- Gridrow -->
		  	<div class="pull-left">
		  		<a href="<?php echo e(route('social.redirect', ['provider' => 'facebook'])); ?>" class="btn btn-fb waves-effect waves-light pull-left">
			    <i class="icon icon-facebook left"></i> Register with Facebook</a>
		  	</div>
    		<button type="submit" class="btn btn-primary pull-right">REGISTER</button>
	</form>
		    </div>

		</div>
	</div>
			<br>
		</section><!--#content end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>