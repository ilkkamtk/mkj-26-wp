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
        $header_images = get_uploaded_header_images();
        $image_url = array_pop($header_images)['url'];
        ?>
        <img src="<?php echo $image_url; ?>" alt="<?php the_title(); ?>">
    </section>
    <main>
        <section class="products">
            <?php
            $args = [
                    "child_of" => get_queried_object_id(),
                    "hide_empty" => true,
            ];
            $subcategories = get_categories($args);

            ?>

            <?php
            foreach ($subcategories as $subcategory):
                ?>
                <h2><?php echo $subcategory->name; ?></h2>
                <?php
                $args = [
                        'post_type'      => 'post',
                        'cat'            => $subcategory->term_id,
                        'posts_per_page' => 2,
                ];
                $sub_category_products = new WP_Query( $args );
                generate_articles( $sub_category_products );
            endforeach;
            ?>
        </section>
    </main>
<?php
get_sidebar();
get_footer();