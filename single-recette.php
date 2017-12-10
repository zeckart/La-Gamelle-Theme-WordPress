<?php get_header(); ?>
<div class="container">
	<div class="recipe_header">
		<div class="recipe_image">
			<?php the_post_thumbnail('recipe-header'); ?>
		</div>
		<div class="recipe_intro">
		
			<h1><?php the_title(); ?></h1>
			<div class="info_recette">
				<?php echo get_info_recette(get_the_id()); ?>
			</div>
			<?php the_excerpt(); ?>
		
			<?php
				if (function_exists('zk_get_like_button')) {
					echo zk_get_like_button(get_the_ID());
				}
			?>			
		</div>
	</div>
</div>
<div class="container sidebar_left">
	<aside>
		<div class="ingredients">
			<p class="heading--h2">
				<?php _e('Il vous faut', ZK_THEME_DOMAIN ) ?>
			</p>
				<?php get_template_part('parts/ingredients'); ?>
		</div>
	
	</aside>
	<main>
		<?php  while ( have_posts() ) : the_post(); ?>
			<p class="heading--h2">
				<?php _e('La recette', ZK_THEME_DOMAIN ) ?>
			</p>
			<?php the_content(); ?>
		<?php endwhile; ?>
	</main>
</div>
<div class="comments_row">
	<div class="container">

		<?php comments_template( '', true ); ?>
	</div>
</div>
<?php get_footer(); ?>