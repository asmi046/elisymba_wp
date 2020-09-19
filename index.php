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
		get_sidebar("left"); 
	}

?>                

<section class="page-content">
                                     
<?php 
	include("search-form.php");
?>

<h2 class="page-title">Все товары</h2>
<div id="w0" class="list-view">
	
	<div class="page-content page-content-inmain">
		<?php iinclude_page(31); ?>
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
	
	<div class="page-content page-content-inmain">
		<?php iinclude_page(6123); ?>
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