
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />	
	<!-- Stylesheets
	============================================= -->

	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo e(asset('css/swiper.css')); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo e(asset('css/dark.css')); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo e(asset('css/font-icons.css')); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo e(asset('css/magnific-popup.css')); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo e(asset('css/subscribe-better.css')); ?>" type="text/css" />


	<link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- js-->
	<script type="text/javascript" src="<?php echo e(asset('js/jquery.subscribe-better.js')); ?>"></script>
	 
	 <style type="text/css">
	#sbox
	{
		width:320px;
		text-align:center;
	}
	.ptext
	{
		font-family:Arial;
		letter-spacing:0px;
		font-size:14px;
		text-align:left;
		text-decoration:none;
	}
	#top-search{
		width:182px;
	}
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1" />	

	<!-- Document Title	============================================= -->
	<title>COWORKING @ ZAYAT | CONNECT THE DOTS</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

	<!-- Header Start -->

<?php echo $__env->make('partials.header-login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<!-- Header End -->
  <?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div><!-- #wrapper end -->

		<!-- Footer
		============================================= -->
		

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="<?php echo e(asset('js/jquery.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('js/plugins.js')); ?>"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="<?php echo e(asset('js/functions.js')); ?>"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($){
			var $faqItems = $('#faqs .faq');
			if( window.location.hash != '' ) {
				var getFaqFilterHash = window.location.hash;
				var hashFaqFilter = getFaqFilterHash.split('#');
				if( $faqItems.hasClass( hashFaqFilter[1] ) ) {
					$('#portfolio-filter li').removeClass('activeFilter');
					$( '[data-filter=".'+ hashFaqFilter[1] +'"]' ).parent('li').addClass('activeFilter');
					var hashFaqSelector = '.' + hashFaqFilter[1];
					$faqItems.css('display', 'none');
					if( hashFaqSelector != 'all' ) {
						$( hashFaqSelector ).fadeIn(500);
					} else {
						$faqItems.fadeIn(500);
					}
				}
			}

			$('#portfolio-filter a').click(function(){
				$('#portfolio-filter li').removeClass('activeFilter');
				$(this).parent('li').addClass('activeFilter');
				var faqSelector = $(this).attr('data-filter');
				$faqItems.css('display', 'none');
				if( faqSelector != 'all' ) {
					$( faqSelector ).fadeIn(500);
				} else {
					$faqItems.fadeIn(500);
				}
				return false;
		   });
		});
	</script>

</body>
</html>


