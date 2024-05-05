

<?php if ( has_nav_menu( 'primary' )) : ?>

		<nav role="navigation" class="nav-desktop">
			<div class="logo-container">
				<a href="/#mod-link">
					<img class="brand-logo" src="http://merbree-holdings.local/wp-content/uploads/2024/04/MOD-small.png" alt="MOD Pizza">
				</a>
				<a href="/#jersey-link">
					<img class="brand-logo" src="http://merbree-holdings.local/wp-content/uploads/2024/04/jerseymikes-small.png" alt="Jersey Mikes">
				</a>
			</div>
			<div>
			<?php
				wp_nav_menu( array(
					'theme_location' 	=> 'primary',
					'menu_class'     	=> 'primary-menu'
				) );
			?>
			</div>


		</nav>



		<nav class="nav-mobile">

			<!-- <div class="logo-container">
				<img class="logo" src="http://merbree-holdings.local/wp-content/uploads/2024/04/MOD-small.png" alt="MOD Pizza">
				<img class="logo" src="http://merbree-holdings.local/wp-content/uploads/2024/04/jerseymikes-small.png" alt="Jersey Mikes">
			</div> -->

			<div id="mobile-menu">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>

		</nav>		

		<div class="mobile-menu">
		
			<?php
				wp_nav_menu( array(
					'theme_location' 	=> 'primary',
					'menu_class'     	=> 'primary-menu'
				 ) );
			?>

		</div>

<?php endif; ?>