<?php
get_header();
?>
    <section class="hero">
        <div class="hero-text">
            <?php
            echo "<h1>" . single_cat_title("", false) . "</h1>";
            echo "<p>" . category_description() . "</p>";
            ?>
        </div>
        <?php
        $current_category_id = get_queried_object_id();

        $image_url = get_random_post_image($current_category_id);
        ?>
        <img src="<?php echo $image_url; ?>" alt="<?php the_title(); ?>">
    </section>
    <main>
        <section class="products">
            <h2>Featured Products</h2>
            <?php
            $args = [
                    'post_type' => 'post',
                    'tag' => 'featured',
                    'posts_per_page' => 3
            ];
            $products = new WP_Query($args);
            // print_r($products);
            generate_articles($products);
            ?>
        </section>
    </main>
<?php
get_sidebar();
get_footer();