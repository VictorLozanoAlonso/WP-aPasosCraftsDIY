		<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
			<div class="header-content">
					<?php the_title( '<h3 class="title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
			</div>
			<div class="entry-content">
					<?php
					if ( has_post_thumbnail() ) {?>
						<a href="<?php echo esc_url( get_permalink() ) ?>"><?php the_post_thumbnail(); ?></a>
					<?php	}
					 the_excerpt();
					?>
			</div>
		</article>
