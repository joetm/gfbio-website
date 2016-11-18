<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the page content.
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="navbar-fixed hide-on-med-and-down">
<nav class="white clearfix nav-extended">
    <div class="container">
	<div class="nav-wrapper clearfix">
		<a href="<?php echo esc_url(home_url('/')) ?>" class="brand-logo black-text">
			<img src="/static/logo.png" alt="GfBio Terminology Service">
		</a>
        <!-- Dropdown Structure -->
        <ul id="nav_dropdown" class="dropdown-content hide-on-med-and-down">
            <li><a href="/api/"><?php _e('API', 'gfbio') ?></a></li>
            <li><a href="/widgets/"><?php _e('Widgets', 'gfbio') ?></a></li>
        </ul>
		<ul id="nav-mobile" class="right">
            <?php
                $current_page_id = get_queried_object_id();
            ?>
                <li><a href="/browse/"><?php _e('Browse', 'gfbio') ?></a></li>
                <li><a href="/search/"><?php _e('Search', 'gfbio') ?></a></li>
                <!--
                <li><a href="/contribute/"><?php _e('Contribute', 'gfbio') ?></a></li>
                -->
                <li><a class="dropdown-button" data-activates="nav_dropdown" href="/developer/"><?php _e('Developer', 'gfbio') ?><i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="/faq/"><?php _e('FAQ', 'gfbio') ?></a></li>
                <li><a href="/about/"><?php _e('About', 'gfbio') ?></a></li>
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



  <nav class="nav-extended hide-on-large-only">
    <div class="nav-wrapper">
      <a href="<?php echo esc_url(home_url('/')) ?>" class="brand-logo black-text">
        <img src="/static/logo.png" alt="GfBio Terminology Service">
      </a>
      <a href="#" class="button-collapse" title="<?php _e('Menu', 'gfbio') ?>"><i class="material-icons">menu</i></a>
      <ul class="tabs tabs-transparent">
            <li><a href="/browse/"><?php _e('Browse', 'gfbio') ?></a></li>
            <li><a href="/search/"><?php _e('Search', 'gfbio') ?></a></li>
            <!--
            <li><a href="/contribute/"><?php _e('Contribute', 'gfbio') ?></a></li>
            -->
                <li><a href="/api/"><?php _e('API', 'gfbio') ?></a></li>
                <li><a href="/widgets/"><?php _e('Widgets', 'gfbio') ?></a></li>
            <li><a href="/faq/"><?php _e('FAQ', 'gfbio') ?></a></li>
            <li><a href="/about/"><?php _e('About', 'gfbio') ?></a></li>
      </ul>
    </div>
  </nav>




