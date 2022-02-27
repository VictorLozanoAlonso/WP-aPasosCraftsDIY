<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
<?php if ( ! is_single() ) : ?>
	<div class="header-content">
		<?php the_title( '<h2 class="title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
	</div>
	<?php endif; ?>
	<div class="entry-content">
		<?php
			if ( has_post_thumbnail() ) {?>
				<a href="<?php echo esc_url( get_permalink() ) ?>"><?php the_post_thumbnail(); ?></a>
		<?php
			}
		?>
	</div>
</article>
