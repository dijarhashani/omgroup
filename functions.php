<?php

function theme_enqueue_styles() {
    wp_enqueue_style('fonts', get_template_directory_uri() . '/fonts.css');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


function custom_theme_setup() {
   
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'theme_text_domain' ), // First menu
        'secondary' => __( 'Secondary Menu', 'theme_text_domain' ), // Second menu
    ));
}
add_action( 'after_setup_theme', 'custom_theme_setup' );


function add_aos_to_theme() {
   
    wp_enqueue_style('aos-css', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css');
    
  
    wp_enqueue_script('aos-js', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', array('jquery'), null, true);
    
    
    wp_add_inline_script('aos-js', 'AOS.init({ once: true, duration: 1000 });');
}
add_action('wp_enqueue_scripts', 'add_aos_to_theme');


function add_scrollreveal_to_theme() {
    
    wp_enqueue_script('scrollreveal-js', 'https://unpkg.com/scrollreveal@4.0.9/dist/scrollreveal.min.js', array(), null, true);

    wp_enqueue_style('tailwind' , '<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>', array('jquery'), null, true);
    
    
    wp_add_inline_script('scrollreveal-js', 'ScrollReveal().reveal(".reveal", { duration: 1000, distance: "50px", easing: "ease-in-out "});');
}
add_action('wp_enqueue_scripts', 'add_scrollreveal_to_theme');



add_action( 'wp_enqueue_scripts', 'custom_remove_woocommerce_styles_scripts', 99 );

function custom_remove_woocommerce_styles_scripts() {

    wp_dequeue_style( 'woocommerce-general' );
    wp_dequeue_style( 'woocommerce-layout' );
    wp_dequeue_style( 'woocommerce-smallscreen' );
    
 
    wp_dequeue_script( 'woocommerce' );
    wp_dequeue_script( 'wc-cart-fragments' );
    wp_dequeue_script( 'woocommerce-general' );
}

