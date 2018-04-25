<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package my_theme
 */

get_header();
?>
<div class="main clearfix"> 
	<div class="content">
		<div class="content__commercial commercial">
			<img src="<?php bloginfo('template_url'); ?>/assets/images/main_content_img.jpg" alt="" class="advertisements__img">
			<div class="commercial__description">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque minus facere eligendi enim iure soluta natus</p>
			</div>
		</div>
		<div class="content__no-comercial">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'my_theme' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'my_theme' ); ?></p>

					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'my_theme' ); ?></h2>
						<ul>
							<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
							?>
						</ul>
					</div><!-- .widget -->

					<?php
					/* translators: %1$s: smiley */
					$my_theme_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'my_theme' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$my_theme_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
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

<?php
get_footer();
