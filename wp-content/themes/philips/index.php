<?php
/**
 * @package philips
 */

get_header('title'); ?>
<div class="content-area">
	<div class="container">
		<div class="row">
			<h1 class="last-works wow fadeInUp" data-wow-duration="1.5s">Мои последние работы:</h1>
			<div class="col-md-12">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">
					<?php 
						$posts = get_posts([ //параметры по умолчанию
							'numberposts' => 4,
							'post_type'   => 'product',
							'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
						]);
						foreach($posts as $post): setup_postdata($post); ?>
							<div class="col-md-6 wow fadeInUp" data-wow-duration="1.5s" >
								<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
							</div>
						<?php endforeach;?>
					</main>
				</div>
			</div>
		</div>
	</div>
	<img class="site-image wow fadeInUp" data-wow-duration="1.5s" src="<?php echo get_template_directory_uri(); ?>/images/olya.jpg" alt="">
</div>
<?php get_footer(); ?>
