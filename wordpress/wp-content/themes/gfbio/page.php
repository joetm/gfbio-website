<?php
/**
 * The template for displaying pages
 */

get_header(); ?>

<?php
while ( have_posts() ) : the_post();
?>


<div class="container" id="page">
<div class="row">

<h1 class="flow-text center-align"><?php the_title() ?></h1>

<?php the_content() ?>

</div>
</div>

<?php
endwhile;
?>

<?php get_footer(); ?>

</body>
</html>