@extends('layouts.app')

@section('content')
<div class="container py-16 grid lg:grid-cols-3 gap-10">
    @while(have_posts()) @php(the_post())

    <div class="shadow-xl border border-primary-4/20 rounded-3xl p-6">
        <div class="rounded-full w-32 h-32 flex border rounded-3xl mx-auto items-center p-1">
            <?php the_post_thumbnail(); ?>
        </div>

        <p class="text-2xl text-center"><?php the_title(); ?></p>
        <?php $link = get_post_custom_values('link')[0] ?? ''; if ($link): ?>
        <p class="text-center flex items-center justify-center gap-1 mt-2">
            <span class="material-symbols-outlined text-lg text-secondary">language</span>
            <a href="<?php echo esc_url($link); ?>" target="_blank" rel="noopener noreferrer" class="truncate max-w-[200px]">
                <?php echo esc_html($link); ?>
            </a>
        </p>
        <?php endif; ?>
    </div>

    @endwhile
</div>
@endsection