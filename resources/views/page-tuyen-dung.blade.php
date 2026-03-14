@extends('layouts.app')

@section('content')

<section class="apple-section apple-section--sm bg-[#f5f5f7]">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h1 class="apple-headline mb-4">Tuyển Dụng</h1>
            <p class="apple-hero-copy">
                Tham gia đội ngũ DentalSO — Nơi công nghệ kiến tạo tương lai ngành nha khoa.
            </p>
        </div>
    </div>
</section>

<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="max-w-3xl mx-auto text-center fade-in-up">
            <h2 class="apple-headline-sm mb-6">Hiện chưa có vị trí tuyển dụng</h2>
            <p class="apple-body mb-8">
                Chúng tôi luôn tìm kiếm những tài năng xuất sắc. Hãy gửi CV của bạn tới email bên dưới để chúng tôi liên hệ khi có cơ hội phù hợp.
            </p>
            <a href="mailto:contact@dentalso.com" class="apple-cta-primary">
                Gửi CV: contact@dentalso.com
            </a>
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
