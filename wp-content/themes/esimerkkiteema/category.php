<?php
global $wp_query;
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
            <h2><?php single_cat_title(); ?></h2>
            <?php
            generate_articles($wp_query);
            ?>
        </section>
    </main>
<?php
get_sidebar();
get_footer();