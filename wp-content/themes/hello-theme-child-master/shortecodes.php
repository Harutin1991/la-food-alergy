<?php 

// BUTTON
function button( $attr, $content = null ) {
  return '<a href="' . $attr['link'] . '" class="button"><span class="button-text">' . $content . '</span></a>';   
}
add_shortcode('BUTTON', 'button');
// END BUTTON

// YEAR
function year( $attr, $content = null ) {
	ob_start();  ?>

<div class="carousel" data-flickity='{ "freeScroll": true, "wrapAround": true, "adaptiveHeight": true, "pageDots": false }'>
  <?php the_field('video'); ?>
</div>

  	<?php return ob_get_clean();     
}
add_shortcode('YEAR', 'year');
// END BUTTON

// YEAR
function yearr( $attr, $content = null ) {
	ob_start();  ?>

<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

  	<?php return ob_get_clean();     
}
add_shortcode('YEARR', 'yearr');
// END BUTTON

?>