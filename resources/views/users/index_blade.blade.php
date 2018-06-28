@extends('layouts.master');

@section('content')

<?php $page="user";?>
 <div class="container clearfix" style="margin-top: 30px;">
    <div class="col-md-12">
    <div class="row">
        @if(Auth::check()) 
    <div class="col-sm-2 col-md-2">
        @if(Auth::user()->avatar)
       <?php $photo=Auth::user()->avatar?>
        <img src='{{asset("storage/users/$photo")}}' alt="uphoto" class="img-rounded img-responsive" />
        @else
        <img src="{{asset('storage/users/default.png')}}"
        alt="dphoto" class="img-rounded img-responsive" />
        @endif
    </div>
    
    <div class="col-sm-4 col-md-4">
        <blockquote>
      
            <p>{{Auth::user()->fname}} {{ Auth::user()->lname}} </p> <small><cite title="Source Title">Gotham, United Kingdom  <i class="glyphicon glyphicon-map-marker"></i></cite></small>
        </blockquote>
        <p> <i class="glyphicon glyphicon-envelope"></i> {{Auth::user()->email}}
            <br
            /> <i class="glyphicon glyphicon-globe"></i> www.bootsnipp.com
            <br /> <i class="glyphicon glyphicon-gift"></i> January 30, 1974</p>
    </div>  
    @endif              
               
    </div>
</div>
</div>



@endsection