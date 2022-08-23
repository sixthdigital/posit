<div class="px-12 py-12 mobile-menu">

  @if (has_nav_menu('primary_navigation'))
  <nav class="nav-primary grow" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
    {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav  flex flex-col text-2xl', 'echo' => false]) !!}
  </nav>
@endif

</div>