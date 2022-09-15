<div class="px-12 py-12 mobile-menu">

  <?php if(has_nav_menu('primary_navigation')): ?>
  <nav class="nav-primary grow" aria-label="<?php echo e(wp_get_nav_menu_name('primary_navigation')); ?>">
    <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav  flex flex-col text-2xl', 'echo' => false]); ?>

  </nav>
<?php endif; ?>

</div><?php /**PATH /Volumes/Storage/Websites/posit/wp-content/themes/posit/resources/views/sections/mobile-menu.blade.php ENDPATH**/ ?>