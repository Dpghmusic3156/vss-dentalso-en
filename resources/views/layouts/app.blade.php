<!doctype html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    @if(!defined('WPSEO_VERSION') && !class_exists('RankMath'))
      @if(is_front_page() || is_home())
        <meta name="description" content="Discover DentalSO, the complete dental lab management software ecosystem. Streamline production, connect with clinics, and get full operational control. Book a demo!">
      @elseif(is_singular())
        <meta name="description" content="{{ wp_trim_words(strip_shortcodes(strip_tags(get_post()->post_content)), 30, '...') }}">
      @endif
      <meta property="og:type" content="website" />
      <meta property="og:site_name" content="DentalSO" />
      <meta property="og:title" content="{{ wp_get_document_title() }}" />
      <meta property="og:description" content="Discover DentalSO, the complete dental lab management software ecosystem. Streamline production, connect with clinics, and get full operational control." />
      <meta property="og:url" content="{{ home_url() }}" />
      <meta name="twitter:card" content="summary_large_image" />
    @endif

    @php(do_action('get_header'))
    @php(wp_head())
  </head>

  <body @php(body_class())>
    @php(wp_body_open())

    <div id="app">
      <a class="sr-only focus:not-sr-only" href="#main">
        {{ __('Skip to content') }}
      </a>
      @hasSection('header')
        @yield('header')
      @else
        @include('sections.header')
      @endif

      <main id="main" class="main">
        @yield('content')
      </main>

      @hasSection('sidebar')
        <aside class="sidebar">
          @yield('sidebar')
        </aside>
      @endif

      @include('sections.footer')
    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())
  </body>
</html>
