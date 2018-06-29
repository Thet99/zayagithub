;

<?php $__env->startSection('content'); ?>


 <div class="container clearfix" style="margin-top: 30px;">
    <div class="col-md-12">
    <div class="row">
        <?php if(Auth::check()): ?> 
    <div class="col-sm-2 col-md-2">
        <?php if(Auth::user()->avatar): ?>
       <?php $photo=Auth::user()->avatar?>
        <img src='<?php echo e(asset("storage/users/$photo")); ?>' alt="uphoto" class="img-rounded img-responsive" />
        <?php else: ?>
        <img src="<?php echo e(asset('storage/users/default.png')); ?>"
        alt="dphoto" class="img-rounded img-responsive" />
        <?php endif; ?>
    </div>
    
    <div class="col-sm-4 col-md-4">
        <blockquote>
      
            <p><?php echo e(Auth::user()->name); ?></p> <small><cite title="Source Title">Gotham, United Kingdom  <i class="glyphicon glyphicon-map-marker"></i></cite></small>
        </blockquote>
        <p> <i class="glyphicon glyphicon-envelope"></i> <?php echo e(Auth::user()->email); ?>

            <br
            /> <i class="glyphicon glyphicon-globe"></i> www.bootsnipp.com
            <br /> <i class="glyphicon glyphicon-gift"></i> January 30, 1974</p>
    </div>  
    <?php endif; ?>              
               
    </div>
</div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>