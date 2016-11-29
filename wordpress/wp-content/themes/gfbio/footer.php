<?php
/**
 * The template for displaying the footer
 */
?>


<?php
    /* a large footer for the homepage */
    if (is_home() || is_front_page()) :
?>

<footer class="page-footer full top-part">
    <div class="container">
        <div class="row">
            <div class="col s12 l4">
                <h5><?php _e('About', 'gfbio') ?></h5>
                <p>
                    The Terminology Service is a ... consortium of partners... gfbio.... lorem ipsum....
                </p>
                <ul>
                    <li><a href="/faq/"><?php _e('FAQ', 'gfbio') ?></a></li>
                </ul>
            </div>
            <div class="col s12 offset-l1 l4">
                <h5><?php _e('Explore', 'gfbio') ?> <span title="<?php _e('Terminology Service', 'gfbio') ?>">TS</span></h5>
                <ul>
                    <li><a href="/browse/"><?php _e('Browse the terminologies', 'gfbio') ?></a></li>
                    <li><a href="/search/"><?php _e('Search the terminologies', 'gfbio') ?></a></li>
                    <li><a href="/contribute/"><?php _e('Contribute', 'gfbio') ?></a></li>
                    <li><a href="/developer/"><?php _e('Developer Section', 'gfbio') ?></a></li>
                    <li><a href="/api/">- <?php _e('API', 'gfbio') ?></a></li>
                    <li><a href="/widgets/">- <?php _e('Widgets', 'gfbio') ?></a></li>
                </ul>
            </div>
            <div class="col s12 l3">
                <h5><?php _e('GfBio Consortium', 'gfbio') ?></h5>
                <ul>
                    <li><a href="/partners/"><?php _e('Partners', 'gfbio') ?></a></li>
                    <li><a href="/contact/"><?php _e('Contact', 'gfbio') ?></a></li>
                    <li><a href="/imprint/"><?php _e('Imprint', 'gfbio') ?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright bottom-part">
        <div class="container">
            &copy; 2014-<?php echo date('Y') ?> GFBio - All Rights Reserved.
        </div>
    </div>
</footer>

<?php
    /* a smaller footer for all other pages */
    else:
?>

<footer class="page-footer small top-part">
    <div class="footer-copyright bottom-part">
        <div class="container">
            &copy; 2014-<?php echo date('Y') ?> GFBio - <?php _e('All Rights Reserved', 'gfbio') ?>.
            <a class="right" href="/imprint/"><?php _e('Imprint', 'gfbio') ?></a>
            <a class="right" href="/about/#contact"><?php _e('Contact', 'gfbio') ?></a>
        </div>
    </div>
</footer>

<?php
endif;
?>


<?php wp_footer() ?>
