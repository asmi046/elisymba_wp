<?php

global $query_string;
parse_str($query_string, $args);	

$metaquery = array(
	'relation' => 'AND',
	'orderCatM' => array (
		'key'     => '_tovar_order',
		'compare' => 'EXIST',
		'type'    => 'NUMERIC',
	),
	
	'priceM' => array (
		'key'     => 'price',
		'value' => '0',
		'compare' => '>',
		'type'    => 'NUMERIC',
	),

	'predzak' => array (
		'key'     => '_sclad_count',
		'value' => '0',
		'compare' => '>',
		'type'    => 'NUMERIC',
	),

	// 'predzak' => array (
	// 	'key'     => '_tovar_sklad_drop',
	// 	'value' => 'yes',
	// 	'compare' => '=',
	// 	'type'    => 'CHAR',
	// ),
);

//$metavalue = empty($_REQUEST["hp"])?"":$_REQUEST["hp"];  
$orderby = ($_REQUEST["sortparam"] === "price")?"priceM":"orderCatM";  
$metakey = empty($_REQUEST["sortparam"])?"_tovar_order":$_REQUEST["sortparam"];  
$order = empty($_REQUEST["ordn"])?"ASC":$_REQUEST["ordn"];  


	
	
	

// if (!empty($_REQUEST["hp"]))
// {


// $args['meta_key'] = $_REQUEST["hp"];


// $orderby = 'meta_value_num';  
// $order = "DESC";  

// }

if (is_archive()||is_home()){
	$pageNum = 1; 
	if( $cur_page = get_query_var('paged') ) { 
		$pageNum = $cur_page;
	}
	
}

	$args['meta_query'] = $metaquery;
	$args['orderby'] = $orderby;
	$args['order'] = $order;	
	
	//echo "<pre>";
	//print_r($args);
	//echo "</pre>";
	query_posts( $args );
	
?>