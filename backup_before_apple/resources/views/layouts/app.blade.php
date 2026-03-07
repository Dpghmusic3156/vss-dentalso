<!doctype html>
<html @php(language_attributes())>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300;400;500;600;700&display=swap">
  <link rel=“alternate” href=“https://dentalso.com/vi” hreflang=“vi-vn” />
  <link rel=“alternate” href=“https://dentalso.com/en” hreflang=“en” />
  @php(do_action('get_header'))
  @php(wp_head())
  {{-- Open Graph / Social --}}
  @if(!defined('WPSEO_VERSION') && !class_exists('RankMath'))
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="DentalSO" />
  <meta property="og:title" content="DentalSO – Phần mềm quản lý Dental Lab & kết nối Nha khoa" />
  <meta property="og:description" content="Giải pháp số hóa toàn diện cho Dental Lab và Phòng khám Nha khoa. Quản lý sản xuất, bảo hành QR, kết nối liền mạch. 300+ khách hàng tin dùng." />
  <meta property="og:image" content="https://dentalso.com/vi/wp-content/uploads/2022/07/clinic.png" />
  <meta property="og:url" content="https://dentalso.com/vi/" />
  <meta property="og:locale" content="vi_VN" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="DentalSO – Phần mềm quản lý Dental Lab" />
  <meta name="twitter:description" content="Số hóa toàn diện quy trình Dental Lab & Nha khoa. App mobile, bảo hành QR, kết nối liền mạch." />
  <meta name="twitter:image" content="https://dentalso.com/vi/wp-content/uploads/2022/07/clinic.png" />
  @endif
  {{-- Schema.org Structured Data --}}
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [{
          "@type": "Organization",
          "@id": "https://dentalso.com/#organization",
          "name": "DentalSO",
          "url": "https://dentalso.com/vi/",
          "logo": {
            "@type": "ImageObject",
            "url": "https://dentalso.com/vi/wp-content/uploads/logo.png"
          },
          "description": "Phần mềm quản lý Dental Lab và kết nối Nha khoa chuyên nghiệp tại Việt Nam",
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+84-947-476-000",
            "contactType": "customer service",
            "availableLanguage": "Vietnamese"
          },
          "sameAs": [
            "https://www.facebook.com/dentalso",
            "https://apps.apple.com/vn/app/dentalso/id6447111443",
            "https://play.google.com/store/apps/details?id=com.dentalso",
            "https://dental.vn"
          ]
        },
        {
          "@type": "SoftwareApplication",
          "@id": "https://dentalso.com/#app",
          "name": "DentalSO",
          "applicationCategory": "BusinessApplication",
          "operatingSystem": "iOS, Android, Web",
          "description": "Phần mềm quản lý Dental Lab chuyên nghiệp: theo dõi sản xuất, quản lý nhân sự, bảo hành QR Code và kết nối Nha khoa liền mạch.",
          "url": "https://dentalso.com/vi/",
          "publisher": {
            "@id": "https://dentalso.com/#organization"
          },
          "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "VND",
            "description": "Dùng thử miễn phí"
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
              "name": "DentalSO là phần mềm gì?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "DentalSO là phần mềm quản lý Dental Lab (Labo răng) và kết nối Phòng khám Nha khoa, giúp số hóa toàn bộ quy trình từ đặt hàng, sản xuất đến bảo hành điện tử qua QR Code."
              }
            },
            {
              "@type": "Question",
              "name": "DentalSO có ứng dụng điện thoại không?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Có. DentalSO có app mobile trên App Store (iOS) và Google Play (Android), cho phép kỹ thuật viên quét mã nhận việc, theo dõi tiến độ sản xuất và nhận thông báo real-time."
              }
            },
            {
              "@type": "Question",
              "name": "DentalSO phù hợp với đối tượng nào?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "DentalSO phù hợp với Dental Lab (Labo răng), Phòng khám Nha khoa muốn quản lý đơn hàng, kết nối với labo và tra cứu bảo hành điện tử một cách chuyên nghiệp."
              }
            },
            {
              "@type": "Question",
              "name": "DentalSO có bảo mật dữ liệu không?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Có. DentalSO sử dụng mã hóa RSA và SSL/TLS cho toàn bộ dữ liệu, hệ thống backup tự động hàng ngày và phân quyền chi tiết đến từng nhân viên."
              }
            },
            {
              "@type": "Question",
              "name": "Cách tra cứu bảo hành trên DentalSO?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Khách hàng chỉ cần quét mã QR Code gắn trên phục hình qua Zalo hoặc Camera điện thoại để xem thông tin xuất xứ, thời gian bảo hành và chi tiết phục hình ngay lập tức."
              }
            }
          ]
        }
      ]
    }
  </script>
</head>

<body @php(body_class('font-vss'))>
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