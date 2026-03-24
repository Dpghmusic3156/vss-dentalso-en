@extends('layouts.app')

@section('content')
@while(have_posts()) @php(the_post())
<!-- @include('partials.page-header') -->
<?php
global $post;
$slug = $post->post_name;
$post_data = get_post($post->post_parent);
$parent_slug = $post_data->post_name;
?>
@includeFirst(['partials.' . $parent_slug . '.' . $slug, 'partials.content-single'])
@endwhile
@endsection