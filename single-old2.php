<?php 
//echo "Test1: ".$_COOKIE["Test1"];
//echo "Test2: ".$_COOKIE["Test2"];

get_header(); ?>

<main>
    <div class="wrapper">
        <?php include ("baner-timer.php"); ?>
        <?php include ("show-960.php"); ?>
            
		<div class="clearfix">
            
			<?php get_sidebar("left"); ?>                

	<section id = "tovar" class="page-content">
				<div class="breadcrumbs" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                          

					<?php
					if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb('','');
					}
					?>							
				</div>
    <div  itemscope itemtype="http://schema.org/Product" class="product-page">
    <h1 itemprop="name" class="page-title"><?php the_title(); ?> <span style = "    font-size: 0.5em;"><?php //echo "(".get_post_meta(get_the_ID(), "size", true).")";?></span></h1>
    
	<?php
		$pricr_cur = get_post_meta(get_the_ID(), "price", true);
		$pricr_old = get_post_meta(get_the_ID(), "old_price", true);
	?>
	
	<div class="product-content">
		<script>
			jQuery(document).ready(function () {
				var connector = function(itemNavigation, carouselStage) {
					return carouselStage.jcarousel('items').eq(itemNavigation.index());
				};
				
				var carouselStage      = jQuery('.carousel-stage').jcarousel();
				var carouselNavigation = jQuery('.carousel-navigation').jcarousel();
				
				carouselNavigation.jcarousel('items').each(function() {
					var item = jQuery(this);

					var target = connector(item, carouselStage);

					item
						.on('jcarouselcontrol:active', function() {
							carouselNavigation.jcarousel('scrollIntoView', this);
							item.addClass('active');
						})
						.on('jcarouselcontrol:inactive', function() {
							item.removeClass('active');
						})
						.jcarouselControl({
							target: target,
							carousel: carouselStage
						});
				});
				
				 // Setup controls for the stage carousel
				jQuery('.prev-stage')
					.on('jcarouselcontrol:inactive', function() {
						jQuery(this).addClass('inactive');
					})
					.on('jcarouselcontrol:active', function() {
						jQuery(this).removeClass('inactive');
					})
					.jcarouselControl({
						target: '-=1'
					});

				jQuery('.next-stage')
					.on('jcarouselcontrol:inactive', function() {
						jQuery(this).addClass('inactive');
					})
					.on('jcarouselcontrol:active', function() {
						jQuery(this).removeClass('inactive');
					})
					.jcarouselControl({
						target: '+=1'
					});

				// Setup controls for the navigation carousel
				jQuery('.prev-navigation')
					.on('jcarouselcontrol:inactive', function() {
						jQuery(this).addClass('inactive');
					})
					.on('jcarouselcontrol:active', function() {
						jQuery(this).removeClass('inactive');
					})
					.jcarouselControl({
						target: '-=1'
					});

				jQuery('.next-navigation')
					.on('jcarouselcontrol:inactive', function() {
						jQuery(this).addClass('inactive');
					})
					.on('jcarouselcontrol:active', function() {
						jQuery(this).removeClass('inactive');
					})
					.jcarouselControl({
						target: '+=1'
					});
				
			});
		</script>
        <div class="product-main-info clearfix">
            <div class="fl">
                <div class="product-image">
					 <div class="jcarousel-wrapper">
						
						<div class="connected-carousels">
							<div class="stage">
								<div class="carousel carousel-stage">
									<ul>
										<li><a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg" class = "fancybox" data-fancybox-group = "gr1"><img id = "item-image<?php echo get_the_ID();?>"  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg"></a></li>
									
										<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".2.jpg")):?>
											<li><a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.2.jpg" class = "fancybox" data-fancybox-group = "gr1"><img  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.2.jpg"></a></li>
										<?php endif;?>
										
										<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".3.jpg")):?>
											<li><a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.3.jpg" class = "fancybox" data-fancybox-group = "gr1"><img  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.3.jpg"></a></li>
										<?php endif;?>
										
										<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".4.jpg")):?>
											<li><a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.4.jpg" class = "fancybox" data-fancybox-group = "gr1"><img  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.4.jpg"></a></li>
										<?php endif;?>
										
										<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".5.jpg")):?>
											<li><a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.5.jpg" class = "fancybox" data-fancybox-group = "gr1"><img  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.5.jpg"></a></li>
										<?php endif;?>
										
										<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".6.jpg")):?>
											<li><a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.6.jpg" class = "fancybox" data-fancybox-group = "gr1"><img  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.6.jpg"></a></li>
										<?php endif;?>
										
										<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".7.jpg")):?>
											<li><a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.7.jpg" class = "fancybox" data-fancybox-group = "gr1"><img  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.7.jpg"></a></li>
										<?php endif;?>
										
										<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".8.jpg")):?>
											<li><a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.8.jpg" class = "fancybox" data-fancybox-group = "gr1"><img  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.8.jpg"></a></li>
										<?php endif;?>
										
										<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".9.jpg")):?>
											<li><a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.9.jpg" class = "fancybox" data-fancybox-group = "gr1"><img  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.9.jpg"></a></li>
										<?php endif;?>
										
										<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".10.jpg")):?>
											<li><a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.10.jpg" class = "fancybox" data-fancybox-group = "gr1"><img  width="50" height="50" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.10.jpg"></a></li>
										<?php endif;?>
										
										<?php if (!empty(get_post_meta(get_the_ID(), "videoslide", true))):?>
											<li>
												<?php 
													$video_url = get_post_meta(get_the_ID(), "videoslide", true);
													echo $wp_embed->run_shortcode( '[embed]' . $video_url . '[/embed]' );
												?>
											</li>
										<?php endif;?>
									</ul>
								</div>
								
								<a href="#" class="prev prev-stage"><span>&lsaquo;</span></a>
								<a href="#" class="next next-stage"><span>&rsaquo;</span></a>
							</div>

							<div class="navigation">
								<!--
								<a href="#" class="prev prev-navigation">&lsaquo;</a>
								<a href="#" class="next next-navigation">&rsaquo;</a>
								-->
								<div class="carousel carousel-navigation">
									<ul>
										<li><img src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg"></li>
									
										<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".2.jpg")):?>
											<li><img src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.2.jpg"></li>
										<?php endif;?>
										
										<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".3.jpg")):?>
											<li><img src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.3.jpg"></li>
										<?php endif;?>
										
										<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".4.jpg")):?>
											<li><img src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.4.jpg"></li>
										<?php endif;?>
										
										<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".5.jpg")):?>
											<li><img src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.5.jpg"></li>
										<?php endif;?>
										
										<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".6.jpg")):?>
											<li><img src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.6.jpg"></li>
										<?php endif;?>
										
										<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".7.jpg")):?>
											<li><img src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.7.jpg"></li>
										<?php endif;?>
										
										<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".8.jpg")):?>
											<li><img src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.8.jpg"></li>
										<?php endif;?>
										
										<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".9.jpg")):?>
											<li><img src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.9.jpg"></li>
										<?php endif;?>
										
										<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".10.jpg")):?>
											<li><img src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.10.jpg"></li>
										<?php endif;?>
										
										<?php if (!empty(get_post_meta(get_the_ID(), "videoslide", true))):?>
											<li><img src = "<?php bloginfo("template_url")?>/img/file-rev.png"></li>
										<?php endif;?>
									</ul>
								</div>
							</div>
						</div>
						
						
						
						
						
						
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
							<div class="price-current"><?php echo $pricr_old;?> <span>руб.</span></div>
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
					
                </div>
                <div class="order-button-wrapper">
                   
					
					
							 <a onclick="yaCounter48236084.reachGoal('knopka');" class="btn btn-pink inSingleBtn tobascetInCat fancybox-order" style = "display:inline-bloc;" href="#order-form" 
							data-sale="-<?php echo 100 - round(((float)$pricr_cur / (float)$pricr_old) * 100);?><span>%</span>" 
							data-price="<?php echo $pricr_cur;?>" 
							data-price-old = "<?php echo $pricr_old;?>" 
							data-size-price-s="<?php echo $pricr_cur;?>" 
							data-size-price-old-s="<?php echo $pricr_old;?>" 
							data-image="<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg" 
							data-title="<?php the_title(); ?>" 
							data-product = "<?php echo get_post_meta(get_the_ID(), "SKU", true)?>" 
							data-postid = "<?php echo get_the_ID();?>"
							>Заказать</a>
							

				</div>
                
				<?php
				//global $post;  // Add this line and you're golden
					//if ($post->ID == 3503):
				?>
				<!--КОРЗИНА-->
				<div class="order-button-wrapper">
				
					<span class = "btn grnbtn inSingleBtn btn-pink tobascetInCat tobascet" style = "display:inline-block;" onclick="yaCounter48236084.reachGoal('korzinastrtovar');"
						data-postid = "<?php echo get_the_ID();?>"><i class="fas fa-shopping-basket "></i> В корзину</span>
				
				</div>
				<?php// endif; ?>
                <div style="font-size: 16px; text-transform: none; color: #919191; margin-top: 10px; margin-left: 20px;    font-family: 'Trebuchet MS',Helvetica,sans-serif">
                    Данный товар купили <b><?php echo get_post_meta(get_the_ID(), "order_count", true);?></b> раз(а).
                </div>
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
				
				<?php if ($blk1[0] === "Российское производство"): ?>
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
						<p class="price" style="font-size: 34px;color: #888!important; margin-bottom: 10px; margin-top: 0;"> <?php echo $pricr_old;?>  <span style="font-size: 26px;"> руб.</span></p>
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
                

					<a onclick="yaCounter48236084.reachGoal('knopka');" class="btn btn-pink  tobascetInCat fancybox-order" style = "display:inline-block;" href="#order-form" 
					data-sale="-<?php echo 100 - round(((float)$pricr_cur / (float)$pricr_old) * 100);?><span>%</span>" 
					data-price="<?php echo $pricr_cur;?>" 
					data-price-old = "<?php echo $pricr_old;?>" 
					data-size-price-s="<?php echo $pricr_cur;?>" 
					data-size-price-old-s="<?php echo $pricr_old;?>" 
					data-image="<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg" 
					data-title="<?php the_title(); ?>" 
					data-product = "<?php echo get_post_meta(get_the_ID(), "SKU", true)?>" 
					data-postid = "<?php echo get_the_ID();?>"
					>Заказать</a>            
					

				
				
					
					<div class="order-button-wrapper">
						<span class = "btn tobascetInCat  btn-pink tobascet grnbtn " style = "display:inline-block;" onclick="yaCounter48236084.reachGoal('korzinastrtovar');"
							data-postid = "<?php echo get_the_ID();?>" 
						><i class="fas fa-shopping-basket"></i> В корзину</span>
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

		<h1 class="int tac" style="margin-bottom: 25px">Интересный товар со скидкой</h1>
		<div class="clearfix">
			<?php
							
							$category = get_the_category();						
							$args = array(
										'numberposts' => 10,
										'category'    => $category[0]->cat_ID,
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