<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package uf_Base
 */
?>

<?php get_header(); ?>
	
	<div id="content">
		
		<div id="inner-content" class="row">

			<main id="main" class="large-8 medium-8 columns" role="main">
		
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'parts/loop', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main> <!-- end #main -->

			<?php get_sidebar(); ?>
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
