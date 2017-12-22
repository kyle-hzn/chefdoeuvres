<?php
add_action( 'wp_enqueue_scripts', 'ajout_scripts' );


function ajout_scripts() {

// enregistrement d'un nouveau script
//wp_register_script('bootstrap_script', JS_URL.'/bootstrap.min.js', array('jquery'),'1.1', true);
//wp_enqueue_script('bootstrap_script');

wp_register_script('jquery_script', 'https://code.jquery.com/jquery-3.2.1.min.js', true);
wp_enqueue_script('jquery_script');

wp_register_script('main_js', JS_URL.'/main.min.js', array('jquery'),'1.1', true);
wp_enqueue_script('main_js');




// enregistrement des styles
wp_register_style( 'google_font_Playfair', 'https://fonts.googleapis.com/css?family=Playfair+Display:700,700i' );
wp_register_style( 'google_font_Open', 'https://fonts.googleapis.com/css?family=Open+Sans' );
wp_enqueue_style( 'google_font_Playfair' );
wp_enqueue_style( 'google_font_Open' );

wp_register_style( 'google_font_Monsterrat', "https://fonts.googleapis.com/css?family=Montserrat:600,700" );
wp_enqueue_style( 'google_font_Montserrat' );


// enregistrement des styles
wp_register_style( 'main_style', CSS_URL.'/style.min.css' );
wp_enqueue_style( 'main_style' );


}