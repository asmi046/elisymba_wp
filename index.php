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
            <?php include ("show-960.php"); ?>
			
				
<div class="clearfix d-flex-main">
            
<?php 
	require_once 'Mobile_Detect.php';
	$detect = new Mobile_Detect;
	
	if( !$detect->isMobile() ){
		if ($_REQUEST["nh"] != 1)
			get_sidebar("left"); 
	}

?>                

<section class="page-content <? if ($_REQUEST["nh"] == 1) echo "page-content-full"?>">
                                     
<?php 
	if ($_REQUEST["nh"] != 1)
		include("search-form.php");
?>

<h2 class="page-title">Все товары</h2>
<div id="w0" class="list-view">
	
	<div class="page-content page-content-inmain <? if ($_REQUEST["nh"] == 1) echo "page-content-full"?>">
		<?php 
			echo carbon_get_theme_option( 'main_up_tex' );
		?>
	</div>
	
	<?php include("filtrSelectElem.php"); ?>
	
	
	
	<div id = "contentjscroll" class="catalog-items clearfix contentjscroll">
		<?php 
			include("sortBlk.php");
		
		
		if ( have_posts() ) : ?>
			
		<div class="bg-gray-pagination bg-gray-pagination-top">
		
			<div class="pink-pagination">
				<?php if ( function_exists( 'wp_pagenavi' ) ) wp_pagenavi(); ?>
			</div>
		
		</div>
			
			<?php
				
				while ( have_posts() ) : the_post();
					get_template_part( 'tovar', 'elem' );
				endwhile;
				
			?>
		<?php endif;?>
		
		
	</div>


	<div class="bg-gray-pagination">
		<div class="pink-pagination">
			<?php if ( function_exists( 'wp_pagenavi' ) ) wp_pagenavi(); ?>
		</div>
	</div>
	
	<div class="page-content page-content-inmain <? if ($_REQUEST["nh"] == 1) echo "page-content-full"?>">
		<?php 
			echo carbon_get_theme_option( 'main_down_tex' );
		?>
	</div>
	
</div>



<div class="social-widgets-title">
  
</div>




<div class="clearfix"></div>                

</section>
            </div>
        </div>
    </main>
<?php get_footer(); ?>