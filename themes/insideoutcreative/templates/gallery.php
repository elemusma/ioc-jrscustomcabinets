<?php

/**
 * Template Name: Gallery
 */

get_header();

if(have_rows('gallery_page')): while(have_rows('gallery_page')): the_row();

if(have_rows('galleries')):
echo '<section class="pt-5 pb-5">';
    echo '<div class="container">';
    echo '<div class="row">';
    $mainGalleriesCounter=0;
    while(have_rows('galleries')): the_row();
    $mainGalleriesCounter++;
        echo '<div class="col-md-12 pt-5">';

            echo '<h2>' . get_sub_field('title') . '</h2>';
            if(get_sub_field('content')):
                echo get_sub_field('content');
            endif;

            $gallery = get_sub_field('gallery');

            if( $gallery ): 
                echo '<div class="gallery-carousel owl-carousel owl-theme">';
                $subGalleryCounter=0;
                foreach( $gallery as $image ):
                    $subGalleryCounter++;
                    // echo '<div class="col-lg-3 col-md-4 col-6 col col-portfolio mt-3 mb-3 overflow-h">';
                    echo '<div class="position-relative img-hover overflow-h">';
                    echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set-' . $mainGalleriesCounter . '" data-title="' . $image['title'] . '">';
                    echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100','style'=>'height:350px;object-fit:cover;'] );
                    echo '</a>';
                    echo '</div>';
                    // echo '</div>';
                endforeach; 
                echo '</div>';
            endif;

        echo '</div>';
    endwhile;
    echo '</div>';
    echo '</div>';
    echo '</section>';
endif;

endwhile; endif;

if(get_the_content()){

    echo '<section class="pt-5 pb-5">';
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-md-12">';
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
    endwhile; else:
    echo '<p>Sorry, no posts matched your criteria.</p>';
    endif;
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</section>';
    
    }

get_footer();

?>