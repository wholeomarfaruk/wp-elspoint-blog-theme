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