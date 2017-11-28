<?php
global $charitize_sections;
global $charitize_settings_controls;
global $charitize_repeated_settings_controls;
global $charitize_customizer_defaults;

/*defaults values*/
$charitize_customizer_defaults['charitize-enable-breadcrumb'] = 1;

$charitize_sections['charitize-breadcrumb-options'] =
    array(
        'priority'       => 30,
        'title'          => __( 'Breadcrumb Options', 'charitize' ),
        'panel'          => 'charitize-theme-options',
    );

$charitize_settings_controls['charitize-enable-breadcrumb'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-enable-breadcrumb'],
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Breadcrumb', 'charitize' ),
            'section'               => 'charitize-breadcrumb-options',
            'type'                  => 'checkbox',
            'priority'              => 10,
        )
    );