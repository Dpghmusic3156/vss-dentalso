@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-hero bg-white">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <span class="apple-eyebrow">Solutions</span>
            <h1 class="apple-headline mb-4">Digital Case Collaboration<br>for Dental Clinics</h1>
            <p class="apple-hero-copy">
                DentalSO Connect enables clinics to submit cases digitally and track production in real time.
            </p>
            <div class="apple-cta-group mt-8">
                <a href="{{ get_site_url() }}/lien-he/" class="apple-cta-primary">Contact Us</a>
            </div>
        </div>
    </div>
</section>

{{-- Benefits for Clinics --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-12 fade-in-up">
            <h2 class="apple-headline-sm">Benefits for Clinics</h2>
        </div>
        <div class="grid sm:grid-cols-2 gap-6 max-w-3xl mx-auto">
            <div class="apple-checklist-item fade-in-up" style="animation-delay: 0.1s;">
                <span class="material-symbols-outlined text-[#0071e3] mr-4">visibility</span>
                <span>Clear case tracking</span>
            </div>
            <div class="apple-checklist-item fade-in-up" style="animation-delay: 0.15s;">
                <span class="material-symbols-outlined text-[#0071e3] mr-4">speed</span>
                <span>Faster turnaround</span>
            </div>
            <div class="apple-checklist-item fade-in-up" style="animation-delay: 0.2s;">
                <span class="material-symbols-outlined text-[#0071e3] mr-4">lock</span>
                <span>Secure file sharing</span>
            </div>
            <div class="apple-checklist-item fade-in-up" style="animation-delay: 0.25s;">
                <span class="material-symbols-outlined text-[#0071e3] mr-4">history</span>
                <span>Complete case history access</span>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="apple-section apple-section--cta">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-6">Improve your lab<br>communication today.</h2>
            <div class="apple-cta-group">
                <a href="{{ get_site_url() }}/lien-he/" class="apple-cta-primary apple-cta-primary--light">Contact Us</a>
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
