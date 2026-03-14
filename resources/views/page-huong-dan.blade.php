@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-hero bg-white">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <span class="apple-eyebrow">Tài liệu</span>
            <h1 class="apple-headline mb-6">Hướng Dẫn</h1>
            <p class="apple-hero-copy">
                Hướng dẫn từng bước, video và tài liệu giúp bạn sử dụng nền tảng DentalSO hiệu quả nhất.
            </p>
        </div>
    </div>
</section>

{{-- Coming Soon --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="text-center py-16 fade-in-up max-w-2xl mx-auto">
            <span class="material-symbols-outlined text-6xl text-[#d2d2d7] mb-6">menu_book</span>
            <h2 class="apple-headline-sm mb-4">Sắp Ra Mắt</h2>
            <p class="apple-body mb-8">Chúng tôi đang xây dựng bộ hướng dẫn toàn diện từ làm quen DentalSO đến tối ưu sản xuất nâng cao. Hãy chờ đón!</p>
            <div class="apple-cta-group">
                <a href="{{ home_url('yeu-cau-tu-van/') }}" class="apple-cta-primary">Đăng ký Demo</a>
                <a href="{{ home_url('lien-he/') }}" class="apple-cta-secondary">Liên hệ<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('is-visible'); observer.unobserve(entry.target); }});
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
    document.querySelectorAll('.fade-in-up').forEach(el => observer.observe(el));
});
</script>

@endsection
