<?php $__env->startSection('content'); ?>
<?php $page="eventdetail";?>
<section id="content" style="width: 100%;">
			<section class="content-wrap">
				<div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0; margin-bottom: 0px !important;">
					<div>
						<div class="container clearfix">
							<span class="label label-danger bnews-title">Latest Events:</span>

							<div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false" data-pagi="false">
								<div class="flexslider">
									<div class="slider-wrap">
										<?php if($latestevents): ?>
										<?php $__currentLoopData = $latestevents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<div class="slide"><a href="<?php echo e(route('frontend.event.show',$latest->id)); ?>"><strong><?php echo e($latest->name); ?>..</strong></a></div>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bottommargin">
						<div class="container">
							<div class="col_half bottommargin-lg">
								<div class="fslider flex-thumb-grid grid-6" data-animation="fade" data-arrows="true" data-thumbs="true">
									<div class="flexslider">
										<div class="slider-wrap">
											
										<?php $__currentLoopData = $ephotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ephoto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<div class="slide" data-thumb='<?php echo e(asset("/storage/events/$ephoto->photo_name")); ?>'>
												<a href="#">
													<img src='<?php echo e(asset("/storage/events/$ephoto->photo_name")); ?>' alt="">
													<div class="overlay">
														<div class="text-overlay">
															<div class="text-overlay-title">
																<h3><?php echo e($events->name); ?></h3>
															</div>
															<div class="text-overlay-meta">
																<span><?php echo e($events->shortnote); ?></span>
															</div>
														</div>
													</div>
												</a>
											</div>											
											<?php if($ephoto->movie_link!=NULL): ?>
											<div class="slide" data-thumb="<?php echo e(asset('images/magazine/thumb/4.jpg')); ?>">
												<iframe src="<?php echo e($ephoto->movie_link); ?>" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
											</div>
											<?php endif; ?>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										
										</div>
									</div>
								</div>
							</div>
							<?php if($events): ?>
							<div class="col_half bottommargin-sm col_last">
								<div class="entry-title">
											<h3><a href="#"><?php echo e($events->name); ?></a></h3>
								</div>
								<ul class="entry-meta clearfix">
											<li><i class="icon-calendar3"></i> </li>
								</ul>
								<div class="entry-content">
									<p class="pull-left"><?php echo $events->detail; ?></p>
								</div>
							</div>
							<?php endif; ?>
						</div>
						
					</div>

			</section>
		</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>