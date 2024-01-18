<?php
/*=======================================
* Main Template theme Header file include
========================================= */
 echo get_header();  ?>

<?php //echo the_content(); ?>

<!-- Body Area  -->
<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div id="blog_area">

                        
                    <?php 
                        $related_posts = new WP_Query( array(
                            'posts_per_page'  => get_theme_mod('second_section_featured_post_number'),
                            'category_name' => get_theme_mod('second_section_featured_post').'',
                            'no_found_rows' => true,
                        ) );
                        
                        // we don't want any output if no posts found. 
                        if ( $related_posts->have_posts() ) : 
                        
                                    
                            while ( $related_posts->have_posts() ) : $related_posts->the_post();                   

                        ?>
                        <div id="blog_post">
                            <div id="post_thumnbnail">
                                <a href="<?php echo the_permalink(); ?>">
                                <?php echo the_post_thumbnail( 'post-thumbnails' ); ?>
                                </a>
                            </div>
                            <div id="post_details">
                                <div id="short_details">
                                <span class="post_h_text_1"><?php echo get_theme_mod( 'second_section_featured_post' ) ?></span>
                                    <span class="post_h_text_2">5min read</span>
                                </div>
                                <div id="full_details">
                                    <a href="<?php echo the_permalink(); ?>"><h2 class="post_title"><?php echo the_title();?></h2></a>
                                    
                                    <div class="highlight_text">
                                        <p>
                                            <?php the_excerpt( ); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            
                            endwhile;
                    else :
                        echo 'No post found in this '.get_theme_mod( 'second_section_featured_post' ).' Category.' ;
                    
                        endif;
                        ?>
                    </div>
                    
            </div>
            <div class="col-md-3">
                <h5>Side bar</h5>
            </div>
        </div>
    </div>
</section>




<?php 
/*=======================================
* Main Template theme Footer file include
========================================= */
echo get_footer(); ?>