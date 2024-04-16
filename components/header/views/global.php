<header>
	<?php if ( has_nav_menu( 'utility' )) : ?>

		<nav class="utility-desktop clearfix">

			<?php
				wp_nav_menu( array(
					'theme_location' 	=> 'utility',
					'menu_class'     	=> 'utility-menu'
				) );
			?>

		</nav>

	<?php endif; ?>

	<div >
		<div class="row">
			<div class="col-12 clearfix">
				
				<div class="branding">

					<h1 class="title logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="logo" src="http://merbree-holdings.local/wp-content/uploads/2024/04/merbreelogo-transparent.png" alt="logo"></a></h1>

				</div>

				<?php Components\View::render( 'header', 'navigation' ); ?>

			</div>
		</div>
	</div>
</header>