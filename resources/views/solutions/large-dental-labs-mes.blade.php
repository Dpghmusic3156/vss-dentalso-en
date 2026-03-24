{{-- Template Name: Solution: Large Labs MES --}}
@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-hero bg-white">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <span class="apple-eyebrow">Solutions for Enterprise</span>
            <h1 class="apple-headline mb-6">MES Solution for Medium<br>&amp; Large Dental Laboratories</h1>
            <p class="text-[1.125rem] md:text-[1.375rem] font-medium text-[#1d1d1f] leading-snug max-w-3xl mx-auto mb-4">
                Real-Time Production Control for High-Volume Labs
            </p>
            <p class="apple-hero-copy">
                As dental labs grow, complexity increases: hundreds of cases per day, multiple departments, technician coordination challenges, and delivery deadline pressure. DentalSO MES provides the operational control required to scale efficiently.
            </p>
            <div class="apple-cta-group mt-10">
                <a href="{{ home_url('request-demo/') }}" class="apple-cta-primary">Schedule a MES Demo</a>
                <a href="{{ home_url('contact/') }}" class="apple-cta-secondary">Contact Sales<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
            </div>
        </div>
    </div>
</section>

{{-- Full Production Floor Visibility --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="apple-split">
            <div class="apple-split-text fade-in-up">
                <span class="apple-eyebrow">Visibility</span>
                <h2 class="apple-headline-sm mb-4">Full Production Floor Visibility</h2>
                <p class="apple-body mb-6">Know exactly what is happening across your lab at any given moment.</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#0071e3] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Real-time dashboard of all cases</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#0071e3] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Stage-by-stage tracking</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#0071e3] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Technician workload monitoring</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#0071e3] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Bottleneck identification</span>
                    </li>
                </ul>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden p-1">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2022/12/dental-online-lab-dashboard.png" alt="DentalSO MES Dashboard" class="apple-split-img rounded-xl">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Case-by-Case Tracking --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="apple-split apple-split--reverse">
            <div class="apple-split-text fade-in-up">
                <span class="apple-eyebrow">Traceability</span>
                <h2 class="apple-headline-sm mb-4">Case-by-Case Tracking</h2>
                <p class="apple-body mb-6">Complete transparency from start to finish. For every case, you instantly know the full picture.</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#bf5af2] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Current production stage</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#bf5af2] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Assigned technician</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#bf5af2] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Time spent in process</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#bf5af2] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Delivery deadline &amp; priority level</span>
                    </li>
                </ul>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-[#f5f5f7] rounded-2xl shadow-lg overflow-hidden p-1">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2022/08/clinic-dashboard.png" alt="DentalSO Case Production Tracking" class="apple-split-img rounded-xl">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Intelligent Priority-Based Scheduling --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="apple-split">
            <div class="apple-split-text fade-in-up">
                <span class="apple-eyebrow">Automation</span>
                <h2 class="apple-headline-sm mb-4">Intelligent Priority<br>Based Scheduling</h2>
                <p class="apple-body mb-6">Technicians always know what to work on next. DentalSO MES automatically prioritizes cases to ensure maximum efficiency.</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#ff9f0a] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Prioritize by delivery deadlines</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#ff9f0a] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Factor in production capacity</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#ff9f0a] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Calculate remaining work hours</span>
                    </li>
                </ul>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden p-1">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2022/12/dental-online-lab-dashboard.png" alt="DentalSO Intelligent Scheduling" class="apple-split-img rounded-xl">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Prevent Delays & Improve Throughput --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="apple-split apple-split--reverse">
            <div class="apple-split-text fade-in-up">
                <span class="apple-eyebrow">Throughput</span>
                <h2 class="apple-headline-sm mb-4">Prevent Delays<br>&amp; Improve Throughput</h2>
                <p class="apple-body mb-6">Move from reactive firefighting to proactive management with real-time operational intel.</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Deadline risk alerts</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Overload detection</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Production bottleneck insights</span>
                    </li>
                </ul>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-[#f5f5f7] rounded-2xl shadow-lg overflow-hidden p-1">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2022/08/clinic-dashboard.png" alt="DentalSO MES Reports" class="apple-split-img rounded-xl">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Built for Scaling Operations --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow">Scalability</span>
            <h2 class="apple-headline-sm">Built for Scaling Operations</h2>
            <p class="apple-body mt-3 max-w-xl mx-auto">
                DentalSO MES is the ideal solution for labs making the leap to enterprise scale.
            </p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-5xl mx-auto">
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.05s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#e3f0fc]">
                        <span class="material-symbols-outlined text-[#0071e3]">business</span>
                    </div>
                    <p class="text-[#1d1d1f] font-semibold text-[0.9375rem] mt-4">High-Volume Production Labs</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.1s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#fef3e2]">
                        <span class="material-symbols-outlined text-[#ff9f0a]">account_tree</span>
                    </div>
                    <p class="text-[#1d1d1f] font-semibold text-[0.9375rem] mt-4">Multi-Department Operations</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.15s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#ece5f6]">
                        <span class="material-symbols-outlined text-[#bf5af2]">fact_check</span>
                    </div>
                    <p class="text-[#1d1d1f] font-semibold text-[0.9375rem] mt-4">Strict Delivery SLAs</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.2s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#e2f5e9]">
                        <span class="material-symbols-outlined text-[#30d158]">precision_manufacturing</span>
                    </div>
                    <p class="text-[#1d1d1f] font-semibold text-[0.9375rem] mt-4">Digital Manufacturing Transition</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- When Is This Right For You — Dark Section --}}
<section class="apple-section apple-section--dark">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow apple-eyebrow--light">Is this right for you?</span>
            <h2 class="apple-headline text-white">When Is This Solution<br>Right for You?</h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 max-w-4xl mx-auto">
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.05s;">
                <span class="material-symbols-outlined text-4xl text-[#ff453a] mb-4">visibility_off</span>
                <p class="text-white font-semibold text-sm mb-1">Poor Visibility</p>
                <p class="text-[#86868b] text-xs leading-relaxed">You struggle to track production in real time.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.1s;">
                <span class="material-symbols-outlined text-4xl text-[#ff9f0a] mb-4">history_toggle_off</span>
                <p class="text-white font-semibold text-sm mb-1">Missed Deadlines</p>
                <p class="text-[#86868b] text-xs leading-relaxed">You miss deadlines due to poor visibility.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.15s;">
                <span class="material-symbols-outlined text-4xl text-[#0a84ff] mb-4">groups</span>
                <p class="text-white font-semibold text-sm mb-1">Large Teams</p>
                <p class="text-[#86868b] text-xs leading-relaxed">You manage large teams of technicians.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.2s;">
                <span class="material-symbols-outlined text-4xl text-[#30d158] mb-4">account_tree</span>
                <p class="text-white font-semibold text-sm mb-1">Need Structure</p>
                <p class="text-[#86868b] text-xs leading-relaxed">You need structured production control.</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="apple-section apple-section--cta">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-6">Take full control of<br>your production floor.</h2>
            <div class="apple-cta-group">
                <a href="{{ home_url('request-demo/') }}" class="apple-cta-primary apple-cta-primary--light">Schedule a MES Demo</a>
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
