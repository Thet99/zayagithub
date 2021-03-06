<?php $__env->startSection('content'); ?>
<?php $page="community";?>
<section id="page-title">
			<div class="container clearfix">
				<h1>Community</h1>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Community</a></li>
				</ol>
			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container">
					<div id="oc-team-list" class="owl-carousel team-carousel carousel-widget" data-margin="30" data-nav="false" data-items-sm="1" data-items-lg="2">
						<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $community): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="oc-item">
							<div class="team team-list clearfix">
								<div class="team-image">
									<img src='<?php echo e(asset("storage/$community->photo")); ?>' alt='John Doe'>
								</div>
								<div class="team-desc">
									<div class="team-title"><h4><?php echo e($community->photo); ?></h4><span><?php echo e($community->caption); ?></span></div>
									<div class="team-content">
										<p><?php echo e($community->body); ?></p>
									</div>
									<!-- <a href="#" class="social-icon si-rounded si-small si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon si-rounded si-small si-twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon si-rounded si-small si-gplus">
										<i class="icon-gplus"></i>
										<i class="icon-gplus"></i>
									</a> -->
								</div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						
					</div><!--#oc-team-list-->

					<section id="section-services" class="page-section">

					<div class="fancy-title title-border title-center topmargin-sm">
								<h4>Our Members</h4>
					</div>

					<div class="container clearfix">

						<div class="col_one_third">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn">
								<div class="fbox-icon">
									<a href="#"><i class="material-icons">business</i></a>
								</div>
								<h3>Architects</h3>
								
							</div>
						</div>

						<div class="col_one_third">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="200">
								<div class="fbox-icon">
									<a href="#"><i class="material-icons">people</i></a>
								</div>
								<h3>Engineers</h3>
								
							</div>
						</div>

						<div class="col_one_third col_last">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="400">
								<div class="fbox-icon">
									<a href="#"><i class="material-icons">how_to_reg</i></a>
								</div>
								<h3>Interior Designers</h3>
								
							</div>
						</div>

						<div class="clear"></div>

						<div class="col_one_third">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="600">
								<div class="fbox-icon">
									<a href="#"><i class="icon-video"></i></a>
								</div>
								<h3>Filmmakers</h3>
								
							</div>
						</div>

						<div class="col_one_third">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="800">
								<div class="fbox-icon">
									<a href="#"><i class="material-icons">monochrome_photos</i></a>
								</div>
								<h3>Photographers</h3>
								
							</div>
						</div>

						<div class="col_one_third col_last">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="1000">
								<div class="fbox-icon">
									<a href="#"><i class="material-icons">important_devices</i></a>
								</div>
								<h3>Web Developers</h3>
								
							</div>
						</div>

						<div class="clear"></div>

						<div class="col_one_third nobottommargin">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="1200">
								<div class="fbox-icon">
									<a href="#"><i class="material-icons">radio</i></a>
								</div>
								<h3>Radio Programmers</h3>
								
							</div>
						</div>

						<div class="col_one_third nobottommargin">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="1400">
								<div class="fbox-icon">
									<a href="#"><i class="material-icons">accessibility_new</i></a>
								</div>
								<h3>Start-ups entrepreneurs</h3>
							
							</div>
						</div>

						<div class="col_one_third nobottommargin col_last">
							<div class="feature-box fbox-center fbox-effect nobottomborder" data-animate="fadeIn" data-delay="1600">
								<div class="fbox-icon">
									<a href="#"><i class="icon-note"></i></a>
								</div>
								<h3>Extensive Documentation</h3>
								
							</div>
						</div>


						<div class="clear"></div>

					</div>

					<br>
					<br>

				</section>
				<!--Co-operate Members Logo-->
						<div class="container">
							<div class="fancy-title title-border title-center topmargin-sm">
								<h4>Co-operate Members</h4>
							</div>
							<div id="oc-clients-full" class="owl-carousel image-carousel carousel-widget" data-margin="30" data-nav="false" data-loop="true" data-autoplay="5000" data-pagi="false" data-items-xxs="2" data-items-xs="3" data-items-sm="4" data-items-md="5" data-items-lg="6">
								<a href="#"><img src="images/facility/1.png" alt="Clients"></a>
								<a href="#"><img src="images/facility/2.png" alt="Clients"></a>
								<a href="#"><img src="images/facility/3.png" alt="Clients"></a>
								<a href="#"><img src="images/facility/4.png" alt="Clients"></a>
								<a href="#"><img src="images/facility/5.png" alt="Clients"></a>
								<a href="#"><img src="images/facility/6.png" alt="Clients"></a>
							</div>
							<br>
						</div>

						<div class="fancy-title title-border title-center topmargin-sm">
						<h4>Co-operate Partners</h4>

					</div>

					<ul class="clients-grid grid-6 nobottommargin clearfix">
						<li><a href="#"><img src="images/clients/logo/1.png" alt="Clients"></a></li>
						<li><a href="#"><img src="images/clients/logo/2.png" alt="Clients"></a></li>
						<li><a href="#"><img src="images/clients/logo/3.png" alt="Clients"></a></li>
						<li><a href="#"><img src="images/clients/logo/4.png" alt="Clients"></a></li>
						<li><a href="#"><img src="images/clients/logo/5.png" alt="Clients"></a></li>
						<li><a href="#"><img src="images/clients/logo/6.png" alt="Clients"></a></li>
						<li><a href="#"><img src="images/clients/logo/7.png" alt="Clients"></a></li>
						<li><a href="#"><img src="images/clients/logo/8.png" alt="Clients"></a></li>
						<li><a href="#"><img src="images/clients/logo/9.png" alt="Clients"></a></li>
						<li><a href="#"><img src="images/clients/logo/10.png" alt="Clients"></a></li>
						<li><a href="#"><img src="images/clients/logo/11.png" alt="Clients"></a></li>
						<li><a href="#"><img src="images/clients/logo/12.png" alt="Clients"></a></li>
						<li><a href="#"><img src="images/clients/logo/13.png" alt="Clients"></a></li>
						<li><a href="#"><img src="images/clients/logo/14.png" alt="Clients"></a></li>
						<li><a href="#"><img src="images/clients/logo/15.png" alt="Clients"></a></li>
						<li><a href="#"><img src="images/clients/logo/16.png" alt="Clients"></a></li>
						<li><a href="#"><img src="images/clients/logo/19.png" alt="Clients"></a></li>
						<li><a href="#"><img src="images/clients/logo/18.png" alt="Clients"></a></li>
					</ul>
				</div>
			</div>
		</section><!-- #content end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>