<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="author" content="SemiColonWeb" />
  <!-- Stylesheets===== -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
  <link rel="stylesheet" href="<?php echo e(asset('css/material.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/profile.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/compiled.min.css')); ?>"> 
  <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>" type="text/css"/>
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" type="text/css"/>
  <link rel="stylesheet" href="<?php echo e(asset('css/swiper.css')); ?>" type="text/css"/>
  <link rel="stylesheet" href="<?php echo e(asset('css/dark.css')); ?>" type="text/css"/>
  <link rel="stylesheet" href="<?php echo e(asset('css/font-icons.css')); ?>" type="text/css"/>
  <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>" type="text/css"/>
  <link rel="stylesheet" href="<?php echo e(asset('css/magnific-popup.css')); ?>" type="text/css"/>
  <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>" type="text/css" />  
  <link rel="stylesheet" href="<?php echo e(asset('css/components/pricing-table.css')); ?>" type="text/css"/>
     
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Document Title-->

  <!-- js-->  

   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <!-- <script src="<?php echo e(asset('js/jquery.js')); ?>" type="text/javascript"></script> -->
  <script type="text/javascript" src="<?php echo e(asset('js/jquery.subscribe-better.js')); ?>"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript" src="<?php echo e(asset('js/jquery.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('js/plugins.js')); ?>"></script>
  <!-- Footer Scripts
  ============================================= -->
  <script type="text/javascript" src="<?php echo e(asset('js/functions.js')); ?>"></script>
  <script  src="<?php echo e(asset('css/material.js')); ?>"></script>
  <!--============================================= -->
  <title> Zayat | Connect The Dots </title>
</head>

<body class="stretched">

  <!-- Document Wrapper -->
  <div id="wrapper" class="clearfix">

    <!-- Header Start -->

    <!-- Header-->
    <header id="header" class="transparent-header full-header" data-sticky-class="not-dark">

      <div id="header-wrap">

        <div class="container clearfix">

          <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

          <!-- Logo -->
          <div id="logo">
            <a href="<?php echo e(route('home')); ?>" class="standard-logo" data-dark-logo="<?php echo e(asset('images/logo-dark.png')); ?>">
              <img src="<?php echo e(asset('images/logo.png')); ?>" alt="Canvas Logo">
            </a>
            <a href="index.html" class="retina-logo" data-dark-logo="<?php echo e(asset('images/logo-dark@2x.png')); ?>">
              <img src="<?php echo e(asset('images/logo@2x.png')); ?>" alt="Canvas Logo">
            </a>
          </div><!-- #logo end -->

          <!-- Primary Navigation -->
          <nav id="primary-menu" class="dark">
           <ul>
              <li class="<?php echo e((Route::current()->getName() == 'home') ? 'current' : null); ?>">
                <a href="<?php echo e(route('home')); ?>" class="<?php echo e((Route::current()->getName() == 'home') ? 'current' : null); ?>"><div>Home</div></a>
              </li>
              
              <li class="<?php echo e((Route::current()->getName() == 'frontend.location')  ? 'current' : null); ?>">
                <a href="<?php echo e(route('frontend.location')); ?>" ><div>Location</div></a>
              </li>
               <li class="<?php echo e((Route::current()->getName() == 'frontend.community')  ? 'current' : null); ?>">
                <a href="<?php echo e(route('frontend.community')); ?>" ><div>Community</div></a>
              </li>
              <li class="<?php if($page=='event' || $page=='eventdetail'): echo 'current';else: echo ' ';endif; ?>">
                <a href="<?php echo e(route('frontend.events')); ?>" ><div>Events</div></a>
              </li>
              <li class="<?php if($page=='plan' || $page=='plandetail'): echo 'current';else: echo ' ';endif; ?>">
                <a href="<?php echo e(route('frontend.plans')); ?>" ><div>Plans</div></a>
              </li>
            </ul>
          </nav>
            <!-- Top Cart-->
            <?php if(Auth::check()): ?>
            <div id="top-cart">
              <a href="#" id="top-cart-trigger"><i class="material-icons">person</i></a>
              <div class="top-cart-content">
                <div class="top-cart-title">
                  <h4><?php echo e(Auth::user()->name); ?>'s Profile</h4>
                </div>
                <div class="top-cart-items">
                  <div class="list-group">
                    <a href="<?php echo e(route('user.index')); ?>" class="list-group-item clearfix">Profile<i class="icon-user pull-right"></i></a>
                  </div>
                  <div class="list-group">
                    <a href="" class="list-group-item clearfix">Settings<i class="icon-cog pull-right"></i></a>
                  </div>
                </div>
                <div class="top-cart-action clearfix">                 
                <form action="<?php echo e(route('logout')); ?>" method="post" id="logout-form"><?php echo e(csrf_field()); ?></form>
                  <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="button button-3d button-small nomargin fright btn-logout">
                                            Logout
                                        </a>                  
                </div>
              </div>
            </div><!-- #top-cart end -->
            <?php else: ?>
            <div id="top-cart">
              <a href="#" id="top-cart-trigger"><i class="material-icons">lock</i></a>
              <div class="top-cart-content">
                <div class="top-cart-title">
                  <h4>Login to your profile</h4>
                </div>
                <div class="top-cart-items">
                  <div class="list-group">
                    <a href="<?php echo e(route('register')); ?>" class="list-group-item clearfix">Register<i class="icon-user pull-right"></i></a>
                  </div>
                  <div class="list-group ">
                    <div class="top-cart-action clearfix"> 
                    <a href="<?php echo e(route('login')); ?>" class="list-group-item clearfix">Login<i class="icon-cog pull-right"></i></a>
                  </div>
                  </div>
                </div>                
                </div>
            </div><!-- #top-cart end -->
            <?php endif; ?>

            <!-- Top Search-->
            <div id="top-search">
              <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
              <form action="search.html" method="get">
                <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
              </form>
            </div><!-- #top-search end -->
          </nav><!-- #primary-menu end -->
        </div>
      </div>
     
    </header><!-- #header end -->