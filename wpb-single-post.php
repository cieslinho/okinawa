<?php
/*
 * Template Name: Without cover img
 * Template Post Type: post, page, product
 */
   
 get_header();  ?>



<section class="article">
    <?php while ( have_posts() ) : the_post();
		?>
    <div class="container">
        <div class="article__boxes">
            <article class="article__main">
                <div class="article__top">
                    <h2 class="article__title">
                        <?php the_title(); ?>
                    </h2>
                    <div class="article__top-info">

                        <p class="article__author">
                            <?php the_author(); ?>
                        </p>
                        <p class="article__date">
                            <?php the_date(); ?>
                        </p>

                    </div>
                    <!-- <img class="article__thumbnail" src="<?php the_post_thumbnail_url(); ?>"> -->

                </div>

                <div class="article__content">
                    <?php the_content(); ?>
                </div>
                <?php
        endwhile;
        ?>
            </article>
            <div class="article__sidebar">


                <div class="article__btns">
                    <p class="article__category">Kategorie:</p>
                    <a href="/kategoria/wszystko" class="article__btn">Wszystko</a>
                    <a href="/kategoria/wiedza" class="article__btn">Wiedza</a>
                    <a href="/kategoria/przepisy" class="article__btn">Przepisy</a>
                    <a href="/kategoria/szkolenia" class="article__btn">Szkolenia</a>
                </div>
                <div class="article__recents">
                    <p class="article__recents-title">Podobne Posty:</p>
                    <?php
                $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'wszystko',
                'posts_per_page' => 5,
                'paged' => get_query_var('paged')
                );
                $arr_posts = new WP_Query( $args );
                ?>


                    <?php
                if ( $arr_posts->have_posts() ) :
                    
                    while ( $arr_posts->have_posts() ) :
                        $arr_posts->the_post();
                        ?>
                    <a class="article__recent" id="post-<?php the_ID(); ?>" href="<?php the_permalink(); ?>">
                        <div class="article__recent-img">
                            <?php
                            if ( has_post_thumbnail() ) :
                                the_post_thumbnail();
                            endif;
                            ?>
                        </div>


                        <div class="article__recent-content">
                            <h4 class="article__recent-title">
                                <?php 
                            $title = get_the_title(); 
                            $getlength = strlen($title);
                            $thelength = 100;
                            echo substr($title, 0, $thelength);
                            if ($getlength > $thelength) echo "...";?>
                            </h4>



                            <p class="article__recent-date">
                                <?php echo get_the_date(); ?>
                            </p>

                        </div>



                    </a>





                    <?php endwhile; ?>


                    <?php else : ?>
                    <p>
                        <?php _e( 'Brak postów do wyświetlenia' ); ?>
                    </p>
                    <?php endif; ?>

                </div>
            </div>

        </div>
    </div>
</section>

<?php
get_footer();
?>