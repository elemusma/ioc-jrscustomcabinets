<?php 
/**
 * Template Name: About Story
 */
get_header();

wp_enqueue_style('about-story', get_theme_file_uri('/css/sections/about-story.css'));

if(have_rows('sections')): while(have_rows('sections')): the_row();
$image = get_sub_field('image');
$label = get_sub_field('label');
$dataAos = get_sub_field('data_aos');
$background = get_sub_field('background');
$section = sanitize_title_with_dashes($label);
$content = get_sub_field('content');


echo '<section id="section-' . $section . '" class="full-height pt-5 pb-5 position-relative overflow-h section-full d-flex align-items-center" style="min-height:100vh;">';
echo '<div class="container">';
    echo '<div class="row align-items-center">';
    echo '<div class="col-md-6" data-aos="<?php echo $dataAos; ?>" data-aos-delay="200" style="background:' . $background . '">';
echo '<div class="text-white" style="margin-bottom:-1rem;">';
 echo $content;
echo '</div>';
echo '</div>';

        echo '<div class="col-md-6">';
            echo '<div class="position-relative">';
            echo '<div style="background: #9bbec7;top: -25px;right: 20px;position: absolute;height: 65%;width: 65%;opacity:.25;"></div>';
            echo '<div style="background: #e2c391;width: 25%;height: 90%;position: absolute;bottom: -20px;right: -35px;opacity:85%;z-index: 0 !important;"></div>';
            echo '<div class="position-relative z-1">';
                echo wp_get_attachment_image($image['id'],'full', '',['class'=>'w-100 h-auto img-bg','style'=>'object-fit:contain;top:0;left:0;']);
            echo '</div>';
            echo '</div>';
        echo '</div>';



    echo '</div>';
echo '</div>';



echo '</section>';


endwhile; 
endif;


if(have_rows('sections')):
echo '<div class="position-fixed side-navbar" style="top:25%;right:25px;transform:translate(0, 50%);z-index:2;">';
echo '<ul class="list-unstyled text-right mr-md-4 mr-0">';
$sectionLis = 0;
while(have_rows('sections')): the_row();
$label = get_sub_field('label');
$section = sanitize_title_with_dashes($label);
$rowIndex=get_row_index();

$sectionLis++;
// if($rowIndex == '1'){}

if($sectionLis == 1){
    echo '<li id="anchor-section-' . $section . '" class="mt-2 mb-2 position-relative active">';
    // echo '</li>';
} else {
    echo '<li id="anchor-section-' . $section . '" class="mt-2 mb-2 position-relative">';

}
echo '<a href="#section-' . $section . '" class="pl-md-5 pl-2 pr-2 text-white position-relative h5" style="transition:all .1s ease-in-out;">';
echo $label;
echo '</a>';
echo '</li>';

endwhile;
echo '</ul>';
echo '</div>';

endif;

wp_enqueue_script('about-js', get_theme_file_uri('/js/about.js'));

get_footer(); 
?>