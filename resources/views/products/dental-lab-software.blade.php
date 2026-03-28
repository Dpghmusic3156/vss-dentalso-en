{{-- Template Name: Product: Dental Lab Software --}}
{{--
--}}

@extends('layouts.app')

@section('content')

{{-- ============================================= --}}
{{-- HERO --}}
{{-- ============================================= --}}
<section class="apple-hero relative overflow-hidden bg-[var(--apple-white)]">
    <div class="apple-container text-center relative z-10">
        <div class="fade-in-up">
            <h1 class="apple-hero-headline">DentalSO</h1>
            <h2 class="apple-hero-subheadline">Dental Streamlined Operations</h2>
            <p class="apple-hero-copy font-medium max-w-3xl mx-auto mt-4">
                Powering Modern Dental Labs and Clinics with Intelligent, Connected, and Efficient Workflows.
            </p>
            <div class="apple-cta-group">
                <a href="{{ home_url('request-demo/?product=DentalSO+Platform') }}" class="apple-cta-primary">
                    Book a Demo
                </a>
            </div>
        </div>
        <div class="apple-hero-img-wrapper fade-in-up" style="animation-delay: 0.2s;">
            <img src="{{ home_url('wp-content/uploads/2024/07/dental') }}.png" alt="DentalSO Platform" class="apple-hero-img w-full max-w-5xl mx-auto mt-12 rounded-2xl" loading="lazy">
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- TRANSFORM COMPLEXITY --}}
{{-- ============================================= --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="apple-split">
            <div class="apple-split-text fade-in-up">
                <p class="apple-eyebrow mb-4">The Platform</p>
                <h2 class="apple-headline mb-6">
                    Transform complexity<br>into control.
                </h2>
                <p class="apple-body-secondary text-xl mb-8">
                    Stop losing margins to disconnected systems and manual tracking. DentalSO connects production, quality, and communication into one unified digital environment.
                </p>
                <p class="text-2xl font-bold text-[var(--apple-dark)] leading-snug">
                    From case intake to final delivery, every workflow is synchronized and traceable.
                </p>
            </div>
            <div class="apple-split-media fade-in-up md:fade-delay-1">
                <img src="{{ home_url('wp-content/uploads/2022/08/clinic-dashboard') }}.png" class="apple-split-img rounded-3xl shadow-[0_20px_60px_rgba(0,0,0,0.08)]" loading="lazy">
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- BUILT SPECIFICALLY FOR DENTISTRY --}}
{{-- ============================================= --}}
<section class="apple-section bg-[var(--apple-gray-3)]">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <h2 class="apple-headline-sm">Built Specifically for Dentistry</h2>
            <p class="apple-body mt-4">Unlike generic ERP or manufacturing tools, DentalSO is engineered exclusively for dental workflows.</p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <div class="apple-card apple-card--white fade-in-up md:fade-delay-1">
                <div class="p-8">
                    <span class="material-symbols-outlined text-[var(--apple-blue)] text-4xl mb-4" aria-hidden="true">account_tree</span>
                    <h3 class="text-lg font-semibold text-[var(--apple-dark)] mb-2">Case-based production</h3>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up md:fade-delay-2">
                <div class="p-8">
                    <span class="material-symbols-outlined text-[var(--apple-blue)] text-4xl mb-4" aria-hidden="true">visibility</span>
                    <h3 class="text-lg font-semibold text-[var(--apple-dark)] mb-2">Real-time shop floor visibility</h3>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up md:fade-delay-3">
                <div class="p-8">
                    <span class="material-symbols-outlined text-[var(--apple-blue)] text-4xl mb-4" aria-hidden="true">forum</span>
                    <h3 class="text-lg font-semibold text-[var(--apple-dark)] mb-2">Integrated clinic–lab communication</h3>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up md:fade-delay-4">
                <div class="p-8">
                    <span class="material-symbols-outlined text-[var(--apple-blue)] text-4xl mb-4" aria-hidden="true">fact_check</span>
                    <h3 class="text-lg font-semibold text-[var(--apple-dark)] mb-2">Quality assurance checkpoints</h3>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up md:fade-delay-5">
                <div class="p-8">
                    <span class="material-symbols-outlined text-[var(--apple-blue)] text-4xl mb-4" aria-hidden="true">lock</span>
                    <h3 class="text-lg font-semibold text-[var(--apple-dark)] mb-2">Secure patient data handling</h3>
                </div>
            </div>
        </div>
        <div class="text-center mt-12 fade-in-up md:fade-delay-6">
            <p class="text-xl font-medium text-[var(--apple-dark)]">Designed for precision manufacturing. Built for dental professionals.</p>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- CORE SOLUTIONS --}}
{{-- ============================================= --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <h2 class="apple-headline">Core Solutions</h2>
        </div>
        <div class="grid lg:grid-cols-2 gap-10">
            {{-- MES --}}
            <a href="{{ home_url('products/dental-lab-mes/') }}" class="apple-card apple-card--tint-green fade-in-up md:fade-delay-1 block group transition-transform hover:-translate-y-1">
                <div class="apple-card-inner">
                    <div class="apple-card-eyebrow">Manufacturing Execution, Reimagined</div>
                    <h3 class="apple-card-title group-hover:text-[var(--apple-green)] transition-colors">1. DentalSO MES for Labs</h3>
                    <ul class="space-y-4 mb-8 mt-4">
                        <li class="flex items-start"><span class="material-symbols-outlined text-[var(--apple-green)] mr-3 mt-1 text-xl" aria-hidden="true">check_circle</span><span class="apple-body text-[#1d1d1f]">Real-time production tracking</span></li>
                        <li class="flex items-start"><span class="material-symbols-outlined text-[var(--apple-green)] mr-3 mt-1 text-xl" aria-hidden="true">check_circle</span><span class="apple-body text-[#1d1d1f]">Automated scheduling and workload balancing</span></li>
                        <li class="flex items-start"><span class="material-symbols-outlined text-[var(--apple-green)] mr-3 mt-1 text-xl" aria-hidden="true">check_circle</span><span class="apple-body text-[#1d1d1f]">Quality control checkpoints and defect tracking</span></li>
                        <li class="flex items-start"><span class="material-symbols-outlined text-[var(--apple-green)] mr-3 mt-1 text-xl" aria-hidden="true">check_circle</span><span class="apple-body text-[#1d1d1f]">Inventory forecasting and material control</span></li>
                    </ul>
                    <p class="font-medium text-[var(--apple-dark)] mt-auto apple-body flex items-center justify-between">
                        <span>Result: Faster turnaround, fewer remakes, higher margins.</span>
                        <span class="material-symbols-outlined text-[var(--apple-green)] opacity-0 group-hover:opacity-100 transition-opacity translate-x-[-10px] group-hover:translate-x-0 duration-300">arrow_forward</span>
                    </p>
                </div>
            </a>
            {{-- Connect --}}
            <a href="{{ home_url('products/dentalso-connect/') }}" class="apple-card apple-card--tint-purple fade-in-up md:fade-delay-2 block group transition-transform hover:-translate-y-1">
                <div class="apple-card-inner">
                    <div class="apple-card-eyebrow">Connected Communication. Zero Friction.</div>
                    <h3 class="apple-card-title group-hover:text-[#bf5af2] transition-colors">2. Secure Clinic–Lab Collaboration Hub (DentalSO Connect)</h3>
                    <ul class="space-y-4 mb-8 mt-4">
                        <li class="flex items-start"><span class="material-symbols-outlined text-[#bf5af2] mr-3 mt-1 text-xl" aria-hidden="true">check_circle</span><span class="apple-body text-[#1d1d1f]">Digital case submission</span></li>
                        <li class="flex items-start"><span class="material-symbols-outlined text-[#bf5af2] mr-3 mt-1 text-xl" aria-hidden="true">check_circle</span><span class="apple-body text-[#1d1d1f]">Image and file sharing</span></li>
                        <li class="flex items-start"><span class="material-symbols-outlined text-[#bf5af2] mr-3 mt-1 text-xl" aria-hidden="true">check_circle</span><span class="apple-body text-[#1d1d1f]">Order-level patient data storage</span></li>
                        <li class="flex items-start"><span class="material-symbols-outlined text-[#bf5af2] mr-3 mt-1 text-xl" aria-hidden="true">check_circle</span><span class="apple-body text-[#1d1d1f]">Warranty and case history tracking</span></li>
                        <li class="flex items-start"><span class="material-symbols-outlined text-[#bf5af2] mr-3 mt-1 text-xl" aria-hidden="true">check_circle</span><span class="apple-body text-[#1d1d1f]">Enterprise-grade security</span></li>
                    </ul>
                    <p class="font-medium text-[var(--apple-dark)] mt-auto apple-body flex items-center justify-between">
                        <span>Result: Reduced errors, improved clarity, stronger partnerships.</span>
                        <span class="material-symbols-outlined text-[#bf5af2] opacity-0 group-hover:opacity-100 transition-opacity translate-x-[-10px] group-hover:translate-x-0 duration-300">arrow_forward</span>
                    </p>
                </div>
            </a>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- WHY DENTALSO (Dark) --}}
{{-- ============================================= --}}
<section class="apple-section apple-section--dark relative overflow-hidden">
    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-[#0071e3]/5 rounded-full blur-[120px]"></div>
    <div class="apple-container relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <h2 class="apple-headline text-white">Why DentalSO?</h2>
        </div>
        <div class="grid md:grid-cols-2 gap-6 max-w-5xl mx-auto">
            <div class="apple-glass-card fade-in-up md:fade-delay-1">
                <h3 class="text-xl font-semibold text-white mb-3">Industry-Specific Innovation</h3>
                <p class="apple-glass-text">Every feature is built around dental production logic — not retrofitted from generic manufacturing systems.</p>
            </div>
            <div class="apple-glass-card fade-in-up md:fade-delay-2">
                <h3 class="text-xl font-semibold text-white mb-3">Enterprise-Level Security</h3>
                <p class="apple-glass-text">Your patient data and operational intelligence are protected with modern encryption standards.</p>
            </div>
            <div class="apple-glass-card fade-in-up md:fade-delay-3">
                <h3 class="text-xl font-semibold text-white mb-3">Proven Performance</h3>
                <p class="apple-glass-text">Trusted by 300+ dental organizations to standardize operations and scale confidently.</p>
            </div>
            <div class="apple-glass-card fade-in-up md:fade-delay-4">
                <h3 class="text-xl font-semibold text-white mb-3">Scalable Architecture</h3>
                <p class="apple-glass-text">Multi-tenant SaaS architecture designed to support single labs, multi-location enterprises, and international expansion.</p>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- FINAL CTA (Gradient & Results) --}}
{{-- ============================================= --}}
<section class="apple-section apple-section--cta relative overflow-hidden">
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-[#005bb5]/30 rounded-full blur-[150px] -translate-y-1/2 translate-x-1/4"></div>
    <div class="apple-container text-center relative z-10">
        <div class="max-w-4xl mx-auto fade-in-up">
            <h2 class="apple-headline text-white mb-10">From Workflow Chaos to Operational Excellence</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-4 mb-12">
                <div class="bg-white/10 rounded-xl p-4 backdrop-blur-md border border-white/20 apple-press">
                    <p class="text-white font-medium text-sm">Clear production visibility</p>
                </div>
                <div class="bg-white/10 rounded-xl p-4 backdrop-blur-md border border-white/20 apple-press">
                    <p class="text-white font-medium text-sm">Predictable turnaround</p>
                </div>
                <div class="bg-white/10 rounded-xl p-4 backdrop-blur-md border border-white/20 apple-press">
                    <p class="text-white font-medium text-sm">Controlled material costs</p>
                </div>
                <div class="bg-white/10 rounded-xl p-4 backdrop-blur-md border border-white/20 apple-press">
                    <p class="text-white font-medium text-sm">Standardized quality</p>
                </div>
                <div class="bg-white/10 rounded-xl p-4 backdrop-blur-md border border-white/20 apple-press">
                    <p class="text-white font-medium text-sm">Data-driven decisions</p>
                </div>
            </div>
            <p class="text-xl text-white/80 mb-12 italic">
                "This is not just software. It is operational infrastructure for modern dental manufacturing."
            </p>
            <h3 class="apple-headline text-white mb-8">Ready to Streamline Your Operations?</h3>
            <p class="apple-body text-white/90 mb-8">See how DentalSO transforms lab and clinic performance.</p>
            <div class="apple-cta-group">
                <a href="{{ home_url('request-demo/?product=DentalSO+Platform') }}" class="apple-cta-primary apple-cta-primary--light apple-press">
                    Schedule a Live Demo
                </a>
                <a href="{{ home_url('contact') }}" class="apple-cta-secondary apple-cta-secondary--light apple-press">
                    Request Pricing <span class="apple-chevron">›</span>
                </a>
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
            rootMargin: '0px 0px -50px 0px'
        });
        document.querySelectorAll('.fade-in-up').forEach(el => observer.observe(el));
    });
</script>
@endsection