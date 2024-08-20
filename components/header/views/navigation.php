<?php 
$mod_logo_id = 91;
$mod_logo_url = wp_get_attachment_url($mod_logo_id);
$jm_logo_id = 90;
$jm_logo_url = wp_get_attachment_url($jm_logo_id);
?>

<?php if ( has_nav_menu( 'primary' )) : ?>

		<nav role="navigation" class="nav-desktop">
			<div class="logo-container">
				<a href="/#mod-link">
				<?php if ($mod_logo_url) : ?>
					<img class="brand-logo" src="<?php echo esc_url( $mod_logo_url ); ?>" alt="MOD Pizza">
				<?php endif;?>
				</a>
				<a href="/#jersey-link">
				<?php if ($jm_logo_url) : ?>
					<img class="brand-logo" src="<?php echo esc_url( $jm_logo_url ); ?>" alt="Jersey Mikes">
				<?php endif ?>
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