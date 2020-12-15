<?php 

//ini_set("display_errors",1);
//error_reporting(E_ALL);

get_header(); ?>

<?php
		$main_sales = $_REQUEST["nsale"];
		
		$pricr_cur = get_post_meta(get_the_ID(), "_price", true);
		$pricr_old = get_post_meta(get_the_ID(), "_old_price", true);
		
		if (!empty($main_sales)) {
			$pricr_old = $pricr_cur;
			$pricr_cur = $pricr_cur - $main_sales; 
		}			
		
	?>

<main>
	<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <div class="wrapper">
        <?php include ("baner-timer.php"); ?>
            
		<div class="clearfix d-flex-main">
                     

	<section id = "tovar" class="page-content page-content-full">
	
	<?php if( $detect->isMobile() ) include("search-form.php");?>
	
	<!-- <div class="breadcrumbs" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
		<?php
		// if ( function_exists('yoast_breadcrumb') ) {
		// 	//	yoast_breadcrumb('','');
		// }
		?>							
	</div> -->

	<div class = "backButtonWraper">
		<a onclick="javascript:history.back(); return false;" href = "#" class = "buttonBack"> <span class = "arrowBack"></span> Назад </a>
		<a onclick="javascript:history.back(); return false;" href = "#"  class = "mobileBackLine">
			<div class = "arrowMob"></div>
			<div class = "wrp">
				<p class = "bTovarName"><?php the_title(); ?></p>	
				<p class = "bTovarPrice"><?php echo $pricr_cur;?> руб.</p>
			</div>	
		</a>	
	</div>

	
    <div  itemscope itemtype="http://schema.org/Product" class="product-page">
    <h1 itemprop="name" class="page-title mobRotated mobHide"><?php the_title(); ?> <span style = "    font-size: 0.5em;"><?php //echo "(".get_post_meta(get_the_ID(), "size", true).")";?></span></h1>

    

	
	
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
            <div class="fl mobFlex">
                <div class="product-image">
					 <div class="jcarousel-wrapper">
						<?php 
						 		
								if( !$detect->isMobile() ){
						 ?>
						<div id = "tkrDesctop" class="owl-carousel owl-theme">
							<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.1.jpg" class = "fancybox" data-fancybox-group = "gr1">
								<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "_sku", true).".1.webp";
									if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".1.webp")) { ?>
											<source srcset="<? echo $adr ?>" type="image/webp"> 
									<?}?>
								
									<img class = "flight-first" id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.1.jpg">
								</picture>
							</a>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".2.jpg")):?>
								<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.2.jpg" class = "fancybox" data-fancybox-group = "gr1">
									<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "_sku", true).".2.webp";	
									if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".2.webp")) { ?>
											<source srcset="<? echo $adr ?>" type="image/webp"> 
									<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.2.jpg">
									</picture>
								</a>				
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".3.jpg")):?>
								<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.3.jpg" class = "fancybox" data-fancybox-group = "gr1">
									<picture>
										<? 
										$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "_sku", true).".3.webp";
										
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".3.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
										<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.3.jpg">
									</picture>
								</a>			
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".4.jpg")):?>
								<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.4.jpg" class = "fancybox" data-fancybox-group = "gr1">
									<picture>
										<? 
										$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "_sku", true).".4.webp";
										
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".4.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
										<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.4.jpg">
									</picture>
								</a>				
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".5.jpg")):?>
								<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.5.jpg" class = "fancybox" data-fancybox-group = "gr1">
									<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "_sku", true).".5.webp";
										
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".5.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.5.jpg">
									</picture>
								</a>			
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".6.jpg")):?>
								<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.6.jpg" class = "fancybox" data-fancybox-group = "gr1">
									<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "_sku", true).".6.webp";
									
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".6.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.6.jpg">
									</picture>
								</a>				
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".7.jpg")):?>
								<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.7.jpg" class = "fancybox" data-fancybox-group = "gr1">
									<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "_sku", true).".7.webp";
										
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".7.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.7.jpg">
									</picture>
								</a>				
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".8.jpg")):?>
								<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.8.jpg" class = "fancybox" data-fancybox-group = "gr1">
									<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "_sku", true).".8.webp";
										
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".8.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.8.jpg">
									</picture>
								</a>					
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".9.jpg")):?>
								<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.9.jpg" class = "fancybox" data-fancybox-group = "gr1">
									<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "_sku", true).".9.webp";
										
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".9.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.9.jpg">
									</picture>
								</a>				
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".10.jpg")):?>
								<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.10.jpg" class = "fancybox" data-fancybox-group = "gr1">
									<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "_sku", true).".10.webp";
									
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".10.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.10.jpg">
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
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "_sku", true).".1.webp";
										
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".1.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img class = "flight-first" id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.1.jpg">
								</picture>
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".2.jpg")):?>
									<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "_sku", true).".2.webp";
										
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".2.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.2.jpg">
									</picture>
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".3.jpg")):?>
									<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "_sku", true).".3.webp";
							
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".3.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.3.jpg">
									</picture>
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".4.jpg")):?>
									<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "_sku", true).".4.webp";
										
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".4.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.4.jpg">
									</picture>
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".5.jpg")):?>
									<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "_sku", true).".5.webp";
										
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".5.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.5.jpg">
									</picture>
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".6.jpg")):?>
									<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "_sku", true).".6.webp";
										
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".6.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.6.jpg">
									</picture>
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".7.jpg")):?>
									<picture>
									<? 
									$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "_sku", true).".7.webp";
									
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".7.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.7.jpg">
									</picture>
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".8.jpg")):?>
									<picture>
									<? 
										$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "_sku", true).".8.webp";
											
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".8.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.8.jpg">
									</picture>
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".9.jpg")):?>
									<picture>
									<? 
										$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "_sku", true).".9.webp";
											
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".9.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.9.jpg">
									</picture>
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".10.jpg")):?>
									<picture>
									<? 	$adr = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "_sku", true).".10.webp";
										
										if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".10.webp")) { ?>
												<source srcset="<? echo $adr ?>" type="image/webp"> 
										<?}?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" class = "lazy" data-src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.10.jpg">
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
						<? 
						$color_set = carbon_get_post_meta(get_the_ID(), "offer_color_set");
						if (!empty($color_set)) {?>
							<div class = "clr_blk">
								<span class = "zag_clr">Цвета:</span>
								<? foreach ($color_set as $celem) {?>
									<a href = "<? echo $celem["clr_lnk"]; ?>" title = "<? echo $celem["clr_name"]; ?>" >
										<div class = "clr_box <?echo (!empty($celem["clr_active"]))?"active":"";?>">
											<div class = "clr_c" style = "background-color: <? echo $celem["clr_c1"]; ?>"></div>
											<div class = "clr_c <?echo (!empty($celem["clr_raduga"]))?"radugaClr":"";?>" style = "background-color: <? echo $celem["clr_c2"]; ?>"></div>
										</div>
									</a>
								<?}?>	
							</div>
						<?}?>
							
						
						
						<ul class="hide-480">
							<li>Гарантия качества (ГОСТ 25779-90)</li>
							<!-- <li>Натуральные материалы</li>
							<li>Доставка до двери</li>
							<li>Оплата при получении</li> 
							-->
						</ul>
						
					
						
					</div>
                    

					
					<div class="price" style = "position:relative;" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <?php if ((!empty($pricr_old))&&((int)$pricr_old > (int)$pricr_cur)):?>
							<!-- <div class="price-current-title">Цена без акции:</div> -->
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
							<!-- <div class="price-old-title">Цена:</div> -->
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
				
				<img style = "visibility: hidden; height:0;" id = "flightImg"  width="100" height="100" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.1.jpg">

			
				<div class="order-button-wrapper">
                   
					
							 <a onclick="yaCounter48236084.reachGoal('knopka');" class="btn btn-pink inSingleBtn tobascetInCat fancybox-order <?php echo $pre_order_link;?>" style = "display:inline-bloc;" href="#order-form" 
							data-sale="-<?php echo 100 - round(((float)$pricr_cur / (float)$pricr_old) * 100);?><span>%</span>" 
							data-price="<?php echo $pricr_cur;?>" 
							data-price-old = "<?php echo $pricr_old;?>" 
							data-size-price-s="<?php echo $pricr_cur;?>" 
							data-size-price-old-s="<?php echo $pricr_old;?>" 
							data-image="<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.1.jpg" 
							data-title="<?php the_title(); ?>" 
							data-product = "<?php echo get_post_meta(get_the_ID(), "_sku", true)?>" 
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

                <div class = "pricingCount" style="font-size: 16px; text-transform: none; color: #919191; margin-top: 10px;     font-family: sans-serif">
                    Данный товар купили <b><?php echo get_post_meta(get_the_ID(), "order_count", true);?></b> раз(а).
                </div>

				<? if ($pricr_cur > 3000) {?>
							<div class = "pok_sber">
								<img src = "<?bloginfo("template_url");?>/img/v-kredit.jpg"/>	
								<div class="order-form__coupon-question">?</div>
								<div class="order-form__coupon-note">Клиенты сбербанка могут приобрести данный товар в кредит. <a href = "<? echo get_the_permalink(16675);?>">Подробнее.</a></div>	
							</div>
						<?}?>

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
				
			<div class = "map_pvt_all">
				<img class = "delivery_logo delivery_logo_dpd" src = "<? bloginfo("template_url"); ?>/img/DPD.svg" alt = "Пункты выдачи DPD" title = "Пункты выдачи DPD" />
				<img class = "delivery_logo delivery_logo_sdek" src = "<? bloginfo("template_url"); ?>/img/sdek.jpg" alt = "Пункты выдачи СДЕК" title = "Пункты выдачи СДЕК" />
				
				<div id = "map_pvt_dpd"></div>	
				<div id = "map_pvt"></div>
				
			</div>
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
			
  			
	<h2 id="reviews-title" class = "pink tac">Реальные отзывы из VK</h2>
			
			<div class="review-item__wrapper">
				<?
					$posts = get_posts(array(
						'numberposts' => 10,
						'category' => 23
					));
				
					
		
					foreach( $posts as $otz_post ){	
					?>
						<div class="review-item" style="" data-inc="<?php echo $inc?>" data-postid='<?php echo $otz_post->ID;?>'>
							
							<div class="review-item__header">
								<div class="review-item__header-ava" style="background-image: url(<?php echo carbon_get_post_meta($otz_post->ID,'review_photo');?>);"></div>
								<div class="review-item__header-content">
									<div class="review-item__header-content-name-date">
										<div class="review-item__header-name"><a class = "bp_author" target="_blank" href = "<?php echo(carbon_get_post_meta($otz_post->ID, 'review_link'))?>"><?php echo $otz_post->post_title?></a></div>
										<div class="review-item__header-date"><?php echo carbon_get_post_meta($otz_post->ID,'review_date_time') ?></div>
									</div>
									
								</div>
							</div>

							<div class="review-item__text">
								<?php echo apply_filters('the_content',$otz_post->post_content);?>
							</div>

							<div class="review-item__img-wrap">
								<?
								$array_photo = carbon_get_post_meta($otz_post->ID, 'review_photos');	
								foreach ($array_photo as $photo_item) {
								?>
									<a href="<?echo $photo_item['review_photos_item']?>" class="review-item__img-item fancybox" data-fancybox-group="reviews-img-<?php echo $otz_post->ID;?>">
										<img loading="lazy" src="<?echo $photo_item['review_photos_item']?>" alt="">
									</a>
								<?}?>
							</div>
						</div>
						<?
						
					}

					
				?>

				
			</div>
			<div class="btn-wrap">
				<a href="#" data-vuecount = "10000000" data-countshop = "10" data-postid = "<?echo  get_the_ID();?>"  class="load-more-btn review-more">Показать еще 10...</a>
			</div>

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
						<p style="color: #888 !important; margin: 0;  text-indent: 0;">Цена без акции:</p>
						<p class="price" style="font-size: 34px;color: #888!important; margin-bottom: 10px; margin-top: 0; text-indent: 0;"> <span class = "zPrice"><?php echo $pricr_old;?></span>  <span style="font-size: 26px;"> руб.</span></p>
					</div>
				<?php endif;?>
                
				<div class="not price-shares" style="margin-top: 15px">
                    <?php if ((!empty($pricr_old))&&((int)$pricr_old > (int)$pricr_cur)):?>
						<p style="color:#111 !important; margin: 0;  text-indent: 0;">Цена по акции:</p>
					<?php else: ?>
						<p style="color:#111 !important; margin: 0;  text-indent: 0;">Цена:</p>
					<?php endif; ?>
                    <p class="price price-old" style="font: bold 50px 'Roboto Slab', Arial, Helvetica, sans-serif; margin: 0;  text-indent: 0;"> <?php echo $pricr_cur;?> <span style="font-size: 40px;"> руб.</span></p>
                </div>
            </div>
			

			
			<div class="rightbtn fr">
                
							
		
                   
					
				   <a onclick="yaCounter48236084.reachGoal('knopka');" class="btn btn-pink inSingleBtn tobascetInCat fancybox-order <?php echo $pre_order_link;?>" style = "display:inline-bloc;" href="#order-form" 
				  data-sale="-<?php echo 100 - round(((float)$pricr_cur / (float)$pricr_old) * 100);?><span>%</span>" 
				  data-price="<?php echo $pricr_cur;?>" 
				  data-price-old = "<?php echo $pricr_old;?>" 
				  data-size-price-s="<?php echo $pricr_cur;?>" 
				  data-size-price-old-s="<?php echo $pricr_old;?>" 
				  data-image="<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.1.jpg" 
				  data-title="<?php the_title(); ?>" 
				  data-product = "<?php echo get_post_meta(get_the_ID(), "_sku", true)?>" 
				  data-postid = "<?php echo get_the_ID();?>"
				  >
					  Заказать
				  </a>
				  

	 
	  
	  
	  <!--КОРЗИНА-->
	  
	  <div class="order-button-wrapper">			
		  <span class = "btn grnbtn inSingleBtn btn-pink tobascetInCat tobascet" style = "display:inline-block;" onclick="toBascetFnk(this); yaCounter48236084.reachGoal('korzinastrtovar-verh-new');" data-postid = "<?php echo get_the_ID();?>"  data-nsale = "<?php echo $main_sales;?>"><i class="fas fa-shopping-basket "></i> В корзину</span>
	  </div>

					<!-- <a onclick="yaCounter48236084.reachGoal('knopka');" class="btn btn-pink  tobascetInCat fancybox-order <?php echo $pre_order_link;?>" style = "display:inline-block;" href="#order-form" 
					data-sale="-<?php echo 100 - round(((float)$pricr_cur / (float)$pricr_old) * 100);?><span>%</span>" 
					data-price="<?php echo $pricr_cur;?>" 
					data-price-old = "<?php echo $pricr_old;?>" 
					data-size-price-s="<?php echo $pricr_cur;?>" 
					data-size-price-old-s="<?php echo $pricr_old;?>" 
					data-image="<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.1.jpg" 
					data-title="<?php the_title(); ?>" 
					data-product = "<?php echo get_post_meta(get_the_ID(), "_sku", true)?>" 
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
				 -->
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