<?php
get_header();
?>


<article class="px-8 py-6 " id="index">
	<div class="container mx-auto max-w-screen-xl">
		<h1 class="text-5xl mb-12 mt-8 font-bold ">Index</h1>
		<div class="grid grid-cols-3 gap-4">
			<?php
			if (have_posts()):
				while (have_posts()):
					the_post();
			?>
					<?php get_template_part('template-parts/content', 'card'); ?>
			<?php
				endwhile;
			endif;
			?>
		</div>
	</div>

</article>

<?php
get_footer();
