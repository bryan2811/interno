<?php

use Illuminate\Support\Facades\Log;

/**
 * Theme helpers.
 * Theme helpers are in the global namespace for blade usage
 */


if (! function_exists('add_actions')) {
    function add_actions($names, $callable, $priority = 10, $args = 1) {
        collect($names)->each(function ($name) use ($callable, $priority, $args) {
            add_action($name, $callable, $priority, $args);
        });
    }
}

if (! function_exists('add_filters')) {
    function add_filters($names, $callable, $priority = 10, $args = 1) {
        collect($names)->each(function ($name) use ($callable, $priority, $args) {
            add_filter($name, $callable, $priority, $args);
        });
    }
}

if (! function_exists('config')) {
    function config($string) {
        return \Roots\config($string);
    }
}

if (! function_exists('env')) {
    function env($string) {
        return \Roots\env($string);
    }
}

/**
 * This function adds "async" and "defer" parameters to JavaScript resources.
 * Just add "async" or "defer" anywhere in the resource name
 * ("handle" attribute of the wp_register_script function).
 *
 * @param $tag
 * @param $handle
 *
 * @return mixed
 */
function add_async_defer_attributes_to_scripts( $tag, $handle ) {
	// Search for the "async" value
	if( strpos( $handle, "async" ) ):
		$tag = str_replace(' src', ' async="async" src', $tag);
	endif;
	// Search for the "defer" value
	if( strpos( $handle, "defer" ) ):
		$tag = str_replace(' src', ' defer="defer" src', $tag);
	endif;
	return $tag;
}
add_filter('script_loader_tag', 'add_async_defer_attributes_to_scripts', 10, 2);

/**
 * Disable the emoji's
 */
function disable_emojis() {
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
  add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
 }
 add_action( 'init', 'disable_emojis' );
 
 /**
  * Filter function used to remove the tinymce emoji plugin.
  * 
  * @param array $plugins 
  * @return array Difference betwen the two arrays
  */
 function disable_emojis_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
  return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
  return array();
  }
 }
 
 /**
  * Remove emoji CDN hostname from DNS prefetching hints.
  *
  * @param array $urls URLs to print for resource hints.
  * @param string $relation_type The relation type the URLs are printed for.
  * @return array Difference betwen the two arrays.
  */
 function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
  if ( 'dns-prefetch' == $relation_type ) {
  /** This filter is documented in wp-includes/formatting.php */
  $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
 
 $urls = array_diff( $urls, array( $emoji_svg_url ) );
  }
 
 return $urls;
 }
 