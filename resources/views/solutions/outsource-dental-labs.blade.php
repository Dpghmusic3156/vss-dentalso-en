{{-- Template Name: Solution: Outsource & Export Labs --}}
@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-hero bg-white">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <span class="apple-eyebrow">Solutions for Export</span>
            <h1 class="apple-headline mb-6">Software for Outsource<br>&amp; Export Dental Labs</h1>
            <p class="text-[1.125rem] md:text-[1.375rem] font-medium text-[#1d1d1f] leading-snug max-w-3xl mx-auto mb-4">
                Manage Global Clients. Streamline Cross-Border Operations.
            </p>
            <p class="apple-hero-copy">
                Outsource dental labs face unique challenges: international clients, multiple languages, currency differences, complex communication, and export documentation. DentalSO is built to support global dental lab operations at scale.
            </p>
            <div class="apple-cta-group mt-10">
                <a href="{{ home_url('request-demo/') }}" class="apple-cta-primary">Request a Demo</a>
                <a href="{{ home_url('contact/') }}" class="apple-cta-secondary">Contact Sales<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
            </div>
        </div>
    </div>
</section>

{{-- International Collaboration --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow">Global Features</span>
            <h2 class="apple-headline-sm">Built for International Collaboration.</h2>
        </div>
        <div class="grid sm:grid-cols-2 gap-6 max-w-4xl mx-auto">
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.05s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#e3f0fc]">
                        <span class="material-symbols-outlined text-[#0071e3]">language</span>
                    </div>
                    <h3 class="apple-card-title">Multi-Language Support</h3>
                    <p class="apple-card-desc mt-4">Communicate with clinics and partners across different regions with fully localized interfaces.</p>
                </div>
            </div>
            
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.1s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#fef3e2]">
                        <span class="material-symbols-outlined text-[#ff9f0a]">payments</span>
                    </div>
                    <h3 class="apple-card-title">Multi-Currency Management</h3>
                    <ul class="apple-card-desc space-y-2 mt-4 text-[#86868b] text-[0.9375rem] mb-4">
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#ff9f0a] mt-0.5">check</span> Flexible pricing by customer</li>
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#ff9f0a] mt-0.5">check</span> Currency conversion support</li>
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#ff9f0a] mt-0.5">check</span> Accurate financial tracking</li>
                    </ul>
                </div>
            </div>

            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.15s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#e2f5e9]">
                        <span class="material-symbols-outlined text-[#30d158]">cloud_upload</span>
                    </div>
                    <h3 class="apple-card-title">Digital Case Submission</h3>
                    <ul class="apple-card-desc space-y-2 mt-4 text-[#86868b] text-[0.9375rem] mb-4">
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#30d158] mt-0.5">check</span> Clinics submit cases online</li>
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#30d158] mt-0.5">check</span> Upload scans, images, and files</li>
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#30d158] mt-0.5">check</span> Track production progress in real time</li>
                    </ul>
                    <p class="apple-card-desc italic mt-auto">Reduce email dependency and communication errors.</p>
                </div>
            </div>

            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.2s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#ece5f6]">
                        <span class="material-symbols-outlined text-[#bf5af2]">local_shipping</span>
                    </div>
                    <h3 class="apple-card-title">Export Workflow Support</h3>
                    <ul class="apple-card-desc space-y-2 mt-4 text-[#86868b] text-[0.9375rem] mb-4">
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#bf5af2] mt-0.5">check</span> Case documentation tracking</li>
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#bf5af2] mt-0.5">check</span> Delivery coordination</li>
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#bf5af2] mt-0.5">check</span> Order traceability</li>
                    </ul>
                    <p class="apple-card-desc italic mt-auto">Ensure smooth international operations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Full Transparency --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="apple-split">
            <div class="apple-split-text fade-in-up">
                <span class="apple-eyebrow">Build Trust</span>
                <h2 class="apple-headline-sm mb-4">Full Transparency for Global Clients</h2>
                <p class="apple-body mb-6">Build trust with international partners by offering complete visibility into the production process.</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#0071e3] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Real-time case tracking</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#0071e3] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Clear production updates</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#0071e3] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Structured communication</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#0071e3] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Reliable delivery timelines</span>
                    </li>
                </ul>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-[#f5f5f7] rounded-2xl shadow-lg overflow-hidden p-1">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2022/08/clinic-dashboard.png" alt="DentalSO Client Dashboard" class="apple-split-img rounded-xl" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- When Is This Right — Dark Section --}}
<section class="apple-section apple-section--dark">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow apple-eyebrow--light">Is this right for you?</span>
            <h2 class="apple-headline text-white">When Is This Solution<br>Right for You?</h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 max-w-4xl mx-auto">
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.05s;">
                <span class="material-symbols-outlined text-4xl text-[#ff453a] mb-4">public</span>
                <p class="text-white font-semibold text-sm mb-1">Global Clients</p>
                <p class="text-[#86868b] text-xs leading-relaxed">You work extensively with overseas clients.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.1s;">
                <span class="material-symbols-outlined text-4xl text-[#ff9f0a] mb-4">currency_exchange</span>
                <p class="text-white font-semibold text-sm mb-1">Multi-Currency</p>
                <p class="text-[#86868b] text-xs leading-relaxed">You manage multiple currencies and pricing structures.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.15s;">
                <span class="material-symbols-outlined text-4xl text-[#0a84ff] mb-4">mail_lock</span>
                <p class="text-white font-semibold text-sm mb-1">Communication Gaps</p>
                <p class="text-[#86868b] text-xs leading-relaxed">You rely heavily on email and face communication delays.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.2s;">
                <span class="material-symbols-outlined text-4xl text-[#30d158] mb-4">show_chart</span>
                <p class="text-white font-semibold text-sm mb-1">Growth Readiness</p>
                <p class="text-[#86868b] text-xs leading-relaxed">You want to scale your export operations systematically.</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="apple-section apple-section--cta">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-6">Scale your lab globally<br>with confidence.</h2>
            <div class="apple-cta-group">
                <a href="{{ home_url('request-demo/') }}" class="apple-cta-primary apple-cta-primary--light">Request a Demo</a>
                <a href="{{ home_url('contact/') }}" class="apple-cta-secondary apple-cta-secondary--light">Contact Sales<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
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
