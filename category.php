<?php get_header(); ?>

<main>
    <div class="wrapper">
		<?php include ("baner-timer.php"); ?>
		
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
				if( !$detect->isMobile() )
					if ($_REQUEST["nh"] != 1)
						include("search-form.php");
			?>
				
				<?php 

				
				include("sortBlk.php");
				
				if ( have_posts() ) : ?>
					<div class="breadcrumbs" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    	<?php
						if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb('','');
						}
						?>							
					</div>
				
					<h1><?php single_cat_title();?></h1>
					<?php
						$pageNum = (get_query_var('paged')) ? get_query_var('paged') : 1;
						
						$part =  explode("####", category_description());
					?>
					
					
					
					<?php
						if ($pageNum == 1){
							if (count($part) > 1)
								echo '<div id="contentUp">'.apply_filters( 'the_content', $part[1])."</div>";
						}
					?>
					
					<?php include("filtrSelectElem.php"); ?>
					
					
					<div class="page_navi_top bg-gray-pagination bg-gray-pagination-top">
						<?php if ( function_exists( 'wp_pagenavi' ) ) wp_pagenavi(); ?>
					</div>
					
					
					<div id="w0" class="list-view">
						<div id = "contentjscroll" class="catalog-items clearfix"> 
							<?php  while ( have_posts() ) : the_post(); ?>
								<?php get_template_part( 'tovar', 'elem' );?>
							<?php endwhile;?>
					
						</div>	
					</div>
					
					
					
					
					<div class="page_navi_bottom bg-gray-pagination">
						<?php if ( function_exists( 'wp_pagenavi' ) ) wp_pagenavi(); ?>
					</div>
					
					
					
					<?php 
						 
						if ($pageNum == 1): ?>
							<div id="content">
								<?php
									echo apply_filters( 'the_content', $part[0]);
								?>
								
							</div>
					<?php endif; ?>
				<?php endif; ?>
			</section>
			
<script>


</script>

	<style>


		.jscroll-added, .jscroll-inner {
			display: -webkit-flex;
			display: -moz-flex;
			display: -ms-flex;
			display: -o-flex;
			display: flex;
			-webkit-flex-wrap: wrap;
			-moz-flex-wrap: wrap;
			-ms-flex-wrap: wrap;
			-o-flex-wrap: wrap;
			flex-wrap: wrap;
			justify-content: space-between;
			width: 100%;
		}

		.pc100 {
			width:100%;
		}

		.pc100 .category-item, .pc100 .catalog-item {
			width:30%;
		}


	</style>
			
        </div>
    </div>
</main>

<?php get_footer(); ?>