<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>

<body <?php body_class('bg-neutral-900 text-white antialiased'); ?>>

	<?php do_action('tailpress_site_before'); ?>

	<div id="page" class="min-h-screen flex flex-col">

		<?php do_action('tailpress_header'); ?>

		<header class="px-8 py-4 border-b border-neutral-800 bg-neutral-900 text-white ">

			<div class="mx-auto container h-full">
				<div class="lg:flex lg:justify-between lg:items-center">
					<div class="flex justify-between items-center">
						<div class="flex items-center gap-x-4">
							<div class="w-20 md:w-28 py-2 block ">
								<?php if (has_custom_logo()) { ?>
									<?php the_custom_logo(); ?>
								<?php } ?>
							</div>
							<div class="group max-[400px]:hidden">
								<a
									href="<?php echo get_bloginfo('url'); ?>"
									class="text-lg sm:text-xl md:text-2xl/snug uppercase font-arvo relative">
									<?php echo get_bloginfo('name'); ?>
								</a>

								<?php if (get_bloginfo('description')) { ?>
									<p class="text-xs/snug md:text-sm/snug text-neutral-400">
										<?php echo get_bloginfo('description'); ?>
									</p>
								<?php } ?>
							</div>
						</div>

						<div class="lg:hidden">
							<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
								<svg viewBox="0 0 20 20" class=" inline-block w-6 h-6" version="1.1"
									xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
										<g id="icon-shape">
											<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
												id="Combined-Shape"></path>
										</g>
									</g>
								</svg>
							</a>
						</div>
					</div>

					<?php
					wp_nav_menu(
						array(
							'container_id'    => 'primary-menu',
							'container_class' => 'hidden mt-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
							'menu_class'      => 'lg:flex lg:flex-row flex-col justify-center lg:-mx-4',
							'theme_location'  => 'primary',
							'li_class'        => 'w-fit mx-auto lg:mx-4  text-xl lg:text-xl transition-all duration-100 hover:font-bold my-1 text-center lg:my-0',
							'fallback_cb'     => false,
						)
					);
					?>
				</div>
			</div>
		</header>

		<div id="content" class="site-content grow bg-neutral-900">
			<?php do_action('tailpress_content_start'); ?>
			<main class="">
