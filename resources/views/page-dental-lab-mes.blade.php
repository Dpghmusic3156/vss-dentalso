@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-hero bg-white">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <span class="apple-eyebrow">Product</span>
            <h1 class="apple-headline mb-4">DentalSO MES <span class="apple-hero-headline-sub">– Real-Time Dental Lab Manufacturing Execution System</span></h1>
            <p class="apple-hero-copy">
                DentalSO MES provides full visibility into your production floor, tracking every case from intake to delivery.
            </p>
            <div class="apple-cta-group mt-8">
                <a href="{{ get_site_url() }}/yeu-cau-tu-van" class="apple-cta-primary">Schedule a MES Demo</a>
                <a href="#features" class="apple-cta-secondary">Learn more <span class="apple-chevron">›</span></a>
            </div>
        </div>
    </div>
</section>

{{-- Real-Time Production Monitoring --}}
<section id="features" class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="apple-split">
            <div class="apple-split-text fade-in-up">
                <h2 class="apple-headline-sm">Real-Time Production Monitoring</h2>
                <ul class="space-y-4 mt-6">
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Live dashboard of active cases</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Stage-by-stage visibility</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Technician workload tracking</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Machine utilization overview</span></li>
                </ul>
                <p class="apple-body mt-6">Know exactly what is happening at any moment.</p>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <img src="{{ get_theme_mod('trang_chu.banner.hinh_2') }}" alt="DentalSO MES Production Monitoring Dashboard" class="apple-split-img rounded-3xl shadow-[0_20px_60px_rgba(0,0,0,0.08)]">
            </div>
        </div>
    </div>
</section>

{{-- Case-by-Case Tracking --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="apple-split apple-split--reverse">
            <div class="apple-split-text fade-in-up">
                <h2 class="apple-headline-sm">Case-by-Case Tracking</h2>
                <p class="apple-body mb-6">Each case shows:</p>
                <ul class="space-y-4">
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Current stage</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Assigned technician</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Time in process</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Estimated completion</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Delivery deadline</span></li>
                </ul>
                <p class="apple-body mt-6">Full transparency across your production flow.</p>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <img src="{{ get_site_url() }}/wp-content/uploads/2024/07/dental.png" alt="DentalSO MES Case Tracking" class="apple-split-img rounded-3xl shadow-[0_20px_60px_rgba(0,0,0,0.08)]">
            </div>
        </div>
    </div>
</section>

{{-- Intelligent Priority-Based Scheduling --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="apple-split">
            <div class="apple-split-text fade-in-up">
                <h2 class="apple-headline-sm">Intelligent Priority-Based Scheduling</h2>
                <p class="apple-body mb-6">DentalSO MES automatically prioritizes cases based on:</p>
                <ul class="space-y-4">
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Delivery deadlines</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Remaining production time</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Lab capacity</span></li>
                </ul>
                <p class="apple-body mt-6">The system guides technicians to work on the highest priority cases first, ensuring on-time delivery.</p>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <img src="{{ get_site_url() }}/wp-content/uploads/2022/08/clinic-dashboard.png" alt="DentalSO MES Priority Scheduling" class="apple-split-img rounded-3xl shadow-[0_20px_60px_rgba(0,0,0,0.08)]">
            </div>
        </div>
    </div>
</section>

{{-- Prevent Delays --}}
<section class="apple-section apple-section--dark">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto fade-in-up">
            <h2 class="apple-headline text-white mb-6">Prevent Delays Before They Happen</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-8 max-w-4xl mx-auto">
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.1s;">
                <span class="material-symbols-outlined text-4xl text-[#ff453a] mb-4">warning</span>
                <p class="text-white font-medium">Deadline risk alerts</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.15s;">
                <span class="material-symbols-outlined text-4xl text-[#ff9f0a] mb-4">report</span>
                <p class="text-white font-medium">Bottleneck detection</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.2s;">
                <span class="material-symbols-outlined text-4xl text-[#0071e3] mb-4">notifications_active</span>
                <p class="text-white font-medium">Overload notifications</p>
            </div>
        </div>
        <p class="text-center text-[#86868b] mt-10 fade-in-up" style="animation-delay: 0.25s;">Move from reactive management to proactive control.</p>
    </div>
</section>

{{-- CTA --}}
<section class="apple-section apple-section--cta">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-6">Take control of<br>your production floor.</h2>
            <div class="apple-cta-group">
                <a href="{{ get_site_url() }}/yeu-cau-tu-van" class="apple-cta-primary apple-cta-primary--light">Schedule a MES Demo</a>
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
