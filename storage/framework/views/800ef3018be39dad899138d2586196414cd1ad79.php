<?php $__env->startSection('content'); ?>
<section id="page-title">

			<div class="container clearfix">
				<h1>Plans</h1>
				<span>All Plans can be check here.</span>
				
			</div>

		</section>
		<div class="container clear-fix"  style="margin-top: 30px;">
    <div class="row">
        <div class="col-md-12">
            <div class="entery-title">
                <h3><a href="#">Membership plan</a></h3>
                <p>
                    Membership gives you access to the ZAYAT community – along with beautiful, purpose-built workspaces, dozens of partner benefits, and regular events.
                </p>
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-6"> 
            <div class="entry-title">
               <strong> Hot Desk Membership</strong>
            </div>
            <div class="entry-title">
                Casual or collaborative, quiet or filled with buzz; take a seat in the working environment that suits you best. The ultimate in flexibility - bring your laptop and grab an unallocated seat at any of our locations
            </div>

            <a href="<?php echo e(route('frontend.hdt')); ?>" class="btn btn-link pull-right">Read More</a>

            
        </div><!--col-md-6-->
        <div class="col-md-6">
            <div class="entry-title">
                <strong>Dedicated Room Membership</strong>
            </div>
            <div class="entry-content">
                Create your ideal work environment at one of our permanent desks, storage space included. Dedicated seating for you and your team. Flexible number of seats according to your needs
            </div>
            <a href="<?php echo e(route('frontend.dcr')); ?>" class="btn btn-link pull-right">Read More</a>
        </div>
    </div>
    <div class="col-md-12">
        <div class="entry-title">
            <h3><a href="#">Facilities</a></h3>
        </div>
        <div class="row clearfix">
        	<div class="col-md-6">
        		<div class="col-sm-4">
        			<img src="<?php echo e(asset('images/magazine/thumb/2.jpg')); ?>" class="thumbnail" alt="">
        		</div>

        		<div class="col-sm-4">
        			<img src="<?php echo e(asset('images/magazine/thumb/3.jpg')); ?>" class="thumbnail" alt="">
        		</div>
        		<div class="col-sm-4">
        			<img src="<?php echo e(asset('images/magazine/thumb/20.jpg')); ?>" class="thumbnail" alt="">
        		</div>
        		<div class="col-sm-4">
        			<img src="<?php echo e(asset('images/magazine/thumb/9.jpg')); ?>" class="thumbnail" alt="">
        		</div>
        		<div class="col-sm-4">
        			<img src="<?php echo e(asset('images/magazine/thumb/15.jpg')); ?>" class="thumbnail" alt="">
        		</div>
        		<div class="col-sm-4">
        			<img src="<?php echo e(asset('images/magazine/thumb/22.jpg')); ?>" class="thumbnail" alt="">
        		</div>
        		
        	</div>
        	<div class="col-md-6">
        		<div class="entry-content">
		            Coffee  Super-Fast Internet Business Class  Printers and scanner    Projector   Lockers     Front Desk Service
		            Community events    Mail and Package handling   Conference room Daily cleaning  Parking
                </div>
        	</div>
        	
        </div>     

        
        
    </div>

    
</div>
</div><!--#container clear-bottommargin-->
		<!-- <div class="container clearfix" style="margin-top: 30px;">
			<div class="row">				
				
					
			<?php if($plans): ?>
			<?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<img class="thumbnail" src="<?php echo e(asset('images/magazine/thumb/3.jpg')); ?>" alt="">

					</div>
					<div class="col-md-9">
						<h4 class="media-heading"><?php echo e($plan->title); ?> / <?php echo e($plan->price); ?></h4>
						<p>
							<?php echo e($plan->detail); ?>

						</p>
						<div class="btn btn-default">Read More</div>
					</div>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endif; ?>

		</div>						
							
    </div> -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>