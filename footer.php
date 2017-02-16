<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uf_Base
 */

?>

						<footer class="footer" role="contentinfo">
							
							<div id="inner-footer" class="row">
								<div class="large-12 medium-12 columns">
									<nav role="navigation">
										<?php joints_footer_links(); ?>
									</nav>
								</div>
								<div class="large-12 medium-12 columns">
									<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
								</div>
							</div> <!-- end #inner-footer -->
						</footer> <!-- end .footer -->
					</div>  <!-- end #page -->
				</div> <!-- end .off-canvas-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->