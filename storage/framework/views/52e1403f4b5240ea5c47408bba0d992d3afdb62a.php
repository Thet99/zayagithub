;

<?php $__env->startSection('content'); ?>


 <!-- Card -->
    <div class="container">
        <div class="card testimonial-card">

            <!-- Bacground color -->
            <div class="card-up default-card">
                <br>
                <?php if(Auth::check()): ?>
                <div class="text-center">
                    <p><?php echo e(Auth::user()->name); ?> 's Photo</p>
                </div>

            </div>
            <!-- Avatar -->
            
            <div class="avatar mx-auto white">
                <input type="hidden" class="upload-photo" >
                <?php if(Auth::user()->avatar): ?>
               <?php $photo=Auth::user()->avatar;?>              

                <img src='<?php echo e(asset("storage/users/$photo")); ?>' >
               <?php else: ?>
               <img src='<?php echo e(asset("storage/default.png")); ?>' >
                <?php endif; ?>


            </div>
           

            <div class="card-body">
                <!-- Name -->
               
               
                
                    <form>
    <!-- Grid row -->
    <div class="row">
        <!-- Grid column -->
        <div class="col-md-6">
            <!-- Material input -->
            <div class="md-form">
                <input type="text" id="form1" class="form-control" placeholder="Nay Zaw" value="<?php echo e(Auth::user()->name); ?>" readonly>
                
            </div>

        </div>        

        <!-- Grid column -->
        <div class="col-md-6">
            <!-- Material input -->
            <div class="md-form form-group">
                <input type="text" class="form-control" placeholder="nayzaw03@gmail.com" value="<?php echo e(Auth::user()->email); ?>" readonly>
            </div>
        </div>
        <!-- Grid column -->
    </div>
    <!-- Grid row -->

    

    <!-- Grid row -->
    <div class="row">
        <!-- Grid column -->
        <div class="col-md-6">
            <!-- Material input -->
            <div class="md-form form-group">
                <input type="text" class="form-control" placeholder="" value="<?php echo e(Auth::user()->company); ?>" readonly>
            </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6">
            <!-- Material input -->
            <div class="md-form form-group">
                <input type="text" class="form-control" placeholder="" value="<?php echo e(Auth::user()->mobile); ?>" readonly>
            </div>
        </div>
       
        <!-- Grid column -->
  </div>
  <!-- Grid row -->
   <!--  <button type="submit" class="btn btn-primary btn-block">UPDATE</button> -->
    </form>
            </div>

        </div>
    </div>
<?php endif; ?>
<!-- Card -->



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>