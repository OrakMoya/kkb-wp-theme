<?php
get_header();
?>


<article class="px-8 py-12 " id="home">
	<div class="container mx-auto max-w-screen-xl">
		<h1 class="text-5xl mb-12 font-bold ">Objave</h1>
		<div class="grid  grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
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
