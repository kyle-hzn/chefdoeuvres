<?php get_header();
/*
 * Template Name: Featured Article
 * Template Post Type: post, page, product
 */

?>

<div class="container">
    <div class="col-lg-5 col-md-12">
        <div id="waveform">
            <div class="btn btn-primary play">Play/pause</div>
        </div>
    </div>
</div>
<div class="container">

    <?php
    // boucle WordPress
    if (have_posts()){
        while (have_posts()){
        the_post();
        ?>
        <!--IMAGE INTRO-->
        <div class="img-fluid thumbnail">
                <?php
                if(has_post_thumbnail())
                {
                    the_post_thumbnail();
                    
                }
                ?>
        </div>
        <div class="container">
    
        <!--ARTICLE-->
            <div class="article-content row">
                <div class="col-md-12">
                    <h1 class="article-title"><?php the_title(); ?></h1>
                    <p class="article-text"><?php the_content(); ?></p>
                    <h4 class="article-date">Publié le <?php the_time('F jS, Y') ?></h4>
                </div>
            </div>
            
        </div>
        
        <?php
        }
    }
    else {
        ?>
        Nous n'avons pas trouvé d'article répondant à votre recherche
        <?php
    }
    ?>


</div><!-- /content -->
<div class="container-fluid pl-0 pr-0">
    <div id="arrow"></div>
    <div class="item-slider">
        <img class="img-fluid pl-2 pr-2" style="max-width: 900px; max-height: 500px" src="<?php the_field('slide-image-1'); ?>" alt="">
        <img class="img-fluid pl-2 pr-2" style="max-width: 900px; max-height: 500px" src="<?php the_field('slide-image-2'); ?>" alt="">
        <img class="img-fluid pl-2 pr-2" style="max-width: 900px; max-height: 500px" src="<?php the_field('slide-image-3'); ?>" alt="">
        <img class="img-fluid pl-2 pr-2" style="max-width: 900px; max-height: 500px" src="<?php the_field('slide-image-4'); ?>" alt="">
        <img class="img-fluid pl-2 pr-2" style="max-width: 900px; max-height: 500px" src="<?php the_field('slide-image-5'); ?>" alt="">
    </div>
</div>


<?php get_footer(); //appel du template footer.php ?>