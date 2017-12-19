<?php
/*
Template Name:  Accueil
*/

get_header()
?>
<div class="container-fluid">
    <h2>Hello, ceci est l'accueil</h2>
    <div class="col-lg-2 sidebar">
        <?php
            if ( dynamic_sidebar('SidebarChef') ) :
            else :
                ?>
        <?php endif; ?>
    </div>
    <div class="row">
        <?php
        $args= array(
            'posts_per_page' => 4,
            'order' => 'ASC',
            'post_type' => 'post',
            'category_name' => 'une'
        );
        $the_query = new WP_Query( $args );
        // The Loop
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                ?>
                <div class="actuality__articles card col-lg-4 col-sm-12">
                    <div class="actuality-thumbnail">
                        <?php
                        if(has_post_thumbnail())
                        {
                            the_post_thumbnail("blog_list_thumbnail");
                        }
                        ?>
                    </div>

                    <div class="card-block">
                        <h1 class="card-title"><?php the_title() ?></h1>
                        <h4 class="card-date"><?php the_time('F jS, Y') ?></h4>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink() ?>" class="card-btn btn ">
                            <p>Lire l'article</p><img src="<?php echo IMAGES_URL?>/arrow-right.svg"></a>
                    </div>
                </div>


                <?php
            }
            /* Restore original Post Data */
            wp_reset_postdata();
        }

    ?>
    </div>
</div>
<div class="container">
    <h2>Les news</h2>
    <div class="row">
        <?php

        $category = get_the_category();
        $cat = $category[0]->cat_name;
        $args= array(
            'posts_per_page' => 10,
            'order' => 'ASC',
            'post_type' => 'post',
            'category_name' => $cat
        );
        $the_query = new WP_Query( $args );
        // The Loop
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                ?>
                <div class="actuality__articles card col-md-4 col-sm-12">
                    <div class="actuality-thumbnail">
                        <?php
                        if(has_post_thumbnail())
                        {
                            the_post_thumbnail("blog_list_thumbnail");
                        }
                        ?>
                    </div>

                    <div class="card-block">
                        <h1 class="card-title"><?php the_title() ?></h1>
                        <h4 class="card-date"><?php the_time('F jS, Y') ?></h4>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink() ?>" class="card-btn btn ">
                            <p>Lire l'article</p><img src="<?php echo IMAGES_URL?>/arrow-right.svg"></a>
                    </div>
                </div>

                <?php
            }
            /* Restore original Post Data */
            wp_reset_postdata();
        }

        ?>
    </div>
</div>
<div class="container-fluid">

</div>
<?php get_footer(); ?>