<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

<?php $__env->startSection('css'); ?>
<!--bootsrap Date-Tiem Picker-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> 

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
   
<?php $__env->startSection('content'); ?>
<?php $page="plan";?>
<section id="page-title">
			<div class="container clearfix">
				<h1>Member Registeration </h1>
				<ol class="breadcrumb">
<li><a href="<?php echo e(route('home')); ?>">Home</a></li>
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
			 		<form action="<?php echo e(route('reserve.store')); ?>" method="POST"> 
			 			<?php echo e(csrf_field()); ?>

							<ul class="tab-nav clearfix">
								<li><a href="#tabs-5">Personal Details</a></li>
								<li><a href="#tabs-6">Previous Employment Information</a></li>
								<li><a href="#tabs-7">Emergency Contact</a></li>
								<li class="hidden-phone"><a href="#tabs-8">Membership Proposal</a></li>
							</ul>

							<div class="tab-container">
								<div class="tab-content clearfix" id="tabs-5">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <input class="mdl-textfield__input" name="name" type="text" id="sample3">
								        <label class="mdl-textfield__label" for="sample3">Name</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										        <div class="input-group date datepicker">
							                    <input type="text" name="birthday" class="mdl-textfield__input ">
							                    <span class="input-group-addon">
							                        <span class="glyphicon glyphicon-calendar"></span>
							                    </span>
							                </div>
						                <label class="mdl-textfield__label" for="birthday">Date of Birth</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <input class="mdl-textfield__input" name="gender" type="text" id="gender">
								        <label class="mdl-textfield__label" for="gender">Gender</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <input class="mdl-textfield__input" name="passport"  type="text" id="passport">
								        <label class="mdl-textfield__label" for="passport">ID/Passport</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <textarea name="home_country_addr" class="mdl-textfield__input" type="text" id="home-address"></textarea> 
								        <label class="mdl-textfield__label" for="home-address">Address in Home Country</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <textarea class="mdl-textfield__input"  name="mm_addr" type="text" id="mm-address"></textarea> 
								        <label class="mdl-textfield__label" for="mm-address">Address in Myanmar</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <input class="mdl-textfield__input" name="bs_mail" type="text" id="bs-mail">
								        <label class="mdl-textfield__label" for="bs-mail">Business Email</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <input class="mdl-textfield__input" name="hm_ph" type="text" id="hm-ph">
								        <label class="mdl-textfield__label" for="hm_ph">Phone in Home Country</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <input class="mdl-textfield__input" name="mm_ph" type="text" id="mm-phone">
								        <label class="mdl-textfield__label" for="mm_ph">Phone in Myanmar</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <input class="mdl-textfield__input" name="email_personal" type="text" id="email-personal">
								        <label class="mdl-textfield__label" for="email_personal">Email</label> 
									</div>

									<!-- Select with floating label -->
							   <!--  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
							        <input type="text" value="" class="mdl-textfield__input" id="sample3" readonly>
							        <input type="hidden" value="" name="sample3">
							        <label for="sample3" class="mdl-textfield__label">Country</label>
							        <ul for="sample3" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
							            <li class="mdl-menu__item" data-val="DEU">Germany</li>
							            <li class="mdl-menu__item" data-val="BLR">Belarus</li>
							            <li class="mdl-menu__item" data-val="RUS">Russia</li>
							        </ul>
							    </div> -->
                                            
									
                                            
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <input class="mdl-textfield__input" name="profession" type="text" id="profession">
								        <label class="mdl-textfield__label" for="profession">Profession</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <textarea name="cm_info" class="mdl-textfield__input" type="text" id="cm-info"></textarea> 
								        <label class="mdl-textfield__label" for="cm_info">Company Inforamition</label> 
									</div>
									
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <textarea class="mdl-textfield__input" name="education" type="text" id="education"></textarea> 
								        <label class="mdl-textfield__label" for="education">Highest Educations</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <textarea class="mdl-textfield__input" name="skill" type="text" id="skill"></textarea> 
								        <label class="mdl-textfield__label" for="skill">Featured Skill</label> 
									</div>
								</div>
								<div class="tab-content clearfix" id="tabs-6">
									
									<div id="main">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <input class="mdl-textfield__input" name="cm_name" type="text" id="cm_name"> 
								        <label class="mdl-textfield__label"  for="cm_name">Company Name</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <input class="mdl-textfield__input" name="bs_type" type="text" id="bs_type"> 
								        <label class="mdl-textfield__label" for="bs_type">Business Type</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								        <input class="mdl-textfield__input" name="pposition" type="text" id="pposition"> 
								        <label class="mdl-textfield__label" for="pposition">Position</label> 
									</div>
									<div class="row" id="towb">
										<div class="col-md-6">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">									       
										         <div class="input-group date datepicker" >
							                    <input type="text" name="fro" class="mdl-textfield__input " id="form">
							                    <span class="input-group-addon">
							                        <span class="glyphicon glyphicon-calendar"></span>
							                    </span>
							                </div>
										        <label class="mdl-textfield__label" for="fro">From</label> 
											</div>
																				        
										</div>
										<div class="col-md-6">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										        <div class="input-group date datepicker">
							                    <input type="text" name="to" class="mdl-textfield__input ">
							                    <span class="input-group-addon">
							                        <span class="glyphicon glyphicon-calendar"></span>
							                    </span>
							                 </div>
						                <label class="mdl-textfield__label" for="to">To</label> 
											</div>
										</div>
									</div>
									</div><!--main-->
									<br>
									
									<button type="button" id="adm" class="button button-small nomargin">+add more</button>
									
								</div>
								<div class="tab-content clearfix" id="tabs-7">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" name="emergency_name" type="text" id="emergency-name"> 
										<label class="mdl-textfield__label" for="emergency_name">Name</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input"  name="emergency_phone" type="text" id="emergency-phone"> 
										<label class="mdl-textfield__label" for="emergency_phone">Phone</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" id="emergency-email"> 
										<label class="mdl-textfield__label" name="emergency_email"  for="emergency_email">Email</label> 
									</div>
								</div>
								<?php if($membership_plan): ?>
								<?php $__currentLoopData = $membership_plan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="tab-content clearfix" id="tabs-8">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" name="proposal_level" type="text" id="Proposed-level" value="<?php echo e($value); ?>" readonly="readonly"> 
										<label class="mdl-textfield__label" for="Proposed_level">Proposed Membership Level</label> 
									</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php endif; ?>
									<div class="row">
										<div class="col-md-6">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">									       
										         <div class="input-group date datepicker" >
							                    <input type="text" name="ppl_start" class="mdl-textfield__input " id="form">
							                    <span class="input-group-addon">
							                        <span class="glyphicon glyphicon-calendar"></span>
							                    </span>
							                </div>
										        <label class="mdl-textfield__label" for="from">From</label> 
											</div>
																				        
										</div>
										<div class="col-md-6">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										        <div class="input-group date datepicker">
							                    <input type="text" name="to" class="mdl-textfield__input ">
							                    <span class="input-group-addon">
							                        <span class="glyphicon glyphicon-calendar"></span>
							                    </span>
							                </div>
						                <label class="mdl-textfield__label" for="ppl_end">To</label> 
											</div>
										</div>
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" name="signature" type="text" id="Signature"> 
										<label class="mdl-textfield__label" for="Signature">Applicant Signature</label> 
									</div>
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<div class="input-group date datepicker" >
							                    <input type="text" name="Proposed_date" class="mdl-textfield__input " id="Proposed_date">
							                    <span class="input-group-addon">
							                        <span class="glyphicon glyphicon-calendar"></span>
							                    </span>
							                </div>

										<label class="mdl-textfield__label" for="Proposed_date">Date</label> 
									</div>	
									<br>
								<strong>I have read, fully understood and agreed the <a href="<?php echo e(route('frontend.terms')); ?>"  target="_blank">TOU</a> attached herein. </strong>
								<button type="submit" class="btn btn-primary pull-right">REGISTER</button>					

								</div>
								<!-- <div id="app" style="border:1px solid red; height:200px"></div>
 -->
								<script>
									
									
									 	$('.datepicker').each(function(){

									 	$(this).datetimepicker();
									});


									
									// $('.datepicker1').each().on('click',function(){

									//  	$('.datepicker1').each(function(){

									//  	$(this).datetimepicker();
									// });
									//  });
									
									

									// function Create() {
									//     for (var i = 0; i < 10; i++) {
									//         var dd='<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"><input class="mdl-textfield__input" name="cm_name" type="text" id="cm-name"><label class="mdl-textfield__label"  for="cm_name">Company Name</label></div><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"><input class="mdl-textfield__input" name="bs_type" type="text" id="bs-type"><label class="mdl-textfield__label" for="bs_type">Business Type</label></div><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"><input class="mdl-textfield__input" name="pposition" type="text" id="pposition"><label class="mdl-textfield__label" for="pposition">Position</label></div><div class="row"><div class="col-md-6"><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"><div class="input-group date datepicker1" id="datepicker"'+i+'"><input type="text" name="fro" class="mdl-textfield__input " id="form"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div><label class="mdl-textfield__label" for="fro">From</label> </div></div><div class="col-md-6"><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"><div class="input-group date datepicker1" id="datepicker"'+i+'"><input type="text" name="to" class="mdl-textfield__input "><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div><label class="mdl-textfield__label" for="to">To</label></div></div></div>';
									        
									//         $("#main").append(dd);

									//         $('#main').find('.datepicker1').each(function(){									        	

									//         	$(this).datetimepicker();

									       

									//         });
									//     }
									// }
									    

									    // $(document).ready(function () {

										   //  $('div#datepicker').datetimepicker();
										    
										   //  var i = 1;
										   //  $("adm").click(function () {
										   //  	$('#cn_name').clone().appendTo('#main');
										   //  	$('#bs_type').clone().appendTo('#main');
										   //  	$('#pposition').clone().appendTo('#main');
										    	// $("#twob").clone().find("input").each(function () {
										     //        $(this).prop({
										     //            'id': function (_, id) {
										     //                return id + i
										     //            },
										     //                'name': function (_, name) {
										     //                return name + i
										     //            },
										     //                'value': ''
										     //        });
										     //    }).end().appendTo("#main");
										     //    i++;
										     //    $("table tr:first").clone().find("input").each(function () {
										     //        $(this).prop({
										     //            'id': function (_, id) {
										     //                return id + i
										     //            },
										     //                'name': function (_, name) {
										     //                return name + i
										     //            },
										     //                'value': ''
										     //        });
										     //    }).end().appendTo("#main");
										     //    i++;
										        
										//         $('input[id^=txtTitle]').removeClass('hasDatepicker');
										        
										//         $('input[id^=txtTitle]').datetimepicker();
										        
										//     });
										// });

										//var el = $('<a href="#">test</a>');
										function myFunction(){
											 datetimepicker().call(this);
										}

										var dd='<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"><input class="mdl-textfield__input" name="cm_name" type="text" id="cm-name"><label class="mdl-textfield__label"  for="cm_name">Company Name</label></div><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"><input class="mdl-textfield__input" name="bs_type" type="text" id="bs-type"><label class="mdl-textfield__label" for="bs_type">Business Type</label></div><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"><input class="mdl-textfield__input" name="pposition" type="text" id="pposition"><label class="mdl-textfield__label" for="pposition">Position</label></div><div class="row" class="add_more"><div class="col-md-6"><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"><div class="input-group date datepicker1" onclick="myFunction();"><input type="text" name="fro" class="mdl-textfield__input " id="form"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div><label class="mdl-textfield__label" for="fro">From</label> </div></div><div class="col-md-6"><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label"><div class="input-group date datepicker1"><input type="text" name="to" class="mdl-textfield__input "><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span></div><label class="mdl-textfield__label" for="to">To</label></div></div></div>';

											$('#adm').on('click',function(){
												$("#main").append(dd);
												$('#main').find('div.add_mor.datepicker1').each(function(){

													alert('Welcom to Zayat');

													$(this).datetimepicker();
												})
										});

											//el.click(function(){alert("test")});

											// or preferrably:
											
									
									
								</script>
								

								
							</div>
							
					</form>
					<?php echo $__env->make('errors.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				</div>	

	</div>

			<br>
	</section><!-- #content end -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>