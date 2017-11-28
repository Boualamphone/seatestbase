<?php
global $charitize_sections;
global $charitize_settings_controls;
global $charitize_repeated_settings_controls;
global $charitize_customizer_defaults;

/*defaults values*/
$charitize_customizer_defaults['charitize-enable-back-to-top'] = 1;

$charitize_sections['charitize-back-to-top-options'] =
    array(
        'priority'       => 80,
        'title'          => __( 'Back To Top Options', 'charitize' ),
        'panel'          => 'charitize-theme-options'
    );

$charitize_settings_controls['charitize-enable-back-to-top'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-enable-back-to-top'],
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Back To Top', 'charitize' ),
            'section'               => 'charitize-back-to-top-options',
            'type'                  => 'checkbox',
            'priority'              => 50,
        )
    );