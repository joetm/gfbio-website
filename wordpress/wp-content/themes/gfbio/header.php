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

<div class="navbar-fixed">
<nav class="white clearfix">
    <div class="container">
	<div class="nav-wrapper clearfix">
		<a href="<?php echo esc_url(home_url('/')) ?>" class="brand-logo black-text">
			<img src="/static/logo.png" alt="GfBio Terminology Service">
		</a>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
            <?php
                $pages = get_pages([
                    'exclude' => [24,26,18,20,5,141,225], // TODO
                    'sort_column' => 'menu_order'
                ]);
                $current_page_id = get_queried_object_id();
                foreach ($pages as $page) {
                    echo "<li class='".($current_page_id === $page->ID ? "active" : "")."'><a href=\"".get_page_link($page->ID)."\">".$page->post_title."</a></li>";
                  }
            ?>
		</ul>
    </div>
    </div>
</nav>
</div>
