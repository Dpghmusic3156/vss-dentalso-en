{{-- Template Name: Solution: Dental Clinics --}}
@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-hero bg-white">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <span class="apple-eyebrow">Solutions for Clinics</span>
            <h1 class="apple-headline mb-6">Digital Case Collaboration<br>for Dental Clinics</h1>
            <p class="apple-hero-copy">
                DentalSO Connect enables clinics to submit cases digitally, track production in real time, and communicate seamlessly with your lab partners.
            </p>
            <div class="apple-cta-group mt-10">
                <a href="{{ home_url('contact/') }}" class="apple-cta-primary">Contact Us</a>
                <a href="{{ home_url('products/dentalso-connect/') }}" class="apple-cta-secondary">Explore Connect<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
            </div>
        </div>
    </div>
</section>

{{-- Pain Points — Dark Section --}}
<section class="apple-section apple-section--dark">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow apple-eyebrow--light">The Problem</span>
            <h2 class="apple-headline text-white">Sound Familiar?</h2>
            <p class="apple-body text-[#86868b] mt-4 max-w-xl mx-auto">
                Traditional lab communication wastes time and creates costly errors.
            </p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 max-w-4xl mx-auto">
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.05s;">
                <span class="material-symbols-outlined text-4xl text-[#ff453a] mb-4">description</span>
                <p class="text-white font-semibold text-sm mb-1">Paper Prescriptions</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Handwritten forms lead to incomplete data and production delays.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.1s;">
                <span class="material-symbols-outlined text-4xl text-[#ff9f0a] mb-4">phone_missed</span>
                <p class="text-white font-semibold text-sm mb-1">Status Phone Calls</p>
                <p class="text-[#86868b] text-xs leading-relaxed">"What's the status?" calls disrupt both your clinic and the lab.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.15s;">
                <span class="material-symbols-outlined text-4xl text-[#bf5af2] mb-4">folder_off</span>
                <p class="text-white font-semibold text-sm mb-1">Lost Files</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Scans, photos, and X-rays scattered across email and messaging apps.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.2s;">
                <span class="material-symbols-outlined text-4xl text-[#0a84ff] mb-4">event_busy</span>
                <p class="text-white font-semibold text-sm mb-1">Unclear Timelines</p>
                <p class="text-[#86868b] text-xs leading-relaxed">No visibility into production stages means no reliable delivery estimates.</p>
            </div>
        </div>
    </div>
</section>

{{-- Benefits — Feature Cards --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow">Benefits</span>
            <h2 class="apple-headline-sm">Everything you need.<br>Nothing you don't.</h2>
        </div>
        <div class="grid sm:grid-cols-2 gap-6 max-w-4xl mx-auto">
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.05s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#e3f0fc]">
                        <span class="material-symbols-outlined text-[#0071e3]">visibility</span>
                    </div>
                    <h3 class="apple-card-title">Clear Case Tracking</h3>
                    <p class="apple-card-desc">Monitor every stage of production — Design → Milling → Finishing → QC → Delivery — all from your clinic dashboard.</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.1s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#fef3e2]">
                        <span class="material-symbols-outlined text-[#ff9f0a]">speed</span>
                    </div>
                    <h3 class="apple-card-title">Faster Turnaround</h3>
                    <p class="apple-card-desc">Digital case submission with structured forms ensures complete data from day one — eliminating back-and-forth delays.</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.15s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#ece5f6]">
                        <span class="material-symbols-outlined text-[#bf5af2]">lock</span>
                    </div>
                    <h3 class="apple-card-title">Secure File Sharing</h3>
                    <p class="apple-card-desc">Upload STL files, intraoral scans, photos, and X-rays — all encrypted and stored securely under each case record.</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.2s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#e2f5e9]">
                        <span class="material-symbols-outlined text-[#30d158]">history</span>
                    </div>
                    <h3 class="apple-card-title">Complete Case History</h3>
                    <p class="apple-card-desc">Access full history of every case — including notes, revisions, warranty records, and delivery confirmations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- How It Works — 3 Steps --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow">How It Works</span>
            <h2 class="apple-headline-sm">Three simple steps.</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-8 max-w-4xl mx-auto">
            <div class="text-center fade-in-up" style="animation-delay: 0.05s;">
                <div class="w-16 h-16 rounded-full bg-[#e3f0fc] flex items-center justify-center mx-auto mb-5">
                    <span class="text-2xl font-bold text-[#0071e3]">1</span>
                </div>
                <h3 class="text-lg font-bold text-[#1d1d1f] mb-2">Submit</h3>
                <p class="text-sm text-[#86868b] leading-relaxed max-w-xs mx-auto">Fill out structured digital prescriptions. Upload scans, photos, and attachments — all validated before submission.</p>
            </div>
            <div class="text-center fade-in-up" style="animation-delay: 0.1s;">
                <div class="w-16 h-16 rounded-full bg-[#fef3e2] flex items-center justify-center mx-auto mb-5">
                    <span class="text-2xl font-bold text-[#ff9f0a]">2</span>
                </div>
                <h3 class="text-lg font-bold text-[#1d1d1f] mb-2">Track</h3>
                <p class="text-sm text-[#86868b] leading-relaxed max-w-xs mx-auto">Monitor real-time production status. Receive updates instantly as your case moves through each stage.</p>
            </div>
            <div class="text-center fade-in-up" style="animation-delay: 0.15s;">
                <div class="w-16 h-16 rounded-full bg-[#e2f5e9] flex items-center justify-center mx-auto mb-5">
                    <span class="text-2xl font-bold text-[#30d158]">3</span>
                </div>
                <h3 class="text-lg font-bold text-[#1d1d1f] mb-2">Receive</h3>
                <p class="text-sm text-[#86868b] leading-relaxed max-w-xs mx-auto">Get notified when your case passes QC and is ready for delivery. Complete traceability from start to finish.</p>
            </div>
        </div>
    </div>
</section>

{{-- Integration — Split Layout --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="apple-split">
            <div class="apple-split-text fade-in-up">
                <span class="apple-eyebrow">Seamless Integration</span>
                <h2 class="apple-headline-sm mb-4">Fully integrated with<br>DentalSO MES.</h2>
                <p class="apple-body mb-6">When you submit a case through DentalSO Connect, it flows directly into the lab's production workflow. No double entry. No manual retyping. No data loss.</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Auto-synced with lab production</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Enterprise-grade SSL encryption</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Role-based access control</span>
                    </li>
                </ul>
                <div class="mt-8">
                    <a href="{{ home_url('products/dental-lab-mes/') }}" class="apple-link">Learn about DentalSO MES<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
                </div>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden p-1">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2022/08/clinic-dashboard.png" alt="DentalSO Connect Clinic View" class="apple-split-img rounded-xl" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="apple-section apple-section--cta">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-4">Improve your lab<br>communication today.</h2>
            <p class="text-white/70 text-lg mb-8 max-w-lg mx-auto">See how DentalSO Connect streamlines collaboration between your clinic and lab partners.</p>
            <div class="apple-cta-group">
                <a href="{{ home_url('contact/') }}" class="apple-cta-primary apple-cta-primary--light">Contact Us</a>
                <a href="{{ home_url('request-demo/') }}" class="apple-cta-secondary apple-cta-secondary--light">Book a Demo<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
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
