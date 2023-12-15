<?php

/**
 * lariv_scripts description
 * @return [type] [description]
 */
function lariv_scripts() {

    /**
     * all css files
    */

    wp_enqueue_style( 'lariv-fonts', lariv_fonts_url(), array(), time() );
  
    wp_enqueue_style( 'animate', LARIV_THEME_CSS_DIR . 'animate.css', [] );
    wp_enqueue_style( 'font-awesome-pro', LARIV_THEME_CSS_DIR . 'font-awesome-pro.css', [] );
    wp_enqueue_style( 'swiper-bundle', LARIV_THEME_CSS_DIR . 'swiper-bundle.css', [] );
    wp_enqueue_style( 'lariv-core', LARIV_THEME_CSS_DIR . 'lariv-core.css', [], time() );
    wp_enqueue_style( 'lariv-unit', LARIV_THEME_CSS_DIR . 'lariv-unit.css', [], time() );
    wp_enqueue_style( 'lariv-custom', LARIV_THEME_CSS_DIR . 'lariv-custom.css', [] );
    wp_enqueue_style( 'lariv-style', get_stylesheet_uri() );

    // all js
    wp_enqueue_script( 'wow', LARIV_THEME_JS_DIR . 'wow.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'waypoints', LARIV_THEME_JS_DIR . 'waypoints.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'backtotop', LARIV_THEME_JS_DIR . 'backtotop.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'counterup', LARIV_THEME_JS_DIR . 'counterup.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'typer', LARIV_THEME_JS_DIR . 'typer.js', [ 'jquery' ], false, true );
    wp_enqueue_script( 'swiper-bundle', LARIV_THEME_JS_DIR . 'swiper-bundle.js', [ 'jquery' ], '', true );
    wp_enqueue_script( 'lariv-main', LARIV_THEME_JS_DIR . 'main.js', [ 'jquery' ], time(), true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'lariv_scripts' );

/*
Register Fonts
 */
function lariv_fonts_url() {
    $font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'lariv' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap';
    }
    return $font_url;
}