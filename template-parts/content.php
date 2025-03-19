<div class="group h-full">
	<article id="post-<?php the_ID(); ?>" <?php post_class('mb-12 border border-neutral-800 text-white rounded-md overflow-clip duration-400 group-hover:scale-[102%] transition-all h-full'); ?>>
		<div class="bg-neutral-900 rounded-md pb-1 h-full">

			<header class="entry-header mb-4">
				<div class="aspect-video object-cover rounded-b-md overflow-clip mb-4">
					<a href="<?= get_post_permalink() ?>">
						<img class="w-full h-full object-cover" src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_post_thumbnail_caption() ?>" />
					</a>
				</div>
				<div class="px-4">
					<?php
					the_title(
						sprintf(
							'<h2 class="entry-title text-2xl md:text-3xl font-extrabold leading-tight"><a href="%s" rel="bookmark">',
							esc_url(get_permalink())
						),
						'</a></h2>'
					); ?>
					<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="text-neutral-500"><?php echo get_the_date(); ?></time>
				</div>
			</header>

			<?php if (is_search() || is_archive()) : ?>

				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div>

			<?php else : ?>

				<div class="entry-content px-4 ">
					<?php
					/* translators: %s: Name of current post */
					the_content(
						sprintf(
							__('Continue reading %s', 'tailpress'),
							the_title('<span class="screen-reader-text">"', '"</span>', false)
						)
					);

					wp_link_pages(
						array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'tailpress') . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text">' . __('Page', 'tailpress') . ' </span>%',
							'separator'   => '<span class="screen-reader-text">, </span>',
						)
					);
					?>
				</div>

			<?php endif; ?>
		</div>

	</article>
</div>
