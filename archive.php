<?php
/*=======================================
* Main Template theme Header file include
========================================= */
echo get_header();  ?>

<?php //echo the_content(); 
?>

<!-- Body Area  -->
<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div id="archive_title">
                    <?php the_archive_title('<h1 class="title">','</h1>'); ?>
                    <?php the_archive_description('<div class="description">','</div>'); ?>
                </div>
            <?php get_template_part('template_part/blog_setup'); ?>

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