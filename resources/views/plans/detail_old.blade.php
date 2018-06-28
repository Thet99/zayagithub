@extends('layouts.master')
@section('content')

<!-- Content
		============================================= -->
		<section id="content">

			<div class="container clearfix">
							<br><br>
							@if($membership->name=='Dedicated Room Membership')
							<h2 class="pricing-section--title center">{{$membership->name}}</h2>
							<p class="center">“Private yet connected”</p>
							
							
							<div class="pricing pricing--jinpa">
								@foreach($plans as $plan)
								<div class="pricing--item two-clm">
											<h3 class="pricing--title">{{$plan->title}}</h3>
											<div class="pricing--price"><span class="pricing--currency">$</span>{{$plan->price}}</div>
											{!!$plan->detail!!}
											
											<a href="{{route('frontend.resform')}}"><button class="pricing--action">Choose plan</button></a>
								</div>
								@endforeach
							</div>
							@else
							<h2 class="pricing-section--title center">Hot Desk Memberships</h2>
									<p class="center">"More than a Desk"</p>
									<div class="pricing pricing--jinpa">
										@foreach($plans as $plan)
										<div class="pricing--item">
											<h3 class="pricing--title">{{$plan->title}}</h3>
											<div class="pricing--price"><span class="pricing--currency">$</span>{{$plan->price}}</div>					
											{!!$plan->detail!!}
											<a href="{{route('frontend.resform')}}"><button class="pricing--action">Choose plan</button></a>
										</div>
										@endforeach
									</div>
									@endif

						</div>
						<!--faclilities Logo-->
						<div class="container">
							<div class="fancy-title title-bottom-border">
								<h5>FACILITIES</h5>
							</div>
							<div id="oc-clients-full" class="owl-carousel image-carousel carousel-widget" data-margin="30" data-nav="false" data-loop="true" data-autoplay="5000" data-pagi="false" data-items-xxs="2" data-items-xs="3" data-items-sm="4" data-items-md="5" data-items-lg="6">

								<a href="#"><img src="{{asset('images/clients/1.png')}}" alt="Clients"></a>
								<a href="#"><img src="{{asset('images/clients/2.png')}}" alt="Clients"></a>
								<a href="#"><img src="{{asset('images/clients/3.png')}}" alt="Clients"></a>
								<a href="#"><img src="{{asset('images/clients/4.png')}}" alt="Clients"></a>
								<a href="#"><img src="{{asset('images/clients/5.png')}}" alt="Clients"></a>
								<a href="#"><img src="{{asset('images/clients/1.png')}}" alt="Clients"></a>
								<a href="#"><img src="{{asset('images/clients/6.png')}}" alt="Clients"></a>
								<a href="#"><img src="{{asset('images/clients/7.png')}}" alt="Clients"></a>
								<a href="#"><img src="{{asset('images/clients/8.png')}}" alt="Clients"></a>
								<a href="#"><img src="{{asset('images/clients/9.png')}}" alt="Clients"></a>
								<a href="#"><img src="{{asset('images/clients/10.png')}}" alt="Clients"></a>
								<a href="#"><img src="{{asset('images/clients/11.png')}}" alt="Clients"></a>

							</div>
							<br>
						</div>
						
		</section><!-- #content end -->

@stop
