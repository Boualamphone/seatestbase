<?php
global $charitize_panels;
global $charitize_sections;
global $charitize_settings_controls;
global $charitize_repeated_settings_controls;
global $charitize_customizer_defaults;

/*defaults values*/
$charitize_customizer_defaults['charitize-activities-enable'] = 1;
$charitize_customizer_defaults['charitize-activities-thumbnail-color-enable'] = 1;
$charitize_customizer_defaults['charitize-activities-selection'] = 'from-page';
$charitize_customizer_defaults['charitize-activities-number'] = 4;
$charitize_customizer_defaults['charitize-activities-word-count'] = 30;


/*activities setting*/
$charitize_sections['charitize-activities-controll-setting'] =
    array(
        'priority'       => 10,
        'title'          => __( 'Activities Options Settings', 'charitize' ),
        'panel'          => 'charitize-activities-section',
    );

$charitize_settings_controls['charitize-activities-enable'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-activities-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Activities Section On', 'charitize' ),
            'section'               => 'charitize-activities-controll-setting',
            'type'                  => 'checkbox',
            'priority'              => 10,
            'active_callback'       => ''
        )
    );

$charitize_settings_controls['charitize-activities-thumbnail-color-enable'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-activities-thumbnail-color-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Black & White Thumbnail', 'charitize' ),
            'section'               => 'charitize-activities-controll-setting',
            'type'                  => 'checkbox',
            'priority'              => 10,
            'active_callback'       => ''
        )
    );

/*select form page or post category*/
$charitize_settings_controls['charitize-activities-selection'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-activities-selection']
        ),
        'control' => array(
            'label'                 =>  __( 'Select Activities Section From', 'charitize' ),
            'description'           =>  __( 'After selecting one of the option, please go back and go to particular section to add', 'charitize' ),
            'section'               => 'charitize-activities-controll-setting',
            'type'                  => 'select',
            'choices'               => array(
                'from-page' => __( 'Page', 'charitize' ),
                'from-category' => __( 'Category', 'charitize' ),
            ),
            'priority'              => 20,
            'active_callback'       => ''
        )
    );

$charitize_settings_controls['charitize-activities-number'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-activities-number']
        ),
        'control' => array(
            'label'                 =>  __( 'Number Of Activities Section', 'charitize' ),
            'section'               => 'charitize-activities-controll-setting',
            'type'                  => 'select',
            'choices'               => array(
                1 => __( '1', 'charitize' ),
                2 => __( '2', 'charitize' ),
                3 => __( '3', 'charitize' ),
                4 => __( '4', 'charitize' ),
                5 => __( '5', 'charitize' ),
                6 => __( '6', 'charitize' ),
                7 => __( '7', 'charitize' ),
                8 => __( '8', 'charitize' )
            ),
            'priority'              => 30,
            'active_callback'       => ''
        )
    );

    $charitize_settings_controls['charitize-activities-word-count'] =
        array(
            'setting' =>     array(
                'default'              => $charitize_customizer_defaults['charitize-activities-word-count']
            ),
            'control' => array(
                'label'                 =>  __( 'Single Slider- Number Of Words', 'charitize' ),
                'description'           =>  __( 'If you do not have selected from - Custom', 'charitize' ),
                'section'               => 'charitize-activities-controll-setting',
                'type'                  => 'number',
                'priority'              => 35,
                'input_attrs' => array( 'min' => 1, 'max' => 200),
                'active_callback'       => ''

            )
        );
