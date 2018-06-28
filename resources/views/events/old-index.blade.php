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
							<div class="tab-content clearfix ui-tabs-panel event-container ui-widget-content ui-corner-bottom" id="tabs-6" >
												
									
							</div><!--#tab-6-->
								
							<div class="tab-content clearfix ui-tabs-panel old-events ui-widget-content ui-corner-bottom" id="tabs-7">													
									
							</div><!--#tabs-7-->
						</div><!--#tab-container-->
						</div>
					</div>
			</div>		
		</div>
	</section>
</section>
  
@endsection


