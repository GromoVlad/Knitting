<?php
/**
 * @package philips
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php 
			the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' );
			if ( 'post' == get_post_type() ) : 
		?>
			<div class="entry-meta">
				<span class="categories">
					Категории: <?php the_category( " / ", ""); ?>
				</span>
			</div>
		<?php endif; ?>
	</header>
	<div class="entry-content">
        <div class="entry-thumbnail">
			<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( '%s', 'philips' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"> 
			<?php the_post_thumbnail(); ?></a>
        </div>        
        <div class="entry-contents">
			<?php the_excerpt( ) ?>
        </div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'philips' ),
				'after'  => '</div>',
			) );
		?>
	</div>
	<footer class="entry-footer">
		<?php philips_entry_footer(); ?>
	</footer>
</article>