<?php
global $charitize_panels;
global $charitize_sections;
global $charitize_settings_controls;
global $charitize_repeated_settings_controls;
global $charitize_customizer_defaults;

/*creating panel for general*/
$charitize_panels['charitize-colors'] =
    array(
        'title'          => __( 'Colors', 'charitize' ),
        'description'    => __( 'Customize colors of you awesome site', 'charitize' ),
        'priority'       => 42,
    );

/*Default color*/
$charitize_sections['colors'] =
    array(
        'priority'       => 40,
        'title'          => __( 'Basic Colors Options', 'charitize' ),
        'panel'          => 'charitize-colors',
    );

/*charitize colors*/
$charitize_sections['charitize-colors'] =
    array(
        'priority'       => 50,
        'title'          => __( 'charitize Colors Options', 'charitize' ),
        'panel'          => 'charitize-colors',
    );
/*charitize colors*/
$charitize_sections['charitize-colors-reset'] =
    array(
        'priority'       => 60,
        'title'          => __( 'charitize Colors Reset', 'charitize' ),
        'panel'          => 'charitize-colors',
    );
/*defaults values*/
$charitize_customizer_defaults['charitize-primary-color'] = '#FFD52F';
$charitize_customizer_defaults['charitize-main-link-color'] = '#313131';
$charitize_customizer_defaults['charitize-banner-text-color'] = '#fff';
$charitize_customizer_defaults['charitize-site-identity-color'] = '#332e2b';
$charitize_customizer_defaults['charitize-main-title-color'] = '#1e414e';
$charitize_customizer_defaults['charitize-menu-color'] = '#332e2b';
$charitize_customizer_defaults['charitize-button-standard-color'] = '#FFD52F';
$charitize_customizer_defaults['charitize-link-color'] = '#1e414e';
$charitize_customizer_defaults['charitize-primary-hover-color'] = '#FFD52F';

$charitize_customizer_defaults['charitize-bg-header-color'] = '#555C68';
$charitize_customizer_defaults['charitize-bg-breadcrumb-color'] = '#333333';
$charitize_customizer_defaults['charitize-bg-footer-color'] = '#313131';

$charitize_customizer_defaults['charitize-color-reset'] = '';


/**
 * Reset color settings to default
 * @param  $input
 *
 * @since charitize 1.0
 */
if ( ! function_exists( 'charitize_color_reset' ) ) :
    function charitize_color_reset( ) {
        
            global $charitize_customizer_saved_values;
           $charitize_customizer_saved_values = charitize_get_all_options();
        if ( $charitize_customizer_saved_values['charitize-color-reset'] == 1 ) {
            global $charitize_customizer_defaults;
            global $charitize_customizer_saved_values;

            /*setting fields */
          /*setting fields */
             $charitize_customizer_saved_values['charitize-primary-color'] = $charitize_customizer_defaults['charitize-primary-color'];
             $charitize_customizer_saved_values['charitize-main-link-color'] = $charitize_customizer_defaults['charitize-main-link-color'];
             $charitize_customizer_saved_values['charitize-banner-text-color'] = $charitize_customizer_defaults['charitize-banner-text-color'];
             $charitize_customizer_saved_values['charitize-site-identity-color'] = $charitize_customizer_defaults['charitize-site-identity-color'];
             $charitize_customizer_saved_values['charitize-main-title-color'] = $charitize_customizer_defaults['charitize-main-title-color'];
             $charitize_customizer_saved_values['charitize-menu-color'] =$charitize_customizer_defaults['charitize-menu-color'];
             $charitize_customizer_saved_values['charitize-button-standard-color'] = $charitize_customizer_defaults['charitize-button-standard-color'];
             $charitize_customizer_saved_values['charitize-link-color'] = $charitize_customizer_defaults['charitize-link-color'];
             $charitize_customizer_saved_values['charitize-home-color-message'] = sprintf( __( '%s Hover Color Options %s', 'charitize' ), '<h3>','</h3>' );
             $charitize_customizer_saved_values['charitize-primary-hover-color'] = $charitize_customizer_defaults['charitize-primary-hover-color'];
             
             $charitize_customizer_saved_values['charitize-bg-header-color'] = $charitize_customizer_defaults['charitize-bg-header-color'];
             $charitize_customizer_saved_values['charitize-bg-breadcrumb-color'] = $charitize_customizer_defaults['charitize-bg-breadcrumb-color'];
             $charitize_customizer_saved_values['charitize-bg-footer-color'] = $charitize_customizer_defaults['charitize-bg-footer-color'];


            remove_theme_mod( 'background_color' );
            $charitize_customizer_saved_values['charitize-color-reset'] = '';
            /*resetting fields*/
            charitize_reset_options( $charitize_customizer_saved_values );

        }
        else {
            return '';
        }
    }
endif;
add_action( 'customize_save_after','charitize_color_reset' );


$charitize_settings_controls['charitize-site-identity-color'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-site-identity-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Site Identity Color', 'charitize' ),
            'description'           =>  __( 'Site title and tagline color', 'charitize' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 10,
            'active_callback'       => ''
        )
    );

$charitize_settings_controls['charitize-primary-color'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-primary-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Primary Color', 'charitize' ),
            'description'           =>  __( 'This color will come in several places of your site, please select color according to your site', 'charitize' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 10,
            'active_callback'       => ''
        )
    );


$charitize_settings_controls['charitize-main-link-color'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-main-link-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Link Color', 'charitize' ),
            'description'           =>  __( 'will effect all the link color', 'charitize' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 10,
            'active_callback'       => ''
        )
    );

$charitize_settings_controls['charitize-banner-text-color'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-banner-text-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Banner Text Color', 'charitize' ),
            'description'           =>  __( 'This color is for banner title and content', 'charitize' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 20,
            'active_callback'       => ''
        )
    );


$charitize_settings_controls['charitize-main-title-color'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-main-title-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Title Color', 'charitize' ),
            'description'           =>  __( 'Each title color can be controlled from here', 'charitize' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 40,
            'active_callback'       => ''
        )
    );

$charitize_settings_controls['charitize-menu-color'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-menu-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Menu Color', 'charitize' ),
            'description'           =>  __( 'Primary menu text color', 'charitize' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 50,
            'active_callback'       => ''
        )
    );

$charitize_settings_controls['charitize-button-standard-color'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-button-standard-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Button Standard Color', 'charitize' ),
            'description'           =>  __( 'Will modify all the button', 'charitize' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 60,
            'active_callback'       => ''
        )
    );

$charitize_settings_controls['charitize-link-color'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-link-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Button Link Color', 'charitize' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 65,
            'active_callback'       => ''
        )
    );

$charitize_settings_controls['charitize-primary-hover-color'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-primary-hover-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Primary Hover Color', 'charitize' ),
            'description'           =>  __( 'This color will come in several places of your site while hovering, please select color according to your site', 'charitize' ),
            'section'               => 'colors',
            'type'                  => 'color',
            'priority'              => 75,
            'active_callback'       => ''
        )
    );

/*charitize background*/
$charitize_settings_controls['charitize-bg-breadcrumb-color'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-bg-breadcrumb-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Breadcrumb Section Background', 'charitize' ),
            'section'               => 'charitize-colors',
            'type'                  => 'color',
            'priority'              => 5,
            'active_callback'       => ''
        )
    );


$charitize_settings_controls['charitize-bg-header-color'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-bg-header-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Header Section Background', 'charitize' ),
            'section'               => 'charitize-colors',
            'type'                  => 'color',
            'priority'              => 10,
            'active_callback'       => ''
        )
    );

$charitize_settings_controls['charitize-bg-footer-color'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-bg-footer-color'],
        ),
        'control' => array(
            'label'                 =>  __( 'Footer Section Background', 'charitize' ),
            'section'               => 'charitize-colors',
            'type'                  => 'color',
            'priority'              => 30,
            'active_callback'       => ''
        )
    );
    
$charitize_settings_controls['charitize-color-reset'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-color-reset'],
            'transport'            => 'postmessage',
        ),
        'control' => array(
            'label'                 =>  __( 'Reset', 'charitize' ),
            'description'           =>  __( 'Caution: Reset all above color settings to default. Refresh the page after save to view the effects. ', 'charitize' ),
            'section'               => 'charitize-colors-reset',
            'type'                  => 'checkbox',
            'priority'              => 220,
            'active_callback'       => ''
        )
    );