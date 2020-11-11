<?php
// ini_set("display_errors",1);
// error_reporting(E_ALL);

require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;



include_once('options_page.php');

add_theme_support( 'woocommerce' );

register_nav_menus( array(
	'header_menu' => 'Главное меню'
) );

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 446, 318, true ); 
add_image_size( 'tovar-thumb',446, 318, true );

add_post_type_support( 'page', 'excerpt' );
/*-------------------------------*/


//---исключаем категории из поиска
function mysearchexclude($query) {
	if (($query->is_search)&&(!is_admin())) {
		$query->set('category__not_in', array(49,31,23));
	}
	return $query;
}
add_filter('pre_get_posts','mysearchexclude');

//---исключаем страницы из поиска
function searchExcludePages($query) {
	if (($query->is_search)&&(!is_admin())) {
		$query->set('post_type', 'post');
	}
 
	return $query;
}
 
add_filter('pre_get_posts','searchExcludePages');

function cf_search_join( $join ) {
global $wpdb;
 
if ( is_search() ) {
$join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
}
 
return $join;
}
add_filter('posts_join', 'cf_search_join' );
 
function cf_search_where( $where ) {
	global $pagenow, $wpdb;
	 
	if ( is_search() ) {
	$where = preg_replace(
	"/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
	"(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
	}
 
	return $where;
}
add_filter( 'posts_where', 'cf_search_where' );
 
function cf_search_distinct( $where ) {
	global $wpdb;
	 
	if ( is_search() ) {
	return "DISTINCT";
	}
	 
	return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );

/*-------------------------------*/


// Подключение стилей и nonce для Ajax в админку 
add_action('admin_head', 'my_assets_admin');
function my_assets_admin(){
	wp_enqueue_style("style-adm",get_template_directory_uri()."/style-admin.css");
	
	wp_localize_script( 'jquery', 'allAjax', array(
			'nonce'   => wp_create_nonce( 'NEHERTUTLAZIT' )
		) );
}
// Подключение стилей и nonce для Ajax и скриптов во фронтенд 

define("ALLVERSION", "1.0.115");

add_action( 'wp_enqueue_scripts', 'my_assets' );
	function my_assets() {
		wp_enqueue_style("style-frontend",get_template_directory_uri()."/style.css", array(), ALLVERSION, 'all');
		wp_enqueue_style("style-pink",get_template_directory_uri()."/css/g_main.css", array(), ALLVERSION, "all");
		
		wp_enqueue_script( 'jquery', "", array(), null, true);

		
		wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js', array(), ALLVERSION, true); 
		wp_enqueue_script( 'bascet', get_template_directory_uri().'/js/bascet.js', array('jquery'), ALLVERSION, true); //КОРЗИНА
		
		
		if(is_page_template('page-cart.php')) {
			wp_enqueue_script('nice-select', get_template_directory_uri() . '/js/jquery.nice-select.min.js', array(), null, true);
		}
		
		
		wp_localize_script( 'jquery', 'allAjax', array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'NEHERTUTLAZIT' )
		) );
	}


add_action('save_post', 'eli_save_product', 9999, 3);
function eli_save_product($post_id) {
	$arr_reviews = carbon_get_the_post_meta('complex_reviews');
	if($arr_reviews) {
		$rating_total = 0;
		$inc = 0;
		foreach($arr_reviews as $review):

			if($review['complex_reviews_is_show']):
				$rating_total += $review['complex_reviews_stars'];
				$inc++;
			endif;
		endforeach;
		$awerage = (float)$rating_total / (float)$inc;
		$awerage = round($awerage, 1);
		update_post_meta($post_id, '_reviews_awerage_rating', $awerage);
		carbon_set_post_meta($post_id, 'reviews_qty', $inc);
	}
}

	//-----------------------КОРЗИНА

function bascetinput() {
	
	if (!empty($_COOKIE["bascet"]))
	{
		$bascetsod = explode(",", $_COOKIE["bascet"]);	
		$postInBascet = "";
		foreach ($bascetsod as $be) {
			$elempart = explode("|", $be);	
			$postInBascet .= $elempart[0]." "; 
			$elems[$elempart[0]] = $elempart[1]; 
		}
				
				
				$pinclude = get_posts( array ("include" => $postInBascet) );
				
				$summ = 0;
				
				foreach ($pinclude as $pe)				
				{	
					$rezstr .= "<div class = 'belem'>";	
						$rezstr .= "<div class = 'blineel dell'>";
							$rezstr .= '<span class="dellInBscet" onclick = "dellbascet(this)" data-elemid = "'.$pe->ID.'" >X</span>';
						$rezstr .= "</div>";
						
						$rezstr .= "<div class = 'blineel pict'>";
							$rezstr .= '<a target = "_blank" href = "'.get_the_permalink($pe->ID).'"><img src = "'.get_bloginfo("url").'/galery/'.get_post_meta($pe->ID, "SKU", true).'.1.jpg"></a>';
						$rezstr .= "</div>";
						
						$rezstr .= "<div class = 'blineel name'>";
							$rezstr .= '<a target = "_blank" href = "'.get_the_permalink($pe->ID).'">'.$pe->post_title."</a>";
						$rezstr .= "</div>";
						
						$rezstr .= "<div class = 'blineel count'>";
							$rezstr .= "<input type = 'number' min = '1' value = '".$elems[$pe->ID]."' onchange = 'recalcbascet(this)' data-elemid = '".$pe->ID."' >";
						$rezstr .= "</div>";
						
						$rezstr .= "<div class = 'blineel summ'>";
							$rezstr .= "<span>".$elems[$pe->ID]*get_post_meta($pe->ID, "_price", true)."</span> руб.";
						$rezstr .= "</div>";
						
					$rezstr .= "</div>";
					
					$summ += $elems[$pe->ID]*get_post_meta($pe->ID, "_price", true);
				}
				
				$rezstr .= "<div class = 'bascetitog'>";
					
					$rezstr .= "<div class = 'bonusBlk'>";
						if ($summ<7500)
						{
							$rezstr .= "<div class = 'bonusline'>";
								$rezstr .= "<img src = '".get_bloginfo("template_url")."/img/1podarka.png' >";
								$rezstr .= "+ Игрушка познавательные фигуры";
								$rezstr .= "<br/><img class = 'podNadp' src = '".get_bloginfo("template_url")."/img/opdarok-bascet.png' />";
							$rezstr .= "</div>";
						} else {
							$rezstr .= "<div class = 'bonusline'>";
								$rezstr .= "<img src = '".get_bloginfo("template_url")."/img/1podarka.png' >";
								$rezstr .= "<img src = '".get_bloginfo("template_url")."/img/2podarka-2.png' >";
								$rezstr .= '<span>+ Познавательные фигуры и <br/>Мягкие пазлы "Теремок"</span>';
								$rezstr .= "<br/><img class = 'podNadpSm' src = '".get_bloginfo("template_url")."/img/opdarok-bascet.png' />";
							$rezstr .= "</div>";
						}
					$rezstr .= "</div>";
					
					$rezstr .= "<div class = 'summbascet'>";
						$rezstr .= "ИТОГО: <span>".$summ."</span> руб.";
					$rezstr .= "</div>";
				$rezstr .= "</div>";
	}
	
	
}

function bascetinputOne($hovinput, $nsale) {
	
	$rezstr = "";	
	
		$postInBascet = "";

				$pinclude = get_posts( array ("include" => $hovinput) );
				
				$summ = 0;
				
				foreach ($pinclude as $pe)				
				{	
					$actioncolor = '';
					$rezstr .= "<div class = 'belem'>";	
						
						
						$rezstr .= "<div class = 'blineel pict'>";
							$rezstr .= '<a target = "_blank" href = "'.get_the_permalink($pe->ID).'"><img class="cart-img__product" src = "'.get_bloginfo("url").'/galery/'.get_post_meta($pe->ID, "SKU", true).'.1.jpg"></a>';
						$rezstr .= "</div>";
						
						$rezstr .= "<div class = 'blineel name'>";
							$rezstr .= '<a class="cart-product__title" target = "_blank" href = "'.get_the_permalink($pe->ID).'">'.$pe->post_title."</a>";
							$old_price = '';
							$pricr_cur = get_post_meta($pe->ID, "_price", true);
							$pricr_old = get_post_meta($pe->ID, "_old_price", true);
							
							if (!empty($nsale)) {
								$pricr_old = $pricr_cur;
								$pricr_cur = $pricr_cur - $nsale; 
							}	
							
							if((!empty($pricr_old)) && ((int)$pricr_old != (int)$pricr_cur)) {
								$old_price = '<span class="price-old">'. $pricr_old .' </span>';
								$actioncolor = "style = 'color:#F00'";
							}
							$rezstr .= "<div><span class='cart-label__price' >Цена: </span>" . $old_price . "<span class='cart-price'>".$pricr_cur."</span> <span class='cart-price__currency'>руб.</span></div>";
							
							
						$rezstr .= "</div>";
						// if($_COOKIE['kupon'] === '1'):
						$rezstr .= '<div class="order-form__coupon order-form__coupon-1">
               <div class="order-form__coupon-photo"></div>
               <div class="order-form__coupon-text">Золотой<br> розыгрыш</div>
               <div class="order-form__coupon-question">?</div>
               <div class="order-form__coupon-note">Оформите заказ сегодня и получите 1 купон на участие в золотом розыгрыше</div>
           </div>';
		       // endif;
					$rezstr .= "</div>";
					
					$summ += $pricr_cur;
				}
				
	return $rezstr;
}

function bascetinputDopFormat($pe) {
	$old_price = '';
	
	$actioncolor = '';
	
	$pricr_cur = get_post_meta($pe->ID, "_price", true);
	$pricr_old = get_post_meta($pe->ID, "_old_price", true);
	
	$rezstr = "";
	
	$rezstr .= '<div class="cart-recommend__item">';
		
		$rezstr .= '<a href="'.get_the_permalink($pe->ID).'"><div class="cart-recommend__item-img" style="background-image: url('.get_bloginfo("url").'/galery/'.get_post_meta($pe->ID, "SKU", true).'.1.jpg)"></div></a>';
		if((!empty($pricr_old)) && ($pricr_old != $pricr_cur)) {
			$rezstr .= "<div class = 'economy'>Вы экономите ".round(($pricr_old - $pricr_cur) / ($pricr_old *0.01))."%</div>";
		}
		$rezstr .= '<a href="'.get_the_permalink($pe->ID).'" class="cart-recommend__item-title">'.$pe->post_title.'</a>';
		
		// if((!empty($pricr_old)) && ((int)$pricr_old != (int)$pricr_cur)) {
		if((!empty($pricr_old)) && ($pricr_old != $pricr_cur)) {
			$old_price = '<span class="price-old">'. get_post_meta($pe->ID, "_old_price", true) .' руб</span>';
			$actioncolor = "style = 'color:#c00'";
		}
		$rezstr .= '<div class="cart-recommend__item-price"  >Цена:'. $old_price .' <strong '.$actioncolor.'>'.get_post_meta($pe->ID, "_price", true).' руб.</strong></div>';
	$rezstr .= '</div>';
	
	return $rezstr;
}

function bascetinputDopFormatIncart($pe) {
 
	$rezstr = "";
	$old_price = '';
	
	$actioncolor = '';
	
	$pricr_cur = get_post_meta($pe->ID, "_price", true);
	$pricr_old = get_post_meta($pe->ID, "_old_price", true);
	
	
	$rezstr .= '<div class="cart-recommend__item  cart-recommend__item2">';

		$rezstr .= '<a href="'.get_the_permalink($pe->ID).'"><div class="cart-recommend__item-img" style="background-image: url('.get_bloginfo("url").'/galery/'.get_post_meta($pe->ID, "SKU", true).'.1.jpg)"></div></a>';
		if((!empty($pricr_old)) && ((int)$pricr_old > (int)$pricr_cur)) {
			$rezstr .= "<div class = 'economy'>Вы экономите ".round(($pricr_old - $pricr_cur) / ($pricr_old *0.01))."%</div>";
		}
		$rezstr .= '<a href="'.get_the_permalink($pe->ID).'" class="cart-recommend__item-title">'.$pe->post_title.'</a>';
		$rezstr .= '<div class="cart-recommend-price-add-cart">';
			
			if((!empty($pricr_old)) && ((int)$pricr_old > (int)$pricr_cur)) {
				$old_price = '<span class="price-old">'. get_post_meta($pe->ID, "_old_price", true) .' руб</span>';
				$actioncolor = "style = 'color:#c00'";
			}
			$rezstr .= '<div class="cart-recommend__item-price">Цена:'. $old_price .' <strong '.$actioncolor.'>'.get_post_meta($pe->ID, "_price", true).' руб.</strong></div>';
			$rezstr .= '<div onclick="toBascetFnk (this);" class="tobascetInCatWrap" data-postid = "'.$pe->ID.'">В корзину</div>';
		$rezstr .= '</div>';
		
	$rezstr .= '</div>';

	
	return $rezstr;
}

function bascetinputDop($hovinput) { 
	$rezstr = "";
	$pinclude = get_posts( array ('numberposts' => 2, 'category'    => 51, 'orderby' => "rand") ); //1
	foreach ($pinclude as $pe)				
	{	
		if (empty($hovinput))
			$rezstr .= bascetinputDopFormat($pe);
		else $rezstr .= bascetinputDopFormatIncart($pe);
	}
	
	$pinclude = get_posts( array ('numberposts' => 1, 'category' => 5, 'orderby' => "rand") ); //2
	foreach ($pinclude as $pe)				
	{	
		if (empty($hovinput))
			$rezstr .= bascetinputDopFormat($pe);
		else $rezstr .= bascetinputDopFormatIncart($pe);
	}
	
	$pinclude = get_posts( array ('numberposts' => 1, 'category' => 21, 'orderby' => "rand") ); //3
	foreach ($pinclude as $pe)				
	{	
		if (empty($hovinput))
			$rezstr .= bascetinputDopFormat($pe);
		else $rezstr .= bascetinputDopFormatIncart($pe);
	}
	
	$pinclude = get_posts( array ('numberposts' => 1, 'category' => 20, 'orderby' => "rand") ); //4
	foreach ($pinclude as $pe)				
	{	
		if (empty($hovinput))
			$rezstr .= bascetinputDopFormat($pe);
		else $rezstr .= bascetinputDopFormatIncart($pe);
	}
	
	$pinclude = get_posts( array ('numberposts' => 1, 'category' => 26, 'orderby' => "rand") ); //5
	foreach ($pinclude as $pe)				
	{	
		if (empty($hovinput))
			$rezstr .= bascetinputDopFormat($pe);
		else $rezstr .= bascetinputDopFormatIncart($pe);
	}
	
	$pinclude = get_posts( array ('numberposts' => 1, 'category'    => 6, 'orderby' => "rand") ); //6
	foreach ($pinclude as $pe)				
	{	
		if (empty($hovinput))
			$rezstr .= bascetinputDopFormat($pe);
		else $rezstr .= bascetinputDopFormatIncart($pe);
	}

	$pinclude = get_posts( array ('numberposts' => 1, 'category'    => 51, 'orderby' => "rand") ); //7
	foreach ($pinclude as $pe)				
	{	
		if (empty($hovinput))
			$rezstr .= bascetinputDopFormat($pe);
		else $rezstr .= bascetinputDopFormatIncart($pe);
	}
	
	$pinclude = get_posts( array ('numberposts' => 1, 'category'    => 69, 'orderby' => "rand") ); //8
	foreach ($pinclude as $pe)				
	{	
		if (empty($hovinput))
			$rezstr .= bascetinputDopFormat($pe);
		else $rezstr .= bascetinputDopFormatIncart($pe);
	}
	
	$pinclude = get_posts( array ('numberposts' => 1, 'category'    => 9, 'orderby' => "rand") ); //9
	foreach ($pinclude as $pe)				
	{	
		if (empty($hovinput))
			$rezstr .= bascetinputDopFormat($pe);
		else $rezstr .= bascetinputDopFormatIncart($pe);
	}
	
	$pinclude = get_posts( array ('numberposts' => 1, 'category'    => 32, 'orderby' => "rand") ); //10
	foreach ($pinclude as $pe)				
	{	
		if (empty($hovinput))
			$rezstr .= bascetinputDopFormat($pe);
		else $rezstr .= bascetinputDopFormatIncart($pe);
	}
	
	return $rezstr;
}
add_action( 'wp_ajax_present_function', 'present_function' );
add_action( 'wp_ajax_nopriv_present_function', 'present_function' );
function present_function() {
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
			
		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}

}
add_action( 'wp_ajax_to_bascet', 'to_bascet' );
add_action( 'wp_ajax_nopriv_to_bascet', 'to_bascet' );

function to_bascet() {
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
			
			
			if (!empty($_COOKIE["bascet"])) 
			{
				$bascetelem = explode(",", $_COOKIE["bascet"]);
				
				$ctext = "";
				$dubl = false;
				foreach ($bascetelem as $r)
				{
					$cb = explode("|", $r);
					$id = $cb[0];
					$count = $cb[1];
					$nsale = $cb[2];
					
					if ($cb[0] === $_REQUEST['postid']) 
					{
						$count++;
						$dubl = true;
					}
					
					if (empty($ctext))
						//$ctext = $id."|".$count."|".$_REQUEST['nsale'];
					$ctext = $id."|".$count."|".$nsale;
					else
					$ctext = $ctext.",".$id."|".$count."|".$nsale; 
				}
				
				if (!$dubl)
					$bvalue = $ctext.",".$_REQUEST['postid']."|"."1"."|".$_REQUEST['nsale'];
				else 
					$bvalue = $ctext;
			}
			else 
				$bvalue = $_REQUEST['postid']."|"."1"."|".$_REQUEST['nsale'];
			
			
			$bascetelem = explode(",", $bvalue );
			$count = 0;
			foreach ($bascetelem as $r)
			{
				$cb = explode("|", $r);
				$count += $cb[1];
			}
			
			//setcookie("bascet", $bvalue, 0, "/", "елисямба.рф");
			setcookie("bascet", $bvalue, 0, "/", "xn--80ablmoh8a2h.xn--p1ai");
			wp_die( $count."|".bascetinputOne($_REQUEST['postid'], $_REQUEST['nsale'])."||".$_COOKIE["bascet"] );	
		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}
}



add_action( 'wp_ajax_get_bascet_sod', 'get_bascet_sod' );
add_action( 'wp_ajax_nopriv_get_bascet_sod', 'get_bascet_sod' );

function get_bascet_sod() {
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
			
			$rez = bascetinput();
			
				
			
			
			wp_die( $rez );	
		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}
}

add_action( 'wp_ajax_del_bascet', 'del_bascet' );
add_action( 'wp_ajax_nopriv_del_bascet', 'del_bascet' );

function del_bascet() {
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
			if (!empty($_COOKIE["bascet"]))
			{
				$ncookelem = "";
				$bascetsod = explode(",", $_COOKIE["bascet"]);	
				
				$countinBascet = 0;
				foreach ($bascetsod as $be) {
					$elempart = explode("|", $be);	
					if ($elempart[0] !== $_REQUEST['idelem'])
					{
						if (empty($ncookelem)) 
							$ncookelem .= $be;
						else $ncookelem .= ",".$be;
						$countinBascet+=$elempart[1];
					} 
				}
				
				//setcookie("bascet", $ncookelem, 0, "/", "елисямба.рф");
				setcookie("bascet", $ncookelem, 0, "/", "xn--80ablmoh8a2h.xn--p1ai");
			}
			wp_die( $countinBascet );	
		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}
}

add_action( 'wp_ajax_rec_bascet', 'rec_bascet' );
add_action( 'wp_ajax_nopriv_rec_bascet', 'rec_bascet' );

function rec_bascet() {
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
			if (!empty($_COOKIE["bascet"]))
			{
				$ncookelem = "";
				$bascetsod = explode(",", $_COOKIE["bascet"]);	
				
				foreach ($bascetsod as $be) {
					$elempart = explode("|", $be);	
					if ($elempart[0] !== $_REQUEST['idelem'])
					{
						if (empty($ncookelem)) 
							$ncookelem .= $be;
						else $ncookelem .= ",".$be;
					} else {
						if (empty($ncookelem)) 
							$ncookelem .= $elempart[0]."|".$_REQUEST["elcount"]."|".$elempart[2];
						else $ncookelem .= ",".$elempart[0]."|".$_REQUEST["elcount"]."|".$elempart[2];
					}
				}
				
				//setcookie("bascet", $ncookelem, 0, "/", "елисямба.рф");
				setcookie("bascet", $ncookelem, 0, "/", "xn--80ablmoh8a2h.xn--p1ai");
			}
			
			$bascetelem = explode(",", $ncookelem );
			$count = 0;
			foreach ($bascetelem as $r)
			{
				$cb = explode("|", $r);
				$count += $cb[1];
			}
			
			wp_die( $count );	
		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}
}


add_action( 'wp_ajax_review_usefull', 'review_usefull' );
add_action( 'wp_ajax_nopriv_review_usefull', 'review_usefull' );
function review_usefull() {
	if ( empty( $_REQUEST['nonce'] ) ) {
		wp_die( '0' );
	}
	if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
		
	if (empty($_COOKIE['review'.$_REQUEST['postid'].$_REQUEST['reviewnubmer']])) {
			$nvalue = $_REQUEST['qty']+1;
			carbon_set_post_meta($_REQUEST['postid'], 'complex_reviews[' . $_REQUEST['reviewnubmer'] . ']/complex_reviews_is_use_yes', $nvalue);
			setcookie('review'.$_REQUEST['postid'].$_REQUEST['reviewnubmer'], "golos", time() + 3600 * 24 * 7 * 30, "/", "xn--80ablmoh8a2h.xn--p1ai" );
		
			wp_die($nvalue);
		} else {
			wp_die($_REQUEST['qty']);
		}

	} else {
		wp_die( 'НО-НО-НО!', '', 403 );
	}
}

add_action( 'wp_ajax_review_usefull_no', 'review_usefull_no' );
add_action( 'wp_ajax_nopriv_review_usefull_no', 'review_usefull_no' );
function review_usefull_no() {
	if ( empty( $_REQUEST['nonce'] ) ) {
		wp_die( '0' );
	}
	if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
		
	if (empty($_COOKIE['review'.$_REQUEST['postid'].$_REQUEST['reviewnubmer']])) {
			$nvalue = $_REQUEST['qty']+1;
			carbon_set_post_meta($_REQUEST['postid'], 'complex_reviews[' . $_REQUEST['reviewnubmer'] . ']/complex_reviews_is_use_no', $nvalue);
			setcookie('review'.$_REQUEST['postid'].$_REQUEST['reviewnubmer'], "golos", time() + 3600 * 24 * 7 * 30, "/", "xn--80ablmoh8a2h.xn--p1ai" );
		
			wp_die($nvalue);
		} else {
			wp_die($_REQUEST['qty']);
		}

	} else {
		wp_die( 'НО-НО-НО!', '', 403 );
	}
}

add_action( 'wp_ajax_re_comment', 're_comment' );
add_action( 'wp_ajax_nopriv_re_comment', 're_comment' );

function re_comment() {
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
			
				$s = curl_init(); 

				
				curl_setopt($s, CURLOPT_URL, 'https://elisyamba.retailcrm.ru/api/v5/orders/'.$_REQUEST["zid"].'?apiKey=ILn5g3dW5BgWC0352W1d0dWIRtto5m7u&by=id'); 
				curl_setopt($s, CURLOPT_POST,false); 
				curl_setopt($s, CURLOPT_RETURNTRANSFER, true); 

				
				$infoZ = json_decode(curl_exec($s),true);



				$data = array ("apiKey" => "ILn5g3dW5BgWC0352W1d0dWIRtto5m7u", "by" => "id",
					"order" => json_encode (array(
						"managerComment" => $infoZ["order"]["managerComment"]." Подарок в суперрозыгрыше ".$_REQUEST["msgst"],
						
					))
				);

				curl_setopt($s, CURLOPT_URL, 'https://elisyamba.retailcrm.ru/api/v5/orders/'.$_REQUEST["zid"].'/edit'); 
				curl_setopt($s,CURLOPT_POST,true); 
				curl_setopt($s, CURLOPT_RETURNTRANSFER, true); 
				curl_setopt($s, CURLOPT_POSTFIELDS, $data);
				
				$retID = curl_exec($s);
			
			
			wp_die($retID);	
		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}
}

add_action( 'wp_ajax_oformit_zak', 'oformit_zak' );
add_action( 'wp_ajax_nopriv_oformit_zak', 'oformit_zak' );

function oformit_zak() {
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
			
			$headers = array(
				'From: Заказ на сайте Елисямба <noreply@el.ru>',
				'content-type: text/html',
			);
			
			$bascetsod = explode(",", $_COOKIE["bascet"]);	
			$postInBascet = "";
			foreach ($bascetsod as $be) {
				$elempart = explode("|", $be);	
				$postInBascet .= $elempart[0]." "; 
				$elems[$elempart[0]] = $elempart[1]; 
			}
				
				
			$pinclude = get_posts( array ("include" => $postInBascet) );
			
			$summ = 0;
			
			$rezstr = "";
			$rezstr .= "<table style = 'border-collapse: 1;'>";
			
			$rezstr .= "<tr>";
				$rezstr .= "<th>Изображение</th>";
				$rezstr .= "<th>Название</th>";
				$rezstr .= "<th>Колличество</th>";
				$rezstr .= "<th>Сумма</th>";
			$rezstr .= "</tr>";
			
			
			
			foreach ($pinclude as $pe)				
			{	
				$rezstr .= "<tr>";	
				
					$rezstr .= "<td>";
						$rezstr .= '<img width = "80" src = "'.get_bloginfo("url").'/galery/'.get_post_meta($pe->ID, "SKU", true).'.1.jpg">';
					$rezstr .= "</td>";
					
					$rezstr .= "<td>";
						$rezstr .= "<a href = '".str_replace("http", "https", get_the_permalink($pe->ID))."'>".$pe->post_title."</a>";
					$rezstr .= "</td>";
					
					$rezstr .= "<td>";
						$rezstr .= $elems[$pe->ID];
					$rezstr .= "</td>";
					
					$rezstr .= "<td'>";
						$rezstr .= "<span>".$elems[$pe->ID]*get_post_meta($pe->ID, "_price", true)."</span> руб.";
					$rezstr .= "</td>";
					
				$rezstr .= "</tr>";
				
				$itemToCrm[] = array(
					"offer" => array(
							"externalId" => get_post_meta($pe->ID, "SKU", true)
					),
					"initialPrice" => get_post_meta($pe->ID, "_price", true), 
					"productName" => $pe->post_title, 
					"quantity" =>  $elems[$pe->ID]
				);
				
				$ordercount = get_post_meta($pe->ID, "order_count",true);
				update_post_meta($pe->ID, "order_count",$ordercount+1);
				
				$summ += $elems[$pe->ID]*get_post_meta($pe->ID, "_price", true);
			}
			
			$rezstr .= '</table>';
			
			$content = $rezstr.'<br/>'.
					   '<strong>Сумма:</strong> '.$summ.' руб. <br/>'.
					   '<strong>Имя:</strong> '.$_REQUEST["namecl"].' <br/>'.
					   '<strong>Телефон:</strong> '.$_REQUEST["phonecl"].' <br/>'.
					   '<strong>E-mail:</strong> '.$_REQUEST["emailcl"].' <br/>'.
					   '<strong>Способ доставки:</strong> '.$_REQUEST["sdostcl"].' <br/>'.
					   '<strong>Адрес доставки:</strong> '.$_REQUEST["adrdost"].' <br/>'.
					   '<strong>Комментарий:</strong> '.$_REQUEST["msgst"].' <br/>';
			
			
				$s = curl_init(); 

				$data = array ("apiKey" => "ILn5g3dW5BgWC0352W1d0dWIRtto5m7u",
					"order" => json_encode (array(
						"firstName" => $_REQUEST["namecl"],
						"phone" => $_REQUEST["phonecl"],
						"customerComment" => $_REQUEST["msgst"]."<b>Адрес: </b>". $_REQUEST["adrdost"],
						"email" => (filter_var($_REQUEST["emailcl"], FILTER_VALIDATE_EMAIL))?$_REQUEST["emailcl"]:"",
						"orderMethod" => "shopping-cart",
						'items' => $itemToCrm,
						"delivery" => array ("address" => $_REQUEST["adrdost"] )
					))
				);

				curl_setopt($s, CURLOPT_URL, 'https://elisyamba.retailcrm.ru/api/v5/orders/create'); 
				curl_setopt($s,CURLOPT_POST,true); 
				curl_setopt($s, CURLOPT_RETURNTRANSFER, true); 
				curl_setopt($s, CURLOPT_POSTFIELDS, $data);
				
				$retID = curl_exec($s);
			
			
			add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
			$options = get_option( 'wpuniq_theme_options' );
			//array('elisyamba@yandex.ru','asmi046@gmail.com', 'Rabota221246@gmail.com', 'Rabota221246@yandex.ru', 'r0cketbunnyf240z@gmail.com')
			if (wp_mail($options["mails"], 'Заказ через корзину', $content, $headers))
			{
				setcookie("bascet", "", 0, "/", "xn--80ablmoh8a2h.xn--p1ai");
				wp_die( $retID );
			}
			else
			{
				wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>");
			}
			
			wp_die( $retID );	
		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}
}

function create_zak($orderinfo) {
		
		$s = curl_init(); 

		$data = array ("apiKey" => "ILn5g3dW5BgWC0352W1d0dWIRtto5m7u",
			"order" => json_encode (array(
				"firstName" => $orderinfo["order_client_name"],
				"phone" => $orderinfo["order_client_tel"],
				"customerComment" => $orderinfo["order_client_comment"],
				"orderMethod" => "one-click",
				'items' => array(
					array(
						"offer" => array(
							"externalId" => $orderinfo["order_product_id"]
						),
						
						"initialPrice" => $orderinfo["order_product_price"], 
						"productName" => $orderinfo["order_product_title"], 
						"quantity" => 1, 
						)
				),
			))
		);

		curl_setopt($s, CURLOPT_URL, 'https://elisyamba.retailcrm.ru/api/v5/orders/create'); 
		curl_setopt($s,CURLOPT_POST,true); 
		curl_setopt($s, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($s, CURLOPT_POSTFIELDS, $data);
		return curl_exec($s);
		
}	

add_action( 'wp_ajax_oformit_one', 'oformit_one' );
add_action( 'wp_ajax_nopriv_oformit_one', 'oformit_one' );

function oformit_one() {
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
			$headers = array(
				'From: Сайт Елисямба <noreply@elisyamba.ru>',
				'content-type: text/html',
			);
			
			$message = "<h1>На сайте оформлен новый заказ:</h1>";
			$message .= "<strong>Наименование товара: </strong>".$_REQUEST["order_product_title"]."<br/>";
			$message .= "<strong>ID товара: </strong><a target = '_blank' href = '".get_the_permalink($_REQUEST["order_post_id"])."'>".$_REQUEST["order_product_id"]."</a><br/>";
			$message .= "<strong>Цена: </strong>".$_REQUEST["order_product_price"]."<br/>";
			$message .= "<strong>Время оформления: </strong>".date("d.m.Y H:i", strtotime("+3 hours"))."<br/><br/>";
			$message .= "<strong>Имя клиента: </strong>".$_REQUEST["order_client_name"]."<br/>";
			$message .= "<strong>Телефон клиента: </strong>".$_REQUEST["order_client_tel"]."<br/><br/>";
			$message .= "<h2>Комментарий к заказу: </h2>";
			$message .= $_REQUEST["order_client_comment"];
			
			add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
			//array('elisyamba@yandex.ru','asmi046@gmail.com', 'rabota221246@yandex.ru', 'Rabota221246@yandex.ru', 'r0cketbunnyf240z@gmail.com')
			$options = get_option( 'wpuniq_theme_options' );
			if (wp_mail($options["mails"], 'Заказ на сайте Elisyamba', $message, $headers))
			{ 
				$rkz = create_zak($_REQUEST);
				
				$ordercount = get_post_meta($_REQUEST["order_post_id"], "order_count",true);
				update_post_meta($_REQUEST["order_post_id"], "order_count",$ordercount+1);
				
				wp_die($rkz);
			}
			else { 
				wp_die("<p style = 'color:red;'>Произошла техническая ошибка. Попробуйте оформить заказ позднее!</p>");
			}

		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}
}

//------------------	

	
	add_action( 'wp_ajax_aj_fnc', 'aj_fnc' );
	add_action( 'wp_ajax_nopriv_aj_fnc', 'aj_fnc' );

	function aj_fnc() {
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'huivzmaneinfa', 'nonce', false ) ) {


			
		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}
	}
	
function exclude_cat($query) {
	if ($query->is_home)
		{$query->set('cat','-23,');} // id требуемых категорий
	return $query; 
}

function razelem_f( $atts ) {
	$params = shortcode_atts( array( // в массиве укажите значения параметров по умолчанию
		'size' => '14', // параметр 1
		'color' => 'black', // параметр 2
	), $atts );
	return "<span style = 'font-size:".$params['size']."px; color:".$params['color'].";font-style: italic;'>";
}

add_action( 'carbon_fields_register_fields', 'boots_register_custom_fields' );
function boots_register_custom_fields() {
	
require_once __DIR__ . '/inc/custom-fields-options/metabox.php';
}
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
require_once( get_template_directory() . '/inc/carbon-fields/vendor/autoload.php' );
\Carbon_Fields\Carbon_Fields::boot();
}

// function eli_count_reviews_cat( $query ) {
//     if ( $query->is_main_query() && is_category(23) ) {
//         $query->set( 'posts_per_page', 10 );
//     }
// }
// add_action( 'pre_get_posts', 'eli_count_reviews_cat' );

add_shortcode( 'razelem', 'razelem_f' );

function razelemend_f( $atts ) {
	return "</span>";
}
add_shortcode( 'razelemend', 'razelemend_f' );

add_filter('pre_get_posts','exclude_cat');


add_filter('excerpt_more', function($more) {
	return '...';
});

add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more( $more ){
	global $post;
	return '<a href="" class="morelink-review">Показать полностью...</a>';
}

add_action('wp_ajax_load_more_main', 'load_more_main_callback');
add_action('wp_ajax_nopriv_load_more_main', 'load_more_main_callback');
function load_more_main_callback() {
	if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
	}

	if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
		$query_string                = unserialize( stripslashes( $_POST['query'] ) );
		$query_string['paged']       = max( intval( $_POST['paged'] ), 1 );
		// $query_string['post_status'] = 'publish';
		query_posts( $query_string );
		ob_start();

		if ( have_posts() ) {
			$count_posts = 0;
			while ( have_posts() ) {
				the_post();
				++$count_posts;
				get_template_part( 'tovar', 'elem' );
			}
		}
		$content = ob_get_clean();
		$json_content = json_encode( array(
			'count_posts' => $count_posts,
			'status'  => 1,
			'content' => $content,
			'button'  => $_POST['max'] - $query_string['paged']
		) );
		wp_die($json_content);
	}  else {
		wp_die( 'НО-НО-НО!', '', 403 );
	}
}

add_action( 'wp_ajax_load_more', 'load_more_callback' );
add_action( 'wp_ajax_nopriv_load_more', 'load_more_callback' );
function load_more_callback() {
	if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ){
			$query_string                = unserialize( stripslashes( $_POST['query'] ) );
	$query_string['paged']       = max( intval( $_POST['paged'] ), 1 );
	$query_string['post_status'] = 'publish';
	query_posts( $query_string );
	ob_start();
	if ( have_posts() ) {
		$count_posts = 0;
		while ( have_posts() ) {
			the_post();
				++$count_posts;
				$array_photo = carbon_get_the_post_meta('review_photos');
				$thumb_id = get_post_thumbnail_id($post->ID);
				$thumb_url_full = wp_get_attachment_image_src($thumb_id, 'full', true);
				$thumb_url = wp_get_attachment_image_src($thumb_id,'medium', true);
					?>
								<div class="bp_post clear_fix ">
									<a class="bp_thumb _online" href="<?php echo(carbon_get_post_meta($post->ID, 'review_link'))?>">
									    <img class="bp_img" alt="" src="<?php echo carbon_get_the_post_meta('review_photo')?>">
									</a>
									<div class="bp_info">
									    <div class="bp_author_wrap">
									      <div class="bp_actions"><a href="#" class="bp_delete_button bp_action fl_r"</a></div>
									      <a class="bp_author" href="<?php echo carbon_get_the_post_meta('review_link')?>"><?php the_title();?></a>
									      <span class="bp_date" href="" dir="auto"><?php echo carbon_get_the_post_meta('review_date_time')?></span>
									      <span class="bp_topic"></span>
									    </div>
									    <div class="bp_content" id="bp_data-162994836_44"><div class="bp_text"><div class="content-rev"><?php the_content();?></div></div>
									    <div>
									    	<?php if($thumb_id):?>
									    	<!--<div class="page_post_sized_thumbs  clear_fix"><a class = "fancybox"  href = "<?php echo $thumb_url_full[0];?>"><img src = "<?php echo $thumb_url[0];?>" alt = "<?php echo $post->post_title; ?>" title = "Нажмите чтобы увеличить "></a></div>-->
									    <?php endif;?>
									    <div class="page_post_sized_thumbs  clear_fix">
									    <?php foreach ($array_photo as $photo_item):
									    	?>

											<a class = "fancybox"  href = "<?php echo $photo_item['review_photos_item'];?>"><img width="170" src = "<?php echo $photo_item['review_photos_item'];?>" alt = "<?php echo $post->post_title; ?>" title = "Нажмите чтобы увеличить "></a>
									    <?php endforeach;?>
									    </div>
									    </div>
									</div>
									    <div class="bp_edited_by"></div>
									  </div>
								</div>
		<?php }
	}
	$content = ob_get_clean();
	$json_content = json_encode( array(
		'count_posts' => $count_posts,
		'status'  => 1,
		'content' => $content,
		'button'  => $_POST['max'] - $query_string['paged']
	) );
			wp_die($json_content);
		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}
	
}
	/* Отправка почты
		
			$headers = array(
				'From: Сайт Кредит-Консалт <noreply@kredit-konsalt.ru>',
				'content-type: text/html',
			);
		
			add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
			if (wp_mail(array('info@kredit-konsalt.ru','asmi046@gmail.com'), 'Заказ обратного звонка', '<strong>Имя:</strong> '.$_REQUEST["name"].' <br/> <strong>Телефон:</strong> '.$_REQUEST["phone"], $headers))
				wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span>");
			else wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>");
	*/
	
	
	/*	Заготовка шорткода
		function true_url_external( $atts ) {
			$params = shortcode_atts( array( // в массиве укажите значения параметров по умолчанию
				'anchor' => 'Миша Рудрастых', // параметр 1
				'url' => 'https://misha.blog', // параметр 2
			), $atts );
			return "<a href='{$params['url']}' target='_blank'>{$params['anchor']}</a>";
		}
		add_shortcode( 'trueurl', 'true_url_external' );
	*/
	

add_filter('manage_posts_columns', 'posts_columns', 5);
add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);
 
function posts_columns($defaults){
    $defaults['riv_post_pos'] = __('Порядок');
	$defaults['riv_post_sku'] = __('Артикул');
	$defaults['riv_post_thumbs'] = __('Миниатюра');
	$defaults['in_sclad'] = __('На складе');
    return $defaults;
}
 
function posts_custom_columns($column_name, $id){
	
	if($column_name === 'riv_post_pos'){
		$SKU_t = get_post_meta(get_the_ID(), "_tovar_order", true);
		echo empty($SKU_t)?"-":$SKU_t;
	}
	
	if($column_name === 'riv_post_sku'){
		$SKU_t = get_post_meta(get_the_ID(), "SKU", true);
		echo empty($SKU_t)?"-":$SKU_t;
	}
	
	if($column_name === 'riv_post_thumbs'){
        if (!empty(get_post_meta(get_the_ID(), "SKU", true)))
			$img1 = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "SKU", true).".1.jpg";
		else 
			$img1 = get_bloginfo("url")."/galery/no-image.png";
		
		echo '<img width = "60" src = "'.$img1.'" />';
			
		//the_post_thumbnail( array(60, 60) );
    }
	
	if($column_name === 'in_sclad'){ 
		$insklcount = get_post_meta(get_the_ID(), "_sclad_count", true);
		
		echo empty($insklcount)?"0":$insklcount;
	}
}

add_filter( 'manage_edit-post_sortable_columns', 'smashing_realestate_sortable_columns');
function smashing_realestate_sortable_columns( $columns ) {
$columns['riv_post_sku'] = 'SKU';
$columns['riv_post_pos'] = 'poriadok';
$columns['in_sclad'] = 'insclad';
return $columns;
}

add_action( 'pre_get_posts', 'smashing_posts_orderby' );
	function smashing_posts_orderby( $query ) {
		if( ! is_admin() || ! $query->is_main_query() ) {
			return;
		}
		
		if ( 'SKU' === $query->get( 'orderby') ) {
			$query->set( 'orderby', 'meta_value' );
			$query->set( 'meta_key', 'SKU' );
		}
		
		if ( 'poriadok' === $query->get( 'orderby') ) {
			$query->set( 'orderby', 'meta_value' );
			$query->set( 'meta_key', '_tovar_order' );
		}
		
		if ( 'insclad' === $query->get( 'orderby') ) {
			$query->set( 'orderby', 'meta_value' );
			$query->set( 'meta_key', '_sclad_count' );
		}
}

add_action( 'wp_ajax_main_load_file', 'main_load_file' );
add_action( 'wp_ajax_nopriv_main_load_file', 'main_load_file' );

function main_load_file() {
		
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {

			 $movrez = move_uploaded_file($_FILES['file']['tmp_name'], get_template_directory().'/download/'.$_FILES['file']['name']);

			 if ($movrez)
			 {
				 
				 //wp_die(get_template_directory().'/download/'.$_FILES['file']['name']);
			 	wp_die("Загружен: <strong>".$_FILES['file']['name']."</strong>");
			 }
			 else {
				 wp_die( 'При загрузке файла произошла ошибка', '', 403 );
			 }
		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}
}

add_action( 'wp_ajax_universal_send', 'universal_send' );
  add_action( 'wp_ajax_nopriv_universal_send', 'universal_send' );

  function universal_send() {
    if ( empty( $_REQUEST['nonce'] ) ) {
      wp_die( '0' );
    }
    
    if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {

    	$name = $_REQUEST['name'];
    	$review_text = $_REQUEST['review_text'];
    	$stars = $_REQUEST['stars'];
    	$vk = $_REQUEST['vk'];
    	$photo = $_REQUEST['file'];
    	$photo_array = explode(',', $_REQUEST['file']);
      
      $headers = array(
        'From: Сайт Елисямба <noreply@elisyamba.ru>',
        'content-type: text/html',
      );
    
      add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
      if (wp_mail('vaganov046home@mail.ru', 'Отзыв', '<strong>Отзыв:</strong> '.$_REQUEST["review_text"].'<br/> <strong>Имя:</strong> '.$_REQUEST["name"].' <br/> <strong>Оценка:</strong> '.$_REQUEST["stars"].' <br/> <strong>Ссылка ВКонтакте:</strong> '.$_REQUEST["vk"], $headers, $photo_array))
		  wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span><pre>" . $_FILES['photo'] . '</pre>');
      else wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>");
      
    } else {
      wp_die( 'НО-НО-НО!', '', 403 );
    }
  }

add_action( 'wp_ajax_geo_cookie_set', 'geo_cookie_set' );
add_action( 'wp_ajax_nopriv_geo_cookie_set', 'geo_cookie_set' );

function geo_cookie_set() {
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {

				setcookie("staitinfo", $_REQUEST["staitg"], 0, "/", "xn--80ablmoh8a2h.xn--p1ai");
				setcookie("cityinfo", $_REQUEST["cityg"], 0, "/", "xn--80ablmoh8a2h.xn--p1ai");
				setcookie("provinceinfo", $_REQUEST["provinceg"], 0, "/", "xn--80ablmoh8a2h.xn--p1ai");
			
			} else {
				wp_die( 'НО-НО-НО!', '', 403 );
			}
}


add_action( 'wp_ajax_get_delivery_data', 'get_delivery_data' );
add_action( 'wp_ajax_nopriv_get_delivery_data', 'get_delivery_data' );

function get_delivery_data() {
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
			
			global $wpdb;
			
			
			
			$rez = $wpdb->get_results("SELECT * FROM `el_delivery` WHERE `nas_punkt` = '".$_REQUEST['naspunktm']."'");
			if (!empty($rez[0]->nas_punkt)) {
				setcookie("cityinfo", $rez[0]->nas_punkt, 0, "/", "xn--80ablmoh8a2h.xn--p1ai");
				setcookie("deliveryinfo", $rez[0]->nas_punkt."|".$rez[0]->srok."|".$rez[0]->stoimost, 0, "/", "xn--80ablmoh8a2h.xn--p1ai");	
			}
			else 
			{
				/*
				$rez = $wpdb->get_results("SELECT * FROM `el_delivery` WHERE `nas_punkt` = '".$_REQUEST['provincem']."'");
				if (!empty($rez[0]->nas_punkt)) {
					setcookie("cityinfo", $rez[0]->nas_punkt, 0, "/", "xn--80ablmoh8a2h.xn--p1ai");
					setcookie("deliveryinfo", $rez[0]->nas_punkt."|".$rez[0]->srok."|".$rez[0]->stoimost, 0, "/", "xn--80ablmoh8a2h.xn--p1ai");
				}
				else 
					wp_die( "Неопределено|1-2 дня|от 90 руб." );
				*/
				
			
				setcookie("cityinfo", $_REQUEST['naspunktm'], 0, "/", "xn--80ablmoh8a2h.xn--p1ai");
				setcookie("deliveryinfo", $_REQUEST['naspunktm']."|1-10 дней|По запросу", "/", "xn--80ablmoh8a2h.xn--p1ai");	
				
				wp_die( $_REQUEST['naspunktm']."|1-10 дней|По запросу" );
			}
			
			if (!empty($rez[0]->postcode)) {
					setcookie("postcode", $rez[0]->postcode, 0, "/", "xn--80ablmoh8a2h.xn--p1ai");
			}
			
			if (!empty($rez[0]->postcode))
				$pvs = new SimpleXMLElement(file_get_contents("https://integration.cdek.ru/pvzlist/v1/xml?cityid=".$rez[0]->postcode));
			else 
				$pvs = array();
			
			wp_die( $rez[0]->nas_punkt."|".$rez[0]->srok."|".$rez[0]->stoimost."|".json_encode($pvs) );
			
		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}
}

add_action( 'wp_ajax_search_nas_punkts', 'search_nas_punkts' );
add_action( 'wp_ajax_nopriv_search_nas_punkts', 'search_nas_punkts' );

function search_nas_punkts() {
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
			
			global $wpdb;
			$rez = $wpdb->get_results("SELECT * FROM `el_allcity` WHERE `punktname` LIKE '%".$_REQUEST['naspunktm']."%'");
			
			if (!empty($rez)) {
				wp_die(json_encode($rez));
			} else {
				wp_die( 'Ошибка БД!', '', 403 );
			}
				
		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}
}


add_action( 'wp_ajax_review_send', 'review_send' );
  add_action( 'wp_ajax_nopriv_review_send', 'review_send' );

  function review_send() {
    if ( empty( $_REQUEST['nonce'] ) ) {
      wp_die( '0' );
    }
    
    if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {

    	$name = $_REQUEST['name'];
    	$product_title = $_REQUEST['product_title'];
    	$product_link = $_REQUEST['product_link'];
    	$product_id = $_REQUEST['product_id'];
    	$review_text = $_REQUEST['review_text'];
    	$stars = $_REQUEST['stars'];
    	$date = date('Y-m-d');
    	$vk = $_REQUEST['vk'];
    	$photo = $_REQUEST['file'];
    	$photo_array = explode(',', $_REQUEST['file']);
    	$arr_rev = carbon_get_post_meta($product_id, 'complex_reviews');
    	$inc_rev = count($arr_rev);
    	$inc_rev = 0;
    	foreach ($arr_rev as $key => $value) {
    		$inc_rev++;
    	}
    	$current_rev = $inc_rev;
    	add_post_meta($product_id, '_complex_reviews|complex_reviews_name|' . $current_rev . '|0|value', $name, false);
    	add_post_meta($product_id, '_complex_reviews|complex_reviews_stars|' . $current_rev . '|0|value', $stars, false);
    	add_post_meta($product_id, '_complex_reviews|complex_reviews_stars|' . $current_rev . '|0|value', $stars, false);

    	add_post_meta($product_id, '_complex_reviews|complex_reviews_date|' . $current_rev . '|0|value', $date, false);
    	add_post_meta($product_id, '_complex_reviews|complex_reviews_text|' . $current_rev . '|0|value', $review_text, false);

    	foreach ($photo_array as $key => $value) {
    		if($key == 0) {
    			$value_1 = str_replace('/home/v/vaganol6/', 'https://', $value);
    			$value_2 = str_replace('public_html/', '', $value_1);
    			$value_3 = str_replace('elisyamba.rf', 'xn--80ablmoh8a2h.xn--p1ai', $value_2);
		    	add_post_meta($product_id, '_complex_reviews|complex_reviews_img|' . $current_rev . '|0|value', $value_3, false);
    		} else {
    			$value_1 = 'https://' . str_replace('/home/v/vaganol6/', '', $value);
    			$value_2 = str_replace('public_html/', '', $value_1);
    			$value_3 = str_replace('elisyamba.rf', 'xn--80ablmoh8a2h.xn--p1ai', $value_2);
		    	add_post_meta($product_id, '_complex_reviews|complex_reviews_img_' . $key . '|' . $current_rev . '|0|value', $value_3, false);
    		}
    	}
    	// wp_die($photo_array . ' 12313');

		// carbon_set_post_meta($product_id, 'complex_reviews', 
		// 						array(
		// 							"complex_reviews_name"=>$_REQUEST["name"],
		// 							"complex_reviews_stars"=>$stars,
		// 							"complex_reviews_text"=>$review_text
		// 						)
							
							
		// 					);
		
		
		//carbon_set_post_meta($product_id, 'complex_reviews[' . $current_rev . ']/complex_reviews_name', $_REQUEST["name"]);
		//carbon_set_post_meta($product_id, 'complex_reviews[' . $current_rev . ']/complex_reviews_stars', $stars);
		//carbon_set_post_meta($product_id, 'complex_reviews[' . $current_rev . ']/complex_reviews_text', $review_text);
		//carbon_set_post_meta($product_id, 'complex_reviews[' . $current_rev . ']/complex_reviews_text', $review_text);
      
      $headers = array(
        'From: Сайт Елисямба <noreply@noreply.noreply>',
        'content-type: text/html',
      );
    //vaganov046home@mail.ru
      add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
      if (wp_mail('vaganov046home@mail.ru', 'Отзыв', '<strong>Товар:</strong> <a href="https://xn--80ablmoh8a2h.xn--p1ai/wp-admin/post.php?post=' . $product_id . '&action=edit">' . $product_title . '</a><br><strong>Отзыв:</strong> '.$_REQUEST["review_text"].'<br/> <strong>Имя:</strong> '.$_REQUEST["name"].' <br/> <strong>Оценка:</strong> '.$_REQUEST["stars"].' <br/> <strong>Email:</strong> '.$_REQUEST["vk"], $headers, $photo_array))
		  wp_die("<span style = 'color:green;'>Мы свяжемся с Вами в ближайшее время.</span><pre>" . $_FILES['photo'] . '</pre> Номер отзыва ' . $current_rev);
      else wp_die("<span style = 'color:red;'>Сервис недоступен попробуйте позднее.</span>");
      
    } else {
      wp_die( 'НО-НО-НО!', '', 403 );
    }
  }


add_action( 'wp_ajax_pre_serch', 'pre_serch' );
add_action( 'wp_ajax_nopriv_pre_serch', 'pre_serch' );

function pre_serch() {
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
			
			global $wpdb;
			//$rez = $wpdb->get_results('SELECT * FROM `el_posts` WHERE `post_title` LIKE "%'.$_REQUEST['value'].'%"  AND `post_status` = "publish"');
			$rez = $wpdb->get_results('SELECT `el_posts`.`ID`, `el_posts`.`post_title`, `el_posts`.`guid`,  `el_postmeta`.`meta_value` FROM `el_posts` LEFT JOIN `el_postmeta` ON (`el_postmeta`.`post_id` = `el_posts`.`ID` AND `el_postmeta`.`meta_key` = "_tovar_order" ) WHERE `post_title` LIKE "%'.$_REQUEST['value'].'%" AND `post_status` = "publish" ORDER BY CAST(`el_postmeta`.`meta_value` AS SIGNED)');
			
			if (empty($rez))
				wp_die( 'Nema tovaru', '', 403 );

			$main_rez = array();
			$i = 0;
			foreach ($rez as $r) {
				$sku = get_post_meta($r->ID, "_sku", true);
				if (empty($sku)) continue;
				if (get_post_meta($r->ID, "_tovar_sklad_drop", true) !== "yes")
				if (empty(get_post_meta($r->ID, "_sclad_count", true))) continue; 
				
				$main_rez[] = array(
					"ID" =>  $r->ID,
					"title" =>  $r->post_title,
					"lnk" =>  $r->guid,
					"sku" => $sku,
					"priceCur" => get_post_meta($r->ID, "_price", true),
					"priceOld" => get_post_meta($r->ID, "_old_price", true),
					"picture" => get_site_url( null, '', 'https' )."/galery/miniature/min-".$sku.".1.jpg",
				);
				$i++;
			}
			
			if ($i <= 0) wp_die( 'Nema tovaru', '', 403 );

			wp_die(json_encode(array("srez" => 1, "sdata" =>  $main_rez)));
	
		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}
}

add_action( 'wp_ajax_send_recall', 'send_recall' );
add_action( 'wp_ajax_nopriv_send_recall', 'send_recall' );

function send_recall() {
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
			$s = curl_init();
							
			$data = array ("apiKey" => "ILn5g3dW5BgWC0352W1d0dWIRtto5m7u",
				"order" => json_encode (array(
					"firstName" => $_REQUEST["name"],
					"phone" => $_REQUEST["phone"],
					"customerComment" => "перезвоните мне",
					"orderMethod" => "	obratnii-zvonok",
					"call" => 1,
					'items' => array(
						array(
							
							"initialPrice" => "1", 
							"productName" => "", 
							"quantity" => 1, 
							)
					),
				))
			);

			curl_setopt($s, CURLOPT_URL, 'https://elisyamba.retailcrm.ru/api/v5/orders/create'); 
			curl_setopt($s,CURLOPT_POST,true); 
			curl_setopt($s, CURLOPT_RETURNTRANSFER, true); 
			curl_setopt($s, CURLOPT_POSTFIELDS, $data);
			$zz = curl_exec($s);
		
	
		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}
}


add_action( 'wp_ajax_get_rev', 'get_rev' );
add_action( 'wp_ajax_nopriv_get_rev', 'get_rev' );

function get_rev() {
		if ( empty( $_REQUEST['nonce'] ) ) {
			wp_die( '0' );
		}
		
		if ( check_ajax_referer( 'NEHERTUTLAZIT', 'nonce', false ) ) {
			
			$elements = carbon_get_post_meta($_REQUEST["postid"],'complex_reviews');
			$stringEl = "";

			if (count($elements)-1 <= (int)($_REQUEST["count"]))
			{
				$posts = get_posts(array(
					'numberposts' => 10,
					'category' => 23,
					'offset' => $_REQUEST["countshop"]
				));

				
				$addet = 0;
				foreach( $posts as $post ){
					
		
						$stringEl .= '<div class="review-item" style="" data-inc="'.$inc.'" data-postid="'. $post->ID.'">';
							$stringEl .= '<div class="review-item__header">';
				 			$stringEl .= '<div class="review-item__header-ava" style="background-image: url('.carbon_get_post_meta($post->ID,'review_photo').');"></div>';
				 				$stringEl .= '<div class="review-item__header-content">';
								$stringEl .= '<div class="review-item__header-content-name-date">';
									$stringEl .= '<div class="review-item__header-name">'. $post->post_title .'</div>';
									$stringEl .= '<div class="review-item__header-date">'.carbon_get_post_meta($post->ID,'review_date_time').'</div>';
									$stringEl .= '</div>';
									
				 				$stringEl .= '</div>';
				 			$stringEl .= '</div>';
						

						$stringEl .= '<div class="review-item__text">'.apply_filters('the_content',$post->post_content).'</div>';
							$stringEl .= '<div class="review-item__img-wrap">';
								
								$array_photo = carbon_get_post_meta($post->ID, 'review_photos');	
								foreach ($array_photo as $photo_item) {
									$stringEl .= '<a href="'.$photo_item['review_photos_item'].'" class="review-item__img-item fancybox" data-fancybox-group="reviews-img-'.$inc.'">';
										$stringEl .= '<img loading="lazy" src="'.$photo_item['review_photos_item'].'" alt="">';
									$stringEl .= '</a>';
								}
							$stringEl .= '</div>';
									

				 			$stringEl .= '</div>';
						$stringEl .= '</div>';
						$addet++;
					}
				wp_die(json_encode(array("elements" => $stringEl, "count" => (int)$_REQUEST["count"], "countshop" => (int)$_REQUEST["countshop"]+$addet ) ));
			}

			for ($i = 0; $i<count($elements); $i++) {
				for ($j = 0; $j<count($elements)-1; $j++) {
					$time = strtotime($elements[$j]['complex_reviews_date']);
					$time_sec = date('U', $time);

					$time2 = strtotime($elements[$j+1]['complex_reviews_date']);
					$time_sec2 = date('U', $time2);
					
					if ($time_sec < $time_sec2)
					{
						$tmp = $elements[$j];
						$elements[$j] = $elements[$j+1]; 
						$elements[$j+1] = $tmp; 
					}
				}	
			}

		
			$countElem = (int)($_REQUEST["count"])+1; 
			$addet = 0;
			for ($i = $countElem; $i < $countElem + 10; $i++ )
			{
				if (count($elements)-1 < $i) break;
					$time = strtotime($elements[$i]['complex_reviews_date']);
						$time_sec = date('U', $time);
						$month = date('m', $time) - 1;
						$arr_month = array(
							  'январь',
							  'февраль',
							  'март',
							  'апрель',
							  'май',
							  'июнь',
							  'июль',
							  'август',
							  'сентябрь',
							  'октябрь',
							  'ноябрь',
							  'декабрь'
						);

				$stringEl .= '<div class="review-item" style="" data-inc="'.$inc.'" data-postid="'. get_the_ID().'">';
					$stringEl .= '<div class="review-item__header">';
					$stringEl .= '<div class="review-item__header-ava" style="background-image: url('.wp_get_attachment_image_src($elements[$i]['complex_reviews_ava'], 'medium')[0].');"></div>';
						$stringEl .= '<div class="review-item__header-content">';
						$stringEl .= '<div class="review-item__header-content-name-date">';
							$stringEl .= '<div class="review-item__header-name">'. $elements[$i]['complex_reviews_name'].'</div>';
							$stringEl .= '<div class="review-item__header-date">'.date('d', $time_sec).' '.$arr_month[$month].' '.date('Y', $time_sec).'</div>';
							$stringEl .= '</div>';
							$stringEl .= '<div class="review-item__header-stars">';
								$stars_qty = $elements[$i]['complex_reviews_stars'];
								
								for ($j=0; $j < 5; $j++) { 
									if($stars_qty <= $j){
										$stringEl .= '<div class="star_review star_review-gray"></div>';
									}
									else 
									{
										$stringEl .= '<div class="star_review"></div>';
									}
								}
							$stringEl .= '</div>';
						$stringEl .= '</div>';
					$stringEl .= '</div>';
				

				$stringEl .= '<div class="review-item__text">'.$elements[$i]['complex_reviews_text'].'</div>';
					$stringEl .= '<div class="review-item__img-wrap">';
						if($elements[$i]['complex_reviews_img']){
							$stringEl .= '<a href="'.$elements[$i]['complex_reviews_img'].'" class="review-item__img-item fancybox" data-fancybox-group="reviews-img-'.$inc.'">';
								$stringEl .= '<img loading="lazy" src="'.$elements[$i]['complex_reviews_img'].'" alt="">';
							$stringEl .= '</a>';
						}			
						
						if($elements[$i]['complex_reviews_img_1']){
							$stringEl .= '<a href="'.$elements[$i]['complex_reviews_img_1'].'" class="review-item__img-item fancybox" data-fancybox-group="reviews-img-'.$inc.'">';
								$stringEl .= '<img loading="lazy" src="'. $elements[$i]['complex_reviews_img_1'].'" alt="">';
							$stringEl .= '</a>';
						}	
						
						if($elements[$i]['complex_reviews_img_2']){
							$stringEl .= '<a href="'.$elements[$i]['complex_reviews_img_2'].'" class="review-item__img-item fancybox" data-fancybox-group="reviews-img-'.$inc.'">';
								$stringEl .= '<img loading="lazy" src="'. $elements[$i]['complex_reviews_img_2'].'" alt="">';
							$stringEl .= '</a>';
						}
						
						if($elements[$i]['complex_reviews_img_3']){
							$stringEl .= '<a href="'.$elements[$i]['complex_reviews_img_3'].'" class="review-item__img-item fancybox" data-fancybox-group="reviews-img-'.$inc.'">';
								$stringEl .= '<img loading="lazy" src="'. $elements[$i]['complex_reviews_img_2'].'" alt="">';
							$stringEl .= '</a>';
						}

						if($elements[$i]['complex_reviews_img_4']){
							$stringEl .= '<a href="'.$elements[$i]['complex_reviews_img_4'].'" class="review-item__img-item fancybox" data-fancybox-group="reviews-img-'.$inc.'">';
								$stringEl .= '<img loading="lazy" src="'. $elements[$i]['complex_reviews_img_4'].'" alt="">';
							$stringEl .= '</a>';
						}
					
									
		
					$stringEl .= '</div>';
							
						$stringEl .= '<div class="review-usefull">';
							$stringEl .= '<span class="review-usefull__title">Отзыв полезен?</span>';
							
									$usefull_yes = $elements[$i]['complex_reviews_is_use_yes'] ? $elements[$i]['complex_reviews_is_use_yes'] : 0;
									$usefull_no = $elements[$i]['complex_reviews_is_use_no'] ? $elements[$i]['complex_reviews_is_use_no'] : 0;
									
								
									$stringEl .= '<div class="review-usefull__yes" data-qty="'.$usefull_yes.'">'. $usefull_yes .'</div>';
									$stringEl .= '<div class="review-usefull__no">' . $usefull_no. '</div>';
									$stringEl .= '</div>';

					$stringEl .= '</div>';
				$stringEl .= '</div>';
				$addet++;
			}

			wp_die(json_encode(array("elements" => $stringEl, "count" => (int)$_REQUEST["count"]+$addet, "countshop" => 0 )));
	
		} else {
			wp_die( 'НО-НО-НО!', '', 403 );
		}
}

?>