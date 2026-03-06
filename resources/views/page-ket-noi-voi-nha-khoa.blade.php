@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-hero bg-white">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <span class="apple-eyebrow">Product</span>
            <h1 class="apple-headline mb-4">DentalSO Connect <span class="apple-hero-headline-sub">– Digital Case Submission & Partner Collaboration</span></h1>
            <p class="apple-hero-copy">
                DentalSO Connect enables clinics, sales agents, and partner labs to submit cases digitally and track real-time production progress.
            </p>
            <div class="apple-cta-group mt-8">
                <a href="{{ get_site_url() }}/yeu-cau-tu-van" class="apple-cta-primary">Request a Connect Demo</a>
                <a href="#features" class="apple-cta-secondary">Learn more <span class="apple-chevron">›</span></a>
            </div>
        </div>
    </div>
</section>

{{-- Online Case Submission --}}
<section id="features" class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="apple-split">
            <div class="apple-split-text fade-in-up">
                <h2 class="apple-headline-sm">Online Case Submission</h2>
                <ul class="space-y-4 mt-6">
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Structured digital prescription forms</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>STL and scan uploads</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Image and file attachments</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Complete case data validation</span></li>
                </ul>
                <p class="apple-body mt-6">Eliminate incomplete case submissions.</p>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <img src="{{ get_site_url() }}/wp-content/uploads/2022/07/clinic.png" alt="DentalSO Connect Online Case Submission" class="apple-split-img rounded-3xl shadow-[0_20px_60px_rgba(0,0,0,0.08)]">
            </div>
        </div>
    </div>
</section>

{{-- Real-Time Case Tracking --}}
<section class="apple-section bg-white">
    <div class="apple-container text-center">
        <div class="max-w-3xl mx-auto fade-in-up">
            <h2 class="apple-headline-sm mb-6">Real-Time Case Tracking</h2>
            <p class="apple-body mb-10">Partners can monitor:</p>
            <div class="flex flex-wrap justify-center items-center gap-3 text-base">
                <span class="px-5 py-2.5 rounded-full bg-[#f5f5f7] font-medium text-[#1d1d1f]">Design</span>
                <span class="text-[#86868b]">→</span>
                <span class="px-5 py-2.5 rounded-full bg-[#f5f5f7] font-medium text-[#1d1d1f]">Production</span>
                <span class="text-[#86868b]">→</span>
                <span class="px-5 py-2.5 rounded-full bg-[#f5f5f7] font-medium text-[#1d1d1f]">Finishing</span>
                <span class="text-[#86868b]">→</span>
                <span class="px-5 py-2.5 rounded-full bg-[#f5f5f7] font-medium text-[#1d1d1f]">QC</span>
                <span class="text-[#86868b]">→</span>
                <span class="px-5 py-2.5 rounded-full bg-[#0071e3] font-medium text-white">Delivery</span>
            </div>
            <p class="apple-body mt-8">Reduce status inquiry calls and emails.</p>
        </div>
    </div>
</section>

{{-- Secure File Sharing & Communication --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="apple-split apple-split--reverse">
            <div class="apple-split-text fade-in-up">
                <h2 class="apple-headline-sm">Secure File Sharing & Communication</h2>
                <ul class="space-y-4 mt-6">
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Case-based notes</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Revision tracking</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Secure cloud storage</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Role-based access</span></li>
                </ul>
                <p class="apple-body mt-6">All communication is logged and traceable.</p>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <img src="{{ get_site_url() }}/wp-content/uploads/2022/08/clinic-dashboard.png" alt="DentalSO Connect Secure File Sharing" class="apple-split-img rounded-3xl shadow-[0_20px_60px_rgba(0,0,0,0.08)]">
            </div>
        </div>
    </div>
</section>

{{-- Seamless Integration --}}
<section class="apple-section apple-section--dark">
    <div class="apple-container text-center">
        <div class="max-w-3xl mx-auto fade-in-up">
            <h2 class="apple-headline text-white mb-6">Seamless Integration<br>with DentalSO MES</h2>
            <p class="text-xl lg:text-2xl text-[#86868b] leading-relaxed mb-4">When a case is submitted, it flows directly into the lab production workflow.</p>
            <p class="text-xl lg:text-2xl text-white font-medium">No double entry. No manual retyping.</p>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="apple-section apple-section--cta">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-6">Digitally connect<br>your lab network.</h2>
            <div class="apple-cta-group">
                <a href="{{ get_site_url() }}/yeu-cau-tu-van" class="apple-cta-primary apple-cta-primary--light">Request a Connect Demo</a>
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