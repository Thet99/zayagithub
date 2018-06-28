@extends('layouts.master')
@section('content')
@php $page="email";@endphp
<section id="page-title">
            <div class="container clearfix">
                <h1>Reset Password</h1>
                <ol class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="#">reset</a></li>
                </ol>
            </div>
        </section>

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="container clearfix">
                <br><br>
                <div class="panel panel-default divcenter noradius noborder" style="max-width: 400px;">
                    <div class="panel-body" style="border: 1px solid #efefef;">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form action="{{route('password.email')}}" method="post" id="reset-form">
                              {{ csrf_field() }}
                              
                         <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label {{ $errors->has('email') ? ' has-error' : '' }}">
                            <input class="mdl-textfield__input" name="email" value="{{ old('email') }}"  type="text" id="Email">
                            <label class="mdl-textfield__label" for="Email">Email</label>
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                          </div>
                          
                          <div class="col_full nobottommargin">
                                
                                
                                <a href="#" class="fright" onclick="event.preventDefault(); document.getElementById('reset-form').submit();">Send Password Reset Link</a>
                          </div>
                        </form>     
                    </div>
                </div>                      
            </div>
                        
                        
        </section><!-- #content end -->
@endsection