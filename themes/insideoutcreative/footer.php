<footer class="bg-accent-quaternary">
<section class="pt-5">
<div class="container">
<?php
$galleryFooter = get_field('footer_gallery','options');

// if( $galleryFooter ): 
// echo '<div class="row justify-content-center pb-5">';
// foreach( $galleryFooter as $image ):
// echo '<div class="col-lg-3 col-md-4 text-center">';

// echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 img-portfolio','style'=>'height:75px;object-fit:contain;'] );

// echo '</div>';
// endforeach; 
// echo '</div>';
// endif;

?>
<div class="row justify-content-center">
<div class="col-md-5 col-9 text-center pb-5">
    <?php 
$logo = get_field('logo','options'); $logoFooter = get_field('logo_footer','options'); 
echo '<a href="' . home_url() . '">';
if($logoFooter){
echo wp_get_attachment_image($logoFooter['id'],'full',"",['class'=>'w-100 h-auto']); 
} elseif($logo) {
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto']);
}
echo '</a>';

echo '<div class="pt-5">';
the_field('website_message','options'); 
echo '</div>';
?>
</div>

</div>
</section>

<section class="bg-accent-secondary pt-5 pb-5">
    <div class="container">
        <div class="row justify-content-md-end">
            <div class="col-md-6">
<?php
echo get_template_part('partials/si');
?>
            </div>
            <div class="col-md-3 pt-md-0 pt-4 text-md-right text-center">
            <!-- <a href="https://insideoutcreative.io/" target="_blank" rel="noopener noreferrer" style="" class="">
                <img src="https://insideoutcreative.io/wp-content/uploads/2022/04/created-by-inside-out-creative.png" alt="" class="h-auto ml-2" style="width:215px;">
            </a> -->
            <a href="https://insideoutcreative.io/" target="_blank" title="Website Development, Design &amp SEO in Colorado - Florida" style="padding-top:35px;">
<img class="auto img-backlink" src="
https://insideoutcreative.io/wp-content/uploads/2022/04/created-by-inside-out-creative.png
" alt="Website Development, Design &amp SEO in Colorado - Florida" width="125px" />
</a>
            </div>
</div>
        </div>
    </div>
</section>

<!-- <div class="text-center pt-3 pb-3 pl-5 pr-5" style="background:#f2f2f2;">
    <div class="d-flex justify-content-center align-items-center">
        <a href="https://insideoutcreative.io/" target="_blank" rel="noopener noreferrer" style="" class="">
        <?php echo wp_get_attachment_image(95,'large','',['class'=>'h-auto ml-2','style'=>'width:215px;']); ?>
        </a>
    </div>
</div> -->
</footer>
<?php if(get_field('footer', 'options')) { the_field('footer', 'options'); } ?>
<?php wp_footer(); ?>
</body>
</html>