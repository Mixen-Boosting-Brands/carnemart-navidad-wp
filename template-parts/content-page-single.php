<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

    <?php
    // Obtener featured image
    $jumbotron_bg = "";
    if (has_post_thumbnail()) {
        $jumbotron_bg = get_the_post_thumbnail_url(get_the_ID(), "full");
    }
    ?>

    <section id="jumbotron-interna" class="py-60"
        <?php if ($jumbotron_bg): ?>
            style="background: url('<?php echo esc_url(
                $jumbotron_bg,
            ); ?>') no-repeat center center / cover;"
        <?php endif; ?>>
    </section>

    <section class="container py-60">
        <div class="row">
            <div class="col-md-12">
                <h1 data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="100"><?php the_title(); ?></h1>
                <div class="content" data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="200">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>

<?php
    endwhile;
endif; ?>
