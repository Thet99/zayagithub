<?php $__env->startSection('page_header'); ?>
    <div class="container-fluid">
        <h1 class="page-title">
            <i class=""></i> 
        </h1>
        
        
        <?php echo $__env->make('voyager::multilingual.language-selector', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-md-12">

  			<table class="table table-responsive table-stripped">
  				<a href="<?php echo e(route('voyager.events.create')); ?>" class="btn btn-success pull-right">+ New Event</a>
  				<thead>
  					

  					<tr class="bg-info">
  						<th>Id</th><th>Name</th><th>Short Note</th><th>Detail</th><th>Ticket Price</th><th>Date Created</th><th>Action</th>
  					</tr>
  				</thead>
  				<tbody>
            
  				<?php if($events): ?>
  				<?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  				<tr>
  					<td><?php echo e($event->id); ?></td><td><?php echo e($event->name); ?></td><td><?php echo e(substr($event->shortnote,0,30)); ?>..</td><td><?php echo e(substr($event->detail,0,35)); ?>..</td><td><?php echo e($event->ticket_price); ?></td><td><?php echo e($event->created_at); ?></td><td><a href="#" class="btn btn-sm pull-right btn-danger"><i class="voyager-trash"></i> delete</a><a href="<?php echo e(route('voyager.events.edit',$event->id)); ?>" class="btn btn-sm pull-right btn-primary"><i class="voyager-edit"></i> edit</a> 
  					</td>

  				</tr>
  				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  				<?php endif; ?>
  				</tbody>
  				
  			</table>
        <?php echo e($events->links()); ?>

  		</div>	
  	</div><!-- row -->
  </div><!--container-fluid-->
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<link rel="stylesheet" href="<?php echo e(voyager_asset('lib/css/responsive.dataTables.min.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('voyager::master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>