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
  			
  			<h4><span class="btn-primary">Create Event</span></h4>
  			<form method="POST" action="<?php echo e(route('voyager.events.store')); ?>" enctype="multipart/form-data">
  			<?php echo e(csrf_field()); ?>


  			<div class="form-group">
  				<label>NAME</label>
  				<input type="text" class="form-control" name="name">
  			</div>
  			<div class="form-group">
  				<label>Short Note</label>
  				<textarea type="text" class="form-control" name="shortnote"></textarea>
  			</div>
  			<div class="form-group">
  				<label>Detail</label>
  				<textarea rows="13" type="text" class="richTextBox form-control" name="detail"></textarea>
  			</div>
  			<div class="form-group">
  				<label>Movie Link</label>
  				<textarea type="text" class="form-control" name="movie_link"></textarea>
  			</div>
  			<div class="form-group">
  				<label>Ticket Price</label>
  				<input type="text" name="ticket_price" class="form-control">
  			</div>
     
        <div class="form-group">
            <label for="event_date">Event Date</label>
                <div class='input-group date' id='datetimepicker2'>
                    <input type='text' name="event_date" class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>       
        <!-- <div class="form-group">
        <label for="tinymce">Tiny Text Editoy</label>
        <textarea  class="richTextBox" cols="30" rows="10"></textarea>
        </div> -->
           
        </script>
    
  			<div class="form-group">
  				<label>Home Photo</label>
  				<input type="file" name="homepic">
  			</div>
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

  			
  			<input type="submit" class="pull-right btn btn-primary" name="create" id="create" value="Create">
  		   </form>
  		  

  		</div>

  	</div><!-- row -->
  </div><!--container-fluid-->
   
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<link rel="stylesheet" href="<?php echo e(voyager_asset('lib/css/responsive.dataTables.min.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
<script type="text/javascript">
            $(function () {
                $('#datetimepicker2').datetimepicker({
                   // local:'ru';
                    format: 'YY:MM:DD:HH:mm:ss'
                });
            });
</script>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('voyager::master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>