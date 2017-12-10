<?php get_header(); ?>
<main>
	<div class="container">
		<div class="articles-list">
		<?php $loop = new WP_Query( array( 'post_type' => 'recette', 'posts_per_page' => '6' ) ); ?>
		<?php $i=0; while ( $loop->have_posts() ) : $loop->the_post(); $i++ ?>
			
				<article>
					<figure>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('recipe-thumb'); ?>
						</a>
					</figure>
					<div class="recette_content">
						<div class="info_recette">
							<?php echo get_info_recette(get_the_id()); ?>
						</div>
						<div class="article_excerpt">
							<h3>
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</h3>
							
						</div>
					</div>
					<a href="<?php the_permalink(); ?>" class="linkfull"></a>
				</article>
			
		<?php endwhile; wp_reset_query(); ?>
		</div>
	</div>
</main>

<a href="#modal">OPEN MY MODAL</a>
<div id="modal">
	this is my modal
</div>
<?php get_footer(); ?>