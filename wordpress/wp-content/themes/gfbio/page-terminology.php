<?php
/**
 * The template for displaying pages
 *
 * -*- coding: utf-8 -*-
 * vim: tabstop=8 expandtab shiftwidth=4 softtabstop=4
 *
 */

get_header(); ?>

<?php
while ( have_posts() ) : the_post();

// the_content();

endwhile;

$loader_html = '
              <!-- Loading START -->
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
              <!-- Loading END -->
';

?>

<div class="container">
<div class="row">


<h1 class="flow-text center-align" id="terminology-title">Loading...</h1>


<div id="term-details">
    <div class="left-side col s12 m6">
        <h5 class="flow-text">General Information</h5>
        <div class="general">
            <?php echo $loader_html ?>
        </div>
        <h5 class="flow-text">Metadata</h5>
        <div class="metadata">
            <?php echo $loader_html ?>
        </div>
        <h5 class="flow-text">Metrics</h5>
        <div class="metrics">
            <?php echo $loader_html ?>
        </div>
    </div>
    <div class="right-side center-align col s12 m6">
    	<p>
        	[[[ This side should be filled with Robert's Widget. ]]]

          <!-- Loading START -->
          <div class="preloader-wrapper active" title="<?php _e('Loading...', 'gfbio') ?>">
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
          <!-- Loading END -->
    	</p>
    </div>
</div>

</div><!--row-->
</div><!--container-->

<?php get_footer() ?>

<script type="text/javascript">
$(function() {

    var id = '<?php echo htmlentities($_GET['ontology'], ENT_QUOTES) ?>',
        base = 'http://terminologies.gfbio.org/api/terminologies/';

    var load_details = function load_details (id, url, klass) {

        /* Query the general info of the terminology */
        $.getJSON(url, function(data) {
            if (!data || data.results === undefined || data.results[0] === undefined) {
                throw "Could not load terminology";
            }
            var ontology = data.results[0];
            if (ontology.name !== undefined) {
                $('#terminology-title').text(ontology.name);
                delete ontology.name;
            }
            // fill the page with the contents
            var tpl = '';
            $.each(ontology, function (key, item) {
                tpl += '<li><span class="key">' + key + '</span>: ' + item + '</li>';
            });
            tpl = '<ul>'+tpl+'</ul>';
            $('#term-details .left-side ' + klass).html(tpl);
        });

    };

    try {
        load_details(id, base + id, '.general');
        load_details(id, base + id + '/metadata', '.metadata');
        load_details(id, base + id + '/metrics', '.metrics');
    } catch (err) {
        console.log(err);
        alert(err);
    }

});
</script>

</body>
</html>