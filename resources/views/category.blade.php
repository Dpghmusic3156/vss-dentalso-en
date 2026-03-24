@extends('layouts.app')

@section('content')
<div class="bg-primary-4/20 py-20 text-center text-2xl lg:text-4xl text-primary-800 mb-10">
  @php(single_cat_title())
</div>

<div class="container grid lg:grid-cols-3 gap-4">
  @while(have_posts()) @php(the_post())
  @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
  @endwhile
</div>

{!! get_the_posts_navigation() !!}
@endsection