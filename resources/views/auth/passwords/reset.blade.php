@extends('layouts.master')
@section('content')
<?php $page="reset";?>
<section id="page-title">
			<div class="container clearfix">
				<h1>Reset Your Password</h1>
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
						<form class="form-horizontal" id="pass-resform" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
                            
                                <input id="email" type="email" class="mdl-textfield__input" name="email" value="{{ $email or old('email') }}" required autofocus>
                                 <label for="email" class="mdl-textfield__label">E-Mail Address</label>

                               <!--  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif -->                            
                        </div>

                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            
                                <input id="password" type="password" class="mdl-textfield__input" name="password" required>
                                <label for="password" class="mdl-textfield__label">Password</label>
                               <!--  @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif   -->                         
                        </div>

                        <div class="{{ $errors->has('password_confirmation') ? ' has-error' : '' }} mdl-textfield mdl-js-textfield mdl-textfield--floating-label">                          
                            
                                <input id="password-confirm" type="password" class="mdl-textfield__input" name="password_confirmation" required>
                                 <label for="password-confirm" class="mdl-textfield__label">Confirm Password</label>

                               <!--  @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            -->
                        </div>

                        <div class="col_full nobottommargin">
								
								<a href="#" class="fright" onclick="event.preventDefault(); document.getElementById('pass-resform').submit();">reset</a>
						  </div>
                    </form>
					</div>
				</div>						
			</div>
						
						
		</section><!-- #content end -->
@endsection