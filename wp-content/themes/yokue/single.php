<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package yokue
 */

get_header(); ?>
<section class="main">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post(); ?>

			<?php if ( get_post_type( $post ) == 'hotels') : ?>
				<?php get_template_part( 'template-parts/content', 'hotel' ); ?>
			
			<?php elseif(get_post_type( $post ) == 'tours' ) : ?>
				<?php get_template_part( 'template-parts/content', 'tour' ); ?>
			
			<?php else : ?>
				<div class="posts-area">
					<?php get_template_part( 'template-parts/content', get_post_format() );
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;?>
				</div>
			<?php
				 get_sidebar(); 
			
			endif; /*?>*/
			/*get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;*/

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
/*get_sidebar();*/
get_footer();
