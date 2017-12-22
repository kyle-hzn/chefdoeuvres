<?php
/*
Template Name:  Accueil
*/

get_header()
?>

    <div class="bg-home">
        <div class="bg-home-video">
            <video src="<?=the_field('video_home');?>" autoplay muted loop></video>
        </div>
        <!-- <header id="header" class="row bg-home-wrapper">
        <div class="col-lg-4">
            logo
        </div>
        <div class="header__nav col-lg-8">
            <?php
        $args=array(
            'theme_location' => 'header', // nom du slug
            'menu' => 'header_fr', // nom à donner cette occurence du menu
            'menu_class' => 'the__menu', // class à attribuer au menu
            'menu_id' => 'menu_id' // id à attribuer au menu
            // voir les autres arguments possibles sur le codex
        );
        wp_nav_menu($args);
        ?>
        </div> -->
        <div class="bg-home-content text-center justify-content-center row bg-home-wrapper">
            <div class="col-lg-8">
                <h1 class="h1anim"><?=the_field('title_header');?></h1>
            </div>
        </div>
        <!-- </header> -->
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center text-center content-desc">
            <h1 class="col-lg-6 title_desc"><?=the_field('title_desc');?></h1>
            <div class="w-100"></div>
            <p class="col-lg-6 text_desc"><?=the_field('text_desc');?></p>
        </div>

        <div class="row justify-content-end">
            <div class="col-lg-4">
                <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                    <label>
                        <input type="search" class="search-field" placeholder="Rechercher un chef-d’oeuvre" value="" name="s" title="Search for:" />
                    </label>
                </form>
            </div>
        </div>
        <!-- Row 1 -->
        <div class="row content_calandar_item_o">
            <div class="col-lg-12">
                <a href="http://localhost:8888/chefdoeuvres/le-carnaval-doruro/">
                    <div class="img_bg position-relative" style="background-image:url(<?=the_field('img_co');?>);">
                        <div class="pos-absolute pos-top pos-left">
                            <h3>LE CARNAVAL D'ORURO</h3>
                        </div>
                        <div class="pos-absolute pos-top pos-right">
                            <div class="pays_calendar text-center align-items-center">
                                <span>Bolivie</span>
                            </div>
                        </div>
                        <div class="pos-absolute pos-bottom pos-right">
                            <img class="nb_22" src="<?=the_field('nb_22')?>" alt="#">
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- Row 2 -->
        <div class="row content_calandar_item">
                <div class="col-lg-6">
                    <a href="http://localhost:8888/chefdoeuvres/le-cafe-arabe/">
                        <div class="img_bg position-relative" style="background-image:url(<?=the_field('img_ca');?>);">
                            <div class="pos-absolute pos-top pos-left">
                                <img class="nb_22" src="<?=the_field('nb_21')?>" alt="#">

                            </div>
                            <div class="pos-absolute pos-top pos-right">
                                <div class="pays_calendar text-center align-items-center">
                                    <span>Moyen-Orient</span>
                                </div>
                            </div>
                            <div class="pos-absolute pos-bottom pos-left">
                                <h3>LE CAFE ARABE</h3>
                            </div>
                        </div>
                    </a>
                </div>
            <div class="col-lg-6">
                <div class="img_bg position-relative" style="background-image:url(<?=the_field('img_gf');?>);">
                    <div class="pos-absolute pos-top pos-left">
                        <h3>LA GASTRONOMIE FRANCAISE</h3>
                    </div>
                    <div class="pos-absolute pos-top pos-right">
                        <div class="pays_calendar text-center align-items-center">
                            <span>France</span>
                        </div>
                    </div>
                    <div class="pos-absolute pos-bottom pos-right">
                        <img class="nb_22" src="<?=the_field('nb_20')?>" alt="#">
                    </div>
                </div>
            </div>
        </div>
        <!-- row 3 -->
        <div class="row content_calandar_item">
            <div class="col-lg-4" >
                <div class="img_bg position-relative" style="background-image:url(<?=the_field('img_y');?>);">
                    <div class="pos-absolute pos-bottom pos-right">
                        <img class="nb_22" src="<?=the_field('nb_18')?>" alt="#">

                    </div>
                    <div class="pos-absolute pos-top pos-right">
                        <div class="pays_calendar text-center align-items-center">
                            <span>Inde</span>
                        </div>
                    </div>
                    <div class="pos-absolute pos-bottom pos-left">
                        <h3>LE YOGA</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-8" >
                <div class="img_bg position-relative" style="background-image:url(<?=the_field('img_rit');?>);">
                    <div class="pos-absolute pos-bottom pos-right">
                        <h3>LE RITUEL POUR AMADOUER LES CHAMELLES</h3>
                    </div>
                    <div class="pos-absolute pos-top pos-right">
                        <div class="pays_calendar text-center align-items-center">
                            <span>Mongolie</span>
                        </div>
                    </div>
                    <div class="pos-absolute pos-top pos-left">
                        <img class="nb_22" src="<?=the_field('nb_17')?>" alt="#">
                    </div>
                </div>
            </div>
        </div>
        <!-- Row 4 -->
        <div class="row content_calandar_item">
            <div class="col-lg-8" >
                <div class="img_bg position-relative" style="background-image:url(<?=the_field('img_to');?>);">
                    <div class="pos-absolute pos-bottom pos-left">
                        <img class="nb_22" src="<?=the_field('nb_16')?>" alt="#">

                    </div>
                    <div class="pos-absolute pos-top pos-right">
                        <div class="pays_calendar text-center align-items-center">
                            <span>Cambodge</span>
                        </div>
                    </div>
                    <div class="pos-absolute pos-top pos-left">
                        <h3>LE THEATRE D’OMBRES KHMER</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" >
                <div class="img_bg position-relative" style="background-image:url(<?=the_field('img_vib');?>);">
                    <div class="pos-absolute pos-bottom pos-right">
                        <h3>LE VIBUZA</h3>
                    </div>
                    <div class="pos-absolute pos-top pos-right">
                        <div class="pays_calendar text-center align-items-center">
                            <span>Malawi</span>
                        </div>
                    </div>
                    <div class="pos-absolute pos-top pos-left">
                        <img class="nb_22" src="<?=the_field('nb_15')?>" alt="#">
                    </div>
                </div>
            </div>
        </div>
        <!-- Row 5 -->
        <div class="row content_calandar_item">
            <div class="col-lg-4" >
                <div class="img_bg position-relative" style="background-image:url(<?=the_field('img_flam');?>);">
                    <div class="pos-absolute pos-top pos-left">
                        <img class="nb_22" src="<?=the_field('nb_14')?>" alt="#">

                    </div>
                    <div class="pos-absolute pos-top pos-right">
                        <div class="pays_calendar text-center align-items-center">
                            <span>Espagne</span>
                        </div>
                    </div>
                    <div class="pos-absolute pos-bottom pos-right">
                        <h3>LE FLAMENCO</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" >
                <div class="img_bg position-relative" style="background-image:url(<?=the_field('img_tah');?>);">
                    <div class="pos-absolute pos-bottom pos-right">
                        <h3>TAHTEEB</h3>
                    </div>
                    <div class="pos-absolute pos-top pos-right">
                        <div class="pays_calendar text-center align-items-center">
                            <span>Egypte</span>
                        </div>
                    </div>
                    <div class="pos-absolute pos-bottom pos-left">
                        <img class="nb_22" src="<?=the_field('nb_13')?>" alt="#">
                    </div>
                </div>
            </div>
            <div class="col-lg-4" >
                <div class="img_bg position-relative" style="background-image:url(<?=the_field('img_piz');?>);">
                    <div class="pos-absolute pos-bottom pos-left">
                        <h3>LA PIZZA NAPOLITAINE</h3>
                    </div>
                    <div class="pos-absolute pos-top pos-right">
                        <div class="pays_calendar text-center align-items-center">
                            <span>Italie</span>
                        </div>
                    </div>
                    <div class="pos-absolute pos-top pos-left">
                        <img class="nb_22" src="<?=the_field('nb_12')?>" alt="#">
                    </div>
                </div>
            </div>
        </div>
        <!-- Row 6 -->
        <div class="row content_calandar_item">
            <div class="col-lg-6" >
                <div class="img_bg position-relative" style="background-image:url(<?=the_field('img_pech');?>);">
                    <div class="pos-absolute pos-top pos-left">
                        <img class="nb_22" src="<?=the_field('nb_11')?>" alt="#">

                    </div>
                    <div class="pos-absolute pos-top pos-right">
                        <div class="pays_calendar text-center align-items-center">
                            <span>Pays-Bas</span>
                        </div>
                    </div>
                    <div class="pos-absolute pos-bottom pos-left">
                        <h3>LA PECHE DE CREVETTES À CHEVAL</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" >
                <div class="img_bg position-relative" style="background-image:url(<?=the_field('img_bie');?>);">
                    <div class="pos-absolute pos-top pos-left">
                        <h3>LA BIERE BELGE</h3>
                    </div>
                    <div class="pos-absolute pos-top pos-right">
                        <div class="pays_calendar text-center align-items-center">
                            <span>Belgique</span>
                        </div>
                    </div>
                    <div class="pos-absolute pos-bottom pos-right">
                        <img class="nb_22" src="<?=the_field('nb_10')?>" alt="#">
                    </div>
                </div>
            </div>
        </div>
        <!-- Row 7 -->
        <div class="row content_calandar_item">
            <div class="col-lg-4" >
                <div class="img_bg position-relative" style="background-image:url(<?=the_field('img_cap');?>);">
                    <div class="pos-absolute pos-bottom pos-right">
                        <img class="nb_22" src="<?=the_field('nb_9')?>" alt="#">

                    </div>
                    <div class="pos-absolute pos-top pos-right">
                        <div class="pays_calendar text-center align-items-center">
                            <span>Brésil</span>
                        </div>
                    </div>
                    <div class="pos-absolute pos-bottom pos-left">
                        <h3>LA CAPOEIRA</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-8" >
                <div class="img_bg position-relative" style="background-image:url(<?=the_field('img_carn');?>);">
                    <div class="pos-absolute pos-bottom pos-right">
                        <h3>LE CARNAVAL D’IMST</h3>
                    </div>
                    <div class="pos-absolute pos-top pos-right">
                        <div class="pays_calendar text-center align-items-center">
                            <span>Autriche</span>
                        </div>
                    </div>
                    <div class="pos-absolute pos-top pos-left">
                        <img class="nb_22" src="<?=the_field('nb_8')?>" alt="#">
                    </div>
                </div>
            </div>
        </div>
        <!-- Row 8 -->
        <div class="row content_calandar_item">
            <div class="col-lg-8" >
                <div class="img_bg position-relative" style="background-image:url(<?=the_field('img_tam');?>);">
                    <div class="pos-absolute pos-bottom pos-left">
                        <img class="nb_22" src="<?=the_field('nb_7')?>" alt="#">

                    </div>
                    <div class="pos-absolute pos-top pos-right">
                        <div class="pays_calendar text-center align-items-center">
                            <span>Burundi</span>
                        </div>
                    </div>
                    <div class="pos-absolute pos-top pos-left">
                        <h3>DANSE RITUELLE AU TAMBOUR ROYAL</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" >
                <div class="img_bg position-relative" style="background-image:url(<?=the_field('img_fauc');?>);">
                    <div class="pos-absolute pos-bottom pos-right">
                        <h3>LA FAUCONNERIE</h3>
                    </div>
                    <div class="pos-absolute pos-top pos-right">
                        <div class="pays_calendar text-center align-items-center">
                            <span>Europe</span>
                        </div>
                    </div>
                    <div class="pos-absolute pos-top pos-left">
                        <img class="nb_22" src="<?=the_field('nb_6')?>" alt="#">
                    </div>
                </div>
            </div>
        </div>
        <!-- Row 9 -->
        <div class="row content_calandar_item">
            <div class="col-lg-6" >
                <div class="img_bg position-relative" style="background-image:url(<?=the_field('img_boul');?>);">
                    <div class="pos-absolute pos-top pos-left">
                        <img class="nb_22" src="<?=the_field('nb_5')?>" alt="#">

                    </div>
                    <div class="pos-absolute pos-top pos-right">
                        <div class="pays_calendar text-center align-items-center">
                            <span>Chine</span>
                        </div>
                    </div>
                    <div class="pos-absolute pos-bottom pos-left">
                        <h3>L’ART D’UTILISER UN BOULIER</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" >
                <div class="img_bg position-relative" style="background-image:url(<?=the_field('img_pun');?>);">
                    <div class="pos-absolute pos-top pos-left">
                        <h3>LE PUNTO</h3>
                    </div>
                    <div class="pos-absolute pos-top pos-right">
                        <div class="pays_calendar text-center align-items-center">
                            <span>Cuba</span>
                        </div>
                    </div>
                    <div class="pos-absolute pos-bottom pos-right">
                        <img class="nb_22" src="<?=the_field('nb_4')?>" alt="#">
                    </div>
                </div>
            </div>
        </div>
        <!-- Row 10 -->
        <div class="row content_calandar_item">
            <div class="col-lg-4" >
                <div class="img_bg position-relative" style="background-image:url(<?=the_field('img_kok');?>);">
                    <div class="pos-absolute pos-top pos-left">
                        <img class="nb_22" src="<?=the_field('nb_3')?>" alt="#">

                    </div>
                    <div class="pos-absolute pos-top pos-right">
                        <div class="pays_calendar text-center align-items-center">
                            <span>Kirghizistan</span>
                        </div>
                    </div>
                    <div class="pos-absolute pos-bottom pos-right">
                        <h3>KOK BORU</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" >
                <div class="img_bg position-relative" style="background-image:url(<?=the_field('img_kab');?>);">
                    <div class="pos-absolute pos-bottom pos-right">
                        <h3>LE KABUKI</h3>
                    </div>
                    <div class="pos-absolute pos-top pos-right">
                        <div class="pays_calendar text-center align-items-center">
                            <span>Japon</span>
                        </div>
                    </div>
                    <div class="pos-absolute pos-bottom pos-left">
                        <img class="nb_22" src="<?=the_field('nb_2')?>" alt="#">
                    </div>
                </div>
            </div>
            <div class="col-lg-4" >
                <div class="img_bg position-relative" style="background-image:url(<?=the_field('img_chap');?>);">
                    <div class="pos-absolute pos-bottom pos-left">
                        <h3>LE TISSAGE DES CHAPEAUX DE PAILLE</h3>
                    </div>
                    <div class="pos-absolute pos-top pos-right">
                        <div class="pays_calendar text-center align-items-center">
                            <span>Malawi</span>
                        </div>
                    </div>
                    <div class="pos-absolute pos-top pos-left">
                        <img class="nb_22" src="<?=the_field('nb_1')?>" alt="#">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid pl-0 pr-0">
            <div class="item-sliderMobile">
                <a href="http://localhost:8888/chefdoeuvres/le-carnaval-doruro/"><img class="img-fluid pl-2 pr-2" style="max-width: 300px; max-height: 400px" src="<?php the_field('card1'); ?>" alt=""></a>
                <a href="http://localhost:8888/chefdoeuvres/le-cafe-arabe/"><img class="img-fluid pl-2 pr-2" style="max-width: 300px; max-height: 400px" src="<?php the_field('card2'); ?>" alt=""></a>
                <img class="img-fluid pl-2 pr-2" style="max-width: 300px; max-height: 400px" src="<?php the_field('card3'); ?>" alt="">
                <img class="img-fluid pl-2 pr-2" style="max-width: 300px; max-height: 400px" src="<?php the_field('card4'); ?>" alt="">
                <img class="img-fluid pl-2 pr-2" style="max-width: 300px; max-height: 400px" src="<?php the_field('card5'); ?>" alt="">
                <img class="img-fluid pl-2 pr-2" style="max-width: 300px; max-height: 400px" src="<?php the_field('card6'); ?>" alt="">
                <img class="img-fluid pl-2 pr-2" style="max-width: 300px; max-height: 400px" src="<?php the_field('card7'); ?>" alt="">
                <img class="img-fluid pl-2 pr-2" style="max-width: 300px; max-height: 400px" src="<?php the_field('card8'); ?>" alt="">
                <img class="img-fluid pl-2 pr-2" style="max-width: 300px; max-height: 400px" src="<?php the_field('card9'); ?>" alt="">
                <img class="img-fluid pl-2 pr-2" style="max-width: 300px; max-height: 400px" src="<?php the_field('card10'); ?>" alt="">
                <img class="img-fluid pl-2 pr-2" style="max-width: 300px; max-height: 400px" src="<?php the_field('card11'); ?>" alt="">
                <img class="img-fluid pl-2 pr-2" style="max-width: 300px; max-height: 400px" src="<?php the_field('card12'); ?>" alt="">
                <img class="img-fluid pl-2 pr-2" style="max-width: 300px; max-height: 400px" src="<?php the_field('card13'); ?>" alt="">
                <img class="img-fluid pl-2 pr-2" style="max-width: 300px; max-height: 400px" src="<?php the_field('card14'); ?>" alt="">
                <img class="img-fluid pl-2 pr-2" style="max-width: 300px; max-height: 400px" src="<?php the_field('card15'); ?>" alt="">
                <img class="img-fluid pl-2 pr-2" style="max-width: 300px; max-height: 400px" src="<?php the_field('card16'); ?>" alt="">
                <img class="img-fluid pl-2 pr-2" style="max-width: 300px; max-height: 400px" src="<?php the_field('card17'); ?>" alt="">
                <img class="img-fluid pl-2 pr-2" style="max-width: 300px; max-height: 400px" src="<?php the_field('card18'); ?>" alt="">
            </div>
        </div>
        <!-- Section explication -->
        <div class="row justify-content-center text-center content-desc">
            <h1 class="col-lg-6 title_desc">Qu’est ce qu’une oeuvre orale et immatérielle ?</h1>
            <div class="w-100"></div>
            <p class="col-lg-6 text_desc">
                Le patrimoine oral et immatériel est une distinction créée en 1997 par l’UNESCO afin de promouvoir et de préserver les formes les plus remarquables du patrimoine culturel mondial. Ces évènements, savoirs faires et traditions se transmettent de génération en génération et sont le symbole de la grandeur de l’humanité. Malgré tout, ce patrimoine est extrêmement fragile et de nombreux chefs-d’oeuvre sont menacés : grâce à sa convention internationale, l’UNESCO mobilise pour sauver cet héritage unique.
            </p>
        </div>
        <!-- Map   -->
        <div class="row">
            <div class="img_map col-lg-12" style="background-image:url(<?=the_field('img_map');?>);">
                <div class="row justify-content-center text-center align-items-center h-100">
                    <div class="col-lg-4">
                        <h1>470</h1>
                        <h3>CHEFS-D’OEUVRES</h3>
                    </div>
                    <div class="col-lg-4">
                        <h1>470</h1>
                        <h3>CHEFS D’OEUVRES</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newletter -->
        <div class="row justify-content-center text-center content-desc">
            <h3 class="col-lg-6">SOYEZ INFORMÉ EN PREMIER</h3>
            <div class="w-100"></div>
            <p class="col-lg-6 text_desc">Recevez chaque jour l’oeuvre du jour directement dans votre messagerie.</p>
        </div>


        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="row">
                    <input class="col-sm-8 m-0 rounded-left" type="text" name="firstname" value="" placeholder="Adresse e-mail">
                    <input class="col-sm-4 rounded-right btn_sub" type="submit" value="S'INSCRIRE">
                </div>
            </div>
        </div>
    </div>

    <!-- Voyage -->
    <div class="bg_bois" style="background-image:url(<?=the_field('img_bg_bois');?>);">
        <div class="container-fluid">
            <div class="row">
                <h3 class="col-lg-6 mt-5">À VOTRE TOUR DE VOYAGER !</h3>
                <div class="w-100"></div>
                <p class="col-lg-6">Participez au concours pour tenter de gagner le plus beau des cadeaux de Noël : un voyage pour vivre en grand le chef d’oeuvre de votre pays préféré ! </p>
            </div>
        </div>
        <div class="mt-5 justify-content-end">
            <img src="<?=the_field('img_travel_plane');?>" alt="#" class="img_travel offset-sm-4 col-sm-4">
            <img src="<?=the_field('img_travel_people');?>" alt="#" class="img_travel col-sm-3">
        </div>
        <div class="row justify-content-center">
            <button type="button" class="btn btn_color m-5">JE PARTICIPE</button>
        </div>
    </div>




<?php get_footer(); ?>