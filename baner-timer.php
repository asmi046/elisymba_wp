
			<div id = "cityElem_top" class = "new_delivery_elem_top new_delivery_elem_top_mob">
								<?php 
									$city = $GLOBALS['city'];
								?>
								Ваш город: <br/><span class = "value city_sel_elem"><?php echo $city; ?></span>
								<div class = "city_vsp_vin" style = "display:<?php echo (!empty($_COOKIE["cwclose"]))?"none":"block";?>; <? echo ($detect->isMobile())?"display:none":"display:block";?>">
									<div class = "qq">Ваш город <span style = "city_in_win"><?php echo $city; ?></span>?</div>
									<div class = "qq_btn">
										<div class = "yes_no_btn yes_btn btn btn-pink" >Да, спасибо</div> <div class = "yes_no_btn no_btn btn btn-pink">Нет, другой</div>
									</div>
								</div>
			</div>

<?php if (!is_single()):?>

	<?php if (is_home()||!is_home()):?>
	<script>
	jQuery(document).ready(function() {  
	  if (jQuery(window).width() < 916) {
			jQuery('.baner-new__presents-1 .baner-new__presents-title').html('Получи<br> до 2-х подарков');
			jQuery('.baner-new__presents-2 .baner-new__presents-title').html('Выиграй<br> магнитный конструктор');
		}
		
	  if (jQuery(window).width() < 916) {
			jQuery('.dt-z').hide();
			jQuery('.mob-z').show();
		}
	});
	</script>


					
	<!-- <section class="baner-new-img dt-z ">
			
			<a href="<?php //echo get_permalink(12597);?>">
			<img class = "lazy" data-src = "<?php //bloginfo("template_url")?>/img/b-ng-dt-1.jpg?v=1.0.16" />
			</a>

	</section>

	<section class="baner-new-img-m mob-z present-modal1">
		<a href="<?php // echo get_permalink(12597);?>">
			<img class = "lazy" data-src = "<?php // bloginfo("template_url")?>/img/b-ng-mob-1.jpg?v=1.0.11" />
		</a>
			
	</section> -->

	
		<script>
			jQuery(document).ready(function () {
				console.log(jQuery('#main_banner_new'));
				jQuery('#main_banner_new').owlCarousel({
					loop:true,
					nav:false,
					items:1,
					autoHeight: true,
					autoplay: true,
					autoplayTimeout:30000,
				});
				
			});
		</script>
		
		<? if (is_home()) {?>
		<section class="baner-new-img_slider">
			<div id = "main_banner_new" class="owl-carousel owl-theme" >	
					
				<? 
					$b_elements = carbon_get_theme_option("banner_feild");
					if (!empty($b_elements)) {
						$i = 0;
						foreach ($b_elements as $be) {
				?>
					<? if( $detect->isMobile() ){ ?>
						<a href = "<? echo $be["bf_url"]; ?>">
							<? if( $i == 0 ){ ?>	
								<img class = "main_bn_1" src = "<?php echo $be["bf_img_mobile"]?>">
							<?} else { ?>
								<img class = "main_bn_1 lazy" data-src = "<?php echo $be["bf_img_mobile"]?>">
							<?}?>
						</a>
						<?} else { ?>
						
						<a href = "<? echo $be["bf_url"]; ?>">
							<? if( $i == 0 ){ ?>	
								<img class = "main_bn_1" src = "<?php echo $be["bf_img_desctop"]?>">
							<?} else { ?>
								<img class = "main_bn_1 lazy" data-src = "<?php echo $be["bf_img_desctop"]?>">
							<?}?>	
						</a>

						
							
						
					<?}?>
					<?
					$i++;
					}?>
				<?}?>
					
					
					
			</div>
		</section>
		<?}?>	
	
	<?php endif;?>
<?php endif;?>