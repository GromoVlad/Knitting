<?php
/**
 * The header for our theme.
 * Displays all of the <head> section and everything up till <div id="content">
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

		<div class="other_header-background">
			<div class="header-area">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="logo">
								<h1 class="my-works wow fadeIn" data-wow-duration="2s">
									<?php woocommerce_page_title(); ?>:
								</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>