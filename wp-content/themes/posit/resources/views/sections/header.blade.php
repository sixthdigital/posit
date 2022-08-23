<header class="banner site-header">
  <div class="container flex justify-between">
  <a class="brand" href="{{ home_url('/') }}">
    {!! $siteName !!}
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav class="hidden lg:flex nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'main-nav', 'echo' => false]) !!}
    </nav>
  @endif

  <button class="block lg:hidden hamburger hamburger--3dx" type="button">
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
  </button>
  </div>

</header>

@include('sections.mobile-menu')
