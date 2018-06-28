@extends('layouts.master')
@section('content')
<section id="content" style="width: 100%;">
			<section class="content-wrap">
				<div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0; margin-bottom: 0px !important;">
					<div>
						<div class="container clearfix">
							<span class="label label-danger bnews-title">Latest Events:</span>

							<div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false" data-pagi="false">
								<div class="flexslider">
									<div class="slider-wrap">
										@if($latestevents)
										@foreach($latestevents as $latest)
										<div class="slide"><a href="{{route('frontend.event.show',$latest->id)}}"><strong>{{$latest->name}}..</strong></a></div>
										@endforeach
										@endif
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
											
										@foreach($ephotos as $ephoto)
											<div class="slide" data-thumb='{{asset("/storage/events/$ephoto->photo_name")}}'>
												<a href="#">
													<img src='{{asset("/storage/events/$ephoto->photo_name")}}' alt="">
													<div class="overlay">
														<div class="text-overlay">
															<div class="text-overlay-title">
																<h3>Locked Steel Gate</h3>
															</div>
															<div class="text-overlay-meta">
																<span>Illustrations</span>
															</div>
														</div>
													</div>
												</a>
											</div>											
											@if($ephoto->movie_link!=NULL)
											<div class="slide" data-thumb="{{asset('images/magazine/thumb/4.jpg')}}">
												<iframe src="{{$ephoto->movie_link}}" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
											</div>
											@endif
										@endforeach
										
										</div>
									</div>
								</div>
							</div>
							@if($events)
							<div class="col_half bottommargin-sm col_last">
								<div class="entry-title">
											<h3><a href="#">{{$events->name}}</a></h3>
								</div>
								<ul class="entry-meta clearfix">
											<li><i class="icon-calendar3"></i> </li>
								</ul>
								<div class="entry-content">
									<p class="pull-left">{!!$events->detail!!}</p>
								</div>
							</div>
							@endif
						</div>
						
					</div>

			</section>
		</section>
@endsection