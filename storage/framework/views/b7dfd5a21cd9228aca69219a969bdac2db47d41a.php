<?php $__env->startSection('content'); ?>
<?php $page="user";   $avatar=Auth::user()->avatar; $firstname=Auth::user()->fname;?>

		<section id="page-title">
			<div class="container clearfix">
				<h1><?php echo e(ucfirst("$firstname")); ?> 's Profile</h1>
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

		    <!-- Bacground color -->
		    <div class="card-up default-card">
		    	<br>
		    	<div class="text-center">
		    		<p><?php echo e(strtoupper("$firstname")); ?>'s PHOTO</p>
		    	</div>
		    </div>
		    <!-- Avatar -->
		    <div class="avatar mx-auto white">
		    	<!-- <input type="File" class="upload-photo"> -->
		    	<img src='<?php echo e(asset("/storage/$avatar")); ?>' class='rounded-circle'>

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
		                <input class="mdl-textfield__input" type="text" value="<?php echo e(Auth::user()->fname); ?>" readonly id="sample3">
		                <label class="mdl-textfield__label" for="sample3">First Name</label>
		              </div>
		        </div>
		        <!-- Grid column -->

		        <!-- Grid column -->
		        <div class="col-md-6">
		            <!-- Material input -->
		            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		                <input class="mdl-textfield__input" type="text" value="<?php echo e(Auth::user()->lname); ?>" readonly id="lname">
		                <label class="mdl-textfield__label" for="lname">Last Name</label>
		              </div>
		        </div>
		        <!-- Grid column -->
		    </div>
		    <!-- Grid row -->


		    <!-- Grid row -->
		    <div class="row">
		        <!-- Grid column -->
		        <div class="col-md-4">
		            <!-- Material input -->
		            <!-- Material input -->
		            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		                <input class="mdl-textfield__input" type="text" value="<?php echo e(Auth::user()->company); ?>" readonly id="cname">
		                <label class="mdl-textfield__label" for="lname">Company Name</label>
		              </div>
		        </div>
		        <!-- Grid column -->

		        <div class="col-md-4">
		            <!-- Material input -->
		            <!-- Material input -->
		            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		                <input class="mdl-textfield__input" type="text" value="<?php echo e(Auth::user()->email); ?>" readonlyid="email">
		                <label class="mdl-textfield__label" for="email">Email</label>
		              </div>
		        </div>

		        <!-- Grid column -->
		        <div class="col-md-4">
		            <!-- Material input -->
		            <!-- Material input -->
		            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		                <input class="mdl-textfield__input" type="text" value="<?php echo e(Auth::user()->mobile); ?>" readonly id="ph">
		                <label class="mdl-textfield__label" for="ph">Phone No</label>
		              </div>
		        </div>
		       
		        <!-- Grid column -->
		  </div>
		  
    		<!-- <button type="submit" class="btn btn-primary pull-right">REGISTER</button> -->
	<!-- </form> -->
		    </div>

		</div>
	</div>
			<br>
		</section><!-- #content end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>