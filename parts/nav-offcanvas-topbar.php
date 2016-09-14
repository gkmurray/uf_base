<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-container">
		<div class="top-bar-left float-left">
		</div>

		<div class="top-bar-right show-for-medium">
			<?php joints_top_nav(); ?>
		</div>
		<div class="top-bar-right float-right show-for-small-only">
			<ul class="menu">
				<li><button class="menu-icon" type="button" data-toggle="offCanvasLeft"></button></li>
				<li><a data-toggle="offCanvasLeft"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
			</ul>

			<ul class="menu">
				<li><button class="menu-icon" type="button" data-toggle="offCanvasRight"></button></li>
				<li><a data-toggle="offCanvasRight"><?php _e( 'Sidebar', 'jointswp' ); ?></a></li>
			</ul>
		</div>
	</div>
</div>