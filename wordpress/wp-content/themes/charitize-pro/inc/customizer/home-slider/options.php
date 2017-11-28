<?php
global $charitize_panels;
global $charitize_sections;
global $charitize_settings_controls;
global $charitize_repeated_settings_controls;
global $charitize_customizer_defaults;

/*defaults values feature trip options*/
$charitize_customizer_defaults['charitize-feature-slider-enable'] = 1;
$charitize_customizer_defaults['charitize-feature-slider-number'] = 3;
$charitize_customizer_defaults['charitize-feature-slider-selection'] = 'from-page';

/*feature slider enable setting*/
$charitize_sections['charitize-feature-section-options'] =
    array(
        'priority'       => 10,
        'title'          => __( 'Setting Options', 'charitize' ),
        'panel'          => 'charitize-feature-slider',
    );

/*Feature section enable control*/
$charitize_settings_controls['charitize-feature-slider-enable'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-feature-slider-enable']
        ),
        'control' => array(
            'label'                 =>  __( 'Enable Feature Slider', 'charitize' ),
            'section'               => 'charitize-feature-section-options',
        	'description'    		=> __( 'Enable "Feature slider" on checked' , 'charitize' ),
            'type'                  => 'checkbox',
            'priority'              => 10,
            'active_callback'       => ''
        )
    );

/*No of feature slider selection*/
$charitize_settings_controls['charitize-feature-slider-number'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-feature-slider-number']
        ),
        'control' => array(
            'label'                 =>  __( 'Number Of Slider', 'charitize' ),
            'section'               => 'charitize-feature-section-options',
            'type'                  => 'select',
            'choices'               => array(
                1 => __( '1', 'charitize' ),
                2 => __( '2', 'charitize' ),
                3 => __( '3', 'charitize' ),
                4 => __( '4', 'charitize' ),
                5 => __( '5', 'charitize' ),
                6 => __( '6', 'charitize' )
            ),
            'priority'              => 20,
            'active_callback'       => ''
        )
    );

/*feature slider selection from control*/
$charitize_settings_controls['charitize-feature-slider-selection'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-feature-slider-selection']
        ),
        'control' => array(
            'label'                 =>  __( 'Select Slider From', 'charitize' ),
            'description'           =>  __( 'After selecting one of the option, please go back and go to particular section to add', 'charitize' ),
            'section'               => 'charitize-feature-section-options',
            'type'                  => 'select',
            'choices'               => array(
                'from-page' => __( 'Page', 'charitize' ),
                'from-category' => __( 'Category', 'charitize' ),
            ),
            'priority'              => 30,
            'active_callback'       => ''
        )
    );


