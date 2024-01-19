<?php
/*=======================================
* Main Template theme Header file include
========================================= */
echo get_header();  ?>

<?php //echo the_content(); 
?>

<!-- Body Area  -->
<section id="body_area" class="page_page">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
            <?php get_template_part('template_part/post_setup'); ?>
            <div id="comments_area">
                <?php comments_template();?>
            </div>

            </div>

            <div class="col-md-3">
                <div id="sidebar_area">
                    <?php get_sidebar(); ?>
                </div>
               
            </div>
        </div>
    </div>
</section>




<?php
/*=======================================
* Main Template theme Footer file include
========================================= */
echo get_footer(); ?>