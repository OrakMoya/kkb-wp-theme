</main>
<?php do_action('tailpress_content_end'); ?>

</div>

<?php do_action('tailpress_content_after'); ?>

<footer id="colophon" class="site-footer text-white border-t border-neutral-800 bg-neutral-900 py-12 px-8" role="contentinfo">
	<?php do_action('tailpress_footer'); ?>
	<div class="flex container flex-col justify-center sm:justify-between sm:flex-row max-w-screen-lg mx-auto mb-12 gap-x-4">
		<div class="w-full flex flex-col items-center mb-12 sm:mb-0 sm:items-start">
			<?php if (has_custom_logo()): ?>
				<div class="w-20 mb-3"><?php echo the_custom_logo(); ?></div>
			<?php endif ?>
			<p class="font-arvo text-xl"><?php echo get_bloginfo('name'); ?> </p>
			<p class="text-sm text-neutral-500"><?php echo get_bloginfo('description'); ?> </p>
		</div>
		<div class="w-full justify-center sm:justify-end flex sm:flex-row gap-x-6 sm:gap-x-12 sm:pr-4">
			<div class="w-full sm:w-fit min-w-fit text-right sm:text-left">
				<h3 class="sm:text-lg font-bold mb-1">Društvene mreže</h3>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer-socials',
						'container_id'    => 'footer-socials-menu',
						'container_class' => '',
						'menu_class'      => '',
						'li_class'        => 'text-sm sm:text-base capitalize hover:font-bold focus:font-bold hover:cursor-pointer',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>
			<div class="w-full min-w-fit md:w-fit">
				<h3 class="sm:text-lg font-bold mb-1">Informacije</h3>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer-info',
						'container_id'    => 'footer-info-menu',
						'container_class' => '',
						'menu_class'      => '',
						'li_class'        => 'text-sm sm:text-base capitalize hover:font-bold focus:font-bold hover:cursor-pointer',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>
		</div>
	</div>

	<div class="container mx-auto text-center text-gray-500">
		&copy; <?php echo date_i18n('Y'); ?> - <?php echo get_bloginfo('name'); ?>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>
