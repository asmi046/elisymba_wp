<?php get_header(); ?>

<main>
    <div class="wrapper">
        <?php include ("baner-timer.php"); ?>
        <?php include ("show-960.php"); ?>
            
		<div class="clearfix d-flex-main">
            
			<?php get_sidebar("left"); ?>                

			<section class="page-content page-content-arial">
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
					
					<div class="bg-gray-pagination bg-gray-pagination-top">
						<div class="pink-pagination">
							<?php if ( function_exists( 'wp_pagenavi' ) ) wp_pagenavi(); ?>
						</div>
					</div>
					
					<div id="w0" class="list-view">
						<div class="catalog-items clearfix"> 
							<?php  while ( have_posts() ) : the_post(); ?>
								<?php get_template_part( 'statia', 'elem' );?>
							<?php endwhile;?>
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
			
			
			
        </div>
    </div>
</main>
	
<?php get_footer(); ?>