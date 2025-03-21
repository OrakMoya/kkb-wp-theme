<?php
get_header();
?>
<div class="">
	<article id="page-<?php the_ID(); ?>" <?php post_class('mx-auto'); ?>>

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
