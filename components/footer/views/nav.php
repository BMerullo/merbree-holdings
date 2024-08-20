<?php 
$image_id = 47;
$image_url = wp_get_attachment_url($image_id);
?>

<section class="footer anim-up ">
	<div class="row">
		<div class="col-lg-6 footer-logo-container">
			<?php if ($image_url) : ?>
				
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img class="footer-logo"  src="<?php echo esc_url( $image_url ); ?>" alt="Footer Image">
				</a>
			<?php endif;?>
		</div>
		<div class="col-lg-6">
			<div class="footer-nav">
		<?php
			wp_nav_menu( array(
				'theme_location' 	=> 'footer-menu',
				'menu_class'     	=> 'footer-menu'
			) );
		?>

			</div>
		</div>
	</div>
</section>