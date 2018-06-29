<?php $__env->startSection('content'); ?>
<?php $page="loaction";?>
<section id="page-title">
			<div class="container clearfix">
				<h1>Location</h1>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Locations</a></li>
				</ol>
			</div>
</section>

<section id="content">
			<div class="container">
				<BR>
				<div class="col_full nobottommargin clearfix">
								<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="col_one_third col_last">
									<div class="ipost clearfix">
										<div class="entry-image">
											<a href="#"><img class='image_fade' src='<?php echo e(asset("storage/$location->photo")); ?>' alt='Image' style="opacity: 1;"></a>
										</div>
										<div class="entry-title">
											<h3><a href="#"><?php echo e($location->title); ?></a></h3>
										</div>

										<div class="entry-content">
											<p><?php echo $location->des; ?></p>
											
										</div>
										
									</div>
								</div>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							</div>
			</div>
		</section><!-- #content end -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>