<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Appel du fichier style.css de notre thème -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <script async src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.4.0/wavesurfer.min.js"></script>
    <!--
        Tout le contenu de la partie head de mon site
     -->

    <!-- Execution de la fonction wp_head() obligatoire ! -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div class="container-fluid">
    <header id="header" class="row">
        <div class="navbar-nav">
            <?php
            $args=array(
                'theme_location' => 'header', // nom du slug
                'menu' => 'header_fr', // nom à donner cette occurence du menu
                'menu_class' => 'navbar-nav', // class à attribuer au menu
                'menu_id' => 'menu_id' // id à attribuer au menu
                // voir les autres arguments possibles sur le codex
            );
            wp_nav_menu($args);
            ?>
            <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                <label>
                    <span class="screen-reader-text">Search for:</span>
                    <input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:" />
                </label>
                <input type="submit" class="search-submit" value="Search" />
            </form>
        </div>
    </header>
</div>