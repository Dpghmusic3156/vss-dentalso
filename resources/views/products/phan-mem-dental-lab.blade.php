{{-- Template Name: Product: Phần mềm Dental Lab --}}
{{--
--}}

@extends('layouts.app')

@section('content')

{{-- ============================================= --}}
{{-- HERO --}}
{{-- ============================================= --}}
<section class="apple-hero relative overflow-hidden bg-[#fbfbfd]">
    <div class="apple-container text-center relative z-10">
        <div class="fade-in-up">
            <h1 class="apple-hero-headline">Quản lý Labo nha khoa</h1>
            <h2 class="apple-hero-subheadline">Vận hành Labo Tinh gọn</h2>
            <p class="apple-hero-copy font-medium max-w-3xl mx-auto mt-4">
                Cung cấp sức mạnh cho Labo và Phòng khám Nha khoa hiện đại với quy trình thông minh, kết nối và hiệu quả.
            </p>
            <div class="apple-cta-group">
                <a href="{{ home_url('yeu-cau-tu-van/?product=' . urlencode('Quản lý Labo nha khoa')) }}" class="apple-cta-primary">
                    Đặt Lịch Demo
                </a>
            </div>
        </div>
        <div class="apple-hero-img-wrapper fade-in-up" style="animation-delay: 0.2s;">
            <img src="{{ home_url('wp-content/uploads/2024/07/dental') }}.png" alt="Nền tảng DentalSO - Phần mềm quản lý labo nha khoa giá rẻ, cho dùng thử miễn phí" class="apple-hero-img w-full max-w-5xl mx-auto mt-12 rounded-2xl" loading="lazy">
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- BIẾN PHỨC TẠP THÀNH KIỂM SOÁT --}}
{{-- ============================================= --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="apple-split">
            <div class="apple-split-text fade-in-up">
                <p class="text-sm font-semibold text-[#0071e3] tracking-wide uppercase mb-4">Nền tảng</p>
                <h2 class="text-4xl lg:text-5xl font-bold text-[#1d1d1f] leading-snug tracking-tight mb-6">
                    Biến phức tạp<br>thành kiểm soát.
                </h2>
                <p class="text-[#86868b] text-xl leading-relaxed mb-8">
                    Hết thời mất lợi nhuận vì hệ thống rời rạc và theo dõi thủ công. DentalSO kết nối sản xuất, chất lượng và trao đổi thông tin vào một môi trường số thống nhất.
                </p>
                <p class="text-2xl font-bold text-[#1d1d1f] leading-snug">
                    Từ nhận ca đến giao hàng, mọi quy trình đều được đồng bộ và truy vết.
                </p>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.1s;">
                <img src="{{ home_url('wp-content/uploads/2022/08/clinic-dashboard') }}.png" alt="Phần mềm quản lý Dental Lab dashboard - Phần mềm quản lý labo nha khoa giá rẻ, cho dùng thử miễn phí" class="apple-split-img rounded-3xl shadow-[0_20px_60px_rgba(0,0,0,0.08)]" loading="lazy">
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- CHUYÊN BIỆT CHO NHA KHOA --}}
{{-- ============================================= --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <h2 class="apple-headline-sm">Chuyên biệt cho Nha khoa</h2>
            <p class="apple-body mt-4">Khác với ERP hoặc phần mềm sản xuất chung chung, DentalSO được thiết kế riêng cho quy trình nha khoa.</p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.1s;">
                <div class="p-8">
                    <span class="material-symbols-outlined text-[#0071e3] text-4xl mb-4">account_tree</span>
                    <h3 class="text-lg font-semibold text-[#1d1d1f] mb-2">Sản xuất theo ca</h3>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.15s;">
                <div class="p-8">
                    <span class="material-symbols-outlined text-[#0071e3] text-4xl mb-4">visibility</span>
                    <h3 class="text-lg font-semibold text-[#1d1d1f] mb-2">Giám sát xưởng thời gian thực</h3>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.2s;">
                <div class="p-8">
                    <span class="material-symbols-outlined text-[#0071e3] text-4xl mb-4">forum</span>
                    <h3 class="text-lg font-semibold text-[#1d1d1f] mb-2">Kết nối phòng khám – Labo</h3>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.25s;">
                <div class="p-8">
                    <span class="material-symbols-outlined text-[#0071e3] text-4xl mb-4">fact_check</span>
                    <h3 class="text-lg font-semibold text-[#1d1d1f] mb-2">Kiểm tra chất lượng theo công đoạn</h3>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.3s;">
                <div class="p-8">
                    <span class="material-symbols-outlined text-[#0071e3] text-4xl mb-4">lock</span>
                    <h3 class="text-lg font-semibold text-[#1d1d1f] mb-2">Bảo mật dữ liệu bệnh nhân</h3>
                </div>
            </div>
        </div>
        <div class="text-center mt-12 fade-in-up" style="animation-delay: 0.35s;">
            <p class="text-xl font-medium text-[#1d1d1f]">Thiết kế cho sản xuất chính xác. Xây dựng cho chuyên gia nha khoa.</p>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- GIẢI PHÁP CỐT LÕI --}}
{{-- ============================================= --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <h2 class="apple-headline">Giải pháp cốt lõi</h2>
        </div>
        <div class="grid lg:grid-cols-2 gap-10">
            {{-- MES --}}
            <a href="{{ home_url('san-pham/phan-mem-mes/') }}" class="apple-card apple-card--tint-green fade-in-up block group transition-transform hover:-translate-y-1" style="animation-delay: 0.1s;">
                <div class="apple-card-inner">
                    <div class="apple-card-eyebrow">Quản lý sản xuất, được tái định nghĩa</div>
                    <h3 class="apple-card-title group-hover:text-[#30d158] transition-colors">1. Quản lý sản xuất cho Labo</h3>
                    <ul class="space-y-4 mb-8 mt-4">
                        <li class="flex items-start"><span class="material-symbols-outlined text-[#30d158] mr-3 mt-1 text-xl">check_circle</span><span class="text-[#1d1d1f]">Theo dõi sản xuất thời gian thực</span></li>
                        <li class="flex items-start"><span class="material-symbols-outlined text-[#30d158] mr-3 mt-1 text-xl">check_circle</span><span class="text-[#1d1d1f]">Tự động sắp lịch và cân bằng tải</span></li>
                        <li class="flex items-start"><span class="material-symbols-outlined text-[#30d158] mr-3 mt-1 text-xl">check_circle</span><span class="text-[#1d1d1f]">Kiểm soát chất lượng và theo dõi lỗi</span></li>
                        <li class="flex items-start"><span class="material-symbols-outlined text-[#30d158] mr-3 mt-1 text-xl">check_circle</span><span class="text-[#1d1d1f]">Dự báo tồn kho và quản lý vật tư</span></li>
                    </ul>
                    <p class="font-medium text-[#1d1d1f] mt-auto flex items-center justify-between">
                        <span>Kết quả: Giao hàng nhanh hơn, ít làm lại, lợi nhuận cao hơn.</span>
                        <span class="material-symbols-outlined text-[#30d158] opacity-0 group-hover:opacity-100 transition-opacity translate-x-[-10px] group-hover:translate-x-0 duration-300">arrow_forward</span>
                    </p>
                </div>
            </a>
            {{-- Connect --}}
            <a href="{{ home_url('san-pham/dentalso-ket-noi/') }}" class="apple-card apple-card--tint-purple fade-in-up block group transition-transform hover:-translate-y-1" style="animation-delay: 0.2s;">
                <div class="apple-card-inner">
                    <div class="apple-card-eyebrow">Kết nối liền mạch. Không ma sát.</div>
                    <h3 class="apple-card-title group-hover:text-[#bf5af2] transition-colors">2. Kết nối Labo và Nha khoa</h3>
                    <ul class="space-y-4 mb-8 mt-4">
                        <li class="flex items-start"><span class="material-symbols-outlined text-[#bf5af2] mr-3 mt-1 text-xl">check_circle</span><span class="text-[#1d1d1f]">Gửi ca trực tuyến</span></li>
                        <li class="flex items-start"><span class="material-symbols-outlined text-[#bf5af2] mr-3 mt-1 text-xl">check_circle</span><span class="text-[#1d1d1f]">Chia sẻ hình ảnh và file</span></li>
                        <li class="flex items-start"><span class="material-symbols-outlined text-[#bf5af2] mr-3 mt-1 text-xl">check_circle</span><span class="text-[#1d1d1f]">Lưu trữ thông tin bệnh nhân theo ca</span></li>
                        <li class="flex items-start"><span class="material-symbols-outlined text-[#bf5af2] mr-3 mt-1 text-xl">check_circle</span><span class="text-[#1d1d1f]">Theo dõi bảo hành và lịch sử ca</span></li>
                        <li class="flex items-start"><span class="material-symbols-outlined text-[#bf5af2] mr-3 mt-1 text-xl">check_circle</span><span class="text-[#1d1d1f]">Bảo mật cấp doanh nghiệp (SSL, chứng chỉ số, mã hóa RSA)</span></li>
                    </ul>
                    <p class="font-medium text-[#1d1d1f] mt-auto flex items-center justify-between">
                        <span>Kết quả: Giảm lỗi, thông tin rõ ràng hơn, quan hệ đối tác bền chặt.</span>
                        <span class="material-symbols-outlined text-[#bf5af2] opacity-0 group-hover:opacity-100 transition-opacity translate-x-[-10px] group-hover:translate-x-0 duration-300">arrow_forward</span>
                    </p>
                </div>
            </a>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- TẠI SAO CHỌN DENTALSO (Dark) --}}
{{-- ============================================= --}}
<section class="apple-section apple-section--dark relative overflow-hidden">
    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-[#0071e3]/5 rounded-full blur-[120px]"></div>
    <div class="apple-container relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <h2 class="apple-headline text-white">Tại sao chọn DentalSO?</h2>
        </div>
        <div class="grid md:grid-cols-2 gap-6 max-w-5xl mx-auto">
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.1s;">
                <h3 class="text-xl font-semibold text-white mb-3">Đổi mới chuyên biệt ngành</h3>
                <p class="apple-glass-text">Mọi tính năng đều xây dựng quanh logic sản xuất nha khoa — không phải chỉnh sửa từ hệ thống sản xuất chung chung.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.15s;">
                <h3 class="text-xl font-semibold text-white mb-3">Bảo mật cấp doanh nghiệp</h3>
                <p class="apple-glass-text">Dữ liệu bệnh nhân và thông tin vận hành được bảo vệ bằng tiêu chuẩn mã hóa hiện đại.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.2s;">
                <h3 class="text-xl font-semibold text-white mb-3">Hiệu quả đã được chứng minh</h3>
                <p class="apple-glass-text">Được hơn 300 tổ chức nha khoa tin dùng để chuẩn hóa hoạt động và mở rộng tự tin.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.25s;">
                <h3 class="text-xl font-semibold text-white mb-3">Kiến trúc mở rộng</h3>
                <p class="apple-glass-text">Kiến trúc SaaS đa người dùng, hỗ trợ Labo đơn lẻ, doanh nghiệp đa chi nhánh và mở rộng quốc tế.</p>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- CTA CUỐI --}}
{{-- ============================================= --}}
<section class="apple-section apple-section--cta relative overflow-hidden">
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-[#005bb5]/30 rounded-full blur-[150px] -translate-y-1/2 translate-x-1/4"></div>
    <div class="apple-container text-center relative z-10">
        <div class="max-w-4xl mx-auto fade-in-up">
            <h2 class="apple-headline text-white mb-10">Từ hỗn loạn quy trình đến vận hành xuất sắc</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-4 mb-12">
                <div class="bg-white/10 rounded-xl p-4 backdrop-blur-md border border-white/20">
                    <p class="text-white font-medium text-sm">Tầm nhìn sản xuất rõ ràng</p>
                </div>
                <div class="bg-white/10 rounded-xl p-4 backdrop-blur-md border border-white/20">
                    <p class="text-white font-medium text-sm">Thời gian xử lý dự đoán được</p>
                </div>
                <div class="bg-white/10 rounded-xl p-4 backdrop-blur-md border border-white/20">
                    <p class="text-white font-medium text-sm">Kiểm soát chi phí vật tư</p>
                </div>
                <div class="bg-white/10 rounded-xl p-4 backdrop-blur-md border border-white/20">
                    <p class="text-white font-medium text-sm">Chất lượng chuẩn hóa</p>
                </div>
                <div class="bg-white/10 rounded-xl p-4 backdrop-blur-md border border-white/20">
                    <p class="text-white font-medium text-sm">Quyết định dựa trên dữ liệu</p>
                </div>
            </div>
            <p class="text-xl text-white/80 mb-12 italic">
                "Đây không chỉ là phần mềm. Đây là hạ tầng vận hành cho sản xuất nha khoa hiện đại."
            </p>
            <h3 class="text-3xl font-bold text-white mb-8">Sẵn sàng tối ưu vận hành?</h3>
            <p class="text-lg text-white/90 mb-8">Khám phá cách DentalSO nâng tầm hiệu suất Labo và phòng khám.</p>
            <div class="apple-cta-group">
                <a href="{{ home_url('yeu-cau-tu-van/?product=' . urlencode('Quản lý Labo nha khoa')) }}" class="apple-cta-primary apple-cta-primary--light">
                    Đặt Lịch Demo Trực Tiếp
                </a>
                <a href="{{ home_url('lien-he/') }}" class="apple-cta-secondary apple-cta-secondary--light">
                    Nhận Báo Giá <span class="apple-chevron">›</span>
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