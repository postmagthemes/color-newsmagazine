<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package color_newsmagazine
 */


get_header();  ?>

<div class="p-4 breadcrumbs text-center">
    <header>
    <?php
        echo '<h1 class="entry-title">';
        /* translators: %s: search query. */
        printf( esc_html__( 'Search Result For: %s', 'color-newsmagazine' ), '<span>' . get_search_query() . '</span>' );
        echo '</h1>';
        color_newsmagazine_breadcrumb_trail();
    ?>
    </header>
</div>
<?php get_template_part( 'template-parts/content','archive-search' );

get_footer();
?>
?>