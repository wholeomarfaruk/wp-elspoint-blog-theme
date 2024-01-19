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
                <div id="post_thumnbnail">
                    <a href="<?php echo the_permalink(); ?>">
                        <?php
                        if (has_post_thumbnail()) {
                            echo the_post_thumbnail('post-thumbnails');
                        } else { ?>
                            <img src="<?php echo get_theme_mod('default_no_img'); ?>" alt="No Image Found" />
                        <?php
                        }
                        ?>
                        <?php  ?>
                    </a>
                </div>
                <div id="post_details">
                    <div id="short_details">
                        <span class="post_h_text_1"><?php echo the_category(); ?></span>
                        <span class="post_h_text_2">5min read</span>
                    </div>
                    <div id="full_details">
                        <a href="<?php echo the_permalink(); ?>">
                            <h2 class="post_title"><?php echo the_title(); ?></h2>
                        </a>

                        <div class="highlight_text">
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    <?php

        endwhile;
    else :
        echo 'No post found in this ' . get_theme_mod('second_section_featured_post') . ' Category.';

    endif;
    ?>
    <div id="page_nav">
        <?php if ('elspoint_page_navigate') {
            elspoint_page_navigate();
        } else { ?>
            <?php next_post_link(); ?>
            <?php previous_post_link(); ?>
        <?php }; ?>
    </div>
</div>