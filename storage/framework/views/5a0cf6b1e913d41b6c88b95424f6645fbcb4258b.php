
<?php $__env->startSection('content'); ?>
<?php $page='home'; ?>


<!-- Content
		============================================= -->
		<section id="content">

			<div>
				<div class="clearfix">
					<div class="col_full" style="margin-bottom: 0px;">

					<div class="col-md-4 dark col-padding ohidden" style="background-color: rgb(26, 188, 156); height: 381px;">
						<div>
							<h3 class="uppercase" style="font-weight: 600;">LOCATIONS</h3>
							<p style="line-height: 1.8;">TZAYAT is conveniently located in Industrial Zone, South Okkalapa. 5-10 minutes’ walk from Bus stop Than Lan or 16th corner stop and can get there by YBS Bus No. 14, 26, 27, 60. Walking distance from Min Lan Seafood Restaurant and Bar Industry. </p>
							<a href="<?php echo e(route('frontend.location')); ?>" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>
							<i class="bgicon material-icons">not_listed_location</i>
						</div>
					</div>

					<div class="col-md-4 dark col-padding ohidden" style="background-color: rgb(52, 73, 94); height: 381px;">
						<div>
							<h3 class="uppercase" style="font-weight: 600;">COMMUNITY</h3>
							<p style="line-height: 1.8;">We live in a world where people are increasingly able to choose where, when, and why they work. To support this new work industry, ZAYAT cultivates a community of independents who gather to share, collaborate, and help one another. </p>
							<a href="<?php echo e(route('frontend.community')); ?>" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>
							<i class="bgicon material-icons">group_add</i>
						</div>
					</div>

					<div class="col-md-4 dark col-padding ohidden" style="background-color: rgb(231, 76, 60); height: 381px;">
						<div>
							<h3 class="uppercase" style="font-weight: 600;">EVENTS</h3>
							<p style="line-height: 1.8;">Events are the most valuable part of ZAYAT. At events, we make friends, we talk about ideas, we talk about collaborations, we talk about making a difference.</p>
							<a href="<?php echo e(route('frontend.events')); ?>" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>
							<!--For modern browsers-->
							<i class="bgicon material-icons">calendar_today</i>
						</div>
					</div>

					<div class="clear"></div>

				</div>
	
		</section><!-- #content end -->


<?php $__env->stopSection(); ?>

            

	

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>