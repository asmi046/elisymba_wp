<?php
/*
 Single Post Template: Шаблон товаров
 Description: Шаблон товаров
 */
?>
<?php get_header(); ?>

<main>
    <div class="wrapper">
        <?php include ("baner-timer.php"); ?>
        <?php include ("show-960.php"); ?>
            
		<div class="clearfix">
            
			<?php get_sidebar("left"); ?>                

			<section class="page-content">
				                                            <div class="breadcrumbs" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                            <ul><li itemprop="title"><a href="/" itemprop="url">Главная</a></li>
<li itemprop="title"><a href="/priroda/" itemprop="url">Природа, пейзаж</a></li>
<li itemprop="title" class="active">дерево на закате</li>
</ul>                        </div>
                                        <div itemscope itemtype="http://schema.org/Product" class="product-page">
    <h1 itemprop="name" class="page-title"><?php the_title(); ?></h1>
    
	<?php
		$pricr_cur = get_post_meta(get_the_ID(), "price", true);
		$pricr_old = get_post_meta(get_the_ID(), "old_price", true);
	?>
	
	<div class="product-content">
		<script>
			jQuery(document).ready(function () {
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
			});
		</script>
        <div class="product-main-info clearfix">
            <div class="fl">
                <div class="product-image">
					 <div class="jcarousel-wrapper">
						<div class="jcarousel">		
							<ul>
								<li><a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg" class = "fancybox" data-fancybox-group = "gr1"><img  src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg"></a></li>
								<li><a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg" class = "fancybox" data-fancybox-group = "gr1"><img src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg"></a></li>
								<li><a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg" class = "fancybox" data-fancybox-group = "gr1"><img src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg"></a></li>
								<li><a href = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg" class = "fancybox" data-fancybox-group = "gr1"><img src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg"></a></li>
							 </ul>
						</div>
						<a href="#" class="jcarousel-control-prev jcarousel-control">&lsaquo;</a>
						<a href="#" class="jcarousel-control-next jcarousel-control">&rsaquo;</a>
						
						<p class="jcarousel-pagination">
							
						</p>
					</div>
                     <p class="discount"><?php echo 100-round(((float)$pricr_cur / (float)$pricr_old) * 100);?><span>%</span></p>
                </div>
            </div>
            <div class="product-desc">
                <div class="clearfix">
					<div itemprop="description">
						<ul class="hide-480">
							<li>Гарантия качества (ГОСТ)</li>
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
					
					<div class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <div class="price-current-title">Цена без акции:</div>
                        <div class="price-current"><?php echo $pricr_old;?> <span>руб.</span></div>
                        <hr class="dotted">
                        <div class="price-old-title">Цена по акции:</div>
                        <div class="price-old" itemprop="price" content="<?php echo $pricr_cur;?>"><?php echo $pricr_cur;?> <span>руб.</span><meta itemprop="priceCurrency" content="RUB"></div>
                    </div>
                </div>
                <div class="order-button-wrapper">
                    <a class="btn btn-pink fancybox-order" href="#order-form" data-price="<?php echo $pricr_cur;?>" data-price-old = "<?php echo $pricr_old;?>" data-size-price-s="<?php echo $pricr_cur;?>" data-size-price-old-s="<?php echo $pricr_old;?>" data-image="<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg" data-title="<?php the_title(); ?>" data-product = "<?php echo get_post_meta(get_the_ID(), "SKU", true)?>">Заказать</a>                </div>
                
                <div style="font-size: 16px; text-transform: none; color: #919191; margin-top: 10px; margin-left: 20px;    font-family: 'Trebuchet MS',Helvetica,sans-serif">
                    Данный товар купили <b><?php echo get_post_meta(get_the_ID(), "order_count", true);?></b> раз(а).
                </div>
            </div>
        </div>
    </div>
    <div class="item-page-row clearfix">
        <div class="block-border fl">
            <div class="clearfix">
                <div class="img">
                    <img src="/assets/pink/img/item-page-mp3.png" alt="Картинка">
                </div>
                <div class="text">
                    <div class="h5">Стильный mp3-плеер <br>в подарок к картине!</div>
                    <p>Спешите, количество подарков<br>ограничено!</p>
                </div>
            </div>
        </div>
        <div class="block-border fr">
            <div class="clearfix">
                <div class="img">
                    <img src="/assets/pink/img/item-page-clip.jpg" alt="Картинка">
                    <div class="discount">
                        <p class="new-price">70 <span>р.</span></p>
                        <p class="old-price">180 р.</p>
                    </div>
                </div>
                <div class="text">
                    <div class="h2">Вы повесите картину<br>за 1 минуту!</div>
                    <p>Без сверления стен, справится<br>даже ребенок!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="h1 pink tac">Картина полностью готова! Осталось только повесить.</div>
    <p class="page-desc tac">Что вы получаете при покупке картины у нас</p>
    <div class="clearfix">
        <div class="fully-prepared">
            <div class="img"><img src="/assets/pink/img/fully-prepared-img1.png" alt="Картинка"></div>
            <h5>Эко-холсты</h5>
            <p>Картина печатается на натуральных хлопковых холстах европейского производства</p>
        </div>
        <div class="fully-prepared">
            <div class="img"><img src="/assets/pink/img/fully-prepared-img2.png" alt="Картинка"></div>
            <h5>Натяжка холста вручную</h5>
            <p>Холст натягивается на подрамник галерейной натяжкой (изображение продолжается
                на торце, никаких белых или черных торцов)</p>
        </div>
        <div class="fully-prepared">
            <div class="img"><img src="/assets/pink/img/fully-prepared-img3.png" alt="Картинка"></div>
            <h5>Галерейный подрамник</h5>
            <p>Изготавливается из высококачественной сосны. Толщина подрамника — 4×2 см</p>
        </div>
        <div class="fully-prepared">
            <div class="img"><img src="/assets/pink/img/fully-prepared-img4.png" alt="Картинка"></div>
            <h5>Ultra HD печать</h5>
            <p>Картина печатается экологически чистыми пигментными красками (не имеют специфического запаха) на японском оборудовании</p>
        </div>
        <div class="fully-prepared">
            <div class="img"><img src="/assets/pink/img/fully-prepared-img5.png" alt="Картинка"></div>
            <h5>Покрытие лаком</h5>
            <p>Декоративный акриловый безвредный лак
                защитит картину от внешних воздействий
                и создаст эффект глубины изображения</p>
        </div>
        <div class="fully-prepared">
            <div class="img"><img src="/assets/pink/img/fully-prepared-img6.png" alt="Картинка"></div>
            <h5>Надежная упаковка</h5>
            <p>Мы даем гарантию, что с вашей картиной ничего не случится во время транспортировки. Если картина повредится, мы вышлем новую бесплатно!</p>
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
                <div class="price-shares" style="margin-top: 22px">
                    <p style="color: #888 !important; margin: 0;">Цена без акции завтра:</p>
                    <p class="price" style="font-size: 34px;color: #888!important; margin-bottom: 10px; margin-top: 0;"> 5 000 <span style="font-size: 26px;"> руб.</span></p>
                </div>
                <div class="not price-shares" style="margin-top: 15px">
                    <p style="color:#111 !important; margin: 0;">Цена по акции сегодня:</p>
                    <p class="price price-old" style="font: bold 50px 'Roboto Slab', Arial, Helvetica, sans-serif; margin: 0;"> 2 650<span style="font-size: 40px;"> руб.</span></p>
                </div>
            </div>
            <div class="rightbtn fr">
                <a class="btn btn-pink fancybox-order" href="#order-form" data-size-s="90х60" data-size-price-s="2650" data-size-price-old-s="5000" data-size-m="120х80" data-size-price-m="3730" data-size-price-old-m="7000" data-size-l="150х100" data-size-price-l="4820" data-size-price-old-l="9100" data-size-xl="200х130" data-size-price-xl="6740" data-size-price-old-xl="12700" data-product="551" data-price-old="5 000" data-price="2 650" data-image="/images/fons/cache/fon1/products/227x145/551-derevo-na-zakate-ruchnaya-obrabotka-12080-sm.png" data-title="дерево на закате">Заказать</a>            </div>
            <div style="clear: both;"></div>
        </div>
        
    </div>
    <div class="h1 tac" style="margin-bottom: 30px">Закажите дополнительные услуги</div>
    <div class="additional-services clearfix">
        <div class="additional-service">
            <div class="additional-services-icon-block">
                <i class="additional-services-icon-1"></i>
            </div>
            <h5>Ручная обработка художественным гелем</h5>
            <p>Картина фактически отрисовывается художником мелкой кистью, создается впечатление нарисованной маслом картины и добавляется эффект глубины изображения. Стоимость услуги от 4000 рублей (в зависимости от размера картины и сложности исполнения).</p>
        </div>
       
        <div class="additional-service">
            <div class="additional-services-icon-block">
                <i class="additional-services-icon-3"></i>
            </div>
            <h5>Бесплатная услуга дизайнера</h5>
            <p>Еще до покупки вы сможете увидеть как будет смотреться эта картина у вас дома.</p>
        </div>
        
		<div class="additional-service">
            <div class="additional-services-icon-block">
                <i class="additional-services-icon-4"></i>
            </div>
            <h5>Размер или композиция не подходят?</h5>
            <p>Вы можете заказать любой размер картины и любое расположение сегментов.</p>
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
<div class="more-block">
    <div class="bg-gray">
        <a href="/modulnye-kartiny/#tovar" class="btn btn-dark-pink">Все картины</a>
    </div>
</div>
			</section>
        </div>
    </div>
</main>
	
<?php get_footer(); ?>