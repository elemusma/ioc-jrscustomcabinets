<?php 

get_header();

// start of intro
echo get_template_part('partials/section-about');
// end of intro


// start of services
echo get_template_part('partials/section-services-relationship');
// end of services



// start of bars

if(have_rows('bars_section')): while(have_rows('bars_section')): the_row();
echo '<section class="pt-5 pb-5 position-relative section-bars" style="">';
echo '<div class="container">';
echo '<div class="row justify-content-center">';
echo '<div class="col-md-9 text-center">';
echo get_sub_field('content');
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';

if(have_rows('individual_bars')):
$barsCounter = 0;
echo '<section class="position-relative overflow-h" style="">';

echo '<div class="row" style="">';

while(have_rows('individual_bars')): the_row();

$barsCounter++;

$title = get_sub_field('title');
$ID = sanitize_title_with_dashes($title);
$image = get_sub_field('image');
$imageMobile = get_sub_field('image_mobile');
$icon = get_sub_field('icon');
$innerContent = get_sub_field('inner_content');
$link = get_sub_field('link');
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';


echo '<div class="col-lg col-md-6 text-center w-100 overflow-h position-relative z-2 col-full-background d-flex align-items-end justify-content-center" style="padding-top:400px;padding-bottom:0px;min-height:94vh;" id="col-' . $ID . '">';

if($barsCounter == 1){

    // start of image mobile for first column
    if($imageMobile){
        echo wp_get_attachment_image($imageMobile['id'],'full','',['class'=>'position-absolute d-lg-none d-block w-100 h-100','style'=>'top:0;left:0;object-fit:cover;']);
        echo wp_get_attachment_image($image['id'],'full','',['class'=>'position-absolute d-lg-block d-none h-100 img-full-background','style'=>'top:0;object-fit:cover;min-width:100vw;']);
    } else {
        echo wp_get_attachment_image($image['id'],'full','',['class'=>'position-absolute h-100 img-full-background','style'=>'top:0;object-fit:cover;min-width:100vw;']);
    }
    // end of image mobile for first column

} else {

    if($imageMobile){
        echo wp_get_attachment_image($imageMobile['id'],'full','',['class'=>'position-absolute d-lg-none d-block w-100 h-100','style'=>'top:0;left:0;object-fit:cover;']);
        echo wp_get_attachment_image($image['id'],'full','',['class'=>'position-absolute d-lg-block d-none h-100 img-full-background','style'=>'top:0;object-fit:cover;min-width:100vw;']);
    } else {
        echo wp_get_attachment_image($image['id'],'full','',['class'=>'position-absolute h-100 img-full-background','style'=>'top:0;object-fit:cover;min-width:100vw;']);
    }

}
echo '<div class="position-absolute h-100 bg-black col-full-background-overlay" style="opacity:0;pointer-events:none;top:0;width:110vw;left:-' . ($barsCounter-1) . '00%;"></div>';

echo '<div class="position-absolute w-100 h-100 col-full-background-borders" style="top:0;left:0;border-left:1px solid white;pointer-events:none;"></div>';


echo '<div class="position-relative inner-content-outer" style="transition:all .25s ease-in-out;">';

echo '<a class="" href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '" style="text-decoration:none;">';

echo '<div class="image-title">';
echo '<div class="d-inline-block" style="">';
echo wp_get_attachment_image($icon['id'],'full','',['class'=>'','style'=>'width:35px;height:35px;object-fit:contain;']);
echo '</div>';

echo '<div class="mt-3 mb-3"><span class="h4 text-white">' . $title . '</span></div>';
echo '</div>';

echo '<div class="pl-3 pr-3 text-white inner-content">';
echo $innerContent;
echo '</div>';

echo '</a>';

echo '</div>';
echo '</div>';

endwhile;

echo '</div>';
// echo '</div>';
echo '</section>';
endif;
// end of bars repeaters

endwhile; endif;

// end of bars

echo '<div class="pt-5 pb-3"></div>';

// start of cta row
echo '<section class="bg-accent-secondary pt-4 pb-4 text-center text-white">';
echo '<div style="margin-bottom:-1rem;">';
echo get_field('cta_content');
echo '</div>';
echo '</section>';
// end of cta row


// start of gallery slider
if(have_rows('gallery_slider')): while(have_rows('gallery_slider')): the_row();
$content = get_sub_field('content');
$gallery = get_sub_field('gallery');

echo '<section class="pt-5 pb-5 position-relative">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12 text-center pb-4">';

echo $content;





echo '</div>';
echo '</div>';
echo '</div>';

if( $gallery ):
echo '<div class="gallery-carousel owl-carousel owl-theme">';
foreach( $gallery as $image ):

echo '<div class="">';
echo '<div class="position-relative img-hover w-100 overflow-h">';
echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set-slider">';
echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 image-intro-gallery','style'=>'height:250px;object-fit:cover;']);
echo '</a>';
// echo '<div class="position-absolute w-100 h-100 bg-black" style="pointer-events:none;opacity:.5;mix-blend-mode:multiply;top:0;left:0;"></div>';

// echo '<h3 class="position-absolute w-100 text-center pb-4 text-white h5 bold" style="bottom:0;">' . $image['title'] . '</h3>';
echo '</div>';
echo '</div>';
endforeach; 
echo '</div>';
endif;

echo '</section>';
endwhile; endif;
// end of gallery slider

// echo get_template_part('partials/section-gallery-logos-custom');

// start of contact
echo get_template_part('partials/section-contact');
// end of contact




// how to use new image hover effect
// echo '<div class="col-6 col-intro-gallery col mb-1 p-1 overflow-h">';
// echo '<div class="position-relative img-hover w-100">';
// echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set">';
// echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 image-intro-gallery','style'=>'object-fit:cover;']);
// echo '</a>';
// echo '</div>';
// echo '</div>';

get_footer(); ?>