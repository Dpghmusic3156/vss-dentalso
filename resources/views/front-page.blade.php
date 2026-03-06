@extends('layouts.app')

@section('content')

{{-- ============================================= --}}
{{-- SECTION 1: HERO --}}
{{-- Apple-style: Centered massive text, subheadline, CTA pills --}}
{{-- ============================================= --}}
<section class="apple-section apple-hero relative overflow-hidden bg-white">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h1 class="apple-hero-headline">
                DentalSO <span class="apple-hero-headline-sub">– Dental Streamlined Operations for Modern Dental Labs</span>
            </h1>
            <h2 class="apple-hero-subheadline">
                The Complete Dental Lab Software Ecosystem
            </h2>
            <p class="apple-hero-copy">
                DentalSO is an integrated dental lab software platform designed to streamline production, improve case visibility, and digitally connect laboratories with clinics and partners.
            </p>
            <p class="apple-hero-proof">
                From real-time production floor monitoring to secure case submission and collaboration, DentalSO delivers total operational control in one unified system.
            </p>
            <div class="apple-cta-group">
                <a href="{{ get_site_url() }}/yeu-cau-tu-van" class="apple-cta-primary">
                    Book a Demo
                </a>
                <a href="#solutions" class="apple-cta-secondary">
                    Learn more <span class="apple-chevron">›</span>
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
{{-- Apple-style product grid with rounded cards --}}
{{-- ============================================= --}}
<section id="solutions" class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 lg:mb-20 fade-in-up">
            <h2 class="apple-headline">One Platform.<br>Three Powerful Solutions.</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-6 lg:gap-8">
            {{-- Card 1: DentalSO Platform --}}
            <div class="apple-card fade-in-up" style="animation-delay: 0.1s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-white">
                        <span class="material-symbols-outlined text-3xl text-[#1d1d1f]">precision_manufacturing</span>
                    </div>
                    <h3 class="apple-card-title">DentalSO Platform</h3>
                    <p class="apple-card-desc">
                        Comprehensive dental laboratory management software for case control, workflow standardization, quality assurance, and analytics.
                    </p>
                    <a href="{{ get_site_url() }}/quan-ly-dental-lab" class="apple-link mt-auto">
                        Learn more <span class="apple-chevron">›</span>
                    </a>
                </div>
                <div class="apple-card-img-wrapper">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2024/07/dental.png" alt="DentalSO Platform – Dental Lab Management Software" class="apple-card-img">
                </div>
            </div>

            {{-- Card 2: DentalSO MES --}}
            <div class="apple-card fade-in-up" style="animation-delay: 0.2s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-white">
                        <span class="material-symbols-outlined text-3xl text-[#1d1d1f]">monitoring</span>
                    </div>
                    <h3 class="apple-card-title">DentalSO MES</h3>
                    <p class="apple-card-desc">
                        Real-time Manufacturing Execution System for monitoring production floor activity, technician workload, and deadline-based prioritization.
                    </p>
                    <a href="{{ get_site_url() }}/products/dental-lab-mes/" class="apple-link mt-auto">
                        Learn more <span class="apple-chevron">›</span>
                    </a>
                </div>
                <div class="apple-card-img-wrapper">
                    <img src="{{ get_theme_mod('trang_chu.banner.hinh_2') }}" alt="DentalSO MES – Real-Time Manufacturing Execution System" class="apple-card-img">
                </div>
            </div>

            {{-- Card 3: DentalSO Connect --}}
            <div class="apple-card fade-in-up" style="animation-delay: 0.3s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-white">
                        <span class="material-symbols-outlined text-3xl text-[#1d1d1f]">hub</span>
                    </div>
                    <h3 class="apple-card-title">DentalSO Connect</h3>
                    <p class="apple-card-desc">
                        Digital case submission and partner collaboration app for clinics, sales agents, and outsource labs.
                    </p>
                    <a href="{{ get_site_url() }}/ket-noi-voi-nha-khoa/" class="apple-link mt-auto">
                        Learn more <span class="apple-chevron">›</span>
                    </a>
                </div>
                <div class="apple-card-img-wrapper">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2022/07/clinic.png" alt="DentalSO Connect – Digital Case Submission & Partner Collaboration" class="apple-card-img">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- SECTION 3: WHY DENTALSO? --}}
{{-- Apple-style dark section with white text --}}
{{-- ============================================= --}}
<section class="apple-section apple-section--dark">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto fade-in-up">
            <h2 class="apple-headline text-white mb-16 lg:mb-20">Why DentalSO?</h2>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-8 lg:gap-6">
            <div class="apple-feature-item fade-in-up" style="animation-delay: 0.1s;">
                <span class="material-symbols-outlined apple-feature-icon">dentistry</span>
                <p class="apple-feature-text">Built exclusively for dental laboratories</p>
            </div>
            <div class="apple-feature-item fade-in-up" style="animation-delay: 0.15s;">
                <span class="material-symbols-outlined apple-feature-icon">assignment</span>
                <p class="apple-feature-text">Case-by-case production tracking</p>
            </div>
            <div class="apple-feature-item fade-in-up" style="animation-delay: 0.2s;">
                <span class="material-symbols-outlined apple-feature-icon">priority_high</span>
                <p class="apple-feature-text">Priority-based scheduling</p>
            </div>
            <div class="apple-feature-item fade-in-up" style="animation-delay: 0.25s;">
                <span class="material-symbols-outlined apple-feature-icon">cloud_done</span>
                <p class="apple-feature-text">Secure cloud infrastructure</p>
            </div>
            <div class="apple-feature-item fade-in-up" style="animation-delay: 0.3s;">
                <span class="material-symbols-outlined apple-feature-icon">trending_up</span>
                <p class="apple-feature-text">Scalable architecture for growing labs</p>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- SECTION 4: FINAL CTA --}}
{{-- Apple-style centered CTA on blue gradient --}}
{{-- ============================================= --}}
<section class="apple-section apple-section--cta">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-6">Ready to Streamline<br>Your Operations?</h2>
            <p class="text-xl lg:text-2xl text-white/80 leading-relaxed max-w-2xl mx-auto mb-10">
                Book a personalized demo and see how DentalSO transforms your production workflow.
            </p>
            <div class="apple-cta-group">
                <a href="{{ get_site_url() }}/yeu-cau-tu-van" class="apple-cta-primary apple-cta-primary--light">
                    Schedule a Demo
                </a>
                <a href="tel:0947476000" class="apple-cta-secondary apple-cta-secondary--light">
                    Call: 0947 476 000 <span class="apple-chevron">›</span>
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
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

    document.querySelectorAll('.fade-in-up').forEach(el => observer.observe(el));
});
</script>

@endsection