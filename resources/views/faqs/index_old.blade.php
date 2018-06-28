@extends('layouts.master')

@section('content')
		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>FAQs</h1>
				<span>All your Questions answered in one place</span>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Pages</a></li>
					<li class="active">FAQs</li>
				</ol>
			</div>

		</section><!-- #page-title end -->
		<!-- Content
		============================================= -->
		<section id="content" style="margin-top: 30px; margin-bottom: 30px;">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin clearfix">

						<!-- <ul id="portfolio-filter" class="portfolio-filter clearfix">

							<li class="activeFilter"><a href="#" data-filter="all">All</a></li>
							<li><a href="#" data-filter=".faq-marketplace">Marketplace</a></li>
							<li><a href="#" data-filter=".faq-authors">Authors</a></li>
							<li><a href="#" data-filter=".faq-legal">Legal</a></li>
							<li><a href="#" data-filter=".faq-itemdiscussion">Item Discussion</a></li>
							<li><a href="#" data-filter=".faq-affiliates">Affiliates</a></li>
							<li><a href="#" data-filter=".faq-miscellaneous">Miscellaneous</a></li>

						</ul> -->

						<div class="clear"></div>

						<div id="faqs" class="faqs">
				@if($faqs)
				@foreach($faqs  as $faq)
							<div class="toggle faq faq-marketplace faq-authors">
								<div class="togglet"><i class="toggle-closed icon-question-sign"></i><i class="toggle-open icon-question-sign"></i>{{$faq->question}}</div>
								<div class="togglec">{{$faq->answer}}</div>
							</div>
					@endforeach
					@endif
					

					</div>


					</div><!-- .postcontent end -->

				

				</div>
				<div class="text-center">
					{{$faqs->links()}}
				</div>

			</div>

		</section><!-- #content end -->
		
@endsection
	<!-- Go To Top
	============================================= -->


