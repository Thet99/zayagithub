@extends('layouts.master')
@section('content')
<?php $page="loaction";?>
<section id="page-title">
			<div class="container clearfix">
				<h1>Location</h1>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Locations</a></li>
				</ol>
			</div>
</section>

<section id="content">
			<div class="container">
				<BR>
				<div class="col_full nobottommargin clearfix">
								@foreach($data as $location)
								<div class="col_one_third">
									<div class="ipost clearfix">
										<div class="entry-image">
											<a href="#"><img class='image_fade' src='{{asset("storage/$location->photo")}}' alt='Image' style="opacity: 1;"></a>
										</div>
										<div class="entry-title">
											<h3><a href="#">{{$location->title}}</a></h3>
										</div>

										<div class="entry-content">
											<p>{!!$location->des!!}</p>
											
										</div>
										
									</div>
								</div>

								@endforeach

							</div>
			</div>
		</section><!-- #content end -->

@endsection
