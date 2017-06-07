<?php
/**
 * The template for displaying Category products
 *
 * 
 *
 * @package fourenergy
 */

get_header(); ?>

<section class="main">
            
			
			<?php  //the_archive_title( '<h1 class="featured-title color">', '</h1>' );  ?>	
	         <h1 class="featured-title color">
	         	Selección de Hospedaje en <?php single_cat_title( '', true ); ?>
			 </h1>
			      
			<?php if ( have_posts() ) : ?>
				
				<div class="main-hotels-container">
				<?php while ( have_posts() ) : the_post(); ?>
						
						
					
						<div class="main-hotels-item item-hotel">
							<h1 class="main-hotels-item-title"><?php the_title(); ?></h1>
								<figure class="main-hotels-item-img">

								<?php if ( has_post_thumbnail() ) :

				                    $id = get_post_thumbnail_id($post->ID);
				                    $thumb_url = wp_get_attachment_image_src($id,'ht-thumb', true);
				                    ?>
				                    <img src="<?php echo $thumb_url[0] ?>" alt="Hotels">
				                   
				                        
				                <?php endif; ?>
									
								</figure>
								<div class="main-hotels-item-info">
									<div class="main-hotels-item-stars">
										<?php echo str_repeat("<i class='icon-star'></i>", rwmb_meta('rw_stars'));?>
									</div>
									<div class="main-hotels-item-description">
										Cantón de <?php echo rwmb_meta( 'rw_canton'); ?>, Distríto de <?php echo rwmb_meta( 'rw_distrito'); ?>
									</div>
									<a href="<?php the_permalink(); ?>" class="btn">Detalles</a>
								</div>
						</div>
						

					
					
						<?php endwhile; ?>

						

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>
					
				</div>
		          
		     
		     


<?php get_footer(); ?>
