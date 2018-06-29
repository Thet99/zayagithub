<?php  $page="contact"; ?>
<style>
    .cont{
        margin-bottom: 15px;
    }
</style>
<?php $__env->startSection('content'); ?>
<div class="contact-bg">
    <div class="alert alert-success">
    <?php if(session('message')): ?>
        <?php echo session('message'); ?>

    <?php endif; ?>
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
                    <?php echo e(Form::open(['route' => 'send_toadmin','method' => 'post'])); ?>

                        <?php echo e(csrf_field()); ?>

                        <?php echo e(Form::text('qcname', null, ['class' => 'form-control item-font cont', 'placeholder' => 'Name*', 'required'=> ''])); ?>


                        <?php echo e(Form::text('qcemail', null, ['class' => 'form-control item-font cont', 'placeholder' => 'Email*', 'required'=> ''])); ?>

     
                        <?php echo e(Form::textarea('qcmessage', null, ['class' => 'form-control item-font cont', 'placeholder' => 'Message...', 'required'=> ''])); ?>


                        <br>

                        <?php echo e(Form::submit('Submit', ['class' => 'btn btn-success btn-xs item-font'])); ?>

                         
                    <?php echo e(Form::close()); ?>

                </div>
                <div class="clear"> </div>
            </div>
            </div>
        </div>
    </div>   
</div>         	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>