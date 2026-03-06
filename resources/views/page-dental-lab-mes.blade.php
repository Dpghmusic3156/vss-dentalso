@extends('layouts.app')

@section('content')

{{-- ============================================= --}}
{{-- HERO --}}
{{-- ============================================= --}}
<section class="apple-hero relative overflow-hidden bg-white">
    <div class="apple-container text-center relative z-10">
        <div class="fade-in-up">
            <h1 class="apple-hero-headline">DentalSO MES</h1>
            <h2 class="apple-hero-subheadline mt-2 mb-6">
                Real-Time Dental Lab Manufacturing Execution System
            </h2>
            <p class="apple-hero-copy font-medium max-w-4xl mx-auto">
                Complete Production Floor Visibility. Case-by-Case Control. On-Time Delivery.
            </p>
            <p class="apple-body text-lg max-w-4xl mx-auto mt-6 text-[#86868b]">
                DentalSO MES is a specialized Dental Lab Manufacturing Execution System (MES) designed to give laboratories real-time visibility into every case, every technician, and every production stage.
            </p>
            <p class="apple-body text-lg max-w-4xl mx-auto mt-4 text-[#86868b]">
                From case intake to final delivery, DentalSO MES ensures that your entire production floor operates with precision, transparency, and accountability.
            </p>
        </div>
        <div class="apple-hero-img-wrapper fade-in-up" style="animation-delay: 0.2s;">
            <img src="{{ get_theme_mod('trang_chu.banner.hinh_2') }}" alt="DentalSO MES Dashboard" class="apple-hero-img w-full max-w-5xl mx-auto mt-12 rounded-2xl shadow-2xl">
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- WHAT IS MES --}}
{{-- ============================================= --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container text-center max-w-4xl mx-auto fade-in-up">
        <h2 class="apple-headline-sm mb-6">What Is DentalSO MES?</h2>
        <p class="text-xl leading-relaxed text-[#1d1d1f] mb-10">
            DentalSO MES is the production core of the DentalSO platform. It transforms complex lab workflows into a structured, trackable, and priority-driven system.
        </p>
    </div>
</section>

{{-- ============================================= --}}
{{-- FOUR PILLAR FEATURES (Grid) --}}
{{-- ============================================= --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        
        {{-- Feature 1: Monitoring --}}
        <div class="apple-split mb-24">
            <div class="apple-split-text fade-in-up">
                <h2 class="apple-headline-sm">Real-Time Production Floor Monitoring</h2>
                <h3 class="text-xl font-bold text-[#0071e3] mb-6">See Everything. Instantly.</h3>
                <p class="apple-body mb-6">DentalSO MES provides a live operational dashboard displaying:</p>
                <ul class="space-y-4 mb-6">
                    <li class="flex items-start"><span class="material-symbols-outlined text-[#0071e3] mr-3 mt-1 text-xl">visibility</span><span class="text-[#1d1d1f] font-medium">Active cases by production stage</span></li>
                    <li class="flex items-start"><span class="material-symbols-outlined text-[#0071e3] mr-3 mt-1 text-xl">group</span><span class="text-[#1d1d1f] font-medium">Technician workload distribution</span></li>
                    <li class="flex items-start"><span class="material-symbols-outlined text-[#ff453a] mr-3 mt-1 text-xl">warning</span><span class="text-[#1d1d1f] font-medium">Delayed or at-risk cases</span></li>
                    <li class="flex items-start"><span class="material-symbols-outlined text-[#30d158] mr-3 mt-1 text-xl">check_circle</span><span class="text-[#1d1d1f] font-medium">Completed and ready-for-delivery cases</span></li>
                    <li class="flex items-start"><span class="material-symbols-outlined text-[#0071e3] mr-3 mt-1 text-xl">precision_manufacturing</span><span class="text-[#1d1d1f] font-medium">Machine utilization</span></li>
                </ul>
                <p class="apple-body font-medium text-[#1d1d1f]">No more guessing. No more manual whiteboards. No more spreadsheet tracking.</p>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.1s;">
                <div class="bg-[#f5f5f7] rounded-3xl p-8 h-full flex items-center justify-center">
                    <span class="material-symbols-outlined text-9xl text-[#d2d2d7]">monitoring</span>
                </div>
            </div>
        </div>

        {{-- Feature 2: Tracking --}}
        <div class="apple-split apple-split--reversed mb-24">
            <div class="apple-split-text fade-in-up">
                <h2 class="apple-headline-sm">Case-by-Case Tracking from Start to Finish</h2>
                <p class="apple-body mb-6">Every case in DentalSO MES moves through structured production stages:</p>
                <div class="flex flex-wrap gap-2 text-sm font-medium text-[#1d1d1f] mb-8">
                    <span class="px-3 py-1 bg-[#f5f5f7] rounded-full border border-gray-200">Intake</span><span class="mt-1 text-gray-400">→</span>
                    <span class="px-3 py-1 bg-[#f5f5f7] rounded-full border border-gray-200">Design</span><span class="mt-1 text-gray-400">→</span>
                    <span class="px-3 py-1 bg-[#f5f5f7] rounded-full border border-gray-200">CAM</span><span class="mt-1 text-gray-400">→</span>
                    <span class="px-3 py-1 bg-[#f5f5f7] rounded-full border border-gray-200 text-center">Milling / Printing</span><span class="mt-1 text-gray-400">→</span>
                    <span class="px-3 py-1 bg-[#f5f5f7] rounded-full border border-gray-200">Finishing</span><span class="mt-1 text-gray-400">→</span>
                    <span class="px-3 py-1 bg-[#f5f5f7] rounded-full border border-gray-200 text-center">Quality Control</span><span class="mt-1 text-gray-400">→</span>
                    <span class="px-3 py-1 bg-[#f5f5f7] rounded-full border border-gray-200">Packaging</span><span class="mt-1 text-gray-400">→</span>
                    <span class="px-3 py-1 bg-[#30d158] text-white rounded-full">Delivery</span>
                </div>
                <p class="apple-body font-medium text-[#1d1d1f] mb-4">For each case, you can view:</p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center"><span class="text-[#0071e3] mr-2">•</span><span class="text-sm font-medium text-[#1d1d1f]">Current stage</span></div>
                    <div class="flex items-center"><span class="text-[#0071e3] mr-2">•</span><span class="text-sm font-medium text-[#1d1d1f]">Assigned technician</span></div>
                    <div class="flex items-center"><span class="text-[#0071e3] mr-2">•</span><span class="text-sm font-medium text-[#1d1d1f]">Time spent in stage</span></div>
                    <div class="flex items-center"><span class="text-[#0071e3] mr-2">•</span><span class="text-sm font-medium text-[#1d1d1f]">Estimated completion</span></div>
                    <div class="flex items-center"><span class="text-[#ff453a] mr-2">•</span><span class="text-sm font-medium text-[#1d1d1f]">Delivery deadline</span></div>
                    <div class="flex items-center"><span class="text-[#ff9f0a] mr-2">•</span><span class="text-sm font-medium text-[#1d1d1f]">Priority level</span></div>
                </div>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.1s;">
                <div class="bg-[#f5f5f7] rounded-3xl p-8 h-full flex items-center justify-center">
                    <span class="material-symbols-outlined text-9xl text-[#d2d2d7]">route</span>
                </div>
            </div>
        </div>

        {{-- Feature 3: Priority Scheduling --}}
        <div class="apple-split mb-24">
            <div class="apple-split-text fade-in-up">
                <h2 class="apple-headline-sm">Intelligent Priority-Based Production Scheduling</h2>
                <p class="apple-body mb-6">One of the most powerful features of DentalSO MES is automatic case prioritization. Each case is dynamically assigned a priority based on:</p>
                <ul class="space-y-4 mb-8">
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#ff9f0a] mr-4">event_busy</span><span>Delivery deadline</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#ff9f0a] mr-4">timer</span><span>Remaining production time</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#ff9f0a] mr-4">account_tree</span><span>Current production stage</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#ff9f0a] mr-4">speed</span><span>Lab capacity and workload</span></li>
                </ul>
                <div class="p-6 bg-[#fff6e5] rounded-2xl border border-[#ff9f0a]/20">
                    <p class="text-[#cc7f00] font-medium">The system continuously calculates which cases require immediate attention to prevent delays. Technicians always know what to work on next.</p>
                </div>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.1s;">
                <div class="bg-[#fff6e5] rounded-3xl p-8 h-full flex items-center justify-center">
                    <span class="material-symbols-outlined text-9xl text-[#ff9f0a]">sort</span>
                </div>
            </div>
        </div>

        {{-- Feature 4: Navigation & Prevention --}}
        <div class="grid lg:grid-cols-2 gap-10">
            <div class="apple-card apple-card--tint-blue fade-in-up">
                <div class="apple-card-inner">
                    <h3 class="text-2xl font-bold text-[#1d1d1f] mb-6">Streamlined Production Navigation</h3>
                    <p class="apple-body text-sm mb-4">DentalSO MES organizes the production queue by priority.</p>
                    <div class="mb-6">
                        <h4 class="font-bold text-[#0071e3] text-sm uppercase tracking-wide mb-2">Technicians See:</h4>
                        <ul class="space-y-1 text-sm font-medium text-[#1d1d1f]">
                            <li>• A prioritized task list</li>
                            <li>• Next best case to process</li>
                            <li>• Cases nearing deadline / QC</li>
                            <li>• Blocked cases</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-bold text-[#0071e3] text-sm uppercase tracking-wide mb-2">Supervisors See:</h4>
                        <ul class="space-y-1 text-sm font-medium text-[#1d1d1f]">
                            <li>• Bottlenecks by department</li>
                            <li>• Overloaded technicians</li>
                            <li>• Idle capacity</li>
                            <li>• Deadline risk indicators</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="apple-card apple-card--tint-green fade-in-up" style="animation-delay: 0.1s;">
                <div class="apple-card-inner">
                    <h3 class="text-2xl font-bold text-[#1d1d1f] mb-6">Prevent Delays Before They Happen</h3>
                    <p class="apple-body text-sm mb-6">DentalSO MES proactively identifies production risks:</p>
                    <ul class="space-y-3 mb-8 text-sm font-medium text-[#1d1d1f]">
                        <li class="flex items-center"><span class="material-symbols-outlined text-[#30d158] mr-3">warning</span>Cases falling behind schedule</li>
                        <li class="flex items-center"><span class="material-symbols-outlined text-[#30d158] mr-3">hourglass_bottom</span>Stages exceeding standard time</li>
                        <li class="flex items-center"><span class="material-symbols-outlined text-[#30d158] mr-3">battery_alert</span>Overcapacity alerts</li>
                        <li class="flex items-center"><span class="material-symbols-outlined text-[#30d158] mr-3">build</span>Machine downtime impact</li>
                    </ul>
                    <p class="font-bold text-[#24a044] mt-auto text-lg">Instead of reacting to late deliveries, you prevent them.</p>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- ============================================= --}}
{{-- DESIGNED SPECIFICALLY (Dark) --}}
{{-- ============================================= --}}
<section class="apple-section apple-section--dark relative overflow-hidden">
    <div class="apple-container relative z-10 flex flex-col md:flex-row items-center gap-12">
        <div class="w-full md:w-1/2 fade-in-up">
            <h2 class="apple-headline-sm text-white mb-6">Designed Specifically for Dental Laboratories</h2>
            <p class="apple-body text-gray-300 mb-8">Unlike generic manufacturing systems, DentalSO MES is tailored to dental production logic:</p>
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-white/10 rounded-xl p-4 backdrop-blur-md">
                    <p class="text-white font-medium text-sm">Case-based workflow</p>
                </div>
                <div class="bg-white/10 rounded-xl p-4 backdrop-blur-md">
                    <p class="text-white font-medium text-sm">Multi-stage prosthetic mfg</p>
                </div>
                <div class="bg-white/10 rounded-xl p-4 backdrop-blur-md">
                    <p class="text-white font-medium text-sm">Technician assignment control</p>
                </div>
                <div class="bg-white/10 rounded-xl p-4 backdrop-blur-md">
                    <p class="text-white font-medium text-sm">Quality checkpoint integration</p>
                </div>
                <div class="bg-white/10 rounded-xl p-4 backdrop-blur-md">
                    <p class="text-white font-medium text-sm">Remake tracking</p>
                </div>
                <div class="bg-white/10 rounded-xl p-4 backdrop-blur-md">
                    <p class="text-white font-medium text-sm">Delivery coordination</p>
                </div>
            </div>
            <p class="text-white font-bold text-lg mt-8 italic text-center text-[#ff9f0a]">
                "It understands dental production variability — not just assembly-line manufacturing."
            </p>
        </div>

        <div class="w-full md:w-1/2 fade-in-up" style="animation-delay: 0.1s;">
            <div class="bg-gradient-to-br from-[#1c1c1e] to-[#2c2c2e] rounded-3xl p-10 border border-white/10 shadow-2xl">
                <h3 class="text-2xl font-bold text-white mb-6 border-b border-white/10 pb-4">The Result: Predictable, On-Time Delivery</h3>
                <ul class="space-y-4">
                    <li class="flex items-center"><span class="text-[#30d158] mr-4 text-xl">✓</span><span class="text-white font-medium text-lg">Full production transparency</span></li>
                    <li class="flex items-center"><span class="text-[#30d158] mr-4 text-xl">✓</span><span class="text-white font-medium text-lg">Standardized workflows</span></li>
                    <li class="flex items-center"><span class="text-[#30d158] mr-4 text-xl">✓</span><span class="text-white font-medium text-lg">Reduced turnaround time</span></li>
                    <li class="flex items-center"><span class="text-[#30d158] mr-4 text-xl">✓</span><span class="text-white font-medium text-lg">Fewer missed deadlines</span></li>
                    <li class="flex items-center"><span class="text-[#30d158] mr-4 text-xl">✓</span><span class="text-white font-medium text-lg">Better technician productivity</span></li>
                    <li class="flex items-center"><span class="text-[#30d158] mr-4 text-xl">✓</span><span class="text-white font-medium text-lg">Improved customer satisfaction</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- WHO IS IT FOR & CTA --}}
{{-- ============================================= --}}
<section class="apple-section apple-section--cta">
    <div class="apple-container text-center">
        <div class="max-w-3xl mx-auto fade-in-up mb-16">
            <h2 class="apple-headline-sm text-white mb-8">Who Should Use DentalSO MES?</h2>
            <div class="flex flex-wrap justify-center gap-3">
                <span class="px-5 py-3 rounded-full bg-white/10 text-white backdrop-blur-sm border border-white/20">High-volume dental laboratories</span>
                <span class="px-5 py-3 rounded-full bg-white/10 text-white backdrop-blur-sm border border-white/20">Multi-department production labs</span>
                <span class="px-5 py-3 rounded-full bg-white/10 text-white backdrop-blur-sm border border-white/20">Labs with strict delivery SLAs</span>
                <span class="px-5 py-3 rounded-full bg-white/10 text-white backdrop-blur-sm border border-white/20">Growing labs scaling operations</span>
                <span class="px-5 py-3 rounded-full bg-white/10 text-white backdrop-blur-sm border border-white/20">Enterprise dental manufacturing groups</span>
            </div>
        </div>

        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-6">Ready to Take Control of Your<br>Production Floor?</h2>
            <p class="text-xl text-white/80 leading-relaxed max-w-2xl mx-auto mb-10">
                If your lab relies on manual tracking, disconnected systems, or reactive scheduling, it’s time to upgrade to a real Dental Lab MES.
            </p>
            <div class="apple-cta-group">
                <a href="{{ get_site_url() }}/yeu-cau-tu-van" class="apple-cta-primary apple-cta-primary--light">
                    Book a Live Demo of DentalSO MES
                </a>
                <a href="{{ get_site_url() }}/products/dental-case-submission-software/" class="apple-cta-secondary apple-cta-secondary--light">
                    See Real-Time Monitoring in Action <span class="apple-chevron">›</span>
                </a>
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
