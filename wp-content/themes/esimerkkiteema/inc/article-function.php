<?php
function generate_articles($products): void
{
    if ($products->have_posts()):
        while ($products->have_posts()):
            $products->the_post();
            ?>
            <article class="product">
                <?php
                the_post_thumbnail();
                the_title("<h3>", "</h3>");
                ?>
                <p>
                    <?php
                    the_excerpt();
                    ?>
                </p>
                <!-- <a href="<?php the_permalink(); ?>">Read More</a> -->
                <a href="#" class="open-modal" data-id="<?php echo get_the_ID(); ?>">Read More</a>
            </article>
        <?php
        endwhile;
    endif;
}

?>

