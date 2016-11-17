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
                <h5 class="white-text">TODODODO</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
            </div>
            <div class="col s12 offset-l1 l4">
                <h5 class="white-text">TODODODO</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="/partners/">Partners</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
            </div>
            <div class="col s12 l3">
                <h5 class="white-text">TODODODO</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="/partners/">Partners</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © TS GfBio (TODO)
            <a class="grey-text text-lighten-4 right" href="/contact/">Contact</a>
            <a class="grey-text text-lighten-3 right" href="/imprint/"><?php _e('Impressum', 'gfbio') ?></a>
        </div>
    </div>
<?php
    /* a smaller footer for all other pages */
    else:
?>
    <div class="footer-copyright">
        <div class="container">
            © TS GfBio (TODO)
            <a class="grey-text text-lighten-3 right" href="/imprint/"><?php _e('Impressum', 'gfbio') ?></a>
            <a class="grey-text text-lighten-4 right" href="/about/#contact"><?php _e('Contact', 'gfbio') ?></a>
        </div>
    </div>
<?php
endif;
?>
</footer>

<?php wp_footer() ?>
</body>
</html>