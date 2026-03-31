{{-- Template Name: Product: Lab Warranty Management --}}
@extends('layouts.app')

@section('content')

{{-- ============================================= --}}
{{-- HERO --}}
{{-- ============================================= --}}
<section class="apple-hero relative overflow-hidden bg-[#fbfbfd]">
    <div class="absolute inset-0 bg-gradient-to-b from-[#fbfbfd] via-white to-[#f5f5f7]"></div>
    <div class="apple-container relative z-10">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
            <div class="w-full lg:w-[45%] fade-in-up">
                <span class="apple-eyebrow">Dental Warranty</span>
                <h1 class="text-4xl lg:text-6xl font-bold text-[#1d1d1f] leading-[1.08] tracking-tight mb-6">
                    Lab Warranty Management
                </h1>
                <p class="apple-body text-[#86868b] mb-4 leading-relaxed">
                    Labs print and issue warranty cards
                </p>
                <p class="text-lg font-semibold text-[#1d1d1f] mb-8 italic">
                    Clinics and patients look up warranties instantly
                </p>
                <div class="apple-cta-group">
                    <a href="{{ home_url('request-demo/') }}" class="apple-cta-primary">Request a Demo</a>
                </div>
            </div>
            <div class="w-full lg:w-[55%] fade-in-up" style="animation-delay: 0.15s;">
                <div>
                    <img src="@asset('images/warranty-hero-mockup.webp')"
                         alt="Lab Warranty Management — Dashboard"
                         class="rounded-xl w-full">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- THREE STAKEHOLDERS: Lab / Clinic / Patient --}}
{{-- ============================================= --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <h2 class="apple-headline">A Solution for<br>Every Stakeholder</h2>
            <p class="apple-body mt-4 max-w-2xl mx-auto">From the lab to the clinic and the patient — everyone is connected through a digitized warranty system.</p>
        </div>
        <div class="grid sm:grid-cols-3 gap-8 max-w-5xl mx-auto">
            {{-- Labo --}}
            <div class="apple-card apple-card--white fade-in-up p-0 overflow-hidden" style="animation-delay: 0.05s;">
                <div class="h-48 overflow-hidden bg-gray-100">
                    <img src="@asset('images/warranty-labo-printer.webp')" alt="Labo Printer" class="w-full h-full object-cover" loading="lazy">
                </div>
                <div class="apple-card-inner text-center p-8 text-[#1d1d1f]">
                    <h3 class="apple-card-title text-xl mb-3">Dental Lab</h3>
                    <p class="apple-card-desc">Manage, print, and issue warranty cards — simple and accurate.</p>
                    <p class="text-sm mt-3">Deliver better service to clinics and patients.</p>
                </div>
            </div>
            {{-- Clinic --}}
            <div class="apple-card apple-card--white fade-in-up p-0 overflow-hidden" style="animation-delay: 0.1s;">
                <div class="h-48 overflow-hidden bg-gray-100">
                    <img src="@asset('images/warranty-clinic-card.webp')" alt="Clinic Warranty Card" class="w-full h-full object-cover" loading="lazy">
                </div>
                <div class="apple-card-inner text-center p-8 text-[#1d1d1f]">
                    <h3 class="apple-card-title text-xl mb-3">Dental Clinic</h3>
                    <p class="apple-card-desc">Boost credibility and competitive advantage by providing digital warranty cards with full details to patients.</p>
                </div>
            </div>
            {{-- Patient --}}
            <div class="apple-card apple-card--white fade-in-up p-0 overflow-hidden" style="animation-delay: 0.15s;">
                <div class="h-48 overflow-hidden bg-gray-100">
                    <img src="@asset('images/warranty-patient-qr.webp')" alt="Patient QR Lookup" class="w-full h-full object-cover" loading="lazy">
                </div>
                <div class="apple-card-inner text-center p-8 text-[#1d1d1f]">
                    <h3 class="apple-card-title text-xl mb-3">Patient</h3>
                    <p class="apple-card-desc">Peace of mind about services. Look up warranty details easily using QR Code.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- FLEXIBLE WARRANTY POLICY --}}
{{-- ============================================= --}}
<section class="py-16 lg:py-28 bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow">Flexible</span>
            <h2 class="apple-headline-sm">Flexible Warranty<br>Policies</h2>
            <p class="apple-body mt-4 max-w-xl mx-auto">
                Configure policies per material type and per clinic. Adjust flexibly for each individual order.
            </p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-4xl mx-auto">
            <div class="bg-white rounded-2xl p-6 text-center fade-in-up" style="animation-delay: 0.05s;">
                <span class="material-symbols-outlined text-3xl text-[#0071e3] mb-3">tune</span>
                <p class="text-sm font-semibold text-[#1d1d1f]">Customize by material type</p>
            </div>
            <div class="bg-white rounded-2xl p-6 text-center fade-in-up" style="animation-delay: 0.1s;">
                <span class="material-symbols-outlined text-3xl text-[#30d158] mb-3">local_hospital</span>
                <p class="text-sm font-semibold text-[#1d1d1f]">Customize by clinic</p>
            </div>
            <div class="bg-white rounded-2xl p-6 text-center fade-in-up" style="animation-delay: 0.15s;">
                <span class="material-symbols-outlined text-3xl text-[#ff9f0a] mb-3">edit_note</span>
                <p class="text-sm font-semibold text-[#1d1d1f]">Adjust per order</p>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- QR CODE TECHNOLOGY --}}
{{-- ============================================= --}}
<section class="py-16 lg:py-28 bg-white">
    <div class="apple-container">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
            <div class="w-full lg:w-[45%] fade-in-up">
                <span class="apple-eyebrow">Instant Lookup</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-[#1d1d1f] leading-snug tracking-tight mb-6">
                    QR Code Technology
                </h2>
                <p class="apple-body text-[#86868b] mb-6 leading-relaxed">
                    View detailed warranty information instantly by scanning a QR Code. Look up from phone or website.
                </p>
                <ul class="space-y-4">
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed">
                        <span class="material-symbols-outlined text-[#0071e3] text-xl mr-3 mt-0.5 flex-shrink-0">check_circle</span>
                        Scan QR from app, website, or phone
                    </li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed">
                        <span class="material-symbols-outlined text-[#0071e3] text-xl mr-3 mt-0.5 flex-shrink-0">check_circle</span>
                        Customizable interface with your lab branding
                    </li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed">
                        <span class="material-symbols-outlined text-[#0071e3] text-xl mr-3 mt-0.5 flex-shrink-0">check_circle</span>
                        Display full warranty period, product type, and clinic
                    </li>
                </ul>
            </div>
            <div class="w-full lg:w-[55%] fade-in-up" style="animation-delay: 0.15s;">
                <div>
                    <img src="@asset('images/warranty-qr-mockup.webp')" alt="QR Lookup Mockup" class="w-full" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- PRINT WARRANTY CARDS FROM SOFTWARE --}}
{{-- ============================================= --}}
<section class="py-16 lg:py-28 bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="flex flex-col-reverse lg:flex-row items-center gap-12 lg:gap-20">
            <div class="w-full lg:w-[55%] fade-in-up" style="animation-delay: 0.15s;">
                <div>
                    <img src="@asset('images/warranty-print-mockup.webp')" alt="Card Printing Mockup" class="w-full" loading="lazy">
                </div>
            </div>
            <div class="w-full lg:w-[45%] fade-in-up" style="animation-delay: 0.15s;">
                <span class="apple-eyebrow">Professional Printing</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-[#1d1d1f] leading-snug tracking-tight mb-6">
                    Print Warranty Cards<br>from Software
                </h2>
                <ul class="space-y-4">
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mr-3 mt-0.5 flex-shrink-0">check_circle</span>
                        Create and print cards with a single click
                    </li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mr-3 mt-0.5 flex-shrink-0">check_circle</span>
                        Beautiful pre-designed card templates
                    </li>
                    <li class="flex items-start text-[#1d1d1f] leading-relaxed">
                        <span class="material-symbols-outlined text-[#30d158] text-xl mr-3 mt-0.5 flex-shrink-0">check_circle</span>
                        Compatible with all card printers with computer ports
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- ============================================= --}}
{{-- CTA --}}
{{-- ============================================= --}}
<section class="apple-section apple-section--cta relative overflow-hidden">
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-[#005bb5]/30 rounded-full blur-[150px] -translate-y-1/2 translate-x-1/4"></div>
    <div class="apple-container text-center relative z-10">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-8">Ready to Elevate<br>Your Warranty Service?</h2>
            <p class="text-xl text-white/80 leading-relaxed max-w-2xl mx-auto mb-12">
                Provide professional warranty cards. Boost lab credibility. Enhance the customer experience.
            </p>
            <div class="apple-cta-group">
                <a href="{{ home_url('request-demo/') }}" class="apple-cta-primary apple-cta-primary--light">
                    Request a Warranty Demo
                </a>
                <a href="{{ home_url('products/dental-lab-software/') }}" class="apple-cta-secondary apple-cta-secondary--light">
                    Explore the Platform <span class="apple-chevron">›</span>
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
