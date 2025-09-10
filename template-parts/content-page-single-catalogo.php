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

    <section class="py-60" style="margin-top: 64px;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
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
        </div>
    </section>

<?php
    endwhile;
endif; ?>
