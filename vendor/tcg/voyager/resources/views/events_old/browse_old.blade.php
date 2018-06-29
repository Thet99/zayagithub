@extends('voyager::master')
@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class=""></i> 
        </h1>
        
        
        @include('voyager::multilingual.language-selector')
    </div>
@stop

@section('content')
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-md-12">

  			<table class="table table-responsive table-stripped">
  				<a href="{{route('voyager.events.create')}}" class="btn btn-success pull-right">+ New Event</a>
  				<thead>
  					

  					<tr class="bg-info">
  						<th>Id</th><th>Name</th><th>Short Note</th><th>Detail</th><th>Ticket Price</th><th>Date Created</th><th>Action</th>
  					</tr>
  				</thead>
  				<tbody>
            
  				@if($events)
  				@foreach($events as $event)
  				<tr>
  					<td>{{$event->id}}</td><td>{{$event->name}}</td><td>{{substr($event->shortnote,0,30)}}..</td><td>{{substr($event->detail,0,35)}}..</td><td>{{$event->ticket_price}}</td><td>{{$event->created_at}}</td><td><a href="#" class="btn btn-sm pull-right btn-danger"><i class="voyager-trash"></i> delete</a><a href="{{route('voyager.events.edit',$event->id)}}" class="btn btn-sm pull-right btn-primary"><i class="voyager-edit"></i> edit</a> 
  					</td>

  				</tr>
  				@endforeach
  				@endif
  				</tbody>
  				
  			</table>
        {{$events->links()}}
  		</div>	
  	</div><!-- row -->
  </div><!--container-fluid-->
   
@stop

@section('css')

<link rel="stylesheet" href="{{ voyager_asset('lib/css/responsive.dataTables.min.css') }}">

@stop

@section('javascript')
    
@stop
