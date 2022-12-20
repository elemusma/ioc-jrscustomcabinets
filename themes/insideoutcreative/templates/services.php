<?php
/**
 * Template Name: Services
 */
get_header(); 

echo get_template_part('partials/section-services-relationship');

// // start of services
// if(have_rows('services_content')): while(have_rows('services_content')): the_row();
// $bgImg = get_sub_field('background_image');
// $content = get_sub_field('content');
// $relationship = get_sub_field('relationship');

// if($bgImg){
//     echo '<section class="pt-5 pb-5 position-relative bg-attachment" style="background:url(' . wp_get_attachment_image_url($bgImg['id'],'full') . ');background-size:cover;background-attachment:fixed;">';
//     // echo '</section>';
// } else {
//     echo '<section class="pt-5 pb-5 position-relative bg-attachment bg-accent-quaternary" style="">';
// }

// echo '<div class="position-relative pt-5 pb-5">';
// echo '<div class="position-absolute w-100 h-100 bg-accent-secondary" style="mix-blend-mode:screen;opacity:.62;top:0;left:0;pointer-events:none;"></div>';
// echo '<div class="container-fluid">';
// echo '<div class="row justify-content-center">';
// echo '<div class="col-lg-10 text-center text-white pb-5">';

// echo $content;

// echo '</div>';
// echo '</div>';


// if( $relationship ):
//     echo '<div class="row justify-content-center">';
//     $counter = 0;
// foreach( $relationship as $post ): 
// // Setup this post for WP functions (variable must be named $post).
// setup_postdata($post);
// $counter++;

// echo '<a href="' . get_the_permalink() . '" class="col-lg-4 col-md-6 text-center pl-1 pr-1 pt-2 col-services">';
// // echo '<span class="col-lg col-md-6 text-center pl-1 pr-1 pt-2 col-services" style="">';
// echo '<div class="position-relative overflow-h h-100 d-flex align-items-center justify-content-center" style="padding-top:150px;padding-bottom:150px;">';
// echo '<div>';
// the_post_thumbnail('full',array('class'=>'w-100 h-100 position-absolute','style'=>'top:0;left:0;object-fit:cover;'));
// echo '<div class="position-absolute w-100 h-100 bg-black col-services-overlay" style="top:0;left:0;opacity:.45;"></div>';

// echo '<div class="position-relative pl-4 pr-4 d-inline-block">';
// echo '<div class="position-absolute w-100 h-100 bg-accent-tertiary" style="top:0;left:0;mix-blend-mode:multiply;"></div>';
// echo '<h6 class="position-relative mb-0 text-white pt-2 pb-2">' . get_the_title() . '</h6>';
// echo '</div>';

// echo '</div>';

// echo '</div>';
// echo '</a>';

// // echo '<div class="col-md-4 text-white mb-4">';
// // echo '<div class="position-relative pt-4 pr-4 pl-4 h-100 d-flex align-items-end col-services" style="background:rgba(0,0,0,.45);">';

// // echo '<a href="' . get_the_permalink() . '" class="position-absolute w-100 h-100 bg-accent-secondary d-flex align-items-center justify-content-center z-2 col-services-link" style="top:0;left:0;border:4px solid var(--accent-quaternary);opacity:0;pointer-events:none;text-decoration:none;">';

// // echo '<h6 class="mb-0 bold" style="">' . get_the_title() . '</h6>';

// // echo '</a>';

// // echo '<div class="w-100">';
// // echo '<span class="h1 pb-5 d-inline-block">' . str_pad($counter, 2, '0', STR_PAD_LEFT) . '</span>';

// // echo '<div class="row align-items-baseline">';
// // echo '<div class="col-md-2 pb-lg-0 pb-3 text-white">';

// // echo '<div class="" style="border:1px solid var(--accent-tertiary);border-radius:50%;width: 35px;height: 35px;display: flex;align-items: center;justify-content: center;">';
// // echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width:15px;" fill="white"><path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/></svg>';
// // echo '</div>';

// // echo '</div>';

// // echo '<div class="col-lg-5 text-white">';
// // echo '<h6 class="mb-0 pb-4" style="border-bottom:10px solid var(--accent-primary);"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h6>';
// // echo '</div>';
// // echo '</div>';

// // echo '</div>';
// // echo '</div>';
// // echo '</div>';
// endforeach;
// // Reset the global post object so that the rest of the page works correctly.
// wp_reset_postdata(); 
// echo '</div>';
// endif;


// echo '</div>';
// echo '</div>';
// echo '</section>';
// endwhile; endif;
// end of services

get_footer(); ?>