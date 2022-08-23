<header class="banner site-header">
  <div class="container flex justify-between">
  <a class="brand" href="<?php echo e(home_url('/')); ?>">
    <?php echo $siteName; ?>

  </a>

  <?php if(has_nav_menu('primary_navigation')): ?>
    <nav class="hidden lg:flex nav-primary" aria-label="<?php echo e(wp_get_nav_menu_name('primary_navigation')); ?>">
      <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'main-nav', 'echo' => false]); ?>

    </nav>
  <?php endif; ?>

  <button class="block lg:hidden hamburger hamburger--3dx" type="button">
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
  </button>
  </div>

</header>

<?php echo $__env->make('sections.mobile-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /Users/tom/Websites/posit/wp-content/themes/posit/resources/views/sections/header.blade.php ENDPATH**/ ?>