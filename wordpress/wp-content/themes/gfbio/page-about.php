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


<section id="faq">

<div class="container" id="faq">
<div class="row">

<h2 class="center-align"><?php the_title() ?></h2>
<?php edit_post_link(__('Edit page', 'gfbio'), '<div class="right-align">', "</div>", null, "") ?>


<section id="about">
    <h2 class="flow-text center-align">About the Terminology Service</h2>
    <p>
        The GFBio TS is the terminological backbone of the GFBio project. The GFBio project is funded by the Deutsche Forschungsgemeinschaft (DFG) under the grant No. SE 553/7-1. The Terminology Server is being developed within the GFBio work package 7.4 &quot;WP7.4 Terminology Management&quot;.
    </p>
    <p>
        <strong>WP7.4 Lead: Claudia M&uuml;ller-Birn</strong><br />
        Working Group Human-Centered Computing (HCC)<br />
        Freie Universit&auml;t Berlin<br />
        Institute of Computer Science<br />
        K&ouml;nigin-Luise-Str. 24-26<br />
        14195 Berlin<br />
        Phone: +49-30-838-75256<br />
        Email: clmb@inf.fu-berlin.de<br />
    </p>
</section>


<section id="contact">
    <h2 class="flow-text center-align">Contact us</h2>

    <div id="contactcards" class="row">
        <div class="col s12 m6 l3">
            <div class="card alt z-depth-3" data-href="explore">
                <div class="title center-align secondary-color">
                    <h2 class="flow-text">Dr. Naouel<br />Karam</h2>
                </div>
                <div class="sub-title white valign-wrapper">
                    <div class="valign center-align">
                        Lead Software Architect
                    </div>
                </div>
                <div class="card-content">
                    Freie Universit&auml;t Berlin<br />
                    Institute of Computer Science<br />
                    K&ouml;nigin-Luise-Str. 24-26<br />
                    14195 Berlin<br />
                    Phone: +49 30 838 56435<br />
                    Email: naouel.karam@fu-berlin.de
                </div>
                <!--
                <div class="card-action">
                    <a href="#">This is a link</a>
                </div>
                -->
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card alt z-depth-3" data-href="explore">
                <div class="title center-align secondary-color">
                    <h2 class="flow-text">Robert<br />Lorenz</h2>
                </div>
                <div class="sub-title white valign-wrapper">
                    <div class="valign center-align">
                        Widget Development, API Usability
                    </div>
                </div>
                <div class="card-content">
                    Freie Universit&auml;t Berlin<br />
                    Institute of Computer Science<br />
                    K&ouml;nigin-Luise-Str. 24-26<br />
                    14195 Berlin<br />
                    Phone: +49 30 838<br />
                    Email: robert.lorenz@fu-berlin.de
                </div>
                <!--
                <div class="card-action">
                    <a href="#">This is a link</a>
                </div>
                -->
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card alt z-depth-3" data-href="explore">
                <div class="title center-align secondary-color">
                    <h2 class="flow-text">David<br />Fichtm&uuml;ller</h2>
                </div>
                <div class="sub-title white valign-wrapper">
                    <div class="valign center-align">
                        Terminology Service Maintenance
                    </div>
                </div>
                <div class="card-content">
                    Freie Universit&auml;t Berlin, Botanic Garden and Botanical Museum Berlin (BGBM)<br />
                    K&ouml;nigin-Luise-Str. 6-8<br />
                    14195 Berlin<br />
                    Phone: +49 30 838 57856<br />
                    Email: d.fichtmueller@bgbm.de
                </div>
                <!--
                <div class="card-action">
                    <a href="#">This is a link</a>
                </div>
                -->
            </div>
        </div>
        <div class="col s12 m6 l3">
            <div class="card alt z-depth-3" data-href="explore">
                <div class="title center-align secondary-color">
                    <h2 class="flow-text">Maren<br />Gleisberg</h2>
                </div>
                <div class="sub-title white valign-wrapper">
                    <div class="valign center-align">
                        Terminology Mobilisation
                    </div>
                </div>
                <div class="card-content">
                    Freie Universit&auml;t Berlin, Botanic Garden and Botanical Museum Berlin (BGBM)<br />
                    K&ouml;nigin-Luise-Str. 6-8<br />
                    14195 Berlin<br />
                    Phone: +49 30 838 50584<br />
                    Email: m.gleisberg@bgbm.org
                </div>
                <!--
                <div class="card-action">
                    <a href="#">This is a link</a>
                </div>
                -->
            </div>
        </div>
    </div>
</section>


<section id="citation">
        <h2 class="flow-text center-align">How to cite us?</h2>
        <p>
        <code>
        N. Karam, C. Müller-Birn, M. Gleisberg, D. Fichtm&uuml;ller, R. Tolksdorf, A. Güntsch: A Terminology Service Supporting Semantic Annotation, Integration, Discovery and Analysis of interdisciplinary Research Data. Datenbank-Spektrum 16(3): 195-205 (2016)
        </code>
        </p>
</section>


<section id="partners">
        <h2 class="flow-text center-align">Partners</h2>
        <p>
            The GFBio Terminology Server is jointly developed and run by the HCC Group at the Institute of of Computer Science and the the Botanic Garden and Botanical Museum Berlin-Dahlem at Freie Universität Berlin.
        </p>
        <p>
            The following GFBio partner institutions are contributing to the development of the Terminology Service and its integration in the GFBio Infrastructure:<br />
PANGAEA, Marum, University of Bremen, Friedrich Schiller University of Jena, JUB/MPI Bremen, University of Leipzig, SNSB, University of G&ouml;ttingen, MfN, SGN/Bhttp://www.IK-F, MPI Jena, iDiv, University of Marburg
        </p>
</section>


<section id="consortium">
        <h2 class="flow-text center-align">The GFBio consortium</h2>
        <p>
            GFBio&apos;s multidisciplinary consortium is represented by experts from a variety of institutions ranging from natural history collections, libraries, bioinformatics to environmental data archives. See <a href="http://www.gfbio.org/partner" target="_blank">gfbio.org/partner</a> for more information.
        </p>
</section>


</div><!--row-->
</div><!--container-->

</section><!--faq-->


<?php get_footer() ?>


<script>
$(function(){

    // equal heights for the card titles
    $('.card .title').matchHeight();
    $('.card .sub-title').matchHeight();

    // equal heights for the cards
    $('.card').matchHeight();

});
</script>



</body>
</html>