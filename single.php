<?php get_header(); ?>

<?php if (in_category("catalogo")): ?>
    <?php get_template_part(
        "template-parts/content",
        "page-single-catalogo",
    ); ?>
<?php else: ?>
    <?php get_template_part("template-parts/content", "page-single"); ?>
<?php endif; ?>

<?php get_footer(); ?>
