<?php
get_header();
?>
<div class="bg-neutral-900 px-8 py-12">
	<article id="page-<?php the_ID(); ?>" <?php post_class('max-w-screen-lg mx-auto'); ?>>


		<header class="entry-header mb-4">
			<?php the_title(sprintf('<h1 class="entry-title text-2xl lg:text-5xl font-extrabold leading-tight mb-1"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>'); ?>
			<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="text-sm text-gray-700"><?php echo get_the_date(); ?></time>
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
</div>

<?php
get_footer();
