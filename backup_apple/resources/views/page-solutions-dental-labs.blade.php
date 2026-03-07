@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-hero bg-white">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <span class="apple-eyebrow">Solutions</span>
            <h1 class="apple-headline mb-4">Software Solutions<br>for Dental Laboratories</h1>
            <p class="apple-hero-copy">
                DentalSO helps dental labs standardize workflows, reduce production delays, and improve profitability.
            </p>
            <div class="apple-cta-group mt-8">
                <a href="{{ get_site_url() }}/yeu-cau-tu-van" class="apple-cta-primary">Book a Demo</a>
            </div>
        </div>
    </div>
</section>

{{-- Challenges We Solve --}}
<section class="apple-section apple-section--dark">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-12 fade-in-up">
            <h2 class="apple-headline text-white">Challenges We Solve</h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-6 max-w-5xl mx-auto">
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.1s;">
                <span class="material-symbols-outlined text-4xl text-[#ff453a] mb-4">schedule</span>
                <p class="text-white font-medium text-sm">Missed delivery deadlines</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.15s;">
                <span class="material-symbols-outlined text-4xl text-[#ff9f0a] mb-4">visibility_off</span>
                <p class="text-white font-medium text-sm">Poor case visibility</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.2s;">
                <span class="material-symbols-outlined text-4xl text-[#bf5af2] mb-4">person_off</span>
                <p class="text-white font-medium text-sm">Technician overload</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.25s;">
                <span class="material-symbols-outlined text-4xl text-[#0071e3] mb-4">sms_failed</span>
                <p class="text-white font-medium text-sm">Communication errors</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.3s;">
                <span class="material-symbols-outlined text-4xl text-[#30d158] mb-4">edit_calendar</span>
                <p class="text-white font-medium text-sm">Manual scheduling</p>
            </div>
        </div>
    </div>
</section>

{{-- How DentalSO Helps --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-12 fade-in-up">
            <h2 class="apple-headline-sm">How DentalSO Helps</h2>
        </div>
        <div class="grid sm:grid-cols-2 gap-6 max-w-3xl mx-auto">
            <div class="apple-checklist-item fade-in-up" style="animation-delay: 0.1s;">
                <span class="material-symbols-outlined text-[#0071e3] mr-4">monitoring</span>
                <span>Real-time production tracking</span>
            </div>
            <div class="apple-checklist-item fade-in-up" style="animation-delay: 0.15s;">
                <span class="material-symbols-outlined text-[#0071e3] mr-4">priority_high</span>
                <span>Priority-driven scheduling</span>
            </div>
            <div class="apple-checklist-item fade-in-up" style="animation-delay: 0.2s;">
                <span class="material-symbols-outlined text-[#0071e3] mr-4">folder_shared</span>
                <span>Centralized case management</span>
            </div>
            <div class="apple-checklist-item fade-in-up" style="animation-delay: 0.25s;">
                <span class="material-symbols-outlined text-[#0071e3] mr-4">lock</span>
                <span>Secure clinic communication</span>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="apple-section apple-section--cta">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-6">See how your lab can<br>streamline operations.</h2>
            <div class="apple-cta-group">
                <a href="{{ get_site_url() }}/yeu-cau-tu-van" class="apple-cta-primary apple-cta-primary--light">Book a Demo</a>
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
