@extends('layouts.app')

@section('content')

{{-- ============================================= --}}
{{-- HERO --}}
{{-- ============================================= --}}
<section class="apple-hero relative overflow-hidden bg-white">
    <div class="apple-container text-center relative z-10">
        <div class="fade-in-up">
            <h1 class="apple-hero-headline">DentalSO Connect</h1>
            <h2 class="apple-hero-subheadline text-2xl lg:text-3xl mt-2 mb-6 max-w-4xl mx-auto">
                Case Submission & Production Tracking App for Dental Labs, Clinics, and Sales Partners
            </h2>
            <p class="apple-hero-copy font-medium max-w-3xl mx-auto">
                A Modern Partner App — Built for Dental Streamlined Operations
            </p>
            <p class="apple-body text-lg max-w-4xl mx-auto mt-6 text-[#86868b]">
                DentalSO Connect is a secure collaboration app that allows sales agents, dental clinics, and partner labs to submit cases, track production progress, share files, and communicate seamlessly with your dental laboratory.
            </p>
            <p class="apple-body text-lg max-w-4xl mx-auto mt-4 text-[#86868b]">
                Designed as an extension of the DentalSO ecosystem, Connect ensures every case flows digitally from intake to delivery — fully traceable, organized, and synchronized with lab production.
            </p>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- WHY CONNECT --}}
{{-- ============================================= --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="apple-split">
            <div class="apple-split-text fade-in-up">
                <h2 class="apple-headline-sm">Why DentalSO Connect?</h2>
                <p class="apple-body mb-6">Manual prescriptions, emails, messaging apps, and scattered files create delays, errors, and remake risks.</p>
                <p class="apple-body font-medium mb-4 text-[#1d1d1f]">DentalSO Connect centralizes everything:</p>
                <ul class="space-y-4">
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Digital case submission</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Real-time production tracking</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Secure file and image sharing</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Notes and internal communication</span></li>
                    <li class="apple-checklist-item"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Case history and warranty lookup</span></li>
                </ul>
                <p class="apple-body font-medium mt-6 text-[#1d1d1f]">All connected directly to your lab’s production system.</p>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.1s;">
                <img src="{{ get_site_url() }}/wp-content/uploads/2022/07/clinic.png" class="apple-split-img rounded-3xl shadow-[0_20px_60px_rgba(0,0,0,0.08)]">
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- FOR EVERY PARTNER --}}
{{-- ============================================= --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <h2 class="apple-headline-sm">Built for Every Partner in Your Network</h2>
        </div>
        <div class="grid lg:grid-cols-3 gap-6">
            {{-- Clinics --}}
            <div class="apple-card apple-card--tint-blue fade-in-up" style="animation-delay: 0.1s;">
                <div class="apple-card-inner">
                    <div class="mb-6"><span class="material-symbols-outlined text-[#0071e3] text-5xl">local_hospital</span></div>
                    <h3 class="text-2xl font-bold text-[#1d1d1f] mb-4">For Dental Clinics</h3>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start"><span class="text-[#0071e3] mr-2">•</span><span class="text-[#1d1d1f] text-sm tracking-tight leading-snug">Submit cases online with structured digital prescriptions</span></li>
                        <li class="flex items-start"><span class="text-[#0071e3] mr-2">•</span><span class="text-[#1d1d1f] text-sm tracking-tight leading-snug">Upload intraoral scans, photos, and attachments</span></li>
                        <li class="flex items-start"><span class="text-[#0071e3] mr-2">•</span><span class="text-[#1d1d1f] text-sm tracking-tight leading-snug">Track real-time case status</span></li>
                        <li class="flex items-start"><span class="text-[#0071e3] mr-2">•</span><span class="text-[#1d1d1f] text-sm tracking-tight leading-snug">Receive production updates instantly</span></li>
                        <li class="flex items-start"><span class="text-[#0071e3] mr-2">•</span><span class="text-[#1d1d1f] text-sm tracking-tight leading-snug">Access full case history and warranty records</span></li>
                    </ul>
                    <p class="font-medium text-[#0071e3] mt-auto">Result: Clear communication. Fewer remakes. Faster turnaround.</p>
                </div>
            </div>
            {{-- Sales --}}
            <div class="apple-card apple-card--tint-green fade-in-up" style="animation-delay: 0.2s;">
                <div class="apple-card-inner">
                    <div class="mb-6"><span class="material-symbols-outlined text-[#30d158] text-5xl">supervisor_account</span></div>
                    <h3 class="text-2xl font-bold text-[#1d1d1f] mb-4">For Sales Agents</h3>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start"><span class="text-[#30d158] mr-2">•</span><span class="text-[#1d1d1f] text-sm tracking-tight leading-snug">Create and manage clinic cases</span></li>
                        <li class="flex items-start"><span class="text-[#30d158] mr-2">•</span><span class="text-[#1d1d1f] text-sm tracking-tight leading-snug">Monitor production progress across multiple accounts</span></li>
                        <li class="flex items-start"><span class="text-[#30d158] mr-2">•</span><span class="text-[#1d1d1f] text-sm tracking-tight leading-snug">Communicate directly with lab teams</span></li>
                        <li class="flex items-start"><span class="text-[#30d158] mr-2">•</span><span class="text-[#1d1d1f] text-sm tracking-tight leading-snug">Maintain organized documentation</span></li>
                    </ul>
                    <p class="font-medium text-[#24a044] mt-auto">Result: Improved service quality and stronger client relationships.</p>
                </div>
            </div>
            {{-- Partner Labs --}}
            <div class="apple-card apple-card--tint-purple fade-in-up" style="animation-delay: 0.3s;">
                <div class="apple-card-inner">
                    <div class="mb-6"><span class="material-symbols-outlined text-[#bf5af2] text-5xl">precision_manufacturing</span></div>
                    <h3 class="text-2xl font-bold text-[#1d1d1f] mb-4">For Partner Labs</h3>
                    <p class="text-sm font-medium text-[#86868b] uppercase tracking-wide mb-3">(Outsource / Insource Model)</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start"><span class="text-[#bf5af2] mr-2">•</span><span class="text-[#1d1d1f] text-sm tracking-tight leading-snug">Submit outsourcing cases digitally</span></li>
                        <li class="flex items-start"><span class="text-[#bf5af2] mr-2">•</span><span class="text-[#1d1d1f] text-sm tracking-tight leading-snug">Track stage-by-stage production updates</span></li>
                        <li class="flex items-start"><span class="text-[#bf5af2] mr-2">•</span><span class="text-[#1d1d1f] text-sm tracking-tight leading-snug">Share design files securely</span></li>
                        <li class="flex items-start"><span class="text-[#bf5af2] mr-2">•</span><span class="text-[#1d1d1f] text-sm tracking-tight leading-snug">Reduce email dependency</span></li>
                    </ul>
                    <p class="font-medium text-[#a23be0] mt-auto">Result: Transparent collaboration between labs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- CORE FEATURES --}}
{{-- ============================================= --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <h2 class="apple-headline">Core Features</h2>
        </div>
        
        <div class="grid md:grid-cols-2 gap-10 lg:gap-16">
            <div class="fade-in-up">
                <h3 class="text-2xl font-bold text-[#1d1d1f] mb-3">1. Digital Case Submission</h3>
                <p class="apple-body text-[#86868b] mb-10">Structured forms ensure complete and accurate case data, minimizing missing information and production delays.</p>

                <h3 class="text-2xl font-bold text-[#1d1d1f] mb-3">2. Real-Time Production Tracking</h3>
                <p class="apple-body text-[#86868b] mb-3">Partners can monitor each stage:</p>
                <div class="flex flex-wrap gap-2 text-sm font-medium text-[#1d1d1f] mb-3">
                    <span class="px-3 py-1 bg-white rounded-full border border-gray-200 shadow-sm">Design</span><span class="mt-1 text-gray-400">→</span>
                    <span class="px-3 py-1 bg-white rounded-full border border-gray-200 shadow-sm">Milling</span><span class="mt-1 text-gray-400">→</span>
                    <span class="px-3 py-1 bg-white rounded-full border border-gray-200 shadow-sm">Finishing</span><span class="mt-1 text-gray-400">→</span>
                    <span class="px-3 py-1 bg-white rounded-full border border-gray-200 shadow-sm">QC</span><span class="mt-1 text-gray-400">→</span>
                    <span class="px-3 py-1 bg-[#0071e3] text-white rounded-full shadow-sm">Delivery</span>
                </div>
                <p class="apple-body text-[#86868b] mb-10">No more “What’s the status?” phone calls.</p>

                <h3 class="text-2xl font-bold text-[#1d1d1f] mb-3">3. Secure File & Image Sharing</h3>
                <ul class="space-y-2 text-[#86868b] mb-3">
                    <li>• STL files</li>
                    <li>• Intraoral scans</li>
                    <li>• X-rays</li>
                    <li>• Photos</li>
                    <li>• Design revisions</li>
                </ul>
                <p class="apple-body text-[#86868b] mb-10">All stored securely under each case record.</p>
            </div>
            
            <div class="fade-in-up" style="animation-delay: 0.1s;">
                <h3 class="text-2xl font-bold text-[#1d1d1f] mb-3">4. Notes & Communication Timeline</h3>
                <p class="apple-body text-[#86868b] mb-3">Maintain a clear communication log per case:</p>
                <ul class="space-y-2 text-[#86868b] mb-3">
                    <li>• Special instructions</li>
                    <li>• Adjustments</li>
                    <li>• Approval confirmations</li>
                    <li>• Delivery updates</li>
                </ul>
                <p class="apple-body text-[#86868b] mb-10">Everything traceable and organized.</p>

                <h3 class="text-2xl font-bold text-[#1d1d1f] mb-3">5. Enterprise-Level Data Security</h3>
                <ul class="space-y-2 text-[#86868b] mb-3">
                    <li>• SSL encryption</li>
                    <li>• Secure cloud infrastructure</li>
                    <li>• Role-based access control</li>
                    <li>• Audit trail logging</li>
                </ul>
                <p class="apple-body text-[#86868b] mb-10">Patient and production data stay protected.</p>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- FULLY INTEGRATED & ECOSYSTEM (Dark) --}}
{{-- ============================================= --}}
<section class="apple-section apple-section--dark relative overflow-hidden">
    <div class="apple-container relative z-10">
        <div class="apple-split">
            <div class="apple-split-text fade-in-up">
                <h2 class="apple-headline-sm text-white mb-6">Fully Integrated with DentalSO MES</h2>
                <p class="apple-body text-gray-300 mb-6">Unlike standalone prescription apps, DentalSO Connect is directly integrated with:</p>
                <ul class="space-y-4 mb-6">
                    <li class="apple-checklist-item text-gray-200"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>DentalSO Lab MES</span></li>
                    <li class="apple-checklist-item text-gray-200"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Case management system</span></li>
                    <li class="apple-checklist-item text-gray-200"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Production scheduling</span></li>
                    <li class="apple-checklist-item text-gray-200"><span class="material-symbols-outlined text-[#0071e3] mr-4">check_circle</span><span>Quality control workflow</span></li>
                </ul>
                <div class="bg-white/10 rounded-2xl p-6 backdrop-blur-lg border border-white/20 mt-8">
                    <p class="text-white font-medium mb-2">That means: When a clinic submits a case → It automatically enters the lab production workflow.</p>
                    <p class="text-white font-bold text-lg text-[#0071e3]">No double entry. No data loss. No manual retyping.</p>
                </div>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.1s;">
                <h2 class="apple-headline-sm text-white mb-6">Dental Streamlined Operations — Extended to Your Entire Network</h2>
                <p class="apple-body text-gray-300 mb-8">DentalSO Connect transforms your lab into a digitally connected ecosystem. From clinics to sales teams to partner labs — everyone operates within one synchronized platform.</p>
                
                <div class="grid grid-cols-2 gap-8">
                    <div>
                        <h4 class="text-[#ff453a] font-bold mb-4 uppercase text-sm tracking-widest">This Reduces</h4>
                        <ul class="space-y-2 text-gray-400 text-sm font-medium">
                            <li>↓ Case intake errors</li>
                            <li>↓ Communication delays</li>
                            <li>↓ Production bottlenecks</li>
                            <li>↓ Administrative workload</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-[#30d158] font-bold mb-4 uppercase text-sm tracking-widest">And Increases</h4>
                        <ul class="space-y-2 text-white text-sm font-medium">
                            <li>↑ Transparency</li>
                            <li>↑ Efficiency</li>
                            <li>↑ Customer satisfaction</li>
                            <li>↑ Operational scalability</li>
                        </ul>
                    </div>
                </div>
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
            <h2 class="apple-headline-sm text-white mb-8">Who Is DentalSO Connect For?</h2>
            <div class="flex flex-wrap justify-center gap-3">
                <span class="px-5 py-3 rounded-full bg-white/10 text-white backdrop-blur-sm border border-white/20">Growing dental laboratories</span>
                <span class="px-5 py-3 rounded-full bg-white/10 text-white backdrop-blur-sm border border-white/20">Multi-branch lab enterprises</span>
                <span class="px-5 py-3 rounded-full bg-white/10 text-white backdrop-blur-sm border border-white/20">Labs with external sales agents</span>
                <span class="px-5 py-3 rounded-full bg-white/10 text-white backdrop-blur-sm border border-white/20">Labs outsourcing production stages</span>
                <span class="px-5 py-3 rounded-full bg-white/10 text-white backdrop-blur-sm border border-white/20">Clinics seeking digital case submission</span>
            </div>
        </div>

        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-6">Ready to Digitally Connect<br>Your Lab Network?</h2>
            <p class="text-xl text-white/80 leading-relaxed max-w-2xl mx-auto mb-10">
                Eliminate emails. Replace paper prescriptions. Streamline collaboration.
            </p>
            <div class="apple-cta-group">
                <a href="{{ get_site_url() }}/yeu-cau-tu-van" class="apple-cta-primary apple-cta-primary--light">
                    Request a Demo of DentalSO Connect
                </a>
                <a href="{{ get_site_url() }}/products/dental-lab-mes/" class="apple-cta-secondary apple-cta-secondary--light">
                    See How It Integrates <span class="apple-chevron">›</span>
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