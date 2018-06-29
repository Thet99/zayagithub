<?php $__env->startSection('content'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
<!-- mail -->
		<div class="mail">
			<h3>Mail Us</h3>
			<div class="mfrm">
				
				<?php echo e(Form::open(['route' => 'frontend.sent_message', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'send-message'])); ?>

				
				
					
						<div class="form-group">
							
							<?php echo Form::text('name',null,["class"=>"form-control", "id"=>"name","placeholder"=>"Name"]); ?>

							
						</div>
						<div class="form-group">
							<?php echo Form::email('email',null,["class"=>"form-control", "id"=>"email","placeholder"=>"Email"]); ?>

						</div>
						<div class="form-group">
							
							<?php echo Form::text('phone',null,["class"=>"form-control", "id"=>"name","placeholder"=>"Phone"]); ?>

							
						</div>

						<div class="form-group">
							<?php echo Form::text('subject',null,["class"=>"form-control", "id"=>"subject","placeholder"=>"Subject"]); ?>

						</div>
						<div class="form-group">
						<?php echo Form::textarea('message_body',null,["class"=>"form-control", "id"=>"message_body","placeholder"=>"Message Body"]); ?>

					    </div>
						<input type="submit" value="Submit" style="width:40%;">
						<input type="reset" value="Clear" style="width:40%;">
					    
				</div>
				<?php echo e(Form::close()); ?>

				
			</div>
		</div>
<!-- //mail -->
</div>
		
	</div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>