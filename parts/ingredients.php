<?php

// check if the repeater field has rows of data
if( have_rows('ingredients_group') ){
	while ( have_rows('ingredients_group') ) { the_row()			
	// display a sub field value
	
	?>	
		
		<h3><?php the_sub_field('ingredient_group_title'); ?></h3>
		
		<?php 
		if( have_rows('ingredients') ){
			echo '<ul>';
			while ( have_rows('ingredients') ) : the_row();
				
				echo '<li>';
				
				if(!get_sub_field('hide_quantity')){
					$quantity_unity=get_sub_field('quantity_unity');
					
					echo '<span class="qty">';
					switch(get_sub_field('quantity')){
						case '0.5':
							echo '&frac12;'; // ½ 1/2 htmlentity
							break;
						case '0.3':
							echo '&frac13;'; // 1/3 htmlentity
							break;
						case '0.6':
							echo '&frac23;'; //  2/3 htmlentity
							break;
						case '0.25':
							echo '&frac14;'; // ¼ 1/4 htmlentity
							break;
						case '0.75':
							echo '&frac34;'; // ¾ 3/4 htmlentity
							break;
							
						default:
							the_sub_field('quantity');
							break;
					}
					if($quantity_unity['value']!='none'){
						echo $quantity_unity['label'];	
					}
					echo '</span>';
					
					echo '<span>';
					the_sub_field('ingredient');
					echo '</span>';										
				}
				echo '</li>';
			
					
			endwhile;
			echo '</ul>';
			
		}
		?>
	
	
	<?php
	} // Endwhile
	
}else{
	// no rows found

}

?>