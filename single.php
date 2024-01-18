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
                


                    <?php the_content();?>
                    <div id="page_nav">
                        <?php if ('elspoint_page_navigate') {
                            elspoint_page_navigate();
                        } else { ?>
                            <?php next_post_link(); ?>
                            <?php previous_post_link(); ?>
                        <?php }; ?>
                    </div>
            </div>
            <div class="col-md-3">
               <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>




<?php 
/*=======================================
* Main Template theme Footer file include
========================================= */
echo get_footer(); ?>