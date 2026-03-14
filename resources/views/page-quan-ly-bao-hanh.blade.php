@extends('layouts.app')

@section('content')

<section class="apple-section apple-section--sm bg-[#f5f5f7]">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h1 class="apple-headline mb-4">Quản Lý Bảo Hành</h1>
            <p class="apple-hero-copy">
                Hệ thống quản lý bảo hành toàn diện cho phòng Lab — In thẻ, cấp mã QR, và theo dõi bảo hành tự động.
            </p>
        </div>
    </div>
</section>

<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="grid md:grid-cols-3 gap-6 lg:gap-8 fade-in-up">
            <div class="apple-mini-card">
                <span class="material-symbols-outlined text-2xl text-[#0071e3] mb-3">qr_code_2</span>
                <h4 class="apple-mini-title">Công nghệ QR Code</h4>
                <p class="apple-mini-desc">Tra cứu bảo hành chỉ với 1 thao tác quét mã QR</p>
            </div>
            <div class="apple-mini-card">
                <span class="material-symbols-outlined text-2xl text-[#30d158] mb-3">print</span>
                <h4 class="apple-mini-title">In thẻ bảo hành</h4>
                <p class="apple-mini-desc">In thẻ bảo hành chính xác chỉ với 1 lần bấm chuột từ phần mềm</p>
            </div>
            <div class="apple-mini-card">
                <span class="material-symbols-outlined text-2xl text-[#ff9f0a] mb-3">verified</span>
                <h4 class="apple-mini-title">Chính sách linh động</h4>
                <p class="apple-mini-desc">Thiết lập chính sách bảo hành cho từng loại sứ và từng nha khoa</p>
            </div>
        </div>

        <div class="text-center mt-16 fade-in-up">
            <a href="{{ home_url('yeu-cau-tu-van/') }}" class="apple-cta-primary">Đăng ký Demo</a>
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
