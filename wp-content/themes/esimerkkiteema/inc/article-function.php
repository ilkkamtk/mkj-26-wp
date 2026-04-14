<?php
function generate_articles($products): void
{
    if ($products->have_posts()):
        while ($products->have_posts()):
            $products->the_post();
            ?>
            <article class="product">
                <img src="//placehold.it/200x200?text=Product" alt="Product">
                <?php the_title("<h3>", "</h3>"); ?>
                <p>
                    <?php
                    the_excerpt();
                    ?>
                </p>
                <a href="<?php the_permalink(); ?>">Read More</a>
            </article>
        <?php
        endwhile;
    endif;
}

?>

