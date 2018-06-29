<?php $__env->startSection('content'); ?>
<?php  $page="contact";  ?>
<div class="container">
	<h1 class="mb-2 text-center">Contact Us</h1>
	
	<?php if(session('message')): ?>
	<div class='alert alert-success'>
		<?php echo e(session('message')); ?>

	</div>
	<?php endif; ?>
	

	<div class="col-md-12 col-md-6">

						<div class="widget quick-contact-widget clearfix">

							<h4>Send Message</h4>

							<div class="quick-contact-form-result"></div>

							<form id="quick-contact-form" name="quick-contact-form" action="<?php echo e(route('frontend.contactoadmin')); ?>" method="post" class="quick-contact-form nobottommargin">

								<div class="form-process"></div>

								<div class="input-group divcenter">
									<span class="input-group-addon"><i class="icon-user"></i></span>
									<input type="text" class="required form-control input-block-level" id="quick-contact-form-name" name="qcname" value="" placeholder="Full Name" />
								</div>
								<div class="input-group divcenter">
									<span class="input-group-addon"><i class="icon-email2"></i></span>
									<input type="text" class="required form-control email input-block-level" id="quick-contact-form-email" name="qcemail" value="" placeholder="Email Address" />
								</div>
								<textarea class="required form-control input-block-level short-textarea" id="quick-contact-form-message" name="qcmessage" rows="4" cols="30" placeholder="Message"></textarea>
								<input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
								<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small nomargin" value="submit">Send</button>

							</form>

						</div>

					</div>
 </div> <!-- /container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>