<?php
/**
 * The template for displaying the footer
 */
?>

<footer class="page-footer">

<?php
    /* a large footer for the homepage */
    if (is_home() || is_front_page()) :
?>
    <div class="container">
        <div class="row">
            <div class="col s12 l4">
                <h5 class="white-text">About</h5>
                <p class="grey-text text-lighten-4">The Terminology Service is a ... consortium of partners... gfbio.... lorem ipsum....</p>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="/faq/">FAQ</a></li>
                </ul>
            </div>
            <div class="col s12 offset-l1 l4">
                <h5 class="white-text"><?php _e('Explore', 'gfbio') ?> <span title="<?php _e('Terminology Service', 'gfbio') ?>">TS</span></h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="/browse/"><?php _e('Browse the terminologies', 'gfbio') ?></a></li>
                    <li><a class="grey-text text-lighten-3" href="/search/"><?php _e('Search the terminologies', 'gfbio') ?></a></li>
                    <li><a class="grey-text text-lighten-3" href="/contribute/"><?php _e('Contribute', 'gfbio') ?></a></li>
                    <li><a class="grey-text text-lighten-3" href="/developer/"><?php _e('Developer Section', 'gfbio') ?></a></li>
                    <li><a class="grey-text text-lighten-3" href="/api/">- <?php _e('API', 'gfbio') ?></a></li>
                    <li><a class="grey-text text-lighten-3" href="/widgets/">- <?php _e('Widgets', 'gfbio') ?></a></li>
                </ul>
            </div>
            <div class="col s12 l3">
                <h5 class="white-text">GfBio Consortium</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="/partners/"><?php _e('Partners', 'gfbio') ?></a></li>
                    <li><a class="grey-text text-lighten-3" href="/contact/"><?php _e('Contact', 'gfbio') ?></a></li>
                    <li><a class="grey-text text-lighten-3" href="/imprint/"><?php _e('Imprint', 'gfbio') ?></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            &copy; 2014-<?php echo date('Y') ?> GFBio - All Rights Reserved.
        </div>
    </div>
<?php
    /* a smaller footer for all other pages */
    else:
?>
    <div class="footer-copyright">
        <div class="container">
            &copy; 2014-<?php echo date('Y') ?> GFBio - <?php _e('All Rights Reserved', 'gfbio') ?>.
            <a class="grey-text text-lighten-3 right" href="/imprint/"><?php _e('Imprint', 'gfbio') ?></a>
            <a class="grey-text text-lighten-4 right" href="/about/#contact"><?php _e('Contact', 'gfbio') ?></a>
        </div>
    </div>
<?php
endif;
?>

</footer>

<?php wp_footer() ?>
