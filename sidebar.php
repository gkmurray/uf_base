<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uf_Base
 */
?>

<div class="column large-4 show-for-large">
	<div id="sidebar1" class="sidebar" role="complementary">

		<?php if ( is_active_sidebar( 'sb-primary' ) ) : ?>

			<?php dynamic_sidebar( 'sb-primary' ); ?>

		<?php else : ?>

		<!-- This content shows up if there are no widgets defined in the backend. -->
							
		<div class="alert help">
			<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
		</div>

		<?php endif; ?>

	</div>
</div>
