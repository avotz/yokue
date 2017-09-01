<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package yokue
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-image">
		<?php if ( has_post_thumbnail() ) :

	  	 	$id = get_post_thumbnail_id($post->ID);
	  	 	$thumb_url = wp_get_attachment_image_src($id,'full', true);
	  	 	?>
	    	
			<div class="content-img" style="background-image: url('<?php echo $thumb_url[0] ?>');"></div>
						
			<?php endif; 	?>
	</div>
	<header class="entry-header">
		<h1 class="entry-title"> <?php the_title(); ?> 
		<?php if(rwmb_meta('rw_stars')) : ?>
			<small><?php echo str_repeat("<i class='icon-star'></i>", rwmb_meta('rw_stars'));?></small> 
		<?php endif; 	?>
		</h1>
	</header><!-- .entry-header -->
	
	<div class="entry-content">
		<?php

			the_content();
		?>
		<a class="btn btn-reservar btn-reservar-hotel" href="#reservation" data-title="<?php the_title(); ?>">Reservar</a>
		<div id="reservation" class="contact white-popup mfp-hide mfp-with-anim">
				<h1>Reservación de Hotel</h1>
				<?php echo do_shortcode ( '[contact-form-7 id="90" title="Reservaciones Hotel"]'); ?>

		</div>

		
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
