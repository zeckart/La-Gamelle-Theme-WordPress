<?php get_header(); ?>
<div class="container">
	<main>
		<?php  while ( have_posts() ) : the_post(); ?>
			<p class="heading--h2">
				<?php the_title(); ?>
			</p>
			<?php the_content(); ?>
		<?php endwhile; ?>
	</main>
</div>
<?php get_footer(); ?>

