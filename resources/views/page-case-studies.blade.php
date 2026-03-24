@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-hero bg-white">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <span class="apple-eyebrow">Resources</span>
            <h1 class="apple-headline mb-6">Case Studies</h1>
            <p class="apple-hero-copy">
                See how dental laboratories around the world use DentalSO to streamline operations, reduce delays, and scale their businesses.
            </p>
        </div>
    </div>
</section>

{{-- Coming Soon --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        <div class="text-center py-16 fade-in-up max-w-2xl mx-auto">
            <span class="material-symbols-outlined text-6xl text-[#d2d2d7] mb-6">auto_stories</span>
            <h2 class="apple-headline-sm mb-4">Coming Soon</h2>
            <p class="apple-body mb-8">We're documenting real-world success stories from dental labs that have transformed their workflows with DentalSO. Check back soon!</p>
            <div class="apple-cta-group">
                <a href="{{ home_url('request-demo/') }}" class="apple-cta-primary">Request a Demo</a>
                <a href="{{ home_url('contact/') }}" class="apple-cta-secondary">Contact Us<span class="apple-chevron material-symbols-outlined">chevron_right</span></a>
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
