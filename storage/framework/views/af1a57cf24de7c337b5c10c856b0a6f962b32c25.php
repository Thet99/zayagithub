<?php $__env->startSection('content'); ?>

<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">
				<?php if($events): ?>
				<?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				  <?php $__currentLoopData = $ephotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ephoto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				  <?php if($event->id == $ephoto->event_id): ?>
				<div class="row event-space" style="">
					<div class="col-md-4 col-lg-4">
						 
						<img src='<?php echo e(asset("storage/events/$ephoto->photo_name")); ?>' class="event-left">
					</div>
					<div class="col-md-8 col-lg-8">
							<div class="entry-title">
											<h3><a href="#"><?php echo e($event->name); ?></a></h3>
										</div>
										<ul class="entry-meta clearfix">
											<li><i class="icon-calendar3"></i><?php echo e($event->created_at); ?> </li>
											

										</ul>
										<div class="entry-content">
											<p><?php echo e($event->shortnote); ?></p>
										</div>
										<a href="<?php echo e(route('frontend.event.show',$event->id)); ?>" type="button" class="button button-border button-border-thin button-leaf" >
											Read More</a>
					</div>
				</div>
				  <?php endif; ?>
				 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endif; ?>
				<div class="text-center">
					<?php echo e($events->links()); ?>

				</div>
			</div>

		</section><!-- #content end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>