<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header mb-4">
		<?php the_title(sprintf('<h1 class="entry-title text-center text-2xl lg:text-5xl font-extrabold leading-tight mb-1"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>'); ?>

		<?php if (!is_front_page()): ?>
			<span class="text-neutral-500"><?= get_the_author() ?>, <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class=""><?php echo get_the_date(); ?></time></span>
		<?php endif; ?>
	</header>

	<div class="entry-content">
		<?php if (has_post_thumbnail()) { ?>
			<div class="mb-4">
				<?php the_post_thumbnail() ?>
			</div>
		<?php } ?>



		<?php
		the_content(); ?>

		<?php
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

</article>
