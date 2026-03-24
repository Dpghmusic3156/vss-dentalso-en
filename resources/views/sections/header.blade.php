<header class="apple-nav {{ !is_front_page() ? 'has-subnav' : '' }}" 
    x-data="{mobileMenuOpen: false}"
    x-init="$watch('mobileMenuOpen', value => {
        if (value) document.body.classList.add('overflow-hidden');
        else document.body.classList.remove('overflow-hidden');
    })">
    <div class="apple-nav-inner">
        {{-- Logo --}}
        <a class="apple-nav-logo apple-press shrink-0" href="{{ home_url('/') }}">
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
            <a href="https://api.whatsapp.com/send/?phone=12062019069&text&type=phone_number&app_absent=0" target="_blank" class="hidden lg:flex items-center text-xs text-[#1d1d1f]/60 hover:text-[#1d1d1f] transition-colors whitespace-nowrap">
                <span class="material-symbols-outlined text-sm mr-1">call</span>
                {{ get_theme_mod('phoneus') }}
            </a>
            <a href="https://lab.dentalso.com/" target="_blank" class="apple-nav-btn hidden lg:inline-flex whitespace-nowrap">
                Đăng nhập
            </a>
            --}}
        <div class="flex items-center justify-end gap-3 xl:gap-6 shrink-0 lg:hidden">
            {{-- Mobile hamburger --}}
            <button class="flex items-center justify-center w-10 h-10 -mr-2 apple-press" 
                @click="mobileMenuOpen = !mobileMenuOpen" 
                aria-label="Toggle menu"
                :aria-expanded="mobileMenuOpen"
                aria-controls="mobile-nav">
                <span class="material-symbols-outlined text-[#1d1d1f]" x-text="mobileMenuOpen ? 'close' : 'menu'">menu</span>
            </button>
        </div>
    </div>

    {{-- Mobile Nav Panel — Slides down from navbar --}}
    <div x-show="mobileMenuOpen"
        x-transition:enter="transition-all duration-500 cubic-bezier(0.16, 1, 0.3, 1)"
        x-transition:enter-start="opacity-0 -translate-y-4 scale-y-95"
        x-transition:enter-end="opacity-100 translate-y-0 scale-y-100"
        x-transition:leave="transition-all duration-300 cubic-bezier(0.16, 1, 0.3, 1)"
        x-transition:leave-start="opacity-100 translate-y-0 scale-y-100"
        x-transition:leave-end="opacity-0 -translate-y-4 scale-y-95"
        x-cloak
        id="mobile-nav"
        class="lg:hidden bg-white border-b border-gray-100 overflow-hidden relative z-[9998] transform">
        <nav class="px-6 py-6">
            {!! wp_nav_menu([
                'theme_location' => isset($menu) ? $menu : 'primary_navigation',
                'echo' => false,
                'container' => false,
                'items_wrap' => '<ul id="%1$s" class="%2$s apple-mobile-menu">%3$s</ul>',
            ]) !!}
        </nav>
    </div>
</header>

@if(!is_front_page())
@php
    $subnav_title = get_the_title();
    if (is_post_type_archive('customer') || is_singular('customer') || is_page('customer')) {
        $subnav_title = 'Featured Clients';
    }
@endphp
<div class="apple-subnav" x-data="{}">
    <div class="apple-subnav-inner">
        <h2 class="apple-subnav-title cursor-pointer apple-press" @click="window.scrollTo({top: 0, behavior: 'smooth'})">{{ $subnav_title }}</h2>
        <div class="apple-subnav-actions">
            <a href="{{ home_url('request-demo') }}" class="apple-subnav-btn">
                Book a Demo
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