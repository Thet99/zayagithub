<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<?php $__env->startSection('css'); ?>
<!--bootsrap Date-Tiem Picker-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> 

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

 
<?php $__env->stopSection(); ?>

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
        
        <h4><span class="btn-primary">Edit Event</span></h4>
        <form method="POST" action="<?php echo e(route('voyager.events.update')); ?>" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

      <?php if($event): ?>
        <div class="form-group">
          <input type="hidden" name="eid" value="<?php echo e($event->id); ?>">
          <label>NAME</label>
          <input type="text" class="form-control" name="name" value="<?php echo e($event->name); ?>">
        </div>
        <div class="form-group">
          <label>Short Note</label>
          <textarea type="text" row="30" class="form-control" name="shortnote" ><?php echo e($event->shortnote); ?></textarea>
        </div>
        <div class="form-group">
          <label>Detail</label>
          <textarea type="text" class="form-control tinymce" name="detail" row="30"><?php echo e($event->detail); ?></textarea>
        </div>
        <div class="form-group">
          <label>Movie Link</label>
          <textarea type="text" class="form-control" name="movie_link"></textarea>
        </div>
        <div class="form-group">
          <label>Ticket Price</label>
          <input type="text" name="ticket_price" class="form-control" value="<?php echo e($event->ticket_price); ?>">
        </div>
     
        <div class="form-group">
            <label for="event_date">Event Date</label>
                <div class='input-group date' id='datetimepicker2'>
                    <input type='text' name="event_date" class="form-control"  value="<?php echo e($event->event_date); ?>"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker2').datetimepicker({
                   // local:'ru';
                    format: 'YY:MM:DD:HH:mm:ss'
                });
            });
        </script>    
        
    
        <div class="form-group">
          <label>Home Photo</label>
          <input type="file" name="homepic">
        </div>
        <?php if($ephotos): ?>
         <?php $__currentLoopData = $ephotos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="form-group"> 
          <label>Other Photo</label>         
          <input type="hidden" name="photo_id" value="<?php echo e($photo->photo_id); ?>"/>
          <input type="file" name="innerpic" value="<?php echo e($photo->photo_name); ?>">
          <img src='<?php echo e(asset("storage/events/$photo->photo_name")); ?>' style=" width:120px; height:79px;" />
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <?php endif; ?>
        <span id="image_container">
                <input name="innerpic[]" type="file" />
                </span>
      <a href="javascript:add_image_field();" class="up-link">Upload More</a>
      <br />
      <script type="text/javascript" language="javascript">
      function add_image_field()
      {
       var mcontainer=document.getElementById('image_container');
       document.getElementById("image_container").style.paddingLeft = "152px";
       var image_field=document.createElement('input');
       image_field.name='innerpic[]';
       image_field.type='file';
       mcontainer.appendChild(image_field);
       var br2_field=document.createElement('br');
       mcontainer.appendChild(br2_field);
      }
      </script>

        <br>
        <input type="submit" class="btn btn-primary" name="create" id="create" value="Save">
         </form>
        

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