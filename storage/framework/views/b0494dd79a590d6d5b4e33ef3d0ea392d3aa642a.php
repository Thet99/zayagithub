<?php $__env->startSection('content'); ?>

<!-- Content
============================================= -->
<section id="content">

	<div class="content-wrap">
		<div class="horizontal-form">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<form class="form-horizontal new-selector" action="">
					<?php echo e(csrf_field()); ?>

				<ul class="book-form">
					<li class="mb-2">
						<i class="icon bicon icon-user"></i>
						<input type="text" name="name" placeholder="Name">
					</li>
					<li class="mb-2">
						<i class="icon bicon icon-email"></i>
						<input type="text" name="email" placeholder="Email">
					</li>
					<li class="mb-2">
						<i class="icon bicon icon-line2-screen-smartphone"></i>
						<input type="text" name="phone" placeholder="Phone">
					</li>
					<li class="mb-2">	
					
					<i class="icon bicon icon-time"></i>
					<input type="text" name="date" placeholder="Prefer Date">
					
            			
                    
				    </li>

					<li class="mb-2">
						<i class="icon bicon last"></i>
						<input type="submit" value="Book A Tour">
					</li>
				</ul>
			    </form>
			    </div>	
			    </div>
			</div>	


<div class="clear"></div>		

				

<div class="container clear-bottommargin clearfix"  style="margin-top: 30px;">
	<div class="row">
	<div class="col-md-3 col-sm-6 bottommargin">
		<div class="ipost clearfix">
			 
			<div class="entry-image">
				<a href="#"><img class="image_fade" src="images/magazine/thumb/2.jpg" alt="Image"></a>
			</div>
			<div class="entry-title">
				<h3><a href="<?php echo e(route('frontend.plans')); ?>">PLANS</a></h3>
			</div>

			<div class="entry-content">
			<strong>HOT DESK (CASUAL)</strong>
				<p>People interested in HOT DESK (CASUAL)  for the day can do so for a day rate, provided there is sufficient space.</p>
			</div>

            <button class="btn btn-link pull-right">
                <a href="<?php echo e(route('frontend.plans')); ?>">READ MORE</a>
            </button>
		</div>
	</div>	

	<div class="col-md-3 col-sm-6 bottommargin">
		<div class="ipost clearfix">
			<div class="entry-image">
				<a href="#"><img class="image_fade" src="images/magazine/thumb/zl.jpg" alt="Image"></a>
			</div>
			<div class="entry-title">
				<h3>LOCATIONS</h3>
			</div>

			<div class="entry-content">
				<p>ZAYAT is conveniently located in Industrial Zone, South Okkalapa. 
                    5-10 minutes’ walk from Bus stop Than Lan or 16th corner stop and can get there by YBS Bus No. 14, 26, 27, 60. 
                    Walking distance from Min Lan Seafood Restaurant and Bar Industry.
                    10 minutes driving distance from Gandamar Wholesale, Waizayantar City Mart and Yankin Centre.
                    Myanmar Plaza, Inya lake and Sedona hotel are located around the corner from ZAYAT co-working space.
                </p> 

                    <br>
                    <button class="btn btn-link pull-right"><a href="<?php echo e(route('frontend.location')); ?>">READ MORE</a></button>
			</div>
    	</div>
    </div>


	<div class="col-md-3 col-sm-6 bottommargin">
		<div class="ipost clearfix">
			<div class="entry-image">
				<a href="#"><img class="image_fade" src="images/magazine/thumb/1.jpg" alt="Image"></a>
			</div>
			<div class="entry-title">
				<h3><a href="<?php echo e(route('frontend.community')); ?>">COMMUNITY</a></h3>
			</div>

			<div class="entry-content">
				We live in a world where people are increasingly able to choose where, when, and why they work. To support this new work industry, ZAYAT cultivates a community of independents who gather to share, collaborate, and help one another. Through our co-working space, group activities, events, and online interactions, we are building a frame work for anyone who seeks to live and work on their terms, together.
                <button class="btn btn-link pull-right"><a href="<?php echo e(route('frontend.community')); ?>">READ MORE</a></button>
			</div>
		</div>
	</div>
						

	<div class="col-md-3 col-sm-6 bottommargin">
		<div class="ipost clearfix">
		<div class="entry-image">
		<a href="#"><img class="image_fade" src="images/magazine/thumb/4.jpg" alt="Image"></a>
		</div>
			<div class="entry-title">
				<h3>EVENTS</h3>
			</div>

			<div class="entry-content">
				<p>
                    Events are the most valuable part of ZAYAT. At events, we make friends, we talk about ideas, we talk
                    about collaborations, we talk about making a difference.
                 </p>
			</div>

            <button class="btn btn-link pull-right">
                <a href="<?php echo e(route('frontend.events')); ?>">READ MORE</a>
            </button>
		</div>
	</div>

	</div><!--row-->
</div><!--#container clear-bottommargin-->
<div class="bd-line"></div>




	
</div>
<div class="bd-line"></div>
<div class="container clearfix" style='margin-top:30px; padding-bottom:30px'>

</div>


			
</section><!-- #content end -->


<?php $__env->stopSection(); ?>

            

	

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>