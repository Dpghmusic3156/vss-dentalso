{{-- Template Name: Product: Quản lý Bảo hành Labo --}}
@extends('layouts.app')

@section('content')

{{-- ============================================= --}}
{{-- HERO --}}
{{-- ============================================= --}}
<section class="apple-hero relative overflow-hidden bg-[#fbfbfd]">
    <div class="absolute inset-0 bg-gradient-to-b from-[#fbfbfd] via-white to-[#f5f5f7]"></div>
    <div class="apple-container relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
            <div class="w-full lg:w-[45%] fade-in-up">
                <span class="apple-eyebrow">Bảo hành nha khoa</span>
                <h1 class="text-4xl lg:text-6xl font-bold text-[#1d1d1f] leading-[1.08] tracking-tight mb-6">
                    Quản lý Bảo hành Labo
                </h1>
                <p class="apple-body text-[#86868b] mb-4 leading-relaxed">
                    Labo in và cấp thẻ bảo hành
                </p>
                <p class="text-lg font-semibold text-[#1d1d1f] mb-8 italic">
                    Nha khoa và bệnh nhân tra cứu bảo hành
                </p>
                <div class="apple-cta-group">
                    <a href="{{ home_url('yeu-cau-tu-van/') }}" class="apple-cta-primary">Đăng Ký Demo</a>
                </div>
            </div>
            <div class="w-full lg:w-[55%] fade-in-up" style="animation-delay: 0.15s;">
                <div>
                    <img src="@asset('images/warranty-hero-mockup.png')"
                         alt="Quản lý Bảo hành Labo — Bảng điều khiển"
                         class="rounded-xl w-full">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- BA ĐỐI TƯỢNG: Labo / Nha khoa / Bệnh nhân --}}
{{-- ============================================= --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <h2 class="apple-headline">Giải pháp cho<br>mọi bên liên quan</h2>
            <p class="apple-body mt-4 max-w-2xl mx-auto">Từ Labo đến Nha khoa và bệnh nhân — tất cả được kết nối qua hệ thống bảo hành số hóa.</p>
        </div>
        <div class="grid sm:grid-cols-3 gap-8 max-w-5xl mx-auto">
            {{-- Labo --}}
            <div class="apple-card apple-card--white fade-in-up p-0 overflow-hidden" style="animation-delay: 0.05s;">
                <div class="h-48 overflow-hidden bg-gray-100">
                    <img src="@asset('images/warranty-labo-printer.png')" alt="Labo Printer" class="w-full h-full object-cover" loading="lazy">
                </div>
                <div class="apple-card-inner text-center p-8 text-[#1d1d1f]">
                    <h3 class="apple-card-title text-xl mb-3">Labo</h3>
                    <p class="apple-card-desc">Quản lý, in và cấp thẻ bảo hành đơn giản & chính xác.</p>
                    <p class="text-sm mt-3">Cung cấp dịch vụ tốt hơn cho Nha khoa, bệnh nhân.</p>
                </div>
            </div>
            {{-- Nha khoa --}}
            <div class="apple-card apple-card--white fade-in-up p-0 overflow-hidden" style="animation-delay: 0.1s;">
                <div class="h-48 overflow-hidden bg-gray-100">
                    <img src="@asset('images/warranty-clinic-card.png')" alt="Clinic Warranty Card" class="w-full h-full object-cover" loading="lazy">
                </div>
                <div class="apple-card-inner text-center p-8 text-[#1d1d1f]">
                    <h3 class="apple-card-title text-xl mb-3">Nha khoa</h3>
                    <p class="apple-card-desc">Gia tăng uy tín và lợi thế kinh doanh khi cung cấp phiếu bảo hành số với đầy đủ chi tiết cho bệnh nhân.</p>
                </div>
            </div>
            {{-- Bệnh nhân --}}
            <div class="apple-card apple-card--white fade-in-up p-0 overflow-hidden" style="animation-delay: 0.15s;">
                <div class="h-48 overflow-hidden bg-gray-100">
                    <img src="@asset('images/warranty-patient-qr.png')" alt="Patient QR Lookup" class="w-full h-full object-cover" loading="lazy">
                </div>
                <div class="apple-card-inner text-center p-8 text-[#1d1d1f]">
                    <h3 class="apple-card-title text-xl mb-3">Bệnh nhân</h3>
                    <p class="apple-card-desc">Yên tâm hơn về dịch vụ. Tra cứu bảo hành đơn giản và số thẻ bảo hành bằng mã QR Code.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- CHÍNH SÁCH BẢO HÀNH LINH ĐỘNG --}}
{{-- ============================================= --}}
<section class="py-16 lg:py-28 bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow">Linh hoạt</span>
            <h2 class="apple-headline-sm">Chính sách bảo hành<br>linh hoạt</h2>
            <p class="apple-body mt-4 max-w-xl mx-auto">
                Được thiết lập cho từng loại sứ và từng nha khoa. Linh động điều chỉnh cho đơn hàng cụ thể.
            </p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-4xl mx-auto">
            <div class="bg-white rounded-2xl p-6 text-center fade-in-up" style="animation-delay: 0.05s;">
                <span class="material-symbols-outlined text-3xl text-[#0071e3] mb-3">tune</span>
                <p class="text-sm font-semibold text-[#1d1d1f]">Tùy chỉnh theo loại sứ</p>
            </div>
            <div class="bg-white rounded-2xl p-6 text-center fade-in-up" style="animation-delay: 0.1s;">
                <span class="material-symbols-outlined text-3xl text-[#30d158] mb-3">local_hospital</span>
                <p class="text-sm font-semibold text-[#1d1d1f]">Tùy chỉnh theo nha khoa</p>
            </div>
            <div class="bg-white rounded-2xl p-6 text-center fade-in-up" style="animation-delay: 0.15s;">
                <span class="material-symbols-outlined text-3xl text-[#ff9f0a] mb-3">edit_note</span>
                <p class="text-sm font-semibold text-[#1d1d1f]">Điều chỉnh từng đơn hàng</p>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- CÔNG NGHỆ QR CODE --}}
{{-- ============================================= --}}
<section class="py-16 lg:py-28 bg-white">
    <div class="apple-container">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
            <div class="w-full lg:w-[45%] fade-in-up">
                <span class="apple-eyebrow">Tra cứu tức thời</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-[#1d1d1f] leading-snug tracking-tight mb-6">
                    Công nghệ QR Code
                </h2>
                <p class="apple-body text-[#86868b] mb-6 leading-relaxed">
                    Xem ngay thông tin bảo hành chi tiết thông qua quét mã QR Code. Tra cứu tức thời từ điện thoại và trang web.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed">
                        <span class="material-symbols-outlined text-[#0071e3] text-xl mr-3 mt-0.5 flex-shrink-0">check_circle</span>
                        Quét mã QR từ ứng dụng, website, điện thoại
                    </li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed">
                        <span class="material-symbols-outlined text-[#0071e3] text-xl mr-3 mt-0.5 flex-shrink-0">check_circle</span>
                        Tùy biến giao diện theo thương hiệu của Labo
                    </li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed">
                        <span class="material-symbols-outlined text-[#0071e3] text-xl mr-3 mt-0.5 flex-shrink-0">check_circle</span>
                        Hiển thị đầy đủ thời hạn, loại sản phẩm, nha khoa
                    </li>
                </ul>
            </div>
            <div class="w-full lg:w-[55%] fade-in-up" style="animation-delay: 0.15s;">
                <div>
                    <img src="@asset('images/warranty-qr-mockup.png')" alt="QR Lookup Mockup" class="w-full" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- IN THẺ BẢO HÀNH TỪ PHẦN MỀM --}}
{{-- ============================================= --}}
<section class="py-16 lg:py-28 bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="flex flex-col-reverse lg:flex-row items-center gap-12 lg:gap-20">
            <div class="w-full lg:w-[55%] fade-in-up" style="animation-delay: 0.15s;">
                <div>
                    <img src="@asset('images/warranty-print-mockup.png')" alt="Card Printing Mockup" class="w-full" loading="lazy">
                </div>
            </div>
            <div class="w-full lg:w-[45%] fade-in-up" style="animation-delay: 0.15s;">
                <span class="apple-eyebrow">In ấn chuyên nghiệp</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-[#1d1d1f] leading-snug tracking-tight mb-6">
                    In thẻ bảo hành<br>từ phần mềm
                </h2>
                <ul class="space-y-4">
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mr-3 mt-0.5 flex-shrink-0">check_circle</span>
                        Tạo phiếu và in thẻ chỉ với 1 cú bấm chuột
                    </li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mr-3 mt-0.5 flex-shrink-0">check_circle</span>
                        In đẹp nhiều thẻ đã được thiết lập
                    </li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mr-3 mt-0.5 flex-shrink-0">check_circle</span>
                        Tương thích tốt với tất cả dòng máy in thẻ có cổng kết nối máy tính
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- CTA --}}
{{-- ============================================= --}}
<section class="apple-section apple-section--cta relative overflow-hidden">
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-[#005bb5]/30 rounded-full blur-[150px] -translate-y-1/2 translate-x-1/4"></div>
    <div class="apple-container text-center relative z-10">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-8">Sẵn sàng nâng tầm<br>dịch vụ bảo hành?</h2>
            <p class="text-xl text-white/80 leading-relaxed max-w-2xl mx-auto mb-12">
                Cung cấp thẻ bảo hành chuyên nghiệp. Tăng uy tín Labo. Nâng cao trải nghiệm khách hàng.
            </p>
            <div class="apple-cta-group">
                <a href="{{ home_url('yeu-cau-tu-van/') }}" class="apple-cta-primary apple-cta-primary--light">
                    Đăng Ký Demo Bảo Hành
                </a>
                <a href="{{ home_url('san-pham/phan-mem-dental-lab/') }}" class="apple-cta-secondary apple-cta-secondary--light">
                    Khám phá nền tảng <span class="apple-chevron">›</span>
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
        document.querySelectorAll('.fade-in-up').forEach(el => observer.observe(el));
    });
</script>

@endsection
