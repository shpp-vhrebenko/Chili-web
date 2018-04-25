		</section>			
	</div>
	<section class="footer-wrapper">
		<footer class="footer">
			<div class="footer__item copyright-block">
				<a href="">
					<img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="logo">
				</a>
				<p>2014 - BIGbomb</p>
				<p>Рекламно-производительная компания</p>
				<p>Все права защищены</p>		
			</div>			
			<?php 
				wp_nav_menu( array(
					'theme_location'  => 'footer_menu_1',					
					'container'       => 'div', 
					'container_class' => 'footer__item', 					
					'menu_class'      => 'products-menu',					
					'items_wrap'      => '<ul class="%2$s">%3$s</ul>'					
				) );
			?>					
			<?php 
				wp_nav_menu( array(
					'theme_location'  => 'footer_menu_2',					
					'container'       => 'div', 
					'container_class' => 'footer__item', 					
					'menu_class'      => 'products-menu',					
					'items_wrap'      => '<ul class="%2$s">%3$s</ul>'					
				) );
			?>				
			<div class="footer__item"></div>
		</footer>
	</section>

<?php wp_footer(); ?>

</body>
</html>
