<?php
get_header();
$imgs_dir = get_bloginfo('stylesheet_directory') . '/images/';
?>


<div class="w-full h-full bg-neutral-950 pb-24">

	<div class="flex px-16 md:px-8 relative overflow-clip drop-shadow-lg">
		<div class=" w-full h-full object-cover blur-xs absolute left-0 top-0 scale-110"
			style="filter: brightness(<?= get_theme_mod('kkb_frontpage_landing_image_brightness', 35) / 100 ?>)">
			<img class="w-full h-full object-cover saturate-0" src="<?= get_theme_mod('kkb_frontpage_landing_image',  $imgs_dir . 'fp-0.jpg') ?>" />

		</div>
		<div class="container mx-auto flex mt-32 sm:mt-48 mb-64 relative gap-x-14">
			<div class="w-full min-w-fit relative">
				<h1
					class="text-5xl min-[380px]:text-5xl break-after-all md:break-normal min-w-min w-2/3 md:w-auto md:text-5xl lg:text-6xl xl:text-7xl tracking-tight font-arvo mb-2">
					<?php echo get_bloginfo('name'); ?>
				</h1>

				<?php if (get_bloginfo('description')) { ?>
					<p class="text-base md:text-lg lg:text-xl xl:text-2xl text-neutral-400 drop-shadow-md">
						<?php echo get_bloginfo('description'); ?>
					</p>
				<?php } ?>
				<div class="flex gap-x-4 mt-12 items-center">
					<a href="/"
						class="bg-white  hover:scale-105 transition-all px-4 py-2 text-black rounded-md drop-shadow-md text-base lg:text-lg">
						Učlani se
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="py-32 px-8 bg-neutral-900">
		<div class="container mx-auto flex flex-col-reverse md:flex-row gap-x-14 gap-y-8">
			<div class="w-full  overflow-clip">
				<img class="w-full h-auto" src="<?= $imgs_dir . 'fp-1.jpg' ?>" />
			</div>
			<div class="w-full">
				<h2 class="text-left text-4xl font-bold mx-auto mb-4">
					O nama
				</h2>
				<p class="text-xl">
					Udruga Kino Klub Bjelovar osnovana je početkom 2025. godine s ciljem promocije filmske umjetnosti među svim generacijama, prioritetno na području Bjelovara i okolice.
				</p>
			</div>
		</div>
	</div>

	<div class=" bg-linear-180 from-neutral-900 via-neutral-950 to-neutral-950 px-8">
		<div class="container mx-auto py-32">
			<h2 class="text-center text-4xl font-bold text-balance mx-auto">
				Voliš filmove? Još nisi snimio ideju koju imaš godinama?
			</h2>
		</div>
	</div>

	<?php if (have_posts()) : ?>
		<?php if (is_home()) : ?>
			<div class="bg-neutral-950">
				<h2 class="text-4xl mb-16 font-bold text-center">Vijesti</h2>
			</div>

			<div class="container px-8 grid mx-auto xl:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-x-8 gap-y-8">

				<?php
				while (have_posts()) :
					the_post();
				?>
					<div class="block w-full relative bg-neutral-900 rounded-md overflow-clip border border-neutral-700" href="<?= get_permalink() ?>">
						<?php if (has_post_thumbnail()): ?>
							<img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_post_thumbnail_caption() ?>" class="scale-105 w-full h-full object-cover absolute brightness-[20%] blur-sm">
						<?php endif; ?>
						<div class="flex flex-col relative">
							<a class="aspect-video w-full block group overflow-clip" href="<?= get_permalink() ?>">
								<img class="w-full h-full group-hover:scale-105 transition object-cover drop-shadow-md <?php if (!has_post_thumbnail()) echo "brightness-[35%] blur-xs scale-105 group-hover:scale-110"; ?>" src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url() : get_theme_mod('kkb_home_missing_thumbnail_placeholder') ?>" alt="<?= get_the_post_thumbnail_caption() ?>" />
							</a>
							<div class=" w-full px-6 py-4 mb-2">
								<h2 class="drop-shadow-md text-2xl font-bold"><?= the_title() ?></h2>
								<p class="text-neutral-500 text-sm mb-2">
									<a href="<?= esc_url(get_author_posts_url(get_the_author_meta('ID'))) ?>" class="hover:text-white transition">
										<?= get_the_author() ?>
									</a> - <?= get_the_date() ?>
								</p>
								<p class="drop-shadow-md mb-2 mx-2 border-l-2 border-neutral-500 pl-3"> <?= wp_trim_words(get_the_excerpt(), 30, '...') ?> </p>
								<a class="text-sm text-neutral-500 hover:text-white transition group" href="<?= get_permalink() ?>">Read more <span class="transition-all relative ml-2 right-2 scale-75 opacity-0 group-hover:opacity-100 group-hover:right-0 group-hover:scale-100">></span> </a>
							</div>
						</div>
					</div>
				<?php endwhile; ?>


			</div>
		<?php else: ?>
			<div class="px-8 mt-48">
				<div class="container max-w-screen-lg mx-auto">
					<?php get_template_part('template-parts/content', 'single'); ?>
				</div>
			</div>


		<?php endif; ?>
	<?php endif; ?>
</div>

<?php
get_footer();
