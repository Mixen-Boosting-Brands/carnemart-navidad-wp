<?php get_header(); ?>

<main id="primary" class="site-main">

    <?php if (have_posts()): ?>
        <section class="py-60">
            <div class="container mb-5 text-center">
                <h1 class="mb-3"><?php the_archive_title(); ?></h1>
                <?php if (the_archive_description()): ?>
                    <p class="lead"><?php the_archive_description(); ?></p>
                <?php endif; ?>
            </div>
        </section>

        <?php get_template_part("template-parts/content", "blog"); ?>

    <?php else: ?>
        <section class="py-60">
            <div class="container">
                <p class="text-center">No hay publicaciones disponibles en este archivo.</p>
            </div>
        </section>
    <?php endif; ?>

</main>

<?php get_footer(); ?>
