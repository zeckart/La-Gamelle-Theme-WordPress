<?php 
/*
	DISPLAY THE AUTHOR INFOMARMATION
	
admin_color
aim
comment_shortcuts
description
display_name
first_name
ID
jabber
last_name
nickname
plugins_last_view
plugins_per_page
rich_editing
syntax_highlighting
user_activation_key
user_description
user_email
user_firstname
user_lastname
user_level
user_login
user_nicename
user_pass
user_registered
user_status
user_url
yim
	
*/
?>
<div class="author author-block clearfix">
	<?php
	
	$ID= get_the_author_meta("ID");
	$author_url=get_author_posts_url( $ID );
	$first_name=get_the_author_meta("first_name", $ID);
	$user_bio=get_the_author_meta("user_description", $ID);
	$socials=zk_get_author_social_list();
	?>

		
	<figure>
		<?php echo zk_get_author_avatar(); ?>
	</figure>
	<div class="author-info">
		<h3>
			<a href="<?php echo $author_url; ?>">
				<?php echo get_the_author_meta( 'first_name' ); ?>
			</a>
		</h3>
		
		<p><?php echo $user_bio; ?></p>
		<div class="author-socials">
			<ul>
				<?php
				
				foreach($socials as $social){
					if(get_the_author_meta( $social, $ID )){ ?>
					
						<li class="<?php echo $social ?>">
							<a href="<?php echo get_the_author_meta($social, $ID); ?>">
								<i class="fa fa-<?php echo $social; ?>"></i>
								<?php echo ucfirst($social); ?>
							</a>
						</li>
					<?php
					}
				}
				?>
			
			</ul>
			<a href="<?php echo $author_url; ?>" class="btn">
				Afficher toutes les recettes de <?php echo $first_name; ?> (<?php echo count_user_posts($ID,'recette'); ?>)
			</a>
		</div>
	</div>
</div>


