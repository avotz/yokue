<?php
 /*
    Template Name: Page Map
     */

get_header(); ?>

	

			<?php
			while ( have_posts() ) : the_post();

				the_content();

				

			endwhile; // End of the loop.
			?>

	

<?php
/*get_sidebar();*/
get_footer();
