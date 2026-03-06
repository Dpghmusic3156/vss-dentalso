@extends('layouts.app')

@section('content')

{{-- ============================================= --}}
{{-- SECTION 1: HERO --}}
{{-- Apple-style: Massive centered text, gradient bg, CTA pills --}}
{{-- ============================================= --}}
<section class="apple-hero relative overflow-hidden">
    {{-- Subtle gradient background --}}
    <div class="absolute inset-0 bg-gradient-to-b from-[#fbfbfd] via-white to-[#f5f5f7]"></div>
    <div class="apple-container text-center relative z-10">
        <div class="fade-in-up">
            <h1 class="apple-hero-headline">
                DentalSO
            </h1>
            <h2 class="apple-hero-subheadline">
                Hệ sinh thái phần mềm quản lý Labo toàn diện.
            </h2>
            <p class="apple-hero-copy">
                Tối ưu sản xuất. Kết nối nha khoa. Kiểm soát vận hành toàn diện — tất cả trong một nền tảng duy nhất.
            </p>
            <div class="apple-cta-group">
                <a href="{{ get_site_url() }}/yeu-cau-tu-van" class="apple-cta-primary">
                    Đặt lịch Demo
                </a>
                <a href="#solutions" class="apple-cta-secondary">
                    Tìm hiểu thêm <span class="apple-chevron">›</span>
                </a>
            </div>
        </div>
        {{-- Hero image --}}
        <div class="apple-hero-img-wrapper fade-in-up" style="animation-delay: 0.2s;">
            <img src="{{ get_theme_mod('trang_chu.banner.hinh_1') }}" alt="DentalSO – Dental Lab Management Software Platform" class="apple-hero-img">
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- SECTION 2: ONE PLATFORM. THREE POWERFUL SOLUTIONS --}}
{{-- Apple-style product grid with white rounded cards --}}
{{-- ============================================= --}}
<section id="solutions" class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 lg:mb-20 fade-in-up">
            <h2 class="apple-headline">Một nền tảng.<br>Ba giải pháp mạnh mẽ.</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-6 lg:gap-8">
            {{-- Card 1: DentalSO Platform --}}
            <a href="{{ get_site_url() }}/quan-ly-dental-lab" class="apple-card apple-card--tint-blue fade-in-up" style="animation-delay: 0.1s;">
                <div class="apple-card-inner">
                    <div class="apple-card-eyebrow">Quản lý Labo</div>
                    <h3 class="apple-card-title">DentalSO Platform</h3>
                    <p class="apple-card-desc">
                        Phần mềm quản lý labo nha khoa toàn diện: kiểm soát ca, chuẩn hóa quy trình, đảm bảo chất lượng và phân tích dữ liệu.
                    </p>
                    <span class="apple-link mt-auto">
                        Tìm hiểu thêm <span class="apple-chevron">›</span>
                    </span>
                </div>
                <div class="apple-card-img-wrapper">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2024/07/dental.png" alt="DentalSO Platform – Dental Lab Management Software" class="apple-card-img">
                </div>
            </a>

            {{-- Card 2: DentalSO MES --}}
            <a href="{{ get_site_url() }}/products/dental-lab-mes/" class="apple-card apple-card--tint-green fade-in-up" style="animation-delay: 0.2s;">
                <div class="apple-card-inner">
                    <div class="apple-card-eyebrow">Sản xuất</div>
                    <h3 class="apple-card-title">DentalSO MES</h3>
                    <p class="apple-card-desc">
                        Hệ thống điều hành sản xuất thời gian thực: giám sát xưởng, phân bổ kỹ thuật viên và ưu tiên theo deadline.
                    </p>
                    <span class="apple-link mt-auto">
                        Tìm hiểu thêm <span class="apple-chevron">›</span>
                    </span>
                </div>
                <div class="apple-card-img-wrapper">
                    <img src="{{ get_theme_mod('trang_chu.banner.hinh_2') }}" alt="DentalSO MES – Real-Time Manufacturing Execution System" class="apple-card-img">
                </div>
            </a>

            {{-- Card 3: DentalSO Connect --}}
            <a href="{{ get_site_url() }}/ket-noi-voi-nha-khoa/" class="apple-card apple-card--tint-purple fade-in-up" style="animation-delay: 0.3s;">
                <div class="apple-card-inner">
                    <div class="apple-card-eyebrow">Kết nối số</div>
                    <h3 class="apple-card-title">DentalSO Connect</h3>
                    <p class="apple-card-desc">
                        Ứng dụng gửi ca số và cộng tác dành cho nha khoa, sales và labo gia công.
                    </p>
                    <span class="apple-link mt-auto">
                        Tìm hiểu thêm <span class="apple-chevron">›</span>
                    </span>
                </div>
                <div class="apple-card-img-wrapper">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2022/07/clinic.png" alt="DentalSO Connect – Digital Case Submission & Partner Collaboration" class="apple-card-img">
                </div>
            </a>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- SECTION 3: WHY DENTALSO? --}}
{{-- Apple-style dark section with glass cards --}}
{{-- ============================================= --}}
<section class="apple-section apple-section--dark relative overflow-hidden">
    {{-- Background glow effects --}}
    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-[#0071e3]/5 rounded-full blur-[120px]"></div>
    <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-[#30d158]/5 rounded-full blur-[100px]"></div>

    <div class="apple-container relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16 lg:mb-20 fade-in-up">
            <h2 class="apple-headline text-white">Tại sao chọn DentalSO?</h2>
            <p class="apple-body text-[#86868b] mt-4 max-w-2xl mx-auto">Được xây dựng từ đầu cho ngành nha khoa. Mỗi tính năng đều thiết kế theo cách labo thực sự vận hành.</p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-5">
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.1s;">
                <span class="material-symbols-outlined apple-glass-icon">dentistry</span>
                <p class="apple-glass-text">Chuyên biệt cho labo nha khoa</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.15s;">
                <span class="material-symbols-outlined apple-glass-icon">assignment</span>
                <p class="apple-glass-text">Theo dõi sản xuất từng ca</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.2s;">
                <span class="material-symbols-outlined apple-glass-icon">event_available</span>
                <p class="apple-glass-text">Lập lịch theo mức ưu tiên</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.25s;">
                <span class="material-symbols-outlined apple-glass-icon">cloud_done</span>
                <p class="apple-glass-text">Hạ tầng đám mây an toàn</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.3s;">
                <span class="material-symbols-outlined apple-glass-icon">trending_up</span>
                <p class="apple-glass-text">Kiến trúc mở rộng cho labo đang phát triển</p>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- SECTION 4: FINAL CTA --}}
{{-- Apple-style centered CTA on blue gradient --}}
{{-- ============================================= --}}
<section class="apple-section apple-section--cta relative overflow-hidden">
    {{-- Decorative gradient orbs --}}
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-[#005bb5]/30 rounded-full blur-[150px] -translate-y-1/2 translate-x-1/4"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-[#004494]/40 rounded-full blur-[120px] translate-y-1/3 -translate-x-1/4"></div>

    <div class="apple-container text-center relative z-10">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-6">Sẵn sàng tối ưu<br>vận hành của bạn?</h2>
            <p class="text-xl lg:text-2xl text-white/80 leading-relaxed max-w-2xl mx-auto mb-10">
                Đặt lịch demo cá nhân hóa và khám phá cách DentalSO thay đổi quy trình sản xuất của bạn.
            </p>
            <div class="apple-cta-group">
                <a href="{{ get_site_url() }}/yeu-cau-tu-van" class="apple-cta-primary apple-cta-primary--light">
                    Đặt lịch Demo
                </a>
                <a href="tel:0947476000" class="apple-cta-secondary apple-cta-secondary--light">
                    Gọi: 0947 476 000 <span class="apple-chevron">›</span>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Scroll Reveal Script --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -40px 0px'
        });

        document.querySelectorAll('.fade-in-up').forEach(el => observer.observe(el));
    });
</script>

@endsection