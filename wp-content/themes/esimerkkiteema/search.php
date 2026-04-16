<?php
global $wp_query;
get_header();
?>
    <main>
        <section>
            <h2>Search results</h2>
            <?php
            generate_articles($wp_query);
            ?>
        </section>
    </main>
<?php
get_sidebar();
get_footer();