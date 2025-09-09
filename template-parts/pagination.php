<?php
global $wp_query;

$big = 999999999; // número ficticio para reemplazar
$links = paginate_links([
    "base" => str_replace($big, "%#%", esc_url(get_pagenum_link($big))),
    "format" => "?paged=%#%",
    "current" => max(1, get_query_var("paged")),
    "total" => $wp_query->max_num_pages,
    "prev_text" => "&laquo;",
    "next_text" => "&raquo;",
    "type" => "array", // necesario para poder darle formato
]);

if (is_array($links)): ?>
    <nav aria-label="Paginación de entradas">
        <ul class="pagination justify-content-center">
            <?php foreach ($links as $link): ?>
                <li class="page-item <?php echo strpos($link, "current") !==
                false
                    ? "active"
                    : ""; ?>">
                    <?php // fuerza que el <a> tenga class="page-link"
                    echo str_replace("page-numbers", "page-link", $link); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
<?php endif; ?>
