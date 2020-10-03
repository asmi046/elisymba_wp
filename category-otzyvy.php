<?php get_header(); ?>

<main>
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

			<section class="page-content page-content-arial <? if ($_REQUEST["nh"] == 1) echo "page-content-full"?>">
				<?php if ( have_posts() ) : ?>
					<h1><?php single_cat_title();?></h1>
					
					<div class="tabs_x" id="tab-review" style="display: block;">
						<div id="w0" data-pjax-container="" data-pjax-timeout="1000">    
							<?php  while ( have_posts() ) : the_post(); ?>
								<?php 
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
									    	<div class="page_post_sized_thumbs  clear_fix d-none"><a class = "fancybox"  href = "<?php echo $thumb_url_full[0];?>"><img src = "<?php echo $thumb_url[0];?>" alt = "<?php echo $post->post_title; ?>" title = "Нажмите чтобы увеличить "></a></div>
									    <?php endif;?>
									    <div class="page_post_sized_thumbs  clear_fix">
									    <?php foreach ($array_photo as $photo_item):
									    	?>

											<a class = "fancybox"  href = "<?php echo $photo_item['review_photos_item'];?>"><img width="170" height="auto" src = "<?php echo $photo_item['review_photos_item'];?>" alt = "<?php echo $post->post_title; ?>" title = "Нажмите чтобы увеличить "></a>
									    <?php endforeach;?>
									    </div></div>
									</div>
									    <div class="bp_edited_by"></div>
									  </div>
								</div>
								<!-- <div class = "imgOtzivWriper imgOtzivWriperInPage">
									<?php 
										$thumb_id = get_post_thumbnail_id($r->ID);
										$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
									?>
									<a class = "fancybox" data-fancybox-group = "otzGalery" href = "<?php echo $thumb_url[0];?>">
										<img src = "<?php echo $thumb_url[0];?>" alt = "<?php echo $r->post_title; ?>" title = "Нажмите чтобы увеличить ">
									</a>
								</div> -->
								<!--
								<div class="all_review">
									<div class="review_name"> <?php //the_title(); ?>, <?php //echo get_post_meta(get_the_ID(), "geo", true); ?></div>
									<div class="review_block">
										<div class="avatar_review">
											<?php //echo get_the_post_thumbnail(get_the_ID());?>
										</div>
										<div class="review_text">
											<?php //the_content(); ?>
										</div>
									</div>
								</div>
								-->
							<?php endwhile;?>
						</div>
					</div>
					
					
					

					<?php 
						global $wp_query;
						if($wp_query->max_num_pages > 1 && get_query_var('paged') != $wp_query->max_num_pages):?>
							<?php $cnt_posts = get_category(23)->category_count;
								$posts_per_page = get_query_var('posts_per_page');
								$number_btn = $posts_per_page;
								if($cnt_posts - $posts_per_page < $posts_per_page && $wp_query->max_num_pages - get_query_var('paged') - 1 == 1.0)
									$number_btn = $cnt_posts - $posts_per_page;
							?>
							<button class="load-more" data-action="loadmore" data-ajaxurl="<?php echo esc_url(admin_url('admin-ajax.php'))?>" data-query="<?php echo esc_attr(serialize($wp_query->query_vars))?>" data-container="#w0"  data-paged="<?php echo esc_attr( get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1 ) ?>"
							data-max="<?php echo esc_attr( $wp_query->max_num_pages ) ?>">Показать еще <?php echo $number_btn;?>...</button>
						<?php endif;?>
					
					
					
					
					
					<div class="bg-gray-pagination">
						<div class="pink-pagination">
							<?php //if ( function_exists( 'wp_pagenavi' ) ) wp_pagenavi(); ?>
						</div>
					</div>
					
				<?php endif; ?>
			</section>
			
			
			
        </div>
    </div>
</main>
	
<?php get_footer(); ?>