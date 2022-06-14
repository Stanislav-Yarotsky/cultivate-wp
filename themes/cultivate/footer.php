<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cultivate
 */

?>
<footer class="footer">
	<div class="container">
		<div class="footer__wrap">
			<div class="footer__top">
				<a href="/" class="logo-footer"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-footer.svg" alt="Logo Footer"></a>
				<?php
				wp_nav_menu([
					'theme_location'  => 'menu-2',
					'menu'            => '',
					'container'       => '',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'footer__menu',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => '',
				]);
				?>

				<?php if (have_rows('social', 'option')) : ?>
					<ul class="footer-social">
						<?php while (have_rows('social', 'option')) : the_row(); ?>
							<li class="footer-social__item"><a href="<?php the_sub_field('social-link', 'option'); ?>" target="_blank" class="footer-social__link social__link--fb" aria-label="Facebook"><img src="<?php the_sub_field('social-logo', 'option'); ?>" alt="Facebook"></a></li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
			<div class="footer__bottom">
				<div class="footer__copy">
					<p>© <span class="year"></span>
						<script>
							let today = new Date();
							let year = today.getFullYear();
							document.querySelector('.year').innerHTML = year;
						</script>
						<?php if (have_rows('copyright_box', 'option')) : while (have_rows('copyright_box', 'option')) : the_row(); ?>
							<?php the_sub_field('text'); ?>
								<?php if (have_rows('link-box', 'option')) : while (have_rows('link-box', 'option')) : the_row(); ?>
									<a href="<?php the_sub_field('link'); ?>" target="_blank">
										<?php the_sub_field('name'); ?>
								<?php endwhile; endif; ?>
									</a>.
						<?php endwhile; endif; ?>
					</p>
				</div>
				<div class="footer__links">
					<a href="terms.html" target="_blank">Privacy Policy</a>
					<a href="terms.html" target="_blank">Terms of Use</a>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>