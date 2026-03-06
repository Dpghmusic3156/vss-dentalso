@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-hero bg-white">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <span class="apple-eyebrow">Product</span>
            <h1 class="apple-headline mb-4">DentalSO <span class="apple-hero-headline-sub">– Dental Lab Management Software</span></h1>
            <p class="apple-hero-copy">
                DentalSO is a purpose-built dental laboratory management system designed to centralize case intake, production workflow, quality control, and reporting.
            </p>
            <div class="apple-cta-group mt-8">
                <a href="{{ get_site_url() }}/yeu-cau-tu-van" class="apple-cta-primary">Book a Demo</a>
                <a href="#features" class="apple-cta-secondary">Learn more <span class="apple-chevron">›</span></a>
            </div>
        </div>
    </div>
</section>

{{-- Complete Case Management --}}
<section id="features" class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="apple-split">
            <div class="apple-split-text fade-in-up">
                <h2 class="apple-headline-sm">Complete Case Management</h2>
                <ul class="space-y-4 mt-6">
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Digital case intake</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Structured case data</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Case history lookup</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Warranty tracking</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Technician assignment</span></li>
                </ul>
                <p class="apple-body mt-6">Every case is organized, searchable, and traceable.</p>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <img src="{{ get_site_url() }}/wp-content/uploads/2024/07/dental.png" alt="DentalSO Case Management" class="apple-split-img rounded-3xl shadow-[0_20px_60px_rgba(0,0,0,0.08)]">
            </div>
        </div>
    </div>
</section>

{{-- Workflow Standardization --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="apple-split apple-split--reverse">
            <div class="apple-split-text fade-in-up">
                <h2 class="apple-headline-sm">Workflow Standardization</h2>
                <p class="apple-body mb-6">Replace whiteboards and spreadsheets with structured digital workflows that ensure:</p>
                <ul class="space-y-4">
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Clear stage transitions</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Reduced communication gaps</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Controlled turnaround time</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Process consistency</span></li>
                </ul>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <img src="{{ get_site_url() }}/wp-content/uploads/2022/08/clinic-dashboard.png" alt="DentalSO Workflow Standardization" class="apple-split-img rounded-3xl shadow-[0_20px_60px_rgba(0,0,0,0.08)]">
            </div>
        </div>
    </div>
</section>

{{-- Reporting & Operational Insights --}}
<section class="apple-section apple-section--dark">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto fade-in-up">
            <h2 class="apple-headline text-white mb-6">Reporting & Operational Insights</h2>
            <p class="apple-body text-[#86868b] mb-12">Monitor:</p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-4xl mx-auto">
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.1s;">
                <span class="material-symbols-outlined text-4xl text-[#0071e3] mb-4">trending_up</span>
                <p class="text-white font-medium">Case volume trends</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.15s;">
                <span class="material-symbols-outlined text-4xl text-[#ff9f0a] mb-4">replay</span>
                <p class="text-white font-medium">Remake rates</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.2s;">
                <span class="material-symbols-outlined text-4xl text-[#30d158] mb-4">local_shipping</span>
                <p class="text-white font-medium">Delivery performance</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.25s;">
                <span class="material-symbols-outlined text-4xl text-[#bf5af2] mb-4">person</span>
                <p class="text-white font-medium">Technician productivity</p>
            </div>
        </div>
        <p class="text-center text-[#86868b] mt-10 fade-in-up" style="animation-delay: 0.3s;">Make decisions based on real data, not assumptions.</p>
    </div>
</section>

{{-- CTA --}}
<section class="apple-section apple-section--cta">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-6">Upgrade your dental lab<br>management system today.</h2>
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