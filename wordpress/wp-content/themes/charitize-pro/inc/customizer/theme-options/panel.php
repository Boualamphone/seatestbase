<?php
global $charitize_panels;
/*creating panel for fonts-setting*/
$charitize_panels['charitize-theme-options'] =
    array(
        'title'          => __( 'Theme Options', 'charitize' ),
        'priority'       => 220
    );

/*layout options */
require get_template_directory().'/inc/customizer/theme-options/layout-options.php';

/*footer options */
require get_template_directory().'/inc/customizer/theme-options/footer.php';

/*header options */
require get_template_directory().'/inc/customizer/theme-options/header.php';

/*Breadcrumb section */
require get_template_directory().'/inc/customizer/theme-options/breadcrumb.php';

/*Back to top */
require get_template_directory().'/inc/customizer/theme-options/pre-loader.php';

/*Back to top */
require get_template_directory().'/inc/customizer/theme-options/back-to-top.php';

/*custom css options */
require get_template_directory().'/inc/customizer/theme-options/custom-css.php';
