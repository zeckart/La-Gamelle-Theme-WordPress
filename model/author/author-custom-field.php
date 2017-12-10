<?php


add_action( 'show_user_profile', 'zk_points_user_profile_fields' );
add_action( 'edit_user_profile', 'zk_points_user_profile_fields' );
function zk_points_user_profile_fields( $user ) { 
	$socials=zk_get_author_social_list();
	?>

	<h3><?php _e("Réseaux sociaux", "blank"); ?></h3>
	
	<table class="form-table">
		
		<?php foreach($socials as $social){ ?>
			<tr>
				<th>
					<label for="<?php echo $social; ?>">
						<?php echo ucfirst($social); ?> URL
					</label>
				</th>
				<td>
					<input type="text" name="<?php echo $social; ?>" id="<?php echo $social; ?>" value="<?php echo esc_attr( get_the_author_meta( $social, $user->ID ) ); ?>" class="regular-text" /><br />
					<span class="description"><?php _e("Adresse web du profile ".ucfirst($social)); ?></span>
				</td>
			</tr>
		<?php } ?>
	</table>
	
<?php }
	

add_action( 'personal_options_update', 'zk_save_points_user_profile_fields' );
add_action( 'edit_user_profile_update', 'zk_save_points_user_profile_fields' );

function zk_save_points_user_profile_fields( $user_id ) {
	$socials=zk_get_author_social_list();
	
	if ( !current_user_can( 'edit_user', $user_id ) ) { 
		return false; 
	}
	foreach($socials as $social){
		update_user_meta( $user_id, $social, $_POST[$social] );
	}
}