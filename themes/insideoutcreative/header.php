<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 

if(get_field('header', 'options')) { the_field('header', 'options'); }

if(get_field('custom_css')) { 
?> 
<style>
<?php the_field('custom_css'); ?>
</style>
<?php }
wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if(get_field('body','options')) { the_field('body','options'); } ?>
<!-- <div class="blank-space"></div> -->
<header class="position-fixed pt-1 pb-1 z-3 w-100" style="top:0;left:0;transition:all .5s ease-in-out;">

<div class="nav">
<div class="container">
<div class="row align-items-center">



<div class="col-lg-4 col-6 text-center">
<a href="<?php echo home_url(); ?>">
<?php 
$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 nav-logo','style'=>'height:62px;max-width:350px;object-fit:contain;transition:all 2s ease-in-out;object-fit:contain;object-position:left;opacity:0;']); 
}
$logoSecondary = get_field('logo_secondary','options'); 
if($logoSecondary){
echo wp_get_attachment_image($logoSecondary['id'],'full',"",['class'=>'position-absolute w-auto nav-logo-secondary','style'=>'max-width:100%;top:0;left:15px;height:62px;object-fit:contain;transition:all 2s ease-in-out;']);
}
?>
</a>
</div>

<div class="col-lg-6 col-md-6 mobile-hidden">
<?php wp_nav_menu(array(
'menu' => 'primary',
'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center mb-0'
)); ?>
</div>

<div class="col-lg-4 col-6 desktop-hidden">
<a id="navToggle" class="nav-toggle">
<div>
<div class="line-1 bg-accent"></div>
<div class="line-2 bg-accent"></div>
<div class="line-3 bg-accent"></div>
</div>
</a>
</div>

<div class="col-lg-2 col-md-12 text-lg-right text-center">
<?php 
echo '<a href="tel:+1' . get_field('phone','options') . '" class="h2 bold text-black">' . get_field('phone','options') . '</a>';
?>
</div>

<div id="navMenuOverlay" class="position-fixed z-2"></div>
<div class="col-md-6 col-10 nav-items bg-white desktop-hidden" id="navItems">

<div class="pt-5 pb-5">
<div class="close-menu">
<div>
<span id="navMenuClose" class="close h1">X</span>
</div>
</div>
<a href="<?php echo home_url(); ?>">
<?php 
$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto','style'=>'max-width:250px;']);
}
?>
</a>
</div>
<?php 
wp_nav_menu(array(
'menu' => 'primary',
'menu_class'=>'menu list-unstyled mb-0'
));
// wp_nav_menu(array(
// 'menu' => 'Right',
// 'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center mb-0'
// ));
// wp_nav_menu(array(
// 'menu' => 'Contact',
// 'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-end mb-0'
// ));

echo '<div class="pt-5"></div>';

echo '<a href="tel:+1' . get_field('phone','options') . '" class="h2 bold text-black">' . get_field('phone','options') . '</a>';

$galleryFooter = get_field('footer_gallery','options');

// if( $galleryFooter ): 
// // echo '<div class="row justify-content-center pb-5">';
// foreach( $galleryFooter as $image ):
// // echo '<div class="col-12 text-center">';
// echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-auto img-portfolio','style'=>'height:75px;object-fit:contain;'] );
// echo '<div class="pb-3"></div>';
// echo '<br>';
// // echo '</div>';
// endforeach; 
// // echo '</div>';
// endif;

?>
</div>
</div>
</div>
</div>

</header>
<?php
echo '<section class="hero position-relative" style="">';
$globalPlaceholderImg = get_field('global_placeholder_image','options');

if(!is_front_page()):
if(is_page()){
if(has_post_thumbnail()){
the_post_thumbnail('full', array('class' => 'w-100 h-100 bg-img position-absolute'));
} else {
echo wp_get_attachment_image($globalPlaceholderImg['id'],'full','',['class'=>'w-100 h-100 bg-img position-absolute']);
}
} else {
echo wp_get_attachment_image($globalPlaceholderImg['id'],'full','',['class'=>'w-100 h-100 bg-img position-absolute']);
}
endif;




if(is_front_page()) {

if(have_rows('header_carousel')): while(have_rows('header_carousel')): the_row();
$gallery = get_sub_field('carousel');
if( $gallery ): 
echo '<div class="position-absolute header-carousel owl-carousel owl-theme w-100 h-100" style="top:0;left:0;">';
foreach( $gallery as $image ):
// echo '<div class="col-lg-3 col-md-4 col-6 col col-portfolio mt-3 mb-3 overflow-h">';
// echo '<div class="position-relative">';
// echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set">';
echo '<div class="h-100">';
echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 h-100 img-portfolio','style'=>'object-fit:cover;'] );
echo '</div>';
// echo '</a>';
// echo '</div>';
// echo '</div>';
endforeach; 
echo '</div>';
endif;
endwhile; endif;

echo '<div class="position-relative text-center d-flex justify-content-center align-items-end z-1 home-hero-height" style="padding-top:80vh;">';
echo '<div class="position-absolute w-100 h-100" style="background: rgb(0,0,0);
background: linear-gradient(0deg, rgba(0,0,0,0) 75%, rgba(255,255,255,1) 95%);top:0;left:0;"></div>';

echo '<div class="position-absolute w-100 h-100" style="background: rgb(0,0,0);
background: linear-gradient(0deg, rgba(0,0,0,.75) 0%, rgba(255,255,255,0) 25%);top:0;left:0;"></div>';

echo '<div class="position-relative" style="">';

echo '<h1 class="text-white" style="font-size:100px;">' . get_the_title() . '</h1>';
echo '</div>';

echo '</div>';
    
//     if(have_rows('header_carousel')):

//         echo '<div class="header-carousel owl-carousel owl-theme">';

// while(have_rows('header_carousel')): the_row();
// $image = get_sub_field('image');
// $title = get_sub_field('title');
// $subtitle = get_sub_field('subtitle');

// echo '<div class="hero-content position-relative text-center" style="padding:100px 0 300px;">';

// echo wp_get_attachment_image($image['id'],'full','',['class'=>'w-100 h-100 position-absolute','style'=>'top:0;left:0;object-fit:cover;']);

// echo '<h2 class="pt-3 pb-3 mb-0 position-relative text-center text-accent-secondary bold h1" style="letter-spacing:0.2em;">' . get_the_title() . '</h2>';


// echo '<div class="pt-2 pr-3 pl-3 pb-2 d-inline-block bg-accent-secondary text-white position-relative" style="">';
// echo '<span>' . $subtitle . '</span>';
// echo '</div>';


// echo '</div>';


// endwhile;

// echo '</div>';

// endif;

}



// if(!is_front_page()) {
// echo '<div class="container pt-5 pb-5 text-white text-center">';
// echo '<div class="row">';
// echo '<div class="col-md-12">';
// if(is_page() || !is_front_page()){
// echo '<h1 class="">' . get_the_title() . '</h1>';
// } elseif(is_single()){
// echo '<h1 class="">' . get_single_post_title() . '</h1>';
// } elseif(is_author()){
// echo '<h1 class="">Author: ' . get_the_author() . '</h1>';
// } elseif(is_tag()){
// echo '<h1 class="">' . get_single_tag_title() . '</h1>';
// } elseif(is_category()){
// echo '<h1 class="">' . get_single_cat_title() . '</h1>';
// } elseif(is_archive()){
// echo '<h1 class="">' . get_archive_title() . '</h1>';
// }
// echo '</div>';
// echo '</div>';
// echo '</div>';
// }

echo '</section>';
?>