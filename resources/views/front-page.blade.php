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
            <h1 class="apple-hero-headline fade-in-up fade-delay-1">
                <span style="background: linear-gradient(90deg, #f9ab00, #34a853, #4285f4); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">DentalSO</span>
            </h1>
            <h2 class="apple-hero-subheadline fade-in-up fade-delay-2">
                The Complete Dental Lab Software Ecosystem
            </h2>
            <div class="apple-hero-pillars fade-in-up fade-delay-3">
                <span class="apple-hero-pillar">Streamline production</span>
                <span class="apple-hero-pillar">Connect with clinics</span>
                <span class="apple-hero-pillar">Deliver total operational control</span>
            </div>
            <p class="apple-hero-tagline">
                All in one unified platform
            </p>
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
            <img src="@asset('images/dental-platform-mockup.png')" alt="DentalSO: The Complete Dental Lab Software Ecosystem for Streamlined Operations" class="apple-hero-img animate-float">
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- SECTION 2: ONE PLATFORM. THREE POWERFUL SOLUTIONS --}}
{{-- Bold product split cards with per-solution color identity --}}
{{-- ============================================= --}}
<section id="solutions" class="apple-section bg-[var(--apple-gray-light)]">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 lg:mb-20 fade-in-up">
            <h2 class="apple-headline">One Platform<br>Three Powerful Solutions</h2>
        </div>
        <div class="space-y-12 lg:space-y-24">
            {{-- Solution 1: DentalSO Platform --}}
            <div class="apple-split solution-card solution-card--blue bg-white rounded-[2.5rem] p-8 md:p-12 lg:p-16 shadow-sm hover:shadow-[0_20px_40px_rgb(0,0,0,0.1)] hover:-translate-y-3 transition-[transform,box-shadow] duration-500 ease-[cubic-bezier(0.25,1,0.5,1)] fade-in-up group" style="transition-delay: 0ms;">
                <div class="apple-split-media solution-card__media">
                    <img src="@asset('images/dental-platform-mockup.png')" alt="DentalSO Platform" class="apple-split-img rounded-2xl relative z-10 group-hover:scale-[1.03] transition-transform duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]" loading="lazy">
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

            {{-- Solution 2: DentalSO MES --}}
            <div class="apple-split apple-split--reverse solution-card solution-card--green bg-white rounded-[2.5rem] p-8 md:p-12 lg:p-16 shadow-sm hover:shadow-[0_20px_40px_rgb(0,0,0,0.1)] hover:-translate-y-3 transition-[transform,box-shadow] duration-500 ease-[cubic-bezier(0.25,1,0.5,1)] fade-in-up group" style="transition-delay: 100ms;">
                <div class="apple-split-media solution-card__media">
                    <img src="@asset('images/mes-dashboard-hero.png')" alt="DentalSO MES" class="apple-split-img rounded-2xl relative z-10 group-hover:scale-[1.03] transition-transform duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]" loading="lazy">
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

            {{-- Solution 3: DentalSO Connect --}}
            <div class="apple-split solution-card solution-card--orange bg-white rounded-[2.5rem] p-8 md:p-12 lg:p-16 shadow-sm hover:shadow-[0_20px_40px_rgb(0,0,0,0.1)] hover:-translate-y-3 transition-[transform,box-shadow] duration-500 ease-[cubic-bezier(0.25,1,0.5,1)] fade-in-up group" style="transition-delay: 200ms;">
                <div class="apple-split-media solution-card__media">
                    <img src="@asset('images/dentalso-connect-illustration.png')" alt="DentalSO Connect" class="apple-split-img rounded-2xl relative z-10 group-hover:scale-[1.03] transition-transform duration-500 ease-[cubic-bezier(0.25,1,0.5,1)]" loading="lazy">
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
</section>

{{-- ============================================= --}}
{{-- SECTION 3: WHY DENTALSO? --}}
{{-- Apple-style dark section with glass cards --}}
{{-- ============================================= --}}
<section class="apple-section apple-section--dark relative overflow-hidden">
    {{-- Background glow effects --}}
    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-[#0071e3]/5 rounded-full blur-[120px]"></div>
    <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-[#30d158]/5 rounded-full blur-[100px]"></div>

    <div class="apple-container relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16 lg:mb-20 fade-in-up">
            <h2 class="apple-headline text-white">Why DentalSO?</h2>
            <p class="apple-body text-[#86868b] mt-4 max-w-2xl mx-auto">Built from the ground up for the dental industry. Every feature is designed around how labs actually work.</p>
        </div>

        <div class="apple-bento-grid">
            {{-- Feature 1: Labs (Large) --}}
            <div class="apple-bento-card apple-bento-card--span-4 apple-lift fade-in-up" style="transition-delay: 100ms;">
                <img src="@asset('images/image.png')" alt="Dental Lab Tech" class="apple-bento-visual" loading="lazy">
                <div class="apple-bento-content">
                    <span class="material-symbols-outlined apple-bento-icon" aria-hidden="true">dentistry</span>
                    <h3 class="apple-bento-title">Built exclusively for dental laboratories</h3>
                    <p class="apple-bento-text">Every feature is designed around how labs actually work, from order management to final QC.</p>
                </div>
            </div>

            {{-- Feature 2: Scheduling (Small) --}}
            <div class="apple-bento-card apple-bento-card--span-2 apple-bento-card--top-content apple-lift fade-in-up" style="transition-delay: 150ms;">
                <div class="apple-bento-content">
                    <span class="material-symbols-outlined apple-bento-icon" aria-hidden="true">event_available</span>
                    <h3 class="apple-bento-title">Smart Scheduling</h3>
                    <p class="apple-bento-text">Priority-based scheduling that adapts to your capacity.</p>
                </div>
            </div>

            {{-- Feature 3: Tracking (Small) --}}
            <div class="apple-bento-card apple-bento-card--span-2 apple-lift fade-in-up" style="transition-delay: 200ms;">
                <div class="apple-bento-content">
                    <span class="material-symbols-outlined apple-bento-icon" aria-hidden="true">assignment</span>
                    <h3 class="apple-bento-title">Case Tracking</h3>
                    <p class="apple-bento-text">Real-time status updates for every case in production.</p>
                </div>
            </div>

            {{-- Feature 4: Cloud (Large) --}}
            <div class="apple-bento-card apple-bento-card--span-4 apple-bento-card--dark apple-lift fade-in-up" style="transition-delay: 250ms;">
                <img src="@asset('images/bento-abstract-2.png')" alt="Cloud Network" class="apple-bento-visual" loading="lazy">
                <div class="apple-bento-content">
                    <span class="material-symbols-outlined apple-bento-icon" aria-hidden="true">cloud_done</span>
                    <h3 class="apple-bento-title">Secure Cloud Platform</h3>
                    <p class="apple-bento-text">Built on scalable architecture to grow with your laboratory, ensuring your data is always safe.</p>
                </div>
            </div>
        </div>

    </div>
</section>

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