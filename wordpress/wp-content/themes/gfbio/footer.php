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
            <div class="col s12 m4">
                <h5><?php _e('About', 'gfbio') ?></h5>
                <p>
                    The Terminology Service is part of the German Federation for Biological Data (GFBio) infrastructure, a sustainable, service oriented, national data infrastructure facilitating data sharing for biological and environmental research.
                </p>
            </div>
            <div class="col s12 m8">
                <div class="row">
                    <div class="col s12 m6" style="border-left:1px solid #999999;padding-left:2em;">
                        <h5><?php _e('Explore', 'gfbio') ?> <span title="<?php _e('Terminology Service', 'gfbio') ?>"><?php _e('TS', 'gfbio') ?></span></h5>
                        <ul>
                            <li><a href="/browse/"><?php _e('Browse the terminologies', 'gfbio') ?></a></li>
                            <li><a href="/search/"><?php _e('Search the terminologies', 'gfbio') ?></a></li>
                            <li><a href="/faq/"><?php _e('Frequently Asked Questions', 'gfbio') ?></a></li>
                            <li><a href="/contribute/"><?php _e('Contribute', 'gfbio') ?></a></li>
                        </ul>
                    </div>
                    <div class="col s12 m6" style="border-left:1px solid #999999;padding-left:2em;">
                        <h5><?php _e('Developer Section', 'gfbio') ?></h5>
                        <ul>
                            <li><a href="/api/"><?php _e('API', 'gfbio') ?></a></li>
                            <li><a href="/widgets/"><?php _e('Widgets', 'gfbio') ?></a></li>
                        </ul>

                        <h5><?php _e('GfBio Consortium', 'gfbio') ?></h5>
                        <ul>
                            <li><a href="/partners/"><?php _e('Partners', 'gfbio') ?></a></li>
                            <li><a href="/contact/"><?php _e('Contact', 'gfbio') ?></a></li>
                            <li><a href="/imprint/"><?php _e('Imprint', 'gfbio') ?></a></li>
                        </ul>
                    </div>
                </div><!--row-->
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
