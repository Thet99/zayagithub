
<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">

  <div id="header-wrap">

    <div class="container clearfix">

      <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

      <!-- Logo
      ============================================= -->
      <div id="logo">
        <a href="<?php echo e(route('home')); ?>" class="standard-logo" data-dark-logo="<?php echo e(asset('/images/logo-dark.png')); ?>"><img src="<?php echo e(asset('/images/logo.png')); ?>" alt="Canvas Logo"></a>
        <a href="<?php echo e(route('home')); ?>" class="retina-logo" data-dark-logo="<?php echo e(asset('/images/logo-dark@2x.png')); ?>">
          <img src="<?php echo e(asset('/images/logo@2x.png')); ?>" alt="Canvas Logo">
        </a>
      </div><!-- #logo end -->

      <!-- Primary Navigation
      ============================================= -->
      <nav id="primary-menu" class="dark">
        <ul>
         
          <li class="<?php echo e((\Request::route()->getName() == 'frontend.plans') ? 'current' : ''); ?>">
            <a href="<?php echo e(route('frontend.plans')); ?>"><div>PLANS</div></a>
          </li>

          <li class="<?php echo e((\Request::route()->getName() == 'frontend.location') ? 'current' : ''); ?>">
            <a href="<?php echo e(route('frontend.location')); ?>"><div>Locations</div></a>
          </li>

          <li class="<?php echo e((\Request::route()->getName() == 'frontend.community') ? 'current' : ''); ?>">
            <a href="<?php echo e(route('frontend.community')); ?>"><div>Community</div></a>
          </li>

          <li class="<?php echo e((\Request::route()->getName() == 'frontend.events') ? 'current' : ''); ?>">
            <a href="<?php echo e(route('frontend.events')); ?>"><div>EVENTS</div></a>
          </li>


          <!-- <li class="<?php echo e((\Request::route()->getName() == 'frontend.faqs') ? 'current' : ''); ?>">
            <a href="<?php echo e(route('frontend.faqs')); ?>"><div>FAQ</div></a>
          </li> -->
        </ul>

        <!-- Top Cart
        ============================================= -->

        <!-- Top Search
        ============================================= -->
        
      </nav><!-- #primary-menu end -->
    </div>
  </div>
</header><!-- #header end -->
