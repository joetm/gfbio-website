<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the page content.
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6" <?php language_attributes() ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js ie7" <?php language_attributes() ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8" <?php language_attributes() ?>> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--> <html class="no-js" <?php language_attributes() ?>> <!--<![endif]-->
<head>
	<meta charset="<?php strtolower(bloginfo('charset')) ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/favicon.png">
    <meta name="googlebot" content="index,follow">
    <meta name="robots" content="all,index, follow">
    <meta name="HandheldFriendly" content="true" />
	<?php wp_head() ?>
</head>
<body <?php body_class() ?>>

<div class="navbar-fixed hide-on-med-and-down">
<nav class="nav-extended white clearfix">
    <div class="container">
	<div class="nav-wrapper clearfix">
		<a href="<?php echo esc_url(home_url('/')) ?>" class="brand-logo black-text">
			<img src="/static/logo.png" alt="GFBio Terminology Service">
		</a>
		<ul id="nav-mobile" class="right">
            <?php
                $current_page = get_queried_object();
                $active_page = null;
                if (isset($current_page->post_name)) {
                    $active_page = $current_page->post_name;
                }
            ?>
                <li class="<?php echo (in_array($active_page, array('browse', 'terminology')) ? 'active' : '') ?>">
                    <a href="/browse/">
                        <?php _e('Browse', 'gfbio') ?>
                    </a>
                </li>
                <li class="<?php echo ($active_page === 'search' ? 'active' : '') ?>">
                    <a href="/search/"><?php _e('Search', 'gfbio') ?></a>
                </li>
                <!--
                <li><a href="/contribute/"><?php _e('Contribute', 'gfbio') ?></a></li>
                -->
                <li class="<?php echo ($active_page === 'api' ? 'active' : '') ?>">
                    <a href="/api/">
                        <?php _e('API', 'gfbio') ?>
                    </a>
                </li>
                <li class="<?php echo ($active_page === 'widgets' ? 'active' : '') ?>">
                    <a href="/widgets/">
                        <?php _e('Widgets', 'gfbio') ?>
                    </a>
                </li>

                <li class="<?php echo ($active_page === 'faq' ? 'active' : '') ?>">
                    <a href="/faq/"><?php _e('FAQ', 'gfbio') ?></a>
                </li>
                <li class="<?php echo ($active_page === 'about' ? 'active' : '') ?>">
                    <a href="/about/"><?php _e('About', 'gfbio') ?></a>
                </li>
            <?php
                // $page_links = array(
                //     [ 'name' => __('Browse', 'gfbio'), 'uri' => 'browse'],
                //     [ 'name' => __('Search', 'gfbio'), 'uri' => 'search'],
                //     [ 'name' => __('Contribute', 'gfbio'), 'uri' => 'contribute'],
                //     [ 'name' => __('Developer', 'gfbio'), 'uri' => 'developer'],
                //     [ 'name' => __('FAQ', 'gfbio'), 'uri' => 'faq'],
                //     [ 'name' => __('About', 'gfbio'), 'uri' => 'about'],
                // );
                // foreach($page_links as $page_link) {
                //     echo '<li class="' . (''==='' ? "active":"") . '"><a href="/browse/">'. __('Browse', 'gfbio') . '</a></li>';
                // }
            ?>
		</ul>
    </div><!--nav-wrapper-->
    </div><!--container-->
</nav>
</div>



<nav id="mobile-navigation" class="nav-extended white hide-on-large-only">
    <div class="nav-wrapper">
      <a href="<?php echo esc_url(home_url('/')) ?>" class="brand-logo black-text">
        <img src="/static/logo.png" alt="GfBio Terminology Service">
      </a>
      <a href="#" class="button-collapse" title="<?php _e('Menu', 'gfbio') ?>"><i class="material-icons">menu</i></a>
      <ul class="tabs tabs-transparent">
            <li class="<?php echo ($active_page === 'browse' ? 'active' : '') ?>">
                <a class="black-text" href="/browse/" target="_self"><?php _e('Browse', 'gfbio') ?></a>
            </li>
            <li class="<?php echo ($active_page === 'search' ? 'active' : '') ?>">
                <a class="black-text" href="/search/" target="_self"><?php _e('Search', 'gfbio') ?></a>
            </li>
            <!--
            <li class="<?php echo ($active_page === 'contribute' ? 'active' : '') ?>">
                <a class="black-text" href="/contribute/" target="_self"><?php _e('Contribute', 'gfbio') ?></a>
            </li>
            -->
            <li class="<?php echo ($active_page === 'api' ? 'active' : '') ?>">
                <a class="black-text" href="/api/" target="_self"><?php _e('API', 'gfbio') ?></a>
            </li>
            <li class="<?php echo ($active_page === 'widgets' ? 'active' : '') ?>">
                <a class="black-text" href="/widgets/" target="_self"><?php _e('Widgets', 'gfbio') ?></a>
            </li>
            <li class="<?php echo ($active_page === 'faq' ? 'active' : '') ?>">
                <a class="black-text" href="/faq/" target="_self"><?php _e('FAQ', 'gfbio') ?></a>
            </li>
            <li class="<?php echo ($active_page === 'about' ? 'active' : '') ?>">
                <a class="black-text" href="/about/" target="_self"><?php _e('About', 'gfbio') ?></a>
            </li>
      </ul>
    </div>
</nav>
