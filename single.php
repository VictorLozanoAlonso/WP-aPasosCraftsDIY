<?php get_header(); ?>

<main class="single">
		<section class="ad">
			<?php if ( is_active_sidebar( 'ad-widget-1' ) ) : ?>
				<div id="ad-widget-1" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'ad-widget-1' ); ?>
				</div>
			<?php endif; ?>
		</section>
		<div id="content">
			<div class="left">
			<div class="title">
				<?php the_title( '<h1>', '</h1>' ); ?>
			</div>
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/content-page' );

					//if ( comments_open() || get_comments_number() ) {
					//	comments_template();
					//}
				}
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
</main>

<?php get_footer(); ?>
