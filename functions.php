<?php

function apasos_setup() {
	load_theme_textdomain( 'apasos', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 800, 800 );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style-editor.css' );
	register_nav_menus( array(
		'main-menu' => __( 'Main Menu', 'apasos' ),
	) );
	register_nav_menus( array(
		'main-menu-2' => __( 'Main Menu 2', 'apasos' ),
	) );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_theme_support( 'custom-background', array(
		'default-repeat'     => 'no-repeat',
		'default-position-x' => 'center',
		'default-position-y' => 'center',
		'default-attachment' => 'fixed',
		'default-size'       => 'cover',
		'default-color'      => '#fff',
	) );
	add_theme_support( 'custom-logo', array(
		'height'      => 200,
		'width'       => 300,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	// Custom Editor Colors
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Grey', 'apasos' ),
			'slug'  => 'grey',
			'color' => '#bbb',
		),
		array(
			'name'  => __( 'Light Grey', 'apasos' ),
			'slug'  => 'light-grey',
			'color' => '#e4e4e4',
		),
		array(
			'name'  => __( 'Blueberry', 'apasos' ),
			'slug'  => 'blueberry',
			'color' => '#59e',
		),
		array(
			'name'  => __( 'Light Blueberry', 'apasos' ),
			'slug'  => 'light-blueberry',
			'color' => '#bbd6f8',
		),
		array(
			'name'  => __( 'Lime', 'apasos' ),
			'slug'  => 'lime',
			'color' => '#ad5',
		),
		array(
			'name'  => __( 'Light Lime', 'apasos' ),
			'slug'  => 'light-lime',
			'color' => '#ddf1bb',
		),
		array(
			'name'  => __( 'Mango', 'apasos' ),
			'slug'  => 'mango',
			'color' => '#ea4',
		),
		array(
			'name'  => __( 'Light Mango', 'apasos' ),
			'slug'  => 'light-mango',
			'color' => '#f8ddb4',
		),
		array(
			'name'  => __( 'Strawberry', 'apasos' ),
			'slug'  => 'strawberry',
			'color' => '#e46',
		),
		array(
			'name'  => __( 'Light Strawberry', 'apasos' ),
			'slug'  => 'light-strawberry',
			'color' => '#f8b4c2',
		),
	) );

	// Custom Font Sizes
	add_theme_support( 'editor-font-sizes', array(
		array(
			'name' => __( 'Small', 'apasos' ),
			'size' => 12,
			'slug' => 'small',
		),
		array(
			'name' => __( 'Big', 'apasos' ),
			'size' => 20,
			'slug' => 'big',
		),
		array(
			'name' => __( 'Huge', 'apasos' ),
			'size' => 28,
			'slug' => 'huge',
		),
	) );
}
add_action( 'after_setup_theme', 'apasos_setup' );

function apasos_scripts() {
	// Main Stylesheet
	wp_enqueue_style( 'apasos-main', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	// Comments Scripts and Styles
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// apasos Scripts
	wp_enqueue_script( 'apasos-js', get_template_directory_uri() . '/js/scripts.js', '', wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'apasos_scripts' );



// Set Content Width
function apasos_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'apasos_content_width', 1200 );
}
add_action( 'after_setup_theme', 'apasos_content_width', 0 );

// Enable Widget Areas
function apasos_widgets() {
	register_sidebar( array(
		'name'          => __( 'Ad bajo menu', 'apasos' ),
		'id'            => 'ad-widget-1',
		'description'   => __( 'Añade widgets debajo de la barra de menu.', 'apasos' ),
		'before_widget' => '<section id="%1$s" class="widget col-md %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Ad bajo zona destacada/slider', 'apasos' ),
		'id'            => 'ad-widget-2',
		'description'   => __( 'Añade widgets debajo de la zona destacada', 'apasos' ),
		'before_widget' => '<section id="%1$s" class="widget col-md %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Ad antes de los posts', 'apasos' ),
		'id'            => 'ad-widget-3',
		'description'   => __( 'Añade widgets antes de los posts', 'apasos' ),
		'before_widget' => '<section id="%1$s" class="widget col-md %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Ad en cajas como los posts', 'apasos' ),
		'id'            => 'ad-widget-4',
		'description'   => __( 'Añade widgets antes de los posts', 'apasos' ),
		'before_widget' => '<section id="%1$s" class="widget col-md %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Ad Bloque horizontal entre posts', 'apasos' ),
		'id'            => 'left-blocks',
		'description'   => __( 'Add widgets a la derecha', 'apasos' ),
		'before_widget' => '<section id="%1$s" class="widget col-md %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Arriba Izquierda', 'apasos' ),
		'id'            => 'slider-widgets-1',
		'description'   => __( 'Añade widgets debajo de la cabecera.', 'apasos' ),
		'before_widget' => '<section id="%1$s" class="widget col-md %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Arriba Derecha Arriba', 'apasos' ),
		'id'            => 'slider-widgets-2',
		'description'   => __( 'Añade widgets debajo de la cabecera.', 'apasos' ),
		'before_widget' => '<section id="%1$s" class="widget col-md %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Arriba Derecha Debajo', 'apasos' ),
		'id'            => 'slider-widgets-3',
		'description'   => __( 'Añade widgets debajo de la cabecera.', 'apasos' ),
		'before_widget' => '<section id="%1$s" class="widget col-md %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
		) );
	register_sidebar( array(
			'name'          => __( 'Bloque buscar', 'apasos' ),
			'id'            => 'header-widgets-1',
			'description'   => __( 'Añade widgets a la barra de cabecera.', 'apasos' ),
			'before_widget' => '<section id="%1$s" class="widget col-md %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		) );
		register_sidebar( array(
			'name'          => __( 'Bloque para Entradas Seleccionadas', 'apasos' ),
			'id'            => 'selected-category',
			'description'   => __( 'Add widgets to your footer.', 'apasos' ),
			'before_widget' => '<section id="%1$s" class="widget col-md %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		) );
		register_sidebar( array(
			'name'          => __( 'Columna Derecha', 'apasos' ),
			'id'            => 'right-sidebar',
			'description'   => __( 'Add widgets a la derecha', 'apasos' ),
			'before_widget' => '<section id="%1$s" class="widget col-md %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		) );
	register_sidebar( array(
		'name'          => __( 'Footer Widgets 1', 'apasos' ),
		'id'            => 'footer-widgets-1',
		'description'   => __( 'Add widgets to the colored footer block.', 'apasos' ),
		'before_widget' => '<section id="%1$s" class="widget col-lg %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widgets 2', 'apasos' ),
		'id'            => 'footer-widgets-2',
		'description'   => __( 'Add widgets to your footer.', 'apasos' ),
		'before_widget' => '<section id="%1$s" class="widget col-md %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widgets 3', 'apasos' ),
		'id'            => 'footer-widgets-3',
		'description'   => __( 'Add widgets to your footer.', 'apasos' ),
		'before_widget' => '<section id="%1$s" class="widget col-md %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Paginas Legales', 'apasos' ),
		'id'            => 'legal-block',
		'description'   => __( 'Add widgets para textos legales', 'apasos' ),
		'before_widget' => '<section id="%1$s" class="widget col-md %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'apasos_widgets' );



// Theme Options
function apasos_customizer( $wp_customize ) {
	$wp_customize->add_setting( 'apasos_color_theme', array(
		'default'           => 'blueberry',
		'sanitize_callback' => 'wp_filter_nohtml_kses',
	) );
	$wp_customize->add_control( 'apasos_color_theme', array(
		'label'    => __( 'apasos Color Theme', 'apasos' ),
		'section'  => 'colors',
		'settings' => 'apasos_color_theme',
		'type'     => 'radio',
		'choices'  => array(
			'blueberry'  => __( 'Blueberry', 'apasos' ),
			'lime'       => __( 'Lime', 'apasos' ),
			'mango'      => __( 'Mango', 'apasos' ),
			'strawberry' => __( 'Strawberry', 'apasos' ),
		),
	) );
	$wp_customize->add_panel( 'my_custom_options', array(
		'title' => __( 'Mis Opciones', 'textdomain' ),
		'priority' => 160,
		'capability' => 'edit_theme_options',
	  ));
	
	  // Section para Google Analytics
	  $wp_customize->add_section( 'google_analytics_section' , array(
		'title' => __( 'Google Analytics', 'textdomain' ),
		'panel' => 'my_custom_options',
		'priority' => 1,
		'capability' => 'edit_theme_options',
	  ));
	
	  // Section para Redes Sociales
	  $wp_customize->add_section( 'social_section' , array(
		'title' => __( 'Redes Sociales', 'textdomain' ),
		'panel' => 'my_custom_options',
		'priority' => 2,
		'capability' => 'edit_theme_options',
	  ));
	
	  //Google Analytics
	  $wp_customize->add_setting( 'my_google_analytics', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	  ));
	
	  $wp_customize->add_control('my_google_analytics', array(
		'label' => __( 'Código de Google Analytics', 'textdomain' ),
		'section' => 'google_analytics_section',
		'priority' => 1,
		'type' => 'textarea',
	  ));
	
	  //Redes Sociales: Facebook
	  $wp_customize->add_setting( 'my_facebook_url', array(
		'type' => 'option',
		'capability' => 'edit_theme_options',
	  ));
	
	  $wp_customize->add_control('my_facebook_url', array(
		'label' => __( 'Facebook URL', 'textdomain' ),
		'section' => 'social_section',
		'priority' => 1,
		'type' => 'text',
	  ));
	
	  //Redes Sociales: Twitter
	  $wp_customize->add_setting( 'my_twitter_url', array(
		'type' => 'option',
		'capability' => 'edit_theme_options',
	  ));
	
	  $wp_customize->add_control('my_twitter_url', array(
		'label' => __( 'Twitter URL', 'textdomain' ),
		'section' => 'social_section',
		'priority' => 2,
		'type' => 'text',
	  ));
	
	  //Redes Sociales: Youtube
	  $wp_customize->add_setting( 'my_youtube_url', array(
		'type' => 'option',
		'capability' => 'edit_theme_options',
	  ));
	
	  $wp_customize->add_control('my_youtube_url', array(
		'label' => __( 'YouTube URL', 'textdomain' ),
		'section' => 'social_section',
		'priority' => 3,
		'type' => 'text',
	  ));
	  //Redes Sociales: Instagram
	  $wp_customize->add_setting( 'my_instagram_url', array(
		'type' => 'option',
		'capability' => 'edit_theme_options',
	  ));
	
	  $wp_customize->add_control('my_instagram_url', array(
		'label' => __( 'Instagram URL', 'textdomain' ),
		'section' => 'social_section',
		'priority' => 4,
		'type' => 'text',
	  ));
	  //Redes Sociales: Pinterest
	  $wp_customize->add_setting( 'my_pinterest_url', array(
		'type' => 'option',
		'capability' => 'edit_theme_options',
	  ));
	
	  $wp_customize->add_control('my_pinterest_url', array(
		'label' => __( 'Pinterest URL', 'textdomain' ),
		'section' => 'social_section',
		'priority' => 5,
		'type' => 'text',
	  ));
	  $wp_customize->add_setting( 'my_shop_url', array(
		'type' => 'option',
		'capability' => 'edit_theme_options',
	  ));
	
	  $wp_customize->add_control('my_shop_url', array(
		'label' => __( 'Shop URL', 'textdomain' ),
		'section' => 'social_section',
		'priority' => 6,
		'type' => 'text',
	  ));
	  //Titulos portada
	  $wp_customize->add_section( 'titulos', array(
		'title'    => __( 'Títulos portada' ),
		'priority' => 160,
	  ));
	  $wp_customize->add_setting( 'titulo-1', array(
		'type' => 'option',
		'capability' => 'edit_theme_options',
	  ));
	  $wp_customize->add_control('titulo-1', array(
		'label' => __( 'Titulo 1', 'textdomain' ),
		'section' => 'titulos',
		'priority' => 1,
		'type' => 'text',
	  ));
	  $wp_customize->add_setting( 'titulo-2', array(
		'type' => 'option',
		'capability' => 'edit_theme_options',
	  ));
	  $wp_customize->add_control('titulo-2', array(
		'label' => __( 'Titulo 2', 'textdomain' ),
		'section' => 'titulos',
		'priority' => 2,
		'type' => 'text',
	  ));
	  $wp_customize->add_setting( 'titulo-3', array(
		'type' => 'option',
		'capability' => 'edit_theme_options',
	  ));
	  $wp_customize->add_control('titulo-3', array(
		'label' => __( 'Titulo 3', 'textdomain' ),
		'section' => 'titulos',
		'priority' => 3,
		'type' => 'text',
	  ));
	  $wp_customize->add_setting( 'titulo-4', array(
		'type' => 'option',
		'capability' => 'edit_theme_options',
	  ));
	  $wp_customize->add_control('titulo-4', array(
		'label' => __( 'Titulo 4', 'textdomain' ),
		'section' => 'titulos',
		'priority' => 4,
		'type' => 'text',
	  ));
}
add_action( 'customize_register', 'apasos_customizer' );

// Add apasos Color Theme to Body Class
function apasos_body_class( $classes ) {
	$apasos_color_theme = get_theme_mod( 'apasos_color_theme' );
	$classes[]          = esc_attr( $apasos_color_theme );
	return $classes;
}
add_filter( 'body_class', 'apasos_body_class' );

if (get_option('my_google_analytics')) {
	function add_google_analytics_code() {
	  echo get_option('my_google_analytics');
	}
	add_action( 'wp_head', 'add_google_analytics_code' );
}

function cambiar_limite_excerpt_estatico($limite) {
	return 40;
   }
add_filter ('excerpt_length', 'cambiar_limite_excerpt_estatico', 999);