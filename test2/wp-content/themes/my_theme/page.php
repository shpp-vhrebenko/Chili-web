<?php get_header(); ?>
<div class="main clearfix"> 
	<div class="content">
		<div class="content__commercial commercial">
			<img src="<?php bloginfo('template_url'); ?>/assets/images/main_content_img.jpg" alt="" class="advertisements__img">
			<div class="commercial__description">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque minus facere eligendi enim iure soluta natus</p>
			</div>
		</div>
		<div class="content__no-comercial">
			<?php while( have_posts() ) : the_post();
	            $more = 1; // отображаем полностью всё содержимое поста
	            //the_title(); // эта функция выводит заголовок
	            the_content(); // выводим контент
	        endwhile; ?>
	        <?php 
	         $query = new WP_Query( array( 'post_type' => 'kolba', 'post_per_page' => -1, 'post_status' => 'publish' ) );

			if ( $query->have_posts() ) : ?>
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="post__item">
					<h2 class="title"><?php the_title(); ?></h2>
					<?php the_content(); ?>
					<?php if ( get_post_meta($post->ID, 'myfield_25', true) ) : ?>				
						<p> <?php echo get_post_meta($post->ID, 'myfield_25', true) ?> </p>				
					<?php endif; ?>
					<?php the_post_thumbnail('kolba-img'); ?>
				</div>				
			<?php endwhile; wp_reset_postdata(); ?>
			<!-- show pagination here -->
			<?php else : ?>
			<!-- show 404 error here -->
			<?php endif; ?>   
	       
		</div>			
	</div>
	<div class="sidebar">
		<img src="<?php bloginfo('template_url'); ?>/assets/images/sidebar_img.jpg" alt="">
		<div class="top-sales">
			<div class="top-sales__header">
				<p><span>Топ</span> продаж</p>
			</div>
			<ul class="top-sales__list">
				<li class="top-sales__item">
					<a href="" class="top-sales__link"></a>
				</li>
				<li class="top-sales__item">
					<a href="" class="top-sales__link"></a>
				</li>
				<li class="top-sales__item">
					<a href="" class="top-sales__link"></a>
				</li>
				<li class="top-sales__item">
					<a href="" class="top-sales__link"></a>
				</li>
			</ul>
		</div>
	</div>
</div>	
<?php get_footer(); ?>