{{-- Template Name: Solution: Small & Medium Labs --}}
@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-hero bg-white">
    <div class="apple-container text-center">
        <div>
            <span class="apple-eyebrow hero-stagger-1">Cost-Effective & Efficient Solutions</span>
            <h1 class="apple-headline mb-4 hero-stagger-2">Dental Lab Software for<br>Small Labs & Startups</h1>
            <p class="text-[1.25rem] md:text-[1.5rem] font-bold text-[#0071e3] tracking-tight mb-6 hero-stagger-3">
                Low Cost – Optimized for Small Labs – FREE Trial
            </p>

            
            <div class="apple-cta-group hero-stagger-5">
                <a href="{{ home_url('request-demo/') }}" class="apple-cta-primary apple-cta-primary--blue cta-pulse">REQUEST DEMO NOW</a>
                <a href="{{ home_url('contact/') }}" class="apple-cta-secondary">Contact Us <span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
            </div>

            {{-- Trust Signals --}}
            <!--<div class="apple-trust-bar">
                <div class="trust-item trust-pop-1">
                    <span class="material-symbols-outlined">check_circle</span>
                    <span>Transparent, clear pricing</span>
                </div>
                <div class="trust-sep trust-pop-1"></div>
                <div class="trust-item trust-pop-2">    
                    <span class="material-symbols-outlined">check_circle</span>
                    <span>Deploy in 30 minutes</span>
                </div>
                <div class="trust-sep trust-pop-2"></div>
                <div class="trust-item trust-pop-3">
                    <span class="material-symbols-outlined">check_circle</span>
                    <span>24/7 Support</span>
                </div>
            </div>-->
        </div>
        {{-- Hero image --}}
        <div class="apple-hero-img-wrapper hero-stagger-6">
            <img src="@asset('images/small-labo-hero.png')" alt="DentalSO Small Lab Management - Affordable dental lab management software, free trial" class="apple-hero-img animate-float">
        </div>
    </div>
</section>

{{-- What You Get --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="text-center max-w-4xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow">What You Get</span>
            <h1 class="text-[1.75rem] md:text-[2.25rem] font-bold text-[#1d1d1f] tracking-tight mb-2">Key Benefits</h1>
            <h2 class="apple-headline-sm">Build Professional Workflows –<br>A Fast-Growth Foundation for Small Labs</h2>
        </div>

        {{-- Row 1: 2 large cards with images --}}
        <div class="grid md:grid-cols-2 gap-6 max-w-6xl mx-auto mb-6">
            {{-- Card 1: End-to-end Workflow --}}
            <div class="apple-card apple-card--white apple-lift fade-in-up fade-delay-1 overflow-hidden">
                <div class="w-full bg-[#e3f0fc] flex items-center justify-center border-b border-black/5 p-2">
                    <div class="bg-[#f5f5f7] rounded-2xl shadow-lg overflow-hidden p-1 w-full group-hover:scale-[1.02] transition-transform duration-500">
                        <img src="@asset('images/quytrinhsanxuat.png')" alt="DentalSO Workflow - Affordable dental lab management software, free trial" class="w-full h-auto object-contain rounded-xl parallax-img" loading="lazy">
                    </div>
                </div>
                <div class="apple-card-inner p-6">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 rounded-xl bg-[#e3f0fc] flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined text-[#0071e3]">account_tree</span>
                        </div>
                        <h3 class="apple-card-title !mb-0">End-to-End Standardized Workflow</h3>
                    </div>
                    <p class="text-[#424245] text-[0.9375rem] leading-relaxed">
                        From order intake → real-time progress tracking → technician assignment → invoice generation. Every step is seamless, transparent, eliminating errors and delays.
                    </p>
                </div>
            </div>

            {{-- Card 2: Documents & Templates --}}
            <div class="apple-card apple-card--white apple-lift fade-in-up fade-delay-2 overflow-hidden">
                <div class="w-full bg-[#fef3e2] flex items-center justify-center border-b border-black/5 p-2">
                    <div class="bg-[#f5f5f7] rounded-2xl shadow-lg overflow-hidden p-1 w-full group-hover:scale-[1.02] transition-transform duration-500 relative group/slider">
                        <div class="slider-container flex w-full overflow-hidden rounded-xl relative" data-current="0">
                            @php
                                $sliderImages = ['phieubaoquyettoan.png','phieubaohanh.png', 'phieuchi.png', 'phieugiaohang.png', 'phieuthu.png', 'phieuyeucau.png'];
                            @endphp
                            @foreach($sliderImages as $img)
                            <img src="@asset('images/mauthe/' . $img)" class="w-full h-auto object-contain flex-shrink-0 transition-transform duration-500 ease-in-out" alt="DentalSO Documents and Templates - Affordable dental lab management software, free trial" loading="lazy">
                            @endforeach
                            <div class="w-full flex-shrink-0 flex flex-col items-center justify-center transition-transform duration-500 ease-in-out bg-white p-6">
                                <span class="material-symbols-outlined text-[3rem] text-[#ff9f0a] mb-3">folder_open</span>
                                <div class="text-[#1d1d1f] font-[600] text-[1.125rem] text-center leading-snug">And dozens of other<br>documents and templates</div>
                            </div>
                        </div>
                        
                        <button onclick="event.preventDefault(); event.stopPropagation(); let c = this.parentElement.querySelector('.slider-container'); let curr = parseInt(c.getAttribute('data-current') || 0); let tot = c.children.length; curr = (curr === 0) ? tot - 1 : curr - 1; c.setAttribute('data-current', curr); Array.from(c.children).forEach(el => el.style.transform = `translateX(-${curr * 100}%)`);" class="absolute left-3 top-1/2 -translate-y-1/2 w-8 h-8 flex items-center justify-center bg-white/90 hover:bg-white text-black shadow-md rounded-full transition-all duration-300 z-10 opacity-0 group-hover/slider:opacity-100">
                            <span class="material-symbols-outlined text-[1.25rem]">chevron_left</span>
                        </button>
                        
                        <button onclick="event.preventDefault(); event.stopPropagation(); let c = this.parentElement.querySelector('.slider-container'); let curr = parseInt(c.getAttribute('data-current') || 0); let tot = c.children.length; curr = (curr === tot - 1) ? 0 : curr + 1; c.setAttribute('data-current', curr); Array.from(c.children).forEach(el => el.style.transform = `translateX(-${curr * 100}%)`);" class="absolute right-3 top-1/2 -translate-y-1/2 w-8 h-8 flex items-center justify-center bg-white/90 hover:bg-white text-black shadow-md rounded-full transition-all duration-300 z-10 opacity-0 group-hover/slider:opacity-100">
                            <span class="material-symbols-outlined text-[1.25rem]">chevron_right</span>
                        </button>
                    </div>
                </div>
                <div class="apple-card-inner p-6">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 rounded-xl bg-[#fef3e2] flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined text-[#ff9f0a]">description</span>
                        </div>
                        <h3 class="apple-card-title !mb-0">Professional Documents & Templates</h3>
                    </div>
                    <p class="text-[#424245] text-[0.9375rem] leading-relaxed">
                        Dozens of beautifully designed, unified templates (orders, acceptance, warranty, invoices…). Look professional from your very first case and build trust with dentists and clinics.
                    </p>
                </div>
            </div>
        </div>

        {{-- Row 2: 3 smaller cards --}}
        {{-- Section 3 distinct cards --}}
        <div class="space-y-6 max-w-4xl mx-auto mt-6">
            {{-- Card 3: High Automation --}}
            <div class="apple-card apple-card--white apple-lift fade-in-up fade-delay-3 p-6 sm:p-8 flex flex-col sm:flex-row items-start gap-6">
                <div class="w-16 h-16 rounded-2xl bg-[#e2f5e9] flex items-center justify-center flex-shrink-0">
                    <span class="material-symbols-outlined text-[#30d158] text-3xl">bolt</span>
                </div>
                <div>
                    <h3 class="apple-card-title !mb-1">High Automation</h3>
                    <p class="text-[0.9375rem] font-medium text-[#1d1d1f] mb-4">Minimize manual work</p>
                    <ul class="space-y-2 text-[#424245] text-[0.9375rem]">
                        <li class="flex items-start gap-3"><span class="material-symbols-outlined text-[#30d158] flex-shrink-0 mt-0.5 text-[1.125rem]">check_circle</span> Automatically assign tasks to each technician</li>
                        <li class="flex items-start gap-3"><span class="material-symbols-outlined text-[#30d158] flex-shrink-0 mt-0.5 text-[1.125rem]">check_circle</span> Auto-remind about delivery orders based on entered time</li>
                        <li class="flex items-start gap-3"><span class="material-symbols-outlined text-[#30d158] flex-shrink-0 mt-0.5 text-[1.125rem]">check_circle</span> Connect warranty data between patient and product information</li>
                        <li class="flex items-start gap-3"><span class="material-symbols-outlined text-[#30d158] flex-shrink-0 mt-0.5 text-[1.125rem]">check_circle</span> Centralize data management per order, reducing search time</li>
                        <li class="flex items-start gap-3"><span class="material-symbols-outlined text-[#30d158] flex-shrink-0 mt-0.5 text-[1.125rem]">check_circle</span> Cut data entry time and operational costs via high automation</li>
                    </ul>
                </div>
            </div>

            {{-- Card 4: Low Cost --}}
            <div class="apple-card apple-card--white apple-lift fade-in-up fade-delay-4 p-6 sm:p-8 flex flex-col sm:flex-row items-start gap-6">
                <div class="w-16 h-16 rounded-2xl bg-[#f5e6fe] flex items-center justify-center flex-shrink-0">
                    <span class="material-symbols-outlined text-[#bf5af2] text-3xl">savings</span>
                </div>
                <div>
                    <h3 class="apple-card-title !mb-1">Low Cost</h3>
                    <p class="text-[0.9375rem] font-medium text-[#1d1d1f] mb-4">Perfect for small labs & startups</p>
                    <ul class="space-y-2 text-[#424245] text-[0.9375rem]">
                        <li class="flex items-start gap-3"><span class="material-symbols-outlined text-[#bf5af2] flex-shrink-0 mt-0.5 text-[1.125rem]">check_circle</span> Zero initial app development fees, only pay a monthly subscription</li>
                        <li class="flex items-start gap-3"><span class="material-symbols-outlined text-[#bf5af2] flex-shrink-0 mt-0.5 text-[1.125rem]">check_circle</span> Extremely low cost of software usage</li>
                        <li class="flex items-start gap-3"><span class="material-symbols-outlined text-[#bf5af2] flex-shrink-0 mt-0.5 text-[1.125rem]">check_circle</span> Flexible payment model: Pay as you go</li>
                    </ul>
                </div>
            </div>

            {{-- Card 5: Solid Foundation --}}
            <div class="apple-card apple-card--white apple-lift fade-in-up fade-delay-5 p-6 sm:p-8 flex flex-col sm:flex-row items-start gap-6">
                <div class="w-16 h-16 rounded-2xl bg-[#fff3e0] flex items-center justify-center flex-shrink-0">
                    <span class="material-symbols-outlined text-[#ff6d00] text-3xl">rocket_launch</span>
                </div>
                <div>
                    <h3 class="apple-card-title !mb-1">Solid Foundation</h3>
                    <p class="text-[0.9375rem] font-medium text-[#1d1d1f] mb-4">Scale fast without chaos</p>
                    <ul class="space-y-2 text-[#424245] text-[0.9375rem]">
                        <li class="flex items-start gap-3"><span class="material-symbols-outlined text-[#ff6d00] flex-shrink-0 mt-0.5 text-[1.125rem]">check_circle</span> Scientific management process helps businesses scale fast</li>
                        <li class="flex items-start gap-3"><span class="material-symbols-outlined text-[#ff6d00] flex-shrink-0 mt-0.5 text-[1.125rem]">check_circle</span> System operates stably with 99.9% uptime on a Cloud platform</li>
                        <li class="flex items-start gap-3"><span class="material-symbols-outlined text-[#ff6d00] flex-shrink-0 mt-0.5 text-[1.125rem]">check_circle</span> Automatic data backups ensuring high-level security</li>
                        <li class="flex items-start gap-3"><span class="material-symbols-outlined text-[#ff6d00] flex-shrink-0 mt-0.5 text-[1.125rem]">check_circle</span> Supports an unlimited number of user accounts</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Mini Comparison Table --}}
        <div class="mt-14 max-w-4xl mx-auto scale-in">
            <div class="bg-white rounded-[1.25rem] overflow-hidden shadow-sm border border-black/5">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse min-w-[600px]">
                        <thead>
                            <tr class="border-b border-black/5 bg-[#fbfbfd]">
                                <th class="p-5 md:p-6 font-medium text-[#86868b] w-1/3">Criteria</th>
                                <th class="p-5 md:p-6 font-medium text-[#86868b] w-1/3">Excel & Manual</th>
                                <th class="p-5 md:p-6 font-semibold text-[#0071e3] w-1/3">DentalSO for Small Labs</th>
                            </tr>
                        </thead>
                        <tbody class="text-[0.9375rem] md:text-base">
                            <tr class="border-b border-black/5 hover:bg-[#fbfbfd] transition-colors table-row-reveal">
                                <td class="p-5 md:p-6 font-medium text-[#1d1d1f]">Cost</td>
                                <td class="p-5 md:p-6 text-[#86868b]">Low initially, high long-term</td>
                                <td class="p-5 md:p-6"><span class="flex items-center font-semibold text-[#1d1d1f]"><span class="material-symbols-outlined text-[#30d158] mr-2">check_circle</span> Affordable & fixed monthly</span></td>
                            </tr>
                            <tr class="border-b border-black/5 hover:bg-[#fbfbfd] transition-colors table-row-reveal">
                                <td class="p-5 md:p-6 font-medium text-[#1d1d1f]">Data Entry Time</td>
                                <td class="p-5 md:p-6 text-[#86868b]">Extensive</td>
                                <td class="p-5 md:p-6"><span class="flex items-center font-semibold text-[#1d1d1f]"><span class="material-symbols-outlined text-[#30d158] mr-2">check_circle</span> Reduced by 70-80%</span></td>
                            </tr>
                            <tr class="border-b border-black/5 hover:bg-[#fbfbfd] transition-colors table-row-reveal">
                                <td class="p-5 md:p-6 font-medium text-[#1d1d1f]">Errors & Mistakes</td>
                                <td class="p-5 md:p-6 text-[#86868b]">High</td>
                                <td class="p-5 md:p-6"><span class="flex items-center font-semibold text-[#1d1d1f]"><span class="material-symbols-outlined text-[#30d158] mr-2">check_circle</span> Significantly reduced</span></td>
                            </tr>
                            <tr class="border-b border-black/5 hover:bg-[#fbfbfd] transition-colors table-row-reveal">
                                <td class="p-5 md:p-6 font-medium text-[#1d1d1f]">Billing Reports</td>
                                <td class="p-5 md:p-6 text-[#86868b]">Manual</td>
                                <td class="p-5 md:p-6"><span class="flex items-center font-semibold text-[#1d1d1f]"><span class="material-symbols-outlined text-[#30d158] mr-2">check_circle</span> Automated & Real-time</span></td>
                            </tr>
                            <tr class="hover:bg-[#fbfbfd] transition-colors table-row-reveal">
                                <td class="p-5 md:p-6 font-medium text-[#1d1d1f]">Warranty Tracking</td>
                                <td class="p-5 md:p-6 text-[#86868b]">Easily forgotten</td>
                                <td class="p-5 md:p-6"><span class="flex items-center font-semibold text-[#1d1d1f]"><span class="material-symbols-outlined text-[#30d158] mr-2">check_circle</span> Clear & organized</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Designed for Growing Labs --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="apple-split">
            <div class="apple-split-text slide-in-left">
                <span class="apple-eyebrow">The Platform</span>
                <h2 class="apple-headline-sm mb-4">Designed for Growing Labs</h2>
                <p class="apple-body mb-6">DentalSO helps you build a scalable foundation for growth without the operational chaos.</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#bf5af2] text-xl flex-shrink-0 mt-[2px]">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Reduce operational chaos</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#bf5af2] text-xl flex-shrink-0 mt-[2px]">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Improve case visibility</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#bf5af2] text-xl flex-shrink-0 mt-[2px]">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Deliver on time consistently</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="material-symbols-outlined text-[#bf5af2] text-xl flex-shrink-0 mt-[2px]">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Build a scalable foundation for growth</span>
                    </li>
                </ul>
            </div>
            <div class="apple-split-media slide-in-right">
                <div class="bg-[#f5f5f7] rounded-2xl shadow-lg overflow-hidden p-1">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2022/12/dental-online-lab-dashboard.png" alt="DentalSO Platform Dashboard - Affordable dental lab management software, free trial" class="apple-split-img rounded-xl parallax-img" loading="lazy">
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
    <section class="max-w-7xl mx-auto px-8 mb-32">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="slide-in-left">
                <h3 class="apple-headline-sm">Manual Tracking</h3>
                <p class="text-lg text-[#1d1d1f] leading-relaxed mt-4">
                    You manage cases using Excel or paper. As your lab grows, spreadsheets become error-prone and time-consuming.
                </p>
                <div class="mt-8 flex gap-4">
                    <div class="p-4 rounded-xl bg-[#f5f5f7] stat-animate">
                        <span class="block text-2xl font-semibold text-[#34a853]">80%</span>
                        <span class="text-sm text-[#86868b]">Time spent on manual entry</span>
                    </div>
                    <div class="p-4 rounded-xl bg-[#f5f5f7] stat-animate">
                        <span class="block text-2xl font-semibold text-[#34a853]">3x</span>
                        <span class="text-sm text-[#86868b]">More errors vs digital</span>
                    </div>
                </div>
            </div>
            <div class="relative group slide-in-right">
                <div class="absolute -inset-4 rounded-3xl blur-2xl transition-colors" style="background-color: rgba(52,168,83,0.05);"></div>
                <div class="relative rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    <img src="@asset('images/zigzag_manual_tracking.webp')" alt="Managing cases with Excel spreadsheets and paper - Affordable dental lab management software, free trial" class="w-full h-auto object-cover parallax-img" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Item 2: Poor Visibility --}}
    <section class="bg-[#f5f5f7] py-24">
        <div class="max-w-7xl mx-auto px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="order-2 md:order-1 relative group slide-in-left">
                    <div class="absolute -inset-4 rounded-3xl blur-2xl transition-colors" style="background-color: rgba(255,159,10,0.1);"></div>
                    <div class="relative rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                        <img src="@asset('images/zigzag_poor_visibility.webp')" alt="Struggling to track case status - Affordable dental lab management software, free trial" class="w-full h-auto object-cover parallax-img" loading="lazy">
                    </div>
                </div>
                <div class="order-1 md:order-2 slide-in-right">
                    <h3 class="apple-headline-sm">Lack of Visibility?</h3>
                    <p class="text-[1.25rem] font-semibold text-[#1d1d1f] mt-4 mb-2">Struggling to track where your cases are?</p>
                    <p class="text-lg text-[#424245] leading-relaxed">
                        A case sent in the morning, yet by afternoon you're still asking staff "Where is it?". When customers call for updates, you give vague answers like "It's being worked on"... deadlines are missed, customers lose trust and switch to another lab.
                    </p>
                    
                    <p class="font-bold text-[#1d1d1f] mt-8 mb-4">Common challenges for small labs:</p>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3 text-[#1d1d1f]">
                            <span class="material-symbols-outlined flex-shrink-0 mt-[2px]" style="color: #ff9f0a;" aria-hidden="true">error</span>
                            <span>Don't know which stage a case is at</span>
                        </li>
                        <li class="flex items-start gap-3 text-[#1d1d1f]">
                            <span class="material-symbols-outlined flex-shrink-0 mt-[2px]" style="color: #ff9f0a;" aria-hidden="true">error</span>
                            <span>Cannot answer quickly when customers ask for progress</span>
                        </li>
                        <li class="flex items-start gap-3 text-[#1d1d1f]">
                            <span class="material-symbols-outlined flex-shrink-0 mt-[2px]" style="color: #ff9f0a;" aria-hidden="true">error</span>
                            <span>Must constantly ask staff → easy to miss urgent or warranty cases</span>
                        </li>
                        <li class="flex items-start gap-3 text-[#1d1d1f]">
                            <span class="material-symbols-outlined flex-shrink-0 mt-[2px]" style="color: #ff9f0a;" aria-hidden="true">error</span>
                            <span>Easy to forget remakes → unexpected complaints</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Item 3: Need Simplicity --}}
    <section class="max-w-7xl mx-auto px-8 my-32">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="slide-in-left">
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
                        <div class="h-full progress-fill-animate" style="--fill-width: 90%; background-color: #0a84ff;"></div>
                    </div>
                </div>
            </div>
            <div class="relative group slide-in-right">
                <div class="absolute -inset-4 rounded-3xl blur-2xl transition-colors" style="background-color: rgba(10,132,255,0.05);"></div>
                <div class="relative rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                    <img src="@asset('images/zigzag_need_simplicity.webp')" alt="Simple and easy-to-use interface - Affordable dental lab management software, free trial" class="w-full h-auto object-cover parallax-img" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- Item 4: Scaling Up --}}
    <section class="py-24" style="background-color: rgba(48,209,88,0.04);">
        <div class="max-w-7xl mx-auto px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="order-2 md:order-1 relative group slide-in-left">
                    <div class="absolute -inset-4 rounded-3xl blur-2xl transition-colors" style="background-color: rgba(48,209,88,0.08);"></div>
                    <div class="relative rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                        <img src="@asset('images/zigzag_scaling_up.webp')" alt="Dental lab scaling up operations - Affordable dental lab management software, free trial" class="w-full h-auto object-cover parallax-img" loading="lazy">
                    </div>
                </div>
                <div class="order-1 md:order-2 slide-in-right">
                    <h3 class="apple-headline-sm">Scaling Up</h3>
                    <p class="text-lg text-[#1d1d1f] leading-relaxed mt-4">
                        You are growing but not ready for a full MES system yet. DentalSO gives you room to scale without overcommitting.
                    </p>
                    <div class="mt-8 flex flex-col gap-4">
                        <div class="flex items-start gap-4 p-4 rounded-xl bg-white/50 backdrop-blur-sm border border-gray-100 apple-lift">
                            <span class="material-symbols-outlined" style="color: #30d158;" aria-hidden="true">trending_up</span>
                            <div>
                                <div class="font-semibold text-[#1d1d1f]">Start small</div>
                                <p class="text-sm text-[#86868b]">Begin with core features, add modules as you grow.</p>
                            </div>
                        </div>
                        <a href="{{ home_url('products/dental-lab-mes/') }}" class="flex items-start gap-4 p-4 rounded-xl bg-white/50 backdrop-blur-sm border border-gray-100 apple-lift group decoration-none">
                            <span class="material-symbols-outlined" style="color: #30d158;" aria-hidden="true">upgrade</span>
                            <div>
                                <div class="font-semibold text-[#1d1d1f] group-hover:text-[#0071e3] transition-colors">Upgrade when ready</div>
                                <p class="text-sm text-[#86868b]">Seamlessly move to MES when you need it.</p>
                            </div>
                        </a>
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
                <a href="{{ home_url('request-demo/') }}" class="apple-cta-primary apple-cta-primary--light apple-press">Book a Demo</a>
                <a href="{{ home_url('contact/') }}" class="apple-cta-secondary apple-cta-secondary--light">Contact Sales<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Main scroll observer for fade-in-up, slide-in, scale-in
    const mainObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                mainObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

    document.querySelectorAll('.fade-in-up, .slide-in-left, .slide-in-right, .scale-in, .stat-animate').forEach(el => {
        mainObserver.observe(el);
    });

    // Table row stagger observer
    const tableObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const rows = entry.target.querySelectorAll('.table-row-reveal');
                rows.forEach((row, i) => {
                    setTimeout(() => {
                        row.classList.add('is-visible');
                    }, i * 100);
                });
                tableObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    document.querySelectorAll('table').forEach(table => {
        tableObserver.observe(table);
    });
});
</script>

@endsection
