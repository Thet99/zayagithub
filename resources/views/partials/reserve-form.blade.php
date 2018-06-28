@extends('layouts.master')
@section('content')
<?php $page="plan";?>
<section id="page-title">
			<div class="container clearfix">
				<h1>Member Registeration </h1>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Register</a></li>
				</ol>
			</div>
</section>
<!-- Content
		============================================= -->
		<section id="content">
			 <div class="container">
			 	<br>
			 	<div class="tabs tabs-bordered clearfix" id="tab-2">
			 		<form action="#" method="POST">
			 			{{csrf_field()}}
							<ul class="tab-nav clearfix">
								<li><a href="#tabs-5">Personal Details</a></li>
								<li><a href="#tabs-6">Previous Employment Information</a></li>
								<li><a href="#tabs-7">Emergency Contact</a></li>
								<li class="hidden-phone"><a href="#tabs-8">Membership Proposal</a></li>
							</ul>

							<div class="tab-container">
								<div class="tab-content clearfix" id="tabs-5">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <input class="mdl-textfield__input" type="text" id="sample3">
								        <label class="mdl-textfield__label" for="sample3">Name</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <input class="mdl-textfield__input" type="text" id="birthday">
								        <label class="mdl-textfield__label" for="birthday">Date of Birth</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <input class="mdl-textfield__input" type="text" id="gender">
								        <label class="mdl-textfield__label" for="gender">Gender</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <input class="mdl-textfield__input" type="text" id="passport">
								        <label class="mdl-textfield__label" for="passport">ID/Passport</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <textarea class="mdl-textfield__input" type="text" id="home-address"></textarea> 
								        <label class="mdl-textfield__label" for="home-address">Address in Home Country</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <textarea class="mdl-textfield__input" type="text" id="mm-address"></textarea> 
								        <label class="mdl-textfield__label" for="mm-address">Address in Myanmar</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <input class="mdl-textfield__input" type="text" id="bs-mail">
								        <label class="mdl-textfield__label" for="bs-mail">Business Email</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <input class="mdl-textfield__input" type="text" id="hm-ph">
								        <label class="mdl-textfield__label" for="hm-ph">Phone in Home Country</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <input class="mdl-textfield__input" type="text" id="mm-phone">
								        <label class="mdl-textfield__label" for="mm-phone">Phone in Myanmar</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <input class="mdl-textfield__input" type="text" id="email-personal">
								        <label class="mdl-textfield__label" for="email-personal">Email</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <input class="mdl-textfield__input" type="text" id="profession">
								        <label class="mdl-textfield__label" for="profession">Profession</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <textarea class="mdl-textfield__input" type="text" id="cm-info"></textarea> 
								        <label class="mdl-textfield__label" for="cm-info">Company Inforamition</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <input class="mdl-textfield__input" type="text" id="position">
								        <label class="mdl-textfield__label" for="position">Position</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <textarea class="mdl-textfield__input" type="text" id="education"></textarea> 
								        <label class="mdl-textfield__label" for="education">Highest Educations</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <textarea class="mdl-textfield__input" type="text" id="skill"></textarea> 
								        <label class="mdl-textfield__label" for="skill">Featured Skill</label> 
									</div>
								</div>
								<div class="tab-content clearfix" id="tabs-6">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <input class="mdl-textfield__input" type="text" id="cm-name"> 
								        <label class="mdl-textfield__label" for="cm-name">Company Name</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <input class="mdl-textfield__input" type="text" id="bs-type"> 
								        <label class="mdl-textfield__label" for="bs-type">Business Type</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <input class="mdl-textfield__input" type="text" id="position"> 
								        <label class="mdl-textfield__label" for="position">Position</label> 
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										        <input class="mdl-textfield__input" type="text" id="from"> 
										        <label class="mdl-textfield__label" for="from">From</label> 
											</div>
										</div>
										<div class="col-md-6">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										        <input class="mdl-textfield__input" type="text" id="to"> 
										        <label class="mdl-textfield__label" for="to">To</label> 
											</div>
										</div>
									</div>
									<button type="button" class="button button_small ">+Add More</button>
								</div>
								<div class="tab-content clearfix" id="tabs-7">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" id="emergency-name"> 
										<label class="mdl-textfield__label" for="emergency-name">Name</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" id="emergency-phone"> 
										<label class="mdl-textfield__label" for="emergency-phone">Phone</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" id="emergency-email"> 
										<label class="mdl-textfield__label" for="emergency-email">Email</label> 
									</div>
								</div>
								<div class="tab-content clearfix" id="tabs-8">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" id="Proposed-level"> 
										<label class="mdl-textfield__label" for="Proposed-level">Proposed Membership Level</label> 
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										        <input class="mdl-textfield__input" type="text" id="from"> 
										        <label class="mdl-textfield__label" for="from">From</label> 
											</div>
										</div>
										<div class="col-md-6">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										        <input class="mdl-textfield__input" type="text" id="to"> 
										        <label class="mdl-textfield__label" for="to">To</label> 
											</div>
										</div>
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" id="Signature"> 
										<label class="mdl-textfield__label" for="Signature">Applicant Signature</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" id="Proposed-date"> 
										<label class="mdl-textfield__label" for="Proposed-date">Date</label> 
									</div>
								</div>

							</div>
							<br>
							<strong>I have read, fully understood and agreed the <a href="{{route('terms')}} target="_blank">TOU</a> attached herein. </strong>
							<button type="submit" class="btn btn-primary pull-right">REGISTER</button>
					</form>
				</div>	

	</div>

			<br>
	</section><!-- #content end -->
@endsection