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
            <p class="apple-hero-copy hidden">
                Replace error-prone spreadsheets and manual tracking with a simple, structured platform. Gain full control of your lab's growing case volume without the complexity.
            </p>
            <div class="apple-cta-group mt-10">
                <a href="{{ home_url('request-demo/') }}" class="apple-cta-primary">Book a Demo</a>
                <a href="{{ home_url('contact/') }}" class="apple-cta-secondary">Contact Sales <span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
            </div>
        </div>
        {{-- Hero image --}}
        <div class="apple-hero-img-wrapper fade-in-up" style="transition-delay: 200ms;">
            <img src="@asset('images/mes-dashboard-hero.webp')" alt="DentalSO MES Dashboard" class="apple-hero-img animate-float">
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

{{-- When Is This Right — Zigzag Section --}}
<div class="pt-16 pb-32 overflow-hidden">

    {{-- Section Header --}}
    <header class="max-w-4xl mx-auto px-8 text-center mb-24 fade-in-up">
        <span class="apple-eyebrow">Is this right for you?</span>
        <h2 class="apple-headline mb-6">When Is This Solution<br>Right for You?</h2>
    </header>

    {{-- Item 1: Manual Tracking --}}
    <section class="max-w-7xl mx-auto px-8 mb-32 fade-in-up">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <h3 class="apple-headline-sm">Manual Tracking</h3>
                <p class="text-lg text-[#1d1d1f] leading-relaxed mt-4">
                    You manage cases using Excel or paper. As your lab grows, spreadsheets become error-prone and time-consuming.
                </p>
                <div class="mt-8 flex gap-4">
                    <div class="p-4 rounded-xl bg-[#f5f5f7]">
                        <span class="block text-2xl font-semibold text-[#34a853]">80%</span>
                        <span class="text-sm text-[#86868b]">Time spent on manual entry</span>
                    </div>
                    <div class="p-4 rounded-xl bg-[#f5f5f7]">
                        <span class="block text-2xl font-semibold text-[#34a853]">3x</span>
                        <span class="text-sm text-[#86868b]">More errors vs digital</span>
                    </div>
                </div>
            </div>
            <div class="relative group">
                <div class="absolute -inset-4 rounded-3xl blur-2xl transition-colors" style="background-color: rgba(52,168,83,0.05);"></div>
                <div class="relative rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    <img src="@asset('images/zigzag_manual_tracking.webp')" alt="Managing cases with Excel spreadsheets and paper" class="w-full h-auto object-cover" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Item 2: Poor Visibility --}}
    <section class="bg-[#f5f5f7] py-24 fade-in-up">
        <div class="max-w-7xl mx-auto px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="order-2 md:order-1 relative group">
                    <div class="absolute -inset-4 rounded-3xl blur-2xl transition-colors" style="background-color: rgba(255,159,10,0.1);"></div>
                    <div class="relative rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                        <img src="@asset('images/zigzag_poor_visibility.webp')" alt="Struggling to track case status" class="w-full h-auto object-cover" loading="lazy">
                    </div>
                </div>
                <div class="order-1 md:order-2">
                    <h3 class="apple-headline-sm">Poor Visibility</h3>
                    <p class="text-lg text-[#1d1d1f] leading-relaxed mt-4">
                        You struggle with tracking case status. Without real-time visibility, deadlines slip and clients lose trust.
                    </p>
                    <ul class="mt-8 space-y-4">
                        <li class="flex items-center gap-3 text-[#1d1d1f]">
                            <span class="material-symbols-outlined" style="color: #ff9f0a;" aria-hidden="true">done_all</span>
                            <span>No idea where each case is in production</span>
                        </li>
                        <li class="flex items-center gap-3 text-[#1d1d1f]">
                            <span class="material-symbols-outlined" style="color: #ff9f0a;" aria-hidden="true">done_all</span>
                            <span>Can't answer client status inquiries quickly</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Item 3: Need Simplicity --}}
    <section class="max-w-7xl mx-auto px-8 my-32 fade-in-up">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <h3 class="apple-headline-sm">Need Simplicity</h3>
                <p class="text-lg text-[#1d1d1f] leading-relaxed mt-4">
                    You want to improve organization without complexity. A simple, structured system that your team can adopt immediately.
                </p>
                <div class="mt-8 p-6 rounded-2xl bg-white border border-gray-100 shadow-sm">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-10 h-10 rounded-full flex items-center justify-center" style="background-color: rgba(10,132,255,0.1);">
                            <span class="material-symbols-outlined text-xl" style="color: #0a84ff;" aria-hidden="true">touch_app</span>
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-[#1d1d1f]">Easy onboarding</div>
                            <div class="text-xs text-[#86868b]">Get started in under 30 minutes</div>
                        </div>
                    </div>
                    <div class="w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                        <div class="h-full w-[90%]" style="background-color: #0a84ff;"></div>
                    </div>
                </div>
            </div>
            <div class="relative group">
                <div class="absolute -inset-4 rounded-3xl blur-2xl transition-colors" style="background-color: rgba(10,132,255,0.05);"></div>
                <div class="relative rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    <img src="@asset('images/zigzag_need_simplicity.webp')" alt="Simple and easy-to-use interface" class="w-full h-auto object-cover" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Item 4: Scaling Up --}}
    <section class="py-24 fade-in-up" style="background-color: rgba(48,209,88,0.04);">
        <div class="max-w-7xl mx-auto px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="order-2 md:order-1 relative group">
                    <div class="absolute -inset-4 rounded-3xl blur-2xl transition-colors" style="background-color: rgba(48,209,88,0.08);"></div>
                    <div class="relative rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                        <img src="@asset('images/zigzag_scaling_up.webp')" alt="Dental lab scaling up operations" class="w-full h-auto object-cover" loading="lazy">
                    </div>
                </div>
                <div class="order-1 md:order-2">
                    <h3 class="apple-headline-sm">Scaling Up</h3>
                    <p class="text-lg text-[#1d1d1f] leading-relaxed mt-4">
                        You are growing but not ready for a full MES system yet. DentalSO gives you room to scale without overcommitting.
                    </p>
                    <div class="mt-8 flex flex-col gap-4">
                        <div class="flex items-start gap-4 p-4 rounded-xl bg-white/50 backdrop-blur-sm border border-gray-100">
                            <span class="material-symbols-outlined" style="color: #30d158;" aria-hidden="true">trending_up</span>
                            <div>
                                <div class="font-semibold text-[#1d1d1f]">Start small</div>
                                <p class="text-sm text-[#86868b]">Begin with core features, add modules as you grow.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 rounded-xl bg-white/50 backdrop-blur-sm border border-gray-100">
                            <span class="material-symbols-outlined" style="color: #30d158;" aria-hidden="true">upgrade</span>
                            <div>
                                <div class="font-semibold text-[#1d1d1f]">Upgrade when ready</div>
                                <p class="text-sm text-[#86868b]">Seamlessly move to MES when you need it.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

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
