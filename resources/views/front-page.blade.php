@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="banner relative overflow-hidden">
    <swiper-container id="homepage-banner" class="w-full lg:h-[calc(100vh-88px)]" loop="true" autoplay-delay="5000" navigation="true" pagination="true" pagination-clickable="true">
        <!-- Slide 1: Lab Focus -->
        <swiper-slide class="relative flex items-center justify-center bg-cover bg-center min-h-[calc(100dvh-88px)]"
            style="background-image:url('{{ get_theme_mod('trang_chu.banner.hinhnen_1') }}')">
            <div class="absolute inset-0 bg-gradient-to-t lg:bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>
            <div class="container relative z-10 flex flex-col lg:grid lg:grid-cols-2 gap-6 lg:gap-12 items-center justify-center h-full pt-10 pb-16 lg:py-0 lg:pt-16">
                <div class="text-center lg:text-left text-white space-y-4 lg:space-y-6 lg:pl-4 order-2 lg:order-1" data-aos="fade-up">
                    <span class="inline-block py-1.5 px-3 lg:py-2 lg:px-4 rounded-full bg-primary2-500/20 text-primary2-300 border border-primary2-500/30 text-xs lg:text-sm font-normal tracking-wider uppercase mb-1 lg:mb-2">
                        Giải pháp quản lý Labo chuyên nghiệp
                    </span>
                    <h1 class="text-3xl sm:text-4xl lg:text-6xl font-normal leading-[1.3] lg:leading-[1.4]">
                        <span class="text-primary2-400"> {{ get_theme_mod('trang_chu.banner.title1') }}</span>
                        <br class="hidden sm:block"> Dental Lab Online
                    </h1>
                    <p class="text-base lg:text-xl text-gray-200 lg:max-w-lg leading-relaxed px-4 lg:px-0">
                        {{ get_theme_mod('trang_chu.banner.content1') }}
                    </p>
                    <div class="flex flex-col sm:flex-row flex-wrap justify-center lg:justify-start gap-4 pt-4 px-4 lg:px-0">
                        <a href="{{ get_site_url() }}/yeu-cau-tu-van"
                            class="flex items-center justify-center h-12 lg:h-14 px-6 lg:px-8 rounded-full bg-primary2-500 text-white font-normal shadow-lg shadow-primary2-500/30 hover:bg-primary2-600 transition-all duration-300 transform hover:-translate-y-1">
                            <span class="material-symbols-outlined mr-2">calendar_month</span>
                            Đăng ký Demo
                        </a>
                        <a href="#solutions"
                            class="flex items-center justify-center h-12 lg:h-14 px-6 lg:px-8 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 text-white font-normal hover:bg-white/20 transition-all duration-300">
                            Tìm hiểu thêm
                        </a>
                    </div>
                </div>
                <div class="flex justify-center lg:justify-end relative order-1 lg:order-2 w-full px-8 lg:px-0" data-aos="zoom-in">
                    <img src="{{ get_theme_mod('trang_chu.banner.hinh_1') }}" class="max-h-[35vh] lg:max-h-[500px] object-contain drop-shadow-2xl animate-float">
                </div>
            </div>
        </swiper-slide>

        <!-- Slide 2: Clinic & Connection Focus -->
        <swiper-slide class="relative flex items-center justify-center bg-cover bg-center min-h-[calc(100dvh-88px)]"
            style="background-image:url('{{ get_theme_mod('trang_chu.banner.hinhnen_2') }}')">
            <div class="absolute inset-0 bg-gradient-to-t lg:bg-gradient-to-l from-black/80 via-black/50 to-transparent"></div>
            <div class="container relative z-10 flex flex-col lg:grid lg:grid-cols-2 gap-6 lg:gap-12 items-center justify-center h-full pt-10 pb-16 lg:py-0 lg:pt-16">
                <div class="flex justify-center lg:justify-start relative order-1 w-full px-8 lg:px-0" data-aos="zoom-in">
                    <img src="{{ get_theme_mod('trang_chu.banner.hinh_2') }}" class="max-h-[35vh] lg:max-h-[500px] object-contain drop-shadow-2xl animate-float">
                </div>
                <div class="text-center lg:text-right text-white space-y-4 lg:space-y-6 lg:pr-4 order-2 lg:flex lg:flex-col lg:items-end" data-aos="fade-up">
                    <span class="inline-block py-1.5 px-3 lg:py-2 lg:px-4 rounded-full bg-primary2-500/20 text-primary2-300 border border-primary2-500/30 text-xs lg:text-sm font-normal tracking-wider uppercase mb-1 lg:mb-2">
                        Kết nối Nha khoa - Labo
                    </span>
                    <h1 class="text-3xl sm:text-4xl lg:text-6xl font-normal leading-[1.3] lg:leading-[1.4]">
                        <span class="text-primary2-400">{{ get_theme_mod('trang_chu.banner.title2') }}</span>
                        <br class="hidden sm:block"> Liền mạch
                    </h1>
                    <p class="text-base lg:text-xl text-gray-200 lg:max-w-lg leading-relaxed px-4 lg:px-0">
                        {{ get_theme_mod('trang_chu.banner.content2') }}
                    </p>
                    <div class="flex flex-col sm:flex-row flex-wrap justify-center lg:justify-end gap-4 pt-4 px-4 lg:px-0">
                        <a href="https://dental.vn/" target="_blank"
                            class="flex items-center justify-center h-12 lg:h-14 px-6 lg:px-8 rounded-full bg-primary2-500 text-white font-normal shadow-lg shadow-primary2-500/30 hover:bg-primary2-600 transition-all duration-300 transform hover:-translate-y-1">
                            Khám phá ngay
                        </a>
                    </div>
                </div>
            </div>
        </swiper-slide>
    </swiper-container>
</section>

<!-- Social Proof Strip -->
<section class="bg-gradient-to-b from-white to-gray-50/50 py-16 lg:py-24 border-b border-gray-100">
    <div class="container">
        <div class="flex items-center justify-center gap-6 mb-12" data-aos="fade-up">
            <div class="hidden md:block w-16 h-[1px] bg-gradient-to-r from-transparent to-gray-300"></div>
            <p class="text-center text-[#64748b] text-[15px] md:text-[17px] font-semibold uppercase tracking-[0.2em] m-0">
                Được tin dùng bởi hơn <span class="text-primary3 font-bold text-[18px] md:text-[20px] mx-1">300+</span> Labo & Nha khoa
            </p>
            <div class="hidden md:block w-16 h-[1px] bg-gradient-to-l from-transparent to-gray-300"></div>
        </div>
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
<section id="solutions" class="py-20 lg:py-24 bg-gray-50/50">
    <div class="container max-w-6xl">
        <div class="text-center max-w-2xl mx-auto mb-10" data-aos="fade-up">
            <h2 class="text-2xl lg:text-3xl font-medium text-[#1e293b] mb-2">Giải Pháp Chuyên Biệt Cho Ngành Nha</h2>
            <p class="text-[#64748b] text-[15px] leading-relaxed">Hệ sinh thái DentalSO kết nối liền mạch quy trình vận hành, giúp tối ưu hóa hiệu suất.</p>
        </div>

        <div class="grid lg:grid-cols-2 gap-6 lg:gap-8">
            <!-- Lab Solution Card -->
            <div class="group relative bg-white rounded-3xl overflow-hidden shadow-[0_4px_20px_rgb(0,0,0,0.04)] hover:shadow-[0_10px_30px_rgb(0,0,0,0.08)] transition-all duration-500 border border-gray-100 flex flex-col h-full" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute top-0 left-0 w-full h-1 bg-primary-500"></div>
                <div class="p-6 lg:p-8 pb-4 flex-grow relative z-10 flex flex-col">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-[#f0fdf4] flex items-center justify-center text-primary-500 transition-transform duration-500 rounded-tl-2xl rounded-br-2xl shrink-0">
                            <span class="material-symbols-outlined text-2xl">precision_manufacturing</span>
                        </div>
                        <h3 class="text-xl font-medium text-[#1e293b] group-hover:text-primary-600 transition-colors">Quản lý Dental Lab</h3>
                    </div>
                    <p class="text-[#64748b] text-[14px] mb-4 leading-relaxed flex-grow">
                        Số hoá toàn diện quy trình sản xuất, quản lý nhân sự, lương thưởng. Giảm thiểu sai sót thủ công.
                    </p>
                    <ul class="space-y-2 mb-4">
                        <li class="flex items-center text-[#475569] text-[14px]">
                            <span class="material-symbols-outlined text-primary-500 mr-2 text-[18px]">check_circle</span>
                            <span>Tối ưu quy trình & năng suất</span>
                        </li>
                        <li class="flex items-center text-[#475569] text-[14px]">
                            <span class="material-symbols-outlined text-primary-500 mr-2 text-[18px]">check_circle</span>
                            <span>Kiểm soát chi phí & vật liệu</span>
                        </li>
                    </ul>
                    <a href="{{ get_site_url() }}/quan-ly-dental-lab" class="inline-flex items-center text-primary-600 text-[14px] font-medium group-hover:translate-x-1 transition-transform duration-300">
                        Khám phá tính năng <span class="material-symbols-outlined ml-1 text-[14px]">chevron_right</span>
                    </a>
                </div>
                <!-- Featured Image -->
                <div class="py-2 px-6 lg:px-8 mt-auto mb-8 lg:mb-0 bg-gradient-to-t from-gray-50 to-transparent flex justify-center">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2024/07/dental.png" class="h-60 lg:h-[320px] w-full object-contain object-bottom transform group-hover:scale-105 transition-transform duration-500 will-change-transform">
                </div>
            </div>

            <!-- Clinic Solution Card -->
            <div class="group relative bg-white rounded-3xl overflow-hidden shadow-[0_4px_20px_rgb(0,0,0,0.04)] hover:shadow-[0_10px_30px_rgb(0,0,0,0.08)] transition-all duration-500 border border-gray-100 flex flex-col h-full" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute top-0 left-0 w-full h-1 bg-[#0284c7]"></div>
                <div class="p-6 lg:p-8 pb-4 flex-grow relative z-10 flex flex-col">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-[#f0f9ff] flex items-center justify-center text-[#0284c7] transition-transform duration-500 rounded-tl-2xl rounded-br-2xl shrink-0">
                            <span class="material-symbols-outlined text-2xl">clinical_notes</span>
                        </div>
                        <h3 class="text-xl font-medium text-[#1e293b] group-hover:text-[#0284c7] transition-colors">Kết nối Nha Khoa</h3>
                    </div>
                    <p class="text-[#64748b] text-[14px] mb-4 leading-relaxed flex-grow">
                        Cổng giao tiếp giữa Phòng khám và Labo. Đặt hàng qua app, theo dõi tiến độ đơn hàng mọi lúc.
                    </p>
                    <ul class="space-y-2 mb-4">
                        <li class="flex items-center text-[#475569] text-[14px]">
                            <span class="material-symbols-outlined text-[#0284c7] mr-2 text-[18px]">check_circle</span>
                            <span>Đặt hàng & Gửi file online</span>
                        </li>
                        <li class="flex items-center text-[#475569] text-[14px]">
                            <span class="material-symbols-outlined text-[#0284c7] mr-2 text-[18px]">check_circle</span>
                            <span>Tra cứu bảo hành điện tử</span>
                        </li>
                    </ul>
                    <a href="{{ get_site_url() }}/ket-noi-voi-nha-khoa/" class="inline-flex items-center text-[#0284c7] text-[14px] font-medium group-hover:translate-x-1 transition-transform duration-300">
                        Tìm hiểu thêm <span class="material-symbols-outlined ml-1 text-[14px]">chevron_right</span>
                    </a>
                </div>
                <!-- Featured Image -->
                <div class="py-2 px-6 lg:px-8 mt-auto mb-8 lg:mb-0 bg-gradient-to-t from-gray-50 to-transparent flex justify-center">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2022/07/clinic.png" class="h-60 lg:h-[320px] w-full object-contain object-bottom transform group-hover:scale-105 transition-transform duration-500 will-change-transform">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Feature: Communication -->
<section class="py-20 lg:py-24 bg-white overflow-hidden">
    <div class="container max-w-7xl">
        <div class="flex flex-col lg:grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div data-aos="fade-right" class="relative group order-2 lg:order-1">
                <div class="absolute inset-0 bg-[#0ea5e9]/10 rounded-3xl transform translate-x-4 translate-y-4 -z-10 group-hover:translate-x-6 group-hover:translate-y-6 transition-transform duration-500"></div>
                <img src="{{ get_site_url() }}/wp-content/uploads/2022/08/clinic-dashboard.png" class="rounded-3xl shadow-[0_20px_50px_rgb(0,0,0,0.1)] w-full object-cover border border-gray-100 transform group-hover:-translate-y-2 transition-transform duration-500">
            </div>
            <div class="space-y-8 lg:pl-6 order-1 lg:order-2 flex flex-col" data-aos="fade-left">
                <div>
                    <div class="inline-flex items-center px-4 py-2 rounded-full bg-[#f0f9ff] text-[#0284c7] font-medium text-[13px] tracking-wide border border-[#e0f2fe] uppercase mb-4">
                        <span class="material-symbols-outlined text-[16px] mr-2">hub</span>
                        Giao tiếp thông minh
                    </div>
                    <h2 class="text-3xl lg:text-[40px] font-medium text-[#1e293b] leading-tight mb-4">
                        Xóa bỏ khoảng cách <br> <span class="text-primary-600">Labo & Nha Khoa</span>
                    </h2>
                    <p class="text-[17px] text-[#64748b] leading-[1.8]">
                        Nền tảng cung cấp môi trường giao tiếp tập trung. Mọi trao đổi, hình ảnh lâm sàng, và yêu cầu kỹ thuật được lưu trữ trọn đời, gắn liền với từng đơn hàng cụ thể.
                    </p>
                </div>
                <div class="grid sm:grid-cols-2 gap-8 pt-4 order-3 lg:order-none">
                    <div class="flex items-start bg-gray-50/50 p-6 rounded-2xl border border-gray-100 hover:bg-white hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-[#eff6ff] flex items-center justify-center text-[#3b82f6]">
                            <span class="material-symbols-outlined text-2xl">forum</span>
                        </div>
                        <div class="ml-4">
                            <h4 class="font-medium text-[#1e293b] text-[17px] mb-2">Chat Real-time</h4>
                            <p class="text-[14px] text-[#64748b] leading-relaxed">Trao đổi trực tiếp trên đơn hàng, không lo trôi tin nhắn.</p>
                        </div>
                    </div>
                    <div class="flex items-start bg-gray-50/50 p-6 rounded-2xl border border-gray-100 hover:bg-white hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-[#f0fdf4] flex items-center justify-center text-[#22c55e]">
                            <span class="material-symbols-outlined text-2xl">photo_library</span>
                        </div>
                        <div class="ml-4">
                            <h4 class="font-medium text-[#1e293b] text-[17px] mb-2">Lưu trữ Media</h4>
                            <p class="text-[14px] text-[#64748b] leading-relaxed">Hình ảnh, file 3D thiết kế được lưu trữ độc lập an toàn.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trust & Security -->
<section class="py-24 bg-gradient-to-br from-[#0d2818] via-[#133a22] to-[#0a1f14] text-white relative isolate overflow-hidden">
    <!-- Abstract Background -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden -z-10">
        <div class="absolute -top-40 -right-40 w-96 h-96 bg-primary-400/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-20 w-72 h-72 bg-primary2-400/10 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-emerald-500/5 rounded-full blur-3xl"></div>
    </div>

    <div class="container relative">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <h2 class="text-3xl lg:text-4xl  font-normal  mb-4">An toàn dữ liệu tuyệt đối</h2>
            <p class="text-gray-400 text-lg">Chúng tôi hiểu rằng dữ liệu bệnh nhân và bí mật kinh doanh là tài sản quý giá nhất của bạn.</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 text-center">
            <div class="p-8 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition-colors" data-aos="fade-up" data-aos-delay="100">
                <span class="material-symbols-outlined text-5xl text-primary-400 mb-6">lock</span>
                <h3 class="text-xl  font-normal  mb-3">Mã hóa RSA & SSL</h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Toàn bộ dữ liệu truyền tải được mã hóa bằng giao thức SSL/TLS và chuẩn mã hóa RSA tiên tiến nhất.
                </p>
            </div>
            <div class="p-8 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition-colors" data-aos="fade-up" data-aos-delay="200">
                <span class="material-symbols-outlined text-5xl text-primary2-400 mb-6">cloud_done</span>
                <h3 class="text-xl  font-normal  mb-3">Sao lưu tự động</h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Hệ thống backup dữ liệu định kỳ hàng ngày, đảm bảo an toàn trước mọi sự cố kỹ thuật.
                </p>
            </div>
            <div class="p-8 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition-colors" data-aos="fade-up" data-aos-delay="300">
                <span class="material-symbols-outlined text-5xl text-orange-400 mb-6">admin_panel_settings</span>
                <h3 class="text-xl  font-normal  mb-3">Phân quyền chặt chẽ</h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Kiểm soát quyền truy cập chi tiết đến từng nhân viên, bảo vệ bí mật kinh doanh của Labo.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Feature: Warranty Lookup -->
<section class="py-24 bg-primary3-50 overflow-hidden">
    <div class="container">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="order-2 lg:order-1 space-y-8" data-aos="fade-right">
                <h2 class="text-3xl lg:text-4xl font-normal text-gray-900">
                    Tra cứu bảo hành dễ dàng <br> với <span class="text-primary-600">Mã QR Code</span>
                </h2>
                <div class="space-y-6 text-lg text-gray-600">
                    <p>Khách hàng có thể dễ dàng kiểm tra thông tin xuất xứ, thời gian bảo hành và chi tiết phục hình chỉ bằng một thao tác quét mã.</p>
                    <ul class="space-y-4">
                        <li class="flex items-center bg-white p-4 rounded-xl shadow-sm border border-gray-100">
                            <span class="material-symbols-outlined text-primary-500 mr-4">qr_code_scanner</span>
                            <span class="font-medium text-gray-800">Tra cứu nhanh chóng qua Zalo/Camera</span>
                        </li>
                        <li class="flex items-center bg-white p-4 rounded-xl shadow-sm border border-gray-100">
                            <span class="material-symbols-outlined text-primary-500 mr-4">verified_user</span>
                            <span class="font-medium text-gray-800">Minh bạch nguồn gốc vật liệu</span>
                        </li>
                    </ul>
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

<!-- Feature: Technician App -->
<section class="py-16 lg:py-24 bg-white overflow-hidden border-t border-gray-100">
    <style>
        /* Phone frame styling */
        .phone-frame {
            background: #0f172a;
            border-radius: 2.5rem;
            padding: 8px;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.18), inset 0 0 0 2px rgba(255, 255, 255, 0.08);
            position: relative;
            overflow: hidden;
        }

        .phone-frame .phone-screen {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 2rem;
            pointer-events: none;
        }

        @media (min-width: 1024px) {
            .phone-frame {
                border-radius: 3rem;
                padding: 10px;
            }

            .phone-frame .phone-screen {
                border-radius: 2.5rem;
            }
        }

        /* App slider scoped styles */
        #app-slider {
            padding-bottom: 3rem;
        }

        #app-slider::part(button-prev),
        #app-slider::part(button-next) {
            color: #94a3b8;
            background: none;
            border: none;
            box-shadow: none;
            width: 3rem;
            height: 3rem;
            transition: all 0.3s ease;
            top: 37%;
        }

        #app-slider::part(button-prev):hover,
        #app-slider::part(button-next):hover {
            color: #0f172a;
            transform: scale(1.15);
        }

        @media (min-width: 1024px) {

            #app-slider::part(button-prev),
            #app-slider::part(button-next) {
                width: 2.5rem;
                height: 2.5rem;
            }
        }

        #app-slider::part(pagination) {
            bottom: 0;
        }

        #app-slider::part(bullet) {
            background: #e2e8f0;
            opacity: 1;
            width: 8px;
            height: 8px;
            transition: all 0.3s ease;
            margin: 0 4px !important;
        }

        #app-slider::part(bullet-active) {
            background: #0284c7;
            width: 24px;
            border-radius: 4px;
        }
    </style>

    <div class="container">
        <div class="flex flex-col lg:grid lg:grid-cols-2 gap-10 lg:gap-16 items-center">

            <!-- Left: Phone Slider -->
            <div class="relative w-full max-w-md mx-auto lg:mx-0 order-2 lg:order-1" data-aos="fade-right">
                <swiper-container id="app-slider" class="w-full" loop="true" autoplay-delay="4000" navigation="true" pagination="true" pagination-clickable="true">
                    <!-- Slide 1 -->
                    <swiper-slide class="flex items-center justify-center py-6 px-6">
                        <div class="phone-frame mx-auto" style="max-width: 260px;">
                            <img src="wp-content/uploads/2026/02/phan-mem-quan-ly-labo-dentalso-mobile-app-5.png" alt="Quản lý sản xuất" class="phone-screen">
                        </div>
                    </swiper-slide>
                    <!-- Slide 2 -->
                    <swiper-slide class="flex items-center justify-center py-6 px-6">
                        <div class="phone-frame mx-auto" style="max-width: 260px;">
                            <img src="wp-content/uploads/2026/02/phan-mem-quan-ly-labo-dentalso-mobile-app-4.png" alt="Danh sách đơn hàng" class="phone-screen">
                        </div>
                    </swiper-slide>
                    <!-- Slide 3 -->
                    <swiper-slide class="flex items-center justify-center py-6 px-6">
                        <div class="phone-frame mx-auto" style="max-width: 260px;">
                            <img src="wp-content/uploads/2026/02/phan-mem-quan-ly-labo-dentalso-mobile-app-1.png" alt="Tài khoản" class="phone-screen">
                        </div>
                    </swiper-slide>
                </swiper-container>
            </div>

            <!-- Right: Text + Features + Download -->
            <div class="order-1 lg:order-2 text-center lg:text-left" data-aos="fade-left">
                <div class="inline-flex items-center px-4 py-1.5 mb-5 rounded-full bg-[#f0f9ff] text-[#0284c7] font-medium text-[12px] tracking-wide border border-[#e0f2fe] uppercase">
                    <span class="material-symbols-outlined text-[14px] mr-2">smartphone</span>
                    DentalSO Mobile App
                </div>
                <h2 class="text-2xl lg:text-4xl font-medium text-gray-900 mb-4 leading-tight">
                    Trợ lý đắc lực cho <br><span class="text-primary-600">Kỹ thuật viên</span>
                </h2>
                <p class="text-base lg:text-lg text-gray-600 mb-8 leading-relaxed max-w-lg mx-auto lg:mx-0">
                    Theo dõi tiến độ sản xuất, quét mã nhận việc và nhận thông báo tức thì ngay trên điện thoại di động mọi lúc, mọi nơi.
                </p>

                <!-- Feature highlights -->
                <div class="space-y-4 mb-10">
                    <div class="flex items-start gap-3 text-left">
                        <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-primary-50 flex items-center justify-center mt-0.5">
                            <span class="material-symbols-outlined text-primary-600 text-[18px]">qr_code_scanner</span>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Quét mã nhận việc nhanh chóng</p>
                            <p class="text-sm text-gray-500">Scan QR để nhận đơn hàng chỉ trong 1 giây</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 text-left">
                        <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-primary-50 flex items-center justify-center mt-0.5">
                            <span class="material-symbols-outlined text-primary-600 text-[18px]">notifications_active</span>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Thông báo real-time</p>
                            <p class="text-sm text-gray-500">Nhận thông báo đơn hàng mới, cập nhật tiến độ ngay lập tức</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3 text-left">
                        <div class="flex-shrink-0 w-8 h-8 rounded-lg bg-primary-50 flex items-center justify-center mt-0.5">
                            <span class="material-symbols-outlined text-primary-600 text-[18px]">trending_up</span>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">Theo dõi tiến độ sản xuất</p>
                            <p class="text-sm text-gray-500">Nắm bắt tình trạng từng công đoạn mọi lúc mọi nơi</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Download buttons - separate block for mobile ordering -->
            <div class="order-3 lg:order-2 text-center lg:text-left lg:col-start-2">
                <div class="flex flex-col sm:flex-row gap-3 justify-center lg:justify-start">
                    <a href="https://apps.apple.com/vn/app/dentalso/id6447111443" target="_blank" class="flex items-center justify-center gap-2.5 px-6 py-3 bg-black text-white rounded-xl hover:bg-gray-800 transition-colors shadow-md group">
                        <i class="fa-brands fa-apple text-2xl group-hover:scale-110 transition-transform"></i>
                        <div class="text-left">
                            <div class="text-[9px] uppercase tracking-wider opacity-80 leading-none mb-1">Tải ngay trên</div>
                            <div class="text-base font-medium leading-none">App Store</div>
                        </div>
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=com.dentalso" target="_blank" class="flex items-center justify-center gap-2.5 px-6 py-3 bg-black text-white rounded-xl hover:bg-gray-800 transition-colors shadow-md group">
                        <i class="fa-brands fa-google-play text-xl group-hover:scale-110 transition-transform"></i>
                        <div class="text-left">
                            <div class="text-[9px] uppercase tracking-wider opacity-80 leading-none mb-1">Tải ngay trên</div>
                            <div class="text-base font-medium leading-none">Google Play</div>
                        </div>
                    </a>
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
                <h2 class="text-3xl lg:text-5xl  font-normal  text-white leading-tight">
                    Sẵn sàng nâng tầm <br> quản lý doanh nghiệp Nha khoa?
                </h2>
                <p class="text-primary-100 text-lg lg:text-xl max-w-2xl mx-auto">
                    Tham gia cùng 300+ doanh nghiệp đã chuyển đổi số thành công. Trải nghiệm miễn phí đầy đủ tính năng ngay hôm nay.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
                    <a href="{{ get_site_url() }}/yeu-cau-tu-van"
                        class="w-full sm:w-auto px-10 py-4 rounded-full bg-white text-primary-700  font-normal  text-lg shadow-xl hover:bg-gray-50 transition-all transform hover:-translate-y-1">
                        Đăng ký Demo Miễn phí
                    </a>
                    <a href="tel:0909090909" class="w-full sm:w-auto px-10 py-4 rounded-full bg-transparent border-2 border-white/30 text-white  font-normal  text-lg hover:bg-white/10 transition-all">
                        Liên hệ: 0947 476 000
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
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        width: 3rem;
        height: 3rem;
        border-radius: 50%;
        backdrop-filter: blur(8px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 50;
        /* Ensure it's clickable above slide content */
    }

    swiper-container::part(button-prev):hover,
    swiper-container::part(button-next):hover {
        background: rgba(255, 255, 255, 0.2);
        border-color: rgba(255, 255, 255, 0.4);
        transform: scale(1.05);
        color: #fff;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    }

    /* Specific overrides for homepage banner */
    .banner .container {
        pointer-events: none;
    }

    .banner .container>* {
        pointer-events: auto;
    }

    #homepage-banner::part(button-prev),
    #homepage-banner::part(button-next) {
        width: 3rem;
        height: 3rem;
        top: 37%;
    }

    #homepage-banner::part(pagination) {
        position: absolute;
        bottom: 1rem;
        z-index: 50;
    }

    #homepage-banner::part(bullet) {
        background: rgba(255, 255, 255, 0.5);
    }

    @media (min-width: 1024px) {

        swiper-container::part(button-prev),
        swiper-container::part(button-next) {
            width: 3.5rem;
            height: 3.5rem;
        }

        #homepage-banner::part(button-prev),
        #homepage-banner::part(button-next) {
            top: 50%;
        }

        #homepage-banner::part(pagination) {
            bottom: 1.5rem;
        }
    }

    swiper-container::part(bullet-active) {
        background: #ffd146;
    }
</style>

@endsection