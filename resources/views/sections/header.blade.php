<section id="top-header" class="bg-black text-primary-500 text-sm py-1.5 h-8 flex items-center">
  <div class="px0-380 container flex-1 text-center md:text-right flex justify-center lg:justify-end items-center text-white h-full">
    <span class="text-right hidden lg:block">Liên hệ:</span>&nbsp;&nbsp;
    <img src="{{ get_template_directory_uri() }}/resources/images/vn.png" class="self-center">
    &nbsp;
    <a href="tel:0947476000" class="hover:text-primary-500">{{ get_theme_mod('phone') }}</a>
    &nbsp;-&nbsp;
    <img src="{{ get_template_directory_uri() }}/resources/images/us.png" class="self-center">
    &nbsp;
    <a class="hover:text-primary-500" href="tel:+14259545496">{{ get_theme_mod('phoneus') }}</a>
    &nbsp; | &nbsp;
    <a class="hover:text-primary-500" href="https://dentalso.com/en">English</a>
  </div>
</section>
<header class="banner h-14 w-full block h1-header-sticky z-50 bg-white relative" x-data="{mobileMenuOpen: false}">
  <section class="container h-full flex items-center justify-between">
    <div class="h-full flex items-center">
      <a class="brand h-full flex items-center pr-6" href="{{ home_url('/') }}">
        <img alt="logo" class="h-full py-3 object-contain" src="{{ get_theme_mod('logo') }}">
      </a>
      <nav class="h-full hidden lg:block 
        {{ isset($menu) ? 'product-page before:border before:border-black before:h-7 before:absolute before:top-4 ' : '' }}">
        {!! wp_nav_menu(
        [
        'theme_location' => isset($menu) ? $menu : 'primary_navigation' ,
        'echo' => false,
        'container' => false,
        'items_wrap' => '<ul id="%1$s" class="%2$s h-full flex items-center text-sm xl:text-base space-x-4 xl:space-x-8">%3$s</ul>',
        ])
        !!}
      </nav>
    </div>

    <div class="flex items-center h-full">
      <div class="dropdown inline-block relative">
        <a href="https://lab.dentalso.com/" target="_blank">
          <button class="bg-primary3-300 text-gray-700 py-2 px-4 rounded-3xl inline-flex items-center">
            <span class="text-nowrap text-center">Đăng nhập</span>
          </button>
        </a>
      </div>
      <span class="material-symbols-outlined lg:hidden pl-4 cursor-pointer" @click="mobileMenuOpen = true">
        menu
      </span>
      <div x-show="mobileMenuOpen" @click.away="mobileMenuOpen = false"
        x-transition:enter="transition ease-out duration-500" x-transition:enter-start="transform -translate-x-full"
        x-transition:enter-end="transform translate-x-0" x-transition:leave="transition ease-in duration-500"
        x-transition:leave-start="transform translate-x-0" x-transition:leave-end="transform -translate-x-full"
        class="absolute top-0 left-0 h-screen bg-white p-1 border-r shadow-lg w-5/6 z-20 mobile-nav" x-cloak>
        {!! wp_nav_menu(
        [
        'theme_location' => isset($menu) ? $menu : 'primary_navigation' ,
        'echo' => false,
        'container' => false,
        'items_wrap' => '<ul id="%1$s" class="%2$s items-center text-sm xl:text-base xl:space-x-8 h-12 px-8">%3$s</ul>',
        ])
        !!}
      </div>
    </div>


  </section>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-ET33DGF485">
  </script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-ET33DGF485');
  </script>
  <!-- Meta Pixel Code -->
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '442552758072688');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=442552758072688&ev=PageView&noscript=1" /></noscript>
  <!-- End Meta Pixel Code -->
</header>