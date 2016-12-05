<?php
/**
 * The template for displaying pages
 */

function inject_icons() {
  // cache busting for development
  $version = time();
  // $version = null;
  // material font icons
  wp_enqueue_style('material-font-style', "https://fonts.googleapis.com/icon?family=Material+Icons", [], $version, 'all');
}
add_action('wp_enqueue_scripts', 'inject_icons');

get_header(); ?>

<?php
while ( have_posts() ) : the_post();

// the_content();

endwhile;
?>


<section id="faq">

<div class="container" id="faq">
<div class="row">

<h2 class="center-align"><?php the_title() ?></h2>

<?php edit_post_link(__('Edit page', 'gfbio'), '<div class="right-align">', "</div>", null, "") ?>

<h3 class="flow-text center-align"><?php _e('General', 'gfbio') ?></h3>

<ul id="faqlist" class="collapsible" data-collapsible="expandable">

    <li>
      <div class="collapsible-header">
        Who are you and your partners?
        <i class="ico material-icons right">expand_more</i>
      </div>
      <div class="collapsible-body">
        <p>

        </p>
      </div>
    </li>
    <li>
      <div class="collapsible-header">
        What is your mission?
        <i class="ico material-icons right">expand_more</i>
      </div>
      <div class="collapsible-body">
        <p>

        </p>
      </div>
    </li>
    <li>
      <div class="collapsible-header">
        For whom are your services?
        <i class="ico material-icons right">expand_more</i>
      </div>
      <div class="collapsible-body">
        <p>

        </p>
      </div>
    </li>
    <li>
      <div class="collapsible-header">
        What is GFBio?
        <i class="ico material-icons right">expand_more</i>
      </div>
      <div class="collapsible-body">
        <p>
		
        </p>
      </div>
    </li>
    <li>
      <div class="collapsible-header">
        Are you working on the TS after GFBio finished?
        <i class="ico material-icons right">expand_more</i>
      </div>
      <div class="collapsible-body">
        <p>
		
        </p>
      </div>
    </li>
    <li>
      <div class="collapsible-header">
        Is there a fee to use your services?
        <i class="ico material-icons right">expand_more</i>
      </div>
      <div class="collapsible-body">
        <p>
		
        </p>
      </div>
    </li>
    <li>
      <div class="collapsible-header">
          What is the best way to cite you?
          <i class="ico material-icons right">expand_more</i>
      </div>
      <div class="collapsible-body">
         <p>
         	Our suggested citation is as following:<br/>
	         <code>
	         Karam, N.; Fichtmueller, D.; Gleisberg, M.; Bohlen, V; Tolksdorf, R. &amp; Güntsch, A. (eds.) 2014 onwards. The Terminology Server of the German Federation for Biological Data (GFBio) - Server and service of semantic technologies in scientific environments. - hfalsettp://terminologies.gfbio.org/
    	     </code>
         </p>
      </div>
    </li>

</ul>

<h3 class="flow-text subheadline center-align">
  <?php _e('About the Terminology Service', 'gfbio') ?>
</h3>

<ul class="collapsible" data-collapsible="expandable">

    <li>
      <div class="collapsible-header">
          What are the TS and its objective? How does the TS work?
          <i class="ico material-icons right">expand_more</i>
      </div>
      <div class="collapsible-body">
         <p>
         	
         </p>
      </div>
    </li>
    <li>
      <div class="collapsible-header">
          Why should I use the TS?
          <i class="ico material-icons right">expand_more</i>
      </div>
      <div class="collapsible-body">
         <p>
         	
         </p>
      </div>
    </li>
    <li>
      <div class="collapsible-header">
          What does “semantic information” mean and how is it included in your work?
          <i class="ico material-icons right">expand_more</i>
      </div>
      <div class="collapsible-body">
         <p>
         	
         </p>
      </div>
    </li>
    <li>
      <div class="collapsible-header">
        What is a &quot;terminology&quot; in the GFBio context?
        <i class="ico material-icons right">expand_more</i>
      </div>
      <div class="collapsible-body">
		<p>
		The term <span class="bold">&quot;terminology&quot;</span> encompasses several meanings ranging from simple lists of terms to semantically rich ontologies. Unfortunately, there are currently no commonly accepted definitions of the different terminology types (in the biological domain) which leaves room for variation causing them to be used interchangeably depending on the context.<br />
		GFBio distinguishes between five different types or formality levels of terminologies with differing levels of specification which are defined in the following section. Some of the terms may be used in a slightly different way in the scientific domain, a fact the user should be aware of when referring to terminologies outside the context of GFBio.

	    <span class="faq-subheadline"><?php _e('Controlled Vocabulary', 'gfbio') ?></span>
	    The simplest type of terminology consisting in a finite list of terms without definitions or hierarchical ordering.

	    <span class="faq-subheadline"><?php _e('Glossary', 'gfbio') ?></span>
	    A list of terms including an informal definition of their meaning in natural (human-readable) language. Since information expressed in natural language is typically not unambiguous, these specifications are not yet adequate for further processing by computer agents.

	    <span class="faq-subheadline"><?php _e('Taxonomy/Classification', 'gfbio') ?></span>
	    A list of terms organized in a hierarchical structure, e.g., by is-afalse relationships, thus providing additional semantics in the relations between their terms which can be interpreted by computer agents.

	    <span class="faq-subheadline"><?php _e('Thesaurus', 'gfbio') ?></span>
	    A controlled vocabulary connected via relations between the terms expressing hierarchies (e.g., “narrower/broader term”), associations (e.g., “related term”), or synonym relationships.

	    <span class="faq-subheadline"><?php _e('Ontology', 'gfbio') ?></span>
	    An Ontology represents the highest level of formality a terminology can reach. It is a formal representation of a set of concepts and the relationships between them using semantically rich descriptions, allowing a    n unambiguous interpretation of classes and term relationships according to logic-based rules.
		</p>
      </div>
    </li>
    <li>
      <div class="collapsible-header">
          What is a &quot;term&quot; in the TS context?
          <i class="ico material-icons right">expand_more</i>
      </div>
      <div class="collapsible-body">
         <p>
         	
         </p>
      </div>
    </li>

</ul>

<h3 class="flow-text subheadline center-align">
  <?php _e('Explore', 'gfbio') ?>
</h3>
<ul class="collapsible" data-collapsible="expandable">
    <li>
      <div class="collapsible-header">
          What is the difference between internal and external terminologies?
          <i class="ico material-icons right">expand_more</i>
      </div>
      <div class="collapsible-body">
         <p>
         	
         </p>
      </div>
    </li>
    <li>
      <div class="collapsible-header">
          Which terminologies are included in the Terminology Server?
          <i class="ico material-icons right">expand_more</i>
      </div>
      <div class="collapsible-body">
        <p>
			Among the terminologies currently included in the terminology server are:
		</p>
			<ul class="browser-default faq-list">
			<li>Biological Collections Ontology (BCO)</li>
			<li>Biodiversity Ecosystem Functioning Data (BEFDATA)</li>
			<li>Chemical Entities of Biological Interest (ChEBI)</li>
			<li>Environment Ontology (ENVO)</li>
			<li>Geographic Region Ontology (GEOREGION)</li>
			<li>Phenotypic Quality Ontology (PATO)</li>
			</ul>
        <p>
			The Terminology Server will be continuously enriched with new terminologies.
		</p>
      </div>
    </li>
    <li>
      <div class="collapsible-header">
          Which external terminologies are connected to the TS?
          <i class="ico material-icons right">expand_more</i>
      </div>
      <div class="collapsible-body">
         <p>
			The external terminologies currently connected to the TS are:
			<ul class="browser-default">
			<li>The Catalogue of Life (CoL)</li>
			<li>The Integrated Taxonomic     Information System (ITIS)</li>
			<li>The World Register of Marine Species (WoRMS)</li>
			<li>Fauna Europaea via PESI</li>
			<li>The GeoNames geogr        aphical database (Geonames)</li>
			<li>The DWB REST Webservice for Taxon Lists (DTNtaxonlists)</li>
			<li>The Prokaryotic Nomenclature Up-to-Date Taxon list (PNU)</li>
			</ul>
        </p>
      </div>
    </li>
</ul>

<h3 class="flow-text subheadline center-align"><?php _e('Consume', 'gfbio') ?></h3>
<ul class="collapsible" data-collapsible="expandable">
    <li>
      <div class="collapsible-header">
          What is the format of a downloaded terminology?
          <i class="ico material-icons right">expand_more</i>
      </div>
      <div class="collapsible-body">
         <p>
         	
         </p>
      </div>
    </li>
    <li>
      <div class="collapsible-header">
          What happens when an external terminology is updated? Is there an update service?
          <i class="ico material-icons right">expand_more</i>
      </div>
      <div class="collapsible-body">
         <p>
         	
         </p>
      </div>
    </li>
</ul>

<h3 class="flow-text subheadline center-align"><?php _e('Contribute', 'gfbio') ?></h3>
<ul class="collapsible" data-collapsible="expandable">
    <li>
      <div class="collapsible-header">
          Why should I contribute to the TS?
          <i class="ico material-icons right">expand_more</i>
      </div>
      <div class="collapsible-body">
         <p>
         	
         </p>
      </div>
    </li>
    <li>
      <div class="collapsible-header">
          How can I contribute to your service? What do I need to contribute to your service?
          <i class="ico material-icons right">expand_more</i>
      </div>
      <div class="collapsible-body">
         <p>
         	
         </p>
      </div>
    </li>
    <li>
      <div class="collapsible-header">
          What happens after contributing to your service?
          <i class="ico material-icons right">expand_more</i>
      </div>
      <div class="collapsible-body">
         <p>
         	
         </p>
      </div>
    </li>
    <li>
      <div class="collapsible-header">
          Is a contribution possible for people outside the biodiversity context?
          <i class="ico material-icons right">expand_more</i>
      </div>
      <div class="collapsible-body">
         <p>
         	
         </p>
      </div>
    </li>
</ul>


</div><!--row-->
</div><!--container-->
</section><!--faq-->


<?php get_footer() ?>


<script>
$(function(){
    $('.collapsible').collapsible({
        accordion: false,
        onOpen: function(el) {
          $(el).find('.ico').text('expand_less');
        },
        onClose: function(el) {
          $(el).find('.ico').text('expand_more');
        }
    });
});
</script>



</body>
</html>