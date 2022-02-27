
	<div id="hero">
		<div class="wrap flex-grid">
			<?php if ( is_active_sidebar( 'footer-widgets-1' ) ) : ?>
				<?php dynamic_sidebar( 'footer-widgets-1' ); ?>

			<?php else : ?>
				<section class="widget col-lg">
					<h3><?php esc_html_e( 'Recent Posts', 'apasos' ); ?></h3>
					<ul>
						<?php
						$apasos_recent = new WP_Query( array(
							'posts_per_page'      => 5,
							'ignore_sticky_posts' => 1,
						) );
						if ( $apasos_recent->have_posts() ) :
							while ( $apasos_recent->have_posts() ) :
								$apasos_recent->the_post();
								the_title( '<li><a href="' . esc_url( get_permalink() ) . '">', '</a></li>' );
							endwhile;
							wp_reset_postdata();
						endif;
						?>
					</ul>
				</section>

				<section class="widget col-lg">
					<h3><?php esc_html_e( 'Tags', 'apasos' ); ?></h3>
					<p class="tag-cloud"><?php wp_tag_cloud( 'number=38' ); ?></p>
				</section>
			<?php endif; ?>
		</div><!-- .wrap -->
	</div><!-- #hero -->
