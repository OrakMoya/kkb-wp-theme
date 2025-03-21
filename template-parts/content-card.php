<div class="block w-full relative bg-neutral-900 rounded-md overflow-clip border border-neutral-700" href="<?= get_permalink() ?>">
	<?php if (has_post_thumbnail()): ?>
		<img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_post_thumbnail_caption() ?>" class="scale-105 w-full h-full object-cover absolute brightness-[20%] blur-sm">
	<?php endif; ?>
	<div class="flex flex-col relative">
		<a class="aspect-video w-full block group overflow-clip" href="<?= get_permalink() ?>">
			<img class="w-full h-full group-hover:scale-105 transition object-cover drop-shadow-md <?php if (!has_post_thumbnail()) echo "brightness-[35%] blur-xs scale-105 group-hover:scale-110"; ?>" src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url() : get_theme_mod('kkb_home_missing_thumbnail_placeholder') ?>" alt="<?= get_the_post_thumbnail_caption() ?>" />
		</a>
		<div class=" w-full px-6 py-4 mb-2">
			<a href="<?= get_permalink() ?>">
				<h2 class="drop-shadow-md text-2xl font-bold"><?= the_title() ?></h2>
			</a>

			<p class="text-neutral-500 text-sm">
				<a href="<?= esc_url(get_author_posts_url(get_the_author_meta('ID'))) ?>" class="hover:text-white transition">
					<?= get_the_author() ?>
				</a> - <?= get_the_date() ?>
			</p>
			<p class="drop-shadow-md py-2"> <?= wp_trim_words(get_the_excerpt(), 30, '...') ?> </p>
			<a class="text-sm text-neutral-500 hover:text-white transition group" href="<?= get_permalink() ?>">Read more <span class="transition-all relative ml-2 right-2 scale-75 opacity-0 group-hover:opacity-100 group-hover:right-0 group-hover:scale-100">></span> </a>
		</div>
	</div>
</div>
