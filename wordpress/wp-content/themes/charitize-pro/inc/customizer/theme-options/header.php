<?php
global $charitize_sections;
global $charitize_settings_controls;
global $charitize_repeated_settings_controls;
global $charitize_customizer_defaults;

/*defaults values*/
$charitize_customizer_defaults['charitize-enable-donate-button'] = 1;
$charitize_customizer_defaults['charitize-donate-link'] = home_url( '#' );
$charitize_customizer_defaults['charitize-donate-button-text'] = __('Donate Now','charitize');
$charitize_customizer_defaults['charitize-enable-social-all-page'] = 0;


$charitize_sections['charitize-header-options'] =
    array(
        'priority'       => 40,
        'title'          => __( 'Header Options', 'charitize' ),
        'panel'          => 'charitize-theme-options'
    );

$charitize_settings_controls['charitize-enable-donate-button'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-enable-donate-button']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Button Header', 'charitize' ),
            'section'               => 'charitize-header-options',
            'type'                  => 'checkbox',
            'priority'              => 10,
            'active_callback'       => ''
        )
    );


/*Button text popular post section*/
$charitize_settings_controls['charitize-donate-button-text'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-donate-button-text']
        ),
        'control' => array(
            'label'                 =>  __( 'Header Button Text', 'charitize' ),
            'section'               => 'charitize-header-options',
            'type'                  => 'text',
            'priority'              => 20,
            'active_callback'       => ''
        )
    );

/*Button Link Url*/
$charitize_settings_controls['charitize-donate-link'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-donate-link']
        ),
        'control' => array(
            'label'                 =>  __( 'Header Button URL', 'charitize' ),
            'section'               => 'charitize-header-options',
            'type'                  => 'url',
            'priority'              => 30,
            'active_callback'       => ''
        )
    );


$charitize_settings_controls['charitize-enable-social-all-page'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-enable-social-all-page']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Social Links In All Pages', 'charitize' ),
            'description'           => __('On clicking this Social share will availabe on all other pages as well','charitize'),
            'section'               => 'charitize-header-options',
            'type'                  => 'checkbox',
            'priority'              => 30,
            'active_callback'       => ''
        )
    );
