<?php $__env->startSection('content'); ?>
<?php $page="event";?>
<section id="content" style="width: 100%;">
	<section>
		<div class="container bottommargin">
			<div class="tabs tabs-bordered clearfix ui-tabs ui-widget ui-widget-content ui-corner-all">
						<ul class="tab-nav clearfix ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
							<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-6" aria-labelledby="ui-id-6" aria-selected="false" aria-expanded="false"><a href="#tabs-6" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-6">Upcoming Events</a></li>
							<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-7" aria-labelledby="ui-id-7" aria-selected="false" aria-expanded="false"><a href="#tabs-7" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-7">Events</a></li>
						</ul>
						<div class="tab-container">
							<div class="tab-content clearfix ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-6">
								<?php $__currentLoopData = $upevents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upevent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div id="tabs-news-1">
									<div class="col_half">
										<?php $__currentLoopData = $upphotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upphoto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php if($upevent->id == $upphoto->event_id): ?>
										<?php $eimg=$upphoto->photo_name;?>
										<img src='<?php echo e(asset("/storage/events/$eimg")); ?>'>
										
										 
										<?php endif; ?>

										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</div>
									<div class="col_half col_last">
										<div class="entry-title">
											<h4><a href="#"><?php echo e($upevent->name); ?></a></h4>
										</div>
										<ul class="entry-meta clearfix">
											<li><i class="icon-calendar3"></i> <?php echo e($upevent->event_date); ?></li>
										</ul>
										<div class="entry-content">
											<p>
												<?php echo substr($upevent->detail,0,255); ?>

											</p>
											<a class="button button-small" href="<?php echo e(route('frontend.event.show',$upevent->id)); ?>">Read More</a>
										</div>
									</div>
								</div><!--#tabs-news-1-->
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<div class="divider divider-center"><a href="#" data-scrollto="#header"><i class="icon-chevron-up"></i></a></div>
								<?php echo $upevents->links(); ?>

								
							</div>

							<div class="tab-content clearfix ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-7">
								<div id="tabs-news-1">
									<div class="col_half">
										<img src="images/magazine/1.jpg">
									</div>
									<div class="col_half col_last">
										<div class="entry-title">
											<h4><a href="#">UK government weighs Tesla's Model S for its ??5 million electric vehicle fleet</a></h4>
										</div>
										<ul class="entry-meta clearfix">
											<li><i class="icon-calendar3"></i> 10th May 2018</li>
										</ul>
										<div class="entry-content">
											<p>
												Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus. Dolores pariatur rem assumenda labore eligendi explicabo dolor.
											</p>
											<a class="button button-small" href="event-detail.html">Read More</a>
										</div>
									</div>
								</div><!--#tabs-news-1-->
								<div class="divider divider-center"><a href="#" data-scrollto="#header"><i class="icon-chevron-up"></i></a></div>
								
							</div>				

							
						</div><!--#tab-container-->
						</div>
					</div>
			</div>
		</div>
	</section>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>