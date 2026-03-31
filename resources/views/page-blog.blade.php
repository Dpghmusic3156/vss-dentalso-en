@extends('layouts.app')

@section('content')

{{-- Hero --}}
<section class="apple-section--sm apple-hero bg-white">
    <div class="apple-container text-center">
        <div class="fade-in-up">
            <span class="apple-eyebrow">DentalSO Blog</span>
            <h1 class="apple-headline mb-6">Insights & Updates</h1>
            <p class="apple-hero-copy">
                Industry trends, product updates, and best practices for dental laboratories and clinics.
            </p>
        </div>
    </div>
</section>

{{-- Blog Posts --}}
<section class="apple-section bg-[#f5f5f7]">
    <div class="apple-container">
        @php
            $blog_posts = get_posts([
                'post_type' => 'post',
                'numberposts' => -1,
                'post_status' => 'publish',
            ]);
            $featured = count($blog_posts) > 0 ? $blog_posts[0] : null;
            $rest = count($blog_posts) > 1 ? array_slice($blog_posts, 1) : [];
        @endphp

        @if($featured)
            {{-- Featured Post --}}
            <a href="{{ get_permalink($featured) }}" class="block mb-16 fade-in-up group">
                <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-[transform,box-shadow,opacity] duration-500 grid lg:grid-cols-2">
                    <div class="aspect-[16/10] lg:aspect-auto overflow-hidden">
                        @if(has_post_thumbnail($featured))
                            <img loading="lazy" src="{{ get_the_post_thumbnail_url($featured, 'large') }}" 
                                 alt="{{ $featured->post_title }}" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        @else
                            <div class="w-full h-full min-h-[300px] bg-gradient-to-br from-[#0071e3] to-[#40a9ff] flex items-center justify-center">
                                <span class="material-symbols-outlined text-white/30 text-8xl">article</span>
                            </div>
                        @endif
                    </div>
                    <div class="p-8 lg:p-12 flex flex-col justify-center">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="inline-block px-3 py-1 bg-[#0071e3]/10 text-[#0071e3] text-xs font-semibold rounded-full uppercase tracking-wide">Featured</span>
                            <span class="text-sm text-[#86868b]">{{ get_the_date('M d, Y', $featured) }}</span>
                        </div>
                        <h2 class="text-2xl lg:text-3xl font-bold text-[#1d1d1f] mb-4 group-hover:text-[#0071e3] transition-colors leading-snug">
                            {{ $featured->post_title }}
                        </h2>
                        <p class="text-[#86868b] leading-relaxed mb-6">
                            {!! wp_trim_words($featured->post_excerpt ?: $featured->post_content, 40) !!}
                        </p>
                        <span class="text-[#0071e3] font-semibold text-sm inline-flex items-center gap-1">
                            Read article <span class="material-symbols-outlined text-lg">arrow_forward</span>
                        </span>
                    </div>
                </div>
            </a>

            {{-- Remaining Posts Grid --}}
            @if(count($rest) > 0)
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($rest as $post)
                        <a href="{{ get_permalink($post) }}" 
                           class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-[transform,box-shadow,opacity,colors] duration-300 fade-in-up flex flex-col"
                           style="animation-delay: {{ $loop->index * 0.06 }}s;">
                            {{-- Image --}}
                            <div class="aspect-[16/10] overflow-hidden">
                                @if(has_post_thumbnail($post))
                                    <img loading="lazy" src="{{ get_the_post_thumbnail_url($post, 'medium_large') }}" 
                                         alt="{{ $post->post_title }}" 
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                @else
                                    <div class="w-full h-full bg-gradient-to-br from-[#f5f5f7] to-[#e8e8ed] flex items-center justify-center">
                                        <span class="material-symbols-outlined text-[#d2d2d7] text-5xl">article</span>
                                    </div>
                                @endif
                            </div>
                            {{-- Content --}}
                            <div class="p-6 flex flex-col flex-1">
                                <div class="flex items-center gap-2 mb-3">
                                    @php
                                        $cats = get_the_category($post->ID);
                                        $cat_name = !empty($cats) ? $cats[0]->name : '';
                                    @endphp
                                    @if($cat_name)
                                        <span class="text-[10px] font-bold uppercase tracking-wider text-[#0071e3] bg-[#0071e3]/8 px-2 py-0.5 rounded-full">{{ $cat_name }}</span>
                                    @endif
                                    <span class="text-xs text-[#86868b]">{{ get_the_date('M d, Y', $post) }}</span>
                                </div>
                                <h3 class="text-lg font-bold text-[#1d1d1f] mb-2 group-hover:text-[#0071e3] transition-colors leading-snug line-clamp-2">
                                    {{ $post->post_title }}
                                </h3>
                                <p class="text-sm text-[#86868b] leading-relaxed line-clamp-3 flex-1">
                                    {!! wp_trim_words($post->post_excerpt ?: $post->post_content, 20) !!}
                                </p>
                                <span class="mt-4 text-[#0071e3] font-medium text-sm inline-flex items-center gap-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    Read more <span class="material-symbols-outlined text-base">chevron_right</span>
                                </span>
                            </div>
                        </a>
                    @endforeach
                </div>
            @endif

        @else
            {{-- Empty State --}}
            <div class="text-center py-20 fade-in-up max-w-lg mx-auto">
                <div class="w-20 h-20 bg-[#0071e3]/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="material-symbols-outlined text-4xl text-[#0071e3]">edit_note</span>
                </div>
                <h2 class="apple-headline-sm mb-4">Coming Soon</h2>
                <p class="apple-body">We're preparing insightful articles about dental lab management, production optimization, and digital workflows. Stay tuned!</p>
                <div class="apple-cta-group mt-10">
                    <a href="{{ home_url('request-demo/') }}" class="apple-cta-primary">Request a Demo</a>
                </div>
            </div>
        @endif
    </div>
</section>

<style>
    .line-clamp-2 { display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
    .line-clamp-3 { display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; }
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('is-visible'); observer.unobserve(entry.target); }});
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
    document.querySelectorAll('.fade-in-up').forEach(el => observer.observe(el));
});
</script>

@endsection
