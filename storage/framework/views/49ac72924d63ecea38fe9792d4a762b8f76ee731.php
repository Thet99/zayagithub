<?php $__env->startSection('content'); ?>

	<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">
			<div class="slider-parallax-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark" >
						    <?php if($ephoto): ?>
							<img src='<?php echo e(asset("/storage/events/$ephoto->photo_name")); ?>' border="0">
							<?php else: ?>
							<img src='<?php echo e(asset("/images/events/zayat-02.jpg")); ?>' border="0">
							<?php endif; ?>

						
						</div>
					<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
				</div>

				<a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">
				<div class="row event-space row-zero" style="">
					<div class="col-md-8 col-lg-8">
							<div class="entry-title">
											<h3><a href="#"><?php echo e($events->name); ?></a></h3>
										</div>
										<ul class="entry-meta clearfix">
											<li><i class="icon-calendar3"></i><?php echo e($events->created_at); ?></li>							

										</ul>
										<div class="entry-content">
											<p><?php echo e($events->shortnote); ?></p>
										</div>
										<h4>Events Details</h4>
										<p><?php echo $events->detail; ?></p>

					</div>
					<div class="col-md-4 col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title"><?php echo e($events->ticket_price); ?></h2>
							</div>
							<div class="panel-body">
								Have any questions? <a href="<?php echo e(route('frontend.faqs')); ?>"> See our FAQ.</a>
								<div class="share-box">
                 </div>
							</div>
						</div>
					</div>

				</div>
				<div class="divider divider-short divider-center"><i class="icon-circle-blank"></i></div>
			</div>
		</section><!-- #content end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>