{{-- Template Name: Product: DentalSO Connect --}}
@extends('layouts.app')

@section('content')

{{-- ============================================= --}}
{{-- HERO — Large centered headline + product shot --}}
{{-- ============================================= --}}
<section class="apple-hero relative overflow-hidden bg-white">
    <div class="apple-container text-center relative z-10">
        <div class="fade-in-up">
            <p class="text-sm font-semibold text-[#0071e3] tracking-wide uppercase mb-5">DentalSO Connect</p>
            <h1 class="apple-hero-headline" style="font-size: clamp(2.5rem, 6vw, 4.5rem); line-height: 1.05; letter-spacing: -0.04em;">
                Digital Case Submission<br>& Partner Collaboration.
            </h1>
            <p class="apple-hero-copy max-w-3xl mx-auto mt-8 leading-relaxed">
                A Modern Partner App — Built for Dental Streamlined Operations.
            </p>
        </div>
        <div class="fade-in-up mt-12" style="animation-delay: 0.2s;">
            <img loading="lazy" src="@asset('images/clinic-hero-connect.webp')"
                 alt="DentalSO Connect - Affordable dental lab management software, free trial"
                 class="w-full max-w-5xl mx-auto rounded-2xl">
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- ZIGZAG 1: Why DentalSO Connect (Image Right) --}}
{{-- ============================================= --}}
<section class="py-16 lg:py-28 bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
            {{-- Text Left --}}
            <div class="w-full lg:w-[38%] fade-in-up">
                <p class="text-sm font-semibold text-[#0071e3] tracking-wide uppercase mb-5">Why DentalSO Connect?</p>
                <h2 class="text-3xl lg:text-4xl font-bold text-[#1d1d1f] leading-snug tracking-tight mb-6">
                    Centralize everything.<br>Eliminate the chaos.
                </h2>
                <p class="apple-body text-[#86868b] mb-8 leading-relaxed">
                    Manual prescriptions, emails, messaging apps, and scattered files create delays, errors, and remake risks.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-center text-[#1d1d1f] font-medium leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#0071e3] mr-3 flex-shrink-0"></span>Digital case submission</li>
                    <li class="flex items-center text-[#1d1d1f] font-medium leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#0071e3] mr-3 flex-shrink-0"></span>Real-time production tracking</li>
                    <li class="flex items-center text-[#1d1d1f] font-medium leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#0071e3] mr-3 flex-shrink-0"></span>Secure file and image sharing</li>
                    <li class="flex items-center text-[#1d1d1f] font-medium leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#0071e3] mr-3 flex-shrink-0"></span>Notes and internal communication</li>
                    <li class="flex items-center text-[#1d1d1f] font-medium leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#0071e3] mr-3 flex-shrink-0"></span>Case history and warranty lookup</li>
                </ul>
            </div>
            {{-- Image Right --}}
            <div class="w-full lg:w-[62%] fade-in-up" style="animation-delay: 0.15s;">
                <img loading="lazy" src="@asset('images/clinic-dashboard-new.webp')"
                     alt="DentalSO Connect Dashboard - Affordable dental lab management software, free trial"
                     class="w-full rounded-3xl shadow-[0_20px_80px_rgba(0,0,0,0.08)]">
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- ZIGZAG 2: For Dental Clinics (Image Left) --}}
{{-- ============================================= --}}
<section class="py-16 lg:py-28 bg-white">
    <div class="apple-container">
        <div class="flex flex-col-reverse lg:flex-row items-center gap-12 lg:gap-20">
            {{-- Image Left --}}
            <div class="w-full lg:w-[62%] fade-in-up">
                <div class="bg-white rounded-3xl p-1 shadow-sm overflow-hidden border border-[#f5f5f7]">
                    <img src="@asset('images/connect-clinic-partner.webp')" alt="Clinic Interface - Affordable dental lab management software, free trial" class="rounded-2xl w-full h-full object-cover" loading="lazy">
                </div>
            </div>
            {{-- Text Right --}}
            <div class="w-full lg:w-[38%] fade-in-up" style="animation-delay: 0.15s;">
                <p class="text-sm font-semibold text-[#0071e3] tracking-wide uppercase mb-5">For Dental Clinics</p>
                <h2 class="text-3xl lg:text-4xl font-bold text-[#1d1d1f] leading-snug tracking-tight mb-8">
                    Clear communication.<br>Fewer remakes.<br>Faster turnaround.
                </h2>
                <ul class="space-y-4">
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#0071e3] mr-3 mt-2.5 flex-shrink-0"></span>Submit cases online with structured digital prescriptions</li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#0071e3] mr-3 mt-2.5 flex-shrink-0"></span>Upload intraoral scans, photos, and attachments</li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#0071e3] mr-3 mt-2.5 flex-shrink-0"></span>Track real-time case status</li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#0071e3] mr-3 mt-2.5 flex-shrink-0"></span>Receive production updates instantly</li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#0071e3] mr-3 mt-2.5 flex-shrink-0"></span>Access full case history and warranty records</li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- ZIGZAG 3: For Sales Agents (Image Right) --}}
{{-- ============================================= --}}
<section class="py-16 lg:py-28 bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
            {{-- Text Left --}}
            <div class="w-full lg:w-[38%] fade-in-up">
                <p class="text-sm font-semibold text-[#30d158] tracking-wide uppercase mb-5">For Sales Agents</p>
                <h2 class="text-3xl lg:text-4xl font-bold text-[#1d1d1f] leading-snug tracking-tight mb-8">
                    Improved service quality.<br>Stronger relationships.
                </h2>
                <ul class="space-y-4">
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#30d158] mr-3 mt-2.5 flex-shrink-0"></span>Create and manage clinic cases</li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#30d158] mr-3 mt-2.5 flex-shrink-0"></span>Monitor production progress across multiple accounts</li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#30d158] mr-3 mt-2.5 flex-shrink-0"></span>Communicate directly with lab teams</li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#30d158] mr-3 mt-2.5 flex-shrink-0"></span>Maintain organized documentation</li>
                </ul>
            </div>
            {{-- Image Right --}}
            <div class="w-full lg:w-[62%] fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-[#e2f5e9] rounded-3xl p-10 lg:p-16 flex items-center justify-center min-h-[360px]">
                    <span class="material-symbols-outlined text-[#30d158]" style="font-size: 9rem; opacity: 0.3;">supervisor_account</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- ZIGZAG 4: For Partner Labs (Image Left) --}}
{{-- ============================================= --}}
<section class="py-16 lg:py-28 bg-white">
    <div class="apple-container">
        <div class="flex flex-col-reverse lg:flex-row items-center gap-12 lg:gap-20">
            {{-- Image Left --}}
            <div class="w-full lg:w-[62%] fade-in-up">
                <div class="bg-white rounded-3xl p-1 shadow-sm overflow-hidden border border-[#f5f5f7]">
                    <img src="@asset('images/connect-lab-partner.webp')" alt="Collaboration Between Labs - Affordable dental lab management software, free trial" class="rounded-2xl w-full h-full object-cover" loading="lazy">
                </div>
            </div>
            {{-- Text Right --}}
            <div class="w-full lg:w-[38%] fade-in-up" style="animation-delay: 0.15s;">
                <p class="text-sm font-semibold text-[#bf5af2] tracking-wide uppercase mb-5">For Partner Labs</p>
                <h2 class="text-3xl lg:text-4xl font-bold text-[#1d1d1f] leading-snug tracking-tight mb-6">
                    Transparent collaboration<br>between labs.
                </h2>
                <p class="text-sm text-[#86868b] font-medium uppercase tracking-wide mb-6">Outsource / Insource Model</p>
                <ul class="space-y-4">
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#bf5af2] mr-3 mt-2.5 flex-shrink-0"></span>Submit outsourcing cases digitally</li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#bf5af2] mr-3 mt-2.5 flex-shrink-0"></span>Track stage-by-stage production updates</li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#bf5af2] mr-3 mt-2.5 flex-shrink-0"></span>Share design files securely</li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed"><span class="w-1.5 h-1.5 rounded-full bg-[#bf5af2] mr-3 mt-2.5 flex-shrink-0"></span>Reduce email dependency</li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- CORE FEATURES — Big bold text + list (Apple text section style) --}}
{{-- ============================================= --}}
<section class="py-20 lg:py-32 bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="max-w-4xl mx-auto fade-in-up">
            <h2 class="text-4xl lg:text-6xl font-bold text-[#1d1d1f] leading-[1.08] tracking-tight mb-20">
                Core Features that power<br>your entire workflow.
            </h2>
        </div>

        {{-- Feature grid: 2-col zigzag text --}}
        <div class="grid lg:grid-cols-2 gap-x-20 gap-y-20 max-w-5xl mx-auto">
            <div class="fade-in-up">
                <h3 class="text-2xl font-bold text-[#1d1d1f] mb-4">1. Digital Case Submission</h3>
                <p class="text-[#86868b] leading-[1.7]">
                    Structured forms ensure complete and accurate case data, minimizing missing information and production delays.
                </p>
            </div>
            <div class="fade-in-up" style="animation-delay: 0.1s;">
                <h3 class="text-2xl font-bold text-[#1d1d1f] mb-4">2. Real-Time Production Tracking</h3>
                <p class="text-[#86868b] leading-[1.7] mb-5">Partners can monitor each stage:</p>
                <div class="flex flex-wrap lg:flex-nowrap items-center gap-3 text-sm font-medium text-[#1d1d1f]">
                    <span class="px-3 py-1.5 bg-white rounded-full border border-gray-200 whitespace-nowrap">Design</span>
                    <span class="text-[#86868b] font-bold">→</span>
                    <span class="px-3 py-1.5 bg-white rounded-full border border-gray-200 whitespace-nowrap">Milling</span>
                    <span class="text-[#86868b] font-bold">→</span>
                    <span class="px-3 py-1.5 bg-white rounded-full border border-gray-200 whitespace-nowrap">Finishing</span>
                    <span class="text-[#86868b] font-bold">→</span>
                    <span class="px-3 py-1.5 bg-white rounded-full border border-gray-200 whitespace-nowrap">QC</span>
                    <span class="text-[#86868b] font-bold">→</span>
                    <span class="px-3 py-1.5 bg-[#0071e3] text-white rounded-full whitespace-nowrap">Delivery</span>
                </div>
            </div>
            <div class="fade-in-up">
                <h3 class="text-2xl font-bold text-[#1d1d1f] mb-4">3. Secure File & Image Sharing</h3>
                <p class="text-[#86868b] leading-[1.7]">
                    STL files, intraoral scans, X-rays, photos, and design revisions — all stored securely under each case record.
                </p>
            </div>
            <div class="fade-in-up" style="animation-delay: 0.1s;">
                <h3 class="text-2xl font-bold text-[#1d1d1f] mb-4">4. Notes & Communication Timeline</h3>
                <p class="text-[#86868b] leading-[1.7]">
                    Special instructions, adjustments, approval confirmations, delivery updates — everything traceable and organized.
                </p>
            </div>
            <div class="fade-in-up lg:col-span-2">
                <h3 class="text-2xl font-bold text-[#1d1d1f] mb-5">5. Enterprise-Level Data Security</h3>
                <div class="flex flex-wrap gap-4 mt-2">
                    <span class="px-5 py-3 bg-white rounded-xl border border-gray-200 text-sm font-medium text-[#1d1d1f]">SSL encryption</span>
                    <span class="px-5 py-3 bg-white rounded-xl border border-gray-200 text-sm font-medium text-[#1d1d1f]">Secure cloud infrastructure</span>
                    <span class="px-5 py-3 bg-white rounded-xl border border-gray-200 text-sm font-medium text-[#1d1d1f]">Role-based access control</span>
                    <span class="px-5 py-3 bg-white rounded-xl border border-gray-200 text-sm font-medium text-[#1d1d1f]">Audit trail logging</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- INTEGRATION — Dark section with large text --}}
{{-- ============================================= --}}
<section class="apple-section apple-section--dark relative overflow-hidden">
    <div class="apple-container relative z-10">
        <div class="max-w-4xl mx-auto text-center fade-in-up">
            <h2 class="text-4xl lg:text-6xl font-bold text-white tracking-tight mb-10">
                <span class="block">Fully Integrated with</span>
                <span class="block mt-3">DentalSO MES.</span>
            </h2>
            <p class="text-xl text-[#86868b] max-w-2xl mx-auto mb-20 leading-relaxed">
                Unlike standalone prescription apps, DentalSO Connect is directly integrated with your lab's production core.
            </p>
        </div>

        <div class="flex flex-col lg:flex-row items-stretch gap-6 max-w-5xl mx-auto">
            <div class="flex-1 apple-glass-card p-8 fade-in-up flex items-center justify-center text-center" style="animation-delay: 0.1s;"><p class="apple-glass-text font-medium">DentalSO Lab MES</p></div>
            <div class="flex-1 apple-glass-card p-8 fade-in-up flex items-center justify-center text-center" style="animation-delay: 0.15s;"><p class="apple-glass-text font-medium">Case management system</p></div>
            <div class="flex-1 apple-glass-card p-8 fade-in-up flex items-center justify-center text-center" style="animation-delay: 0.2s;"><p class="apple-glass-text font-medium">Production scheduling</p></div>
            <div class="flex-1 apple-glass-card p-8 fade-in-up flex items-center justify-center text-center" style="animation-delay: 0.25s;"><p class="apple-glass-text font-medium">Quality control workflow</p></div>
        </div>

        <div class="max-w-3xl mx-auto mt-16 text-center fade-in-up" style="animation-delay: 0.3s;">
            <p class="text-2xl lg:text-3xl font-bold text-white leading-snug">
                When a clinic submits a case → It automatically enters the lab production workflow.
            </p>
            <p class="text-xl font-bold text-[#0071e3] mt-6">
                No double entry. No data loss. No manual retyping.
            </p>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- REDUCES / INCREASES — Stats layout --}}
{{-- ============================================= --}}
<section class="py-20 lg:py-32 bg-white">
    <div class="apple-container">
        <div class="max-w-4xl mx-auto text-center mb-16 fade-in-up">
            <h2 class="text-4xl lg:text-6xl font-bold text-[#1d1d1f] leading-[1.08] tracking-tight">
                Dental Streamlined Operations —<br>Extended to Your Entire Network.
            </h2>
            <p class="text-xl text-[#86868b] mt-8 max-w-2xl mx-auto leading-relaxed">
                DentalSO Connect transforms your lab into a digitally connected ecosystem.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-16 max-w-4xl mx-auto">
            {{-- Reduces --}}
            <div class="fade-in-up">
                <p class="text-sm font-bold uppercase tracking-widest text-[#ff453a] mb-10">This reduces</p>
                <div class="space-y-8">
                    <div class="flex items-center gap-4">
                        <span class="text-4xl font-black text-[#ff453a]">↓</span>
                        <span class="text-lg font-medium text-[#1d1d1f]">Case intake errors</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="text-4xl font-black text-[#ff453a]">↓</span>
                        <span class="text-lg font-medium text-[#1d1d1f]">Communication delays</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="text-4xl font-black text-[#ff453a]">↓</span>
                        <span class="text-lg font-medium text-[#1d1d1f]">Production bottlenecks</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="text-4xl font-black text-[#ff453a]">↓</span>
                        <span class="text-lg font-medium text-[#1d1d1f]">Administrative workload</span>
                    </div>
                </div>
            </div>
            {{-- Increases --}}
            <div class="fade-in-up" style="animation-delay: 0.1s;">
                <p class="text-sm font-bold uppercase tracking-widest text-[#30d158] mb-10">And increases</p>
                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <span class="text-4xl font-black text-[#30d158]">↑</span>
                        <span class="text-lg font-medium text-[#1d1d1f]">Transparency</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="text-4xl font-black text-[#30d158]">↑</span>
                        <span class="text-lg font-medium text-[#1d1d1f]">Efficiency</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="text-4xl font-black text-[#30d158]">↑</span>
                        <span class="text-lg font-medium text-[#1d1d1f]">Customer satisfaction</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="text-4xl font-black text-[#30d158]">↑</span>
                        <span class="text-lg font-medium text-[#1d1d1f]">Operational scalability</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- WHO IS IT FOR & CTA --}}
{{-- ============================================= --}}
<section class="apple-section apple-section--cta relative overflow-hidden">
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-[#005bb5]/30 rounded-full blur-[150px] -translate-y-1/2 translate-x-1/4"></div>
    <div class="apple-container text-center relative z-10">
        <div class="max-w-3xl mx-auto fade-in-up mb-16">
            <h2 class="text-2xl lg:text-3xl font-bold text-white mb-8">Who Is DentalSO Connect For?</h2>
            <div class="flex flex-wrap justify-center gap-3">
                <span class="px-5 py-3 rounded-full bg-white/10 text-white/90 backdrop-blur-sm border border-white/20 text-sm font-medium">Growing dental laboratories</span>
                <span class="px-5 py-3 rounded-full bg-white/10 text-white/90 backdrop-blur-sm border border-white/20 text-sm font-medium">Multi-branch lab enterprises</span>
                <span class="px-5 py-3 rounded-full bg-white/10 text-white/90 backdrop-blur-sm border border-white/20 text-sm font-medium">Labs with external sales agents</span>
                <span class="px-5 py-3 rounded-full bg-white/10 text-white/90 backdrop-blur-sm border border-white/20 text-sm font-medium">Labs outsourcing production stages</span>
                <span class="px-5 py-3 rounded-full bg-white/10 text-white/90 backdrop-blur-sm border border-white/20 text-sm font-medium">Clinics seeking digital case submission</span>
            </div>
        </div>

        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-8">Ready to Digitally Connect<br>Your Lab Network?</h2>
            <p class="text-xl text-white/80 leading-relaxed max-w-2xl mx-auto mb-12">
                Eliminate emails. Replace paper prescriptions. Streamline collaboration.
            </p>
            <div class="apple-cta-group">
                <a href="{{ home_url('request-demo/?product=DentalSO+Connect') }}" class="apple-cta-primary apple-cta-primary--light">
                    Request a Demo of DentalSO Connect
                </a>
                <a href="{{ home_url('products/dental-lab-mes/') }}" class="apple-cta-secondary apple-cta-secondary--light">
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