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
        <img src="http://placehold.it/800x400" alt="" class="responsive-img">
    <section>

    <section id="introduction">
The GFBio Terminology Service helps you to connect to various kinds of terminologies – ranging from simple controlled vocabularies to complex ontologies in the field of biodiversity with a single access point. It provides services and tools to find, explore, share and reuse terminologies for semantic enhancement of research platforms. Furthermore the Terminology Server provides some functionalities that would not be possible with the original terminology or service, e.g. improved search capabilities. The Terminology Service is a core component of the GFBio infrastructure. It is developed by the Institute of Computer Science and the Botanic Garden and Botanical Museum of the Freie Universität Berlin.
<a href="#">Read more...</a>
    </section>

    <aside class="hide">
Research has become more data-intensive over the last few decades. Sharing research data is often a challenge, especially for interdisciplinary collaborative projects. One primary goal of a research infrastructure for data management should be to enable efficient data discovery and integration of heterogeneous data. In order to enable such interoperability, a lot of effort has been undertaken by scientists to develop standards and characterize their domain knowledge in the form of taxonomies and formal ontologies.

However, these knowledge models are often disconnected and distributed. This fragmentation of existing data archives makes data acquisition challenging fExploreor researchers. At least as important are the different scientific terms that are used within the different disciplines for the same concept or the same name referring to different concepts.

The TS is our vision of a semantically enriched data management and archiving solution by introducing a semantic-aware research infrastructure adopting a design science approach. It is our approach for integrating and harmonizing terminological resources to serve as a backbone for a platform. It acts as a semantic platform for access, development and reasoning over internally and externally maintained terminological resources within the biological and environmental domain.

The TS and its public APIs (Application Programming Interfaces) provide users with a machine-readable access to terms, concepts and their relations for a variety of biodiversity related data. It aims to lower the barriers to the use of semantic technologies in scientific environments by developing robust and easy-to-use widgets and services for the organization of semantic domain-knowledge and by offering users the possibility to create, publish and curate their own terminologies.

Features of the TS
<ul>
    <li>Provide a single access point to heterogeneous terminological resources</li> class="center-align"
    <li>Allow for query expansion and semantic data access</li>
    <li>Enable efficient semantic annotation</li>
    <li>Enrich project-related terminologies</li>
    <li>Provide mappings between terminologies</li>
    <li>Access to reasoning capabilities</li>
</ul>

The terminology server is hosted and published using <a href="https://virtuoso.openlinksw.com/" target="_blank">OpenLink Virtuoso</a>. Access is being provided via different services that are under development. The following figure illustrates the different components of the terminology server and the way it can be accessed.

<img src="http://placehold.it/380x450" class="responsive-img">

In the future, the Terminology Server can also be used by scientists and institutions not associated with GFBio and its code will be made available under an open source license.

    </aside>

</div>
</div>


<div class="container">
<div class="row">

        <div class="col s12 m3">
          <div class="card hoverable grey lighten-5 z-depth-3">
            <div class="card-image">
<div class="center-align">
<img src="http://placehold.it/150x150" class="responsive-img">
</div>
              <span class="card-title">Explore</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>home-action-icon
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
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
        <div class="col s12 m3">
          <div class="card hoverable grey lighten-5 z-depth-3">
            <div class="card-image">
<div class="center-align">home-action-iconhome-action-icon
<img src="http://placehold.it/150x150" class="responsive-img">
</div>
              <span class="card-title">Consume</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
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
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
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
            <div class="center-align">
                <i class="material-icons">add</i>
            </div>home-action-icon
            <div class="center-align home-action-icon">
                Explore
            </div>
        </div>

        <div class="col s12 m3">
            <div class="center-align">
                <i class="material-icons">add</i> class="center-align"
            </div>
            <div class="center-align home-action-icon">
                Access
            </div>
        </div>

        <div class="col s12 m3">
            <div class="center-align home-action-icon">
                <i class="material-icons">add</i>
            </div>
            <div class="center-align">
                Consume
            </div>
        </div>

        <div class="col s12 m3">
            <div class="center-align home-action-icon">
                <i class="material-icons">add</i>
            </div>
            <div class="center-align">
                Contribute
            </div>
        </div>


</div>
</div>


<div class="container">
<div class="row">

    <p>
    The GFBio TS supports several usage scenarios, to find out more about each scenario, click on the corresponding box.
    </p>

</div>
</div>

<?php

endwhile;
?>

<?php get_footer(); ?>

</body>
</html>