<header class="apple-nav {{ !is_front_page() ? 'has-subnav' : '' }}" x-data="{mobileMenuOpen: false}">
    <div class="apple-nav-inner">
        {{-- Logo --}}
        <a class="apple-nav-logo shrink-0" href="{{ home_url('/') }}">
            <img alt="DentalSO" class="h-full py-2 object-contain" src="{{ get_theme_mod('logo') }}">
        </a>

        {{-- Desktop Navigation --}}
        <nav class="hidden lg:flex items-center justify-center h-full px-4 lg:px-8">
            {!! wp_nav_menu([
                'theme_location' => isset($menu) ? $menu : 'primary_navigation',
                'echo' => false,
                'container' => false,
                'items_wrap' => '<ul id="%1$s" class="%2$s apple-nav-menu">%3$s</ul>',
            ]) !!}
        </nav>

        {{-- Right Actions (Hidden) --}}
        {{-- 
        <div class="flex items-center justify-end gap-3 xl:gap-6 shrink-0">
            <a href="tel:{{ get_theme_mod('phone') }}" class="hidden lg:flex items-center text-xs text-[#1d1d1f]/60 hover:text-[#1d1d1f] transition-colors whitespace-nowrap">
                <span class="material-symbols-outlined text-sm mr-1">call</span>
                {{ get_theme_mod('phone') }}
            </a>
            <a href="https://lab.dentalso.com/" target="_blank" class="apple-nav-btn hidden lg:inline-flex whitespace-nowrap">
                Đăng nhập
            </a>
            --}}
        <div class="flex items-center justify-end gap-3 xl:gap-6 shrink-0 lg:hidden">
            {{-- Mobile hamburger --}}
            <button class="lg:hidden flex items-center justify-center w-10 h-10 -mr-2" @click="mobileMenuOpen = true" aria-label="Open menu">
                <span class="material-symbols-outlined text-[#1d1d1f]">menu</span>
            </button>
        </div>
    </div>

    {{-- Mobile Drawer — Apple-style full-screen overlay --}}
    <div x-show="mobileMenuOpen"
        x-transition:enter="transition ease-out duration-400"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="apple-mobile-overlay" x-cloak>

        {{-- Overlay header --}}
        <div class="apple-mobile-overlay__header">
            <a href="{{ home_url('/') }}">
                <img alt="DentalSO" class="h-8 object-contain brightness-0 invert" src="{{ get_theme_mod('logo') }}">
            </a>
            <button @click="mobileMenuOpen = false" class="apple-mobile-overlay__close" aria-label="Close menu">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        {{-- Menu items --}}
        <nav class="apple-mobile-overlay__nav">
            {!! wp_nav_menu([
                'theme_location' => isset($menu) ? $menu : 'primary_navigation',
                'echo' => false,
                'container' => false,
                'items_wrap' => '<ul id="%1$s" class="%2$s apple-mobile-overlay__menu">%3$s</ul>',
            ]) !!}
        </nav>

        {{-- Bottom actions (Hidden) --}}
        {{-- 
        <div class="apple-mobile-overlay__actions">
            <a href="tel:{{ get_theme_mod('phone') }}" class="apple-mobile-overlay__phone">
                <span class="material-symbols-outlined">call</span>
                {{ get_theme_mod('phone') }}
            </a>
            <a href="https://lab.dentalso.com/" target="_blank" class="apple-mobile-overlay__cta">
                Đăng nhập
            </a>
        </div>
        --}}
    </div>
</header>

@if(!is_front_page())
<div class="apple-subnav">
    <div class="apple-subnav-inner">
        <h2 class="apple-subnav-title">{{ get_the_title() }}</h2>
        <div class="apple-subnav-actions">
            <a href="{{ home_url('lien-he') }}" class="apple-subnav-btn">
                Liên hệ
            </a>
        </div>
    </div>
</div>
@endif


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