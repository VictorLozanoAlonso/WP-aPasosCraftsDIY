<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
	<div class="entry-content-page">
		<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			}
			the_content();
		?>
	</div>
</article>
