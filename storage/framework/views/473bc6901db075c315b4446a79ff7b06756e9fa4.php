
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

								<div class="col_one_third">
									<div class="ipost clearfix">
										<div class="entry-image">
											<a href="#"><img class="image_fade" src="<?php echo e(asset('images/magazine/thumb/new.jpg')); ?>" alt="Image" style="opacity: 1;"></a>
										</div>
										<div class="entry-title">
											<h3><a href="#">LOCATION 1</a></h3>
										</div>

										<div class="entry-content">
											<p>No.76/A, 1st Street, South Okkalapa Industrial Zone, South Okkalapa Township, Yangon, Myanmar.</p>

											+95 1 855 1294
										</div>
									</div>
								</div>

								<div class="col_one_third">
									<div class="ipost clearfix">
										<div class="entry-image">
											<a href="#"><img class="image_fade" src="<?php echo e(asset('images/magazine/thumb/new.jpg')); ?>" alt="Image" style="opacity: 1;"></a>
										</div>
										<div class="entry-title">
											<h3><a href="blog-single.html">LOCATION 2</a></h3>
										</div>

										<div class="entry-content">
											<p>No.440, Waizayantar Road, South Okkalapa Township, Yangon Myanmar. </p>

											+95 1 8565911
										</div>
									</div>
								</div>

								<div class="col_one_third col_last">
									<div class="ipost clearfix">
										<div class="entry-image">
											<a href="#"><img class="image_fade" src="<?php echo e(asset('images/magazine/thumb/new.jpg')); ?>" alt="Image" style="opacity: 1;"></a>
										</div>
										<div class="entry-title">
											<h3><a href="blog-single.html">LOCATION 3</a></h3>
										</div>

										<div class="entry-content">
											<p>No.49, 4th Street, South Okkalapa Industrial Zone, South Okkalapa Township, Yangon, Myanmar. </p>

											+95 1 8500090
										</div>
									</div>
								</div>
							</div>
			</div>
		</section><!-- #content end -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>