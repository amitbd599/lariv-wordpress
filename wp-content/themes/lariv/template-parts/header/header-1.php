<?php 

	/**
	 * Template part for displaying header layout one
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package lariv
	*/

	// info
    $lariv_contact_info = get_theme_mod( 'lariv_contact_info', false );
    $lariv_phone_number = get_theme_mod( 'lariv_phone_number', __( '123-456-789', 'lariv' ) );
    $lariv_address = get_theme_mod( 'lariv_address', __( '12/A, Mirnada City Tower, NYC', 'lariv' ) );
    $lariv_email_id = get_theme_mod( 'lariv_email_id', __( 'info@demo.com', 'lariv' ) );
    $lariv_facebook_url = get_theme_mod( 'lariv_facebook_url', __( '#', 'lariv' ) );
    $lariv_linkedin_url = get_theme_mod( 'lariv_linkedin_url', __( '#', 'lariv' ) );
    $lariv_twitter_url = get_theme_mod( 'lariv_twitter_url', __( '#', 'lariv' ) );
    $lariv_instagram_url = get_theme_mod( 'lariv_instagram_url', __( '#', 'lariv' ) );
    $lariv_background_img_switch = get_theme_mod( 'lariv_background_img_switch', false );
    $lariv_background_color_switch = get_theme_mod( 'lariv_background_color_switch', false );
    $lariv_background_bg_img = get_theme_mod( 'lariv_background_bg_img',  __( 'assets/images/show/bg-1.jpg', 'lariv' ) );
    $lariv_background_bg_color = get_theme_mod( 'lariv_background_bg_color',  __( '#000', 'lariv' ) );



?>




  <?php if(!empty($lariv_background_img_switch)) : ?>
    <!-- Bg image start-->
    <div
      class="bg-img"
      style="background-image: url('<?php echo esc_html($lariv_background_bg_img);?>')"
    ></div>
  <?php endif; ?>


  <?php if(!empty($lariv_background_color_switch)) : ?>
    <div
      class="bg-color "
      style="background-color: <?php echo esc_attr($lariv_background_bg_color); ?>"
    ></div>
  <?php endif; ?>


    <!-- Bg image end-->

    <!-- header-area-start -->
    <header id="header-sticky" class="header-area relative z-[99]">
      <div class="container mx-auto pt-[30px]">
        <div
          class="flex justify-between rounded-[10px] bg-card px-[15px] md:px-[30px]"
        >
          <div class="logo flex items-center">
          <?php lariv_header_logo();?>
          </div>
          <div class="">
            <div class="menu-area menu-padding">
              <div class="main-menu">
                <nav id="mobile-menu">
                <?php lariv_header_menu();?>
                </nav>
              </div>
            </div>
            <div class="side-menu-icon lg:hidden text-end">
              <a
                href="javascript:void(0)"
                class="info-toggle-btn f-right sidebar-toggle-btn"
                ><i class="fal fa-bars"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- header-area-end -->

    <!-- sidebar area start -->
    <div class="sidebar__area">
      <div class="sidebar__wrapper">
        <div class="sidebar__close">
          <button class="sidebar__close-btn" id="sidebar__close-btn">
            <i class="fal fa-times"></i>
          </button>
        </div>
        <div class="sidebar__content">
          <div class="sidebar__logo mt-[30px] mb-[40px]">
          <?php lariv_header_logo();?>
          </div>
          <div class="mobile-menu fix"></div>
          <?php if ( !empty( $lariv_contact_info ) ): ?>
          <div class="sidebar__contact mt-[50px] mb-[20px]">
            <h4><?php echo esc_html__("Contact Info", "lariv"); ?></h4>
            <ul>
              <li class="flex items-center gap-3">
                <div class="sidebar__contact-icon mr-15">
                  <i class="fal fa-map-marker-alt"></i>
                </div>
                <div class="sidebar__contact-text">
                  <span
                    
                    ><?php echo esc_html($lariv_address);?></span
                  >
                </div>
              </li>
              <li class="flex items-center gap-3">
                <div class="sidebar__contact-icon mr-15">
                  <i class="far fa-phone"></i>
                </div>
                <div class="sidebar__contact-text">
                  <span>
                    <?php echo esc_html($lariv_phone_number); ?>
                  </span>
                </div>
              </li>
              <li class="flex items-center gap-3">
                <div class="sidebar__contact-icon mr-15">
                  <i class="fal fa-envelope"></i>
                </div>
                <div class="sidebar__contact-text">
                  <span><?php echo esc_html($lariv_email_id);?></span>
                </div>
              </li>
            </ul>
          </div>

          <div class="sidebar__social">
            <ul>
              <li>
                <a  href="<?php echo esc_url($lariv_facebook_url);?>"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li>
                <a href="<?php echo esc_url($lariv_instagram_url);?>"><i class="fab fa-instagram"></i></a>
              </li>
              <li>
                <a href="<?php echo esc_url($lariv_twitter_url);?>"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href="<?php echo esc_url($lariv_linkedin_url);?>"><i class="fab fa-linkedin"></i></a>
              </li>
            </ul>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <!-- sidebar area end -->
    <div class="body-overlay"></div>
    <!-- sidebar area end -->



