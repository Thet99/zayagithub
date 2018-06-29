
<?php $__env->startSection('content'); ?>
<?php $page="term;";?>
<section id="page-title">
            <div class="container clearfix">
                <h1>ZAYAT coworking space: Terms and Conditions </h1>               
            </div>
        </section> 
        <br><br>
    <section id="content row">
        <div class="container clear-fix">
        <p>
            The following paragraphs outline the Terms and Conditions of Use (hereinafter “TOU”) on which ZAYAT (“we”, “our”, “us”) grants Membership to the Member (“you”, “your”, “yourself”).
        </p>
        <?php if($terms): ?>
        <?php $__currentLoopData = $terms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $term): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <?php echo $term->body; ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        </div>
        </section><!-- #content end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>