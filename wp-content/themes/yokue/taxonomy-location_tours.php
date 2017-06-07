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
	         	Selección de Paquetes turisticos en <?php single_cat_title( '', true ); ?>
			 </h1>
			      
			<?php if ( have_posts() ) : ?>
				<div class="filters-tours">
					<div class="filter" data-filter="all">Todos</div>
				<?php $terms = get_the_terms( $post->ID, 'type' );
                              if ( $terms && ! is_wp_error( $terms ) ) { 
                             
                                foreach ( $terms as $term ) {
                                    $types[] = $term->slug;
                                    $typesNames[] = $term->name;?>
                                    <div class="filter" data-filter=".<?php echo $term->slug ?>"><?php echo $term->name ?></div>
                               <?php }
                            }
                            ?>
					<!-- <div class="filter" data-filter=".ecologico">Ecológico</div> -->
					
				</div>
				
				<div class="main-tours-container">
				<?php while ( have_posts() ) : the_post(); 
					
				?>
						
							
					
						<div class="mix main-tours-item item-tour <?php echo implode(' ', $types);  ?>">
							<h1 class="main-tours-item-title"><?php the_title(); ?></h1>
								<figure class="main-tours-item-img">

								<?php if ( has_post_thumbnail() ) :

				                    $id = get_post_thumbnail_id($post->ID);
				                    $thumb_url = wp_get_attachment_image_src($id,'ht-thumb', true);
				                    ?>
				                    <img src="<?php echo $thumb_url[0] ?>" alt="Tours">
				                   
				                        
				                <?php endif; ?>
									
								</figure>
								<div class="main-tours-item-info">
									<div class="main-tours-item-stars">
										<?php echo implode(' ', $typesNames);  ?>
									</div>
									<div class="main-tours-item-description">
										<?php the_excerpt(); ?>
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
