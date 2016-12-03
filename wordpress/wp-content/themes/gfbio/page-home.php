<?php
/**
 * The template for displaying pages
 *
 * -*- coding: utf-8 -*-
 * vim: tabstop=8 expandtab shiftwidth=4 softtabstop=4
 *
 */

// Add special CSS from homepage
function homepage_css() {
echo '<style type="text/css">
    /* initial size of the header */
    nav .brand-logo img,
    div.nav-wrapper .brand-logo img,
    nav .nav-wrapper ul li a,
    nav .nav-wrapper ul li a i {
        height:84px;
    }
</style>';
}
add_action('wp_head', 'homepage_css', 10);


get_header();

while ( have_posts() ) : the_post();

// the_content();

endwhile;
?>

<div id="home">

    <!--
    <section id="banner">
    	<img src="http://placehold.it/1400x400" alt="" class="responsive-img" style="width:100%;height:auto">
    </section>
    -->

    <section id="introduction">
		<div class="container">
		<div class="row">
	        <p>
		        The Terminology Service (TS) helps you connect through a single access point to various kinds of terminologies in a uniform and transparent manner. A terminology can range from a simple controlled vocabulary to a complex ontology. The TS provides services and tools to find, explore, share and reuse terminologies for semantic enhancement of research platforms.
		        <a id="readmore" href="#"><?php _e('More...', 'gfbio') ?></a>
		    </p>
            <aside id="more" style="display:none">
                <p>
                    The Terminology Service (TS) enables the vision of a semantically enriched data management and archiving solution by introducing a semantic-aware component to research infrastructures. It is our approach for integrating and harmonizing terminological resources to serve as a backbone for such infrastructures. The TS acts as a semantic platform for access, development and reasoning over internally and externally maintained terminological resources within the biological and environmental domain.
                </p>
                <p>
                    The TS and its public <a href="/api/">API</a> (Application Programming Interface) provide users with a machine-readable access to terms and their relations for a variety of biodiversity related data. We aim to lowering the barriers to use semantic technologies in research environments by developing robust and easy-to-use <a href="/widgets/">widgets</a> and services. Additionally, we support scientists to create, publish and curate their own terminologies.
                </p>
                <p>
                    <h5>Features of the Terminology Service</h5>
                    <ul class="browser-default">
                        <li>Provide a single access point to heterogeneous terminological resources</li>
                        <li>Allow for query expansion and semantic data access</li>
                        <li>Enable efficient semantic annotation</li>
                        <li>Enrich project-related terminologies</li>
                        <li>Provide mappings between terminologies (under development)</li>
                    </ul>
                </p>
            </aside>
        </div>
        <div id="maincards" class="row">
            <div class="col s12 m6 l3">
              <div class="card hoverable alt z-depth-3" data-href="explore">
                <div class="center-align secondary-color">
                  <div class="card-icon">
                      <img src="/static/browse.svg" alt="<?php _e('Explore') ?>" />
                  </div>
                  <span class="card-title white" style="width:100%"><?php _e('Explore') ?></span>
                </div>
                <div class="card-content">
                  <p>
	                  Browse and search for terminologies that can be interesting for your research.
                  </p>
                </div>
                <!--
                <div class="card-action">
                  <a href="#">This is a link</a>
                </div>
                -->
              </div>
            </div>
            <div class="col s12 m6 l3">
              <div class="card hoverable alt z-depth-3" data-href="access">
                <div class="center-align secondary-color">
                  <div class="card-icon">
                      <img src="/static/access.png" alt="<?php _e('Access') ?>" />
                  </div>
                  <span class="card-title white"><?php _e('Access') ?></span>
                </div>
                <div class="card-content">
                  <p>
	                  Use information from terminologies programmatically to provide semantically enriched applications.
                  </p>
                </div>
                <!--
                <div class="card-action">
                  <a href="#">This is a link</a>
                </div>
                -->
              </div>
            </div>
            <div class="col s12 m6 l3">
              <div class="card hoverable alt z-depth-3" data-href="consume">
                <div class="center-align secondary-color">
                  <div class="card-icon">
                    <img src="/static/consume.png" alt="<?php _e('Consume') ?>" />
                  </div>
                  <span class="card-title white"><?php _e('Consume') ?></span>
                </div>
                <div class="card-content">
                  <p>
	                  Retrieve and store Information from terminologies in your local information system.
                  </p>
                </div>
                <!--
                <div class="card-action">
                  <a href="#">This is a link</a>
                </div>
                -->
              </div>
            </div>
            <div class="col s12 m6 l3">
              <div class="card hoverable alt z-depth-3" data-href="contribute">
                <div class="center-align secondary-color">
                  <div class="card-icon">
                      <img src="/static/contribute.png" alt="<?php _e('Contribute') ?>" />
                  </div>
                  <span class="card-title white"><?php _e('Contribute') ?></span>
                </div>
                <div class="card-content">
                  <p>
					Store or connect your terminologies to the TS and get access to all provided services automatically.
                  </p>
                </div>
                <!--
                <div class="card-action">
                  <a href="#">This is a link</a>
                </div>
                -->
              </div>
            </div>
		</div><!--row-->
		</div><!--container-->
    </section><!--introduction-->


    <section id="explore" class="alt">
        <div class="container">
        <div class="row">
            <div class="center-align">
                <img src="/static/browse.png" class="headline-icon" alt="<?php _e('Browse', 'gfbio') ?>">
            </div>
            <h2 class="center-align">
                <?php _e('Explore', 'gfbio') ?>
            </h2>
            <p>
				The Terminology Service provides access to a set of terminologies useful for biological research. Terminologies are distinguished between internal (locally hosted) and external (remotely accessed) ones. There are two possibilities to explore the terminologies:
            </p>
            <div class="col s12 m6">
              <div class="card hoverable clickable z-depth-3" data-href="/browse/">
                <div class="card-content">
                <p class="flow-text center-align"><?php _e('Browse', 'gfbio') ?></p>
                  <p>
    	              Under <a href="/browse/">Browse</a> you can find the list of all terminologies. Browsing a terminology hierarchy enables you to understand its structure and content in order to determine if the terminology is useful for your research.
                  </p>
                </div>
              </div>
            </div>
            <div class="col s12 m6">
              <div class="card hoverable clickable z-depth-3" data-href="/search/">
                <div class="card-content">
                  <p class="flow-text center-align"><?php _e('Search', 'gfbio') ?></p>
                  <p>
	                  Under <a href="/search/">Search</a> you can query all terminologies for terms to determine their usefulness for your research. Clicking on a term will display its properties and its graphical representation inside the corresponding terminology.
                  </p>
                </div>
              </div>
            </div>
        </div><!--row-->
        </div><!--container-->
    </section><!--explore-->


    <section id="access">
        <div class="container">
        <div class="row">
            <div class="center-align">
                <img src="/static/access.png" class="headline-icon" alt="<?php _e('Access', 'gfbio') ?>">
            </div>
            <h2 class="center-align"><?php _e('Access', 'gfbio') ?></h2>
            <p>
                The Terminology Service allows you to semantically enrich your applications by accessing the information provided by the Terminology Service via our API or by including the service in your User Interface. Thus, we offer two possibilities for application developers to use the Terminology Service:
            </p>
        </div>
        <div class="row">
            <div class="col s12 m6">
            	<h3 class="flow-text center-align">API</h3>
            	<p>
	            	Our <a href="/api/">API</a> consists of a RESTful webservice for accessing all available terminologies. It has been designed based on API usability principles. The service endpoints are grouped into four categories: search services, hierarchy-oriented services, information services and metadata services.
            	</p>
            </div>
            <div class="col s12 m6">
            	<h3 class="flow-text center-align">Widgets</h3>
            	<p>
					We offer a set of <a href="/widgets/">widgets</a> that can be directly embedded in your web application. By incorporating such widgets, you enable your users to search, select and browse terms from one or more terminologies directly.
            	</p>
            </div>
        </div>
        <div class="row">
            <p>
            If there is a terminology you would like to provide or to use via the Terminology Service Widgets or if you have suggestions for the improvement of our service, please <a href="/about/#contact">contact us</a>.
            </p>
        </div><!--row-->
        </div><!--container-->
    </section><!--access-->



    <section id="consume" class="alt">
        <div class="container">
        <div class="row">
            <div class="col s12 m6 hide-on-small-only" style="border-right:1px solid #999999">
                <div style="padding-right:1em;">
                    <img src="/static/consume.svg" style="max-width:100%;" alt="<?php _e('Consume', 'gfbio') ?>" />
                </div>
            </div>
            <div class="col s12 m6" style="padding-left:3.5rem;">
                <h2 class="center-align"><?php _e('Consume', 'gfbio') ?></h2>
                <p>
		      		The Terminology Service offers the possibility to retrieve and store parts or complete terminologies into your local information system. The advantage is that you can integrate the semantic information from the terminologies into your existing system (databases, indexes, etc.) directly. Locally hosted copies of terminologies can be extended locally or updated when new versions of the terminologies become available. We plan to provide an update service that informs Terminology Service users about terminology updates.
                </p>
            </div>
        </div><!--row-->
        </div><!--container-->
    </section><!--consume-->



    <section id="contribute">
        <div class="container">
        <div class="row">
            <div class="center-align">
                <img src="/static/contribute.png" class="headline-icon" alt="<?php _e('Contribute', 'gfbio') ?>">
            </div>
            <h2 class="center-align">
                <?php _e('Contribute', 'gfbio') ?>
            </h2>
            <p>
				You can provide your own terminologies to the Terminology Service and directly benefit from the offered services and tools. Your terminology will be available via our API and will be connected to the widgets for search and visualization.
            </p>
        </div><!--row-->
        <div class="row">
            <div class="col s12 m6">
	            <h3 class="flow-text center-align">Provide a file<br />to be stored locally</h3>
	            <p>
		            You can provide your terminologies in a variety of formats ranging from a simple list of terms, a tabular form to Semantic Web (SW) compliant formats like RDF, OWL and ontologies like SKOS. We developed a tool for transforming a list of terms or documents in a tabular form into a SW-compliant format. The files will be checked for consistency and a set of metrics will be computed. Besides the terminology, you only need to provide some additional metadata information (e.g., description, contact information).
	            </p>
			</div>
            <div class="col s12 m6">
	            <h3 class="flow-text center-align">Register your service<br />to be accessed remotely</h3>
	            <p>
		            You can also register your service at the Terminology Service and we will create a corresponding adapter to our API. The TS API calls will be redirected to your service and the service output will be mapped to the Terminology Service. By connecting your service to the Terminology Service, you increase its visibility and usability. Existing or new applications can use your terminologies in combination with existing terminologies in the TS easily. Furthermore, you can employ all available services offered by the TS.
	            </p>
			</div>
        </div><!--row-->
        <div class="row">
			<p>
				Please <a href="/about/#contact">contact us</a> if you have question or if you want to contribute your terminology or service.
			</p>
        </div><!--row-->
        </div><!--container-->
    </section><!--contribute-->



    <section id="consortium" class="alt">
        <div class="container">
        <div class="row">
        <div class="col s12">

            <div class="center-align">
                <img src="/static/gf_bio_logo_claim_370x208.png" class="headline-icon" alt="<?php _e('Consortium', 'gfbio') ?>">
            </div>
            <h2 class="center-align">
                <?php _e('Consortium', 'gfbio') ?>
            </h2>

            <div class="row">
                <div class="partnerlogos col s12">
                    <div class="row">
                        <div class="logo valign-wrapper col s4 m3 l2">
                            <img src="/static/logos/Partnerlogo_MARUM_312x100.png" class="valign responsive-img">
                        </div>
                        <div class="logo valign-wrapper col s4 m3 l2">
                            <img src="/static/logos/AWI.gif" class="valign responsive-img">
                        </div>
                        <div class="logo valign-wrapper col s4 m3 l2">
                            <img src="/static/logos/senckenberg.gif" class="valign responsive-img">
                        </div>
                        <div class="logo valign-wrapper col s4 m3 l2">
                            <img src="/static/logos/BGBM_Logo_new.png" class="valign responsive-img">
                        </div>
                        <div class="logo valign-wrapper col s4 m3 l2">
                            <img src="/static/logos/Friedrich_Schiller_Uni.gif" class="valign responsive-img">
                        </div>
                        <div class="logo valign-wrapper col s4 m3 l2">
                            <img src="/static/logos/Partnerlogo_FreieUniversitaetBerlin.png" class="valign responsive-img">
                        </div>
                        <div class="logo valign-wrapper col s4 m3 l2">
                            <img src="/static/logos/Partnerlogo_Uni-Goettingen.jpg" class="valign responsive-img">
                        </div>
                        <div class="logo valign-wrapper col s4 m3 l2">
                            <img src="/static/logos/SUB_Goettingen.png" class="valign responsive-img">
                        </div>
                        <div class="logo valign-wrapper col s4 m3 l2">
                            <img src="/static/logos/GWDG.png" class="valign responsive-img">
                        </div>
                        <div class="logo valign-wrapper col s4 m3 l2">
                            <img src="/static/logos/Jacobs_University_Bremen.png" class="valign responsive-img">
                        </div>
                        <div class="logo valign-wrapper col s4 m3 l2">
                            <img src="/static/logos/DSMZ.jpg" class="valign responsive-img">
                        </div>
                        <div class="logo valign-wrapper col s4 m3 l2">
                            <img src="/static/logos/MPI-BGC.png" class="valign responsive-img">
                        </div>
                        <div class="logo valign-wrapper col s4 m3 l2">
                            <img src="/static/logos/Museum_f_Naturkunde.gif" class="valign responsive-img">
                        </div>
                        <div class="logo valign-wrapper col s4 m3 l2">
                            <img src="/static/logos/Partnerlogo_Philipps_Uni.gif" class="valign responsive-img">
                        </div>
                        <div class="logo valign-wrapper col s4 m3 l2">
                            <img src="/static/logos/Partnerlogo_SNSB.png" class="valign responsive-img">
                        </div>
                        <div class="logo valign-wrapper col s4 m3 l2">
                            <img src="/static/logos/Partnerlogo_SMNS.jpg" class="valign responsive-img">
                        </div>
                        <div class="logo valign-wrapper col s4 m3 l2">
                            <img src="/static/logos/Partnerlogo_UFZ.jpg" class="valign responsive-img">
                        </div>
                        <div class="logo valign-wrapper col s4 m3 l2">
                            <img src="/static/logos/uni-leipzig.jpg" class="valign responsive-img">
                        </div>
                        <div class="logo valign-wrapper col s4 m3 l2">
                            <img src="/static/logos/ZFMK.png" class="valign responsive-img">
                        </div>
                    </div>
                </div>
        </div>
        </div>
        </div>
	</section><!--consortium-->

    <div class="navbtn up">
        <a class=" btn-floating btn-large waves-effect waves-light red">
            <i class="material-icons">publish</i>
        </a>
    </div>

</div><!--home-->



<?php get_footer(); ?>


<script type="text/javascript">
//(function($){
$(function(){

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

    // clicking on the boxes -> scroll to element
    // requires event bubbling
    $('#introduction .card').click(function(e) {
        e.preventDefault();
        var link = $(this).data('href');
        if (link) {
            // save the original position so that we can jump back
            $('.navbtn').data('origpos', $(window).scrollTop());
            // scroll down to the section
            $('html, body').animate({
                scrollTop: $("#"+link).offset().top - 24
            }, 800);
            // show the nav button
            $('.navbtn').show();
        }
    });

    // clicking on the boxes
    // requires event bubbling
    $('.card.clickable').click(function(e) {
        e.preventDefault();
        var link = $(this).data('href');
        if (link) {
            window.location = link;
        }
    });

    // clicking on the nav button
    $('.navbtn').click(function(e) {
        e.preventDefault();
        // var target = $(this).data('target');
        var origpos = $(this).data('origpos');
        if (origpos >= 0) {
            $('html, body').animate({
                scrollTop: +origpos
            }, 800);
            // hide the nav button
            $(this).hide();
        }
    });

    // equal heights for the cards
    $('.card').matchHeight();

    // equal heights for the logos
    $('.logo').matchHeight();

    // track the scroll position
    // $(window).scroll(function() {
    //     let logoHeight,
    //         minHeight = 64,
    //         maxHeight = 84,
    //         startAnimAt = 64,
    //         endAnimAt = 164,
    //         offset = $(this).scrollTop();
    //     // console.log('offset', offset);
    // });// $(window).scroll

    var navbarToggle = new Waypoint({
        element: document.getElementById('explore'),
        handler: function(direction) {
            console.log('resize header event', direction);
            $logo = $('nav .brand-logo img');
            $menu_items = $('nav .nav-wrapper ul li a, nav .nav-wrapper ul li a i');
            console.log($menu_items.css('height'));
            switch (direction) {
            case "down":
                $logo.animate({'height':'64px'}, 700);
                $menu_items.animate({'height':'64px', 'line-height':'64px'}, 700);
                break;
            case "up":
                $logo.animate({'height':'84px'}, 700);
                $menu_items.animate({'height':'84px', 'line-height':'84px'}, 700);
                break;
            }// switch
        }
    });

    var deactivateNavBtn = new Waypoint({
        element: document.getElementById('maincards'),
        handler: function(direction) {
            if (direction === "up") {
                $('.navbtn').hide();
            }
        }
    });



}); // end of document ready
//})(window.jQuery); // end of jQuery name space

</script>

</body>
</html>