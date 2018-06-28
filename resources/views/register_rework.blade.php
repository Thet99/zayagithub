@extends('layouts.master')
@section('css')
<style type="text/css">
    .show-pass{
        position: absolute;
       top: 0px;
    left: 81px;
    }
</style>
@endsection

@section('content')
<div class="container">
<div class="row">

<a href="{{ route('social.redirect', ['provider' => 'facebook']) }}"  class="btn btn-primary btn-block btn-social btn-facebook">
    <span class="icon-facebook"></span>  Sign in with Facebook
</a>


<a href="{{ route('social.redirect', ['provider' => 'google']) }}" class="btn btn-danger btn-block btn-social btn-facebook">
    <span class="icon-google"></span> &nbsp; Sign in with Google
  </a>

  <a href="{{ route('social.redirect', ['provider' => 'google']) }}" class="btn btn-info btn-block btn-social btn-facebook">
    <span class="icon-linkedIn"></span> &nbsp; Sign in with LinkedIn
  </a>  <br> 
  <span class="btn-block text-center">(OR)</span><br> 

<form class="form-horizontal" role="form">
                            <div class="form-group">
                                <div class="col-md-6 input-box" for="first-name" id="first_name">
                                    <div class="in-holder">First Name</div>
                                    <input class="form-control placeholder" type="text" name="first_name" required />
                                    
                                </div>
                                <div class="col-md-6 input-box" for="last-name" id="last_name">
                                    <div class="in-holder">Last Name</div>
                                    <input class="form-control placeholder" type="text" name="last_name" required />
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 input-box" for="email" id="email">
                                    <div class="in-holder">Email</div>
                                    <input class="form-control placeholder" type="email" name="email" required/>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 input-box" for="password" id="password">
                                    <div class="in-holder">Password</div>
                                    <div class="show-pass">
                                    <input type="checkbox" onclick="myFunction()">Show Password
                                    </div>
                                    <i class="fa fa-eye"></i><i class="fa fa-eye-slash"></i></span>
                                    <input class="form-control placeholder" type="password" id="pass" name="password" required/>
                                    
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 input-box" for="company" id="company">
                                    <div class="in-holder">Company</div>
                                    <input class="form-control placeholder" type="text" name="company" required />
                                    
                                </div>
                                <div class="col-md-6 input-box" for="job-title" id="job-title">
                                    <div class="in-holder">Job Title</div>
                                    <input class="form-control placeholder" type="text" name="job_title" required />
                                    
                                </div>
                            </div>                         
                            

                            <div class="form-group">
                                <div class="col-md-12 button-group">       <button type="submit" class="btn btn-primary btn-lg" data-membership-id="" style="width:100%">Register</button><br>                            
                                    <div class="text-gary">
                                        <p>By registering, you agree to our <a href="{{route('frontend.terms')}}" target="_blank">Terms & Conditons.</a></p>
                                    </div>
                                </div>
                            </div>
</form>
</div>
</div>
<script type="text/javascript">

   function myFunction() {
    var x = document.getElementById("pass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
};



</script>
@stop