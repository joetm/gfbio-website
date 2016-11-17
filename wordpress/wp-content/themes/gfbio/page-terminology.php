<?php
/**
 * The template for displaying pages
 */

get_header(); ?>

<?php
while ( have_posts() ) : the_post();

// the_content();

endwhile;
?>

<div class="container">
<div class="row">

<h1 class="flow-text center-align">Terminology Details</h1>


</div>
</div>

<?php get_footer(); ?>

</body>
</html>