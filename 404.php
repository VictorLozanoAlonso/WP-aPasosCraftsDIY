<?php get_header(); ?>

	<header id="page-header">
		<div class="wrap">
			<h2 class="title"><?php esc_html_e( 'Page Doesn&rsquo;t Exist', 'apasos' ); ?></h2>
		</div>
	</header>

	<main id="main">
		<div class="wrap">
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		</div>
	</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
