<?php
global $charitize_sections;
global $charitize_settings_controls;
global $charitize_repeated_settings_controls;
global $charitize_customizer_defaults;

/*defaults values*/
$charitize_customizer_defaults['charitize-enable-pre-loader'] = 1;

$charitize_sections['charitize-pre-loader-options'] =
    array(
        'priority'       => 90,
        'title'          => __( 'Pre Loader Options', 'charitize' ),
        'panel'          => 'charitize-theme-options',
    );

$charitize_settings_controls['charitize-enable-pre-loader'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-enable-pre-loader'],
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Pre Loader', 'charitize' ),
            'section'               => 'charitize-pre-loader-options',
            'type'                  => 'checkbox',
            'priority'              => 10,
        )
    );