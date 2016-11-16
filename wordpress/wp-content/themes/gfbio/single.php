<?php
/**
 * The template for displaying all standard pages of gfbio
 */

get_header(); ?>

<?php
while ( have_posts() ) : the_post();
?>

n/a

<?php
endwhile;
?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>