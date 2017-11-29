<?php

/**
 * This file is used for removing tables at uninstall.
 *
 * @author Tech Banker
 * @package google-maps-bank/lib
 * @version 2.0.0
 */
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
} else {
    if (!current_user_can("manage_options")) {
        return;
    } else {
        global $wpdb;
        if (is_multisite()) {
            $blog_ids = $wpdb->get_col("SELECT blog_id FROM $wpdb->blogs");
            foreach ($blog_ids as $blog_id) {
                switch_to_blog($blog_id);
                $google_maps_bank_version_number = get_option("google-maps-bank-version-number");
                if ($google_maps_bank_version_number != "") {
                    global $wp_version, $wpdb;
                    $other_settings_data = $wpdb->get_var
                            (
                            $wpdb->prepare
                                    (
                                    "SELECT meta_value FROM " . $wpdb->prefix . "google_maps_meta
                             WHERE meta_key = %s ", "other_settings"
                            )
                    );
                    $other_settings_unserialized = maybe_unserialize($other_settings_data);

                    if (esc_attr($other_settings_unserialized["remove_tables_at_uninstall"]) == "enable") {
                        // Drop Tables
                        $wpdb->query("DROP TABLE IF EXISTS " . $wpdb->prefix . "google_maps");
                        $wpdb->query("DROP TABLE IF EXISTS " . $wpdb->prefix . "google_maps_meta");

                        // Delete options
                        delete_option("google-maps-bank-version-number");
                        delete_option("gmb_admin_notice");
                        delete_option("google-maps-bank-api-details");
                        delete_option("google-map-bank-wizard-set-up");
                    }
                }
                restore_current_blog();
            }
        } else {
            $google_maps_bank_version_number = get_option("google-maps-bank-version-number");
            if ($google_maps_bank_version_number != "") {
                global $wp_version, $wpdb;
                $other_settings_data = $wpdb->get_var
                        (
                        $wpdb->prepare
                                (
                                "SELECT meta_value FROM " . $wpdb->prefix . "google_maps_meta
                             WHERE meta_key = %s ", "other_settings"
                        )
                );
                $other_settings_unserialized = maybe_unserialize($other_settings_data);

                if (esc_attr($other_settings_unserialized["remove_tables_at_uninstall"]) == "enable") {
                    // Drop Tables
                    $wpdb->query("DROP TABLE IF EXISTS " . $wpdb->prefix . "google_maps");
                    $wpdb->query("DROP TABLE IF EXISTS " . $wpdb->prefix . "google_maps_meta");

                    // Delete options
                    delete_option("google-maps-bank-version-number");
                    delete_option("gmb_admin_notice");
                    delete_option("google-maps-bank-api-details");
                }
            }
        }
    }
}