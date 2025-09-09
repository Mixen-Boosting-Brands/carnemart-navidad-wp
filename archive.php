<?php get_header(); ?>

<main id="primary" class="site-main">

    <?php if (have_posts()): ?>

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
