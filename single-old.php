<?php get_header(); ?>

<main>
    <div class="wrapper">
        <?php include ("baner-timer.php"); ?>
        <?php include ("show-960.php"); ?>
            
		<div class="clearfix">
            
			<?php get_sidebar("left"); ?>                

			<section class="page-content">
				<div class="breadcrumbs" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                          

					<?php
					if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb('','');
					}
					?>							
				</div>
                                        <div id = "tovar" itemscope itemtype="http://schema.org/Product" class="product-page">
    <h1 itemprop="name" class="page-title"><?php the_title(); ?> <span style = "    font-size: 0.5em;">(<?php echo get_post_meta(get_the_ID(), "size", true);?>)</span></h1>
    
	<?php
		$pricr_cur = get_post_meta(get_the_ID(), "price", true);
		$pricr_old = get_post_meta(get_the_ID(), "old_price", true);
	?>
	
	<div class="product-content">
		<script>
			jQuery(document).ready(function () {
				 
				         var jcarousel = jQuery('.jcarousel');

        jcarousel
            .on('jcarousel:reload jcarousel:create', function () {
/*               
			   var carousel = jQuery(this),
                    width = carousel.innerWidth();

                if (width >= 600) {
                    width = width / 3;
                } else if (width >= 350) {
                    width = width / 2;
                }

                carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
				*/
            })
            .jcarousel({
                wrap: 'circular'
            });

        jQuery('.jcarousel-control-prev')
            .jcarouselControl({
                target: '-=1'
            });

        jQuery('.jcarousel-control-next')
            .jcarouselControl({
                target: '+=1'
            });

        jQuery('.jcarousel-pagination')
            .on('jcarouselpagination:active', 'a', function() {
                jQuery(this).addClass('active');
            })
            .on('jcarouselpagination:inactive', 'a', function() {
                jQuery(this).removeClass('active');
            })
            .on('click', function(e) {
                e.preventDefault();
            })
            .jcarouselPagination({
                perPage: 1,
                item: function(page) {
                    return '<a href="#' + page + '">' + page + '</a>';
                }
            });
				 
				 
				 /*
				 jQuery('.jcarousel').jcarousel();

				jQuery('.jcarousel-control-prev')
					.on('jcarouselcontrol:active', function() {
						jQuery(this).removeClass('inactive');
					})
					.on('jcarouselcontrol:inactive', function() {
						jQuery(this).addClass('inactive');
					})
					.jcarouselControl({
						target: '-=1'
					});

				jQuery('.jcarousel-control-next')
					.on('jcarouselcontrol:active', function() {
						jQuery(this).removeClass('inactive');
					})
					.on('jcarouselcontrol:inactive', function() {
						jQuery(this).addClass('inactive');
					})
					.jcarouselControl({
						target: '+=1'
					});

				jQuery('.jcarousel-pagination')
					.on('jcarouselpagination:active', 'a', function() {
						jQuery(this).addClass('active');
					})
					.on('jcarouselpagination:inactive', 'a', function() {
						jQuery(this).removeClass('active');
					})
					.jcarouselPagination();
					*/
					
			});
		</script>
        <div class="product-main-info clearfix">
            <div class="fl">
                <div class="product-image">
					 <div class="jcarousel-wrapper">
						<div class="jcarousel">		
							<ul>
								<li><a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg" class = "fancybox" data-fancybox-group = "gr1"><img  src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg"></a></li>
								
								<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".2.jpg")):?>
									<li><a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.2.jpg" class = "fancybox" data-fancybox-group = "gr1"><img src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.2.jpg"></a></li>
								<?php endif;?>
								
								<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".3.jpg")):?>
									<li><a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.3.jpg" class = "fancybox" data-fancybox-group = "gr1"><img src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.3.jpg"></a></li>
								<?php endif;?>
								
								<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".4.jpg")):?>
									<li><a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.4.jpg" class = "fancybox" data-fancybox-group = "gr1"><img src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.4.jpg"></a></li>
								<?php endif;?>
								
								<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".5.jpg")):?>
									<li><a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.5.jpg" class = "fancybox" data-fancybox-group = "gr1"><img src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.5.jpg"></a></li>
								<?php endif;?>
								
								<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".6.jpg")):?>
									<li><a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.6.jpg" class = "fancybox" data-fancybox-group = "gr1"><img src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.6.jpg"></a></li>
								<?php endif;?>
							</ul>
						</div>
						<a href="#" class="jcarousel-control-prev jcarousel-control">&lsaquo;</a>
						<a href="#" class="jcarousel-control-next jcarousel-control">&rsaquo;</a>
						
						<p class="jcarousel-pagination">
							
						</p>
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
                    <a onclick="yaCounter48236084.reachGoal('knopka');" class="btn btn-pink fancybox-order" href="#order-form" 
					data-sale="-<?php echo 100 - round(((float)$pricr_cur / (float)$pricr_old) * 100);?><span>%</span>" 
					data-price="<?php echo $pricr_cur;?>" 
					data-price-old = "<?php echo $pricr_old;?>" 
					data-size-price-s="<?php echo $pricr_cur;?>" 
					data-size-price-old-s="<?php echo $pricr_old;?>" 
					data-image="<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg" 
					data-title="<?php the_title(); ?>" 
					data-product = "<?php echo get_post_meta(get_the_ID(), "SKU", true)?>" 
					data-postid = "<?php echo get_the_ID();?>"
					>Заказать</a>                </div>
                
                <div style="font-size: 16px; text-transform: none; color: #919191; margin-top: 10px; margin-left: 20px;    font-family: 'Trebuchet MS',Helvetica,sans-serif">
                    Данный товар купили <b><?php echo get_post_meta(get_the_ID(), "order_count", true);?></b> раз(а).
                </div>
            </div>
        </div>
    </div>
   
  
	<div class="item-page-row clearfix">
        <div class="block-border fl">
            <div class="clearfix">
                <div class="img" style = "width: 95px;" >
                    <img class = "cbImg" src="<?php bloginfo("template_url")?>/img/onlineMain.png" alt="Картинка">
                </div>
                <div class="text">
                    <div class="h5">Получите кэшбэк 3%</div>
                    <p>Вернем Вам 3% от стоимости товара на Ваш телефон за фото-отзыв. <br/>Отзывы отправляйте WhatsApp, Telegram или Viber на номер +7 910 275-96-66</p>
                </div>
				<div class = "socialIcon">
					<img src = "<?php bloginfo("template_url");?>/img/viberIcon.svg">
					<img src = "<?php bloginfo("template_url");?>/img/whatsappIcon.png">
					<img src = "<?php bloginfo("template_url");?>/img/telegram.svg">
				</div>
            </div>
        </div>
		
		<!--
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
		-->
    </div>


<div class="h1 pink tac">Описание и характеристики</div>
	<div class = "product_content">
		<?php the_content(); ?>
	</div>
	
	    
   <!-- <p class="page-desc tac">Что вы получаете при покупке картины у нас</p>-->
    <div class="clearfix">
        
		<div class="fully-prepared">
            <div class="img"><img src="<?php bloginfo("template_url")?>/img/mr.png" alt="Сделано в России"></div>
           <?php 
				$blk1 = explode("|", get_post_meta(get_the_ID(), "informer1", true));
			?>
			<h5><?php echo empty($blk2[0])?"Российское производство":$blk1[0]; ?></h5>
            <p><?php echo empty($blk2[1])?"Товар произведен в России с соблюдением всех норм":$blk1[1]; ?></p>
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
                    <p>Вы можете открыть посылку и осмотреть картину и только потом принимать решение о покупке.
                        Если вас что-то не устроило в картине, вы можете отказаться и ничего не платить (условия действуют по всей России)</p>
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
                <a onclick="yaCounter48236084.reachGoal('knopka');" class="btn btn-pink fancybox-order" href="#order-form" 
				data-sale="-<?php echo 100 - round(((float)$pricr_cur / (float)$pricr_old) * 100);?><span>%</span>" 
				data-price="<?php echo $pricr_cur;?>" 
				data-price-old = "<?php echo $pricr_old;?>" 
				data-size-price-s="<?php echo $pricr_cur;?>" 
				data-size-price-old-s="<?php echo $pricr_old;?>" 
				data-image="<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg" 
				data-title="<?php the_title(); ?>" 
				data-product = "<?php echo get_post_meta(get_the_ID(), "SKU", true)?>" 
				data-postid = "<?php echo get_the_ID();?>"
				>Заказать</a>            </div>
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