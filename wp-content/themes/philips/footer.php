<?php
/**
 * @package philips
 */
?>
	
<div class="footer-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="copyright text-center wow fadeIn" data-wow-duration="2s">
					<?php
						wp_nav_menu([
							'theme_location'  => '',
							'menu'            => 'Footer_menu', 
							'container'       => 'div', 
							'container_class' => '', 
							'container_id'    => '',
							'menu_class'      => 'menu-footer', 
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s"><li class="title-footer">Мои контакты: </li>%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						]);
					?>
				</div>
			</div>
		</div>
	</div>
</div>	

<?php wp_footer(); ?>

</body>
</html>
