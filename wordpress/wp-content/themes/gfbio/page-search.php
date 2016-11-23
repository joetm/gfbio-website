<?php
/**
 * The template for displaying pages
 *
 * -*- coding: utf-8 -*-
 * vim: tabstop=8 expandtab shiftwidth=4 softtabstop=4
 *
 */

get_header(); ?>

<section id="search">

<div class="container">
<div class="row">


    <h1 class="flow-text center-align"><?php _e('Search', 'gfbio') ?></h1>
    <?php edit_post_link(__('Edit page', 'gfbio'), '<div class="right-align">', "</div>", null, "") ?>

    <p>
        The main feature of the TS is the possibility to search for terms to determine their usefulness for your work, e.g. for annotating or connecting controlled vocabulary. This search interface is restricted to <a href="#">internal terminologies</a> only.
    </p>




    <div id="searchFacet">
        <div class="row">
            <div class="col s12">
              <ul class="tabs">
                <li class="tab col s3">
                    <a class="active" href="#search_tab"><?php _e('Text Search', 'gfbio') ?></a>
                </li>
                <li class="tab col s3">
                    <a href="#lookup_tab"><?php _e('Entity Label Lookup', 'gfbio') ?></a>
                </li>
              </ul>
            </div>
            <!-- tab 1 -->
            <div id="search_tab" class="col s12">
                <h2 class="flow-text"><?php _e('Precision Search and Find', 'gfbio') ?></h2>
                <form>
                    <label for="text_search"><?php _e('SearchText', 'gfbio') ?></label>
                    <input id="normalSearchInput" autofocus="autofocus" type="search" />
                    <a class="pink waves-effect waves-light btn">
                        <i class="material-icons left">search</i> <?php _e('Search', 'gfbio') ?>
                    </a>
                </form>
            </div>
            <!-- tab 2 -->
            <div id="lookup_tab" class="col s12">
                <h2 class="flow-text"><?php _e('Precision Search and Find', 'gfbio') ?></h2>
                <form>
                    <label for="lookup"><?php _e('Lookup', 'gfbio') ?></label>
                    <input id="suggestSearchInput" type="search" class="ui-autocomplete-input" autocomplete="off" />
                    <a class="pink waves-effect waves-light btn">
                        <i class="material-icons left">search</i> <?php _e('Lookup', 'gfbio') ?>
                    </a>
                </form>
            </div>
        </div>
    </div><!--searchFacet-->
    <!--searchresults-->
    <div id="results"></div>
    <!--/searchresults-->


    <?php
    // while (have_posts()) : the_post();
    //     if($content = get_the_content()) {
    //         echo "<p>";
    //             echo $content;
    //         echo "</p>";
    //     }
    // endwhile;
    ?>


</div><!--row-->
</div><!--container-->

</section><!--search-->


<?php get_footer() ?>


<?php
    // Inject CSS
//    function hook_css() {
//        echo '<link href="/static/jquery-ui-autocomplete/jquery-ui.min.css" rel="stylesheet" type="text/css" />';
//    }
//    add_action('wp_head','hook_css', 0);
?>


<!--
<script type="text/javascript" src="/static/jquery-ui-autocomplete/jquery-ui.min.js"></script>
<script type="text/javascript" src="/static/ts-search.js"></script>
<script type="text/javascript" src="/static/ts-TermSearch.js"></script>script>
-->


<script type="text/javascript">
$(function() {

    // SEARCH.init('results');
    // SEARCH.cleanUp();
    // SEARCH.textSearch();
    // SEARCH.lookupSearch();

    // $('#searchButton').click(function() {
    //     //alert('button clicked');
    //     var searchInput = $('#normalSearchInput').val();
    //     //alert('perform search');
    //     SEARCH.performSearch(searchInput);
    //     return false;
    // });

    // $("#tabs").tabs({
    //     activate : function(event, ui) {
    //         var tab = ui.newTab.index();
    //         SEARCH.cleanUp();
    //         $('#normalSearchInput').val('');
    //         $('#suggestSearchInput').val('');
    //     }
    // });

});
</script>


</body>
</html>