<?php
/**
 * The template for displaying pages
 *
# -*- coding: utf-8 -*-
# vim: tabstop=8 expandtab shiftwidth=4 softtabstop=4
 *
 */

get_header(); ?>

<section id="developer">

<div class="container">
<div class="row center-align">

  <h2 class=""><?php _e('Developer', 'gfbio') ?></h2>

  <?php edit_post_link(__('Edit page', 'gfbio'), '<div class="right-align">', "</div>", null, "") ?>

  <p>
	<?php
	while ( have_posts() ) : the_post();

	the_content();

	endwhile;
	?>
  </p>

</div><!--row-->
</div><!--container-->

</section>


<section id="api_widgets" class="alt">
<div class="container">
<div class="row">

      <div class="col s12 m6 center-align">
          <h2 class="flow-text"><a href="/api/"><?php _e('API', 'gfbio') ?></a></h2>
            <p>
            Access to the GFBio TS is provided via a RESTful web
            service. All terms and terminologies can be accessed via
            a common interface, regardless of whether they are hosted
            internally or externally.
            </p>
            <p>
                <a href="/api/">&#8594; <?php _e('How to use the API', 'gfbio') ?></a>
            </p>
      </div>
      <div class="col s12 m6 center-align">
          <h2 class="flow-text"><a href="/widgets/"><?php _e('Widgets', 'gfbio') ?></a></h2>
            <p>
            Widgets are ready web applications based on the TS API to be used on your website with just little configuration and programming skills needed. Widgets deliver restricted functionality for one purpose.
            </p>
            <p>
                <a href="/widgets/">&#8594; <?php _e('How to use the widgets', 'gfbio') ?></a>
            </p>
      </div>

<div>
&gt;&gt;&gt;Alternative:&lt;&lt;&lt;
</div>

        <div class="col s12 m6">
          <div class="card hoverable white z-depth-4">
            <div class="card-content black-text">
              <span class="card-title flow-text"><?php _e('API', 'gfbio') ?></span>
                <p>
                Access to the GFBio TS is provided via a RESTful web
                service. All terms and terminologies can be accessed via
                a common interface, regardless of whether they are hosted
                internally or externally.
                </p>
            </div>
            <div class="card-action">
              <a href="/api/">&#8594; <?php _e('How to use the API', 'gfbio') ?></a>
            </div>
          </div>
        </div>
        <div class="col s12 m6">
          <div class="card hoverable white z-depth-4">
            <div class="card-content black-text">
              <span class="card-title flow-text"><?php _e('Widgets', 'gfbio') ?></span>
                <p>
                Widgets are ready web applications based on the TS API to be used on your website with just little configuration and programming skills needed. Widgets deliver restricted functionality for one purpose.
                </p>
            </div>
            <div class="card-action">
              <a href="/widgets/">&#8594; <?php _e('How to use the widgets', 'gfbio') ?></a>
            </div>
          </div>
        </div>

</div><!--row-->
</div><!--container-->
</section>


<section id="technology">
<div class="container">
<div class="row">
      <h2 class="center-align flow-text"><?php _e('Technology Behind', 'gfbio') ?></h2>
      <p>
The TS provides a web services interface that serves as a generic access point to heterogeneous terminological resources. In our context the term “terminology” refers to any terminological resource – this can be a formal ontology, a taxonomy, or any useful source of Semantic Web compliant collections of terms (e.g. locations available via Geonames). The TS offers a universal access to the various types of terminologies in a uniform and transparent manner. It delivers unified results enabling computational access to the semantic content of the ontologies in combination with the hierarchical and lexical information held in taxonomies. These terminologies are either internally hosted or accessed via their remote web services. Internal terminologies are stored in a local Semantic Web repository (Virtuoso). The TS offers additionally access to internally managed terminologies via a Linked Data interface and a SPARQL endpoint. External terminologies must be registered at the TS; they are remotely accessed via a web service requestor. The set of taxonomies registered at the TS include global initiatives like the Catalogue of Life (COL) or the World Register of Marine Species (WoRMS), and taxonomic services from our project partners like the Bacterial Nomenclature Up-to-Date (PNU). The key component of the TS is the adapter that enables the mapping of both internal Semantic Web terminologies and external terminological resources into a common output format (cf. the gear wheel in the figure).
      </p>

      <p>
        Figure: The GFBio Terminology Service architecture
      </p>
</div>
</div>
</section>

<?php get_footer() ?>

</body>
</html>