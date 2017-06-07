<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yokue
 */

?>

	</section><!-- #main -->
 <?php get_template_part( 'template-parts/content', 'services' ); ?>
	<footer class="footer">
		<span class="copy">Copyright © <?php echo Date('Y'); ?>. All Rights Reserved.</span>   
	                   
	    <span class="avotz"><a href="http://www.avotz.com" target="_blank"><i class="icon-avotz"></i></a></span>
	</footer><!-- #footer -->
</div><!-- #wrap -->

<?php wp_footer(); ?>

</body>
</html>
