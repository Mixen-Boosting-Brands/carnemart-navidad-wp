<section id="blog" class="py-60">
    <div class="container">
        <div class="row mb-4">
            <div class="col-6">
                <h1
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    Blog
                </h1>
                <p
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    Conoce las últimas noticias.
                </p>
            </div>
            <div class="col-6 my-auto text-end">
                <a
                    class="btn btn-success rounded-pill"
                    href="<?php echo esc_url(
                        get_category_link(get_cat_ID("Blog")),
                    ); ?>"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    Ver más
                </a>
            </div>
        </div>

        <div class="row">
            <?php // Si ya existe un loop global (ej: en category.php o archive.php), úsalo.
            if (have_posts()):
                $delay = 300;
                while (have_posts()):
                    the_post(); ?>
                <div
                    class="col-lg-4"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="<?php echo esc_attr($delay); ?>"
                >
                    <div class="card mb-4">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail("medium_large", [
                                    "class" => "card-img-top",
                                    "alt" => esc_attr(get_the_title()),
                                ]); ?>
                            <?php else: ?>
                                <img
                                    src="<?php echo esc_url(
                                        get_template_directory_uri() .
                                            "/assets/images/fallback.png",
                                    ); ?>"
                                    class="card-img-top"
                                    alt="<?php the_title_attribute(); ?>"
                                />
                            <?php endif; ?>
                        </a>
                        <div class="card-body">
                            <a href="<?php the_permalink(); ?>">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                            </a>
                        </div>
                    </div>
                </div>
            <?php $delay += 100;
                endwhile;
            else:
                 ?>
                <p class="text-center">No hay publicaciones disponibles.</p>
            <?php
            endif; ?>
        </div>
    </div>
</section>
