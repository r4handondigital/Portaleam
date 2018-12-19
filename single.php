<?php
	$post = $wp_query->post;
	if (in_category(1)) {
 		include (TEMPLATEPATH.'/single-noticias.php');
	return;

	}elseif (in_category(4)){
	 	include (TEMPLATEPATH.'/single-entrevistas.php');
 	return;
}	else {
	 	include (TEMPLATEPATH.'/single-eventos.php');
 	return;
}

?>