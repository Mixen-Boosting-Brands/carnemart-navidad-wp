<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

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
