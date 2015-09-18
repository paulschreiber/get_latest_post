<?php
/*
Plugin Name: Get Latest Post
Plugin URI: http://paulschreiber.com/blog/2011/02/04/how-to-display-the-latest-blog-post-on-a-wordpress-page/
Description: Adds a shortcode tag [get_latest_post] to display an excerpt from the latest post
Version: 0.3
Author: Paul Schreiber
Author URI: http://paulschreiber.com/
*/

/*  Copyright 2011-15 Paul Schreiber <paul at paulschreiber.com>

    Released under the GPL, version 2.
*/

class Get_Latest_Post {
	public static function show() {
		$content = false;
		$query = new WP_Query( 'showposts=1' );
		while ( $query->have_posts() ) {
			$query->the_post();
			$content = "<p class='title'><a href='" . get_permalink() . "'>" . get_the_title() . "</a></p>\n<p class='excerpt'>" . get_the_excerpt() . '</p>';
		}
		wp_reset_postdata();

		if ( $content ) {
			return "<div class='latest-post'>$content</div>";
		}
	}
}

add_shortcode( 'get_latest_post', array( 'Get_Latest_Post', 'show' ) );
?>
