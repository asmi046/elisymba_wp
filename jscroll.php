<meta charset="UTF-8">
<?php 

require_once("../../../wp-config.php");

$path = "jscroll.php";


function is_ajax(){

	if(isset($_SERVER["HTTP_X_REQUESTED_WITH"]) &&
	   !empty($_SERVER["HTTP_X_REQUESTED_WITH"]) &&
	   strtolower($_SERVER["HTTP_X_REQUESTED_WITH"]) == "xmlhttprequest"){

		return true;
	}

	return false;
}

function is_get(){

	if($_SERVER["REQUEST_METHOD"] == "GET"){

		return true;
	}

	return false;
}

if(is_get() && is_ajax()){

		$start = (int) $_GET["start"];
		$count = (int) $_GET["count"];
		$cat = (int) $_GET["cat"];
	
		$categories = array(-49,-31,-23);
		$catstr = "";
		if (!empty($cat)) {
			$categories[] = $cat;
			$catstr = "&cat=".$cat;
		}
		
		$products = new WP_Query( array(
			'post_type' => 'post',
			'posts_per_page' => $count,
			'offset' => $start,
			'order' => "ASC",
			'cat' => $categories,
			'meta_query' => array(
				'orderCatM' => array (
					'key'     => '_tovar_order',
					'compare' => 'EXIST',
					'type'    => 'NUMERIC',
				)),
			'orderby' => 'orderCatM',
			'order' => "ASC"
		) );
		
		if (empty ($products->posts) ) exit;
		
		foreach ($products->posts as $post){
			
			setup_postdata($post);
			get_template_part( 'tovar', 'elem' );
		}

		/*
		echo "<pre>";
		print_r($products->posts);
		echo "</pre>";
		*/
		
			
	

		die ("<div class='next'><a class = 'aloadet'  href='".get_template_directory_uri()."/".$path."?start=".($start + $count)."&count=".$count."".$catstr ."'>next</a></div>");

	
		
}

exit;