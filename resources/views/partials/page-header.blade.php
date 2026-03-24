<div class="page-header">
    <section class="banner-section relative bg-cover bg-center" style="background-image: url('<?php the_post_thumbnail_url() ?>');">
        <div class="container">
            <div class="banner-content h-96 flex items-center text-center mx-auto text-2xl lg:text-4xl text-white leading-normal">
                <h2 class="page-title z-10 px-4 lg:px-16">
                    <?php if (get_theme_mod('section_' . basename(get_permalink()) . '.header')): ?>
                        <?php echo get_theme_mod('section_' . basename(get_permalink()) . '.header'); ?>
                    <?php else: ?>
                        <?php the_title(); ?>
                    <?php endif; ?>
                </h2>
            </div>
        </div>
        <div class="absolute top-0 left-0 right-0 bottom-0 bg-black opacity-60 z-0"></div>
    </section>
</div>