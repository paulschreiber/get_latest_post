=== Get Latest Post ===
Author URI: http://paulschreiber.com/
Plugin URI: http://paulschreiber.com/blog/2011/02/04/how-to-display-the-latest-blog-post-on-a-wordpress-page/
Contributors: paulschreiber
Tags: get_latest_post, post, posts, formatting, list, shortcode
Requires at least: 3.0.4
Tested up to: 4.3.1
Stable tag: 0.3

Adds a shortcode tag [get_latest_post] to display an excerpt from your latest blog post.

== Description ==

This plugin adds the ability to put a shortcode tag in any static page or post and have it display an excerpt from your latest blog post.

There are no settings or options.

It generates markup like this, which you can style as desired:

    <div class='latest-post'>
    <p class='title'><a href='http://www.mysite.ca/blog/post'>Look ma, no hands!</a></p>
    <p class='excerpt'>Today I rode a bicycle &hellip;<a href="http://www.mysite.ca/blog/post">Continue reading <span class="meta-nav">&rarr;</span></a></p>
    </div>

== Installation ==

1. Upload the plugin to the `/wp-content/plugins/` directory and unzip it.
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Place `[get_latest_post]` in your pages.

== Changelog ==

= 0.3 =
* More WordPress VIP coding standards
* refactored in to class
* updated "tested up to" to 4.3.1

= 0.2.2 =
* WordPress VIP coding standards; updated "tested up to" to 4.1

= 0.2.1 =
* Updated "tested up to" to 3.9.1

= 0.2 =
* Call wp_reset_query() at the end.

= 0.1 =
* Initial release.
