<?php $__env->startSection('content'); ?>
<?php $page="plan";?>
<section id="page-title">
            <div class="container clearfix">
                <h1>Plans</h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li><a href="#">Plans</a></li>
                </ol>
            </div>
        </section>

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="container clearfix">
                            <br><br>
                            <p>Membership gives you access to the ZAYAT community – along with beautiful, purpose-built workspaces, dozens of partner benefits, and regular events.</p>                            
                            <div class="pricing pricing--jinpa">
                                <?php $__currentLoopData = $memberships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $membership): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="pricing--item two-clm">
                                    <h3 class="pricing--title"><?php echo e($membership->name); ?></h3>
                                    
                                    <ul class="pricing--feature-list">
                                        <li class="pricing--feature">
                                           <?php echo e($membership->des); ?>

                                        </li>
                                        
                                    </ul>
                                    <a href="<?php echo e(route('frontend.planDetail',$membership->id)); ?>"><button class="pricing--action">Choose plan</button></a>
                                </div>   
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                 
                            </div>
                        </div>
                        
                        <!--faclilities Logo-->
                       <div class="container">
                            <div class="fancy-title title-bottom-border">
                                <h5>FACILITIES</h5>
                            </div>
                            
                            
                            <ul class="clients-grid grid-6 nobottommargin clearfix coffee_ico facility-ctn">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Micro-roasted Coffee"><i class="material-icons">local_cafe</i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Super-Fast Internet "><i class="material-icons">wifi</i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Printers and scanner"><i class="material-icons">local_printshop</i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Projector"><i class="material-icons">tv</i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Lockers"><i class="material-icons">tv</i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Front Desk Service "><i class="material-icons">meeting_room</i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Fresh Water Mail and Package handling "><i class="material-icons">lock</i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Conference Room "><i class="material-icons">fullscreen</i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Community Cultivators and Manager "><i class="material-icons">event_available</i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Housekeeping"><i class="material-icons">room_service</i></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Parking"><i class="material-icons">contacts</i></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Micro-roasted Coffee"><i class="material-icons">local_car_wash</i></a></li>
                            </ul>
                            <br>
                        </div>
                        
        </section><!-- #content end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>