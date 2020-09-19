		<? 
		require_once 'Mobile_Detect.php';
		$detect = new Mobile_Detect;
					
		if( !$detect->isMobile() ){ ?>		
				<div class="widget-reviews" id="ajax-reviews">
					<div class="widget-reviews" id="ajax-reviews"><div class="widget-title">Отзывы покупателей</div>
						<?php
							$args = array(
										'numberposts' => 7,
										'category'    => 23,
										'orderby' => "rand",
										);
							
							$rev = get_posts($args);
							
							foreach ($rev as $r) {
								?>
								<?php 
										global $post;
										$thumb_id = get_post_thumbnail_id($r->ID);
										$thumb_url_full = wp_get_attachment_image_src($thumb_id,'full', true);
										$thumb_url = wp_get_attachment_image_src($thumb_id,'medium', true);
									?>
								<div class="review-item">
							        <div class="review-name"><a class="review-name__link" href="<?php  echo carbon_get_post_meta($r->ID, 'review_link')?>" target="blank"><?php echo get_the_title($r->ID);?></a></div>
							        <div class="review-city"><?php echo carbon_get_post_meta($r->ID, 'review_sity')?></div>
							        <div class="review-body">«<?php echo get_post($r->ID)->post_content;?>»</div>
                                    <?php if($thumb_id):?>
							        <div class="review-int">
										<a class = "fancybox" data-fancybox-group = "otzGalery<?php echo $r->ID;?>" href = "<?php echo $thumb_url_full[0];?>">
											<img class = "lazy" data-src = "<?php echo $thumb_url[0];?>" alt = "<?php echo $r->post_title; ?>" title = "Нажмите чтобы увеличить ">
										</a>
									</div>
                                <?php endif;?>
							        <div class="review-photo"><img class = "lazy" data-src="<?php echo carbon_get_post_meta($r->ID, 'review_photo');?>"></div>
							    </div>
								
								
								<?php
							}
							wp_reset_query();
						?>
					
						<a href="<?php echo get_category_link(23); ?>" class="btn btn-dark-pink all-reviews">Все отзывы</a>
						<a href="<?php echo get_the_permalink(2299); ?>" class="btn btn-default add-reviews">Добавить отзыв</a></div>
				</div>
		<?}?>