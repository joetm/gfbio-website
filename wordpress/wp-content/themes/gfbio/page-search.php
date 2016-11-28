<?php
/**
 * The template for displaying pages
 *
 * -*- coding: utf-8 -*-
 * vim: tabstop=8 expandtab shiftwidth=4 softtabstop=4
 *
 */

get_header(); ?>

<section id="search">

<div class="container">
<div class="row">

    <h1 class="flow-text center-align"><?php _e('Search', 'gfbio') ?></h1>
    <?php edit_post_link(__('Edit page', 'gfbio'), '<div class="right-align">', "</div>", null, "") ?>

    <p>
        The main feature of the TS is the possibility to search for terms to determine their usefulness for your work, e.g. for annotating or connecting controlled vocabulary. This search interface is restricted to <a href="#">internal terminologies</a> only.
    </p>


    <!-- search widget -->
    <div id="includedContent"></div>


    <?php
    while (have_posts()) : the_post();
        if($content = get_the_content()) {
            echo "<p>";
                echo $content;
            echo "</p>";
        }
    endwhile;
    ?>


</div><!--row-->
</div><!--container-->

</section><!--search-->


<?php get_footer() ?>


<?php
// Inject CSS
function hook_css() {
    echo '<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/flick/jquery-ui.css">';
}
add_action('wp_head','hook_css', 0);
?>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="http://terminologies.gfbio.org/modernizr-latest.js" type="text/javascript"></script>
<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>


<script type="text/javascript">
$(function(){
    $('#includedContent').load('http://terminologies.gfbio.org/search/facettedSearch/mainForm.html');
})
</script>


</body>
</html>