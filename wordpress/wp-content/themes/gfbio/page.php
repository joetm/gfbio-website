<?php
/**
 * The template for displaying pages
 */

get_header(); ?>

<?php
// while ( have_posts() ) : the_post();
the_post();
?>

<section id="page">

<div class="container" id="page">
<div class="row">

	<h1 class="flow-text center-align">
		<?php the_title() ?>
	</h1>

	<?php edit_post_link(__('Edit page', 'gfbio'), '<div class="right-align">', "</div>", null, "") ?>

	<?php the_content() ?>

</div><!--row-->
</div><!--container-->

</section><!--page-->

<?php
// endwhile;
?>

<?php get_footer(); ?>

</body>
</html>