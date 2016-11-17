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

<nav class="white clearfix">
    <div class="container">
	<div class="nav-wrapper clearfix">
		<a href="<?php echo esc_url(home_url('/')) ?>" class="brand-logo black-text">
			<img src="/static/logo.png" alt="GfBio Terminology Service">
		</a>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
            <?php
                $pages = get_pages([
                    'exclude' => [24,26,18,20,5,141],
                    'sort_column' => 'menu_order'
                ]);
                foreach ($pages as $page) {
                    echo "<li><a href=\"".get_page_link($page->ID)."\">".$page->post_title."</a></li>";
                  }
            ?>
		</ul>
    </div>
    </div>
</nav>

