<?php
/*
Plugin Name: Get Latest Post
Plugin URI: http://paulschreiber.com/blog/2011/02/04/how-to-display-the-latest-blog-post-on-a-wordpress-page/
Description: Adds a shortcode tag [get_latest_post] to display an excerpt from the latest post
Version: 0.2.2
Author: Paul Schreiber
Author URI: http://paulschreiber.com/
*/

/*  Copyright 2011-15 Paul Schreiber <paul at paulschreiber.com>

    Released under the GPL, version 2.
*/

function get_latest_post_html() {
	$content = '';
	query_posts( 'showposts=1' );
	while ( have_posts() ) {
		the_post();
		$content .= "<p class='title'><a href='" . get_permalink() . "'>" . get_the_title() . "</a></p>\n" .
				"<p class='excerpt'>" . get_the_excerpt() . '</p>';
	}
	wp_reset_query();

	return "<div class='latest-post'>\n$content\n</div>";
}

add_shortcode( 'get_latest_post', 'get_latest_post_html' );
?>
