<?php
global $charitize_panels;
global $charitize_sections;
global $charitize_settings_controls;
global $charitize_repeated_settings_controls;
global $charitize_customizer_defaults;

/*defaults values*/
$charitize_customizer_defaults['charitize-activities-category'] = 0;

/*category selection*/
$charitize_sections['charitize-activities-category'] =
    array(
        'priority'       => 60,
        'title'          => __( 'Select Activities From Category', 'charitize' ),
        'description'    => __( 'This option only work when you have selected "Category" in "Select Activities Section From"', 'charitize' ),
        'panel'          => 'charitize-activities-section',
    );

/*creating setting control for charitize-activities-Category start*/
$charitize_settings_controls['charitize-activities-category'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-activities-category']
        ),
        'control' => array(
            'label'                 =>  __( 'Select Category For Activities Section', 'charitize' ),
            'section'               => 'charitize-activities-category',
            'type'                  => 'category_dropdown',
            'priority'              => 30,
            'active_callback'       => ''
        )
    );