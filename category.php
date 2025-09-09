<?php get_header(); ?>

<main id="primary" class="site-main">

    <?php if (have_posts()): ?>
        <section class="py-60">
            <div class="container mb-5 text-center">
                <h1 class="mb-3"><?php single_cat_title(); ?></h1>
                <?php if (category_description()): ?>
                    <p class="lead"><?php echo category_description(); ?></p>
                <?php endif; ?>
            </div>
        </section>

        <?php get_template_part("template-parts/content", "blog"); ?>

    <?php else: ?>
        <section class="py-60">
            <div class="container">
                <p class="text-center">No hay publicaciones en esta categoría.</p>
            </div>
        </section>
    <?php endif; ?>

</main>

<?php get_footer(); ?>
