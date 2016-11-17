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
                <h5 class="white-text">Terminology Service</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="/browse/">Browse the terminologies</a></li>
                    <li><a class="grey-text text-lighten-3" href="/search/">Search the terminologies</a></li>
                    <li><a class="grey-text text-lighten-3" href="/contribute/">Contribute</a></li>
                    <li><a class="grey-text text-lighten-3" href="/developer/">Developer Section</a></li>
                    <li><a class="grey-text text-lighten-3" href="/api/">- API</a></li>
                    <li><a class="grey-text text-lighten-3" href="/widgets/">- Widgets</a></li>
                </ul>
            </div>
            <div class="col s12 l3">
                <h5 class="white-text">GfBio Consortium</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="/partners/">Partners</a></li>
                    <li><a class="grey-text text-lighten-3" href="/contact/"><?php _e('Contact', 'gfbio') ?></a></li>
                    <li><a class="grey-text text-lighten-3" href="/impressum/"><?php _e('Impressum', 'gfbio') ?></a></li>
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
            &copy; 2014-<?php echo date('Y') ?> GFBio - All Rights Reserved.
            <a class="grey-text text-lighten-3 right" href="/imprint/"><?php _e('Impressum', 'gfbio') ?></a>
            <a class="grey-text text-lighten-4 right" href="/about/#contact"><?php _e('Contact', 'gfbio') ?></a>
        </div>
    </div>
<?php
endif;
?>
</footer>

<?php wp_footer() ?>
