<?php get_header();
/*
Template Name:  Articles
*/
?>
    <div class="container">
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
    <div class="row pagination">
        <div class="col-sm-12">
            <h2 class="page__navigation">
                <?php wp_pagenavi(); ?>
            </h2>
        </div>
    </div>

<?php get_footer(); ?>