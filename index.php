<?php get_header(); ?>
	<?php if ( is_front_page() || is_home() ) : ?>


	<?php else : ?>
		<header id="page-header">
			<div class="wrap">
				<?php the_title( '<h2 class="title">', '</h2>' ); ?>
			</div>
		</header>
	<?php endif; ?>

	<main id="main">
		<section class="ad">
			<?php if ( is_active_sidebar( 'ad-widget-1' ) ) : ?>
				<div id="ad-widget-1" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'ad-widget-1' ); ?>
				</div>
			<?php endif; ?>
		</section>
		<section id="featured">
            <div class="ftd-left">
			<h2>
					<?php $nlURL = get_option('titulo-1'); 
					if (!empty($nlURL)){echo get_option('titulo-1');} 	
					unset($nlURL) ?>
					<i class="far fa-hand-point-down"></i></h2>
				<?php if ( is_active_sidebar( 'slider-widgets-1' ) ) : ?>
					<div id="slider-widgets-1" class="primary-sidebar widget-area" role="complementary">
						<?php dynamic_sidebar( 'slider-widgets-1' ); ?>
					</div>
				<?php endif; ?>
			</div>
            <div class="ftd-right-up">
                <h2>
					<?php $nlURL = get_option('titulo-2'); 
					if (!empty($nlURL)){echo get_option('titulo-2');} 	
					unset($nlURL) ?>
					<i class="far fa-hand-point-down"></i></h2>
				<?php if ( is_active_sidebar( 'slider-widgets-2' ) ) : ?>
					<div id="slider-widgets-2" class="primary-sidebar widget-area" role="complementary">
						<?php dynamic_sidebar( 'slider-widgets-2' ); ?>
					</div>
				<?php endif; ?>
            </div>
            <div class="ftd-right-down">
				<?php if ( is_active_sidebar( 'slider-widgets-3' ) ) : ?>
					<div id="slider-widgets-3" class="primary-sidebar widget-area" role="complementary">
						<?php dynamic_sidebar( 'slider-widgets-3' ); ?>
					</div>
				<?php endif; ?>
			</div>
        </section>
		<section class="ad-2">
			<?php if ( is_active_sidebar( 'ad-widget-2' ) ) : ?>
				<div id="ad-widget-2" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'ad-widget-2' ); ?>
				</div>
			<?php endif; ?>
		</section>
		<section class="selected">
				<h2>
				<?php $nlURL = get_option('titulo-3'); 
					if (!empty($nlURL)){echo get_option('titulo-3');} 	
					unset($nlURL) ?>
				</h2>
			<?php if ( is_active_sidebar( 'selected-category' ) ) : ?>
				<div id="selected-category" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'selected-category' ); ?>
				</div>
			<?php endif; ?>
		</section>
		<section class="ad-3">
			<?php if ( is_active_sidebar( 'ad-widget-3' ) ) : ?>
				<div id="ad-widget-3" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'ad-widget-3' ); ?>
				</div>
			<?php endif; ?>
		</section>
		<section class="diy-projects">
			<h2>
				<?php $nlURL = get_option('titulo-4'); 
					if (!empty($nlURL)){echo get_option('titulo-4');} 	
					unset($nlURL) ?>
			</h2>
			<div class="home-posts">
				<div class="left">
					<?php
					if ( have_posts() ) {
						$x = 1;
						while ( have_posts() ) {
							the_post();
							get_template_part( 'template-parts/content' );
							if($x % 3 == 0) : ?>
								<article class="inserted-ad">
									<?php if ( is_active_sidebar( 'ad-widget-4' ) ) : ?>
										<div id="ad-widget-4" class="primary-sidebar widget-area" role="complementary">
											<?php dynamic_sidebar( 'ad-widget-4' ); ?>
										</div>
									<?php endif; ?>
								</article>
								<?php
							endif;
							if(($x % 7) == 0) : ?>
								<div class="block">
									<?php if ( is_active_sidebar( 'left-blocks' ) ) : ?>
										<div id="left-blocks" class="primary-sidebar widget-area" role="complementary">
											<?php dynamic_sidebar( 'left-blocks' ); ?>
										</div>
									<?php endif; ?>
								</div>
								<?php
							endif;
							$x++;
						}
					} else {
						get_template_part( 'template-parts/content', 'none' );
					}
					?>
				</div>
				<div class="right">
					<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
						<div id="right-sidebar" class="primary-sidebar widget-area" role="complementary">
							<?php dynamic_sidebar( 'right-sidebar' ); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</section>
		<?php get_template_part( 'template-parts/pagination' ); ?>
	</main>
<?php get_footer(); ?>
