@extends('layouts.master')
@section('content')

<section id="page-title">
            <div class="container clearfix">
                <h1>ZAYAT coworking space: Terms and Conditions </h1>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ol>
            </div>
</section>
        <br><br>
    <section id="content row">
        <div class="container clear-fix">
        <p>
            The following paragraphs outline the Terms and Conditions of Use (hereinafter “TOU”) on which ZAYAT (“we”, “our”, “us”) grants Membership to the Member (“you”, “your”, “yourself”).
        </p>
        @if($terms)
        @foreach($terms as $term)
         {!! $term->body!!}
        @endforeach
        @endif
        </div>
        </section><!-- #content end -->
@endsection