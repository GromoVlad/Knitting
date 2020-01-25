<?php
/**
 * @package philips
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php philips_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
	<?php
	$args = array(
	'post_parent' => $post->ID,
	'post_type' => 'attachment',
	'orderby' => 'menu_order', // сортировка, menu_order - по выставленному в админке порядку, можно также сортировать по имени или дате добавления 
	'order' => 'ASC',
	'numberposts' => 5, // количество выводимых изображений
	'post_mime_type' => 'image'
);
if ( $images = get_children( $args ) ) {
	// если никаких изображений в пост не добавлено, то не выводим вообще ничего
	echo '<div id="sliderbody" style="width:640px; height:480px;"><div id="slider">';
	// не забудьте указать свои значения ширины (640) и высоты (480)
			foreach( $images as $image ) {
				echo wp_get_attachment_image( $image->ID, 'trueslider' );
			}
	echo '</div></div>'; 
}
?>
	<?php echo do_shortcode( '[contact-form-7 id="138" title="Отправить заявку"]' ); ?>
	<div class="entry-content">
        <?php the_post_thumbnail('philips-blog-thumbnails', array( 'alt' => get_the_title())); ?>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'philips' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php philips_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
