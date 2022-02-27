<!doctype html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="theme-color" content="#fff" />
<link rel="profile" href="https://gmpg.org/xfn/11" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;500;700&family=Ribeye&family=Ribeye+Marrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>
<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
} else {
	do_action( 'wp_body_open' );
}
?>
	
	<div class="social">
		<div class="site-name">
			<?php if ( is_front_page() || is_home() ) : ?>
				<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"  rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"  rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
	    </div>
		<div>
			<?php $nlURL = get_option('my_youtube_url'); ?>
			<?php if (!empty($nlURL)) { ?>
				<a href="<?php echo get_option('my_youtube_url');?>" target="_blank"><i class="fab fa-youtube"></i></a>
			<?php } ?>
			<?php $nlURL = get_option('my_facebook_url'); ?>
			<?php if (!empty($nlURL)) { ?>
				<a href="<?php echo get_option('my_facebook_url');?>" target="_blank"><i class="fab fa-facebook"></i></a>
			<?php } ?>
			<?php $nlURL = get_option('my_instagram_url'); ?>
			<?php if (!empty($nlURL)) { ?>
				<a href="<?php echo get_option('my_instagram_url');?>" target="_blank"><i class="fab fa-instagram"></i></a>
			<?php } ?>
			<?php $nlURL = get_option('my_twitter_url'); ?>
			<?php if (!empty($nlURL)) { ?>
				<a href="<?php echo get_option('my_twitter_url');?>" target="_blank"><i class="fab fa-twitter"></i></a>
			<?php } ?>	
			<?php $nlURL = get_option('my_pinterest_url'); ?>
			<?php if (!empty($nlURL)) { ?>
				<a href="<?php echo get_option('my_pinterest_url');?>" target="_blank"><i class="fab fa-pinterest"></i></a>
			<?php } ?>	
			<?php unset($nlURL) ?>
		</div>
	</div>
    <header>
        <div class="nav-bar">
            <div id="logo-min">
				<?php the_custom_logo(); ?>
            </div>
            <div id="logo-name">
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"  rel="home"><?php bloginfo( 'name' ); ?></a></p>
            </div>
            <div class="store">
				<?php $nlURL = get_option('my_shop_url'); ?>
				<?php if (!empty($nlURL)) { ?>
					<a href="<?php echo get_option('my_shop_url');?>" target="_blank"><i class="fas fa-store"></i></a>
				<?php } ?>	
				<?php unset($nlURL) ?>
            </div>
        </div>
		<?php if ( is_active_sidebar( 'header-widgets-1' ) ) : ?>
			<div id="header-widgets-1" class="primary-sidebar widget-area" role="complementary">
				<?php dynamic_sidebar( 'header-widgets-1' ); ?>
			</div>
		<?php endif; ?>
		<div id="nav">
			<nav id="main-menu">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'main-menu',
					'menu'           => __( 'Main Menu', 'apasos' ),
					'depth'          => 2,
				) );
				?>
			</nav>
		</div><!-- #nav -->
    </header>
