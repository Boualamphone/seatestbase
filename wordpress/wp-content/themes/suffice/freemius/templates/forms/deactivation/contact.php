<?php
    /**
     * @package     Freemius
     * @copyright   Copyright (c) 2015, Freemius, Inc.
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       1.2.0
     */

    if ( ! defined( 'ABSPATH' ) ) {
        exit;
    }

    $fs   = freemius( $VARS['id'] );
    $slug = $fs->get_slug();

    echo fs_text( 'contact-support-before-deactivation', $slug )
            . sprintf(" <a href='%s' class='button button-small button-primary'>%s</a>",
                $fs->contact_url( 'technical_support' ),
                fs_text( 'contact-support', $slug )
            );
