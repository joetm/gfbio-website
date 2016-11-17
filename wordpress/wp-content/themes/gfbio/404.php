<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<section class="error-404 not-found center-align">
			<header class="page-header">
				<h1 class="page-title">
					<?php _e('Error 404', 'gfbio' ); ?>
					-
					<?php _e('Page Not Found', 'gfbio' ); ?>
				</h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php _e('It looks like nothing was found at this location. Maybe try another page?', 'gfbio'); ?></p>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>

</body>
</html>