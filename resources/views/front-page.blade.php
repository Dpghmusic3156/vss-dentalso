@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="banner relative overflow-hidden">
    <swiper-container id="homepage-banner" class="w-full h-[600px] lg:h-[750px]" loop="true" autoplay-delay="5000">
        <!-- Slide 1: Lab Focus -->
        <swiper-slide class="relative flex items-center justify-center bg-cover bg-center"
            style="background-image:url('{{ get_theme_mod('trang_chu.banner.hinhnen_1') }}')">
            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>
            <div class="container relative z-10 grid lg:grid-cols-2 gap-12 items-center h-full pt-16">
                <div class="text-left text-white space-y-6 lg:pl-4" data-aos="fade-right">
                    <span class="inline-block py-2 px-4 rounded-full bg-primary-500/20 text-primary-300 border border-primary-500/30 text-sm font-semibold tracking-wider uppercase mb-2">
                        Giải pháp quản lý Labo chuyên nghiệp
                    </span>
                    <h1 class="text-4xl lg:text-6xl font-bold leading-tight">
                        <span class="text-primary-400">{{ get_theme_mod('trang_chu.banner.title1') }}</span>
                        <br class="hidden lg:block"> Ngành Nha
                    </h1>
                    <p class="text-lg lg:text-xl text-gray-200 max-w-lg leading-relaxed">
                        {{ get_theme_mod('trang_chu.banner.content1') }}
                    </p>
                    <div class="flex flex-wrap gap-4 pt-4">
                        <a href="{{ get_site_url() }}/yeu-cau-tu-van"
                            class="flex items-center justify-center h-14 px-8 rounded-full bg-primary-500 text-white font-semibold shadow-lg shadow-primary-500/30 hover:bg-primary-600 transition-all duration-300 transform hover:-translate-y-1">
                            <span class="material-symbols-outlined mr-2">calendar_month</span>
                            Đăng ký Demo
                        </a>
                        <a href="#solutions"
                            class="flex items-center justify-center h-14 px-8 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 text-white font-semibold hover:bg-white/20 transition-all duration-300">
                            Tìm hiểu thêm
                        </a>
                    </div>
                </div>
                <div class="hidden lg:flex justify-end relative" data-aos="fade-left">
                    <img src="{{ get_theme_mod('trang_chu.banner.hinh_1') }}" class="max-h-[500px] object-contain drop-shadow-2xl animate-float">
                </div>
            </div>
        </swiper-slide>

        <!-- Slide 2: Clinic & Connection Focus -->
        <swiper-slide class="relative flex items-center justify-center bg-cover bg-center"
            style="background-image:url('{{ get_theme_mod('trang_chu.banner.hinhnen_2') }}')">
            <div class="absolute inset-0 bg-gradient-to-l from-black/80 via-black/50 to-transparent"></div>
            <div class="container relative z-10 grid lg:grid-cols-2 gap-12 items-center h-full pt-16">
                <div class="hidden lg:flex justify-start relative order-2 lg:order-1" data-aos="fade-right">
                    <img src="{{ get_theme_mod('trang_chu.banner.hinh_2') }}" class="max-h-[500px] object-contain drop-shadow-2xl animate-float">
                </div>
                <div class="text-right text-white space-y-6 lg:pr-4 order-1 lg:order-2 flex flex-col items-end" data-aos="fade-left">
                    <span class="inline-block py-2 px-4 rounded-full bg-primary2-500/20 text-primary2-300 border border-primary2-500/30 text-sm font-semibold tracking-wider uppercase mb-2">
                        Kết nối Nha khoa - Labo
                    </span>
                    <h1 class="text-4xl lg:text-6xl font-bold leading-tight">
                        <span class="text-primary2-400">{{ get_theme_mod('trang_chu.banner.title2') }}</span>
                        <br class="hidden lg:block"> Liền mạch
                    </h1>
                    <p class="text-lg lg:text-xl text-gray-200 max-w-lg leading-relaxed">
                        {{ get_theme_mod('trang_chu.banner.content2') }}
                    </p>
                    <div class="flex flex-wrap gap-4 pt-4 justify-end">
                        <a href="https://dental.vn/" target="_blank"
                            class="flex items-center justify-center h-14 px-8 rounded-full bg-primary2-500 text-white font-semibold shadow-lg shadow-primary2-500/30 hover:bg-primary2-600 transition-all duration-300 transform hover:-translate-y-1">
                            Khám phá ngay
                        </a>
                    </div>
                </div>
            </div>
        </swiper-slide>
    </swiper-container>
</section>

<!-- Social Proof Strip -->
<section class="bg-white py-10 border-b border-gray-100">
    <div class="container">
        <p class="text-center text-gray-500 text-sm font-semibold uppercase tracking-widest mb-8">
            Được tin dùng bởi hơn <span class="text-primary-600 font-bold text-lg">300+</span> Labo & Nha khoa hàng đầu
        </p>
        <div id="labs-logo" class="swiper swiper-initialized overflow-hidden relative" data-aos="fade-in">
            <div class="swiper-wrapper flex items-center">
                <?php
                $args = array(
                    'post_type' => 'lab_logo',
                    'posts_per_page' => -1
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>
                        <div class="swiper-slide !w-auto !flex items-center justify-center px-8 opacity-60 hover:opacity-100 transition-opacity duration-300 grayscale hover:grayscale-0">
                            <?php
                            $link = get_post_custom_values('link');
                            $href = ($link && isset($link[0])) ? $link[0] : '#';
                            ?>
                            <a href="{{ $href }}" target="_blank" class="block h-12 w-auto">
                                <?php the_post_thumbnail('medium', ['class' => 'h-full w-auto object-contain']); ?>
                            </a>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
        </div>
    </div>
</section>

<!-- Pathways: Choose Solution -->
<section id="solutions" class="py-24 bg-gray-50">
    <div class="container">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-4">Giải Pháp Chuyên Biệt Cho Ngành Nha</h2>
            <p class="text-gray-600 text-lg">Hệ sinh thái DentalSO kết nối liền mạch quy trình vận hành, giúp tối ưu hóa hiệu suất và lợi nhuận.</p>
        </div>

        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12">
            <!-- Lab Solution Card -->
            <div class="group relative bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100 flex flex-col h-full" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute top-0 left-0 w-full h-2 bg-primary-500"></div>
                <div class="p-10 flex-grow">
                    <div class="w-16 h-16 rounded-2xl bg-primary-100 flex items-center justify-center text-primary-600 mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="material-symbols-outlined text-4xl">precision_manufacturing</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary-600 transition-colors">Quản lý Dental Lab</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Số hoá toàn diện quy trình sản xuất, quản lý nhân sự, lương thưởng và vật liệu tiêu hao. Giảm thiểu sai sót thủ công.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start text-gray-600">
                            <span class="material-symbols-outlined text-primary-500 mr-3 text-xl">check_circle</span>
                            <span>Tối ưu quy trình & năng suất</span>
                        </li>
                        <li class="flex items-start text-gray-600">
                            <span class="material-symbols-outlined text-primary-500 mr-3 text-xl">check_circle</span>
                            <span>Kiểm soát chi phí & vật liệu</span>
                        </li>
                        <li class="flex items-start text-gray-600">
                            <span class="material-symbols-outlined text-primary-500 mr-3 text-xl">check_circle</span>
                            <span>Báo cáo doanh thu realtime</span>
                        </li>
                    </ul>
                </div>
                <div class="px-10 pb-10 mt-auto">
                    <a href="{{ get_site_url() }}/quan-ly-dental-lab" class="inline-flex items-center text-primary-600 font-bold group-hover:translate-x-2 transition-transform">
                        Khám phá tính năng <span class="material-symbols-outlined ml-2 text-sm">arrow_forward_ios</span>
                    </a>
                </div>
                <img src="{{ get_site_url() }}/wp-content/uploads/2024/07/dental.png" class="absolute bottom-0 right-0 w-48 opacity-10 pointer-events-none group-hover:opacity-20 transition-opacity">
            </div>

            <!-- Clinic Solution Card -->
            <div class="group relative bg-white rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100 flex flex-col h-full" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute top-0 left-0 w-full h-2 bg-primary2-500"></div>
                <div class="p-10 flex-grow">
                    <div class="w-16 h-16 rounded-2xl bg-primary2-100 flex items-center justify-center text-primary2-600 mb-6 group-hover:scale-110 transition-transform duration-300">
                        <span class="material-symbols-outlined text-4xl">clinical_notes</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary2-600 transition-colors">Kết nối Nha Khoa</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Cổng giao tiếp trực tuyến giữa Phòng khám và Labo. Đặt hàng nhanh chóng, theo dõi tiến độ đơn hàng mọi lúc mọi nơi.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start text-gray-600">
                            <span class="material-symbols-outlined text-primary2-500 mr-3 text-xl">check_circle</span>
                            <span>Đặt hàng & Gửi file online</span>
                        </li>
                        <li class="flex items-start text-gray-600">
                            <span class="material-symbols-outlined text-primary2-500 mr-3 text-xl">check_circle</span>
                            <span>Tracking đơn hàng Real-time</span>
                        </li>
                        <li class="flex items-start text-gray-600">
                            <span class="material-symbols-outlined text-primary2-500 mr-3 text-xl">check_circle</span>
                            <span>Tra cứu bảo hành điện tử</span>
                        </li>
                    </ul>
                </div>
                <div class="px-10 pb-10 mt-auto">
                    <a href="{{ get_site_url() }}/ket-noi-voi-nha-khoa/" class="inline-flex items-center text-primary2-600 font-bold group-hover:translate-x-2 transition-transform">
                        Tìm hiểu thêm <span class="material-symbols-outlined ml-2 text-sm">arrow_forward_ios</span>
                    </a>
                </div>
                <img src="{{ get_site_url() }}/wp-content/uploads/2022/07/clinic.png" class="absolute bottom-0 right-0 w-48 opacity-10 pointer-events-none group-hover:opacity-20 transition-opacity">
            </div>
        </div>
    </div>
</section>

<!-- Feature: Communication -->
<section class="py-24 bg-white overflow-hidden">
    <div class="container">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div data-aos="fade-right">
                <img src="{{ get_site_url() }}/wp-content/uploads/2024/09/giao-tiep-labo-va-nha-khoa.jpg" class="rounded-3xl shadow-2xl w-full object-cover h-[400px] lg:h-[500px]">
            </div>
            <div class="space-y-8" data-aos="fade-left">
                <div class="inline-block px-4 py-1.5 rounded-lg bg-orange-100 text-orange-600 font-semibold text-sm mb-2">
                    Giao tiếp thông minh
                </div>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900">
                    Xóa bỏ khoảng cách <br> <span class="text-primary-600">Labo & Nha Khoa</span>
                </h2>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Nền tảng cung cấp môi trường giao tiếp tập trung. Mọi trao đổi, hình ảnh lâm sàng, và yêu cầu kỹ thuật được lưu trữ gắn liền với từng đơn hàng cụ thể.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 mt-1">
                            <span class="material-symbols-outlined">chat</span>
                        </div>
                        <div class="ml-4">
                            <h4 class="font-bold text-gray-900">Chat Real-time</h4>
                            <p class="text-sm text-gray-500 mt-1">Trao đổi trực tiếp trên đơn hàng, không trôi tin nhắn.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-green-50 flex items-center justify-center text-green-600 mt-1">
                            <span class="material-symbols-outlined">perm_media</span>
                        </div>
                        <div class="ml-4">
                            <h4 class="font-bold text-gray-900">Lưu trữ Media</h4>
                            <p class="text-sm text-gray-500 mt-1">Hình ảnh, file thiết kế được lưu trữ bảo mật trọn đời.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trust & Security -->
<section class="py-24 bg-slate-900 text-white relative isolate overflow-hidden">
    <!-- Abstract Background -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden -z-10">
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-primary-500/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-20 w-72 h-72 bg-primary2-500/20 rounded-full blur-3xl"></div>
    </div>

    <div class="container relative">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <h2 class="text-3xl lg:text-4xl font-bold mb-4">An toàn dữ liệu tuyệt đối</h2>
            <p class="text-gray-400 text-lg">Chúng tôi hiểu rằng dữ liệu bệnh nhân và bí mật kinh doanh là tài sản quý giá nhất của bạn.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 text-center">
            <div class="p-8 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition-colors" data-aos="fade-up" data-aos-delay="100">
                <span class="material-symbols-outlined text-5xl text-primary-400 mb-6">lock</span>
                <h3 class="text-xl font-bold mb-3">Mã hóa RSA & SSL</h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Toàn bộ dữ liệu truyền tải được mã hóa bằng giao thức SSL/TLS và chuẩn mã hóa RSA tiên tiến nhất.
                </p>
            </div>
            <div class="p-8 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition-colors" data-aos="fade-up" data-aos-delay="200">
                <span class="material-symbols-outlined text-5xl text-primary2-400 mb-6">cloud_done</span>
                <h3 class="text-xl font-bold mb-3">Sao lưu tự động</h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Hệ thống backup dữ liệu định kỳ hàng ngày, đảm bảo an toàn trước mọi sự cố kỹ thuật.
                </p>
            </div>
            <div class="p-8 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition-colors" data-aos="fade-up" data-aos-delay="300">
                <span class="material-symbols-outlined text-5xl text-orange-400 mb-6">admin_panel_settings</span>
                <h3 class="text-xl font-bold mb-3">Phân quyền chặt chẽ</h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Kiểm soát quyền truy cập chi tiết đến từng nhân viên, bảo vệ bí mật kinh doanh của Labo.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Feature: Warranty & App -->
<section class="py-24 bg-primary3-50 overflow-hidden">
    <div class="container">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="order-2 lg:order-1 space-y-8" data-aos="fade-right">
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900">
                    Quản lý mọi lúc, mọi nơi <br> với <span class="text-primary-600">DentalSO App</span>
                </h2>
                <div class="space-y-6 text-lg text-gray-600">
                    <p>Dành cho Kỹ thuật viên & Quản lý. Theo dõi tiến độ, quét mã QR bảo hành và nhận thông báo tức thì ngay trên điện thoại.</p>
                    <ul class="space-y-4">
                        <li class="flex items-center bg-white p-4 rounded-xl shadow-sm border border-gray-100">
                            <span class="material-symbols-outlined text-primary-500 mr-4">qr_code_scanner</span>
                            <span class="font-medium text-gray-800">Tra cứu bảo hành bằng QR Code</span>
                        </li>
                        <li class="flex items-center bg-white p-4 rounded-xl shadow-sm border border-gray-100">
                            <span class="material-symbols-outlined text-primary-500 mr-4">notifications_active</span>
                            <span class="font-medium text-gray-800">Nhận thông báo đơn hàng mới/hoàn thành</span>
                        </li>
                    </ul>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <a href="https://apps.apple.com/vn/app/dentalso/id6447111443" target="_blank" class="flex items-center justify-center gap-3 px-6 py-3 bg-black text-white rounded-xl hover:bg-gray-800 transition-colors shadow-md group">
                        <i class="fa-brands fa-apple text-3xl group-hover:scale-110 transition-transform"></i>
                        <div class="text-left">
                            <div class="text-[10px] uppercase tracking-wider opacity-80 leading-none mb-1">Tải ngay trên</div>
                            <div class="text-lg font-semibold leading-none">App Store</div>
                        </div>
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=com.dentalso" target="_blank" class="flex items-center justify-center gap-3 px-6 py-3 bg-black text-white rounded-xl hover:bg-gray-800 transition-colors shadow-md group">
                        <i class="fa-brands fa-google-play text-2xl group-hover:scale-110 transition-transform"></i>
                        <div class="text-left">
                            <div class="text-[10px] uppercase tracking-wider opacity-80 leading-none mb-1">Tải ngay trên</div>
                            <div class="text-lg font-semibold leading-none">Google Play</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="order-1 lg:order-2 flex justify-center" data-aos="fade-left">
                <div class="relative">
                    <div class="absolute inset-0 bg-primary3-200 rounded-full blur-3xl opacity-30 transform scale-90"></div>
                    <img src="{{ get_site_url() }}/wp-content/uploads/2022/06/laptop-and-phone.png" class="relative z-10 w-full max-w-lg object-contain drop-shadow-2xl">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA Section -->
<section class="py-20 bg-white">
    <div class="container">
        <div class="relative rounded-[2.5rem] bg-gradient-to-br from-primary-600 to-primary-800 px-6 py-16 lg:px-24 lg:py-24 text-center overflow-hidden shadow-2xl" id="cta-block">
            <!-- Decorative circles -->
            <div class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 rounded-full bg-white/10 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-white/10 blur-3xl"></div>

            <div class="relative z-10 space-y-8" data-aos="zoom-in">
                <h2 class="text-3xl lg:text-5xl font-bold text-white leading-tight">
                    Sẵn sàng nâng tầm <br> quản lý doanh nghiệp Nha khoa?
                </h2>
                <p class="text-primary-100 text-lg lg:text-xl max-w-2xl mx-auto">
                    Tham gia cùng 300+ doanh nghiệp đã chuyển đổi số thành công. Trải nghiệm miễn phí đầy đủ tính năng ngay hôm nay.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
                    <a href="{{ get_site_url() }}/yeu-cau-tu-van"
                        class="w-full sm:w-auto px-10 py-4 rounded-full bg-white text-primary-700 font-bold text-lg shadow-xl hover:bg-gray-50 transition-all transform hover:-translate-y-1">
                        Đăng ký Demo Miễn phí
                    </a>
                    <a href="tel:0909090909" class="w-full sm:w-auto px-10 py-4 rounded-full bg-transparent border-2 border-white/30 text-white font-bold text-lg hover:bg-white/10 transition-all">
                        Liên hệ: 0942 662 988
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes float {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-20px);
        }
    }

    .animate-float {
        animation: float 6s ease-in-out infinite;
    }

    swiper-container::part(button-prev),
    swiper-container::part(button-next) {
        color: white;
        background: rgba(0, 0, 0, 0.3);
        width: 3rem;
        height: 3rem;
        border-radius: 50%;
        backdrop-filter: blur(4px);
    }

    swiper-container::part(bullet-active) {
        background: #2E8543;
    }
</style>

@endsection