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
		<div class="container">
		<div class="row">
        	<img src="http://placehold.it/1000x400" alt="" class="responsive-img">
		</div>
		</div>
    </section>

    <section id="introduction">
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


            <p>&gt;&gt;&gt;Alternative version:&lt;&lt;&lt;</p>


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

	</section>


    <section id="consortium" class="grey lighten-3">
        <div class="container">
        <div class="row">
        <div class="col s12">
            <h2>Consortium</h2>

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




<!-- Modals -->
<div id="modal_explore" class="modal">
    <div class="modal-content">
        <h4>Explore</h4>
        <p>
        A bunch of textA bunch of textA bunch of textA bunch of textA bunch of textA bunch of textA bunch of textA bunch of textA bunch of textA bunch of textA bunch of textA bunch of textA bunch of textA bunch of textA bunch of textA bunch of textA bunch of textA bunch of textA bunch of textA bunch of textA bunch of textA bunch of textA bunch of textA bunch of textA bunch of textA bunch of text
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
</div>

<div id="modal_consume" class="modal">
    <div class="modal-content">
        <h4>Consume</h4>
        <p>
            To re-use the terminologies provided here in your work, you can retrieve and store the data  to your local information system. If you are not sure which terminology fits your needs, please use our <a href="/browse/">Browse</a> functionality.
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
</div>

<div id="modal_contribute" class="modal">
    <div class="modal-content">
        <h4>Contribute</h4>
        <p>
            GFBio has developed an infrastructure to enable you to share and discover data from colleagues or other researchers worldwide more efficiently. This infrastructure is being extended by semantic components that ensure, in addition to efficient data capture and discovery, the interoperability of data that are extremely heterogeneous in their structure, formats and meaning.
        </p>
        <p>
            The components of GFBio infrastructure are based on the assumption that the “meaning” of the data is provided by a fourth component – the GFBio Terminology Service (bottom left in the figure; for more information see Technology Behind). This service has been built upon considerable efforts that have been undertaken by scientists to describe their domain knowledge in well-structured ontologies and taxonomies. This is where you come into play. Soon you will be able to contribute to this service providing your data to enrich the TS...

            <div>Figure: Semantically enriched components of the GFBio Data Portal</div>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
</div>



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
        alert('you clicked the box');
    });

    // intiate the modals
    // TODO
    // $('.modal').modal();

    // equal heights for the cards
    var $cards = $('.card');
    $cards.matchHeight();
    $cards.find('.card-action').css('position', 'absolute').css('bottom', '0').css('left', '0');

});
</script>

</body>
</html>