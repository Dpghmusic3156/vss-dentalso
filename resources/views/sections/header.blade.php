<section id="top-header" class="bg-black text-primary-500 text-sm py-1.5">
  <div class="px0-380 container flex-1 text-center md:text-right flex justify-center lg:justify-end	text-white">
    <span class="text-right hidden lg:block">Liên hệ:</span>&nbsp;&nbsp;
    <img src="<?php echo get_template_directory_uri(); ?>/resources/images/vn.png" class="self-center">
    &nbsp;
    <a href="tel:0947476000" class="hover:text-primary-500"><?php echo get_theme_mod('phone'); ?></a>
    &nbsp;-&nbsp;
    <img src="<?php echo get_template_directory_uri(); ?>/resources/images/us.png" class="self-center">
    &nbsp;
    <a class="hover:text-primary-500" href="tel:+14259545496"><?php echo get_theme_mod('phoneus'); ?></a>
    &nbsp; | &nbsp;
    <a class="hover:text-primary-500" href="https://dentalso.com/en">English</a>
  </div>
</section>
<header class="banner h-14 w-full block h1-header-sticky z-50 h1-header-sticky h1-header-sticky-qs bg-white relative" x-data="{mobileMenuOpen: false}">
  <section class="container h-full">
    <a class="brand h-full float-left pr-6" href="{{ home_url('/') }}">
      <img alt="logo" class="h-full py-4" src="<?php echo get_theme_mod('logo'); ?>">
    </a>
    <nav class="h-full float-left hidden lg:block 
      {{isset($menu) ? 'product-page before:border before:border-black before:h-7 before:absolute before:top-4 ' : ''}}">
      {!! wp_nav_menu(
      [
      'theme_location' => isset($menu) ? $menu : 'primary_navigation' ,
      'echo' => false,
      'container' => false,
      'items_wrap' => '<ul id="%1$s" class="%2$s h-full flex items-center text-sm xl:text-base space-x-4 xl:space-x-8">%3$s</ul>',
      ])
      !!}
    </nav>
    <div class="float-right flex items-center h-full">
     <div class="dropdown inline-block relative">
        <a href="https://lab.dentalso.com/" target="_blank">
        <button class="bg-primary3-300 text-gray-700 py-2 px-4 rounded-3xl inline-flex items-center">
          <span class="text-nowrap text-center">Đăng nhập</span>
        </button>
      </a>
      </div>
      <span class="material-symbols-outlined float-right lg:hidden pl-4" @click="mobileMenuOpen = true">
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

    <!-- <div class="w-full flex justify-end" x-data="{switcher:{
            selected: 0,
            countries: [
                {
                    label: 'English',
                    lang: 'en',
                    flag: 'gb',
                },
                {
                    label: 'Spanish',
                    lang: 'es',
                    flag: 'es',
                },
            ],
            menuToggle: false,
        }}">
      <div class="relative pb-5" @click.away="switcher.menuToggle=false">
        <button class="bg-white text-gray-500 rounded shadow-lg py-2 pr-3 pl-5 focus:outline-none" @click.prevent="switcher.menuToggle=!switcher.menuToggle">
          <span class="flag-icon w-6" :class="`flag-icon-${switcher.countries[switcher.selected].flag}`"></span>
          <span x-text="switcher.countries[switcher.selected].label"></span>
          <i class="mdi mdi-chevron-down"></i>
        </button>
        <div class="bg-white text-gray-700 shadow-md rounded text-sm absolute mt-12 top-0 right-0 min-w-full w-48 z-30" x-show="switcher.menuToggle" x-transition:enter="transition ease duration-300 transform" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease duration-300 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4">
          <span class="absolute top-0 right-0 w-3 h-3 bg-white transform rotate-45 -mt-1 mr-3"></span>
          <div class="bg-white overflow-auto rounded w-full relative z-10">
            <ul class="list-reset">
              <template x-for="(item, index) in switcher.countries">
                <li>
                  <a href="#" class="px-4 py-2 flex hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100" @click.prevent="switcher.menuToggle=false;switcher.selected=index;">
                    <span class="inline-block mr-2 flag-icon" :class="'flag-icon-'+item.flag"></span>
                    <span class="inline-block" x-text="item.label"></span>
                    <template x-if="index==switcher.selected">
                      <span class="ml-auto">
                        <i class="mdi mdi-check"></i>
                      </span>
                    </template>
                  </a>
                </li>
              </template>
            </ul>
          </div>
        </div>
      </div>
    </div> -->
  </section>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ET33DGF485">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ET33DGF485');
</script>
  <!-- Meta Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '442552758072688');
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=442552758072688&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Meta Pixel Code -->
</header>