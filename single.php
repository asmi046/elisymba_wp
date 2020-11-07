<?php 

//ini_set("display_errors",1);
//error_reporting(E_ALL);

get_header(); ?>

<main>
	<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <div class="wrapper">
        <?php include ("baner-timer.php"); ?>
            
		<div class="clearfix d-flex-main">
                     

	<section id = "tovar" class="page-content page-content-full">
	
	<?php if( $detect->isMobile() ) include("search-form.php");?>
	
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
				
			});
		</script>
        <div class="product-main-info clearfix">
            <div class="fl">
                <div class="product-image">
					 <div class="jcarousel-wrapper">
						<?php 
						 		
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
								
									<img class = "flight-first" id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg">
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
									<img class = "flight-first" id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg">
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
            
		
				<div class="order-form__coupon order-form__coupon-1 center-mobile">
					<div class="order-form__coupon-photo"></div>
					<div class="order-form__coupon-text">Золотой<br> розыгрыш</div>
					<div class="order-form__coupon-question">?</div>
					<div class="order-form__coupon-note">Оформите заказ сегодня и получите 1 купон на участие в золотом розыгрыше</div>
				</div>
				
				<img style = "visibility: hidden; height:0;" id = "flightImg"  width="100" height="100" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg">

			
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
                
				
				<!--КОРЗИНА-->
				
				<div class="order-button-wrapper">			
					<span class = "btn grnbtn inSingleBtn btn-pink tobascetInCat tobascet" style = "display:inline-block;" onclick="toBascetFnk(this); yaCounter48236084.reachGoal('korzinastrtovar-verh-new');" data-postid = "<?php echo get_the_ID();?>"  data-nsale = "<?php echo $main_sales;?>"><i class="fas fa-shopping-basket "></i> В корзину</span>
				</div>

                <div style="font-size: 16px; text-transform: none; color: #919191; margin-top: 10px; margin-left: 20px;    font-family: 'Trebuchet MS',Helvetica,sans-serif">
                    Данный товар купили <b><?php echo get_post_meta(get_the_ID(), "order_count", true);?></b> раз(а).
                </div>
            </div>
        </div>
		

		<!-- Блок доставки -->
		
		<div class = "new_delivery_blk">
			<div id = "deliveryDeyElem" class = "new_delivery_elem">
				Доставим за: <br/><span class = "value"></span>
			</div>
					
			<div id = "deliveryPriceElem" class = "new_delivery_elem">
				Цена: <br/><span class = "value"></span>
			</div>
					
			<span class = "viev_map">Показать пункты выдачи</span>	
				
			<div id = "map_pvt"></div>

			<span style = "display:none;" class = "not__city_finde">
				Мы не смогли автоматически рассчитать сроки и стоимость доставки до Вас. Пожалуйста оставьте заявку, и наш менеджер сделает это в ручном режиме. <br/> С Любовью, ЕлиСямба!
			</span>
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
			<?php 
				$arr_reviews = carbon_get_the_post_meta('complex_reviews');

				for ($i = 0; $i<count($arr_reviews); $i++) {
					for ($j = 0; $j<count($arr_reviews)-1; $j++) {
						$time = strtotime($arr_reviews[$j]['complex_reviews_date']);
						$time_sec = date('U', $time);
	
						$time2 = strtotime($arr_reviews[$j+1]['complex_reviews_date']);
						$time_sec2 = date('U', $time2);
						
						if ($time_sec < $time_sec2)
						{
							$tmp = $arr_reviews[$j];
							$arr_reviews[$j] = $arr_reviews[$j+1]; 
							$arr_reviews[$j+1] = $tmp; 
						}
					}	
				}

				$inc = 0;
				foreach($arr_reviews as $review):
					if ($inc > 5) break;
				?>
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
						<div class="review-item" style="" data-inc="<?php echo $inc?>" data-postid='<?php echo get_the_ID();?>'>
							
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
										<img loading="lazy" src="<?php echo $review['complex_reviews_img']?>" alt="">
									</a>
								<?php endif;?>
								<?php if($review['complex_reviews_img_1']):?>
									<a href="<?php echo $review['complex_reviews_img_1']?>" class="review-item__img-item fancybox" data-fancybox-group="reviews-img-<?php echo $inc?>">
										<img loading="lazy" src="<?php echo $review['complex_reviews_img_1']?>" alt="">
									</a>
								<?php endif;?>
								<?php if($review['complex_reviews_img_2']):?>
									<a href="<?php echo $review['complex_reviews_img_2']?>" class="review-item__img-item fancybox" data-fancybox-group="reviews-img-<?php echo $inc?>">
										<img loading="lazy" src="<?php echo $review['complex_reviews_img_2']?>" alt="">
									</a>
								<?php endif;?>
								<?php if($review['complex_reviews_img_3']):?>
									<a href="<?php echo $review['complex_reviews_img_3']?>" class="review-item__img-item fancybox" data-fancybox-group="reviews-img-<?php echo $inc?>">
										<img loading="lazy" src="<?php echo $review['complex_reviews_img_3']?>" alt="">
									</a>
								<?php endif;?>
								<?php if($review['complex_reviews_img_4']):?>
									<a href="<?php echo $review['complex_reviews_img_4']?>" class="review-item__img-item fancybox" data-fancybox-group="reviews-img-<?php echo $inc?>">
										<img loading="lazy" src="<?php echo $review['complex_reviews_img_4']?>" alt="">
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

			<div class="btn-wrap">
					<a href="#" data-vuecount = "5" data-countshop = "0" data-postid = "<?echo  get_the_ID();?>"  class="btn btn-pink review-more">Еще отзывы</a>
			</div>		
		<?php else:?>
			<div class="reviews-board">
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
							$metaqueryInPage = array(
								'relation' => 'AND',
								'orderCatM' => array (
									'key'     => '_tovar_order',
									'compare' => 'EXIST',
									'type'    => 'NUMERIC',
								),
								
								'priceM' => array (
									'key'     => 'price',
									'value' => '0',
									'compare' => '>',
									'type'    => 'NUMERIC',
								),
							
								'predzak' => array (
									'key'     => '_sclad_count',
									'value' => '0',
									'compare' => '>',
									'type'    => 'NUMERIC',
								),
							);
							
							$args = array(
										'numberposts' => 9,
										'category'    => $category[count($category)-1]->cat_ID,
										'orderby' => 'rand',
										'meta_query' => $metaqueryInPage
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