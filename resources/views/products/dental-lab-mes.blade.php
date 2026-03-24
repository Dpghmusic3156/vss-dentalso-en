{{-- Template Name: Product: DentalSO MES --}}
@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-hero bg-white">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <span class="apple-eyebrow">Manufacturing Execution System</span>
            <h1 class="apple-headline mb-6">DentalSO MES</h1>
            <p class="apple-hero-copy">
                Real-time production floor visibility. Case-by-case control. On-time delivery — every time.
            </p>
            <div class="apple-cta-group my-10">
                <a href="{{ home_url('request-demo/') }}" class="apple-cta-primary">Schedule a MES Demo</a>
                <a href="{{ home_url('products/dental-lab-software/') }}" class="apple-cta-secondary">Explore Platform<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
            </div>
        </div>
        <div class="fade-in-up mt-10" style="animation-delay: 0.2s;">
            <div class="bg-white rounded-2xl overflow-hidden p-1 max-w-5xl mx-auto shadow-sm">
                <img src="@asset('images/mes-dashboard-hero.png')" alt="DentalSO MES Dashboard — Real-time production monitoring" class="rounded-xl w-full">
            </div>
        </div>
    </div>
</section>

{{-- What Is MES — Dark Section --}}
<section class="apple-section apple-section--dark">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow apple-eyebrow--light">What Is MES?</span>
            <h2 class="apple-headline text-white">The production core<br>of DentalSO.</h2>
            <p class="apple-body text-[#86868b] mt-4 max-w-xl mx-auto">
                DentalSO MES transforms complex lab workflows into a structured, trackable, and priority-driven system — purpose-built for dental manufacturing.
            </p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 max-w-4xl mx-auto">
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.05s;">
                <span class="material-symbols-outlined text-4xl text-[#0a84ff] mb-4">monitoring</span>
                <p class="text-white font-semibold text-sm mb-1">Real-Time Monitoring</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Live dashboard of every case, every stage, every technician.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.1s;">
                <span class="material-symbols-outlined text-4xl text-[#30d158] mb-4">route</span>
                <p class="text-white font-semibold text-sm mb-1">Case-by-Case Tracking</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Follow each case from intake through delivery with full traceability.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.15s;">
                <span class="material-symbols-outlined text-4xl text-[#ff9f0a] mb-4">sort</span>
                <p class="text-white font-semibold text-sm mb-1">Priority Scheduling</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Intelligent prioritization based on deadlines and capacity.</p>
            </div>
            <div class="apple-glass-card fade-in-up" style="animation-delay: 0.2s;">
                <span class="material-symbols-outlined text-4xl text-[#ff453a] mb-4">crisis_alert</span>
                <p class="text-white font-semibold text-sm mb-1">Delay Prevention</p>
                <p class="text-[#86868b] text-xs leading-relaxed">Proactive alerts for bottlenecks and deadline risks.</p>
            </div>
        </div>
    </div>
</section>

{{-- Feature 1: Production Floor Monitoring --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="apple-split">
            <div class="apple-split-text fade-in-up">
                <span class="apple-eyebrow">Live Dashboard</span>
                <h2 class="apple-headline-sm mb-4">Real-time production<br>floor monitoring.</h2>
                <p class="apple-body mb-6">See your entire operation at a glance. DentalSO MES provides a live operational dashboard displaying everything you need to make informed decisions.</p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[#0071e3] text-xl flex-shrink-0">visibility</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Ongoing cases by production stage</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[#0071e3] text-xl flex-shrink-0">group</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Technician workload distribution</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[#ff453a] text-xl flex-shrink-0">warning</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">At-risk or delayed cases flagged instantly</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl flex-shrink-0">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Finished cases ready for delivery</span>
                    </li>
                </ul>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden p-1">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2022/12/dental-online-lab-dashboard.png" alt="DentalSO MES — Real-time production dashboard" class="apple-split-img rounded-xl">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Feature 2: Case Tracking — Production Pipeline --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow">Full Traceability</span>
            <h2 class="apple-headline-sm">Case-by-case tracking<br>from start to finish.</h2>
            <p class="apple-body mt-3 max-w-xl mx-auto">
                Every case moves through structured production stages. Track progress, assigned technicians, and delivery deadlines in real time.
            </p>
        </div>

        {{-- Production Pipeline Visual --}}
        <div class="max-w-5xl mx-auto mb-16 fade-in-up">
            <div class="flex flex-wrap lg:flex-nowrap justify-center lg:justify-between items-center gap-2 text-xs font-medium text-[#1d1d1f]">
                <span class="px-4 py-2 bg-[#e3f0fc] text-[#0071e3] rounded-full font-semibold whitespace-nowrap">Intake</span>
                <span class="text-[#86868b] font-bold">→</span>
                <span class="px-4 py-2 bg-[#f5f5f7] rounded-full border border-[#d2d2d7] whitespace-nowrap">Design</span>
                <span class="text-[#86868b] font-bold">→</span>
                <span class="px-4 py-2 bg-[#f5f5f7] rounded-full border border-[#d2d2d7] whitespace-nowrap">CAM</span>
                <span class="text-[#86868b] font-bold">→</span>
                <span class="px-4 py-2 bg-[#f5f5f7] rounded-full border border-[#d2d2d7] whitespace-nowrap">Milling / Printing</span>
                <span class="text-[#86868b] font-bold">→</span>
                <span class="px-4 py-2 bg-[#f5f5f7] rounded-full border border-[#d2d2d7] whitespace-nowrap">Finishing</span>
                <span class="text-[#86868b] font-bold">→</span>
                <span class="px-4 py-2 bg-[#f5f5f7] rounded-full border border-[#d2d2d7] whitespace-nowrap">Quality Control</span>
                <span class="text-[#86868b] font-bold">→</span>
                <span class="px-4 py-2 bg-[#f5f5f7] rounded-full border border-[#d2d2d7] whitespace-nowrap">Packaging</span>
                <span class="text-[#86868b] font-bold">→</span>
                <span class="px-4 py-2 bg-[#30d158] text-white rounded-full font-semibold whitespace-nowrap">Delivery</span>
            </div>
        </div>

        {{-- Case Detail Cards --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-4xl mx-auto">
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.05s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#e3f0fc]">
                        <span class="material-symbols-outlined text-[#0071e3]">info</span>
                    </div>
                    <h3 class="apple-card-title">Current Stage</h3>
                    <p class="apple-card-desc">See exactly where each case is in your production pipeline at any moment.</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.1s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#ece5f6]">
                        <span class="material-symbols-outlined text-[#bf5af2]">person</span>
                    </div>
                    <h3 class="apple-card-title">Assigned Technician</h3>
                    <p class="apple-card-desc">Know who is working on each case and their current workload.</p>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.15s;">
                <div class="apple-card-inner">
                    <div class="apple-card-icon bg-[#fef3e2]">
                        <span class="material-symbols-outlined text-[#ff9f0a]">timer</span>
                    </div>
                    <h3 class="apple-card-title">Time & Priority</h3>
                    <p class="apple-card-desc">Track time in each stage, delivery deadlines, and auto-calculated priority levels.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Feature 3: Priority Scheduling — Split Layout --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="apple-split apple-split--reverse">
            <div class="apple-split-text fade-in-up">
                <span class="apple-eyebrow">Smart Scheduling</span>
                <h2 class="apple-headline-sm mb-4">Intelligent priority-based<br>production scheduling.</h2>
                <p class="apple-body mb-6">DentalSO MES automatically prioritizes cases based on delivery deadlines, remaining production time, and lab capacity. Technicians always know what to work on next.</p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl flex-shrink-0">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Priority-based scheduling</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl flex-shrink-0">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Capacity load balancing</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl flex-shrink-0">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Automated production queues</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-[#30d158] text-xl flex-shrink-0">check_circle</span>
                        <span class="text-[#1d1d1f] text-[0.9375rem]">Guided task lists for technicians</span>
                    </li>
                </ul>
            </div>
            <div class="apple-split-media fade-in-up" style="animation-delay: 0.15s;">
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden p-1">
                    <img src="{{ get_site_url() }}/wp-content/uploads/2022/08/clinic-dashboard.png" alt="DentalSO MES — Priority scheduling dashboard" class="apple-split-img rounded-xl">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Feature 4: Navigation & Prevention — Two Cards --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        <div class="text-center max-w-3xl mx-auto mb-16 fade-in-up">
            <span class="apple-eyebrow">Proactive Control</span>
            <h2 class="apple-headline-sm">Prevent delays before<br>they happen.</h2>
        </div>
        <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.05s;">
                <div class="apple-card-inner">
                    <h3 class="apple-card-title text-lg mb-4">For Technicians</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#0071e3] text-xl flex-shrink-0">checklist</span>
                            <span class="text-[#1d1d1f] text-[0.9375rem]">Priority-ordered task lists</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#0071e3] text-xl flex-shrink-0">arrow_forward</span>
                            <span class="text-[#1d1d1f] text-[0.9375rem]">Next available cases for processing</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#ff453a] text-xl flex-shrink-0">schedule</span>
                            <span class="text-[#1d1d1f] text-[0.9375rem]">Cases nearing deadline</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#ff9f0a] text-xl flex-shrink-0">block</span>
                            <span class="text-[#1d1d1f] text-[0.9375rem]">Flagged/Blocked cases pinned</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="apple-card apple-card--white fade-in-up" style="animation-delay: 0.1s;">
                <div class="apple-card-inner">
                    <h3 class="apple-card-title text-lg mb-4">For Supervisors</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#bf5af2] text-xl flex-shrink-0">crisis_alert</span>
                            <span class="text-[#1d1d1f] text-[0.9375rem]">Spot bottlenecks by department</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#bf5af2] text-xl flex-shrink-0">group</span>
                            <span class="text-[#1d1d1f] text-[0.9375rem]">Identify overworked technicians</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#30d158] text-xl flex-shrink-0">battery_full</span>
                            <span class="text-[#1d1d1f] text-[0.9375rem]">Detect idle capacity</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-[#ff453a] text-xl flex-shrink-0">warning</span>
                            <span class="text-[#1d1d1f] text-[0.9375rem]">Late delivery risk indicators</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Designed for Dental Labs — Stats --}}
<section class="apple-section--sm bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="text-center mb-12 fade-in-up">
            <span class="apple-eyebrow">Purpose-Built</span>
            <h2 class="apple-headline-sm">Designed specifically<br>for dental laboratories.</h2>
            <p class="apple-body mt-3 max-w-xl mx-auto">
                Unlike generic MES systems, DentalSO MES understands dental production variability — not just assembly-line manufacturing.
            </p>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 max-w-3xl mx-auto">
            <div class="bg-white rounded-2xl p-5 text-center fade-in-up" style="animation-delay: 0.05s;">
                <span class="material-symbols-outlined text-3xl text-[#0071e3] mb-2">precision_manufacturing</span>
                <p class="text-sm font-semibold text-[#1d1d1f]">Case-based workflow</p>
            </div>
            <div class="bg-white rounded-2xl p-5 text-center fade-in-up" style="animation-delay: 0.1s;">
                <span class="material-symbols-outlined text-3xl text-[#bf5af2] mb-2">account_tree</span>
                <p class="text-sm font-semibold text-[#1d1d1f]">Multi-stage prosthetic mfg</p>
            </div>
            <div class="bg-white rounded-2xl p-5 text-center fade-in-up" style="animation-delay: 0.15s;">
                <span class="material-symbols-outlined text-3xl text-[#30d158] mb-2">person_pin</span>
                <p class="text-sm font-semibold text-[#1d1d1f]">Technician assignment</p>
            </div>
            <div class="bg-white rounded-2xl p-5 text-center fade-in-up" style="animation-delay: 0.2s;">
                <span class="material-symbols-outlined text-3xl text-[#ff9f0a] mb-2">verified</span>
                <p class="text-sm font-semibold text-[#1d1d1f]">Quality checkpoints</p>
            </div>
            <div class="bg-white rounded-2xl p-5 text-center fade-in-up" style="animation-delay: 0.25s;">
                <span class="material-symbols-outlined text-3xl text-[#ff453a] mb-2">autorenew</span>
                <p class="text-sm font-semibold text-[#1d1d1f]">Remake tracking</p>
            </div>
            <div class="bg-white rounded-2xl p-5 text-center fade-in-up" style="animation-delay: 0.3s;">
                <span class="material-symbols-outlined text-3xl text-[#0071e3] mb-2">local_shipping</span>
                <p class="text-sm font-semibold text-[#1d1d1f]">Delivery coordination</p>
            </div>
        </div>
    </div>
</section>

{{-- Results — Stats Strip --}}
<section class="apple-section--sm bg-white">
    <div class="apple-container">
        <div class="text-center mb-12 fade-in-up">
            <span class="apple-eyebrow">The Result</span>
            <h2 class="apple-headline-sm">Predictable, on-time delivery.</h2>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 max-w-4xl mx-auto text-center">
            <div class="fade-in-up" style="animation-delay: 0.05s;">
                <p class="text-4xl lg:text-5xl font-bold text-[#1d1d1f] tracking-tight">40%</p>
                <p class="text-sm text-[#86868b] mt-2">Faster turnaround time</p>
            </div>
            <div class="fade-in-up" style="animation-delay: 0.1s;">
                <p class="text-4xl lg:text-5xl font-bold text-[#1d1d1f] tracking-tight">95%</p>
                <p class="text-sm text-[#86868b] mt-2">On-time delivery rate</p>
            </div>
            <div class="fade-in-up" style="animation-delay: 0.15s;">
                <p class="text-4xl lg:text-5xl font-bold text-[#1d1d1f] tracking-tight">60%</p>
                <p class="text-sm text-[#86868b] mt-2">Fewer communication errors</p>
            </div>
            <div class="fade-in-up" style="animation-delay: 0.2s;">
                <p class="text-4xl lg:text-5xl font-bold text-[#1d1d1f] tracking-tight">300+</p>
                <p class="text-sm text-[#86868b] mt-2">Labs trust DentalSO</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="apple-section apple-section--cta">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h2 class="apple-headline text-white mb-4">Take control of your<br>production floor.</h2>
            <p class="text-white/70 text-lg mb-8 max-w-lg mx-auto">See how DentalSO MES transforms reactive scheduling into proactive, data-driven production management.</p>
            <div class="apple-cta-group">
                <a href="{{ home_url('request-demo/') }}" class="apple-cta-primary apple-cta-primary--light">Schedule a MES Demo</a>
                <a href="{{ home_url('products/dentalso-connect/') }}" class="apple-cta-secondary apple-cta-secondary--light">Explore DentalSO Connect<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
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
