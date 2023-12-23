<?php 

/**
 * Template part for displaying footer layout one
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lariv
*/


$lariv_footer_logo = get_theme_mod( 'lariv_footer_logo',  __( '', 'lariv' ) );
$lariv_copyright = get_theme_mod( 'lariv_copyright',  __( 'Copyright Lariv ©2023-2024. All rights reserved', 'lariv' ) );



// bg image
$bg_img = !empty( $lariv_footer_bg_url_from_page['url'] ) ? $lariv_footer_bg_url_from_page['url'] : $footer_bg_img;









?>

    <!-- footer start -->
    <footer class="relative z-[9]">
      <div class="container mx-auto flex justify-center pb-[40px]">
        <div>
          <p class="text-center text-text">
            <?php echo esc_html($lariv_copyright);?>
          </p>
          <?php if(!empty($lariv_footer_logo)) : ?>
          <div class="mt-[20px] flex justify-center text-center">
            <img
              src="<?php echo esc_html($lariv_footer_logo);?>"
              alt="Lariv - React Portfolio Template"
            />
          </div>

          <?php endif;?>
        </div>
      </div>
    </footer>
    <!-- footer end -->

<footer class="hidden">
    <div class="footer__area">
        <?php if ( is_active_sidebar('footer-1') OR is_active_sidebar('footer-2') OR is_active_sidebar('footer-3') OR is_active_sidebar('footer-4') ): ?>
       <div class="footer__top grey-bg-4 pt-95 pb-45" data-bg-color="<?php print esc_attr( $bg_color );?>" data-top-space="<?php print esc_attr($lariv_footer_top_space); ?>px"  data-background="<?php print esc_url( $bg_img );?>">
          <div class="container">
             <div class="row">
                <?php
                    if ( $footer_columns < 4 ) {
                    print '<div class="col-lg-3 col-md-6 col-sm-7">';
                    dynamic_sidebar( 'footer-1' );
                    print '</div>';

                    print '<div class=col-lg-3 col-md-3 col-sm-5">';
                    dynamic_sidebar( 'footer-2' );
                    print '</div>';

                    print '<div class="col-lg-3 col-md-3 col-sm-5">';
                    dynamic_sidebar( 'footer-3' );
                    print '</div>';

                    print '<div class="col-lg-3 col-md-6 col-sm-7">';
                    dynamic_sidebar( 'footer-4' );
                    print '</div>';
                    } else {
                        for ( $num = 1; $num <= $footer_columns; $num++ ) {
                            if ( !is_active_sidebar( 'footer-' . $num ) ) {
                                continue;
                            }
                            print '<div class="' . esc_attr( $footer_class[$num] ) . '">';
                            dynamic_sidebar( 'footer-' . $num );
                            print '</div>';
                        }
                    }
                ?>
             </div>
          </div>
       </div>
       <?php endif; ?>
       <div class="footer__bottom grey-bg-4">
          <div class="container">
             <div class="footer__bottom-inner">
                <div class="row">
                   <div class="col-xxl-12">
                      <div class="footer__copyright text-center">
                         <p><?php print lariv_copyright_text(); ?></p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</footer>