{{-- Template Name: Solution: Sales Agents --}}
@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-hero bg-white">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <span class="apple-eyebrow">Solutions for Sales</span>
            <h1 class="apple-headline mb-6">Case Management Tools<br>for Dental Sales Agents</h1>
            <p class="apple-hero-copy">
                Manage multiple clinic accounts, submit cases, and track production status — all in one powerful system built for dental sales professionals.
            </p>
            <div class="apple-cta-group mt-10">
                <a href="{{ home_url('request-demo/') }}" class="apple-cta-primary">Request Demo</a>
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
            <h2 class="apple-headline text-white">Selling shouldn't<br>mean juggling.</h2>
            <p class="apple-body text-[#86868b] mt-4 max-w-xl mx-auto">
                Without the right tools, sales agents waste hours chasing status updates and managing cases across multiple clinics.
            </p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 max-w-4xl mx-auto">
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.05s;">
                <span class="material-symbols-outlined text-4xl text-[#ff453a] mb-4">groups</span>
                <p class="text-white font-semibold text-sm mb-1">Multiple Clinics</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Juggling accounts across clinics with no centralized view.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.1s;">
                <span class="material-symbols-outlined text-4xl text-[#ff9f0a] mb-4">search_off</span>
                <p class="text-white font-semibold text-sm mb-1">Lost Cases</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Cases get lost between email threads and messaging apps.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.15s;">
                <span class="material-symbols-outlined text-4xl text-[#bf5af2] mb-4">visibility_off</span>
                <p class="text-white font-semibold text-sm mb-1">No Production Visibility</p>
                <p class="text-[#86868b] text-xs leading-relaxed">You can't tell clients when their cases will be ready.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.2s;">
                <span class="material-symbols-outlined text-4xl text-[#0a84ff] mb-4">snippet_folder</span>
                <p class="text-white font-semibold text-sm mb-1">Scattered Files</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Documentation spread across email, chat, and paper folders.</p>
            </div>
        </div>
    </div>
</section>

{{-- Capabilities — Feature Cards --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow">Key Capabilities</span>
            <h2 class="apple-headline-sm">Your complete<br>sales toolkit.</h2>
        </div>
        <div class="grid sm:grid-cols-2 gap-6 max-w-4xl mx-auto">
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.05s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#e3f0fc]">
                        <span class="material-symbols-outlined text-[#0071e3]">assignment</span>
                    </div>
                    <h3 class="apple-card-title">Submit Cases for Clinics</h3>
                    <p class="apple-card-desc">Create and submit cases on behalf of your clinic accounts with structured digital prescriptions. Upload scans, photos, and files in one place.</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.1s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#fef3e2]">
                        <span class="material-symbols-outlined text-[#ff9f0a]">monitoring</span>
                    </div>
                    <h3 class="apple-card-title">Monitor Production Progress</h3>
                    <p class="apple-card-desc">Track every case across all your clinic accounts in one dashboard. See real-time stage updates from the lab floor.</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.15s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#e2f5e9]">
                        <span class="material-symbols-outlined text-[#30d158]">local_shipping</span>
                    </div>
                    <h3 class="apple-card-title">Track Delivery Schedules</h3>
                    <p class="apple-card-desc">Know exactly when each case will be delivered. Proactively update your clients instead of waiting for lab callbacks.</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.2s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#ece5f6]">
                        <span class="material-symbols-outlined text-[#bf5af2]">folder_managed</span>
                    </div>
                    <h3 class="apple-card-title">Organized Documentation</h3>
                    <p class="apple-card-desc">All case files, notes, and communication logs stored per case. Complete audit trail for every transaction.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- How It Works — 3 Steps --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow">Workflow</span>
            <h2 class="apple-headline-sm">Streamlined from start to finish.</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-8 max-w-4xl mx-auto">
            <div class="text-center fade-in-up" style="animation-delay: 0.05s;">
                <div class="w-16 h-16 rounded-full bg-[#e3f0fc] flex items-center justify-center mx-auto mb-5">
                    <span class="text-2xl font-bold text-[#0071e3]">1</span>
                </div>
                <h3 class="text-lg font-bold text-[#1d1d1f] mb-2">Create</h3>
                <p class="text-sm text-[#86868b] leading-relaxed max-w-xs mx-auto">Select a clinic account, fill out the digital prescription, and attach scan files or photos.</p>
            </div>
            <div class="text-center fade-in-up" style="animation-delay: 0.1s;">
                <div class="w-16 h-16 rounded-full bg-[#fef3e2] flex items-center justify-center mx-auto mb-5">
                    <span class="text-2xl font-bold text-[#ff9f0a]">2</span>
                </div>
                <h3 class="text-lg font-bold text-[#1d1d1f] mb-2">Monitor</h3>
                <p class="text-sm text-[#86868b] leading-relaxed max-w-xs mx-auto">Track production progress across all clinic accounts. Communicate directly with lab teams on any case.</p>
            </div>
            <div class="text-center fade-in-up" style="animation-delay: 0.15s;">
                <div class="w-16 h-16 rounded-full bg-[#e2f5e9] flex items-center justify-center mx-auto mb-5">
                    <span class="text-2xl font-bold text-[#30d158]">3</span>
                </div>
                <h3 class="text-lg font-bold text-[#1d1d1f] mb-2">Deliver</h3>
                <p class="text-sm text-[#86868b] leading-relaxed max-w-xs mx-auto">Get delivery notifications and proactively update your clinics. Build trust through transparency.</p>
            </div>
        </div>
    </div>
</section>

{{-- Multi-Account — Split Layout --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="apple-split apple-split--reverse">
            <div class="apple-split-text fade-in-up">
                <span class="apple-eyebrow">Multi-Account Management</span>
                <h2 class="apple-headline-sm mb-4">One dashboard.<br>All your clinics.</h2>
                <p class="apple-body mb-6">Whether you manage 5 or 50 clinic accounts, DentalSO Connect gives you a single view of every case, every status, and every deadline across your entire network.</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Manage all clinics from one account</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Filter and search across accounts</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mt-0.5">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Direct communication with lab teams</span>
                    </li>
                </ul>
                <div class="mt-8">
                    <a href="{{ home_url('products/dentalso-connect/') }}" class="apple-link">Learn more about Connect<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
                </div>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden p-1">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2022/08/clinic-dashboard.png" alt="DentalSO Sales Agent Dashboard - Affordable dental lab management software, free trial" class="apple-split-img rounded-xl" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="apple-section apple-section--cta">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-4">Empower your<br>sales network.</h2>
            <p class="text-white/70 text-lg mb-8 max-w-lg mx-auto">Give your sales team the tools to manage cases efficiently and build stronger client relationships.</p>
            <div class="apple-cta-group">
                <a href="{{ home_url('request-demo/') }}" class="apple-cta-primary apple-cta-primary--light">Request Demo</a>
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
