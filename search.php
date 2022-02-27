<?php get_header(); ?>

<div id="page-header">
	<div class="wrap">
		<p class="search-results"><?php esc_html_e( 'Resultados encontrados para:   ' ); ?>&rdquo;<?php echo get_search_query(); ?>&rdquo;</p>
	</div>
</div>

	<main id="main" class="home-posts">
		<div class="container">
		<?php
			if ( have_posts() ) {
				$x = 1;
				while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/content', 'exerpt' );
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
