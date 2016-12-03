<?php
/**
 * The template for displaying pages
 *
# -*- coding: utf-8 -*-
# vim: tabstop=4 expandtab shiftwidth=4 softtabstop=4
 *
 */

get_header(); ?>

<?php
while ( have_posts() ) : the_post();
?>


<section id="widgets">
<div class="container">
<div class="row">


    <h2 class="center-align"><?php _e('Widgets', 'gfbio') ?></h2>
    <?php edit_post_link(__('Edit page', 'gfbio'), '<div class="right-align">', "</div>", null, "") ?>


    <?php
      if ($content = get_the_content()) {
        echo '<p>';
            echo $content;
        echo '</p>';
        unset($content);
      }
    ?>


    <div class="col s12 m4">
      <!--hoverable-->
      <div class="card alt z-depth-3" data-link="/widgets/search">
        <div class="card-title widget-title white center-align">
          <?php _e('Search Results', 'gfbio') ?>
        </div>
        <div class="card-content">
          <p>
            This widget allows you to search for terms included in terminologies  to determine their usefulness for your work, e.g. for annotating research data or collection objects to a controlled vocabulary (terminology). Whereas the <a href="/search/">search bar</a> is restricted to a search inside internal terminologies only, this widget lets you search in external terminologies as well.
          </p>
        </div>
        <!--
        <div class="card-action white">
          <a href="#">Use the Widget</a>
        </div>
        -->
      </div>
    </div>

    <div class="col s12 m4">
      <!--hoverable-->
      <div class="card alt z-depth-3" data-link="/widgets/visualization">
        <div class="card-title widget-title white center-align">
          <?php _e('Term Visualization', 'gfbio') ?>
        </div>
        <div class="card-content">
          <p>
            This widget presents all available details of a single term in a user-friendly manner. Besides a structured representation of the term metadata like URI, description or synonyms, two visualizations are provided. The tree view allows to explore the term within the hierarchical structure based on the &quot;is_a&quot;-relationsships whereas the graph view shows terms with all existing relationsships.
          </p>
        </div>
        <!--
        <div class="card-action white">
          <a href="#">Use the Widget</a>
        </div>
        -->
      </div>
    </div>

    <div class="col s12 m4">
      <!--hoverable-->
      <div class="card alt z-depth-3" data-link="/widgets/browse">
        <div class="card-title widget-title white center-align">
          <?php _e('Browse', 'gfbio') ?>
        </div>
        <div class="card-content">
          <p>
            This widget allows you to see information about a selected terminology to find the one that fits your needs best. For internally hosted terminologies, we provide a tree-view of the hierarchy to browse all contained terms. Additionally, you will find metadata and metrics information such as creation date, version or number of children.
          </p>
        </div>
        <!--
        <div class="card-action white">
          <a href="#">Use the Widget</a>
        </div>
        -->
      </div>
    </div>

</div><!--row-->
</div><!--container-->
</section>




    <section><!--widget-->
        <div class="container">
        <div class="row">
            <div class="col s12 m6 hide-on-small-only" style="border-right:1px solid #999999">
                <div style="padding-right:3em;">
                    <img src="https://placehold.it/450x250" class="responsive-img" style="width:100%;height:auto;" alt="" />
                </div>
            </div>
            <div class="col s12 m6" style="padding-left:3.5rem;">
                <h2 class="flow-text center-align"><?php _e('Search Results', 'gfbio') ?></h2>
                <p>
                This widget allows you to search for terms included in terminologies  to determine their usefulness for your work, e.g. for annotating research data or collection objects to a controlled vocabulary (terminology). Whereas the <a href="/search/">search bar</a> is restricted to a search inside internal terminologies only, this widget lets you search in external terminologies as well.
                </p>
            </div>
        </div><!--row-->
        </div><!--container-->
    </section><!--widget-->
    <section class="alt"><!--widget-->
        <div class="container">
        <div class="row">
            <div class="col s12 m6" style="padding-right:3.5rem;border-right:1px solid #999999">
                <h2 class="flow-text center-align"><?php _e('Term Visualization', 'gfbio') ?></h2>
                <p>
                This widget presents all available details of a single term in a user-friendly manner. Besides a structured representation of the term metadata like URI, description or synonyms, two visualizations are provided. The tree view allows to explore the term within the hierarchical structure based on the &quot;is_a&quot;-relationsships whereas the graph view shows terms with all existing relationsships.
                </p>
            </div>
            <div class="col s12 m6 hide-on-small-only">
                <div style="padding-left:3em;">
                    <img src="https://placehold.it/450x250" class="responsive-img" style="width:100%;height:auto;" alt="" />
                </div>
            </div>
        </div><!--row-->
        </div><!--container-->
    </section><!--widget-->
    <section><!--widget-->
        <div class="container">
        <div class="row">
            <div class="col s12 m6 hide-on-small-only" style="border-right:1px solid #999999">
                <div style="padding-right:3em;">
                    <img src="https://placehold.it/450x250" class="responsive-img" style="width:100%;height:auto;" alt="" />
                </div>
            </div>
            <div class="col s12 m6" style="padding-left:3.5rem;">
                <h2 class="flow-text center-align"><?php _e('Browse', 'gfbio') ?></h2>
                <p>
                This widget allows you to see information about a selected terminology to find the one that fits your needs best. For internally hosted terminologies, we provide a tree-view of the hierarchy to browse all contained terms. Additionally, you will find metadata and metrics information such as creation date, version or number of children.
                </p>
            </div>
        </div><!--row-->
        </div><!--container-->
    </section><!--widget-->


<?php
endwhile;
?>

<?php get_footer(); ?>


<script type="text/javascript">
$(function() {

    // clicking on the boxes
    // $('.card, .box').click(function(e){
    //     e.preventDefault();
    //     console.log(e.target);
    //     window.location = $(e.target).parents('.card').data('link');
    // });

    // equal heights for the card titles
    $('.card-title').matchHeight();

    // equal heights for the cards
    $('.card').matchHeight();
    // $cards.find('.card-action')
    //   .css('position', 'absolute')
    //   .css('bottom', '0')
    //   .css('left', '0');

});
</script>


</body>
</html>