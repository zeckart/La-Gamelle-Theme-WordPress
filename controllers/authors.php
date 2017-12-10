<?php 
	
function zk_get_author_avatar($user_id=false, $size=96*3){
	if($user_id==false){
		$user_id=get_the_author_meta("ID");
	}
	
	$avatar=get_avatar($user_id, $size);
	
	return $avatar;
}

function zk_get_author_social_list(){

	return array("pinterest","facebook");
}

?>