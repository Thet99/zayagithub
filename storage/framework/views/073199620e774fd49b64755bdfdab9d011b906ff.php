 


<?php $__env->startSection('content'); ?>
	
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
		
		<section id="page-title">

			<div class="container clearfix">
				"We invite you to join us on this exciting endeavour as we develop our culture. We want to hear from the people who want to be part of this collaborative space.
<br>By joining our community you will be invited to various meet ups and activities where you will have the chance to share your thoughts, ideas, and interests."
			</div>

		</section>
		<section id="content">

			<div class="content-wrap">				

				<div class="container clearfix" style="margin-top: 30px;">
					<div class="fancy-title title-dotted-border title-center">

							<h3>Registration Form</h3>
						</div>

					<div>
						<div class="feature-box fbox-small fbox-plain" data-animate="fadeIn">


							<span id="success-text" name="success-text">
							
						</span>
						<?php echo $__env->make('errors.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						    

	<a href="<?php echo e(route('social.redirect', ['provider' => 'facebook'])); ?>" 

      class="btn btn-primary btn-block btn-social btn-facebook">
	<i class="icon-facebook"></i> &nbsp; Sign in with Facebook
	</a>


  <a href="<?php echo e(route('social.redirect', ['provider' => 'google'])); ?>" class="btn btn-danger btn-block btn-social btn-facebook">
    <span class="icon-google"></span> &nbsp; Sign in with Google
  </a>

  <a href="<?php echo e(route('social.redirect', ['provider' => 'linkein'])); ?>" class="btn btn-info btn-block btn-social btn-facebook">
    <span class="icon-linkedIn"></span> &nbsp; Sign in with LinkedIn
  </a>  <br> 
  <span class="btn-block text-center">(OR)</span><br> 

 
   <form id="frmreg" name="frmreg" action="<?php echo e(route('register')); ?>" method="post" enctype="multipart/form-data">
    <div class="col_full">
									

    <label>Upload Photo</label>
    <input type="file" name="upimg" id="input-1" class="file"	/>
    </div>
    <?php echo e(csrf_field()); ?>

    
    
    <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
    	<label for="name" class="col-md-4 control-label">Name</label>
                            
    	<input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
    </div>                           
    
    

    <div class="form-group<?php echo e($errors->has('email') ?' has-error' : ''); ?>">
    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                           
    <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>
                                
                           
     </div>


								
	 <div class="col_full">
									

        <label>Password</label>
		<input type="password" id="password" name="password" class="form-control" required />
	 </div>

    <div class="col_full">
									

	<label>Confirm Password</label>
	<input type="password" id="password-confirm" name="password_confirmation" class="form-control" />
	
	</div>

	<div class="col_full">					

    <label>Company</label>
	<input type="text" id="company" name="company" class="form-control" />
						      		 
	</div>

  	<div class="col_full">
									

	<label>Position</label>
	<input type="text" id="position" name="position" class="form-control" />
  	</div>

  	<div class="col_full">									

    <label>Gender</label>
	<select name="gender" id="gender" class="form-control" >							

		<option value="">Select Gender</option>
										

			<option value="M">Male</option>
										

			<option value="F">Female</option>
									

    </select>
	</div>

	<div class="col_full">
									

    <label>Mobile</label><br>
	<input type="text" id="phone" name="mobile" class="form-control" />
	<input type="hidden" value="" name="phone">
						      		
	</div>


	<div class="col_full">
									

	<label>Address</label>
	 <textarea type="text" id="address" name="address" class="form-control" ></textarea>				

		      		
  	</div>
    
    <input type="submit" name="save" value="Register" style="margin-top:20px;" class="btn btn-primary">
							
								
</form>
<!--rework.id register form-->
<script src="<?php echo e(asset('js/build/js/intlTelInput.min.js')); ?>"></script>
<script>
    
    $("#phone").intlTelInput({
      allowDropdown: true,
      autoHideDialCode: false,
      autoPlaceholder: "off",
      dropdownContainer: "body",
      excludeCountries: ["us"],
      formatOnDisplay: false,
      geoIpLookup: function(callback) {
        $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
          var countryCode = (resp && resp.country) ? resp.country : "";
          callback(countryCode);
        });
      },
      hiddenInput: "full_number",
      initialCountry: "auto",
      nationalMode: false,
      //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      placeholderNumberType: "MOBILE",
      preferredCountries: ['cn', 'jp'],
      separateDialCode: true,
      utilsScript: "<?php echo e(asset('js/utils.js')); ?>"
    });
    
</script>
<script>
	document.ready(function(){


    	var phone=$('input[name="tel"]');
    	var mb=$('input[name="phone"]');
    	mb.html(phone);

    	 	})
</script>

<!--#rework.id register from-->
</section><!-- #content end -->




		

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>