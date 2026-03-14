@extends('layouts.app')

@section('content')

<section class="apple-section apple-section--sm bg-[#f5f5f7]">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h1 class="apple-headline mb-4">Tra Cứu Bảo Hành</h1>
            <p class="apple-hero-copy">
                Nhập số thẻ bảo hành hoặc quét QR Code để kiểm tra thông tin bảo hành sản phẩm nha khoa.
            </p>
        </div>
    </div>
</section>

<section class="apple-section bg-white" id="warranty-lookup">
    <div class="apple-container">
        <div class="max-w-2xl mx-auto fade-in-up">
            <div class="bg-[#f5f5f7] rounded-3xl p-8 lg:p-10">
                <h2 class="apple-headline-sm mb-2">Kiểm Tra Bảo Hành</h2>
                <p class="apple-body mb-8">Nhập mã thẻ bảo hành để tra cứu thông tin.</p>
                <form action="" method="GET" class="space-y-5">
                    <input type="text" name="warranty_code" class="apple-input" placeholder="Nhập mã thẻ bảo hành" required>
                    <button type="submit" class="apple-cta-primary w-full justify-center">
                        Tra cứu
                    </button>
                </form>
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
