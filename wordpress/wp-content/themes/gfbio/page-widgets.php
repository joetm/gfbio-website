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


    <h1 class="flow-text center-align"><?php _e('Widgets', 'gfbio') ?></h1>
    <?php edit_post_link(__('Edit page', 'gfbio'), '<div class="right-align">', "</div>", null, "") ?>


    <?php
      if ($content = get_the_content()) {
        echo '<p>';
          echo $content;
        echo '</p>';
        unset($content);
      }
    ?>


    <div class="col s6 m3">
      <div class="card hoverable alt z-depth-3" data-link="/widgets/search">
        <div class="card-title widget-title white center-align">
          <?php _e('Search Bar', 'gfbio') ?>
        </div>
        <div class="card-content">
          <p>Researchers can peruse ontologies that are interesting for their research.</p>
        </div>
        <div class="card-action white">
          <a href="#">Use the Widget</a>
        </div>
      </div>
    </div>

    <div class="col s6 m3">
      <div class="card hoverable alt z-depth-3" data-link="/widgets/visualization">
        <div class="card-title widget-title white center-align">
          <?php _e('Visualization', 'gfbio') ?>
        </div>
        <div class="card-content">
          <p>Information from the ontologies can be retrieved and stored to your local information system.</p>
        </div>
        <div class="card-action white">
          <a href="#">Use the Widget</a>
        </div>
      </div>
    </div>

    <div class="col s6 m3">
      <div class="card hoverable alt z-depth-3" data-link="/widgets/browse">
        <div class="card-title widget-title white center-align">
          <?php _e('Browse', 'gfbio') ?>
        </div>
        <div class="card-content">
          <p>Scientists can store or connect their terminologies to the TS in order to access all services provided by the TS automatically.</p>
        </div>
        <div class="card-action white">
          <a href="#">Use the Widget</a>
        </div>
      </div>
    </div>

    <div class="col s6 m3">
      <div class="card hoverable alt z-depth-3" data-link="/widgets/suggest">
        <div class="card-title widget-title white center-align">
          <?php _e('Suggest', 'gfbio') ?>
        </div>
        <div class="card-content">
          <p>Suggest widget................</p>
        </div>
        <div class="card-action white">
          <a href="#">Use the Widget</a>
        </div>
      </div>
    </div>


</div><!--row-->
</div><!--container-->

</section>


<?php
endwhile;
?>

<?php get_footer(); ?>


<script type="text/javascript">
$(function() {

    // clicking on the boxes
    $('.card, .box').click(function(e){
        e.preventDefault();
        console.log(e.target);
        window.location = $(e.target).parents('.card').data('link');
    });

    // equal heights for the cards
    var $cards = $('.card');
    $cards.matchHeight();
    $cards.find('.card-action').css('position', 'absolute').css('bottom', '0').css('left', '0');

});
</script>


</body>
</html>