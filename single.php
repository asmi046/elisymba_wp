<?php 

//ini_set("display_errors",1);
//error_reporting(E_ALL);

get_header(); ?>

<main>
	<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
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

	<section id = "tovar" class="page-content page-content-full">
	<!-- Отключение последней хлебной крошки -->
	<style>
		.breadcrumb_last {
			display:none;
		}
	
		@media screen and (max-width: 515px){
			.breadcrumbs span span span:last-child a:after {
				content:"";
			}
		}
	</style>
	
		<?php 
			if( $detect->isMobile() )
					include("search-form.php");
		?>
	
	<div class="breadcrumbs" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
	
		<?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('','');
		}
		?>							
	</div>
	
    <div  itemscope itemtype="http://schema.org/Product" class="product-page">
    <h1 itemprop="name" class="page-title mobRotated"><?php the_title(); ?> <span style = "    font-size: 0.5em;"><?php //echo "(".get_post_meta(get_the_ID(), "size", true).")";?></span></h1>
    <div class="show-450">
		<?php get_template_part('template-parts/reviews-stars');?>
	</div>
    
	<?php
		$main_sales = $_REQUEST["nsale"];
		
		$pricr_cur = get_post_meta(get_the_ID(), "_price", true);
		$pricr_old = get_post_meta(get_the_ID(), "_old_price", true);
		
		if (!empty($main_sales)) {
			$pricr_old = $pricr_cur;
			$pricr_cur = $pricr_cur - $main_sales; 
		}			
		
	?>
	
	
	<div class="product-content page-content-arial">
		<script>
			jQuery(document).ready(function () {
				
				jQuery('#tkrDesctop, #tkrMob').owlCarousel({
					loop:true,
					margin:10,
					nav:true,
					items:1,
					autoHeight: true,
				});
				
				/*
				if (jQuery(window).width() >= '620') {
					 //$('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 500);
					 //jQuery('html, body').scrollTop(jQuery(".baner-new").offset().top-10);
				}
				*/
				
				if (jQuery(window).width() <= '620') {
					jQuery('.mobH1Container').append( jQuery('.mobRotated') );

				}
				
			});
		</script>
        <div class="product-main-info clearfix">
            <div class="fl">
                <div class="product-image">
					 <div class="jcarousel-wrapper">
						<?php 
						 			require_once 'Mobile_Detect.php';
								$detect = new Mobile_Detect;
								if( !$detect->isMobile() ){
						 ?>
						<div id = "tkrDesctop" class="owl-carousel owl-theme">
							<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg" class = "fancybox" data-fancybox-group = "gr1">
								<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "SKU", true).".1.webp";
									if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".1.webp")) { ?>
											<source srcset="<? echo $adr ?>" type="image/webp"> 
									<?}?>
								
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg">
								</picture>
							</a>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".2.jpg")):?>
								<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.2.jpg" class = "fancybox" data-fancybox-group = "gr1">
									<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "SKU", true).".2.webp";	
									if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".2.webp")) { ?>
											<source srcset="<? echo $adr ?>" type="image/webp"> 
									<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.2.jpg">
									</picture>
								</a>				
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".3.jpg")):?>
								<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.3.jpg" class = "fancybox" data-fancybox-group = "gr1">
									<picture>
										<? 
										$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "SKU", true).".3.webp";
										
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".3.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
										<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.3.jpg">
									</picture>
								</a>			
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".4.jpg")):?>
								<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.4.jpg" class = "fancybox" data-fancybox-group = "gr1">
									<picture>
										<? 
										$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "SKU", true).".4.webp";
										
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".4.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
										<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.4.jpg">
									</picture>
								</a>				
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".5.jpg")):?>
								<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.5.jpg" class = "fancybox" data-fancybox-group = "gr1">
									<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "SKU", true).".5.webp";
										
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".5.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.5.jpg">
									</picture>
								</a>			
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".6.jpg")):?>
								<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.6.jpg" class = "fancybox" data-fancybox-group = "gr1">
									<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "SKU", true).".6.webp";
									
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".6.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.6.jpg">
									</picture>
								</a>				
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".7.jpg")):?>
								<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.7.jpg" class = "fancybox" data-fancybox-group = "gr1">
									<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "SKU", true).".7.webp";
										
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".7.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.7.jpg">
									</picture>
								</a>				
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".8.jpg")):?>
								<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.8.jpg" class = "fancybox" data-fancybox-group = "gr1">
									<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "SKU", true).".8.webp";
										
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".8.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.8.jpg">
									</picture>
								</a>					
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".9.jpg")):?>
								<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.9.jpg" class = "fancybox" data-fancybox-group = "gr1">
									<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "SKU", true).".9.webp";
										
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".9.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.9.jpg">
									</picture>
								</a>				
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".10.jpg")):?>
								<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.10.jpg" class = "fancybox" data-fancybox-group = "gr1">
									<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "SKU", true).".10.webp";
									
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".10.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.10.jpg">
									</picture>
								</a>				
							<?php endif;?>
							
						</div>
						
								<? 
								}
					
		if( $detect->isMobile() ){ ?>	
						
						<div id = "tkrMob" class="owl-carousel owl-theme">
								<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "SKU", true).".1.webp";
										
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".1.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg">
								</picture>
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".2.jpg")):?>
									<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "SKU", true).".2.webp";
										
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".2.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.2.jpg">
									</picture>
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".3.jpg")):?>
									<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "SKU", true).".3.webp";
							
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".3.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.3.jpg">
									</picture>
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".4.jpg")):?>
									<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "SKU", true).".4.webp";
										
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".4.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.4.jpg">
									</picture>
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".5.jpg")):?>
									<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "SKU", true).".5.webp";
										
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".5.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.5.jpg">
									</picture>
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".6.jpg")):?>
									<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "SKU", true).".6.webp";
										
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".6.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.6.jpg">
									</picture>
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".7.jpg")):?>
									<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "SKU", true).".7.webp";
									
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".7.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.7.jpg">
									</picture>
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".8.jpg")):?>
									<picture>
									<? 
										$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "SKU", true).".8.webp";
											
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".8.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.8.jpg">
									</picture>
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".9.jpg")):?>
									<picture>
									<? 
										$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "SKU", true).".9.webp";
											
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".9.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.9.jpg">
									</picture>
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".10.jpg")):?>
									<picture>
									<? 	$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "SKU", true).".10.webp";
										
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".10.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.10.jpg">
									</picture>
							<?php endif;?>
							
						</div>
	<?}?>
					</div>
                     <?php if ((!empty($pricr_old))&&((int)$pricr_old > (int)$pricr_cur)):?>
						<p class="discount"><?php echo 100-round(((float)$pricr_cur / (float)$pricr_old) * 100);?><span>%</span></p>
					 <?php endif; ?>
                </div>
				
				<div class = "mobH1Container">
				
				</div>
				
				<div class = "new_delivery_blk">
					<div id = "cityElem" class = "new_delivery_elem">
						Ваш город: <br/><span class = "value city_sel_elem"><?php echo (!empty($_COOKIE["cityinfo"]))?$_COOKIE["cityinfo"]:$obj->city->name_ru; ?></span>
					</div>
					
					<div id = "deliveryDeyElem" class = "new_delivery_elem">
						Доставим за: <br/><span class = "value"></span>
					</div>
					
					<div id = "deliveryPriceElem" class = "new_delivery_elem">
						Цена: <br/><span class = "value"></span>
					</div>
					
					<span style = "display:none;" class = "not__city_finde">
						Мы не смогли автоматически рассчитать сроки и стоимость доставки до Вас. Пожалуйста оставьте заявку, и наш менеджер сделает это в ручном режиме. <br/> С Любовью, ЕлиСямба!
					</span>
				</div>
				
				
				<span class = "viev_map">Показать пункты выдачи</span>	
				<div id = "map_pvt"></div>
				
		
			
				
            </div>
            <div class="product-desc">
                <div class="clearfix">
					<div itemprop="description">
						<ul class="hide-480">
							<li>Гарантия качества (ГОСТ 25779-90)</li>
							<li>Натуральные материалы</li>
							<?php if(!carbon_get_the_post_meta('complex_reviews')):?>
								<li>Доставка до двери</li>
								<li>Оплата при получении</li>
							<?php endif;?>
						</ul>
						<?php
						if(carbon_get_the_post_meta('complex_reviews')):
							$inc = carbon_get_the_post_meta('reviews_qty');
							$awerage = carbon_get_the_post_meta('reviews_awerage_rating');
							if(empty($inc)):
								$rating_total = 0;
								$arr_reviews = carbon_get_the_post_meta('complex_reviews');
								foreach($arr_reviews as $review):
									if($review['complex_reviews_is_show']):
										$rating_total += $review['complex_reviews_stars'];
										$inc++;
									endif;
								endforeach;
								$awerage = (float)$rating_total / (float)$inc;
								$awerage = round($awerage, 1);
							endif;
						?>
						<div class="review-item__header-stars hide-480">
							<?php $stars_qty = round($awerage);
							for ($i=0; $i < 5; $i++): ?>
								<?php if($stars_qty <= $i):?>
								<div class="star_review star_review-gray"></div>
								<?php else:?>
								<div class="star_review"></div>
								<?php endif;?>
							<?php endfor;?>
							<a href="#reviews-title" class="round-awerage"><?php echo $inc;?></a>
						</div>
						<?php endif;?>
					</div>
                    
					<!--
					<div class="rating">
                        <p>Рейтинг товара: <img alt="Рейтинг" style="position: relative; top: -3px; width: 100px;" src="/assets/pink/img/rating/plusstar5.0.png"> (5.0)</p>
                    </div>
                    -->
					
					<div class="price" style = "position:relative;" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <?php if ((!empty($pricr_old))&&((int)$pricr_old > (int)$pricr_cur)):?>
							<div class="price-current-title">Цена без акции:</div>
							<div class="price-current"><span class = "zPrice"><?php echo $pricr_old;?></span> <span>руб.</span></div>
                        <?php endif; ?>
						<hr class="dotted">
						
						<div class = "informerInPage">
							<?php if ((!empty($pricr_old))&&((int)$pricr_old > (int)$pricr_cur)):?>
								<div class = "informerElem">
									Выгода: <br/><span class = "vigodaBlk"><?php echo (float)$pricr_old - (float)$pricr_cur;?> руб.</span>
								</div>
							<?php endif;?>
						</div>
						
						<?php if ((!empty($pricr_old))&&((int)$pricr_old > (int)$pricr_cur)):?>
							<div class="price-old-title">Цена по акции:</div>
						<?php else: ?>
							<div class="price-old-title">Цена:</div>
						<?php endif; ?>
                        <div class="price-old" itemprop="price" content="<?php echo $pricr_cur;?>"><?php echo $pricr_cur;?> <span>руб.</span><meta itemprop="priceCurrency" content="RUB"></div>
                    
					</div>
					<span class = "nalichir">
	
						<?php
						$pre_order_link = '';
							if (empty(carbon_get_post_meta(get_the_ID(), "sclad_count")) && (empty(carbon_get_post_meta(get_the_ID(), "tovar_sklad_drop")))) {
								echo "По предзаказу";
								$pre_order_link = 'pre-order-link-non';
							}else 
								echo "Есть в наличии";
						?>
					</span>
                </div>
            <div class = "podWidget">
				<h2>К этому товару мы дарим:</h2>
				<!-- <div class = "posWline">
					<div class = "imWriper">
						<img src = "<?php bloginfo("template_url")?>/img/1podarka.png">
					</div>
					<div class = "txtWriper">
						Раскраски на выбор
					</div>
				</div> -->
			</div>	
			<!--    
            <div class = "podWidget">
				<h2>К этому товару мы дарим:</h2>	
				<?php
					$pricr_cur = get_post_meta(get_the_ID(), "_price", true); 
					
					
				?>
				
				<?php
					if (get_the_ID() != 'abc') {
				?>
				<div class = "posWline">
					<div class = "imWriper">
						<img src = "<?php bloginfo("template_url")?>/img/1podarka.png">
					</div>
					<div class = "txtWriper">
						Раскраски на выбор
					</div>
				</div>
				
				<?php
					//||(get_the_ID() == 10330)
					if (($pricr_cur > 5000)):
				?>
					<div class = "posWline">
						<div class = "imWriper">
							<img src = "<?php bloginfo("template_url")?>/img/2podarka-2.png">
						</div>
						<div class = "txtWriper">
							Мягкий пазл
						</div>
					</div>
				<?php endif; ?>
				<?php } else {?>
					<div class = "posWline">
						<div class = "imWriper">
							<img src = "<?php bloginfo("template_url")?>/img/1podarka-new.png">
						</div>
						<div class = "txtWriper">
							Раскраска
						</div>
					</div>
					
				
					<div class = "posWline">
						<div class = "imWriper">
							<img src = "<?php bloginfo("template_url")?>/img/2podarka-2-.png">
						</div>
						<div class = "txtWriper">
							Мягкие пазлы
						</div>
					</div>
				<?php }?>
			</div>       
				-->
			<div class="order-form__coupon order-form__coupon-1 center-mobile">
	               <div class="order-form__coupon-photo"></div>
	               <div class="order-form__coupon-text">Золотой<br> розыгрыш</div>
	               <div class="order-form__coupon-question">?</div>
	               <div class="order-form__coupon-note">Оформите заказ сегодня и получите 1 купон на участие в золотом розыгрыше</div>
	        </div>
			
			<div class="order-button-wrapper">
                   
					
					
							 <a onclick="yaCounter48236084.reachGoal('knopka');" class="btn btn-pink inSingleBtn tobascetInCat fancybox-order <?php echo $pre_order_link;?>" style = "display:inline-bloc;" href="#order-form" 
							data-sale="-<?php echo 100 - round(((float)$pricr_cur / (float)$pricr_old) * 100);?><span>%</span>" 
							data-price="<?php echo $pricr_cur;?>" 
							data-price-old = "<?php echo $pricr_old;?>" 
							data-size-price-s="<?php echo $pricr_cur;?>" 
							data-size-price-old-s="<?php echo $pricr_old;?>" 
							data-image="<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg" 
							data-title="<?php the_title(); ?>" 
							data-product = "<?php echo get_post_meta(get_the_ID(), "SKU", true)?>" 
							data-postid = "<?php echo get_the_ID();?>"
							>
								<?php
									if (empty(carbon_get_post_meta(get_the_ID(), "sclad_count")) && (empty(carbon_get_post_meta(get_the_ID(), "tovar_sklad_drop"))))
										echo "Предзаказ";
									else 
										echo "Заказать";
								?>
							</a>
							

				</div>
                
				<?php
				//global $post;  // Add this line and you're golden
					//if ($post->ID == 3503):
				?>
				<!--КОРЗИНА-->
				<div class="order-button-wrapper">
				
					<span class = "btn grnbtn inSingleBtn btn-pink tobascetInCat tobascet" style = "display:inline-block;" onclick="toBascetFnk(this); yaCounter48236084.reachGoal('korzinastrtovar-verh-new');"
						data-postid = "<?php echo get_the_ID();?>"  data-nsale = "<?php echo $main_sales;?>"><i class="fas fa-shopping-basket "></i> В корзину</span>
				
				</div>
				<?php// endif; ?>
                <div style="font-size: 16px; text-transform: none; color: #919191; margin-top: 10px; margin-left: 20px;    font-family: 'Trebuchet MS',Helvetica,sans-serif">
                    Данный товар купили <b><?php echo get_post_meta(get_the_ID(), "order_count", true);?></b> раз(а).
                </div>
            </div>
        </div>
		
			
		
		    <div class="additional-disc">
			
			
			
			<?php if($pricr_cur > 900):?>
        	<!-- <h3 class="additional-disc__title">Дарим к заказу 4 новогодних купона на сумму 2100 руб.</h3> -->
        	
			<!--
			<?php //if (in_category(51, $post->ID)){ //мелкая матория ?>
				<div class="additional-disc__wrapper">
					<? //include("upsaleblk/vdorogu.php"); ?>
					<? //include("upsaleblk/kpazl.php");  ?>
				</div>
				
			<?php //} else if (in_category(15, $post->ID)){ //подкатегория в дорогу ?>
			
				<div class="additional-disc__wrapper">
					<? //include("upsaleblk/motorika.php"); ?>
					<? //include("upsaleblk/kpazl.php");  ?>
				</div>
			<?php //} else if (in_category(69, $post->ID)){ //магнитный конструктор ?>
				<div class="additional-disc__wrapper">
					<? //include("upsaleblk/vdorogu.php"); ?>
					<? //include("upsaleblk/kpazl.php");  ?>
				</div>
			<?php //} else if (in_category(58, $post->ID)){ //коврики ?>
				<div class="additional-disc__wrapper">
					<? //include("upsaleblk/vdorogu.php"); ?>
					<? //include("upsaleblk/mkonstruktor.php");  ?>
				</div>
			<?php //} else if ($pricr_cur < 2000){ ?>
				<div class="additional-disc__wrapper">
					<? //include("upsaleblk/vdorogu.php");  ?>
					<? //include("upsaleblk/motorika.php"); ?>
				</div>
				<h4 class="manager-questions">Спросите менеджера о подробностях</h4>
				
			<?php //} else { ?>
				<div class="additional-disc__wrapper">
					<? //include("upsaleblk/motorika.php"); ?>
					<? //include("upsaleblk/vdorogu.php");  ?>
				</div>
				
				<h4 class="manager-questions">Спросите менеджера о подробностях</h4>
				
				<div class="additional-disc__wrapper">
					<? //include("upsaleblk/mkonstruktor.php");  ?>
					<? //include("upsaleblk/kpazl.php");  ?>
				</div>
			<?php //} ?>
			-->
			
			<?php if($pricr_cur > 2700):?>	
        	<?php if(!wp_is_mobile()):?>
				<!--
				<div class="additional-disc__wrapper" style="background-image: url(<?php bloginfo("template_url"); ?>/img/page-action.png);">
						<? //include("upsaleblk/vdorogu.php");  ?>
						<? //include("upsaleblk/kpazl.php");  ?>
				</div>
				-->
			
				
				
        	<?php else:?>
				<!--
				<div class="additional-disc__wrapper" style="background-image: url(<?php bloginfo("template_url"); ?>/img/tb_mob.png);">
						<? //include("upsaleblk/vdorogu.php");  ?>
						<? //include("upsaleblk/kpazl.php");  ?>
				</div>
				-->
				

				
			<?php endif;?>
				
			<?php endif;?>
				
		<?php endif;?>
        </div>
		
		
    </div>
   
 <!-- 
	<div class="item-page-row clearfix">
        <div class="block-border fl">
            <div class="clearfix">
                <div class="img" style = "width: 95px;" >
                    <img class = "cbImg" src="<?php bloginfo("template_url")?>/img/onlineMain.png" alt="Картинка">
                </div>
                <div class="text">
                    <div class="h5">Получите 300 рублей скидка на заказ</div>
                    <p>Помогите нам сделать магазин еще лучше. Если Вы найдете ошибку на сайте или неработающий блок, напишите пожалуйста на почту <a href = "mailto:info@elisyamba.ru">info@elisyamba.ru</a> или в группе в вк. Мы отблагодарим Вас скидкой в 300 рублей на Ваш заказ.</p>
                </div>
            </div>
        </div>
		
		
		<div class="block-border fl">
            <div class="clearfix">
                <div class="img">
                    <img src="<?php //bloginfo("template_url");?>/img/item-page-mp3.png" alt="Картинка">
                </div>
                <div class="text">
                    <div class="h5">Стильный mp3-плеер <br>в подарок к каждому <br>заказу!</div>
                    <p>Спешите, количество подарков<br>ограничено!</p>
                </div>
            </div>
        </div>
		
    </div>

-->
<div class="single-tabs">
<div class="tabs">
	<div class="tab">
		<div class="tab-bg" style="background-image: url(<?php echo get_template_directory_uri();?>/img/descr.png);"></div>
		<div class="tab-bg-active" style="background-image: url(<?php echo get_template_directory_uri();?>/img/descr-1.png);"></div>
	</div>
	<div class="tab">
		<div class="tab-bg" style="background-image: url(<?php echo get_template_directory_uri();?>/img/char.png);"></div>
		<div class="tab-bg-active" style="background-image: url(<?php echo get_template_directory_uri();?>/img/char-1.png);"></div>
	</div>
	<div class="tab">
		<div class="tab-bg" style="background-image: url(<?php echo get_template_directory_uri();?>/img/review.png);"></div>
		<div class="tab-bg-active" style="background-image: url(<?php echo get_template_directory_uri();?>/img/review-1.png);"></div>
	</div>
	<div class="tab">
		<div class="tab-bg" style="background-image: url(<?php echo get_template_directory_uri();?>/img/video.png);"></div>
		<div class="tab-bg-active" style="background-image: url(<?php echo get_template_directory_uri();?>/img/video-1.png);">
		</div>
	</div>
</div>
<div class="tab_content">
	<div class="tab_item tab_item-descr">

	</div>
	
	<div class="tab_item tab_item-char">
		
	</div>
	
	<div class="tab_item tab_item-review">

	</div>

	<div class="tab_item tab_item-video">
	
	</div>
</div>
</div>

<div class="h1 pink tac">Описание</div>

	<?php if(carbon_get_the_post_meta('product_specifications_char') ) {?>
	
		<div class="product-specifications">
			<div class="product-specifications__tabs">
				<div class="product-specifications-tab">Описание</div>		
				<div class="product-specifications-tab">Видео о товаре</div>
				<div class="product-specifications-tab">Отзывы</div>
				
			</div>
			<div class="product-specifications__tab-content">
				
				<div class="product-specifications__tab-item active">
					<?php echo apply_filters('the_content', carbon_get_the_post_meta('product_specifications_char'));?>
					
					<?php if(carbon_get_the_post_meta('product_specifications_complect')):?>
						<h2 class = "pink tac">Комплектация товара</h2>
						<?php echo carbon_get_the_post_meta('product_specifications_complect');?>
					<?php endif;?>
					
					<?php if(carbon_get_the_post_meta('product_specifications_video')):?>
						<h2 class = "pink tac">Видео о товаре</h2>
						<?php echo apply_filters('the_content', carbon_get_the_post_meta('product_specifications_video'));?>
					<?php endif;?>
					
					<?php if(carbon_get_the_post_meta('product_specifications_cerecter')):?>
						<h2 class = "pink tac">Характеристики товара</h2>
						<div class = "tovarCarector">
							<?php echo apply_filters('the_content', carbon_get_the_post_meta('product_specifications_cerecter'));?>
						</div>
					<?php endif;?>
					<!-- <?php if(carbon_get_the_post_meta('complex_reviews')):?>
						<h2 id="reviews-title" class = "pink tac">Отзывы</h2>
						<?php 
						$awerage = 5;
						$rating_total = 0;
						$inc = 0;
						$five_awerage = 0;
						$four_awerage = 0;
						$three_awerage = 0;
						$two_awerage = 0;
						$one_awerage = 0;
						$arr_reviews = carbon_get_the_post_meta('complex_reviews');
						foreach($arr_reviews as $review):
							$rating_total += $review['complex_reviews_stars'];
							$inc++;
							if($review['complex_reviews_stars'] == 5) {
								$five_awerage++;
							} elseif($review['complex_reviews_stars'] == 4) {
								$four_awerage++;
							} elseif($review['complex_reviews_stars'] == 3) {
								$three_awerage++;
							} elseif($review['complex_reviews_stars'] == 2) {
								$two_awerage++;
							} elseif($review['complex_reviews_stars'] == 1) {
								$one_awerage++;
							}
						endforeach;
						$awerage = (float)$rating_total / (float)$inc;
						$awerage = round($awerage, 1);?>
						<div class="reviews-board">
							<div class="reviews-board__rating">
								<div class="reviews-board__rating-number"><?php echo $awerage?></div>
								<div class="review-item__header-stars">
									<?php $stars_qty = round($awerage);
									for ($i=0; $i < 5; $i++): ?>
										<?php if($stars_qty <= $i):?>
										<div class="star_review star_review-gray"></div>
										<?php else:?>
										<div class="star_review"></div>
										<?php endif;?>
									<?php endfor;?>
								</div>
								<div class="reviews-board__rating-text">На основании<br> <span><?php echo $inc;?></span> отзывов</div>
							</div>
							<div class="reviews-board__progress">
								<div class="reviews-board__progress-item">
									<div class="progress-number">5</div>
									<div class="progress-line">
										<div class="progress-full" style="width: <?php $percent = 100 * $five_awerage / $inc; echo $percent;?>%"></div>
									</div>
									<div class="progress-percent"><?php echo round($percent);?>%</div>
								</div>
								<div class="reviews-board__progress-item">
									<div class="progress-number">4</div>
									<div class="progress-line">
										<div class="progress-full" style="width: <?php $percent = 100 * $four_awerage / $inc; echo $percent;?>%"></div>
									</div>
									<div class="progress-percent"><?php echo round($percent);?>%</div>
								</div>
								<div class="reviews-board__progress-item">
									<div class="progress-number">3</div>
									<div class="progress-line">
										<div class="progress-full" style="width: <?php $percent = 100 * $three_awerage / $inc; echo $percent;?>%"></div>
									</div>
									<div class="progress-percent"><?php echo round($percent);?>%</div>
								</div>
								<div class="reviews-board__progress-item">
									<div class="progress-number">2</div>
									<div class="progress-line">
										<div class="progress-full" style="width: <?php $percent = 100 * $two_awerage / $inc; echo $percent;?>%"></div>
									</div>
									<div class="progress-percent"><?php echo round($percent);?>%</div>
								</div>
								<div class="reviews-board__progress-item">
									<div class="progress-number">1</div>
									<div class="progress-line">
										<div class="progress-full" style="width: <?php $percent = 100 * $one_awerage / $inc; echo $percent;?>%"></div>
									</div>
									<div class="progress-percent"><?php echo round($percent);?>%</div>
								</div>
							</div>
							 <div class="btn-wrap">
								 <a href="#" class="btn btn-pink review-modal-link">Оставить отзыв</a>
							 </div>
						</div>
						<?php //$arr_reviews = carbon_get_the_post_meta('complex_reviews');
							$inc = 0;
							foreach($arr_reviews as $review):?>
								<?php if($review['complex_reviews_is_show']):?>
									<div class="review-item" data-inc="<?php echo $inc?>" data-postid='<?php echo get_the_ID();?>'>
										<div class="review-item__header">
											<div class="review-item__header-ava" style="background-image: url(<?php echo wp_get_attachment_image_src($review['complex_reviews_ava'], 'medium')[0];?>);"></div>
											<div class="review-item__header-content">
												<div class="review-item__header-content-name-date">
												<div class="review-item__header-name"><?php echo $review['complex_reviews_name']?></div>
												<div class="review-item__header-date"><?php echo $review['complex_reviews_date']?></div>
												</div>
												<div class="review-item__header-stars">
													<?php $stars_qty = $review['complex_reviews_stars'];
													for ($i=0; $i < 5; $i++): ?>
														<?php if($stars_qty <= $i):?>
														<div class="star_review star_review-gray"></div>
														<?php else:?>
														<div class="star_review"></div>
														<?php endif;?>
													<?php endfor;?>
												</div>
											</div>
										</div>
										<div class="review-item__text">
											<?php echo $review['complex_reviews_text']?>
										</div>
										<div class="review-item__img-wrap">
											<?php if($review['complex_reviews_img']):?>
												<a href="<?php echo wp_get_attachment_image_src($review['complex_reviews_img'], 'full')[0];?>" class="review-item__img-item fancybox" data-fancybox-group="reviews-img-<?php echo $inc?>">
													<img src="<?php echo wp_get_attachment_image_src($review['complex_reviews_img'], 'large')[0];?>" alt="">
												</a>
											<?php endif;?>
											<?php if($review['complex_reviews_img_1']):?>
												<a href="<?php echo wp_get_attachment_image_src($review['complex_reviews_img_1'], 'full')[0];?>" class="review-item__img-item fancybox" data-fancybox-group="reviews-img-<?php echo $inc?>">
													<img src="<?php echo wp_get_attachment_image_src($review['complex_reviews_img_1'], 'large')[0];?>" alt="">
												</a>
											<?php endif;?>
											<?php if($review['complex_reviews_img_2']):?>
												<a href="<?php echo wp_get_attachment_image_src($review['complex_reviews_img_2'], 'full')[0];?>" class="review-item__img-item fancybox" data-fancybox-group="reviews-img-<?php echo $inc?>">
													<img src="<?php echo wp_get_attachment_image_src($review['complex_reviews_img_2'], 'large')[0];?>" alt="">
												</a>
											<?php endif;?>
											<?php if($review['complex_reviews_img_3']):?>
												<a href="<?php echo wp_get_attachment_image_src($review['complex_reviews_img_3'], 'full')[0];?>" class="review-item__img-item fancybox" data-fancybox-group="reviews-img-<?php echo $inc?>">
													<img src="<?php echo wp_get_attachment_image_src($review['complex_reviews_img_3'], 'large')[0];?>" alt="">
												</a>
											<?php endif;?>
											<?php if($review['complex_reviews_img_4']):?>
												<a href="<?php echo wp_get_attachment_image_src($review['complex_reviews_img_4'], 'full')[0];?>" class="review-item__img-item fancybox" data-fancybox-group="reviews-img-<?php echo $inc?>">
													<img src="<?php echo wp_get_attachment_image_src($review['complex_reviews_img_4'], 'large')[0];?>" alt="">
												</a>
											<?php endif;?>
										</div>
										<div class="review-usefull">
											<span class="review-usefull__title">Отзыв полезен?</span>
											<?php 
												$usefull_yes = $review['complex_reviews_is_use_yes'] ? $review['complex_reviews_is_use_yes'] : 0;
												$usefull_no = $review['complex_reviews_is_use_no'] ? $review['complex_reviews_is_use_no'] : 0;
												
											?>
											<div class="review-usefull__yes" data-qty="<?php echo $usefull_yes;?>"><?php echo $usefull_yes;?></div>
											<div class="review-usefull__no"><?php echo $usefull_no;?></div>
										</div>
									</div>
								<?php endif;?>
							<?php $inc++; endforeach;
						 ?>
					<?php endif;?> -->
			
			<?php 
			
				$awerage = 5;
				$rating_total = 0;
				$inc = 0;
				$five_awerage = 0;
				$four_awerage = 0;
				$three_awerage = 0;
				$two_awerage = 0;
				$one_awerage = 0;
				$arr_reviews = carbon_get_the_post_meta('complex_reviews');
				foreach($arr_reviews as $review):
					if($review['complex_reviews_is_show']):
						$rating_total += $review['complex_reviews_stars'];
						$inc++;
						if($review['complex_reviews_stars'] == 5) {
							$five_awerage++;
						} elseif($review['complex_reviews_stars'] == 4) {
							$four_awerage++;
						} elseif($review['complex_reviews_stars'] == 3) {
							$three_awerage++;
						} elseif($review['complex_reviews_stars'] == 2) {
							$two_awerage++;
						} elseif($review['complex_reviews_stars'] == 1) {
							$one_awerage++;
						}
					endif;
				endforeach;
			
				if($inc > 0):
			
			?>
			<h2 id="reviews-title" class = "pink tac">Отзывы</h2>
			<?php 

			$awerage = (float)$rating_total / (float)$inc;
			$awerage = round($awerage, 1);?>
			<div class="reviews-board">
				<div class="reviews-board__rating">
					<div class="reviews-board__rating-number"><?php echo $awerage?></div>
					<div class="review-item__header-stars">
						<?php $stars_qty = round($awerage);
						for ($i=0; $i < 5; $i++): ?>
							<?php if($stars_qty <= $i):?>
							<div class="star_review star_review-gray"></div>
							<?php else:?>
							<div class="star_review"></div>
							<?php endif;?>
						<?php endfor;?>
					</div>
					<div class="reviews-board__rating-text">На основании<br> <span><?php echo $inc;?></span> отзывов</div>
				</div>
				<div class="reviews-board__progress">
					<div class="reviews-board__progress-item">
						<div class="progress-number">5</div>
						<div class="progress-line">
							<div class="progress-full" style="width: <?php $percent = 100 * $five_awerage / $inc; echo $percent;?>%"></div>
						</div>
						<div class="progress-percent"><?php echo round($percent);?>%</div>
					</div>
					<div class="reviews-board__progress-item">
						<div class="progress-number">4</div>
						<div class="progress-line">
							<div class="progress-full" style="width: <?php $percent = 100 * $four_awerage / $inc; echo $percent;?>%"></div>
						</div>
						<div class="progress-percent"><?php echo round($percent);?>%</div>
					</div>
					<div class="reviews-board__progress-item">
						<div class="progress-number">3</div>
						<div class="progress-line">
							<div class="progress-full" style="width: <?php $percent = 100 * $three_awerage / $inc; echo $percent;?>%"></div>
						</div>
						<div class="progress-percent"><?php echo round($percent);?>%</div>
					</div>
					<div class="reviews-board__progress-item">
						<div class="progress-number">2</div>
						<div class="progress-line">
							<div class="progress-full" style="width: <?php $percent = 100 * $two_awerage / $inc; echo $percent;?>%"></div>
						</div>
						<div class="progress-percent"><?php echo round($percent);?>%</div>
					</div>
					<div class="reviews-board__progress-item">
						<div class="progress-number">1</div>
						<div class="progress-line">
							<div class="progress-full" style="width: <?php $percent = 100 * $one_awerage / $inc; echo $percent;?>%"></div>
						</div>
						<div class="progress-percent"><?php echo round($percent);?>%</div>
					</div>
				</div>
				 <div class="btn-wrap">
					 <a href="#" class="btn btn-pink review-modal-link">Оставить отзыв</a>
				 </div>
			</div>
			<div class="review-item__wrapper">
			<?php $arr_reviews = carbon_get_the_post_meta('complex_reviews');
				$inc = 0;
				foreach($arr_reviews as $review):?>
					<?php if($review['complex_reviews_is_show']):
						$time = strtotime($review['complex_reviews_date']);
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
						);?>
						<div class="review-item" style="order: <?php echo $time_sec;?>" data-inc="<?php echo $inc?>" data-postid='<?php echo get_the_ID();?>'>
							<div class="review-item__header">
								<div class="review-item__header-ava" style="background-image: url(<?php echo wp_get_attachment_image_src($review['complex_reviews_ava'], 'medium')[0];?>);"></div>
								<div class="review-item__header-content">
									<div class="review-item__header-content-name-date">
									<div class="review-item__header-name"><?php echo $review['complex_reviews_name']?></div>
									<div class="review-item__header-date"><?php echo date('d', $time_sec);?> <?php echo $arr_month[$month];?> <?php echo date('Y', $time_sec);?></div>
									</div>
									<div class="review-item__header-stars">
										<?php $stars_qty = $review['complex_reviews_stars'];
										for ($i=0; $i < 5; $i++): ?>
											<?php if($stars_qty <= $i):?>
											<div class="star_review star_review-gray"></div>
											<?php else:?>
											<div class="star_review"></div>
											<?php endif;?>
										<?php endfor;?>
									</div>
								</div>
							</div>
							<div class="review-item__text">
								<?php echo $review['complex_reviews_text']?>
							</div>
							<div class="review-item__img-wrap">
								<?php if($review['complex_reviews_img']):?>
									<a href="<?php echo $review['complex_reviews_img']?>" class="review-item__img-item fancybox" data-fancybox-group="reviews-img-<?php echo $inc?>">
										<img class = "lazy" data-src="<?php echo $review['complex_reviews_img']?>" alt="">
									</a>
								<?php endif;?>
								<?php if($review['complex_reviews_img_1']):?>
									<a href="<?php echo $review['complex_reviews_img_1']?>" class="review-item__img-item fancybox" data-fancybox-group="reviews-img-<?php echo $inc?>">
										<img class = "lazy" data-src="<?php echo $review['complex_reviews_img_1']?>" alt="">
									</a>
								<?php endif;?>
								<?php if($review['complex_reviews_img_2']):?>
									<a href="<?php echo $review['complex_reviews_img_2']?>" class="review-item__img-item fancybox" data-fancybox-group="reviews-img-<?php echo $inc?>">
										<img class = "lazy" data-src="<?php echo $review['complex_reviews_img_2']?>" alt="">
									</a>
								<?php endif;?>
								<?php if($review['complex_reviews_img_3']):?>
									<a href="<?php echo $review['complex_reviews_img_3']?>" class="review-item__img-item fancybox" data-fancybox-group="reviews-img-<?php echo $inc?>">
										<img class = "lazy" data-src="<?php echo $review['complex_reviews_img_3']?>" alt="">
									</a>
								<?php endif;?>
								<?php if($review['complex_reviews_img_4']):?>
									<a href="<?php echo $review['complex_reviews_img_4']?>" class="review-item__img-item fancybox" data-fancybox-group="reviews-img-<?php echo $inc?>">
										<img class = "lazy" data-src="<?php echo $review['complex_reviews_img_4']?>" alt="">
									</a>
								<?php endif;?>
							</div>
							<div class="review-usefull">
								<span class="review-usefull__title">Отзыв полезен?</span>
								<?php 
									$usefull_yes = $review['complex_reviews_is_use_yes'] ? $review['complex_reviews_is_use_yes'] : 0;
									$usefull_no = $review['complex_reviews_is_use_no'] ? $review['complex_reviews_is_use_no'] : 0;
									
								?>
								<div class="review-usefull__yes" data-qty="<?php echo $usefull_yes;?>"><?php echo $usefull_yes;?></div>
								<div class="review-usefull__no"><?php echo $usefull_no;?></div>
							</div>
						</div>
					<?php endif;?>
				<?php $inc++; endforeach;
			 ?>
			</div>
		<?php else:?>
			<!-- <div class="no-reviews__wrapper">
				<div class="no-reviews__img"></div>
				<div class="no-reviews__text">Отзывов о товаре пока нет. Будьте первым!</div>
			</div> -->
			<div class="reviews-board">
				<!-- <div class="reviews-board__rating">
					<div class="reviews-board__rating-number"><?php echo $awerage?></div>
					<div class="review-item__header-stars">
						<?php $stars_qty = round($awerage);
						for ($i=0; $i < 5; $i++): ?>
							<?php if($stars_qty <= $i):?>
							<div class="star_review star_review-gray"></div>
							<?php else:?>
							<div class="star_review"></div>
							<?php endif;?>
						<?php endfor;?>
					</div>
					<div class="reviews-board__rating-text">Пока нет отзывов</div>
				</div> -->
				
				<!-- <div class="reviews-board__progress">
					<div class="reviews-board__progress-item">
						<div class="progress-number">5</div>
						<div class="progress-line">
							<div class="progress-full" style="width: <?php $percent = 100 * $five_awerage / $inc; echo $percent;?>%"></div>
						</div>
						<div class="progress-percent"><?php echo round($percent);?>%</div>
					</div>
					<div class="reviews-board__progress-item">
						<div class="progress-number">4</div>
						<div class="progress-line">
							<div class="progress-full" style="width: <?php $percent = 100 * $four_awerage / $inc; echo $percent;?>%"></div>
						</div>
						<div class="progress-percent"><?php echo round($percent);?>%</div>
					</div>
					<div class="reviews-board__progress-item">
						<div class="progress-number">3</div>
						<div class="progress-line">
							<div class="progress-full" style="width: <?php $percent = 100 * $three_awerage / $inc; echo $percent;?>%"></div>
						</div>
						<div class="progress-percent"><?php echo round($percent);?>%</div>
					</div>
					<div class="reviews-board__progress-item">
						<div class="progress-number">2</div>
						<div class="progress-line">
							<div class="progress-full" style="width: <?php $percent = 100 * $two_awerage / $inc; echo $percent;?>%"></div>
						</div>
						<div class="progress-percent"><?php echo round($percent);?>%</div>
					</div>
					<div class="reviews-board__progress-item">
						<div class="progress-number">1</div>
						<div class="progress-line">
							<div class="progress-full" style="width: <?php $percent = 100 * $one_awerage / $inc; echo $percent;?>%"></div>
						</div>
						<div class="progress-percent"><?php echo round($percent);?>%</div>
					</div>
				</div> -->
				 <div class="btn-wrap">
					 <a href="#" class="btn btn-pink review-modal-link">Оставить отзыв</a>
				 </div>
			</div>
		<?php endif;?>

				</div>
				
					
				<?php if(carbon_get_the_post_meta('product_specifications_video')):?>
				<div class="product-specifications__tab-item">
					<?php echo carbon_get_the_post_meta('product_specifications_video');?>
				</div>
				<?php endif;?>
				<?php if(carbon_get_the_post_meta('product_specifications_video')):?>
				<div class="product-specifications__tab-item">
					<?php echo carbon_get_the_post_meta('product_specifications_sert');?>
				</div>
				<?php endif;?>
			</div>
		</div>
	<?php } else { ?>
		<div class = "product_content">
			<?php the_content(); ?>
		</div>
	<?php } ?>
			
   <!-- <p class="page-desc tac">Что вы получаете при покупке картины у нас</p>-->
    <!--
		<div class="clearfix clearfixCener">
        
		<div class="fully-prepared">
             <?php 
				$blk1 = explode("|", get_post_meta(get_the_ID(), "informer1", true));
			?>
			<div class="img">
				<?php if (($blk1[0] === "Китайское производство")||($blk1[0] === "Производство Китай")): ?>
					<img src="<?php bloginfo("template_url")?>/img/mc.png" alt="Сделано в Китае">
				<?php endif; ?>	
				
				<?php if (($blk1[0] === "Российское производство")||($blk1[0] === "Российская ТМ")): ?>
					<img src="<?php bloginfo("template_url")?>/img/mr.png" alt="Сделано в России">
				<?php endif; ?>
				
				<?php if ($blk1[0] === "Производство Тайвань"): ?>
					<img src="<?php bloginfo("template_url")?>/img/tai.png" alt="Производство Тайвань">
				<?php endif; ?>
				
				<?php if ($blk1[0] === "Производство Гонконг"): ?>
					<img src="<?php bloginfo("template_url")?>/img/gon.png" alt="Производство Гонконг">
				<?php endif; ?>
				
				<?php if ($blk1[0] === "Производство Беларусь"): ?>
					<img src="<?php bloginfo("template_url")?>/img/bel.png" alt="Производство Беларусь">
				<?php endif; ?>
				
				<?php if (($blk1[0] === "Японское производство")||($blk1[0] === "Японская ТМ")): ?>
					<img src="<?php bloginfo("template_url")?>/img/jpn.png" alt="Японская ТМ">
				<?php endif; ?>
				
			</div>
          
			<h5><?php echo empty($blk1[0])?"Российское производство":$blk1[0]; ?></h5>
            <p><?php echo empty($blk1[1])?"Товар произведен в России с соблюдением всех норм":$blk1[1]; ?></p>
        </div>
        
		<div class="fully-prepared">
            <div class="img"><img src="<?php bloginfo("template_url")?>/img/03.png" alt="рекомендовано детям от 0 до 3 лет"></div>
            <?php 
				$blk2 = explode("|", get_post_meta(get_the_ID(), "informer2", true));
			?>
			<h5><?php echo empty($blk2[0])?"Рекомендуемый возраст от 0,5 до 6 лет":$blk2[0]; ?></h5>
            <p><?php echo empty($blk2[1])?"Этот товар рекомендуется детям данной возрастной категории":$blk2[1]; ?></p>
        </div>
        
		<div class="fully-prepared">
            <div class="img"><img src="<?php bloginfo("template_url")?>/img/razv.png" alt="Способствует развитию ребенка"></div>
            <?php 
				$blk3 = explode("|", get_post_meta(get_the_ID(), "informer3", true));
			?>
			<h5><?php echo empty($blk2[0])?"Развитие":$blk3[0]; ?></h5>
            <p><?php echo empty($blk2[1])?"Данный товар направлен на развитие вашего ребенка":$blk3[1]; ?></p>
        </div>

    </div>
	-->

	<a href = "https://xn--80ablmoh8a2h.xn--p1ai/category/kubiki-po-skidke/?nsale=500">
		<div class="additional-disc__wrapper" style="background-image: url(<?php bloginfo("template_url"); ?>/img/page-action-one.jpg);"></div>
	</a>

    <div class="bg-pink" style="margin-bottom: 30px">
        <div class="dotted-border">
            <div class="clearfix">
                <div class="icon icon-shield"></div>
                <div class="content" style="width: 750px;">
                    <h2>Оплата без риска</h2>
                    <p>Вы можете открыть посылку и осмотреть товар и только потом принимать решение о покупке.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="sizeblocks clearfix">
        <div class="linex" style="padding-bottom: 15px; margin-bottom: 15px; border-bottom: 1px dashed #ddd;">
            <div class="item-page-tovar-left fl">
                <?php if ((!empty($pricr_old))&&((int)$pricr_old > (int)$pricr_cur)):?>
					<div class="price-shares" style="margin-top: 22px">
						<p style="color: #888 !important; margin: 0;">Цена без акции:</p>
						<p class="price" style="font-size: 34px;color: #888!important; margin-bottom: 10px; margin-top: 0;"> <span class = "zPrice"><?php echo $pricr_old;?></span>  <span style="font-size: 26px;"> руб.</span></p>
					</div>
				<?php endif;?>
                
				<div class="not price-shares" style="margin-top: 15px">
                    <?php if ((!empty($pricr_old))&&((int)$pricr_old > (int)$pricr_cur)):?>
						<p style="color:#111 !important; margin: 0;">Цена по акции:</p>
					<?php else: ?>
						<p style="color:#111 !important; margin: 0;">Цена:</p>
					<?php endif; ?>
                    <p class="price price-old" style="font: bold 50px 'Roboto Slab', Arial, Helvetica, sans-serif; margin: 0;"> <?php echo $pricr_cur;?> <span style="font-size: 40px;"> руб.</span></p>
                </div>
            </div>
			

			
			<div class="rightbtn fr">
                

					<a onclick="yaCounter48236084.reachGoal('knopka');" class="btn btn-pink  tobascetInCat fancybox-order <?php echo $pre_order_link;?>" style = "display:inline-block;" href="#order-form" 
					data-sale="-<?php echo 100 - round(((float)$pricr_cur / (float)$pricr_old) * 100);?><span>%</span>" 
					data-price="<?php echo $pricr_cur;?>" 
					data-price-old = "<?php echo $pricr_old;?>" 
					data-size-price-s="<?php echo $pricr_cur;?>" 
					data-size-price-old-s="<?php echo $pricr_old;?>" 
					data-image="<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg" 
					data-title="<?php the_title(); ?>" 
					data-product = "<?php echo get_post_meta(get_the_ID(), "SKU", true)?>" 
					data-postid = "<?php echo get_the_ID();?>"
					>
						<?php
							if (empty(carbon_get_post_meta(get_the_ID(), "sclad_count")) && (empty(carbon_get_post_meta(get_the_ID(), "tovar_sklad_drop"))))
								echo "Предзаказ";
							else 
								echo "Заказать";
						?>
					
					</a>            
					

				
				
					
					<div class="order-button-wrapper">
						<span class = "btn tobascetInCat  btn-pink tobascet grnbtn " style = "display:inline-block;" onclick="toBascetFnk(this); yaCounter48236084.reachGoal('korzinastrtovar-niz-new');"
							data-postid = "<?php echo get_the_ID();?>" 
						 data-nsale = "<?php echo $main_sales;?>" ><i class="fas fa-shopping-basket"></i> В корзину</span>
					</div>
				
			</div>
				
				
            <div style="clear: both;"></div>
        </div>
        
    </div>

    <div class="bg-green childrens">
        <div class="dotted-border">
            <div class="clearfix">
                <div class="img">
                    <img src="<?php  echo get_template_directory_uri(); ?>/img/item-page-block-border-green-img.jpg" alt="Картинка">
                </div>
                <div class="content">
                    <h2>Наша продукция сертифицирована и подготовлена к использованию в  детских учреждениях и комнатах</h2>
                </div>
            </div>
        </div>
    </div>
    <div id="discount-products" data-category="8" data-product="551"></div>

</div>

	<div class = "page-rew">
		<?php include ("ymarket.php")?>
		<?php include ("bl-pismo.php")?>
		<?php include ("vk-rew.php")?>
	</div>

		<h1 class="int tac" style="margin-bottom: 25px">Похожие товары</h1>
		<div class="clearfix">
			<?php
							
							$category = get_the_category();						
							$args = array(
										'numberposts' => 10,
										'category'    => $category[count($category)-1]->cat_ID,
										'orderby' => 'rand'
										);
							
							$rev = get_posts($args);
							
							foreach ($rev as $post) { setup_postdata($post);
								get_template_part( 'tovar', 'elem' );
							}
			?>
			

			
        </div>


			</section>
        </div>
    </div>
</main>
	
<?php get_footer(); ?>