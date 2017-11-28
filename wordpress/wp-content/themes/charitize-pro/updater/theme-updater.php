<?php
/**
 * Easy Digital Downloads Theme Updater
 *
 * @package EDD Sample Theme
 */

// Includes the files needed for the theme updater
if ( !class_exists( 'EDD_Theme_Updater_Admin' ) ) {
	include( dirname( __FILE__ ) . '/theme-updater-admin.php' );
}

// Loads the updater classes
$updater = new EDD_Theme_Updater_Admin(

	// Config settings
	$config = array(
		'remote_api_url' => 'https://evisionthemes.com', // Site where EDD is hosted
		'item_name'      => 'Charitize Pro', // Name of theme
		'theme_slug'     => 'charitize-pro', // Theme slug
		'version'        => '1.0.2', // The current version of this theme
		'author'         => 'eVision Themes', // The author of this theme
		'download_id'    => '', // Optional, used for generating a license renewal link
		'renew_url'      => 'https://evisionthemes.com/my-account' // Optional, allows for a custom license renewal link
	),

	// Strings
	$strings = array(
		'theme-license'             => __( 'Theme License', 'charitize' ),
		'enter-key'                 => __( 'Enter your theme license key.', 'charitize' ),
		'license-key'               => __( 'License Key', 'charitize' ),
		'license-action'            => __( 'License Action', 'charitize' ),
		'deactivate-license'        => __( 'Deactivate License', 'charitize' ),
		'activate-license'          => __( 'Activate License', 'charitize' ),
		'status-unknown'            => __( 'License status is unknown.', 'charitize' ),
		'renew'                     => __( 'Renew?', 'charitize' ),
		'unlimited'                 => __( 'unlimited', 'charitize' ),
		'license-key-is-active'     => __( 'License key is active.', 'charitize' ),
		'expires%s'                 => __( 'Expires %s.', 'charitize' ),
		'%1$s/%2$-sites'            => __( 'You have %1$s / %2$s sites activated.', 'charitize' ),
		'license-key-expired-%s'    => __( 'License key expired %s.', 'charitize' ),
		'license-key-expired'       => __( 'License key has expired.', 'charitize' ),
		'license-keys-do-not-match' => __( 'License keys do not match.', 'charitize' ),
		'license-is-inactive'       => __( 'License is inactive.', 'charitize' ),
		'license-key-is-disabled'   => __( 'License key is disabled.', 'charitize' ),
		'site-is-inactive'          => __( 'Site is inactive.', 'charitize' ),
		'license-status-unknown'    => __( 'License status is unknown.', 'charitize' ),
		'update-notice'             => __( "Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'charitize' ),
		'update-available'          => __('<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'charitize' )
	)

);
