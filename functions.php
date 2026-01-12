<?php
/**
 * Theme Name: Codemall Skin
 * Theme URI:  https://yivic.com/wordpress/codemall-skin
 * Description: Codemall Skin Theme use Yivic Base plugin for development, use legacy theme structure
 * Author:      dev@yivic.com, manhphucofficial@yahoo.com
 * Author URI:  https://yivic.com/
 * Version:     1.0.0
 * Text Domain: codemall-skin
 */

use Yivic\Codemall_Skin\App\WP\Codemall_Skin_WP_Theme;

// Update these constants whenever you bump the version
defined( 'CODEMALL_SKIN_VERSION' ) || define( 'CODEMALL_SKIN_VERSION', '1.0.0' );

// We set the slug for the theme here.
// This slug will be used to identify the theme instance from the WP_Application container
defined( 'CODEMALL_SKIN_SLUG' ) || define( 'CODEMALL_SKIN_SLUG', 'codemall-skin' );


// We include composer autoload here
if ( ! class_exists( Codemall_Skin_WP_Theme::class ) ) {
	require_once __DIR__ . DIR_SEP . 'vendor' . DIR_SEP . 'autoload.php';
}

// We register this theme as a Service Provider
Codemall_Skin_WP_Theme::init_with_wp_app( CODEMALL_SKIN_SLUG );
