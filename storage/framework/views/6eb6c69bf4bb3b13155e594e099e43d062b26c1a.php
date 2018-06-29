<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row">
        <div class="col-md-12">
            <h4 class="card-title text-center">
                ZAYAT coworking space: Terms and Conditions
            </h4>
            <p class="text-center"><strong><mark>
                TThe following paragraphs outline the Terms and Conditions of Use (hereinafter “TOU”) on which ZAYAT (“we”, “our”, “us”) grants Membership to the Member (“you”, “your”, “yourself”). 
            </strong>
            </p>
        </div>

    <?php $__currentLoopData = $terms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $term): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="card w-100 mb-2">

            <div class="row">
            
            <div class="card-body  col-md-12 col-sm-12 col-xs-12">
                <!-- <h5 class="card-title"><a href="#"><?php echo e($term->title); ?></a> </h5> -->
                 <?php echo $term->body; ?>

             </div>
            </div><!--.row-->
        </div>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
    <div class="col-md-12 text-center">
        <?php echo e($terms->links()); ?>

    </div>
    
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>