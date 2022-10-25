<?php
// start of intro
if(have_rows('about_tabs')): while(have_rows('about_tabs')): the_row();

echo '<section class="position-relative overflow-h" style="padding:75px 0;">';


// echo '<div class="position-absolute w-100 d-block" style="background:#e1e9ef;height:73%;top:14%;"></div>';



echo '<div class="container position-relative z-1">';
echo '<div class="row justify-content-center position-relative pt-4 pb-4">';
// echo '<div class="position-absolute h-100 bg-accent" style="width:60%;top:0;right:0;"></div>';
// echo '<div class="position-absolute bg-accent-tertiary" style="height:90%;width:60%;opacity:.25;top:5%;left:0;"></div>';
// echo '<div class="position-absolute bg-accent-secondary" style="height:90%;width:20px;opacity:.85;top:5%;right:-20px;"></div>';

if(have_rows('tabs')):
echo '<div class="col-md-3 d-flex flex-wrap">';
echo '<div class="w-100 pt-md-5">';
$contentCounter = 0;
while(have_rows('tabs')): the_row();
$contentCounter++;
$title = get_sub_field('title');
$ID = sanitize_title_with_dashes($title);


if($contentCounter == 1){
    echo '<span class="d-block text-black pl-3 pt-1 pb-1 mb-2 links-intro links-intro-active" style="" id="link-' . $ID . '">' . $title . '<span class="links-intro-plus-sign ml-3 bold">+</span></span>';
} else {
    echo '<span class="d-block text-black pl-3 pt-1 pb-1 mb-2 links-intro" style="" id="link-' . $ID . '">' . $title . '<span class="links-intro-plus-sign ml-3 bold">+</span></span>';
}



endwhile;
echo '</div>';
echo '</div>';
endif;

if(have_rows('tabs')):
echo '<div class="col-md-6 pt-md-0 pt-4">';

echo wp_get_attachment_image(48,'full','',['class'=>'h-auto','style'=>'width:200px;']);
echo '<div class="position-relative h4 text-gray thin">';
$contentCounter = 0;
while(have_rows('tabs')): the_row();
$contentCounter++;
$title = get_sub_field('title');
$ID = sanitize_title_with_dashes($title);
$contentSlider = get_sub_field('content_or_slider');
$content = get_sub_field('content');


if($contentCounter == 1){
    echo '<div class="position-absolute w-100 h-100 tab-content-active" style="top:0;left:0;opacity:0;pointer-events:none;transition:all .15s ease-in-out;" id="content-' . $ID . '">';

    if($contentSlider == 'Content'){
        echo $content;
    } elseif($contentSlider == 'Slider') {


        if(have_rows('slider')): 
            $sliderCounter=0;
        echo '<div class="slider-carousel owl-carousel owl-theme">';
            while(have_rows('slider')): the_row();
            $popupSlider = get_sub_field('popup');
            $sliderCounter++;

            echo '<div>';
            echo get_sub_field('content');

            if($popupSlider){
                echo '<span class="btn bg-accent-secondary text-white modal-slider-'. $contentCounter . '-' . $sliderCounter . ' open-modal" id="modal-slider-'. $contentCounter . '-' . $sliderCounter . '" style="">Learn More</span>';
            }

            echo '</div>';
            endwhile;
        echo '</div>';
        endif;
    }
    echo '</div>';

} else {

    echo '<div class="position-absolute w-100 h-100" style="top:0;left:0;opacity:0;pointer-events:none;transition:all .15s ease-in-out;" id="content-' . $ID . '">';

    if($contentSlider == 'Content'){
        echo $content;
    } elseif($contentSlider == 'Slider') {
       
        if(have_rows('slider')):
            $sliderCounter=0;
            echo '<div class="slider-carousel owl-carousel owl-theme">';
            while(have_rows('slider')): the_row();
            $sliderCounter++;
            $popupSlider = get_sub_field('popup');

            echo '<div>';
            echo get_sub_field('content');
            // echo 'hello';
            if($popupSlider){
                echo '<span class="btn bg-accent-secondary text-white modal-slider-'. $contentCounter . '-' . $sliderCounter . ' open-modal" id="modal-slider-'. $contentCounter . '-' . $sliderCounter . '" style="">Learn More</span>';
            }
            echo '</div>';
            endwhile;
        echo '</div>';
        endif;
    }

    echo '</div>';
}



endwhile;
echo '</div>';
echo '</div>';
endif;

echo '</div>';
echo '</div>';
echo '</section>';
endwhile; endif;
// end of intro


if(have_rows('about_tabs')): while(have_rows('about_tabs')): the_row();

if(have_rows('tabs')): 
    
    $contentCounter = 0;
    while(have_rows('tabs')): the_row();
    $contentCounter++;

if(have_rows('slider')):
    $sliderCounter=0;

while(have_rows('slider')): the_row();
$sliderCounter++;
$popupSlider = get_sub_field('popup');

if($popupSlider){

    echo '<div class="modal-content modal-slider-'. $contentCounter . '-' . $sliderCounter . ' position-fixed w-100 h-100 z-3">';
    echo '<div class="bg-overlay"></div>';
    echo '<div class="bg-content">';
    echo '<div class="bg-content-inner">';
    echo '<div class="close" id="">X</div>';
    echo '<div>';

    echo $popupSlider;
    echo '</div>';
    echo '</div>';
    
    echo '</div>';
    echo '</div>';
}

endwhile;

endif;

endwhile; endif; // end of tabs
endwhile; endif; // end of group
?>