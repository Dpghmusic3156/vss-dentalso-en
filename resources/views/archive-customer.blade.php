@extends('layouts.app')

@section('content')
<div class="container py-16 grid lg:grid-cols-4 gap-10">
    @while(have_posts()) @php(the_post())

    <div class="shadow-xl border border-primary-4/20 rounded-3xl p-6">
        <div class="rounded-full w-32 h-32 flex border rounded-3xl mx-auto items-center p-1">
            <?php the_post_thumbnail(); ?>
        </div>

        <p class="text-2xl text-center"><?php the_title(); ?></p>
        <p>
            <span class="material-symbols-outlined align-sub text-lg text-secondary">
                language
            </span>
            <a href="<?php echo get_post_custom_values($key = 'link')[0]; ?>">
                <?php echo get_post_custom_values($key = 'link')[0]; ?>
            </a>
        </p>
        <p>
            <span class="material-symbols-outlined align-sub text-lg text-secondary">
                call
            </span>
            <?php echo get_post_custom_values($key = 'phone')[0]; ?>
        </p>
        <p>
            <span class="material-symbols-outlined align-sub text-lg text-secondary">
                home
            </span>
            <?php echo get_post_custom_values($key = 'address')[0]; ?>
        </p>
    </div>

    @endwhile
</div>
@endsection