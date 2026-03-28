<header class="apple-nav {{ !is_front_page() ? 'has-subnav' : '' }}" 
    x-data="{
        mobileMenuOpen: false,
        activeSubmenu: null
    }"
    x-init="$watch('mobileMenuOpen', value => {
        if (value) document.body.classList.add('overflow-hidden');
        else {
            document.body.classList.remove('overflow-hidden');
            setTimeout(() => activeSubmenu = null, 400);
        }
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
        <div class="flex items-center justify-end gap-3 xl:gap-6 shrink-0">
            <a href="https://lab.dentalso.com/" target="_blank" class="apple-nav-btn hidden lg:inline-flex whitespace-nowrap">
                Sign In
            </a>
        </div>
        <div class="flex items-center justify-end gap-3 xl:gap-6 shrink-0 lg:hidden">
            {{-- Mobile hamburger --}}
            <button class="flex items-center justify-center w-10 h-10 -mr-2 apple-press" 
                @click="mobileMenuOpen = true" 
                aria-label="Toggle menu"
                :aria-expanded="mobileMenuOpen"
                aria-controls="mobile-nav">
                <span class="material-symbols-outlined text-[#1d1d1f]">menu</span>
            </button>
        </div>
    </div>

    @php
        // Build WP Nav items into a hierarchy tree
        $locations = get_nav_menu_locations();
        $menu_id = $locations['primary_navigation'] ?? null;
        $menu_items = $menu_id ? wp_get_nav_menu_items($menu_id) : [];
        
        $mobile_tree = [];
        $mobile_subs = [];
        
        if ($menu_items) {
            foreach ($menu_items as $item) {
                if (empty($item->menu_item_parent)) {
                    $mobile_tree[] = $item;
                    $mobile_subs[$item->ID] = [];
                } else {
                    $mobile_subs[$item->menu_item_parent][] = $item;
                }
            }
        }
    @endphp

    {{-- Mobile Full-Screen Drill-Down Nav --}}
    <div x-show="mobileMenuOpen"
        x-transition:enter="transition-all duration-500 ease-[cubic-bezier(0.16,1,0.3,1)]"
        x-transition:enter-start="opacity-0 translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition-all duration-300 ease-in-out"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        x-cloak
        id="mobile-nav"
        class="lg:hidden absolute top-0 left-0 w-full h-[100dvh] bg-[#f9f9fb] z-[9999] overflow-hidden flex flex-col">
        
        {{-- Top Bar of the Overlay --}}
        <div class="flex items-center justify-between px-6 pt-8 pb-4">
            {{-- Back Button --}}
            <button class="flex items-center justify-center w-11 h-11 -ml-3 apple-press text-[#1d1d1f] hover:text-black transition-opacity"
                x-show="activeSubmenu !== null"
                x-transition:enter="transition-opacity duration-300 delay-100"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity duration-150"
                @click="activeSubmenu = null">
                <span class="material-symbols-outlined text-3xl font-light">chevron_left</span>
            </button>
            <div x-show="activeSubmenu === null" class="w-11"></div> {{-- Placeholder for alignment --}}

            {{-- Close Button --}}
            <button class="flex items-center justify-center w-11 h-11 -mr-3 apple-press text-[#1d1d1f] hover:text-black" 
                @click="mobileMenuOpen = false">
                <span class="material-symbols-outlined text-3xl font-light">close</span>
            </button>
        </div>

        {{-- Main Menu --}}
        <div class="flex-1 overflow-y-auto px-8 pb-20 [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none] relative"
            x-show="activeSubmenu === null"
            x-transition:enter="transition-transform duration-500 ease-[cubic-bezier(0.16,1,0.3,1)]"
            x-transition:enter-start="-translate-x-32 opacity-0"
            x-transition:enter-end="translate-x-0 opacity-100"
            x-transition:leave="transition-transform duration-400 ease-[cubic-bezier(0.16,1,0.3,1)]"
            x-transition:leave-start="translate-x-0 opacity-100"
            x-transition:leave-end="-translate-x-32 opacity-0">
            
            <ul class="flex flex-col gap-6 mt-4">
                @foreach($mobile_tree as $item)
                    <li>
                        @if(!empty($mobile_subs[$item->ID]))
                            <button class="text-[34px] font-semibold tracking-tight text-[#1d1d1f] w-full text-left flex items-center justify-between group active:opacity-60 transition-opacity"
                                @click="activeSubmenu = {{ $item->ID }}">
                                {{ $item->title }}
                            </button>
                        @else
                            <a href="{{ $item->url }}" class="block text-[34px] font-semibold tracking-tight text-[#1d1d1f] active:opacity-60 transition-opacity">
                                {{ $item->title }}
                            </a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>

        {{-- Sub Menus --}}
        @foreach($mobile_tree as $parent)
            @if(!empty($mobile_subs[$parent->ID]))
                <div class="flex-1 overflow-y-auto px-8 pb-32 [&::-webkit-scrollbar]:hidden [-ms-overflow-style:none] [scrollbar-width:none] absolute inset-0 top-[88px] bg-[#f9f9fb]"
                    x-show="activeSubmenu === {{ $parent->ID }}"
                    x-transition:enter="transition-transform duration-500 ease-[cubic-bezier(0.16,1,0.3,1)] delay-75"
                    x-transition:enter-start="translate-x-full opacity-0"
                    x-transition:enter-end="translate-x-0 opacity-100"
                    x-transition:leave="transition-transform duration-400 ease-[cubic-bezier(0.16,1,0.3,1)]"
                    x-transition:leave-start="translate-x-0 opacity-100"
                    x-transition:leave-end="translate-x-full opacity-0"
                    style="display: none;">
                    
                    <h2 class="text-4xl font-semibold tracking-tight text-[#1d1d1f] mb-10 leading-tight">Explore All<br>{{ $parent->title }}</h2>
                    
                    <ul class="flex flex-col gap-5">
                        @foreach($mobile_subs[$parent->ID] as $child)
                            <li>
                                <a href="{{ $child->url }}" class="block text-[28px] font-medium text-[#1d1d1f] tracking-tight active:opacity-60 transition-colors">
                                    {{ $child->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        @endforeach
    </div>
</header>

@if(!is_front_page())
@php
    $subnav_title = get_the_title();
    if (is_post_type_archive('customer') || is_singular('customer') || is_page('customer')) {
        $subnav_title = 'Customers';
    }
@endphp
<div class="apple-subnav" x-data="{}">
    <div class="apple-subnav-inner">
        <h2 class="apple-subnav-title cursor-pointer apple-press" @click="window.scrollTo({top: 0, behavior: 'smooth'})">{{ $subnav_title }}</h2>
        <div class="apple-subnav-actions">
            @if(!is_page('request-demo'))
                <a href="{{ home_url('request-demo') }}" class="apple-subnav-btn">
                    Book a Demo
                </a>
            @endif
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
<noscript><img height="1" width="1" style="display:none" loading="lazy"
    src="https://www.facebook.com/tr?id=442552758072688&ev=PageView&noscript=1" /></noscript>
<!-- End Meta Pixel Code -->