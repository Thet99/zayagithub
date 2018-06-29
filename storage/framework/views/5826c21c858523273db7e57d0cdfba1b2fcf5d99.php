
<?php $__env->startSection('content'); ?>
<div class="container">
<?php if($error): ?>
<div class="alert alert-danger">
	<?php echo e($error); ?>

</div>
</div>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>