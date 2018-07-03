
@include('partials.header')
@if(\Session::has('flash_sent'))
<div class="alert alert-success">
{!!\Session::get('flash_sent')!!}	
</div>
@endif

		<!-- Header End -->

		<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">
			<div class="slider-parallax-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark" style="background-image: url('images/slider/swiper/1.jpg');">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp">Why Zayat?</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">Zayat is a concept of Zware Group for the better collaboration and resource sharing of Professional
community in Myanmar, including local, expats and repats.

								</div>
							</div>
						</div>
						<div class="swiper-slide dark">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp">COMMUNITY</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200"> We live in a world where people are increasingly
able to choose where, when, and why they work.
To support this new workforce, ZAYAT cultivates a
community of independents who gather to share,
collaborate, and help one another. Through our
coworking space, group activities, events, and
online interactions, we are building a support
system for anyone who seeks to live and work on
their terms, together.</p>
								</div>
							</div>
							<div class="video-wrap">
								<video id="slide-video" poster="images/videos/explore.jpg" preload="auto" loop autoplay muted>
									<source src='images/videos/explore.webm' type='video/webm' />
									<source src='images/videos/explore.mp4' type='video/mp4' />
								</video>
								<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
							</div>
						</div>
						<div class="swiper-slide dark" style="background-image: url('images/slider/swiper/3.jpg'); background-position: center top;">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp">EVENTS</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">Events are the most valuable part of ZAYAT. At events, we make friends, we talk about ideas, we talk
about collaborations, we talk about making a difference. ZAYAT will have regular main events every two
weeks with the focus on current issues and to find the possible remedies for the difficulties we are facing
either on personal scale or on global scale.

								</div>
						</div>
					</div>
					<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
				</div>

				<a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

			</div>
		</section>
  @yield('content')

  <!-- Footer
		============================================= -->
		@include('partials.footer')
</div><!-- #wrapper end -->	

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

</body>
</html>
