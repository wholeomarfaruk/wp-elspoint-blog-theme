<?php
/* ===============================
* WP Default functions 
==================================*/
//add theme title
add_theme_support('title-tag');

//post thumbnail
add_theme_support( 'post-thumbnails', array('page', 'post') );

//Excerp function 
function elspoint_excert_more($more){
    return '<a class="read_more" href="'.get_permalink().'">Read More</a>';
}
add_filter('excerpt_more','elspoint_excert_more');

function elspoint_excerpt_length($length){
    return 20;
}
add_filter('excerpt_length','elspoint_excerpt_length',99999);

// page navigation
function elspoint_page_navigate(){
    global $wp_query, $wp_rewrite;
    $pages='';
    $max= $wp_query->max_num_pages;
    if(!($current = get_query_var('paged'))) $current = 1;
    $args['base']= str_replace('9999999999','%#%',get_pagenum_link(9999999999));
    $args['total']=$max;
    $args['current']=$current;
    $total = 1;
    $args['prev_text']='Prev';
    $args['next_text']='Next';
    if($max>1) echo '</pre><div class="wp_pagenav"';
        if($total == 1 && $max>1) $pages  = '<p class="pages">'.$current.' <span> Of </span>'.$max.'</p>';
        echo $pages . paginate_links($args);
        if($max>1) echo '</div></pre>';

}