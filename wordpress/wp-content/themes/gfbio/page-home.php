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
?>

<div id="home">

    <section id="banner">
    	<img src="http://placehold.it/1400x400" alt="" class="responsive-img" style="width:100%;height:auto">
    </section>

    <section id="introduction" class="grey lighten-3">
		<div class="container">
		<div class="row">
	        <p>
	        The GFBio Terminology Service helps you to connect to various kinds of terminologies – ranging from simple controlled vocabularies to complex ontologies in the field of biodiversity with a single access point. It provides services and tools to find, explore, share and reuse terminologies for semantic enhancement of research platforms. Furthermore the Terminology Server provides some functionalities that would not be possible with the original terminology or service, e.g. improved search capabilities. The Terminology Service is a core component of the GFBio infrastructure. It is developed by the Institute of Computer Science and the Botanic Garden and Botanical Museum of the Freie Universität Berlin.
	        <a id="readmore" href="#">Read more...</a>
		    </p>
            <aside id="more" style="display:none">
                <p>
                Research has become more data-intensive over the last few decades. Sharing research data is often a challenge, especially for interdisciplinary collaborative projects. One primary goal of a research infrastructure for data management should be to enable efficient data discovery and integration of heterogeneous data. In order to enable such interoperability, a lot of effort has been undertaken by scientists to develop standards and characterize their domain knowledge in the form of taxonomies and formal ontologies.
                </p>
                <p>
                However, these knowledge models are often disconnected and distributed. This fragmentation of existing data archives makes data acquisition challenging fExploreor researchers. At least as important are the different scientific terms that are used within the different disciplines for the same concept or the same name referring to different concepts.
                </p>
                <p>
                The TS is our vision of a semantically enriched data management and archiving solution by introducing a semantic-aware research infrastructure adopting a design science approach. It is our approach for integrating and harmonizing terminological resources to serve as a backbone for a platform. It acts as a semantic platform for access, development and reasoning over internally and externally maintained terminological resources within the biological and environmental domain.
                </p>
                <p>
                The TS and its public APIs (Application Programming Interfaces) provide users with a machine-readable access to terms, concepts and their relations for a variety of biodiversity related data. It aims to lower the barriers to the use of semantic technologies in scientific environments by developing robust and easy-to-use widgets and services for the organization of semantic domain-knowledge and by offering users the possibility to create, publish and curate their own terminologies.
                </p>
                <p>
                    <h5>Features of the TS</h5>
                    <ul class="browser-default">
                        <li>Provide a single access point to heterogeneous terminological resources</li>
                        <li>Allow for query expansion and semantic data access</li>
                        <li>Enable efficient semantic annotation</li>
                        <li>Enrich project-related terminologies</li>
                        <li>Provide mappings between terminologies</li>
                        <li>Access to reasoning capabilities</li>
                    </ul>
                </p>
                <p>
                The terminology server is hosted and published using <a href="https://virtuoso.openlinksw.com/" target="_blank">OpenLink Virtuoso</a>. Access is being provided via different services that are under development. The following figure illustrates the different components of the terminology server and the way it can be accessed.
                </p>
                <img src="http://placehold.it/450x380" class="responsive-img">
                <p>
                In the future, the Terminology Server can also be used by scientists and institutions not associated with GFBio and its code will be made available under an open source license.
                </p>
            </aside>
		</div>
		</div>
    </section>


    <section id="scenarios">
        <div class="container">
        <div class="row">
    	    <p>
    	    The GFBio TS supports several usage scenarios. To find out more about each scenario, click on the corresponding box.
    	    </p>

            <div class="col s12 m6 l3">
              <div class="card hoverable grey lighten-5 z-depth-3">
                <div class="card-image">
    <div class="center-align">
    <img src="http://placehold.it/150x150" class="responsive-img">
    </div>
                  <span class="card-title">Explore</span>
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

            <div class="col s12 m6 l3">
              <div class="card hoverable grey lighten-5 z-depth-3">
                <div class="card-image">
    <div class="center-align">
    <img src="http://placehold.it/150x150" class="responsive-img">
    </div>
                  <span class="card-title">Access</span>
                </div>
                <div class="card-content">
                  <p>Developers can use information in ontologies programmatically to provide semantically enriched web services.</p>
                </div>
                <!--
                <div class="card-action">
                  <a href="#">This is a link</a>
                </div>
                -->
              </div>
            </div>
            <div class="col s12 m6 l3">
              <div class="card hoverable grey lighten-5 z-depth-3">
                <div class="card-image">
    <div class="center-align">
    <img src="http://placehold.it/150x150" class="responsive-img">
    </div>
                  <span class="card-title">Consume</span>
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
            <div class="col s12 m6 l3">
              <div class="card hoverable grey lighten-5 z-depth-3">
                <div class="card-image">
    <div class="center-align">
    <img src="http://placehold.it/150x150" class="responsive-img">
    </div>
                  <span class="card-title">Contribute</span>
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


            <p class="red-text">&gt;&gt;&gt;Alternative version:&lt;&lt;&lt;</p>


            <div class="box col s12 m3">
                <div class="center-align home-action-icon">
                    <i class="material-icons">info_outline</i>
                </div>
                <div class="center-align flow-text">
                    Explore
                </div>
                <div class="">
                    Researchers can peruse ontologies that are interesting for their research.
                </div>
            </div>

            <div class="box col s12 m3">
                <div class="center-align home-action-icon">
                    <i class="material-icons">language</i>
                </div>
                <div class="center-align flow-text">
                    Access
                </div>
                <div class="">
                    Developers can use information in ontologies programmatically to provide semantically enriched web services.
                </div>
            </div>

            <div class="box col s12 m3">
                <div class="center-align home-action-icon">
                    <i class="material-icons">settings_input_antenna</i>
                </div>
                <div class="center-align flow-text">
                    Consume
                </div>
                <div class="">
                    Information from the ontologies can be retrieved and stored to your local information system.
                </div>
            </div>

            <div class="box col s12 m3">
                <div class="center-align home-action-icon">
                    <i class="material-icons">group_work</i>
                </div>
                <div class="center-align flow-text">
                    Contribute
                </div>
                <div class="">
                    Scientists can store or connect their terminologies to the TS in order to access all services provided by the TS automatically.
                </div>
            </div>

        </div>
        </div>

	</section><!--scenarios-->



    <section id="explore" class="grey lighten-3">
        <div class="container">
        <div class="row">
            <h2 class="center-align">Explore</h2>
            <p>
            The GFBio TS provides access to all terminologies useful in the GFBio context. The task of terminology mobilization is carried out in close connection with our project partners. There are two different possibilities to explore the terminologies that could be interesting for your research:
            </p>
            <div class="col s12 m6">
              <div class="card hoverable grey lighten-5 z-depth-3" data-href="/browse/">
                <div class="card-content">
                <p class="flow-text center-align">Browse</p>
                  <p>Browsing a terminology hierarchy enables you to understand its structure and content in order to determine if the terminology is useful for your research. A list of all connected terminologies can be found under <a href="/browse/">Browse</a>.</p>
                </div>
              </div>
            </div>
            <div class="col s12 m6">
              <div class="card hoverable grey lighten-5 z-depth-3" data-href="/search/">
                <div class="card-content">
                  <p class="flow-text center-align">Search</p>
                  <p>Under <a href="/search/">Search</a> you can query all connected terminologies for terms to determine their usefulness for your work, e.g. for annotating or connecting controlled vocabulary.</p>
                </div>
              </div>
            </div>

            <p>
                Terminologies are distinguished between internal (integrated) and external (connected) ones. To search the external terminologies, you need to make use of our search API where the following services have been integrated:
            </p>

            <div class="collection">
                <div class="collection-item clearfix">
                        <div class="col s6">
                            The Catalogue of Life (CoL)
                        </div>
                        <div class="col s6 right-align">
                            http://cybertaxonomy.eu/cdmlib/rest-api-name-catalogue.html
                        </div>
                </div>
                <div class="collection-item clearfix">
                        <div class="col s6">
                            The Integrated Taxonomic Information System (ITIS)
                        </div>
                        <div class="col s6 right-align">
                            http://www.itis.gov/web_service.html
                        </div>
                </div>
                <div class="collection-item clearfix">
                        <div class="col s6">
                            The World Register of Marine Species (WoRMS)
                        </div>
                        <div class="col s6 right-align">
                            http://www.marinespecies.org/aphia.php?p=webservice
                        </div>
                </div>
                <div class="collection-item clearfix">
                        <div class="col s6">
                            Fauna Europaea via PESI
                        </div>
                        <div class="col s6 right-align">
                            http://www.eu-nomen.eu/pesi/about-pesi
                        </div>
                </div>
                <div class="collection-item clearfix">
                        <div class="col s6">
                            The GeoNames geographical database (Geonames)
                        </div>
                        <div class="col s6 right-align">
                            http://www.geonames.org/export/web-services.html
                        </div>
                </div>
                <div class="collection-item clearfix">
                        <div class="col s6">
                            The DWB REST Webservice for Taxon Lists (DTNtaxonlists)
                        </div>
                        <div class="col s6 right-align">
                            http://services.snsb.info/DTNtaxonlists/rest/v0.1/static/api-doc.html
                        </div>
                </div>
                <div class="collection-item clearfix">
                        <div class="col s6">
                            The Prokaryotic Nomenclature Up-to-Date Taxon list (PNU)
                        </div>
                        <div class="col s6 right-align">
                            http://bacdive.dsmz.de/api/pnu/
                        </div>
                </div>
            </div>

        </div><!--row-->
        </div><!--container-->
    </section><!--explore-->

    <section id="access">
        <div class="container">
        <div class="row">
            <h2 class="center-align">Access</h2>
            <p>
                The TS provides a web services interface that serves as a generic access point to heterogeneous terminological resources. In our context the term “terminology” refers to any terminological resource – this can be a formal ontology, a taxonomy, or any useful source of Semantic Web compliant collections of terms (e.g. locations available via Geonames). The TS offers a universal access to the various types of terminologies in a uniform and transparent manner. It delivers unified results enabling computational access to the semantic content of the ontologies in combination with the hierarchical and lexical information held in taxonomies. These terminologies are either internally hosted or accessed via their remote web services. Internal terminologies are stored in a local Semantic Web repository (OpenLink Virtuoso). The TS offers additionally access to internally managed terminologies via a Linked Data interface and a SPARQL endpoint. External terminologies must be registered at the TS; they are remotely accessed via a web service requestor. The set of taxonomies registered at the TS include global initiatives like the Catalogue of Life (COL) or the World Register of Marine Species (WoRMS), and taxonomic services from our project partners like the Bacterial Nomenclature Up-to-Date (PNU). The key component of the TS is the adapter that enables the mapping of both internal Semantic Web terminologies and external terminological resources into a common output format (cf. the gear wheel in the figure).
            </p>
            <p>
                To use information in ontologies programmatically to provide semantically enriched web services please have a look beneath in the Developer section. Either you build your own application using our API or you can embed one of our widgets on your website.
            </p>
        </div><!--row-->
        </div><!--container-->
    </section><!--access-->

    <section id="consume" class="grey lighten-3">
        <div class="container">
        <div class="row">
            <h2 class="center-align">Consume</h2>
            <p>
            To re-use the terminologies provided here in your work, you can retrieve and store the data  to your local information system. If you are not sure which terminology fits your needs, please use our <a href="/browse/">Browse</a> functionality.
            </p>
        </div><!--row-->
        </div><!--container-->
    </section><!--consume-->

    <section id="contribute">
        <div class="container">
        <div class="row">
            <h2 class="center-align">Contribute</h2>
            <p>
            GFBio has developed an infrastructure to enable you to share and discover data from colleagues or other researchers worldwide more efficiently. This infrastructure is being extended by semantic components that ensure, in addition to efficient data capture and discovery, the interoperability of data that are extremely heterogeneous in their structure, formats and meaning.
            </p>
            <p>
            <a href="#gfbio-components" class="modal-trigger">The components of GFBio infrastructure</a> are based on the assumption that the “meaning” of the data is provided by a fourth component – the GFBio Terminology Service (bottom left in the figure; for more information see <a href="/developer/#technology">Technology Behind</a>). This service has been built upon considerable efforts that have been undertaken by scientists to describe their domain knowledge in well-structured ontologies and taxonomies. This is where you come into play. Soon you will be able to contribute to this service providing your data to enrich the TS...
            </p>
            <p>
            Figure: Semantically enriched components of the GFBio Data Portal
            </p>
        </div><!--row-->
        </div><!--container-->

        <!-- Modal -->
        <div id="gfbio-components" class="modal">
            <div class="modal-content">
    	        <h4>The components of GFBio infrastructure</h4>
    	        <p>
	            The GFBio Repository Network (upper right in the figure) comprises amongst others molecular data (EMBL-EBI), environmental data (PANGAEA), as well as natural history and culture collection data (e.g. MfN , DSMZ  and SNSB). These data repositories register their data through the GFBio Data Portal (upper right in the figure). The GFBio Portal provides researchers with services such as indexing, annotating and searching data sets. These services help you upload, publish, share and discover data in an efficient way.
				</p>
            </div>
            <div class="modal-footer">
              <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
            </div>
        </div>

    </section><!--contribute-->

    <section id="consortium" class="grey lighten-3">
        <div class="container">
        <div class="row">
        <div class="col s12">
            <h2 class="center-align">Consortium</h2>

            <div class="row">
                <div class="col s12 m3">
            		<img src="http://placehold.it/200x150" class="responsive-img">
                </div>
                <div class="col s12 m9">
                    <img src="http://placehold.it/150x100" class="responsive-img">
                    <img src="http://placehold.it/150x100" class="responsive-img">
                    <img src="http://placehold.it/150x100" class="responsive-img">
                    <img src="http://placehold.it/150x100" class="responsive-img">
                    <img src="http://placehold.it/150x100" class="responsive-img">
                    <img src="http://placehold.it/150x100" class="responsive-img">
                    <img src="http://placehold.it/150x100" class="responsive-img">
                    <img src="http://placehold.it/150x100" class="responsive-img">
                    <img src="http://placehold.it/150x100" class="responsive-img">
                    <img src="http://placehold.it/150x100" class="responsive-img">
                    <img src="http://placehold.it/150x100" class="responsive-img">
                    <img src="http://placehold.it/150x100" class="responsive-img">
                </div>
        </div>
        </div>
        </div>
	</section>


</div><!--home-->





<?php get_footer(); ?>


<script type="text/javascript">
$(function() {

    // 'read more...' link
    $('#readmore').click(function (e) {
        e.preventDefault();
        var $el = $('#more').first();
        if ($el.css('display') === 'none') {
            $el.slideDown('slow');
            $(e.target).text("<?php _e('Hide...') ?>");
        } else {
            $el.slideUp('fast');
            $(e.target).text("<?php _e('Read more...') ?>");
        }
    });

    // clicking on the boxes
    $('.card, .box').click(function(e){
        e.preventDefault();
        var link = $(this).data('href'); //requires event bubbling
        if (link) {
            //redirect
            window.location = link;
        }
    });

    // init the modals
    $('.modal').modal();

    // equal heights for the cards
    var $cards = $('.card');
    $cards.matchHeight();
    $cards.find('.card-action').css('position', 'absolute').css('bottom', '0').css('left', '0');

});
</script>

</body>
</html>