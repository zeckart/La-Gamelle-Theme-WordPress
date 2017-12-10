<?php 

define('ZK_THEME_DOMAIN', 'tastyburger');

add_action('wp_enqueue_scripts', 'zk_tastyburger_enqueue');
function zk_tastyburger_enqueue(){
	wp_enqueue_style('main', get_template_directory_uri().'/assets/css/styles.css', '', '1.0');
	wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}

get_template_part('model/clean-wp-unused');
get_template_part('model/nav');
get_template_part('model/post-types/pt-recettes');
get_template_part('model/images-sizes');
get_template_part('model/acf/recette-fields');


get_template_part('model/author/author-custom-field');
get_template_part('controllers/authors');


function get_info_recette($post_id){
	ob_start();
	$difficulty=get_field('difficulty', $post_id);
	
	switch ($difficulty['value']) {
		case 'very_easy':
			$icon_difficulty='fa-thermometer-quarter';
			break;
		case 'easy':
			$icon_difficulty='fa-thermometer-half';
			break;
		case 'medium':
			$icon_difficulty='fa-thermometer-three-quarters';
			break;
		case 'hard':
			$icon_difficulty='fa-thermometer-full';
			break;
	}
	?>
	<ul>
		<li><i class="fa fa-clock-o"></i> <?php the_field('preparation_time', $post_id) ?> min</li>
		<li><i class="fa fa-fire"></i> <?php the_field('cooking_time', $post_id) ?> min</li>
		<li><i class="fa fa-users"></i> <?php the_field('people', $post_id) ?></li>
		<li><i class="fa <?php echo $icon_difficulty; ?>"></i> <?php echo $difficulty['label'] ?></li>

	</ul>
	<?php
	return ob_get_clean();
	
}






/* Custom callback function for Trackbacks/Pings, see comments.php */
function custom_pings($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
      <div class="comment-author vcard">
         
         <?php printf(__('<cite class="fn">%s</cite> <span class="says">wrote:</span>'), get_comment_author_link()) ?>
      </div>
      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.') ?></em>
         <br />
      <?php endif; ?>

      <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?></div>

      <?php comment_text() ?>
      <?php 
	      $phone = get_comment_meta( $comment->comment_ID, 'phone', true ); 
	      echo $phone;
      ?> 
      
      <?php 
	      $test = get_comment_meta( $comment->comment_ID, 'test', true ); 
	      echo $test;
      ?> 
      image array:
      
     <?php 
	      $images = get_comment_meta( $comment->comment_ID, 'comment_images', true ); 
	      echo print_r($images);
      ?> 
      <br>
      image message:
      
     <?php 
	      $images = get_comment_meta( $comment->comment_ID, 'message_image', true ); 
	      echo print_r($images);
      ?> 


      
     </div>
<?php
}

