@extends('layouts.app')

@section('content')

{{-- ============================================= --}}
{{-- SECTION 1: HERO --}}
{{-- Apple-style: Massive centered text, gradient bg, CTA pills --}}
{{-- ============================================= --}}
<section class="apple-hero relative overflow-hidden">
    {{-- Subtle gradient background --}}
    <div class="absolute inset-0 bg-gradient-to-b from-[#fbfbfd] via-white to-[#f5f5f7]"></div>
    <div class="apple-container text-center relative z-10">
        <div class="fade-in-up">
            <p class="apple-hero-headline fade-in-up fade-delay-1">
                <span style="background: linear-gradient(90deg, #f9ab00, #34a853, #4285f4); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">DentalSO</span>
            </p>
            <h1 class="apple-hero-subheadline fade-in-up fade-delay-2">
                Comprehensive Dental Laboratory Management Platform
            </h1>
            <h2 class="fade-in-up fade-delay-3 text-2xl md:text-3xl font-semibold text-[#1d1d1f] tracking-tight mt-6 mb-8">
                All in one unified platform
            </h2>
            <div class="apple-cta-group fade-in-up fade-delay-4">
                <a href="{{ home_url('request-demo/') }}" class="apple-cta-primary apple-press">
                    Book a Demo
                </a>
                <a href="#solutions" class="apple-cta-secondary apple-press">
                    Learn more <span class="apple-chevron">›</span>
                </a>
            </div>
        </div>
        {{-- Hero image --}}
        <div class="apple-hero-img-wrapper fade-in-up" style="transition-delay: 200ms;">
            <img src="@asset('images/dental-platform-mockup.webp')" alt="DentalSO: The Complete Dental Lab Software Ecosystem for Streamlined Operations" class="apple-hero-img animate-float">
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- SECTION 2: ONE PLATFORM. THREE POWERFUL PRODUCTS --}}
{{-- Bold product split cards with per-solution color identity --}}
{{-- ============================================= --}}
<section id="solutions" class="apple-section bg-[var(--apple-gray-light)]">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 lg:mb-20 fade-in-up">
            <h2 class="apple-headline">One Platform<br>Three Powerful Products</h2>
        </div>
        <div class="space-y-12 lg:space-y-24">
            {{-- Solution 1: DentalSO Platform --}}
            <div class="fade-in-up" style="transition-delay: 0ms;">
                <div class="apple-split solution-card solution-card--blue bg-white rounded-[2.5rem] p-8 md:p-12 lg:p-16 shadow-sm hover:shadow-[0_20px_40px_rgb(0,0,0,0.1)] hover:-translate-y-3 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)] group">
                    <div class="apple-split-media solution-card__media">
                        <img src="@asset('images/dental-platform-mockup.webp')" alt="DentalSO Platform" class="apple-split-img rounded-2xl relative z-10 group-hover:scale-[1.03] transition-transform duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]" loading="lazy">
                    </div>
                    <div class="apple-split-text">
                        <span class="solution-pill solution-pill--blue">Lab Management</span>
                        <h3 class="apple-headline-sm font-bold mt-4">DentalSO Platform</h3>
                        <p class="apple-body mb-10 text-[#86868b]">
                            Comprehensive dental laboratory management software for case control, workflow standardization, quality assurance, and analytics.
                        </p>
                        <a href="{{ home_url('products/dental-lab-software/') }}" class="solution-cta">
                            Learn more <span class="solution-cta__arrow transition-transform duration-300 group-hover:translate-x-2 inline-block">→</span>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Solution 2: DentalSO MES --}}
            <div class="fade-in-up" style="transition-delay: 100ms;">
                <div class="apple-split apple-split--reverse solution-card solution-card--green bg-white rounded-[2.5rem] p-8 md:p-12 lg:p-16 shadow-sm hover:shadow-[0_20px_40px_rgb(0,0,0,0.1)] hover:-translate-y-3 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)] group">
                    <div class="apple-split-media solution-card__media">
                        <img src="@asset('images/mes-dashboard-hero.webp')" alt="DentalSO MES" class="apple-split-img rounded-2xl relative z-10 group-hover:scale-[1.03] transition-transform duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]" loading="lazy">
                    </div>
                    <div class="apple-split-text">
                        <span class="solution-pill solution-pill--green">Production Floor</span>
                        <h3 class="apple-headline-sm font-bold mt-4">DentalSO MES</h3>
                        <p class="apple-body mb-10 text-[#86868b]">
                            Real-time Manufacturing Execution System for monitoring production floor activity, technician workload, and deadline-based prioritization.
                        </p>
                        <a href="{{ home_url('products/dental-lab-mes/') }}" class="solution-cta solution-cta--green">
                            Learn more <span class="solution-cta__arrow transition-transform duration-300 group-hover:translate-x-2 inline-block">→</span>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Solution 3: DentalSO Connect --}}
            <div class="fade-in-up" style="transition-delay: 200ms;">
                <div class="apple-split solution-card solution-card--orange bg-white rounded-[2.5rem] p-8 md:p-12 lg:p-16 shadow-sm hover:shadow-[0_20px_40px_rgb(0,0,0,0.1)] hover:-translate-y-3 transition-all duration-500 ease-[cubic-bezier(0.25,1,0.5,1)] group">
                    <div class="apple-split-media solution-card__media">
                        <img src="@asset('images/dentalso-connect-illustration.webp')" alt="DentalSO Connect" class="apple-split-img rounded-2xl relative z-10 group-hover:scale-[1.03] transition-transform duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]" loading="lazy">
                    </div>
                    <div class="apple-split-text">
                        <span class="solution-pill solution-pill--orange">Digital Collaboration</span>
                        <h3 class="apple-headline-sm font-bold mt-4">DentalSO Connect</h3>
                        <p class="apple-body mb-10 text-[#86868b]">
                            Digital case submission and partner collaboration app for clinics, sales agents, and outsource labs.
                        </p>
                        <a href="{{ home_url('products/dentalso-connect/') }}" class="solution-cta solution-cta--orange">
                            Learn more <span class="solution-cta__arrow transition-transform duration-300 group-hover:translate-x-2 inline-block">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- SECTION 3: WHY DENTALSO? --}}
{{-- Alternating zigzag with interactive illustrations --}}
{{-- ============================================= --}}
<div class="pt-16 pb-32 overflow-hidden">

    {{-- Section Header --}}
    <header class="max-w-4xl mx-auto px-8 text-center mb-24 fade-in-up">
        <h2 class="apple-headline mb-6">
            Why DentalSO?
        </h2>
        <p class="text-lg md:text-xl text-[#86868b] leading-relaxed max-w-2xl mx-auto">
            Built from the ground up for the dental industry. Every feature is designed around how labs actually work.
        </p>
    </header>

    {{-- Feature 1: Built for Dental Labs --}}
    <section class="max-w-7xl mx-auto px-8 mb-32 fade-in-up">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>

                <h3 class="apple-headline-sm">Built Exclusively for Dental Labs</h3>
                <p class="text-lg text-[#86868b] leading-relaxed">
                    Every feature is optimized around real lab workflows, from order management to final quality control. We eliminate redundant steps so technicians can focus on their expertise.
                </p>
                <div class="mt-8 flex gap-4">
                    <div class="p-4 rounded-xl bg-[#f5f5f7]">
                        <span class="block text-2xl font-semibold" style="color: #4285F4;">100%</span>
                        <span class="text-sm text-[#86868b]">Lab-compatible workflow</span>
                    </div>
                    <div class="p-4 rounded-xl bg-[#f5f5f7]">
                        <span class="block text-2xl font-semibold" style="color: #4285F4;">30%</span>
                        <span class="text-sm text-[#86868b]">Operational efficiency boost</span>
                    </div>
                </div>
            </div>
            <div class="relative group">
                <div class="absolute -inset-4 rounded-3xl blur-2xl transition-colors" style="background-color: rgba(66,133,244,0.05);"></div>
                <div class="relative rounded-2xl shadow-2xl border border-gray-100 overflow-hidden">
                    <img src="@asset('images/dental-lab-workspace.webp')" alt="Dental lab technician designing CAD on dual monitors" class="w-full h-auto object-cover" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 2: Smart Scheduling --}}
    <section class="bg-[#f5f5f7] py-24 fade-in-up">
        <div class="max-w-7xl mx-auto px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="order-2 md:order-1 relative group">
                    <div class="absolute -inset-4 rounded-3xl blur-2xl transition-colors" style="background-color: rgba(251,188,5,0.15);"></div>
                    <div class="relative rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                        <img src="@asset('images/workflow.webp')" alt="Smart production scheduling workflow" class="w-full h-auto object-cover" loading="lazy">
                    </div>
                </div>
                <div class="order-1 md:order-2">

                    <h3 class="apple-headline-sm">Smart Scheduling</h3>
                    <p class="text-lg text-[#86868b] leading-relaxed">
                        Automatically schedule production based on priority and real-time capacity. The intelligent system auto-balances workload across departments, minimizing bottlenecks and idle time.
                    </p>
                    <ul class="mt-8 space-y-4">
                        <li class="flex items-center gap-3 text-[#1d1d1f]">
                            <span class="material-symbols-outlined" style="color: #FBBC05;" aria-hidden="true">done_all</span>
                            <span>Auto-allocate based on technician capacity</span>
                        </li>
                        <li class="flex items-center gap-3 text-[#1d1d1f]">
                            <span class="material-symbols-outlined" style="color: #FBBC05;" aria-hidden="true">done_all</span>
                            <span>Early warnings for overdue cases</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 3: Real-time Tracking --}}
    <section class="max-w-7xl mx-auto px-8 my-32 fade-in-up">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>

                <h3 class="apple-headline-sm">Real-time Case Tracking</h3>
                <p class="text-lg text-[#86868b] leading-relaxed">
                    Get real-time status updates for every case in production across all devices. Lab owners and dentists can see exactly where each order stands, building confidence and transparency.
                </p>
                <div class="mt-8 p-6 rounded-2xl bg-white border border-gray-100 shadow-sm">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-10 h-10 rounded-full flex items-center justify-center" style="background-color: rgba(52, 168, 83, 0.1);">
                            <span class="material-symbols-outlined text-xl" style="color: #34A853;" aria-hidden="true">notifications_active</span>
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-[#1d1d1f]">New notification</div>
                            <div class="text-xs text-[#86868b]">Case #8829 has completed metal casting</div>
                        </div>
                    </div>
                    <div class="w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                        <div class="h-full w-[75%]" style="background-color: #34A853;"></div>
                    </div>
                </div>
            </div>
            <div class="relative group">
                <div class="absolute -inset-4 rounded-3xl blur-2xl transition-colors" style="background-color: rgba(52,168,83,0.05);"></div>
                <div class="relative bg-white p-8 rounded-2xl shadow-xl overflow-hidden aspect-video flex flex-col justify-center border border-gray-100">
                    <div class="relative">
                        <div class="absolute left-4 top-0 bottom-0 w-0.5 bg-gray-100"></div>
                        <div class="space-y-8">
                            <div class="relative flex items-center gap-4 ml-4">
                                <div class="absolute -left-[22px] w-3 h-3 rounded-full shadow-[0_0_0_4px_rgba(52,168,83,0.1)]" style="background-color:#34A853;"></div>
                                <div class="flex-1 p-3 bg-[#f5f5f7] rounded-lg border border-gray-50">
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs font-semibold text-[#1d1d1f]">3D Scan</span>
                                        <span class="text-[10px] text-[#86868b]">08:30 AM</span>
                                    </div>
                                </div>
                            </div>
                            <div class="relative flex items-center gap-4 ml-4">
                                <div class="absolute -left-[22px] w-3 h-3 rounded-full shadow-[0_0_0_4px_rgba(52,168,83,0.1)]" style="background-color:#34A853;"></div>
                                <div class="flex-1 p-3 bg-[#f5f5f7] rounded-lg border border-gray-50">
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs font-semibold text-[#1d1d1f]">CAD Design</span>
                                        <span class="text-[10px] text-[#86868b]">10:15 AM</span>
                                    </div>
                                </div>
                            </div>
                            <div class="relative flex items-center gap-4 ml-4">
                                <div class="absolute -left-[22px] w-3 h-3 rounded-full bg-gray-200"></div>
                                <div class="flex-1 p-3 bg-white rounded-lg" style="border: 2px solid rgba(52,168,83,0.2);">
                                    <div class="flex justify-between items-center">
                                        <span class="text-xs font-semibold" style="color:#34A853;">Metal Casting</span>
                                        <span class="text-[10px] text-[#86868b]">Process...</span>
                                    </div>
                                    <div class="mt-2 h-1 w-full bg-gray-100 rounded-full overflow-hidden">
                                        <div class="h-full w-2/3" style="background-color:#34A853;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Feature 4: Secure Cloud Platform --}}
    <section class="py-24 fade-in-up" style="background-color: rgba(66,133,244,0.05);">
        <div class="max-w-7xl mx-auto px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="order-2 md:order-1 relative group">
                    <div class="absolute -inset-4 rounded-3xl blur-2xl transition-colors" style="background-color: rgba(66,133,244,0.1);"></div>
                    <div class="relative rounded-2xl shadow-2xl border border-gray-100 overflow-hidden">
                        <img src="@asset('images/cloud.webp')" alt="DentalSO secure cloud platform" class="w-full h-auto object-cover" loading="lazy">
                    </div>
                </div>
                <div class="order-1 md:order-2">

                    <h3 class="apple-headline-sm">Secure Cloud Platform</h3>
                    <p class="text-lg text-[#86868b] leading-relaxed">
                        Built on modern, scalable architecture to grow with your laboratory. Access your system from anywhere, on any device, with industry-leading encryption standards.
                    </p>
                    <div class="mt-10 flex flex-col gap-4">
                        <div class="flex items-start gap-4 p-4 rounded-xl bg-white/50 backdrop-blur-sm border border-gray-100">
                            <span class="material-symbols-outlined" style="color: #4285F4;" aria-hidden="true">security</span>
                            <div>
                                <div class="font-semibold text-[#1d1d1f]">AES-256 Encryption</div>
                                <p class="text-sm text-[#86868b]">Global healthcare data security standard.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 rounded-xl bg-white/50 backdrop-blur-sm border border-gray-100">
                            <span class="material-symbols-outlined" style="color: #4285F4;" aria-hidden="true">backup</span>
                            <div>
                                <div class="font-semibold text-[#1d1d1f]">Auto Backup</div>
                                <p class="text-sm text-[#86868b]">Hourly backups ensure your data is never lost.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

{{-- ============================================= --}}
{{-- SECTION 4: FINAL CTA --}}
{{-- Apple-style centered CTA on blue gradient --}}
{{-- ============================================= --}}
<section class="apple-section apple-section--cta relative overflow-hidden">
    {{-- Decorative gradient orbs --}}
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-[#005bb5]/30 rounded-full blur-[150px] -translate-y-1/2 translate-x-1/4"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-[#004494]/40 rounded-full blur-[120px] translate-y-1/3 -translate-x-1/4"></div>

    <div class="apple-container text-center relative z-10">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-6">Ready to Streamline<br>Your Operations?</h2>
            <p class="text-xl lg:text-2xl text-white/80 leading-relaxed max-w-2xl mx-auto mb-10">
                Book a personalized demo and see how DentalSO transforms your production workflow.
            </p>
            <div class="apple-cta-group">
                <a href="{{ home_url('request-demo/') }}" class="apple-cta-primary apple-cta-primary--light apple-press">
                    Schedule a Demo
                </a>
                <!--<a href="https://api.whatsapp.com/send/?phone=12062019069&text&type=phone_number&app_absent=0" target="_blank" class="apple-cta-secondary apple-cta-secondary--light apple-press">
                    Call: {{ get_theme_mod('phoneus') }} <span class="apple-chevron">›</span>
                </a>-->
            </div>
        </div>
    </div>
</section>

{{-- Scroll Reveal Script --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -40px 0px'
        });

        document.querySelectorAll('.fade-in-up').forEach(el => observer.observe(el));
    });
</script>

@endsection