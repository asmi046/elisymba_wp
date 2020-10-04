<?php get_header(); ?>
<script>
	window.scrollBy( 0, 1 );
	</script>
    <main>
<?php if($_GET['kupon'] === '1'):
	setcookie('kupon', '1');
endif;?>
<div class="wrapper">			
			<?php include ("baner-timer.php"); ?>
			
				
<div class="clearfix d-flex-main">
            
<?php 
	require_once 'Mobile_Detect.php';
	$detect = new Mobile_Detect;
	
	// if( !$detect->isMobile() ){
	// 	if ($_REQUEST["nh"] != 1)
	// 		get_sidebar("left"); 
	// }

?>                

<section class="page-content page-content-full">
                                     
<?php 
	if( $detect->isMobile() )
		//if ($_REQUEST["nh"] != 1)
			include("search-form.php");
?>

<h2 class="page-title">Все товары</h2>
<div id="w0" class="list-view">
	
	<div class="page-content page-content-inmain page-content-full">
		<?php 
			echo carbon_get_theme_option( 'main_up_tex' );
		?>
	</div>
	
	<?php include("filtrSelectElem.php"); ?>
	

	<div class="page_navi_top bg-gray-pagination bg-gray-pagination-top">
		<?php if ( function_exists( 'wp_pagenavi' ) ) wp_pagenavi(); ?>
	</div>

	
	<div id = "contentjscroll" class="catalog-items clearfix contentjscroll">
		<?php 
			include("sortBlk.php");
		
			if ( have_posts() ) : 
					
				while ( have_posts() ) : the_post();
					get_template_part( 'tovar', 'elem' );
				endwhile;	
			endif;
		 ?>
	</div>


	<div class="page_navi_bottom bg-gray-pagination">
		<?php if ( function_exists( 'wp_pagenavi' ) ) wp_pagenavi(); ?>
	</div>
	
	<div class="page-content page-content-inmain page-content-full">
		<?php 
			echo carbon_get_theme_option( 'main_down_tex' );
		?>
	</div>
	
</div>

             

</section>
            </div>
        </div>
    </main>
<?php get_footer(); ?>