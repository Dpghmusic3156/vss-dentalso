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
            <h1 class="apple-hero-headline fade-in-up fade-delay-1">
                <span style="background: linear-gradient(90deg, #f9ab00, #34a853, #4285f4); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">DentalSO</span>
            </h1>
            <h2 class="apple-hero-subheadline fade-in-up fade-delay-2">
                Hệ quản trị Labo nha khoa toàn diện
            </h2>
            <h3 class="fade-in-up fade-delay-3 text-2xl md:text-3xl font-semibold text-[#1d1d1f] tracking-tight mt-6 mb-8">
                Tất cả trên 1 nền tảng duy nhất
            </h3>
            <div class="apple-cta-group fade-in-up fade-delay-4">
                <a href="{{ home_url('yeu-cau-tu-van') }}" class="apple-cta-primary apple-press">
                    Đăng Ký Demo
                </a>
                <a href="#solutions" class="apple-cta-secondary apple-press">
                    Tìm hiểu thêm <span class="apple-chevron">›</span>
                </a>
            </div>
        </div>
        {{-- Hero image --}}
        <div class="apple-hero-img-wrapper fade-in-up" style="transition-delay: 200ms;">
            <img src="{{ get_theme_mod('trang_chu.banner.hinh_1') }}" alt="DentalSO – Phần mềm quản lý Dental Lab" class="apple-hero-img animate-float">
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- SECTION 2: MỘT NỀN TẢNG. BỐN GIẢI PHÁP MẠNH MẼ --}}
{{-- Bold product split cards with per-solution color identity --}}
{{-- ============================================= --}}
<section id="solutions" class="apple-section bg-[var(--apple-gray-light)]">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 lg:mb-20 fade-in-up">
            <h2 class="apple-headline">Một nền tảng,<br>Bốn ứng dụng mạnh mẽ.</h2>
        </div>
        <div class="space-y-12 lg:space-y-24">
            {{-- Giải pháp 1: DentalSO Platform --}}
            <div class="apple-split solution-card solution-card--blue bg-white rounded-[2.5rem] p-8 md:p-12 lg:p-16 shadow-sm hover:shadow-[0_20px_40px_rgb(0,0,0,0.1)] hover:-translate-y-3 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)] fade-in-up group" style="transition-delay: 0ms;">
                <div class="apple-split-media solution-card__media">
                    <img src="@asset('images/dental-platform-mockup.png')" alt="DentalSO Platform" class="apple-split-img rounded-2xl relative z-10 group-hover:scale-[1.03] transition-transform duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]" loading="lazy">
                </div>
                <div class="apple-split-text">
                    <span class="solution-pill solution-pill--blue">Quản lý Labo</span>
                    <h3 class="apple-headline-sm font-bold mt-4">Quản lý Labo nha khoa</h3>
                    <p class="apple-body mb-10 text-[#86868b]">
                        Phần mềm quản lý Labo toàn diện — kiểm soát ca, chuẩn hóa quy trình, đảm bảo chất lượng và phân tích dữ liệu.
                    </p>
                    <a href="{{ home_url('san-pham/phan-mem-dental-lab') }}" class="solution-cta">
                        Tìm hiểu thêm <span class="solution-cta__arrow transition-transform duration-300 group-hover:translate-x-2 inline-block">→</span>
                    </a>
                </div>
            </div>

            {{-- Giải pháp 2: DentalSO MES --}}
            <div class="apple-split apple-split--reverse solution-card solution-card--green bg-white rounded-[2.5rem] p-8 md:p-12 lg:p-16 shadow-sm hover:shadow-[0_20px_40px_rgb(0,0,0,0.1)] hover:-translate-y-3 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)] fade-in-up group" style="transition-delay: 100ms;">
                <div class="apple-split-media solution-card__media">
                    <img src="@asset('images/mes-dashboard-hero.png')" alt="DentalSO MES" class="apple-split-img rounded-2xl relative z-10 group-hover:scale-[1.03] transition-transform duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]" loading="lazy">
                </div>
                <div class="apple-split-text">
                    <span class="solution-pill solution-pill--green">Điều hành sản xuất</span>
                    <h3 class="apple-headline-sm font-bold mt-4">Quản lý sản xuất</h3>
                    <p class="apple-body mb-10 text-[#86868b]">
                        Hệ thống điều hành sản xuất thời gian thực — theo dõi xưởng sản xuất, khối lượng công việc kỹ thuật viên và ưu tiên tiến độ.
                    </p>
                    <a href="{{ home_url('san-pham/phan-mem-mes') }}" class="solution-cta solution-cta--green">
                        Tìm hiểu thêm <span class="solution-cta__arrow transition-transform duration-300 group-hover:translate-x-2 inline-block">→</span>
                    </a>
                </div>
            </div>

            {{-- Giải pháp 3: DentalSO Connect --}}
            <div class="apple-split solution-card solution-card--orange bg-white rounded-[2.5rem] p-8 md:p-12 lg:p-16 shadow-sm hover:shadow-[0_20px_40px_rgb(0,0,0,0.1)] hover:-translate-y-3 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)] fade-in-up group" style="transition-delay: 200ms;">
                <div class="apple-split-media solution-card__media">
                    <img src="@asset('images/dentalso-connect-illustration.png')" alt="DentalSO Connect" class="apple-split-img rounded-2xl relative z-10 group-hover:scale-[1.03] transition-transform duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]" loading="lazy">
                </div>
                <div class="apple-split-text">
                    <span class="solution-pill solution-pill--orange">Kết nối số</span>
                    <h3 class="apple-headline-sm font-bold mt-4">Kết nối Labo và Nha khoa</h3>
                    <p class="apple-body mb-10 text-[#86868b]">
                        Ứng dụng gửi ca số hóa và cộng tác đối tác cho phòng khám, đại lý kinh doanh và Labo gia công.
                    </p>
                    <a href="{{ home_url('san-pham/dentalso-ket-noi') }}" class="solution-cta solution-cta--orange">
                        Tìm hiểu thêm <span class="solution-cta__arrow transition-transform duration-300 group-hover:translate-x-2 inline-block">→</span>
                    </a>
                </div>
            </div>

            {{-- Giải pháp 4: Quản lý bảo hành --}}
            <div class="apple-split apple-split--reverse solution-card solution-card--yellow bg-white rounded-[2.5rem] p-8 md:p-12 lg:p-16 shadow-sm hover:shadow-[0_20px_40px_rgb(0,0,0,0.1)] hover:-translate-y-3 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)] fade-in-up group" style="transition-delay: 300ms;">
                <div class="apple-split-media solution-card__media">
                    <img src="@asset('images/warranty-hero-mockup.png')" alt="Quản lý bảo hành" class="apple-split-img rounded-2xl relative z-10 group-hover:scale-[1.03] transition-transform duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]" loading="lazy">
                </div>
                <div class="apple-split-text">
                    <span class="solution-pill solution-pill--yellow">Bảo hành</span>
                    <h3 class="apple-headline-sm font-bold mt-4">Quản lý bảo hành</h3>
                    <p class="apple-body mb-10 text-[#86868b]">
                        Ứng dụng quản lý bảo hành trong DentalSO Starter giúp theo dõi toàn bộ thông tin bảo hành theo từng case một cách rõ ràng và chính xác. Hệ thống hỗ trợ tra cứu bằng mã vạch, in thẻ bảo hành sau khi sản xuất, và liên kết chặt chẽ thông tin giữa bệnh nhân, nha khoa và labo.
                    </p>
                    <a href="{{ home_url('quan-ly-bao-hanh') }}" class="solution-cta solution-cta--yellow">
                        Tìm hiểu thêm <span class="solution-cta__arrow transition-transform duration-300 group-hover:translate-x-2 inline-block">→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- SECTION 3: TẠI SAO CHỌN DENTALSO? --}}
{{-- Apple-style dark section with glass cards --}}
{{-- ============================================= --}}
<section class="apple-section apple-section--dark relative overflow-hidden">
    {{-- Background glow effects --}}
    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-[#0071e3]/5 rounded-full blur-[120px]"></div>
    <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-[#30d158]/5 rounded-full blur-[100px]"></div>

    <div class="apple-container relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16 lg:mb-20 fade-in-up">
            <h2 class="apple-headline text-white">Tại sao chọn DentalSO?</h2>
            <p class="apple-body text-[#86868b] mt-4 max-w-2xl mx-auto">Được xây dựng từ đầu cho ngành nha khoa. Mọi tính năng đều được thiết kế dựa trên cách Labo thực sự vận hành.</p>
        </div>

        <div class="apple-bento-grid">
            {{-- Feature 1: Labs (Large) --}}
            <div class="apple-bento-card apple-bento-card--span-4 apple-lift fade-in-up" style="transition-delay: 100ms;">
                <img src="@asset('images/image.png')" alt="Công nghệ Labo" class="apple-bento-visual">
                <div class="apple-bento-content">
                    <span class="material-symbols-outlined apple-bento-icon" aria-hidden="true">dentistry</span>
                    <h3 class="apple-bento-title">Thiết kế chuyên biệt cho Labo nha khoa</h3>
                    <p class="apple-bento-text">Mọi tính năng được tối ưu theo quy trình thực tế của Labo, từ quản lý đơn hàng đến kiểm soát chất lượng cuối cùng.</p>
                </div>
            </div>

            {{-- Feature 2: Scheduling (Small) --}}
            <div class="apple-bento-card apple-bento-card--span-2 apple-bento-card--top-content apple-lift fade-in-up" style="transition-delay: 150ms;">
                <div class="apple-bento-content">
                    <span class="material-symbols-outlined apple-bento-icon" aria-hidden="true">event_available</span>
                    <h3 class="apple-bento-title">Điều phối thông minh</h3>
                    <p class="apple-bento-text">Sắp xếp lịch sản xuất tự động dựa trên mức độ ưu tiên và năng suất thực tế.</p>
                </div>
            </div>

            {{-- Feature 3: Tracking (Small) --}}
            <div class="apple-bento-card apple-bento-card--span-2 apple-lift fade-in-up" style="transition-delay: 200ms;">
                <div class="apple-bento-content">
                    <span class="material-symbols-outlined apple-bento-icon" aria-hidden="true">assignment</span>
                    <h3 class="apple-bento-title">Theo dõi tức thời</h3>
                    <p class="apple-bento-text">Cập nhật trạng thái từng ca sản xuất theo thời gian thực trên mọi thiết bị.</p>
                </div>
            </div>

            {{-- Feature 4: Cloud (Large) --}}
            <div class="apple-bento-card apple-bento-card--span-4 apple-bento-card--dark apple-lift fade-in-up" style="transition-delay: 250ms;">
                <img src="@asset('images/bento-abstract-2.png')" alt="Hệ thống đám mây" class="apple-bento-visual">
                <div class="apple-bento-content">
                    <span class="material-symbols-outlined apple-bento-icon" aria-hidden="true">cloud_done</span>
                    <h3 class="apple-bento-title">Nền tảng đám mây bảo mật</h3>
                    <p class="apple-bento-text">Xây dựng trên hạ tầng hiện đại, dễ dàng mở rộng quy mô và đảm bảo dữ liệu của bạn luôn an toàn.</p>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- ============================================= --}}
{{-- SECTION 4: CTA CUỐI TRANG --}}
{{-- Apple-style centered CTA on blue gradient --}}
{{-- ============================================= --}}
<section class="apple-section apple-section--cta relative overflow-hidden">
    {{-- Decorative gradient orbs --}}
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-[#005bb5]/30 rounded-full blur-[150px] -translate-y-1/2 translate-x-1/4"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-[#004494]/40 rounded-full blur-[120px] translate-y-1/3 -translate-x-1/4"></div>

    <div class="apple-container text-center relative z-10">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-6">Sẵn sàng tối ưu<br>vận hành Labo?</h2>
            <p class="text-xl lg:text-2xl text-white/80 leading-relaxed max-w-2xl mx-auto mb-10">
                Đăng ký demo cá nhân hóa và khám phá cách DentalSO cải tiến quy trình sản xuất của bạn.
            </p>
            <div class="apple-cta-group">
                <a href="{{ home_url('yeu-cau-tu-van') }}" class="apple-cta-primary apple-cta-primary--light apple-press">
                    Đặt Lịch Demo
                </a>
                <!--<a href="http://zalo.me/0947476000" target="_blank" class="apple-cta-secondary apple-cta-secondary--light apple-press">
                    Gọi ngay: {{ get_theme_mod('phone') }} <span class="apple-chevron">›</span>
                </a>-->
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