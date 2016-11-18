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
                $current_page_id = get_queried_object_id();
                $pages = get_pages([
                //     'exclude' => [24,26,18,20,5,141,225], // TODO
                    'sort_column' => 'menu_order'
                ]);
                $page_links = array(
                    'browse',
                    'search',
                    'contribute',
                    'developer',
                    'faq',
                    'about',
                );
                foreach ($pages as $page) {
                    if (!in_array($page->post_name, $page_links)) {
                        continue;
                    }
                    echo "<li class='" . ($current_page_id === $page->ID ? "active" : "") . "'><a href=\"" . get_page_link($page->ID) . "\">" . $page->post_title . "</a></li>";
                  }

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
    </div>
    </div>
</nav>
</div>
