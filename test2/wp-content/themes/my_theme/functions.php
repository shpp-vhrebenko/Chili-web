<?php
//add_filter('show_admin_bar','__return_false'); 


/**
 * Registri widgets and menus.
 */
add_action( 'widgets_init', 'my_theme_widgets_init' );

function my_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'my_theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'my_theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Top_sidebar', 'my_theme' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Шапка сайта', 'my_theme' ),
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',		
	) );

	register_nav_menus( array(
		'footer_menu_1' => 'Меню в подвале 2 колонка',
		'footer_menu_2' => 'Меню в подвале 3 колонка'		
	) );
}


/**
 * Enqueue scripts and styles.
 */

add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

function my_theme_scripts() {
	wp_enqueue_style( 'my_theme-style', get_stylesheet_uri() );
	wp_enqueue_script( 'my_theme-main-scripts', get_template_directory_uri() . '/assets/js/main.js');
	wp_enqueue_script( 'my_theme-assets-style', get_template_directory_uri() . '/assets/styles/assets.css');
}


/**
 * Add custom post type 'kolba'.
 */
add_action('init', 'awesom_custom_post_type');

function awesom_custom_post_type () {
	$labels = array(
		'name' => esc_html__( 'Колба', 'my_theme' ),
		'singular_name' => 'kolba',
		'add_new' => 'Добавить новую колбу',
		'all_items' => 'Все колбы',		
		'add_new_item'       => 'Добавление колбы', // заголовка у вновь создаваемой записи в админ-панели.
		'edit_item'          => 'Редактирование колбы', // для редактирования типа записи
		'new_item'           => 'Новая колба', // текст новой записи
		'view_item'          => 'Смотреть колбу', // для просмотра записи этого типа.
		'search_items'       => 'Искать колбу', // для поиска по этим типам записи
		'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
		'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
		'parent_item_colon'  => 'Родительская колба' // для родителей (у древовидных типов)		
	);
	$args = array(
		'labels' => $labels,		
		'public'              => true,
		'has_archive'         => true,
		'publicly_queryable'  => true, // зависит от public
		'query_var'           => true,
		'rewrite'             => true,
		'capability_type' => 'post',
		'hierarchical'        => false,
		'exclude_from_search' => false, // зависит от public		
		'menu_position'       => 4,		
		'supports'            => array('title','editor','except','thumbnail','revisions','custom-fields'), 
		'taxonomies'          => array('category','post_tag'),		
	);

	register_post_type('kolba', $args);
}


/**
 * Add theme support post thumbnails and registri new size post thumbnails.
 */
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );	
}

if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'kolba-img', 300, 200);
}

/**
 * Registri custom menu for admin bar.
 */
add_action( 'admin_menu', 'register_my_custom_menu_page' );
function register_my_custom_menu_page(){
	add_menu_page( 
		'My menu 1', 'My menu 1', 'manage_options', 'custompage_1', 'my_custom_menu_page', '
dashicons-admin-site' , 6 
	); 
	add_menu_page( 
		'My menu 2', 'My menu 2', 'manage_options', 'custompage_2', 'my_custom_menu_page', '
dashicons-calendar-alt' , 7 
	); 
}

function my_custom_menu_page(){
	echo "Код страницы.";   
}

/**
 * Add a custom block to the post editing page.
 */
add_action('add_meta_boxes', 'myplugin_add_custom_box');

function myplugin_add_custom_box(){
	$screens = array( 'post', 'page', 'kolba');
	add_meta_box( 'myplugin_sectionid', 'My text 1', 'myplugin_meta_box_callback', $screens, 'side', 'high');
}

// HTML block code
function myplugin_meta_box_callback( $post, $meta ){
	$screens = $meta['args'];

	echo '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero similique accusamus qui nobis, aspernatur laborum quas quidem natus veritatis pariatur!</p>';	
}

