<?php
/**
 * @package Okinawa
 */
get_header();
?>

<?php





$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'wiedza',
    'posts_per_page' => 5,
    'paged' => get_query_var('paged')
);
$arr_posts = new WP_Query( $args );
  ?>

<section class="blog">
    <div class="container">
    <div class="blog__btns">
    <a href="/kategoria/wszystko" class="blog__btn">Wszystko</a>
    <a href="/kategoria/wiedza" class="blog__btn">Wiedza</a>
    <a href="/kategoria/przepisy" class="blog__btn">Przepisy</a>
    <a href="/kategoria/szkolenia" class="blog__btn">Szkolenia</a>
</div>

        <div class="blog__posts">

        
            <?php
            if ( $arr_posts->have_posts() ) :
                
                while ( $arr_posts->have_posts() ) :
                    $arr_posts->the_post();
                    ?>
                    <a class="blog__post"  id="post-<?php the_ID(); ?>" href="<?php the_permalink(); ?>">
                        <div class="blog__post-img">
                            <?php
                        if ( has_post_thumbnail() ) :
                            the_post_thumbnail();
                        endif;
                        ?>
                        </div>
                        
                        
                        <div class="blog__post-content">
                            <h4 class="blog__post-title">
                                <?php 
                        $title = get_the_title(); 
                        $getlength = strlen($title);
                        $thelength = 100;
                        echo substr($title, 0, $thelength);
                        if ($getlength > $thelength) echo "...";?>
                        </h4>
                        <p class="blog__post-description">
                            
                        
                        <?php 
                        $excerpt = get_the_excerpt();
                        $getlengthexcerpt = strlen($excerpt);
                        $thelengthexecpt = 70;
                        echo substr($excerpt, 0, $thelengthexecpt);
                        if ($getlengthexcerpt > $thelengthexecpt) echo "...";?>
                        
                       </p>
                       <div class="blog__post-meta">
                       <p class="blog__post-tags"> <?php
                            error_reporting(0);
                        $output = array();
                        $gotTags = get_the_tags();
                        foreach($gotTags as $tag)
                            $output[] = $tag->name;
                        
                        echo implode(', ', $output);?>
                        </p>
                        <p class="blog__post-date"> <?php echo get_the_date(); ?></p>
                       </div>
                       
                     
                   </div>
                   
                   
                </a>
                
               
                
                
                <?php endwhile; ?>
                
                
                <?php else : ?>
                    <p><?php _e( 'Brak postów do wyświetlenia' ); ?></p>
                    <?php endif; ?>
                    
                    <?php wp_reset_postdata(); ?>
        </div>
       <div class="blog__pagination">
       <?php wp_pagenavi( array( 'query' => $arr_posts ) ); ?>
       </div>

        </div>
    </section>




<?php
get_footer()
?>