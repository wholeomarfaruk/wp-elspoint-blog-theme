<?php
/**=====================================
 * Blog part for template
 ======================================*/
?>

<div id="blog_area">


    <?php
    // $related_posts = new WP_Query( array(
    //     'posts_per_page'  => get_theme_mod('second_section_featured_post_number'),
    //     'category_name' => get_theme_mod('second_section_featured_post').'',
    //     'no_found_rows' => true,
    // ) );

    // we don't want any output if no posts found. 
    if (have_posts()) :


        while (have_posts()) : the_post();

    ?>
            <div id="blog_post">
                
                    <a href="<?php echo the_permalink(); ?>">
                        <?php
                    
                            echo the_post_thumbnail('post-thumbnails');
                      
                        ?>
                       
                    </a>
                
                <div id="post_details">
                    
                                <?php the_content(); ?>
                      
                </div>
            </div>
    <?php

        endwhile;
    else :
        echo 'No post found in this ' . get_theme_mod('second_section_featured_post') . ' Category.';

    endif;
    ?>
</div>