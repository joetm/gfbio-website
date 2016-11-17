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
?>


<div class="container" id="page">
<div class="row">

    <h1 class="flow-text center-align">Widgets</h1>

    <p>
    	<?php the_content() ?>
    </p>

        <div class="col s12 m4">
          <div class="card hoverable grey lighten-5 z-depth-3">
            <div class="card-image">
<div class="center-align">
<img src="http://placehold.it/300x300" class="responsive-img">
</div>
              <span class="card-title">Search Bar</span>
            </div>
            <div class="card-content">
              <p>Researchers can peruse ontologies that are interesting for their research.</p>
            </div>
            <!--
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
            -->
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card hoverable grey lighten-5 z-depth-3">
            <div class="card-image">
<div class="center-align">
<img src="http://placehold.it/300x300" class="responsive-img">
</div>
              <span class="card-title">Visualization</span>
            </div>
            <div class="card-content">
              <p>Information from the ontologies can be retrieved and stored to your local information system.</p>
            </div>
            <!--
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
            -->
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card hoverable grey lighten-5 z-depth-3">
            <div class="card-image">
<div class="center-align">
<img src="http://placehold.it/300x300" class="responsive-img">
</div>
              <span class="card-title">Browse</span>
            </div>
            <div class="card-content">
              <p>Scientists can store or connect their terminologies to the TS in order to access all services provided by the TS automatically.</p>
            </div>
            <!--
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
            -->
          </div>
        </div>




</div>
</div>

<?php
endwhile;
?>

<?php get_footer(); ?>

</body>
</html>