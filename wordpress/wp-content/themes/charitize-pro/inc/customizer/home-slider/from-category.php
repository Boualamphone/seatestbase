<?php
global $charitize_panels;
global $charitize_sections;
global $charitize_settings_controls;
global $charitize_repeated_settings_controls;
global $charitize_customizer_defaults;

/*defaults values*/
$charitize_customizer_defaults['charitize-featured-slider-category'] = 0;

/*category selection*/
$charitize_sections['charitize-featured-slider-category'] =
    array(
        'priority'       => 50,
        'title'          => __( 'Select From Category', 'charitize' ),
        'description'    => __( 'This option only work when you have selected "Category" in "settings Option".', 'charitize' ),
        'panel'          => 'charitize-feature-slider',
    );



/*creating setting control for charitize-fs-Category start*/
$charitize_settings_controls['charitize-featured-slider-category'] =
    array(
        'setting' =>     array(
            'default'              => $charitize_customizer_defaults['charitize-featured-slider-category']
        ),
        'control' => array(
            'label'                 =>  __( 'Select Category For Slider', 'charitize' ),
            'description'           =>  __( 'If you have oly choosen category then page you need to select one from here', 'charitize' ),
            'section'               => 'charitize-featured-slider-category',
            'type'                  => 'category_dropdown',
            'priority'              => 50,
            'active_callback'       => ''
        )
    );
