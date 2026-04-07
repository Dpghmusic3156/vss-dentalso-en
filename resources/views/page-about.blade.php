@extends('layouts.app')

@section('page-header')
    @include('partials.page-header')
@endsection

@section('content')
<div class="bg-primary-50 py-20">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-primary-2 mb-6">Empowering Dental Excellence</h1>
        <p class=" text-lg max-w-2xl mx-auto leading-relaxed">
            Modernizing dental lab and clinic operations through intelligent, user-centric technology.
        </p>
    </div>
</div>

<div class="container mx-auto px-4 py-16 space-y-24">

    <section class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
        <div class="space-y-6">
            <span class="text-blue-600 font-bold uppercase tracking-wider text-sm">Who We Are</span>
            <h2 class="text-3xl md:text-4xl font-bold text-primary-2">Bridging Technology & Dentistry</h2>
            <div class="prose leading-relaxed space-y-4">
                <p>
                    DentalSO is an industry-leading software company dedicated to modernizing dental lab and clinic operations. Founded with a deep appreciation for the complexity of dental workflows, we’ve made it our mission to help dental professionals streamline production, improve efficiency, and elevate patient outcomes—without compromising quality or security.
                </p>
                <p>
                    From day one, we chose to focus exclusively on dentistry. By combining global best practices with hands-on industry experience, we’ve built a platform that truly understands the day-to-day challenges of labs and clinics.
                </p>
            </div>
            
            <div class="bg-blue-50 border-l-4 border-blue-600 p-4 mt-6">
                <p class="font-semibold text-blue-900">
                    Trusted by <span class="text-2xl font-bold">300+</span> companies worldwide to unlock new levels of operational productivity.
                </p>
            </div>
        </div>
        <div class="relative">
            <img loading="lazy" src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                 alt="DentalSO modern dental technology platform" 
                 class="rounded-3xl shadow-xl w-full object-cover h-[500px]">
        </div>
    </section>

    <section>
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-blue-600 font-bold uppercase tracking-wider text-sm">What We Do</span>
            <h2 class="text-3xl font-bold text-primary-2 mt-2 mb-4">A Comprehensive Ecosystem</h2>
            <p class="text-primary-2">
                Our solutions simplify complex workflows, enhance communication, and enable data-driven decision-making across the entire production and patient care lifecycle.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600 mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-primary-2 mb-4">DentalSO App for Lab (MES)</h3>
                <p class="text-primary-2 mb-6">
                    Our flagship Manufacturing Execution System offers real-time synchronization across the shop floor—from material intake to final prosthetic delivery.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="mr-2">✔</span> Track and trace every production step</li>
                    <li class="flex items-start"><span class="mr-2">✔</span> Optimize processes using data analytics</li>
                    <li class="flex items-start"><span class="mr-2">✔</span> Enforce quality control checkpoints</li>
                    <li class="flex items-start"><span class="mr-2">✔</span> Real-time production floor visibility</li>
                </ul>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center text-blue-600 mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-primary-2 mb-4">Secure Clinic–Lab Hub</h3>
                <p class="text-primary-2 mb-6">
                    A secure, cloud-based environment bridging the gap between clinics and labs for effortless collaboration.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="mr-2">✔</span> Centralized order management</li>
                    <li class="flex items-start"><span class="mr-2">✔</span> Instant updates & digital file sharing</li>
                    <li class="flex items-start"><span class="mr-2">✔</span> Secure patient info storage</li>
                    <li class="flex items-start"><span class="mr-2">✔</span> Compliance-ready infrastructure</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="bg-gray-50 rounded-3xl p-8 md:p-12">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-primary-2">Our Commitment</h2>
            <p class="text-primary-2 mt-2">We stand apart through our core values.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-4">
                <div class="w-16 h-16 inline-block p-4 bg-white rounded-full shadow-sm mb-4 text-blue-600">
                    <span class="material-symbols-outlined text-2xl align-middle">lightbulb</span> </div>
                <h4 class="text-xl font-bold mb-2">Industry-Specific Innovation</h4>
                <p class="text-primary-2 text-sm">Every feature is designed for dental workflows, not generic needs.</p>
            </div>
            
            <div class="text-center p-4">
                <div class="w-16 h-16 inline-block p-4 bg-white rounded-full shadow-sm mb-4 text-blue-600">
                    <span class="material-symbols-outlined text-2xl align-middle">shield</span>
                </div>
                <h4 class="text-xl font-bold mb-2">Enterprise-Grade Security</h4>
                <p class="text-primary-2 text-sm">SSL encryption, digital certificates, and RSA technology to protect patient privacy.</p>
            </div>

            <div class="text-center p-4">
                <div class="w-16 h-16 inline-block p-4 bg-white rounded-full shadow-sm mb-4 text-blue-600">
                    <span class="material-symbols-outlined text-2xl align-middle">trending_up</span>
                </div>
                <h4 class="text-xl font-bold mb-2">Proven Impact</h4>
                <p class="text-primary-2 text-sm">Hundreds of customers have increased efficiency and scaled operations.</p>
            </div>
        </div>
        <div class="text-center mt-8 pt-8 border-t border-gray-200">
            <p class="text-xl text-primary-2 italic">
            "Above all, we see ourselves not just as a software provider, but as a long-term partner. Our team continuously enhances the platform based on customer insights, ensuring our solutions evolve in step with industry needs."
        </p>
        </div>
    </div>
    </section>

    <section class="text-center max-w-4xl mx-auto py-10">
        <h2 class="text-3xl font-bold text-blue-900 mb-6">Our Vision</h2>
        <p class="text-xl text-primary-2 italic mb-10">
            "To become the global standard for dental lab and clinic management—empowering professionals with intelligent, seamless, and secure tools that improve workflows and ultimately create better smiles."
        </p>
        
        <div class="border-t border-gray-200 pt-10">
            <h3 class="text-2xl font-bold mb-4">Ready to learn more about DentalSO?</h3>
            <p class="text-primary-2 mb-8">Contact our team or schedule a demo to explore how we can elevate your operations.</p>
            <a href="<?php echo get_site_url(); ?>/request-demo" target="_blank" rel="noopener noreferrer" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full transition-colors duration-300 shadow-lg">
                Get in Touch
            </a>
        </div>
    </section>

</div>
@endsection