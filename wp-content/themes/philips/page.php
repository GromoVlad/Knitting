<?php
/** @package philips */

get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="primary" class="content-area">
					<section class="category">
						<main id="main" class="site-main" role="main">
							<?php 
								while ( have_posts() ) : the_post(); 
									get_template_part( 'template-parts/content', 'page' ); 
										if ( comments_open() || get_comments_number() ) :
											comments_template();
										endif;
								endwhile; 
							?>
						</main>
					</section>
				</div>
			</div>
		</div>	
	</div>	
<?php get_footer(); ?>
