<header class="flex justify-around">
  <a class="flex flex-col justify-items-center" href="{{ home_url('/') }}">
    {!! the_custom_logo() !!}
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary " aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex flex-row gap-10 p-10', 'echo' => false]) !!}
    </nav>
  @endif
  <div class="flex flex-col justify-center ">
  <button class=" bg-blue-400 p-3">GET IN TOUCH</button>
  </div>
</header>
