<?php get_header(); ?>

<div class="p-8 bg-neutral-900">
	<div class="container mx-auto max-w-screen-lg">

		<?php if (have_posts()) : ?>

			<?php
			while (have_posts()) :
				the_post();
			?>

				<?php get_template_part('template-parts/content', 'single'); ?>

				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;
				?>

			<?php endwhile; ?>

		<?php endif; ?>

	</div>
</div>

<?php
get_footer();
