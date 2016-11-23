<?php
/**
 * The template for displaying pages
 */


// Add CSS
add_action('wp_head','hook_css', 0);
function hook_css() {
	$output = <<<EOD
  <link href='/dist/swagger/css/typography.css' media='screen' rel='stylesheet' type='text/css'/>
  <link href='/dist/swagger/css/reset.css' media='screen' rel='stylesheet' type='text/css'/>
  <link href='/dist/swagger/css/print.css' media='print' rel='stylesheet' type='text/css'/>
  <!-- THEME -->
  <link rel='stylesheet' href='/dist/swagger/css/theme-material.css' />
EOD;
	echo $output;
}

// Add js
add_action('wp_footer','hook_javascript', 100);
function hook_javascript() {
	$output = "";
	// $output .= 	 "<script src='/dist/swagger/lib/jquery-1.8.0.min.js' type='text/javascript'></script>\n";
	$output .=   "<script src='/dist/swagger//lib/object-assign-pollyfill.js' type='text/javascript'></script>\n";
	$output .=   "<script src='/dist/swagger/lib/jquery.slideto.min.js' type='text/javascript'></script>\n";
	$output .=   "<script src='/dist/swagger/lib/jquery.wiggle.min.js' type='text/javascript'></script>\n";
	$output .=   "<script src='/dist/swagger/lib/jquery.ba-bbq.min.js' type='text/javascript'></script>\n";
	$output .=   "<script src='/dist/swagger/lib/handlebars-4.0.5.js' type='text/javascript'></script>\n";
	$output .=   "<script src='/dist/swagger/lib/lodash.min.js' type='text/javascript'></script>\n";
	$output .=   "<script src='/dist/swagger/lib/backbone-min.js' type='text/javascript'></script>\n";
	$output .=   "<script src='/dist/swagger/swagger-ui.js' type='text/javascript'></script>\n";
	$output .=   "<script src='/dist/swagger/lib/highlight.9.1.0.pack.js' type='text/javascript'></script>\n";
	$output .=   "<script src='/dist/swagger/lib/highlight.9.1.0.pack_extended.js' type='text/javascript'></script>\n";
	$output .=   "<script src='/dist/swagger/lib/jsoneditor.min.js' type='text/javascript'></script>\n";
	$output .=   "<script src='/dist/swagger/lib/marked.js' type='text/javascript'></script>\n";
	// $output .=   "<script src='/dist/swagger/lib/swagger-oauth.js' type='text/javascript'></script>\n";
	// $output .=   "<script type='text/javascript' src='/dist/swagger/lib/materialize.min.js'></script>\n";
	$output .=   "<script type='text/javascript' src='/dist/swagger/lib/swagger-ui-settings-and-loading.js'></script>\n";
	$output .=   "<script type='text/javascript' src='/dist/swagger/lang/en.js'</script>\n";
	echo $output;
}


get_header();
?>


<section id="introduction">
<div class="container">
<div class="row">

	<h1 class="center-align flow-text">API</h1>
    <?php edit_post_link(__('Edit page', 'gfbio'), '<div class="right-align">', "</div>", null, "") ?>

	<?php
	while (have_posts() ) : the_post();
		the_content();
	endwhile;
	?>
</div><!--row-->
</div><!--container-->
</section>


<div class="swagger-section">

	<div id="message-bar" class="swagger-ui-wrap" data-sw-translate>&nbsp;</div>
	<div id="swagger-ui-container" class="swagger-ui-wrap">
	              <!-- Loading START -->
	              <div class="center-align">
	              <div class="preloader-wrapper active" title="Loading...">
	                <div class="spinner-layer spinner-red-only">
	                  <div class="circle-clipper left">
	                    <div class="circle"></div>
	                  </div><div class="gap-patch">
	                    <div class="circle"></div>
	                  </div><div class="circle-clipper right">
	                    <div class="circle"></div>
	                  </div>
	                </div>
	              </div>
	              </div>
	              <!-- Loading END -->
	</div>

</div>



<?php get_footer(); ?>

</body>
</html>