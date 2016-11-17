<?php
/**
 * The template for displaying pages
 */

get_header(); ?>

<?php
while ( have_posts() ) : the_post();

// the_content();
?>

<div class="container">
<div class="row">

    <section id="banner">
        <img src="http://placehold.it/1000x400" alt="" class="responsive-img">
    <section>

    <section id="introduction">
        <p>
        The GFBio Terminology Service helps you to connect to various kinds of terminologies – ranging from simple controlled vocabularies to complex ontologies in the field of biodiversity with a single access point. It provides services and tools to find, explore, share and reuse terminologies for semantic enhancement of research platforms. Furthermore the Terminology Server provides some functionalities that would not be possible with the original terminology or service, e.g. improved search capabilities. The Terminology Service is a core component of the GFBio infrastructure. It is developed by the Institute of Computer Science and the Botanic Garden and Botanical Museum of the Freie Universität Berlin.
        <a id="readmore" href="#more">Read more...</a>
      </p>
    </section>

    <aside class="hide" id="more" style="display:none">
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
    Features of the TS
    <ul>
        <li>Provide a single access point to heterogeneous terminological resources</li> class="center-align"
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

    <img src="http://placehold.it/380x450" class="responsive-img">

    <p>
    In the future, the Terminology Server can also be used by scientists and institutions not associated with GFBio and its code will be made available under an open source license.
    </p>

    </aside>


    <p>
    The GFBio TS supports several usage scenarios, to find out more about each scenario, click on the corresponding box.
    </p>


        <div class="col s12 m3">
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
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>

        <div class="col s12 m3">
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
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
        <div class="col s12 m3">
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
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
        <div class="col s12 m3">
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
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>

</div>
</div>


<div class="container">
<div class="row">

        <div class="col s12 m3">
            <div class="center-align home-action-icon">
                <a href="#" class="black-text"><i class="material-icons">info_outline</i></a>
            </div>
            <div class="center-align flow-text">
                <a class="waves-effect waves-light black-text" href="#modal_explore">Explore</a>
            </div>
            <div class="">
                Researchers can peruse ontologies that are interesting for their research.
            </div>
        </div>

        <div class="col s12 m3">
            <div class="center-align home-action-icon">
                <a href="#" class="black-text"><i class="material-icons">language</i></a>
            </div>
            <div class="center-align flow-text">
                <a href="#" class="black-text">Access</a>
            </div>
            <div class="">
                Developers can use information in ontologies programmatically to provide semantically enriched web services.
            </div>
        </div>

        <div class="col s12 m3">
            <div class="center-align home-action-icon">
                <a href="#" class="black-text"><i class="material-icons">settings_input_antenna</i></a>
            </div>
            <div class="center-align flow-text">
                <a href="#" class="black-text">Consume</a>
            </div>
            <div class="">
                Information from the ontologies can be retrieved and stored to your local information system.
            </div>
        </div>

        <div class="col s12 m3">
            <div class="center-align home-action-icon">
                <a href="#" class="black-text"><i class="material-icons">group_work</i></a>
            </div>
            <div class="center-align flow-text">
                <a href="#" class="black-text">Contribute</a>
            </div>
            <div class="">
                Scientists can store or connect their terminologies to the TS in order to access all services provided by the TS automatically.
            </div>
        </div>

</div>
</div>


<!-- Modal Structure -->
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


<?php

endwhile;
?>

<?php get_footer(); ?>

<script type="text/javascript">
$(function() {
    $('#readmore').click(function () {
        $('#more').first().show('fast');
    });
});
</script>

</body>
</html>