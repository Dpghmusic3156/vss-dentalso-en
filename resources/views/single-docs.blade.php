@extends('layouts.app')

@section('content')
@php the_post(); @endphp

<section class="banner-section relative bg-cover"
  style="background-image: url('https://dentalso.com/vi/wp-content/uploads/2025/07/page-banner2.png');">
  <div class="container">
    <div class="banner-content h-96 flex flex-col items-center justify-center text-center mx-auto relative">
      <p class="page-title z-10 mb-6 text-white text-5xl">
       {{ get_the_title() }}
      </p>
      <div class="justify-center w-1/2">
        {{-- Tìm kiếm tài liệu --}}
        @include('partials.search-docs')
      </div>
    </div>
  </div>
  <div class="absolute top-0 left-0 right-0 bottom-0 opacity-50 z-0"></div>
</section>
<div class="mx-auto max-w-screen-xl px-4 py-10">
  <div class="flex flex-col md:flex-row gap-8">
    {{-- Sidebar bên trái --}}
    <aside class="w-full order-1 md:order-1 md:w-1/4 mb-8 md:mb-0">
            @php
      $categories = get_terms([
      'taxonomy' => 'doc_category',
      'hide_empty' => false,
      ]);
      @endphp
      <div class="bg-white border rounded-xl shadow p-4">
        <h2 class="text-xl font-bold mb-4 text-gray-800">Chuyên mục</h2>
        @if(!empty($categories) && !is_wp_error($categories))
          <ul>
            @foreach($categories as $i => $category)
              @php
                $posts = get_posts([
                  'post_type' => 'docs',
                  'posts_per_page' => 5,
                  'tax_query' => [
                    [
                      'taxonomy' => 'doc_category',
                      'field'    => 'term_id',
                      'terms'    => $category->term_id,
                    ],
                  ],
                ]);
                $current_post_id = get_the_ID();
                $current_terms = wp_get_post_terms($current_post_id, 'doc_category', ['fields' => 'ids']);
                $is_current_cat = in_array($category->term_id, $current_terms);
              @endphp
              <li class="mb-2" x-data="{ open: {{ $is_current_cat ? 'true' : 'false' }} }">
                <div class="flex items-center group">
                  <button @click="open = !open" class="mr-2 focus:outline-none transition-colors rounded hover:bg-blue-100 p-1">
                    <svg :class="{'rotate-90': open}" class="w-4 h-4 text-gray-500 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                  </button>
                  <a 
                    href="{{ get_term_link($category) }}" 
                    class="font-semibold text-gray-700 group-hover:text-blue-600 transition-colors flex-1 {{ $is_current_cat ? 'text-blue-600' : '' }}"
                    @click.prevent="open = !open"
                  >
                    {{ $category->name }}
                  </a>
                </div>
                @if($posts)
                  <ul x-show="open" x-transition class="ml-6 mt-2 border-l border-gray-100 pl-3 space-y-1">
                    @foreach($posts as $post)
                      <li>
                        <a href="{{ get_permalink($post) }}"
                          class="block px-2 py-1 rounded transition
                            {{ get_the_ID() == $post->ID ? 'bg-blue-100 text-blue-600 font-bold' : 'text-gray-600 hover:bg-gray-100 hover:text-blue-600' }}">
                          {{ get_the_title($post) }}
                        </a>
                      </li>
                    @endforeach
                  </ul>
                @endif
              </li>
            @endforeach
          </ul>
        @else
          <p>Không có chuyên mục nào.</p>
        @endif
      </div>
    </aside>

    {{-- Nội dung chính --}}
    <div class="w-full order-3 md:order-2 md:w-1/2">
      {{-- TOC --}}
    
      {{-- Nội dung --}}
      <div class="prose max-w-none">
        {!! apply_filters('the_content', get_the_content()) !!}
      </div>
    </div>
    <div class="w-full order-2 md:order-3 md:w-1/4">
        <div id="toc" class="mb-6 bg-gray-50 border border-gray-200 p-4 rounded"></div>
    </div>
  </div>
</div>
@endsection