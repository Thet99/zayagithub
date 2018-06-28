@extends('layouts.master')
@php $page="contact";@endphp
<style>
    .cont{
        margin-bottom: 15px;
    }
</style>
@section('content')
<div class="contact-bg">
    <div class="alert alert-success">
    @if(session('message'))
        {!!session('message')!!}
    @endif
    </div>
    <div class="container">
        <div class="contact-featured pt-15 pb-15">
            <header class="sec-heading text-center">
                <h2 id="owl" style="color: #222;" class="item-header-font">Contact Us</h2>
            </header>
            <div class="xv-product-slides row">
            	<div class="main-bdy col-md-12">
                <div class="main-body-left col-md-6">
                    <ul>
                        <li><a href="#" class="fb" title="Facebook" alt="Facebook"></a></li>
                        <li><a href="#" class="gp" title="Google Plus" alt="Google Plus"></li>
                        <li><a href="#" class="tw" title="Twitter" alt="Twitter"></li>
                        <li><a href="#" class="in" title="Linkin" alt="Linkin"></li>
                    </ul>
                    <p class="item-font">Our customer service team is always happy to help you for any questions and orders</p>
                    <p class="item-font">
                        No.76/A, 1st Street, South Okkalapa Industrial Zone, South Okkalapa Township, Yangon, Myanmar.
                    </br>
                    Phone   :    95 1 855 1294 
                    Email    :    info.zayat@zwegroup.com
                    </p>

                    <h3 class="sub-item-header-font">Thank You</h3>
                </div>
                <div class="main-body-right col-md-6 item-font"> 
                    <!-- <form action="" method="POST">
                        <input type="text" placeholder="Name" required=" ">
                        <input type="email" placeholder="Email" required=" ">
                        <textarea placeholder="Message..." required=" "></textarea>
                        <input type="submit" value="Submit">
                    </form> -->
                    {{ Form::open(['route' => 'send_toadmin','method' => 'post']) }}
                        {{ csrf_field() }}
                        {{ Form::text('qcname', null, ['class' => 'form-control item-font cont', 'placeholder' => 'Name*', 'required'=> '']) }}

                        {{ Form::text('qcemail', null, ['class' => 'form-control item-font cont', 'placeholder' => 'Email*', 'required'=> '']) }}
     
                        {{ Form::textarea('qcmessage', null, ['class' => 'form-control item-font cont', 'placeholder' => 'Message...', 'required'=> '']) }}

                        <br>

                        {{ Form::submit('Submit', ['class' => 'btn btn-success btn-xs item-font']) }}
                         
                    {{ Form::close() }}
                </div>
                <div class="clear"> </div>
            </div>
            </div>
        </div>
    </div>   
</div>         	
@stop