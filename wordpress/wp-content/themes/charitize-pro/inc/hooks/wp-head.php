<?php

if( ! function_exists( 'charitize_wp_head' ) ) :

    /**
     * charitize wp_head hook
     *
     * @since  charitize 1.0.0
     */
    function charitize_wp_head(){
      
        global $charitize_customizer_all_values;
        global $charitize_google_fonts;

        $charitize_primary_color_option = $charitize_customizer_all_values['charitize-primary-color'];
        $charitize_main_link_color_option = $charitize_customizer_all_values['charitize-main-link-color'];
        $charitize_banner_text_color = $charitize_customizer_all_values['charitize-banner-text-color'];
        $charitize_site_identity_color_option = $charitize_customizer_all_values['charitize-site-identity-color'];
        $charitize_main_title_color_option = $charitize_customizer_all_values['charitize-main-title-color'];
        $charitize_menu_color_option = $charitize_customizer_all_values['charitize-menu-color'];
        $charitize_button_standard_color_option = $charitize_customizer_all_values['charitize-button-standard-color'];
        $charitize_link_color_option = $charitize_customizer_all_values['charitize-link-color'];
        $charitize_primary_hover_color_option = $charitize_customizer_all_values['charitize-primary-hover-color'];
        $charitize_bg_hearder_color_option = $charitize_customizer_all_values['charitize-bg-header-color'];
        $charitize_bg_breadcrumb_color_option = $charitize_customizer_all_values['charitize-bg-breadcrumb-color'];
        $charitize_bg_footer_color_option = $charitize_customizer_all_values['charitize-bg-footer-color'];
        

        /*font settings*/
        $charitize_font_family_primary_option = $charitize_google_fonts[$charitize_customizer_all_values['charitize-font-family-Primary']];
        $charitize_font_family_site_identity_option = $charitize_google_fonts[$charitize_customizer_all_values['charitize-font-family-site-identity']];
        $charitize_font_family_title_option = $charitize_google_fonts[$charitize_customizer_all_values['charitize-font-family-title']];
        /*Banner Image*/
        $charitize_banner_image = $charitize_customizer_all_values['charitize-default-banner-image'];
        ?>
        <style type="text/css">
        /*=====COLOR OPTION=====*/

        /*Color*/
        /*----------------------------------*/

        /*Primary color option*/
        <?php
        if( !empty($charitize_primary_color_option) ){
        ?>  
            .widget_calendar tbody a,
            .widget_calendar tbody a:visited,
            .wrapper-activity .singlethumb .content-area .divider,
            .evision-back-to-top, .evision-back-to-top:focus,
            .evision-back-to-top:visited,
            .widget .search-form .search-submit,
            .widget .search-form .search-submit:focus,
            .widget .search-form .search-submit:hover {
               background-color: <?php echo esc_attr( $charitize_primary_color_option );?>;/*#FFD52F*/
            }

            .widget .widgettitle,
            .widget .widget-title{
              border-color: <?php echo esc_attr( $charitize_primary_color_option );?>;/*#FFD52F*/
            }

        <?php
        }
        if( !empty($charitize_main_link_color_option) ){
        ?>
          /*Link color option*/
          .contact-widget ul li a,
          .contact-widget ul li a i,
          .posted-on a,
          .cat-links a,
          .tags-links a,
          .author a,
          .comments-link a,
          .edit-link a,
          .nav-links .nav-previous a,
          .nav-links .nav-next a,
          .search-form .search-submit,
          .widget li a,

          .contact-widget ul li a:active,
          .contact-widget ul li a:active i,
          .posted-on a:active,
          .cat-links a:active,
          .tags-links a:active,
          .author a:active,
          .comments-link a:active,
          .edit-link a:active,
          .nav-links .nav-previous a:active,
          .nav-links .nav-next a:active,
          .search-form .search-submit:active,
          .widget li a:active{
                color: <?php echo esc_attr( $charitize_main_link_color_option );?>;/*#332e2b*/

          }

        <?php
        }
        /*Menu color*/
        if( !empty($charitize_menu_color_option) ){
        ?>
            @media screen and (min-width: 1200px){
            .main-navigation ul li > a,
            .main-navigation ul li > a:visited {
                color: <?php echo esc_attr( $charitize_menu_color_option );?>;/*#332e2b*/
                }
            }
        <?php
        }

        /*Banner text color*/
        if( !empty($charitize_banner_text_color) ){
        ?>  
        .wrapper-slider .slide-item .slider-title a,
        .wrapper-slider .slide-item,
        .page-inner-title .taxonomy-description,
        .page-inner-title .entry-header .entry-title,
        .wrap-breadcrumb,
        .wrap-breadcrumb a,
        .page-inner-title,
        .page-inner-title .page-title,
        .main-navigation ul ul a,
        .main-navigation ul ul a:visited {
           color: <?php echo esc_attr( $charitize_banner_text_color );?>;/*#fff*/
        }
        @media screen and (max-width: 1199px){
        .main-navigation ul li a,
        .main-navigation ul li a:visited {
            color: <?php echo esc_attr( $charitize_banner_text_color );?>;/*#fff*/
            }
        }
        <?php
        }

        /*Site identity color */
        if( !empty($charitize_site_identity_color_option) ){
        ?>
            .site-header .site-title a,
            .site-header .site-description{
                color: <?php echo esc_attr( $charitize_site_identity_color_option );?>; /*#332e2b*/
           }

        <?php
        }

        /*Main title color*/
        if( !empty($charitize_main_title_color_option) ){
        ?>
        h1, h2, h3, h4, h5, h6, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a, .entry-title a,
        .widget .widgettitle, .widget .widget-title{
           color: <?php echo esc_attr( $charitize_main_title_color_option );?>; /*#1e414e*/
        }
        <?php
        }

        /*Button standared color*/
        if( !empty($charitize_button_standard_color_option) ){
        ?>
        .button,
        button,
        html input[type="button"],
        input[type="button"],
        input[type="reset"],
        input[type="submit"],
        .button:visited,
        button:visited,
        html input[type="button"]:visited,
        input[type="button"]:visited,
        input[type="reset"]:visited,
        input[type="submit"]:visited,
        .search-form .search-submit,
        .search-form .search-submit:visited,
        .button:hover,
        input[type="button"]:hover,
        input[type="reset"]:hover,
        input[type="submit"]:hover,
        button:focus
        input[type="button"]:focus,
        input[type="reset"]:focus,
        input[type="submit"]:focus,
        button:active,
        input[type="button"]:active,
        input[type="reset"]:active,
        input[type="submit"]:active,
        .site-header .header-btn .button:hover{
           background-color: <?php echo esc_attr( $charitize_button_standard_color_option );?>;/*#FFD52F*/
        }
        <?php
        }

        /*Button link color*/
        if( !empty($charitize_link_color_option) ){
        ?>
        .button, button, html input[type="button"], input[type="button"], input[type="reset"], input[type="submit"], .button:visited, button:visited, html input[type="button"]:visited, input[type="button"]:visited, input[type="reset"]:visited, input[type="submit"]:visited {
              color: <?php echo esc_attr( $charitize_link_color_option );?>; /*#1e414e*/
            }
        <?php
        }

        /*Primary hover color*/
        if( !empty($charitize_primary_hover_color_option) ){
        ?>
          a:hover,
          a:focus,
          a:active,
          h1 a:hover,
          h1 a:focus,
          h1 a:active,
          h2 a:hover,
          h2 a:focus,
          h2 a:active,
          h3 a:hover,
          h3 a:focus,
          h3 a:active,
          h4 a:hover,
          h4 a:focus,
          h4 a:active,
          h5 a:hover,
          h5 a:focus,
          h5 a:active,
          h6 a:hover,
          h6 a:focus,
          h6 a:active,
          .site-header .site-title a:hover,
          .site-header .site-title a:focus,
          .site-header .site-title a:active,
          .contact-widget ul li a:hover,
          .contact-widget ul li a:focus,
          .contact-widget ul li a:active,
          .contact-widget ul li a:hover i,
          .contact-widget ul li a:focus i,
          .contact-widget ul li a:active i,
          .site-title a:hover,
          .site-title a:focus,
          .site-title a:active,
          .wrapper-slider .slide-item .slider-title a:hover,
          .wrapper-slider .slide-item .slider-title a:focus,
          .wrapper-slider .slide-item .slider-title a:active,
          .posted-on a:hover,
          .posted-on a:focus,
          .posted-on a:active,
          .cat-links a:hover,
          .cat-links a:focus,
          .cat-links a:active,
          .tags-links a:hover,
          .tags-links a:focus,
          .tags-links a:active,
          .author a:hover,
          .author a:focus,
          .author a:active,
          .comments-link a:hover,
          .comments-link a:focus,
          .comments-link a,
          .edit-link a:hover,
          .edit-link a:focus,
          .edit-link a:active,
          .nav-links .nav-previous a:hover,
          .nav-links .nav-previous a:focus,
          .nav-links .nav-previous a:active,
          .nav-links .nav-next a:hover,
          .nav-links .nav-next a:focus,
          .nav-links .nav-next a:active,
          .search-form .search-submit:hover,
          .search-form .search-submit:focus,
          .search-form .search-submit:active,
          .widget li a:hover,
          .widget li a:focus,
          .widget li a:active{
              color: <?php echo esc_attr( $charitize_primary_hover_color_option );?>;/*#FFD52F*/
            }

            @media screen and (min-width: 1200px){
                .main-navigation a:hover, 
                .main-navigation a:focus, 
                .main-navigation a:active,
                .main-navigation a:visited:hover,
                .main-navigation a:visited:focus,
                .main-navigation a:visited:active,
                .main-navigation ul li a:hover,
                .main-navigation ul li a:focus,
                .main-navigation ul li a:active {
                  color: <?php echo esc_attr( $charitize_primary_hover_color_option );?>;/*#FFD52F*/
              }
            }

            .wrapper-slider .controls #charitize-prev i:hover, 
            .wrapper-slider .controls #charitize-prev i:focus, 
            .wrapper-slider .controls #charitize-prev i:active, 
            .wrapper-slider .controls #charitize-prev i:visited:hover, 
            .wrapper-slider .controls #charitize-prev i:visited:focus, 
            .wrapper-slider .controls #charitize-prev i:visited:active, 
            .wrapper-slider .controls #charitize-next i:hover, 
            .wrapper-slider .controls #charitize-next i:focus, 
            .wrapper-slider .controls #charitize-next i:active, 
            .wrapper-slider .controls #charitize-next i:visited:hover, 
            .wrapper-slider .controls #charitize-next i:visited:focus, 
            .wrapper-slider .controls #charitize-next i:visited:active
            .wrapper-slider .slide-pager span:hover,
            .widget_calendar tbody a:hover,
            .widget_calendar tbody a:focus,
            .widget_calendar tbody a:active,
            .wrapper-activity .singlethumb:hover .content-area, 
            .wrapper-activity .singlethumb:focus .content-area, 
            .wrapper-activity .singlethumb:active .content-area{
              background-color: <?php echo esc_attr( $charitize_primary_hover_color_option );?>;/*#FFD52F*/
            }

            .nav-links .nav-previous a:hover,
            .nav-links .nav-previous a:focus,
            .nav-links .nav-previous a:active,
            .nav-links .nav-next a:hover,
            .nav-links .nav-next a:focus,
            .nav-links .nav-next a:active,
            .comment-list .reply a:hover,
            .comment-list .reply a:focus,
            .comment-list .reply a:active{
             border-color: <?php echo esc_attr( $charitize_primary_hover_color_option );?>;/*#FFD52F*/
            
           }
           .wrapper-activity .singlethumb .content-area:before{
                border-bottom-color: <?php echo esc_attr( $charitize_primary_hover_color_option );?>;/*#FFD52F*/
           }
        <?php
        }

        /*Inner banner background color*/
        if( !empty($charitize_bg_hearder_color_option) ){
        ?>
            .page-inner-title{
                background-color: <?php echo esc_attr( $charitize_bg_hearder_color_option );?>; /*#555C68*/
           }
        <?php
        }

        /*Bg breadcrumb color*/
        if( !empty($charitize_bg_breadcrumb_color_option) ){
        ?>
        .wrap-breadcrumb{
           background-color: <?php echo esc_attr( $charitize_bg_breadcrumb_color_option );?>; /*#333333*/
        }
        <?php
        }

        /*Bg footer color*/
        if( !empty($charitize_bg_footer_color_option) ){
        ?>
            .site-footer,
            .footer-nav.main-navigation{
                background-color: <?php echo esc_attr( $charitize_bg_footer_color_option );?>; /*#313131*/
            }
        <?php
        }

        /*end of color options*/

        /*=====FONT FAMILY OPTION=====*/
        /*----------------------------------*/
        /*Primary font*/
        if( !empty($charitize_font_family_primary_option) ){
        ?> 
            body,
            button,
            input,
            select,
            textarea,
            pre,
            code,
            kbd,
            tt,
            samp,
            var,
            .form-allowed-tags code,
            .wrapper-slider .slide-item .slider-title a {
              font-family: "<?php echo esc_attr( $charitize_font_family_primary_option ); ?>";
            }
        <?php
        } 

        /*Site identity font*/
        if( !empty($charitize_font_family_site_identity_option) ){
        ?> 
          .site-header .site-title a,
          .site-header .site-description {
                font-family: "<?php echo esc_attr( $charitize_font_family_site_identity_option ); ?>";/*"Lato"*/
            }
        <?php
        } 

        /*Title font*/
        if( !empty($charitize_font_family_title_option) ){
        ?> 
            h1, h2, h3, h4, h5, h6, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
                font-family: "<?php echo esc_attr( $charitize_font_family_title_option ); ?>";/*"Lato"*/
            }
        <?php
        } 
        /* Banner Image*/
        if( !empty( $charitize_banner_image ) ){
        ?>
            .page-inner-title{
                background-image: url(<?php echo esc_url($charitize_banner_image);?>);
                }
        <?php
        }
        // Bail if not WP 4.7.
        $charitize_loop_number = 1;
        if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
          $charitize_custom_css = $charitize_customizer_all_values['charitize-custom-css']; 
          $charitize_custom_css_output = ''; 
          if ( ! empty( $charitize_custom_css ) ) { 
              $charitize_custom_css_output .= esc_textarea( $charitize_custom_css ) ; 
          } 
         echo $charitize_custom_css_output;/*escaping done above*/ 
        } else{
            $charitize_customizer_saved_values = charitize_get_all_options();
            $charitize_custom_css = $charitize_customizer_all_values['charitize-custom-css'];
            // Bail if there is no Custom CSS.
                if (!empty($charitize_custom_css)) {
                    $core_css = wp_get_custom_css();
                    $return = wp_update_custom_css_post( $core_css . $charitize_custom_css );
                    if ( ! is_wp_error( $return ) ) {
                    // Remove from theme.
                    $options = esc_textarea($charitize_customizer_all_values['charitize-custom-css']);
                    echo $options;
                    }
                }
            $charitize_custom_css = '';
            $charitize_customizer_saved_values['charitize-custom-css'] = $charitize_customizer_defaults['charitize-custom-css'];
            /*resetting fields*/
            charitize_reset_options( $charitize_customizer_saved_values );
        }
        ?>
        </style>
    <?php
    }
endif;
add_action( 'wp_head', 'charitize_wp_head' );