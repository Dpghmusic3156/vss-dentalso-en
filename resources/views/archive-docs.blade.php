@extends('layouts.app')

@section('content')
<section class="banner-section relative bg-cover"
  style="background-image: url('https://dentalso.com/vi/wp-content/uploads/2025/07/page-banner2.png');">
  <div class="container">
    <div class="banner-content h-96 flex flex-col items-center justify-center text-center mx-auto relative">
      <p class="page-title z-10 mb-6 text-white text-5xl">
        Tài liệu
      </p>
      <div class="justify-center w-1/2">
        {{-- Tìm kiếm tài liệu --}}
        @include('partials.search-docs')
      </div>
    </div>
  </div>
  <div class="absolute top-0 left-0 right-0 bottom-0 opacity-50 z-0"></div>
</section>

<div class="container mx-auto py-10">
  
    {{-- Danh sách chuyên mục --}}
    @php
    $categories = get_terms([
    'taxonomy' => 'doc_category',
    'hide_empty' => false,
    ]);
    @endphp


@if(!empty($categories) && !is_wp_error($categories))
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-10">
  @foreach($categories as $category)
    @php
      $posts = get_posts([
        'post_type' => 'docs',
        'posts_per_page' => 3,
        'tax_query' => [
          [
            'taxonomy' => 'doc_category',
            'field'    => 'term_id',
            'terms'    => $category->term_id,
          ],
        ],
      ]);
      $total_posts = $category->count;
    @endphp
    <div class="bg-white border border-gray-100 rounded-2xl shadow hover:shadow-lg transition p-6 flex flex-col group">
      <div class="flex items-center mb-3">
        <div class="bg-blue-100 text-blue-500 rounded-full p-2 mr-3">
         <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" class="w-6 h-6" width="24px" fill="#3B82F6">
          <path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h240l80 80h320q33 0 56.5 23.5T880-640H447l-80-80H160v480l96-320h684L837-217q-8 26-29.5 41.5T760-160H160Zm84-80h516l72-240H316l-72 240Zm0 0 72-240-72 240Zm-84-400v-80 80Z"/>
        </svg>
        </div>
        <a href="{{ get_term_link($category) }}" class="text-xl font-semibold text-gray-800 group-hover:text-blue-600 transition">
          {{ $category->name }}
        </a>
      </div>
      <div class="text-sm text-gray-500 mb-2">Tổng số bài viết: <span class="font-medium">{{ $total_posts }}</span></div>
      @if($posts)
        <ul class="mb-4 list-inside text-sm text-gray-700 list-none">
          @foreach($posts as $post)
            <li class="mb-2">
              <span class="material-symbols-outlined text-blue-500 text-[13px]">docs</span>
              <a href="{{ get_permalink($post) }}" class="hover:underline text-blue-500">{{ get_the_title($post) }}</a>
            </li>
          @endforeach
        </ul>
      @else
        <div class="text-gray-400 text-sm mb-4">Chưa có bài viết.</div>
      @endif
    </div>
  @endforeach
</div>
@else
<p>Không có chuyên mục nào.</p>
@endif



</div>
@endsection