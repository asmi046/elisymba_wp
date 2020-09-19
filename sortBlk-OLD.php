<?php

global $query_string;
parse_str($query_string, $args);	



$metavalue = empty($_REQUEST["hp"])?"":$_REQUEST["hp"];  
$metakey = empty($_REQUEST["sortparam"])?"orderCat":$_REQUEST["sortparam"];  
$order = empty($_REQUEST["ordn"])?"ASC":$_REQUEST["ordn"];  




	$args['meta_value'] = $metavalue;
	$args['meta_key'] = $metakey;
	$args['meta_compare'] = "LIKE";
	$args['orderby'] = 'meta_value_num';
	$args['order'] = $order;
	//print_r($args);
	query_posts( $args );
?>