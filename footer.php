
	<footer id="footer">
			<div class="wrap">
				<div id="footer-widgets" class="flex-grid">
					<?php if ( is_active_sidebar( 'footer-widgets-1' ) ) : ?>
						<?php dynamic_sidebar( 'footer-widgets-1' ); ?>
					<?php endif; ?>
					<?php if ( is_active_sidebar( 'footer-widgets-2' ) ) : ?>
						<?php dynamic_sidebar( 'footer-widgets-2' ); ?>
					<?php endif; ?>
					<?php if ( is_active_sidebar( 'footer-widgets-3' ) ) : ?>
						<?php dynamic_sidebar( 'footer-widgets-3' ); ?>
					<?php endif; ?>
				</div><!-- #footer-widgets -->
				<div class="copyright">
						<?php esc_html_e( '&copy;', 'apasos' ); ?> <?php bloginfo( 'name' ); ?><br />
				</div>
			</div>
		<div class="legal">
		<?php if ( is_active_sidebar( 'legal-block' ) ) : ?>
			<div id="legal-block" class="primary-sidebar widget-area" role="complementary">
				<?php dynamic_sidebar( 'legal-block' ); ?>
			</div>
		<?php endif; ?>
		</div>
	</footer>
	<div class="mobile-menu">
		<div class="menu-footer"></div>
	</div>	

<?php wp_footer(); ?>

</body>
</html>
