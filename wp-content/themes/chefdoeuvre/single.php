<?php get_header();
/*
 * Template Name: Featured Article
 * Template Post Type: post, page, product
 */

?>


<!-- Start video hero -->
<div class="video-hero jquery-background-video-wrapper demo-video-wrapper">
    <video class="jquery-background-video" autoplay muted loop src="<?php the_field('video_oruro'); ?>">
    </video>
    <div class="page-width"></div>
</div>
<!-- End video hero -->




<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-md-10 m-auto article__hero">
            <h1>Le carnaval d'Oruro</h1>
            <p class="m-auto col-lg-10">Chaque année en février, juste avant l’entrée dans le carême, cette ville minière Bolivienne sort de sa torpeur pour accueillir le plus grand évènement du pays. Ce spectacle intense qui incarne la foi des boliviens voit se mêler croyances païennes et chrétiennes, folklore et danses endiablées. </p>
        </div>
    </div>
</div>

<div class="container-fluid article__about">
    <div class="row">
        <div class="col-lg-6 article__bolivie">
            <img class="img-fluid" src=<?php echo IMAGES_URL?>/map_bolivie.png" alt="carte_bolivie">
            <h2>LA BOLIVIE</h2>
            <ul>
                <li>CAPITALE : SUCRE</li>
                <li>NOMBRE D'HABITANTS : 10 MILLIONS</li>
                <li>DEVISE : BOLIVIANO</li>
                <li>LANGUES : ESPAGNOL, AYMARA ET QUECHA</li>
            </ul>
        </div>
        <div class="col-lg-6 article__bolivieImage" style="background-image: url(<?php the_field('article_bolivieImage'); ?>);"></div>
    </div>
</div>

<div class="container article__origins">
    <h2 class="article__originsTitle">ORIGINES</h2>
    <h1 class="article__originsTitleh1">Une célébration ancrée <br> dans la tradition bolivienne</h1>
    <div class="col-lg-12 article__timeline" style="background-image: url(<?php the_field('timeline'); ?>);">
        <div class="col-lg-4 article__timelineOne">
            <h2>2500 av. JC</h2>
            <p>Le peuple andin Uru pratique des danses et des rituels pour rendre hommage à leurs divinités, la terre mère Pachamama et l’oncle Dieu des montagnes, le Tio Supay.</p>
        </div>
        <div class="ml-auto col-lg-4 article__timelineTwo">
            <h2>XVIIème siècle</h2>
            <p>L’arrivée des Espagnols provoque l'asservissement et l’évangélisation des peuples andins. Leurs croyances sont assimilées aux figures chrétiennes et les cérémonies pratiquées en secret.</p>
        </div>
        <div class="col-lg-4 article__timelineThree">
            <h2>XVIIIème siècle</h2>
            <p>Le peuple andin Uru pratique des danses et des rituels pour rendre hommage à leurs divinités, la terre mère Pachamama et l’oncle Dieu des montagnes, le Tio Supay. </p>
        </div>
        <div class="ml-auto col-lg-4 article__timelineFour">
            <h2>Aujourd’hui</h2>
            <p>Le carnaval est un mélange de ces croyances : La Pachamama se confond à présent avec la vierge du Socavón tandis que le Dieu de la montagne, le redouté et vénéré Tio Supay, est devenu un diable.</p>
        </div>
    </div>
</div>
<div class="col-10 article__timelineMobile" style="background-image: url(<?php the_field('timeline_mobile'); ?>);">
    <div class="col-12 article__timelineOneMobile">
        <h2>2500 av. JC</h2>
        <p>Le peuple andin Uru pratique des danses et des rituels pour rendre hommage à leurs divinités, la terre mère Pachamama et l’oncle Dieu des montagnes, le Tio Supay.</p>
    </div>
    <div class="col-12 article__timelineTwoMobile pt-3 pb-3">
        <h2>XVIIème siècle</h2>
        <p>L’arrivée des Espagnols provoque l'asservissement et l’évangélisation des peuples andins. Leurs croyances sont assimilées aux figures chrétiennes et les cérémonies pratiquées en secret.</p>
    </div>
    <div class="col-12 article__timelineThreeMobile">
        <h2>XVIIIème siècle</h2>
        <p>Le peuple andin Uru pratique des danses et des rituels pour rendre hommage à leurs divinités, la terre mère Pachamama et l’oncle Dieu des montagnes, le Tio Supay. </p>
    </div>
    <div class="col-12 article__timelineFourMobile pt-3">
        <h2>Aujourd’hui</h2>
        <p>Le carnaval est un mélange de ces croyances : La Pachamama se confond à présent avec la vierge du Socavón tandis que le Dieu de la montagne, le redouté et vénéré Tio Supay, est devenu un diable.</p>
    </div>
</div>

<div class="container-fluid pl-0 pr-0">
    <div id="arrow"></div>
    <div class="item-slider">
        <img class="img-fluid pl-2 pr-2" style="max-width: 900px; max-height: 500px" src="<?php the_field('slide-image-1'); ?>" alt="">
        <img class="img-fluid pl-2 pr-2" style="max-width: 900px; max-height: 500px" src="<?php the_field('slide-image-2'); ?>" alt="">
        <img class="img-fluid pl-2 pr-2" style="max-width: 900px; max-height: 500px" src="<?php the_field('slide-image-4'); ?>" alt="">
        <img class="img-fluid pl-2 pr-2" style="max-width: 900px; max-height: 500px" src="<?php the_field('slide-image-5'); ?>" alt="">
        <img class="img-fluid pl-2 pr-2" style="max-width: 900px; max-height: 500px" src="<?php the_field('slide-image-6'); ?>" alt="">
        <img class="img-fluid pl-2 pr-2" style="max-width: 900px; max-height: 500px" src="<?php the_field('slide-image-7'); ?>" alt="">
    </div>
</div>

<div class="container-fluid article__quote mt-lg-5">
    <div class="col-md-8 m-auto article__quoteText">
        <h3 class="pt-5 pb-5">
            Les danseurs et musiciens, vêtus d’étonnants costumes très colorés et particulièrement imposants, défilent pendant plus de 20 heures sans interruption sur un parcours de 4km.
        </h3>
        <div class="article__quoteLine m-auto"></div>
    </div>
</div>

<div class="container-fluid article__deroulement">
    <div class="ml-lg-auto col-lg-8">
        <img class="img-fluid article__deroulementOne mt-5" src=<?php echo IMAGES_URL?>/carnaval.png" alt="carnaval-photo">
    </div>
    <div class="col-lg-4 offset-lg-2">
        <img class="img-fluid article__deroulementTwo" src=<?php echo IMAGES_URL?>/carnaval2.png" alt="carnaval-photo">
    </div>
</div>
<div class="container-fluid">
    <div class="offset-lg-6 col-lg-6 article__sixd pt-5">
        <h3 class="h3anim">
            DÉROULEMENT
        </h3>
        <h2 class="h2anim">
            Six jours de folklore et de célébration
        </h2>
        <p class="panim">
            Tous les ans, pendant six jours, ce carnaval donne lieu au déploiement de tout un éventail d’arts populaires s’exprimant à travers les masques, textiles et broderies.
            <br><br>
            Les évènements commencent par une procession impressionnante dans la ville au cours de laquelle les 48 troupes déploient toute leur énergie pour mettre en valeur leurs costumes colorés. Les participants jouent également des pièces de théâtre rappelant les mystères médiévaux et achèvent le défilé à genoux aux pieds de la représentation de la Virgen del socavón, qui trône dans la cathédrale qui domine Oruro.
        </p>
    </div>
</div>
<div class="container-fluid article__stats pb-5">
    <div class="row article__statsElements">
        <div class="col-lg-4">
            <h2>
                28 000
            </h2>
            <h3>
                DANSEURS
            </h3>
        </div>
        <div class="col-lg-4">
            <h2>
                10 000
            </h2>
            <h3>
                MUSICIENS
            </h3>
        </div>
        <div class="col-lg-4">
            <h2>
                300 000
            </h2>
            <h3>
                SPECTATEURS
            </h3>
        </div>
    </div>
</div>
<div class="container-fluid black__section">
    <div class="row">
        <div class="col-lg-5 offset-lg-1 article__blackWrap1">
            <img src=<?php echo IMAGES_URL?>/carnaval3.png" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 article__bwtext">
            <h2>
                La llamerada
            </h2>
            <p>
                Musique des éleveurs de lamas de l’Altiplano, où on entend les sifflements et le bruit de la fronte fendant l’air que les bergers utilisent pour attirer les troupeaux.
            </p>
            <div class="pl-lg-0 col-lg-12 col-md-12">
                <div id="waveform">
                    <div class="play player"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 offset-lg-3 article__blackWrap2">
            <img src=<?php echo IMAGES_URL?>/tissu.png" alt="" class="img-fluid">
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 offset-lg-1 article__bwtext2">
                <h3 class="h3anim2">DANSES</h3>
                <h2 class="h2anim2">
                    Les emblématique  Morenada et Diablada
                </h2>
                <p class="pl-5 panim2">
                    La Diablada est une danse spectaculaire dans laquelle des diables terrifiants et des anges armés d’épées s’affrontent dans une lutte entre le bien et le mal.   La Morenada évoque l’histoire esclavagiste du pays et rend hommage aux travailleurs de la mine d’argent de la ville.
                </p>
            </div>
            <div class="col-lg-4">
                <div class="article__blackWrap3">
                    <img src=<?php echo IMAGES_URL?>/mask1.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="offset-lg-6 col-lg-6 article__bwvideo1 embed-container">
                <video loop muted autoplay src="<?php the_field('video1'); ?>"></video>
            </div>
            <div class="offset-lg-1 col-lg-6 article__bwvideo2">
                <video loop muted autoplay src="<?php the_field('video2'); ?>"></video>
            </div>
        </div>
    </div>
    <div class="container-fluid pb-5">
        <div class="row">
            <div class="col-lg-6 offset-lg-1 article__bwtext2">
                <h3 class="h3anim">MASQUES</h3>
                <h2 class="h2anim">
                    Sur les pas des  masques boliviens
                </h2>
                <p class="pl-5 panim">
                    Le masque, dont l’achat représente souvent des mois de salaire, est un aspect crucial de chaque chorégraphie : ces visages déformés fabriqués à partir de paille, de feuilles ou encore de papier mâchés sont d’une laideur et d’un niveau de détail qui tient du sublime.
                </p>
            </div>
            <div class="col-lg-4">
                <div class="article__mask">
                    <img src=<?php echo IMAGES_URL?>/mask2.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <br><br>
</div>
<div class="container-fluid article__quote2">
    <div class="col-md-8 m-auto article__quoteText">
        <h3>
            Le faste de cet évènement contraste avec l’extrême pauvreté de cette région minière et industrielle en crise. Les participants viennent de toutes les régions pour refléter une pluriculturalité menacée par l’exode rural et l’urbanisation.
        </h3>
        <div class="article__quoteLine m-auto"></div>
    </div>
</div>
<div class="container-fluid article__concours" style="background-image: url(<?php the_field('background_blue'); ?>);">
    <div class="row">
        <div class="col-lg-6 pb-5">
            <h3>
                ENVIE DE PROLONGER LE VOYAGE ?
            </h3>
            <p class="article__share1">
                Partage ton expérience en Bolivie
            </p>
            <h3 class="article__share2">
                #imavoyage
            </h3>
            <p class="article__share3">
                Les plus belles photos seront partagées dans les stories de notre compte Instagram et Snapchat @imaUNESCO
            </p>
            <div class="offset-lg-2 col-lg-4 article__iphoneMobile d-lg-none d-md-block d-sm-block">
                <img src=<?php echo IMAGES_URL?>/iphoneCarnaval.png" alt="iphoneCarnaval" class="img-fluid">
            </div>
            <div class="col-lg-12 article__compCard">
                <img src=<?php echo IMAGES_URL?>/concours.png" alt="concours-texte" class="img-fluid">
                <p>
                    Participe au concours pour tenter de remporter un voyage hors du commun à la découverte du carnaval d’Oruro.
                </p>
                <button type="button" class="btn btn_color">JE PARTICIPE</button>
            </div>
        </div>
        <div class="offset-lg-2 col-lg-4 article__iphone d-lg-block d-md-none d-sm-none">
            <img src=<?php echo IMAGES_URL?>/iphoneCarnaval.png" alt="iphoneCarnaval" class="img-fluid">
        </div>
    </div>
</div>

    <script type="javascript">
        var wavesurfer = WaveSurfer.create({
            container: '#waveform',
            waveColor: '#3498DB',
            progressColor: '#21618C',
            barWidth: '2'
        });

        wavesurfer.load('/chefdoeuvres/wp-content/themes/chefdoeuvre/assets/llamerada.mp3');
        // wavesurfer.on('ready', function () {
        //     wavesurfer.play();
        // });

        var play = document.querySelector('.play');

        var play_pause = function () {
            wavesurfer.playPause()
        }

        play.addEventListener('click', play_pause);

        $('.player').on('click', function(){
            $(this).toggleClass('paused');
        });
    </script>

<?php get_footer(); //appel du template footer.php ?>