
					<div class="entry-info">
						<p>
							<span class="entry-author">
								<?php esc_html_e( 'Posted by ', 'apasos' ); ?>
								<?php the_author_link(); ?>
							</span>

							<span class="entry-date">
								<?php esc_html_e( ' on ', 'apasos' ); ?>
								<a href="<?php echo esc_url( get_permalink() ); ?>">
									<?php the_time( get_option( 'date_format' ) ); ?>
								</a>
							</span>

							<?php
							if ( ! is_singular() ) {
								esc_html_e( ' &ndash; ', 'apasos' );
								comments_popup_link( false, false, false, 'entry-comments' );
							}
							?>
							<br />

							<span class="entry-categories">
								<?php esc_html_e( 'Posted in ', 'apasos' ); ?>
								<?php the_category( ', ' ); ?>
							</span>

							<?php the_tags( '<span class="entry-tags"> &ndash; ' . __( 'Tags:', 'apasos' ) . ' ', ', ', '</span>' ); ?>
						</p>

						<?php if ( is_single() ) : ?>
							<p>
								<?php previous_post_link(); ?> |
								<?php next_post_link();	?>
							</p>
						<?php endif; ?>

						<?php edit_post_link(); ?>
						<hr />
					</div>
