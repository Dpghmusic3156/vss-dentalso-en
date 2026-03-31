<!doctype html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,100..700,0,0&display=swap">
    <link rel="alternate" href="https://dentalso.com/vi/" hreflang="vi-vn" />
    <link rel="alternate" href="https://dentalso.com/vi/" hreflang="vi" />
    <link rel="alternate" href="https://dentalso.com/en/" hreflang="en" />
    <link rel="alternate" href="https://dentalso.com/vi/" hreflang="x-default" />
    
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

    {{-- Schema.org Structured Data --}}
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@graph": [{
            "@type": "Organization",
            "@id": "https://dentalso.com/#organization",
            "name": "DentalSO",
            "url": "https://dentalso.com/en/",
            "logo": {
              "@type": "ImageObject",
              "url": "https://dentalso.com/en/wp-content/uploads/logo.png"
            },
            "description": "Professional Dental Lab management and clinic connection software.",
            "contactPoint": {
              "@type": "ContactPoint",
              "telephone": "+1-206-201-9069",
              "contactType": "customer service",
              "availableLanguage": "English"
            },
            "sameAs": [
              "https://www.facebook.com/dentalso",
              "https://apps.apple.com/vn/app/dentalso/id6447111443",
              "https://play.google.com/store/apps/details?id=com.dentalso"
            ]
          },
          {
            "@type": "SoftwareApplication",
            "@id": "https://dentalso.com/#app",
            "name": "DentalSO",
            "applicationCategory": "BusinessApplication",
            "operatingSystem": "iOS, Android, Web",
            "description": "Professional Dental Lab management software: production tracking, HR management, QR Code warranty, and seamless clinic connections.",
            "url": "https://dentalso.com/en/",
            "publisher": {
              "@id": "https://dentalso.com/#organization"
            },
            "offers": {
              "@type": "Offer",
              "price": "0",
              "priceCurrency": "USD",
              "description": "Free trial available"
            },
            "downloadUrl": [
              "https://apps.apple.com/vn/app/dentalso/id6447111443",
              "https://play.google.com/store/apps/details?id=com.dentalso"
            ],
            "aggregateRating": {
              "@type": "AggregateRating",
              "ratingValue": "4.8",
              "reviewCount": "300"
            }
          },
          {
            "@type": "FAQPage",
            "mainEntity": [{
                "@type": "Question",
                "name": "What is DentalSO?",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "DentalSO is a management software for Dental Labs and Clinics, helping to digitize the entire workflow from ordering and production to electronic warranties via QR Code."
                }
              },
              {
                "@type": "Question",
                "name": "Does DentalSO have a mobile app?",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "Yes. DentalSO has a mobile app on the App Store (iOS) and Google Play (Android), allowing technicians to scan job codes, track production progress, and receive real-time notifications."
                }
              },
              {
                "@type": "Question",
                "name": "Who is DentalSO for?",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "DentalSO is suitable for Dental Labs, Clinics, and Sales Agents who want to manage orders, connect with labs, and look up electronic warranties professionally."
                }
              },
              {
                "@type": "Question",
                "name": "Is DentalSO data secure?",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "Yes. DentalSO uses RSA and SSL/TLS encryption for all data, automated daily backups, and detailed permissions down to the employee level."
                }
              },
              {
                "@type": "Question",
                "name": "How to look up a warranty on DentalSO?",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "Customers simply scan the QR Code printed on the warranty card via camera to view origin mapping, warranty period, and restoration details instantly."
                }
              }
            ]
          }
        ]
      }
    </script>
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
