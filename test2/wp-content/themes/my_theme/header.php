<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">	
        <!-- Просим IE переключиться в последний режим -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Корректное массштабирование на разных устройствах -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <title><?php bloginfo( 'name' ); ?></title>
        <!-- SEO -->
        <meta name="description" content="portfolio">
        <meta name="keywords" content="portfolio">
        <meta name="author" content="Vladymy Grebenko">
        <!-- favicon -->
        <link rel="shortcut icon" href="favicon.ico" type="images/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">         
              
		<?php wp_head(); ?>
    </head>
    <body>
      <!-- [if It IE 7]>
      <p class="browserhappy"> Вы используете <strong> устаревший </strong> браузер. Пожайлуста <a href="http://browsehappy.com/">обновите</a> его.</p>
      <![endif] -->
	<div class="wrapper">
		<section class="header-wrapper">
			<header class="header clearfix">
				<div class="header__logo block-logo clearfix">
					<a href="<?php echo home_url(); ?>" class="block-logo__img-link">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/header-logo.png" alt="">
					</a>
					<div class="block-logo__name">
						<p>Центр рекламных</p>
						<p>технологий</p>
					</div>		
				</div>
				<?php dynamic_sidebar('sidebar-2') ?>	
			</header>
		</section>
		<section class="main-wrapper">