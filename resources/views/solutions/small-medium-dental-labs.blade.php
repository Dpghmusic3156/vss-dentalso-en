{{-- Template Name: Solution: Small & Medium Labs --}}
@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-hero bg-white">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <span class="apple-eyebrow">Solutions for Labs</span>
            <h1 class="apple-headline mb-6">Software Solution for<br>Small & Medium Dental Labs</h1>
            <p class="text-[1.125rem] md:text-[1.375rem] font-medium text-[#1d1d1f] leading-snug max-w-3xl mx-auto mb-4">
                Simplify Operations. Stay Organized. Deliver On Time.
            </p>
            <p class="apple-hero-copy">
                Replace error-prone spreadsheets and manual tracking with a simple, structured platform. Gain full control of your lab's growing case volume without the complexity.
            </p>
            <div class="apple-cta-group mt-10">
                <a href="{{ home_url('request-demo/') }}" class="apple-cta-primary">Book a Demo</a>
                <a href="{{ home_url('contact/') }}" class="apple-cta-secondary">Contact Sales<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
            </div>
        </div>
    </div>
</section>

{{-- What You Get --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow">Features</span>
            <h2 class="apple-headline-sm">What You Get</h2>
        </div>
        <div class="grid sm:grid-cols-3 gap-6 max-w-6xl mx-auto">
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.05s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#e3f0fc]">
                        <span class="material-symbols-outlined text-[#0071e3]">folder_open</span>
                    </div>
                    <h3 class="apple-card-title">Centralized Case Management</h3>
                    <ul class="apple-card-desc space-y-2 mt-4 text-[#86868b] text-[0.9375rem] mb-4">
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#0071e3] mt-0.5">check</span> Digital case intake</li>
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#0071e3] mt-0.5">check</span> Case tracking by status</li>
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#0071e3] mt-0.5">check</span> Technician assignment</li>
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#0071e3] mt-0.5">check</span> Case history & warranty tracking</li>
                    </ul>
                    <p class="apple-card-desc italic mt-auto">Everything is organized in one system.</p>
                </div>
            </div>
            
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.1s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#fef3e2]">
                        <span class="material-symbols-outlined text-[#ff9f0a]">account_tree</span>
                    </div>
                    <h3 class="apple-card-title">Workflow Standardization</h3>
                    <ul class="apple-card-desc space-y-2 mt-4 text-[#86868b] text-[0.9375rem] mb-4">
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#ff9f0a] mt-0.5">check</span> Clear production stages</li>
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#ff9f0a] mt-0.5">check</span> Reduced miscommunication</li>
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#ff9f0a] mt-0.5">check</span> Consistent turnaround time</li>
                    </ul>
                    <p class="apple-card-desc italic mt-auto">Replace manual coordination with structured workflows.</p>
                </div>
            </div>

            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.15s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#e2f5e9]">
                        <span class="material-symbols-outlined text-[#30d158]">verified</span>
                    </div>
                    <h3 class="apple-card-title">Warranty & After-Service</h3>
                    <ul class="apple-card-desc space-y-2 mt-4 text-[#86868b] text-[0.9375rem] mb-4">
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#30d158] mt-0.5">check</span> Track warranty per case</li>
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#30d158] mt-0.5">check</span> Manage remakes efficiently</li>
                        <li class="flex items-start leading-[1.4]"><span class="material-symbols-outlined text-base mr-2 text-[#30d158] mt-0.5">check</span> Maintain customer trust</li>
                    </ul>
                    <p class="apple-card-desc italic mt-auto">No more lost or unclear warranty records.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Designed for Growing Labs --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="apple-split">
            <div class="apple-split-text fade-in-up">
                <span class="apple-eyebrow">The Platform</span>
                <h2 class="apple-headline-sm mb-4">Designed for Growing Labs</h2>
                <p class="apple-body mb-6">DentalSO helps you build a scalable foundation for growth without the operational chaos.</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#bf5af2] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Reduce operational chaos</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#bf5af2] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Improve case visibility</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#bf5af2] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Deliver on time consistently</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#bf5af2] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Build a scalable foundation for growth</span>
                    </li>
                </ul>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-[#f5f5f7] rounded-2xl shadow-lg overflow-hidden p-1">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2022/12/dental-online-lab-dashboard.png" alt="DentalSO Platform Dashboard" class="apple-split-img rounded-xl" loading="lazy">
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
                <span class="material-symbols-outlined text-4xl text-[#ff453a] mb-4">table_view</span>
                <p class="text-white font-semibold text-sm mb-1">Manual Tracking</p>
                <p class="text-[#86868b] text-xs leading-relaxed">You manage cases using Excel or paper.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.1s;">
                <span class="material-symbols-outlined text-4xl text-[#ff9f0a] mb-4">search_off</span>
                <p class="text-white font-semibold text-sm mb-1">Poor Visibility</p>
                <p class="text-[#86868b] text-xs leading-relaxed">You struggle with tracking case status.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.15s;">
                <span class="material-symbols-outlined text-4xl text-[#0a84ff] mb-4">account_tree</span>
                <p class="text-white font-semibold text-sm mb-1">Need Simplicity</p>
                <p class="text-[#86868b] text-xs leading-relaxed">You want to improve organization without complexity.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.2s;">
                <span class="material-symbols-outlined text-4xl text-[#30d158] mb-4">rocket_launch</span>
                <p class="text-white font-semibold text-sm mb-1">Scaling Up</p>
                <p class="text-[#86868b] text-xs leading-relaxed">You are growing but not ready for a full MES system yet.</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="apple-section apple-section--cta">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-6">Start building structured<br>operations today.</h2>
            <div class="apple-cta-group">
                <a href="{{ home_url('request-demo/') }}" class="apple-cta-primary apple-cta-primary--light">Book a Demo</a>
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
