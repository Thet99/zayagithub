@extends('layouts.master')
@section('content')
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
								@foreach($upevents as $upevent)
								<div id="tabs-news-1">
									<div class="col_half">
										@foreach($upphotos as $upphoto)
										@if($upevent->id == $upphoto->event_id)
										<?php $eimg=$upphoto->photo_name;?>
										<img src='{{asset("/storage/events/$eimg")}}'>
										@endif
										@endforeach
									</div>
									<div class="col_half col_last">
										<div class="entry-title">
											<h4><a href="#">{{$upevent->name}}</a></h4>
										</div>
										<ul class="entry-meta clearfix">
											<li><i class="icon-calendar3"></i> {{$upevent->event_date}}</li>
										</ul>
										<div class="entry-content">
											<p>
												{!!substr($upevent->detail,0,255)!!}
											</p>
											<a class="button button-small" href="{{route('frontend.event.show',$upevent->id)}}">Read More</a>
										</div>
									</div>
								</div><!--#tabs-news-1-->
								@endforeach
								<div class="divider divider-center"><a href="#" data-scrollto="#header"><i class="icon-chevron-up"></i></a></div>
								{!!$upevents->links()!!}
								
							</div>

							<div class="tab-content clearfix ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-7">
								@foreach($oldevents as $oldevent)
								<div id="tabs-news-1">
									<div class="col_half">
										@foreach($oldphotos as $oldphoto)
										@if($oldevent->id == $oldphoto->event_id)
										<?php $oimg=$oldphoto->photo_name;?>
										<img src='{{asset("/storage/events/$oimg")}}'>
										@endif
										@endforeach
									</div>
									<div class="col_half col_last">
										<div class="entry-title">
											<h4><a href="#">{{$oldevent->name}}</a></h4>
										</div>
										<ul class="entry-meta clearfix">
											<li><i class="icon-calendar3"></i> {{$oldevent->event_date}}</li>
										</ul>
										<div class="entry-content">
											<p>
												{!!$oldevent->detail!!}
											</p>
											<a class="button button-small" href="{{route('frontend.event.show',$oldevent->id)}}">Read More</a>
										</div>
									</div>
								</div><!--#tabs-news-1-->
								@endforeach
								<div class="divider divider-center"><a href="#" data-scrollto="#header"><i class="icon-chevron-up"></i></a></div>
								{!!$oldevents->links()!!}
							</div>							
						</div><!--#tab-container-->
						</div>
					</div>
			</div>
		</div>
	</section>
</section>

@endsection
