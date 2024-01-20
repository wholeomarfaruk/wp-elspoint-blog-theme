<?php
/*=======================================
* Main Template theme Header file include
========================================= */
echo get_header();  ?>

<?php //echo the_content(); 
?>

<!-- Body Area  -->
<section id="body_area" class="error_404_page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="error_content">
                    <p>This is  404 page.</p>
                    <h1>Oops! Looks Like Something was Wrong</h1>
                    <div class="error_search">
                        <?php echo get_search_form();?>
                    </div>
                    <a href="<?php echo get_home_url(); ?>" class="home_page_btn">Home</a>
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