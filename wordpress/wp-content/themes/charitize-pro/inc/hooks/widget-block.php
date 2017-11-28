<?php

if ( ! function_exists( 'charitize_widget_block' ) ) :
    /**
     * Blank Block Widgeet Section
     *
     * @since charitize 1.0.0
     *
     * @param null
     * @return null
     *
     */
    function charitize_widget_block() {
    global $charitize_customizer_all_values;

        if ( is_active_sidebar( 'blank-full-widgets' ) ) { ?>
          <section class="wrapper block-section widget-block">
            <div class="container">
                <div class="row">
                    <div class="column-md-12">
                        <?php dynamic_sidebar( 'blank-full-widgets' ); ?>
                    </div>
                </div>
            </div>
          </section>   
       <?php }
    }
endif;
add_action( 'charitize_action_front_page', 'charitize_widget_block', 40 );