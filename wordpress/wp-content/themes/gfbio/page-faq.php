<?php
/**
 * The template for displaying pages
 */

get_header(); ?>

<?php
while ( have_posts() ) : the_post();

// the_content();

endwhile;
?>


<div class="container" id="faq">
<div class="row">

<h1 class="flow-text center-align"><?php the_title() ?></h1>

<ul id="faqlist" class="collapsible" data-collapsible="expandable">

    <li>
      <div class="collapsible-header">What is a &quot;terminology&quot; in the GFBio context?</div>
      <div class="collapsible-body">
		<p>
		The term <span class="bold">&quot;terminology&quot;</span> encompasses several meanings ranging from simple lists of terms to semantically rich ontologies. Unfortunately, there are currently no commonly accepted definitions of the different terminology types (in the biological domain) which leaves room for variation causing them to be used interchangeably depending on the context.<br />
		GFBio distinguishes between five different types or formality levels of terminologies with differing levels of specification which are defined in the following section. Some of the terms may be used in a slightly different way in the scientific domain, a fact the user should be aware of when referring to terminologies outside the context of GFBio.

	    <span class="faq-subheadline">Controlled Vocabulary</span>
	    The simplest type of terminology consisting in a finite list of terms without definitions or hierarchical ordering.

	    <span class="faq-subheadline">Glossary</span>
	    A list of terms including an informal definition of their meaning in natural (human-readable) language. Since information expressed in natural language is typically not unambiguous, these specifications are not yet adequate for further processing by computer agents.

	    <span class="faq-subheadline">Taxonomy/Classification</span>
	    A list of terms organized in a hierarchical structure, e.g., by is-afalse relationships, thus providing additional semantics in the relations between their terms which can be interpreted by computer agents.

	    <span class="faq-subheadline">Thesaurus</span>
	    A controlled vocabulary connected via relations between the terms expressing hierarchies (e.g., “narrower/broader term”), associations (e.g., “related term”), or synonym relationships.

	    <span class="faq-subheadline">Ontology</span>
	    An Ontology represents the highest level of formality a terminology can reach. It is a formal representation of a set of concepts and the relationships between them using semantically rich descriptions, allowing a    n unambiguous interpretation of classes and term relationships according to logic-based rules.
		</p>
    </div>
    </li>

    <li>
      <div class="collapsible-header">Which terminologies are included in the Terminology Server?</div>
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
      <div class="collapsible-header">Which external terminologies are connected to the TS?</div>
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

    <li>
      <div class="collapsible-header"><i class="material-icons"></i>How to cite us?</div>
      <div class="collapsible-body">
         <p>Our suggested citation is as following:<br/>
         <code>
         Karam, N.; Fichtmueller, D.; Gleisberg, M.; Bohlen, V; Tolksdorf, R. & Güntsch, A. (eds.) 2014 onwards. The Terminology Server of the German Federation for Biological Data (GFBio) - Server and service of semantic technologies in scientific environments. - hfalsettp://terminologies.gfbio.org/</p>
         </code>
      </div>
    </li>

</ul>


</div>
</div>


<?php get_footer() ?>


<script>
$(document).ready(function(){
    $('#faqlist').collapsible({
        accordion: false,
        onOpen: function(el) { alert('Open'); },
        onClose: function(el) {
            alert('Closed');
            console.log(el);window.$
        }
    });
});
</script>



</body>
</html>