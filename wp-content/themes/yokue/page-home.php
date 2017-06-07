<?php
 /*
    Template Name: Page Home
     */

get_header(); ?>
<section class="banner">
	<div id="banner-home" class="owl-carousel owl-theme">
	  <div class="item"><img src="<?php echo get_template_directory_uri();?>/img/banner.png" alt="Banner 1"></div>
  	  
  	  <div class="item"><img src="<?php echo get_template_directory_uri();?>/img/banner2.png" alt="Banner 1"></div>
  	  <div class="item"><img src="<?php echo get_template_directory_uri();?>/img/banner3.png" alt="Banner 1"></div>
  	  <div class="item"><img src="<?php echo get_template_directory_uri();?>/img/banner4.png" alt="Banner 1"></div>
  	  
	  
	</div>
</section>


	
	

<?php
/*get_sidebar();*/
get_footer();
