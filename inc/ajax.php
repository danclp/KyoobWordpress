<?php

add_action( 'wp_ajax_nopriv_load_more_projects', 'load_more_projects' );
add_action( 'wp_ajax_load_more_projects', 'load_more_projects' );

function load_more_projects() { // function is the action in portfolio.js
    
    $paged = $_POST["page"]+1;
    $query = new WP_Query( array(
        'post_type' => 'post',
        'paged' => $paged,
    ) );

    if( $query->have_posts() ) :
        while( $query->have_posts() ) : $query->the_post();
            get_template_part( 'template-parts/content', get_post_type() );
            var_dump(get_post_type);
        endwhile;
    endif;

    wp_reset_postdata();

    die();
}