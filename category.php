<?php get_header(); ?>

<main>
    <div class="wrapper">
        <?php include ("baner-timer.php"); ?>
        <?php include ("show-960.php"); ?>
            
		<div class="clearfix d-flex-main">
            
			<?php get_sidebar("left"); ?>                

			<section class="page-content">
				
			<?php 
				include("search-form.php");
			?>	
				
				<?php 
				/*
				$args = array(
					'meta_key'       => 'orderCat',
					'orderby'        => 'meta_value_num',     
					'post_type'      => 'post',
					'order'          => 'ASC', 
				 );
		 
				query_posts( $args );
				*/
				
				
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
					
					
					<div class="bg-gray-pagination bg-gray-pagination-top">
						<div class="pink-pagination">
							<?php if ( function_exists( 'wp_pagenavi' ) ) wp_pagenavi(); ?>
						</div>
					</div>
					
					
					<div id="w0" class="list-view">
						<div id = "contentjscroll" class="catalog-items clearfix"> 
							<?php  while ( have_posts() ) : the_post(); ?>
								<?php get_template_part( 'tovar', 'elem' );?>
							<?php endwhile;?>
							
							<!--
							<div class="next">
								<a  class = 'aloadet' href="<?php echo get_template_directory_uri();?>/jscroll.php?start=6&count=12&cat=<?php echo get_query_var('cat');?>">next</a>
							</div>
							-->
							
						</div>
						
						
					</div>
					
					
					
					
					<div class="bg-gray-pagination">
						<div class="pink-pagination">
							<?php if ( function_exists( 'wp_pagenavi' ) ) wp_pagenavi(); ?>
						</div>
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
/*
	jQuery(window).scroll(function () {
		if (jQuery(window).width() >= '1280')	
		   if (jQuery(this).scrollTop() > 1400) { //1700
				jQuery(".main-sidebar").hide();
				jQuery(".page-content").addClass("pc100");
				
			} else {
			    jQuery(".main-sidebar").show();
				jQuery(".page-content").removeClass("pc100");
			}
    });
*/

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
		<script>
//jQuery(window).on('beforeunload', function() {
//    jQuery(window).scrollTop(0);
//});
	</script>
<?php get_footer(); ?>