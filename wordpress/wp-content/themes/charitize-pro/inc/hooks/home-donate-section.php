<?php

if ( ! function_exists( 'charitize_home_donate_section' ) ) :
    /**
     * Featured Slider
     *
     * @since Charitize 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function charitize_home_donate_section() {
        global $charitize_customizer_all_values;
        if( 1 != $charitize_customizer_all_values['charitize-donate-enable'] ){
            return null;
        }
        $charitize_home_donate_single_words = absint( $charitize_customizer_all_values['charitize-home-donate-single-words'] );
        $charitize_home_donate_posts = absint($charitize_customizer_all_values['charitize-donate-page']);
        $charitize_home_donate_button = esc_html($charitize_customizer_all_values['charitize-home-donate-button-text'] );
        $charitize_home_donate_button_link = esc_url($charitize_customizer_all_values['charitize-home-donate-button-link'] );

    ?>
    <?php
    if( !empty( $charitize_home_donate_posts )){
        $charitize_feature_slider_args =    array(
            'post_type' => 'page',
            'p' => $charitize_home_donate_posts,
            'posts_per_page' => 1

        );
        $charitize_fature_section_post_query = new WP_Query( $charitize_feature_slider_args );
        if ( $charitize_fature_section_post_query->have_posts() ) :
        while ( $charitize_fature_section_post_query->have_posts() ) : $charitize_fature_section_post_query->the_post();
        if(has_post_thumbnail()){
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
        }
        else{
            $thumb[0] = get_template_directory_uri() .'/assets/img/callup-banner.png';
        }
        ?>               

        <section class="wrapper wrapper-callback" style="background-image: url('<?php echo esc_url($thumb[0]); ?>')";>
            <div class="thumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
                        <h2><?php the_title(); ?></h2>
                        <div class="text-content">
                            <?php echo wp_kses_post(charitize_words_count( $charitize_home_donate_single_words ,get_the_content()));; ?>
                        </div>
                        <div class="btn-holder"><a href="<?php 
                        if (empty($charitize_home_donate_button_link)) {
                            the_permalink();
                        }
                        else{
                            echo esc_url($charitize_home_donate_button_link);
                        }
                        ?>" class="button"> <?php echo esc_html($charitize_home_donate_button);?></a></div>
                    </div>
                </div>
            </div>
        </section>
        <?php
            endwhile;
        endif;
    }
    if( empty( $charitize_home_donate_posts )){ ?>
        <section class="wrapper wrapper-callback" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/callup-banner.png" alt="callback image");>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
                        <h2><?php echo __('We are a charity creating for positive changes','charitize'); ?></h2>
                        <div class="text-content"><?php echo __("Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",'charitize'); ?></div>
                        <div class="btn-holder"><a href="#" class="button"><?php echo __('DONATE','charitize'); ?></a></div>
                    </div>
                </div>
            </div>
        </section>
    <?php 
    }
}
endif;
add_action( 'charitize_action_front_page', 'charitize_home_donate_section', 30 );