<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package color_newsmagazine
 */

get_header(); ?>

<div class="pl-3 breadcrumbs text-left ml-5">
    <header>
    <?php
   
        the_archive_title( '<h1 class="entry-title">', '</h1>' );
        color_newsmagazine_breadcrumb_trail();
    ?>
    </header>
</div>

<?php get_template_part( 'template-parts/content','archive-search' );

get_footer();
?>