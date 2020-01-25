<?php
/**
 * @package philips
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="mainmenu">
		<div class="container">
			<div class="row">
				<div class="col-md-12 wow fadeIn">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only"><?php echo __('Toggle navigation', 'philips');?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<?php
						wp_nav_menu([
							'menu'              => 'primary',
							'theme_location'    => 'primary',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'bs-example-navbar-collapse-1',
							'menu_class'        => 'nav navbar-nav navbar-right',
							'fallback_cb'       => 'philips_custom_navwalker::fallback',
							'walker'            => new philips_custom_navwalker(),
							'after'           => '<span class="basket-btn__counter"> ()</span>', // добавляет "счетчик товаров в корзине"
						]);
					?>			
				</div>
			</div>
		</div>
	</div>
	<div class="main_header-background">
		<div class="header-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="logo">
							<h1 class="site-title wow fadeIn" data-wow-duration="2s">
								<a href="<?php echo esc_url(home_url( '/' )); ?>" rel="home">
									<?php bloginfo('name'); ?>
								</a>
							</h1>
							<h2 class="site-title-work wow fadeIn" data-wow-duration="2s"><?php bloginfo('description'); ?></h2> 
							<h2 class="site-description wow fadeInUp" data-wow-duration="2s">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
								Sit amet venenatis urna cursus eget. Habitant morbi tristique senectus et netus. Enim neque volutpat ac tincidunt vitae semper quis lectus. 
								Scelerisque fermentum dui faucibus in. Id aliquet risus feugiat in ante. Eget gravida cum sociis natoque penatibus.
							</h2> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>