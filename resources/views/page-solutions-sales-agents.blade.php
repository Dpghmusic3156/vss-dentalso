@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-hero bg-white">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <span class="apple-eyebrow">Solutions</span>
            <h1 class="apple-headline mb-4">Case Management Tools<br>for Dental Sales Agents</h1>
            <p class="apple-hero-copy">
                Manage multiple clinic accounts and track production status in one system.
            </p>
            <div class="apple-cta-group mt-8">
                <a href="{{ get_site_url() }}/yeu-cau-tu-van" class="apple-cta-primary">Request Demo</a>
            </div>
        </div>
    </div>
</section>

{{-- Key Capabilities --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-12 fade-in-up">
            <h2 class="apple-headline-sm">Key Capabilities</h2>
        </div>
        <div class="grid sm:grid-cols-2 gap-6 max-w-3xl mx-auto">
            <div class="apple-checklist-item fade-in-up" style="animation-delay: 0.1s;">
                <span class="material-symbols-outlined text-[#0071e3] mr-4">assignment</span>
                <span>Submit cases on behalf of clinics</span>
            </div>
            <div class="apple-checklist-item fade-in-up" style="animation-delay: 0.15s;">
                <span class="material-symbols-outlined text-[#0071e3] mr-4">monitoring</span>
                <span>Monitor production progress</span>
            </div>
            <div class="apple-checklist-item fade-in-up" style="animation-delay: 0.2s;">
                <span class="material-symbols-outlined text-[#0071e3] mr-4">local_shipping</span>
                <span>Track delivery schedules</span>
            </div>
            <div class="apple-checklist-item fade-in-up" style="animation-delay: 0.25s;">
                <span class="material-symbols-outlined text-[#0071e3] mr-4">folder_managed</span>
                <span>Maintain organized documentation</span>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="apple-section apple-section--cta">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-6">Empower your<br>sales network.</h2>
            <div class="apple-cta-group">
                <a href="{{ get_site_url() }}/yeu-cau-tu-van" class="apple-cta-primary apple-cta-primary--light">Request Demo</a>
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
