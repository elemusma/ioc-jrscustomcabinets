<?php

// start of gallery logos custom
if(have_rows('technology_content')): while(have_rows('technology_content')): the_row();
$gallery = get_sub_field('gallery');

echo '<section class="pt-5 pb-5 position-relative">';
echo '<div class="container">';
echo '<div class="row justify-content-center">';
echo '<div class="col-md-7 text-center">';

echo get_sub_field('content');

echo '</div>';
echo '</div>';

if( $gallery ): 
echo '<div class="row justify-content-center">';
foreach( $gallery as $image ):
echo '<div class="col-lg col-md-4 col-6 text-center mt-5 mb-5" style="min-width: 20%;">';
// echo '<div class="position-relative">';
// echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set">';
echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 img-portfolio','style'=>'height:75px;object-fit:contain;'] );
// echo '</a>';
// echo '</div>';
echo '</div>';
endforeach; 
echo '</div>';
endif;

echo '</div>';
echo '</section>';
endwhile; endif;
// end of gallery logos custom

?>