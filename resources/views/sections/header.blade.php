<header class="apple-nav" x-data="{mobileMenuOpen: false}">
    <div class="apple-nav-inner">
        {{-- Logo --}}
        <a class="apple-nav-logo" href="{{ home_url('/') }}">
            <img alt="DentalSO" class="h-full py-2 object-contain" src="{{ get_theme_mod('logo') }}">
        </a>

        {{-- Desktop Navigation --}}
        <nav class="hidden lg:flex items-center h-full flex-1 justify-center">
            {!! wp_nav_menu([
                'theme_location' => isset($menu) ? $menu : 'primary_navigation',
                'echo' => false,
                'container' => false,
                'items_wrap' => '<ul id="%1$s" class="%2$s apple-nav-menu">%3$s</ul>',
            ]) !!}
        </nav>

        {{-- Right Actions --}}
        <div class="flex items-center gap-3">
            <a href="tel:0947476000" class="hidden lg:flex items-center text-xs text-[#1d1d1f]/60 hover:text-[#1d1d1f] transition-colors">
                <span class="material-symbols-outlined text-sm mr-1">call</span>
                {{ get_theme_mod('phone') }}
            </a>
            <a href="https://lab.dentalso.com/" target="_blank" class="apple-nav-btn">
                Đăng nhập
            </a>
            {{-- Mobile hamburger --}}
            <button class="lg:hidden flex items-center justify-center w-10 h-10 -mr-2" @click="mobileMenuOpen = true" aria-label="Open menu">
                <span class="material-symbols-outlined text-[#1d1d1f]">menu</span>
            </button>
        </div>
    </div>

    {{-- Mobile Drawer --}}
    <div x-show="mobileMenuOpen" @click.away="mobileMenuOpen = false"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        class="apple-mobile-drawer" x-cloak>
        <div class="flex items-center justify-between px-5 py-3 border-b border-[#d2d2d7]/50">
            <a href="{{ home_url('/') }}">
                <img alt="DentalSO" class="h-8 object-contain" src="{{ get_theme_mod('logo') }}">
            </a>
            <button @click="mobileMenuOpen = false" class="flex items-center justify-center w-10 h-10">
                <span class="material-symbols-outlined text-[#1d1d1f]">close</span>
            </button>
        </div>
        <div class="px-5 py-4">
            {!! wp_nav_menu([
                'theme_location' => isset($menu) ? $menu : 'primary_navigation',
                'echo' => false,
                'container' => false,
                'items_wrap' => '<ul id="%1$s" class="%2$s apple-mobile-menu">%3$s</ul>',
            ]) !!}
            <div class="mt-6 pt-6 border-t border-[#d2d2d7]/50 space-y-4">
                <a href="tel:0947476000" class="flex items-center text-sm text-[#1d1d1f]">
                    <span class="material-symbols-outlined text-base mr-2">call</span>
                    {{ get_theme_mod('phone') }}
                </a>
                <a href="https://lab.dentalso.com/" target="_blank" class="apple-cta-primary block text-center">
                    Đăng nhập
                </a>
            </div>
        </div>
    </div>
</header>

{{-- Analytics scripts (preserved) --}}
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ET33DGF485"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-ET33DGF485');
</script>
<!-- Meta Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}
    (window,document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '442552758072688');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=442552758072688&ev=PageView&noscript=1" /></noscript>
<!-- End Meta Pixel Code -->