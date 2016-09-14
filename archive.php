<?php
/*
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package uf_Base
 */
?>
<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
		
		    <main id="main" class="large-8 columns" role="main">

		    	<?php
				if ( have_posts() ) : ?>

					<header class="page-header">
						<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description('<div class="taxonomy-description">', '</div>');
						?>
					</header><!-- .page-header -->

					<?php

					/* Start the Loop */
					while ( have_posts() ) : the_post();
						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'parts/content', 'archive' );
					endwhile;

					joints_page_navi();
				else :
					get_template_part( 'parts/content', 'missing' );
				endif; ?>
		
			</main> <!-- end #main -->
	
			<?php get_sidebar(); ?>

	    
	    </div> <!-- end #inner-content -->
	    
	</div> <!-- end #content -->

<?php get_footer(); ?>
