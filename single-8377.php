<?php 
/*
Template Name: Шаблон с доставкой
Template Post Type: post
*/

//ini_set("display_errors",1);
//error_reporting(E_ALL);

get_header(); ?>

<main>
    <div class="wrapper">
        <?php include ("baner-timer.php"); ?>
        <?php include ("show-960.php"); ?>
            
		<div class="clearfix d-flex-main">
            
			<?php get_sidebar("left"); ?>                

	<section id = "tovar" class="page-content">
	<!-- Отключение последней хлебной крошки -->
	<style>
		/*
		.breadcrumb_last {
			display:none;
		}
	
		@media screen and (max-width: 515px){
			.breadcrumbs span span span:last-child a:after {
				content:"";
			}
		}
		*/
	</style>
	
			<?php 
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
    
	<?php
		$main_sales = $_REQUEST["nsale"];
		
		$pricr_cur = get_post_meta(get_the_ID(), "price", true);
		$pricr_old = get_post_meta(get_the_ID(), "old_price", true);
		
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
				
				if (jQuery(window).width() >= '620') {
					 //$('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 500);
					 //jQuery('html, body').scrollTop(jQuery(".baner-new").offset().top-10);
				}
				
				if (jQuery(window).width() <= '620') {
					jQuery('.mobH1Container').append( jQuery('.mobRotated') );

				}
				
				
				
			});
		</script>
        <div class="product-main-info clearfix">
            <div class="fl">
                <div class="product-image">
					 <div class="jcarousel-wrapper">
						
						<div id = "tkrDesctop" class="owl-carousel owl-theme">
							<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg" class = "fancybox" data-fancybox-group = "gr1">
								<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg">
							</a>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".2.jpg")):?>
								<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.2.jpg" class = "fancybox" data-fancybox-group = "gr1">
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.2.jpg">
								</a>				
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".3.jpg")):?>
								<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.3.jpg" class = "fancybox" data-fancybox-group = "gr1">
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.3.jpg">
								</a>			
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".4.jpg")):?>
								<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.4.jpg" class = "fancybox" data-fancybox-group = "gr1">
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.4.jpg">
								</a>				
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".5.jpg")):?>
								<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.5.jpg" class = "fancybox" data-fancybox-group = "gr1">
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.5.jpg">
								</a>			
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".6.jpg")):?>
								<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.6.jpg" class = "fancybox" data-fancybox-group = "gr1">
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.6.jpg">
								</a>				
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".7.jpg")):?>
								<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.7.jpg" class = "fancybox" data-fancybox-group = "gr1">
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.7.jpg">
								</a>				
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".8.jpg")):?>
								<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.8.jpg" class = "fancybox" data-fancybox-group = "gr1">
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.8.jpg">
								</a>					
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".9.jpg")):?>
								<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.9.jpg" class = "fancybox" data-fancybox-group = "gr1">
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.9.jpg">
								</a>				
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".10.jpg")):?>
								<a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.10.jpg" class = "fancybox" data-fancybox-group = "gr1">
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.10.jpg">
								</a>				
							<?php endif;?>
							
						</div>
						
						<div id = "tkrMob" class="owl-carousel owl-theme">
								<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg">
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".2.jpg")):?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.2.jpg">
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".3.jpg")):?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.3.jpg">
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".4.jpg")):?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.4.jpg">
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".5.jpg")):?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.5.jpg">
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".6.jpg")):?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.6.jpg">
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".7.jpg")):?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.7.jpg">
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".8.jpg")):?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.8.jpg">
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".9.jpg")):?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.9.jpg">
							<?php endif;?>
							
							<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".10.jpg")):?>
									<img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.10.jpg">
							<?php endif;?>
							
						</div>

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
            </div>
            <div class="product-desc">
                <div class="clearfix">
					<div itemprop="description">
						<ul class="hide-480">
							<li>Гарантия качества (ГОСТ 25779-90)</li>
							<li>Натуральные материалы</li>
							<li>Доставка до двери</li>
							<li>Оплата при получении</li>
						</ul>
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
								$pre_order_link = 'pre-order-link';
							}else 
								echo "Есть в наличии";
						?>
					</span>
                </div>
                
            <div class = "podWidget">
				<h2>К этому товару мы дарим:</h2>	
				<?php
					$pricr_cur = get_post_meta(get_the_ID(), "price", true); 
					
					
				?>
				<div class = "posWline">
					<div class = "imWriper">
						<img src = "<?php bloginfo("template_url")?>/img/1podarka.png">
					</div>
					<div class = "txtWriper">
						Познавательные фигуры
					</div>
				</div>
				
				<?php
					if ($pricr_cur > 7500):
				?>
					<div class = "posWline">
						<div class = "imWriper">
							<img src = "<?php bloginfo("template_url")?>/img/2podarka-2.png">
						</div>
						<div class = "txtWriper">
							Мягкие пазлы теремок
						</div>
					</div>
				<?php endif; ?>
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
				
					<span class = "btn grnbtn inSingleBtn btn-pink tobascetInCat tobascet" style = "display:inline-block;" onclick="yaCounter48236084.reachGoal('korzinastrtovar-verh-new');"
						data-postid = "<?php echo get_the_ID();?>"  data-nsale = "<?php echo $main_sales;?>"><i class="fas fa-shopping-basket "></i> В корзину</span>
				
				</div>
				<?php// endif; ?>
                <div style="font-size: 16px; text-transform: none; color: #919191; margin-top: 10px; margin-left: 20px;    font-family: 'Trebuchet MS',Helvetica,sans-serif">
                    Данный товар купили <b><?php echo get_post_meta(get_the_ID(), "order_count", true);?></b> раз(а).
                </div>
            </div>
        </div>
		
		    <div class="additional-disc">
        	<h3 class="additional-disc__title">Акция - Супер! При покупке данного товара</h3>
        	
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
			<div class="additional-disc__wrapper">
				
					<? include("upsaleblk/vdorogu.php");  ?>
				
					<? include("upsaleblk/kpazl.php");  ?>
				
			</div>
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
		Бизиборд — занятная развивающая доска. Последнее время большое распространение получил бизидом и бизикуб. Предназначена для развития мелкой моторики, мышления и внимания. На самом бизиборде обычно располагаются различные крючки, замочки, молнии, кнопки, щеколды и тд. — «запрещенные» и очень интересные для малыша вещи. Играя с ними, Ваш ребенок быстрее познает мир. Существуют доказательства того, что дети играющие с бизибордом от 30 минут в неделю в 84,35% случаев опережают по развитию других детей, у которых не было бизиборда.

Приобретая развивающую игрушку бизиборд, бизикуб или бизидом, Вы оказываете огромную услугу своему ребенку и себе.
	</div>
	<div class="tab_item tab_item-char">
		Бизиборд — занятная развивающая доска. Последнее время большое распространение получил бизидом и бизикуб. Предназначена для развития мелкой моторики, мышления и внимания. На самом бизиборде обычно располагаются различные крючки, замочки, молнии, кнопки, щеколды и тд. — «запрещенные» и очень интересные для малыша вещи. Играя с ними, Ваш ребенок быстрее познает мир. Существуют доказательства того, что дети играющие с бизибордом от 30 минут в неделю в 84,35% случаев опережают по развитию других детей, у которых не было бизиборда.

Приобретая развивающую игрушку бизиборд, бизикуб или бизидом, Вы оказываете огромную услугу своему ребенку и себе.
	</div>
	<div class="tab_item tab_item-review">
		Бизиборд — занятная развивающая доска. Последнее время большое распространение получил бизидом и бизикуб. Предназначена для развития мелкой моторики, мышления и внимания. На самом бизиборде обычно располагаются различные крючки, замочки, молнии, кнопки, щеколды и тд. — «запрещенные» и очень интересные для малыша вещи. Играя с ними, Ваш ребенок быстрее познает мир. Существуют доказательства того, что дети играющие с бизибордом от 30 минут в неделю в 84,35% случаев опережают по развитию других детей, у которых не было бизиборда.

Приобретая развивающую игрушку бизиборд, бизикуб или бизидом, Вы оказываете огромную услугу своему ребенку и себе.
	</div>
	<div class="tab_item tab_item-video">
		Бизиборд — занятная развивающая доска. Последнее время большое распространение получил бизидом и бизикуб. Предназначена для развития мелкой моторики, мышления и внимания. На самом бизиборде обычно располагаются различные крючки, замочки, молнии, кнопки, щеколды и тд. — «запрещенные» и очень интересные для малыша вещи. Играя с ними, Ваш ребенок быстрее познает мир. Существуют доказательства того, что дети играющие с бизибордом от 30 минут в неделю в 84,35% случаев опережают по развитию других детей, у которых не было бизиборда.

Приобретая развивающую игрушку бизиборд, бизикуб или бизидом, Вы оказываете огромную услугу своему ребенку и себе.
	</div>
</div>
</div>

<div class="h1 pink tac">Описание и характеристики</div>
	<div class = "product_content">
		<?php the_content(); ?>
	</div>
	
	    
   <!-- <p class="page-desc tac">Что вы получаете при покупке картины у нас</p>-->
    <div class="clearfix">
        
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
						<span class = "btn tobascetInCat  btn-pink tobascet grnbtn " style = "display:inline-block;" onclick="yaCounter48236084.reachGoal('korzinastrtovar-niz-new');"
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