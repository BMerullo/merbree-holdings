<?php 
$image_id = 80;
$image_url = wp_get_attachment_url($image_id);
?>


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
				<?php if ($image_url) : ?>
					<h1 class="title logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="logo" src="<?php echo esc_url( $image_url ); ?>" alt="logo"></a></h1>
				<?php endif;?>
				</div>

				<?php Components\View::render( 'header', 'navigation' ); ?>

			</div>
		</div>
	</div>
</header>