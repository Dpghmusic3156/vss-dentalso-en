@extends('layouts.app')

@section('content')
{{-- <div class="bg-primary-100 py-20 text-center text-2xl lg:text-4xl mb-10">
        <h1 class="text-3xl md:text-4xl font-bold mb-2 text-blue-700"></h1>
        @if(term_description())
        <div class="text-gray-500 text-lg">{!! term_description() !!}</div>
        @endif
    </div> --}}
    <section class="banner-section relative bg-cover"
  style="background-image: url('https://dentalso.com/vi/wp-content/uploads/2025/07/page-banner2.png');">
  <div class="container">
    <div class="banner-content h-96 flex flex-col items-center justify-center text-center mx-auto relative">
      <p class="page-title z-10 mb-6 text-white text-5xl">
        {{ single_term_title('', false) }}
      </p>
      <div class="justify-center w-1/2">
        @include('partials.search-docs')
      </div>
    </div>
  </div>
  <div class="absolute top-0 left-0 right-0 bottom-0 opacity-50 z-0"></div>
</section>
<div class="container mx-auto py-10">
    @php
    $posts = get_posts([
    'post_type' => 'docs',
    'posts_per_page' => -1,
    'tax_query' => [
    [
    'taxonomy' => 'doc_category',
    'field' => 'term_id',
    'terms' => get_queried_object_id(),
    ],
    ],
    ]);
    @endphp

    @if($posts)
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @foreach($posts as $post)
        @php setup_postdata($post); @endphp
        <div class="bg-white border border-gray-100 rounded-2xl shadow hover:shadow-lg transition p-6 flex flex-col group">
            <div class="flex items-center mb-3">
                <div class="bg-blue-100 text-blue-500 rounded-full p-2 mr-3">
                   <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#3B82F6">
                    <path d="M160-160q-33 0-56.5-23.5T80-240v-400q0-33 23.5-56.5T160-720h240l80-80h320q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm73-280h207v-207L233-440Zm-73-40 160-160H160v160Zm0 120v120h640v-480H520v280q0 33-23.5 56.5T440-360H160Zm280-160Z"/>
                </svg>
                </div>
                <a href="{{ get_permalink($post) }}" class="text-lg font-semibold text-gray-800 group-hover:text-blue-600 transition">
                    {{ get_the_title($post) }}
                </a>
            </div>
            <div class="text-gray-500 text-sm mb-4 line-clamp-3">
                {{ get_the_excerpt($post) }}
            </div>
        </div>
        @endforeach
        @php wp_reset_postdata(); @endphp
    </div>
    @else
    <div class="text-center text-gray-400">Không có bài viết nào trong chuyên mục này.</div>
    @endif
</div>
@endsection