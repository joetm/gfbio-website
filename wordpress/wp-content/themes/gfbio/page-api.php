<?php
/**
 * The template for displaying the swagger api
 */

// Add CSS
function hook_api_css() {
    echo '
        <link href="/dist/swagger/css/typography.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="/dist/swagger/css/print.css" media="print" rel="stylesheet" type="text/css" />
        <!-- THEME -->
        <link rel="stylesheet" href="/dist/swagger/css/theme-material.css" />
        <style type="text/css">
        /* fix some of the styles */
        .swagger-section .swagger-ui-wrap {
            max-width:none;
        }
        #swagger-ui-container .footer h4 {
            font-size:1em;
        }
        </style>
    ';
}
add_action('wp_head','hook_api_css', 0);

get_header();
?>



<!--
<section id="introduction">
    <div class="container">
        <div class="row">
            <h1 class="center-align flow-text"><?php _e('API', 'gfbio') ?></h1>
            <?php
            while (have_posts() ) : the_post();
                if($content = get_the_content()) {
                    echo $content;
                    unset($content);
                }
            endwhile;
            ?>
        </div>
    </div>
</section>
-->

<section class="swagger-section">
    <div class="container">
        <div class="row">
            <h2 class="center-align"><?php _e('API', 'gfbio') ?></h2>
            <?php edit_post_link(__('Edit page', 'gfbio'), '<div class="right-align">', "</div>", null, "") ?>
            <p>
            The Terminology Service API offers a <strong>single access</strong> point to a set of internal and external terminologies. Internal terminologies are hosted locally at the Terminology Service in a Semantic Web repository, external terminologies are only registered at the Terminology Service and are remotely accessed via their own services. The TS service output is delivered in a JSON, XML, CSV or JSON-LD format.
            </p>
        </div>
        <div class="row">

            <div id="message-bar" class="swagger-ui-wrap" data-sw-translate>&nbsp;</div>
            <div id="swagger-ui-container" class="swagger-ui-wrap">

                <!-- Loading START -->
                <div class="center-align">
                    <div class="preloader-wrapper active" title="Loading...">
                        <div class="spinner-layer spinner-red-only">
                            <div class="circle-clipper left">
                                <div class="circle"></div>
                            </div>
                            <div class="gap-patch">
                                <div class="circle"></div>
                            </div>
                            <div class="circle-clipper right">
                                <div class="circle"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Loading END -->

            </div><!--swagger-ui-container-->

        </div><!--row-->
    </div><!--container-->
</section><!--swagger-section-->



<?php get_footer() ?>


<!-- TODO -->
<!--
<script src='/dist/api.js' type='text/javascript'></script>
-->


<script src='/dist/swagger/lib/object-assign-pollyfill.js' type='text/javascript'></script>
<script src='/dist/swagger/lib/handlebars-4.0.5.js' type='text/javascript'></script>
<script src='/dist/swagger/lib/lodash.min.js' type='text/javascript'></script>
<script src='/dist/swagger/lib/backbone-min.js' type='text/javascript'></script>
<script src='/dist/swagger/swagger-ui.min.js' type='text/javascript'></script>
<script src='/dist/swagger/lib/highlight.9.1.0.pack.js' type='text/javascript'></script>
<!--
<script src='/dist/swagger/lib/highlight.9.1.0.pack_extended.js' type='text/javascript'></script>
-->
<script src='/dist/swagger/lib/jsoneditor.min.js' type='text/javascript'></script>
<script src='/dist/swagger/lib/marked.js' type='text/javascript'></script>
<!--
<script src='/dist/swagger/lib/swagger-oauth.js' type='text/javascript'></script>
-->
<script type='text/javascript'>
	jQuery.browser = {};
	(function () {
       jQuery.browser.msie = false;
       jQuery.browser.version = 0;
       if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
           jQuery.browser.msie = true;
           jQuery.browser.version = RegExp.$1;
       }
   })();
</script>
<script src='/dist/swagger/lib/jquery.slideto.min.js' type='text/javascript'></script>
<script src='/dist/swagger/lib/jquery.wiggle.min.js' type='text/javascript'></script>
<script src='/dist/swagger/lib/jquery.ba-bbq.min.js' type='text/javascript'></script>
<script src='/dist/swagger/lib/swagger-ui-settings-and-loading.js' type='text/javascript'></script>
<!--
<script src='/dist/swagger/lang/en.js' type='text/javascript'></script>
-->


</body>
</html>