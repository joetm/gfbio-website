<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header(); ?>

<section class="error-404 not-found center-align">

	<div class="container">

		<div class="row">

			<div class="leftside col s12 m12 l6">

				<div class="hide-on-large-only center-align" style="padding-top:2em;">
                    <img src="/static/TS-logo.png" style="width:20%;max-width:100px;" alt="Consume">
                </div>

				<h1 class="page-title">
					<?php _e('Ooops!', 'gfbio' ); ?>
				</h1>
				<h2 class="flow-text">
					<?php _e("We can't find the page you were looking for.", 'gfbio'); ?>
				</h2>
				<p>
					<?php _e("Here are some helpful links instead:", 'gfbio'); ?>

					<ul>
		            <?php
		                $page_links = array(
		                    [ 'name' => __('Home', 'gfbio'), 'uri' => '/'],
		                    [ 'name' => __('About', 'gfbio'), 'uri' => '/about/'],
		                    [ 'name' => __('FAQ', 'gfbio'), 'uri' => '/faq/'],
		                    [ 'name' => __('Browse', 'gfbio'), 'uri' => '/browse/'],
		                    [ 'name' => __('Search', 'gfbio'), 'uri' => '/search/'],
		                    [ 'name' => __('Contribute', 'gfbio'), 'uri' => '/contribute/'],
		                );
		                foreach($page_links as $page_link) {
		                    echo '<li class="' . strtolower($page_link['name']) . '"><a href="'.$page_link['uri'].'">'. $page_link['name'] . '</a></li>';
		                }
		            ?>
					</ul>

				</p>
			</div>

			<div class="rightside center-align col m6 hide-on-med-and-down valign-wrapper"
				style="border-left:1px solid #999999;">

				<div class="valign center-align" style="padding-left:2em;">
                    <img src="/static/TS-logo.png" style="max-width:80%;" alt="Consume">
                </div>

			</div>

		</div><!-- row -->
	</div><!-- container -->

</section><!-- section -->

<?php get_footer(); ?>

<script>
$(function(){

    // equal heights
    $('.leftside, .rightside').matchHeight();

});
</script>

</body>
</html>