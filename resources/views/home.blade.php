[@extends('layouts.main')
@section('content')
<?php $page='home'; ?>

	<!-- Content
		============================================= -->
		<section id="content">
   @include('partials.message')
			<div>
				<div class="clearfix">
					<div class="col_full" style="margin-bottom: 0px;">

					<div class="col-md-4 dark col-padding">
						<div class="fbox-desc">
							<div class="heading-block fancy-title nobottomborder title-bottom-border">
								<h4 class="uppercase" style="font-weight: 600;">LOCATION</h4>
							</div>
							
								<img class="image_fade" src="{{asset('images/magazine/thumb/1.jpg')}}" alt="Image" style="opacity: 1; height: 200px;">
							
							
							<p style="line-height: 1.7; margin-top: 15px;">ZAYAT is conveniently located in Industrial Zone, South Okkalapa. 5-10 minutes’ walk from Bus stop Than Lan or 16th corner stop and can get there by YBS Bus No. 14, 26, 27, 60. Walking distance from Min Lan Seafood Restaurant and Bar Industry. </p>
							<a href="{{route('frontend.location')}}" class="button button-small button-border button-rounded uppercase nomargin">Read More</a>
							
						</div>
					</div>

					<div class="col-md-4 dark col-padding">
						<div class="fbox-desc">
							<div class="heading-block fancy-title nobottomborder title-bottom-border">
								<h4 class="uppercase" style="font-weight: 600;">COMMUNITY</h4>
							</div>
							<img src="{{asset('images/event/2.jpg')}}" style="height: 200px;">
							<p style="line-height: 1.7; margin-top: 15px;">We live in a world where people are increasingly able to choose where, when, and why they work. To support this new work industry, ZAYAT cultivates a community of independents who gather to share, collaborate, and help one another. </p>
							<a href="{{route('frontend.community')}}" class="button button-small button-border button-rounded uppercase nomargin">Read More</a>
							
						</div>
					</div>

					<div class="col-md-4 dark col-padding">
						<div class="fbox-desc">
							<div class="heading-block fancy-title nobottomborder title-bottom-border">
								<h4 class="uppercase" style="font-weight: 600;">EVENTS</h4>
							</div>
							<img src="{{asset('images/event/7.jpg')}}" style="height: 200px;">
							<p style="line-height: 1.7; margin-top: 15px;">Events are the most valuable part of ZAYAT. At events, we make friends, we talk about ideas, we talk about collaborations, we talk about making a difference.</p>
							<a href="{{route('frontend.events')}}" class="button button-small button-border button-rounded uppercase nomargin">Read More</a>
							<br>
							<!--For modern browsers-->
							
						</div>
					</div>

					<div class="clear"></div>

				</div>
		</section><!-- #content end -->


@endsection

            

	
