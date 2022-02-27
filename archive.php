<?php get_header(); ?>

	<div id="page-header">
		<div class="wrap">
			<?php the_archive_title( '<h2 class="title">', '</h2>' ); ?>
			<?php the_archive_description( '<div class="subtitle"><p>', '</p></div>' ); ?>
		</div>
	</div>
	<main id="main" class="home-posts">
		<div class="container">
		<?php
			if ( have_posts() ) {
				$x = 1;
				while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/content' );
					if($x % 3 == 0) : ?>
						<article>
							<?php if ( is_active_sidebar( 'ad-widget-4' ) ) : ?>
									<div id="ad-widget-4" class="primary-sidebar widget-area" role="complementary">
										<?php dynamic_sidebar( 'ad-widget-4' ); ?>
									</div>
							<?php endif; ?>
						</article>
						<?php
					endif;
					if(($x % 7) == 0 ) : ?>
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
		</div><!-- .wrap -->
	</main>
	<?php get_template_part( 'template-parts/pagination' ); ?>

<?php get_footer(); ?>
