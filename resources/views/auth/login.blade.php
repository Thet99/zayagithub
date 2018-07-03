@extends('layouts.master')
@section('content')
<?php $page="login";?>
<section id="page-title">
			<div class="container clearfix">
				<h1>Login</h1>
				<ol class="breadcrumb">
					<li><a href="{{route('home')}}">Home</a></li>
					<li><a href="#">Login</a></li>
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
						<form action="{{route('login')}}" method="post">
							  {{ csrf_field() }}
						 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" name="email" value="{{ old('email') }}"  type="text" id="Email">
						    <label class="mdl-textfield__label" for="Email">Email</label>
						    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
						  </div>
						  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input"  name="password" type="Password" id="Password">
						    <label class="mdl-textfield__label" for="Password">Password</label>
						     @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
						  </div>
						  <div class="col_full nobottommargin">
                            
                                <div class="checkbox" style="display:none;">
                                    <label>
                                        <input  type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            
                        </div>
						  <div class="col_full nobottommargin">
								<button class="btn btn-danger nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
								<a href="{{route('password.request')}}" class="fright">Forgot Password?</a>
						  </div>
						</form>		
					</div>
				</div>						
			</div>
						
						
		</section><!-- #content end -->
@endsection