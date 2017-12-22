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
<header class="header_theme">
    <div class="header__nav container-fluid">
        <div class="col-lg-12 menu__fix">
            <img src=<?php echo IMAGES_URL?>/logo-footer.png" alt="" class="img-fluid">
            <?php
            $args=array(
                'theme_location' => 'header', // nom du slug
                'menu' => 'header_fr', // nom à donner cette occurence du menu
                'menu_class' => 'the_menu', // class à attribuer au menu
                'menu_id' => 'menu_id' // id à attribuer au menu
                // voir les autres arguments possibles sur le codex
            );
            wp_nav_menu($args);
            ?>
        </div>
    </div>
    <div class="header__navMobile container-fluid">
        <div class="col-lg-12">
        </div>
    </div>
</header>