@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section apple-section--sm bg-[#f5f5f7]">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <h1 class="apple-headline mb-4">Dental Lab Management<br>Insights & Industry Trends</h1>
            <p class="apple-hero-copy">
                Explore articles on production optimization, digital transformation in dental labs, workflow automation, and quality control best practices. Stay informed and competitive.
            </p>
        </div>
    </div>
</section>

{{-- Blog Posts Grid --}}
<section class="apple-section bg-white">
    <div class="apple-container">
        @if (! have_posts())
            <div class="text-center fade-in-up">
                <p class="apple-body">Sorry, no results were found.</p>
                {!! get_search_form(false) !!}
            </div>
        @endif

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @while(have_posts()) @php(the_post())
            <article class="apple-card fade-in-up">
                @if(has_post_thumbnail())
                <div class="apple-card-img-wrapper" style="padding: 0;">
                    <a href="{{ get_permalink() }}">
                        {!! get_the_post_thumbnail(null, 'medium_large', ['class' => 'w-full h-48 object-cover rounded-t-[20px]']) !!}
                    </a>
                </div>
                @endif
                <div class="apple-card-inner">
                    <time class="text-xs text-[#86868b] uppercase tracking-wide mb-2 block">
                        {{ get_the_date() }}
                    </time>
                    <h2 class="apple-card-title">
                        <a href="{{ get_permalink() }}" class="text-[#1d1d1f] hover:text-[#0071e3] transition-colors">
                            {!! get_the_title() !!}
                        </a>
                    </h2>
                    <p class="apple-card-desc">{!! get_the_excerpt() !!}</p>
                    <a href="{{ get_permalink() }}" class="apple-link mt-auto">
                        Read more <span class="apple-chevron">›</span>
                    </a>
                </div>
            </article>
            @endwhile
        </div>

        <div class="mt-16 text-center">
            {!! get_the_posts_navigation() !!}
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