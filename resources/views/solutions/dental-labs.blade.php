{{-- Template Name: Solution: Dental Labs --}}
@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-hero bg-white">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <span class="apple-eyebrow">Solutions for Labs</span>
            <h1 class="apple-headline mb-6">Software Solutions<br>for Dental Laboratories</h1>
            <p class="apple-hero-copy">
                DentalSO helps dental labs standardize workflows, reduce production delays, and improve profitability — all from one unified platform.
            </p>
            <div class="apple-cta-group mt-10">
                <a href="{{ home_url('request-demo/') }}" class="apple-cta-primary">Book a Demo</a>
                <a href="{{ home_url('products/dental-lab-software/') }}" class="apple-cta-secondary">Explore Platform<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
            </div>
        </div>
    </div>
</section>

{{-- Challenges We Solve — Dark Section --}}
<section class="apple-section apple-section--dark">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow apple-eyebrow--light">The Problem</span>
            <h2 class="apple-headline text-white">Challenges<br>We Solve</h2>
            <p class="apple-body text-[#86868b] mt-4 max-w-xl mx-auto">
                Most dental labs still rely on manual tracking, scattered communication, and reactive scheduling. It costs time, money, and quality.
            </p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-5 max-w-5xl mx-auto">
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.05s;">
                <span class="material-symbols-outlined text-4xl text-[#ff453a] mb-4">schedule</span>
                <p class="text-white font-semibold text-sm mb-1">Missed Deadlines</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Late deliveries damage trust and cost revenue.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.1s;">
                <span class="material-symbols-outlined text-4xl text-[#ff9f0a] mb-4">visibility_off</span>
                <p class="text-white font-semibold text-sm mb-1">Poor Visibility</p>
                <p class="text-[#86868b] text-xs leading-relaxed">No real-time view of case status on the floor.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.15s;">
                <span class="material-symbols-outlined text-4xl text-[#bf5af2] mb-4">person_off</span>
                <p class="text-white font-semibold text-sm mb-1">Technician Overload</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Unbalanced workloads burn out your best people.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.2s;">
                <span class="material-symbols-outlined text-4xl text-[#0a84ff] mb-4">sms_failed</span>
                <p class="text-white font-semibold text-sm mb-1">Communication Errors</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Miscommunication causes remakes and delays.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.25s;">
                <span class="material-symbols-outlined text-4xl text-[#30d158] mb-4">edit_calendar</span>
                <p class="text-white font-semibold text-sm mb-1">Manual Scheduling</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Whiteboards and spreadsheets can't scale.</p>
            </div>
        </div>
    </div>
</section>

{{-- How DentalSO Helps — Feature Cards --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow">The Solution</span>
            <h2 class="apple-headline-sm">How DentalSO Helps</h2>
            <p class="apple-body mt-3 max-w-xl mx-auto">
                Purpose-built tools that give your lab complete control over production, scheduling, and communication.
            </p>
        </div>
        <div class="grid sm:grid-cols-2 gap-6 max-w-4xl mx-auto">
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.05s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#e3f0fc]">
                        <span class="material-symbols-outlined text-[#0071e3]">monitoring</span>
                    </div>
                    <h3 class="apple-card-title">Real-Time Production Tracking</h3>
                    <p class="apple-card-desc">Live dashboard showing every case, every stage, every technician — updated in real time across your entire production floor.</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.1s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#fef3e2]">
                        <span class="material-symbols-outlined text-[#ff9f0a]">priority_high</span>
                    </div>
                    <h3 class="apple-card-title">Priority-Driven Scheduling</h3>
                    <p class="apple-card-desc">Automated scheduling based on delivery deadlines, remaining production time, and lab capacity. No manual juggling needed.</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.15s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#e2f5e9]">
                        <span class="material-symbols-outlined text-[#30d158]">folder_shared</span>
                    </div>
                    <h3 class="apple-card-title">Centralized Case Management</h3>
                    <p class="apple-card-desc">Every case — from intake to delivery — is organized, searchable, and traceable. Complete history at your fingertips.</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.2s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#ece5f6]">
                        <span class="material-symbols-outlined text-[#bf5af2]">lock</span>
                    </div>
                    <h3 class="apple-card-title">Secure Clinic Communication</h3>
                    <p class="apple-card-desc">Digital case submission, file sharing, and notes — all encrypted and logged. Replace phone calls and emails with structured data.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Results — Stats Strip --}}
<section class="apple-section--sm bg-white">
    <div class="apple-container">
        <div class="text-center mb-12 fade-in-up">
            <span class="apple-eyebrow">Proven Results</span>
            <h2 class="apple-headline-sm">Built for labs that want to grow.</h2>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 max-w-4xl mx-auto text-center">
            <div class="fade-in-up" style="animation-delay: 0.05s;">
                <p class="text-4xl lg:text-5xl font-bold text-[#1d1d1f] tracking-tight">300+</p>
                <p class="text-sm text-[#86868b] mt-2">Dental organizations trust DentalSO</p>
            </div>
            <div class="fade-in-up" style="animation-delay: 0.1s;">
                <p class="text-4xl lg:text-5xl font-bold text-[#1d1d1f] tracking-tight">40%</p>
                <p class="text-sm text-[#86868b] mt-2">Faster turnaround time</p>
            </div>
            <div class="fade-in-up" style="animation-delay: 0.15s;">
                <p class="text-4xl lg:text-5xl font-bold text-[#1d1d1f] tracking-tight">95%</p>
                <p class="text-sm text-[#86868b] mt-2">On-time delivery rate</p>
            </div>
            <div class="fade-in-up" style="animation-delay: 0.2s;">
                <p class="text-4xl lg:text-5xl font-bold text-[#1d1d1f] tracking-tight">60%</p>
                <p class="text-sm text-[#86868b] mt-2">Reduction in communication errors</p>
            </div>
        </div>
    </div>
</section>

{{-- Platform Overview — Split Layout --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="apple-split">
            <div class="apple-split-text fade-in-up">
                <span class="apple-eyebrow">The Platform</span>
                <h2 class="apple-headline-sm mb-4">One system for<br>your entire lab.</h2>
                <p class="apple-body mb-6">DentalSO isn't just a tool — it's operational infrastructure. Case management, production tracking, quality control, and clinic communication all work together in one unified system.</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Case-based production management</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Real-time shop floor visibility</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Quality assurance checkpoints</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Scalable multi-location architecture</span>
                    </li>
                </ul>
                <div class="mt-8">
                    <a href="{{ home_url('products/dental-lab-software/') }}" class="apple-link">Explore the platform<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
                </div>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden p-1">
                    <img src="@asset('images/mes-dashboard-live.webp')" alt="DentalSO Platform Dashboard - Affordable dental lab management software, free trial" class="apple-split-img rounded-xl" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="apple-section apple-section--cta">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-4">See how your lab can<br>streamline operations.</h2>
            <p class="text-white/70 text-lg mb-8 max-w-lg mx-auto">Book a personalized demo and discover how DentalSO transforms your production workflow.</p>
            <div class="apple-cta-group">
                <a href="{{ home_url('request-demo/') }}" class="apple-cta-primary apple-cta-primary--light">Schedule a Demo</a>
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
