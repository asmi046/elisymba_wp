<!-- Меню -->

<?php //wp_nav_menu( array('menu' => 'Главное меню', 'container' => false )); ?>

<!doctype html>
<html class="no-js" lang="ru">
<head>
    <meta name="google-site-verification" content="fO1b0N3tCYG_lJfdjDmpZkeNaz22pUHyc_fSRlej3dE" />
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="icon" type="image/png" href="<?php  echo get_template_directory_uri(); ?>/img/icon.ico" />
	<meta name="csrf-param" content="_csrf-kartina-rus">
    <meta name="csrf-token" content="Wlg4RDRHNTIRPlQGcnNhVxFvbAxdEgB0GB16FmAeBnAwMEsocy1aZA==">
    <meta name="yandex-verification" content="9c36362dac41c95e" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700&amp;amp;subset=cyrillic" rel="stylesheet">


	
	
<!-- Global site tag (gtag.js) - Google Ads: 809508635 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-809508635"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-809508635');
</script>

<!-- Event snippet for ЛИД conversion page --> <script> gtag('event', 'conversion', { 'send_to': 'AW-809508635/gCkXCLSlup8BEJu-gIID', 'transaction_id': '<?php echo $_REQUEST["innerid"];?>' }); </script>
		
<script>	
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-131042282-1', 'auto');
  
  function getRetailCrmCookie(name) {
    var matches = document.cookie.match(new RegExp(
        '(?:^|; )' + name + '=([^;]*)'
    ));

    return matches ? decodeURIComponent(matches[1]) : '';
}

ga('set', 'dimension1', getRetailCrmCookie('_ga'));
  
 ga('send', 'pageview')
  
  ga('require', 'ecommerce', 'ecommerce.js');  // функция, которая подключает модуль электронной торговли. 
	 ga('ecommerce:addTransaction', {
	  'id': '<?php echo $_REQUEST["innerid"];?>',                   // ID транзакции
	  'revenue': '<?php echo $_REQUEST["summ"]; ?>',              // Общая стоимость заказа
	 });
  
	 // метод addItem нужно вызвать для каждого товара (позиции) в заказе:
 ga('ecommerce:addItem', {
  'id': '<?php echo $_REQUEST["innerid"];?>',                    // ID транзакции
  'name': 'test cart info',        // Название товара
  //'sku': 'AAA000',                 // Артикул или SKU
  //'category': 'Wireless',          // Размер, модель, категория или еще какая-то информация
  //'price': '750',                  // Стоимость товара
  //'quantity': '2'                  // Количество товара
 });
  
  
	 ga('ecommerce:send');             // Отправка данных
</script>

	
	
	<?php wp_head();?> 
	
	<script src="https://3dsec.sberbank.ru/demopayment/docsite/assets/js/ipay.js"></script>
  <script>
    var ipay = new IPAY({
      api_token: 'ujm2nfo81m4260lj6og9drndrr'
    });

  </script>
	
	<script src="https://3dsec.sberbank.ru/demopayment/docsite/assets/js/ipay.js"></script>
    <script>
		var ipay = new IPAY({api_token: 'ujm2nfo81m4260lj6og9drndrr'});
    </script>
	
	<?php if ($_REQUEST["color"] === "pnk"):?>
		<link rel="stylesheet" href="<?bloginfo("template_url")?>/pnk-style.css" type="text/css" media="screen" />
	<?php endif;?>
	
	<?php if ($_REQUEST["color"] === "grn"):?>
		<link rel="stylesheet" href="<?bloginfo("template_url")?>/grn-style.css" type="text/css" media="screen" />
	<?php endif;?>
</head>
<body data-variant="v0">

<script>
	var stait = "";
	var city = "";
</script>





<script>
	stait = "<?php echo $_COOKIE["staitinfo"]; ?>";
	city = "<?php echo $_COOKIE["cityinfo"]; ?>";
	province = "<?php echo $_COOKIE["provinceinfo"]; ?>";
</script>

<script>
  var _rcct = 'fa3a169479f3ba57568139b292f0fe326263f0bfa303c5cef10ba8a94614a54c';
  !function (t) {
    var a = t.getElementsByTagName("head")[0];
    var c = t.createElement("script");
    c.type = "text/javascript";
    c.src = "//c.retailcrm.pro/widget/loader.js";
    a.appendChild(c);
  } (document);
</script>
	
	
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(48236084, "init", {
        id:48236084,
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/48236084" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

	
<div class="main-wrapper">

	<?php
	//	global $post;
	//	if ($post->ID == 3503):
	?>
	<!-- КОРЗИНА--->
	<div style="display: none;">
	    <div class="box-modal" id="messgeModal">
	        <div class="box-modal_close arcticmodal-close">закрыть</div>
	        <div class = "modalline" id = "lineIcon">
	    </div>
	    
	    <div class = "modalline" id = "lineMsg">
	    </div>
	    </div>
	</div>
	<div style="display: none;">
		<div class="box-modal" id="review-modal">
			<!--<div class="box-modal_close arcticmodal-close">закрыть</div>-->
			<div class="arcticmodal-close arcticmodal-close-btn"></div>
			
				<div class = "bascetAllWriper">
					<form action="" class="" enctype="multipart/form-data">
						<h2>Оставить отзыв</h2>
						<input type="text" name="name" placeholder="Ваше имя">
						<label for="">Ваша оценка</label>
						<div id="reviewStars-input">
							<input id="star-4" value="5" type="radio" name="reviewStars"/>
							<label title="gorgeous" for="star-4"></label>

							<input id="star-3" value="4" type="radio" name="reviewStars"/>
							<label title="good" for="star-3"></label>

							<input id="star-2" value="3" type="radio" name="reviewStars"/>
							<label title="regular" for="star-2"></label>

							<input id="star-1" value="2" type="radio" name="reviewStars"/>
							<label title="poor" for="star-1"></label>

							<input id="star-0" value="1" type="radio" name="reviewStars"/>
							<label title="bad" for="star-0"></label>
						</div>
						<textarea name="review" placeholder="Отзыв" id=""></textarea>
						<label for="">Фото</label>
						<?php wp_nonce_field( 'my_file_upload', 'fileup_nonce' ); ?>
						<input type="file" multiple name="photo" accept="image/*" >
						<!-- <div class="file-path"></div> -->
						<input type="hidden" class="file-path">
						<input type="text" name="vk" placeholder="Ссылка на страницу Вконтакте">
						<div class="btn-wrap">
							<a href="#" class="btn btn-pink uniSendBtn">Отправить</a>
						</div>
					</form>
					<?php //echo do_shortcode('[contact-form-7 id="10229" title="Отзыв"]');?>
				</div>
				<div class = "bascetAllWriperMsg">	
					
				</div>
		</div>
	</div>
	
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$("#review-modal form").append('<input name="product-title" type="hidden" value="<?php echo the_title();?>"');
		});
	</script>
	<div style="display: none;">
		<div class="box-modal" id="bascetblk">
			<!--<div class="box-modal_close arcticmodal-close">закрыть</div>-->
			<div class="arcticmodal-close arcticmodal-close-btn"></div>
			
				<div class = "bascetAllWriper">	
					<h3 class="bascetAllWriper-title">Товар добавлен в корзину</h3>
					<div class = "bascetsod">
						
					</div>
					<div class="cart-btn__wrapper">
						<div class="continue-shopping_link" onclick="yaCounter48236084.reachGoal('prod_pokupki_okno');" >Продолжить покупки</div>
						<a href="<?php echo get_the_permalink(7084); ?>" class="cart-checkout__link cart-buttons__top-link-order" onclick="yaCounter48236084.reachGoal('oform_okno');">Оформить заказ</a>
					</div>
					<div class="cart-recommend__wrap">
						<h3 class="cart-product__title">Рекомендуем:</h3>
						<div class="owl-carousel cart-recommend__slider" id = "bascetCarusel">
							<?php echo bascetinputDop(0); ?>
							
							
						</div>
					</div>
					
					
				</div>
				<div class = "bascetAllWriperMsg">	
					
				</div>
		</div>
	</div>

	<div style="display: none;">
		<div class="box-modal" id="nsapunkts">
			<div class="arcticmodal-close arcticmodal-close-btn"></div>
				<h2>Выберите населенный пункт:</h2>
				<span>От выбранного города зависят доступные способы доставки и ее стоимость</span>
				
				<ul class = "nas_tunkt_in_win">
					<li class = 'city_sel_elem city_sel_elem_popular'>Москва</li>
					<li class = 'city_sel_elem city_sel_elem_popular'>Санкт-петербург</li>
					<?php 
						global $wpdb;
						$rez = $wpdb->get_results("SELECT * FROM `el_delivery`");
						$tb = "";
						foreach ($rez as $r) {
							$first_char = mb_substr($r->nas_punkt, 0, 1);
							if ($tb !== $first_char)
								echo "<li class = 'city_sel_elem zag_b'>".$first_char."</li>";	
							echo "<li class = 'city_sel_elem'>".$r->nas_punkt."</li>";
							
							$tb = $first_char;
						}
					?>
				</ul>
				
		</div>
	</div>
    <div style="display: none;">
      <div class="box-modal" id="present-modal">
        <div class="box-modal_close arcticmodal-close">закрыть</div>
        <div class="modalline" id="lineIcon">

        </div>

        <div class="modalline" id="lineMsg">
          <div class="present-modal__content">
            <div class="present-modal__title present-modal__title_top">Выиграй <span>ценный приз от</span></div>
            <div class="present-modal__logo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/moblog.svg);"></div>
            <div class="present-modal__text">
              <div class="">
                У вас 1 ход
                <div class="present-modal__steps">1</div>
              </div>
              <div class="">
                Выбери карточку
                <div class="present-modal__choice"></div>
              </div>
            </div>
            <div class="present-modal__win">
              <div class="present-modal__present present-modal__present_mini">
				<div class="present-modal__present-wrap">
				  <div class="present-modal__title present-modal__title_bot">Подарок к заказу</div>
				  <div class="present-modal__present-img" style="background-image: url(<?php echo get_template_directory_uri()?>/img/present.png);"></div>
				  <div class="present-modal__present-title">Мягкий паззл</div>
				</div>
			  </div>
              <a href="#" class="present-modal__win-link ppWin1">Продолжить покупки</a>
            </div>
          </div>
          <div class="present-modal__carts">
            <?php 
            $inc = 0;
            $del = 1;
            while($inc < 12):?>
              <div class="present-cart__item wow animated" data-zakid = "<?php echo $_REQUEST["innerid"]; ?>" style="visibility: visible; animation-name: flipInX; animation-delay: <?php echo $del/10;?>s">?</div>
            <?php $del = $del + 1; $inc++; endwhile;?>
            <!-- <div class="present-cart__item">?</div>
            <div class="present-cart__item">?</div>
            <div class="present-cart__item">?</div>
            <div class="present-cart__item">?</div>
            <div class="present-cart__item">?</div>
            <div class="present-cart__item">?</div>
            <div class="present-cart__item">?</div>
            <div class="present-cart__item">?</div>
            <div class="present-cart__item">?</div>
            <div class="present-cart__item">?</div> -->
          </div>
          
		  <!--
		  
		  <div class="present-modal__present">
            <div class="present-modal__present-wrap">
              <div class="present-modal__title">Ваш приз</div>
              <div class="present-modal__present-img" style="background-image: url(<?php echo get_template_directory_uri()?>/img/present.png);"></div>
              <div class="present-modal__present-title">Мягкий паззл</div>
            </div>
          </div>
		  -->
        </div>
      </div>
    </div>

		<a href = "<?php echo get_the_permalink(7084); ?>">
		<div class = "bascetWriper <?php if (empty($_COOKIE["bascet"])) echo "bascetWriperHidden"; ?>" onclick="yaCounter48236084.reachGoal('openkorzina_new');">
			
			<div class = "bCorcle">
				<div class = "countInCart">
					<?php
						if (!empty($_COOKIE["bascet"]))
						{
							$bascetelem = explode(",", $_COOKIE["bascet"] );
							$count = 0;
							foreach ($bascetelem as $r)
							{
								$cb = explode("|", $r);
								$count += $cb[1];
							}
						}
						else 
							$count = 0;
						echo $count;
					?>
				</div>
			</div>
		
		</div>
		</a>
	<!-- КОРЗИНА--->
	<?php //endif; ?>
	
		<style>
			
		</style>
	
	<script>	
		jQuery(document).ready(function() { 
			jQuery("#menuBtnOpen").click(function(){
				jQuery(".btnClodeMenu").show();
				jQuery(".newMenuMob").show();
			});
			
			jQuery(".btnClodeMenu").click(function(){
				jQuery(".newMenuMob").hide();
				jQuery(".btnClodeMenu").hide();
			});

			jQuery(".mobile-menu a").click(function() {
				jQuery(".mobile-menu a").each(function() {
					jQuery(this).next('.sub-menu').slideUp();
				});
				if(jQuery(this).next('.sub-menu').is(':visible')) {
					jQuery(this).next('.sub-menu').slideUp();
				} else {
					jQuery(this).next('.sub-menu').slideDown();
				}
				
			});
		});
	</script>	
	<?php $options = get_option( 'wpuniq_theme_options' ); ?>

<script type="text/javascript" >

	jQuery(function() {
        jQuery('.lazy').lazy(
		
		{
        scrollDirection: 'vertical',
        effect: 'fadeIn',
        visibleOnly: false,
        onError: function(element) {
            console.log('error loading ' + element.data('src'));
        }
		}
		
		);
    });
          

jQuery(document).ready(function($) {	
	setTimeout(function() {
		jQuery('#present-modal').arcticmodal({
				beforeOpen: function(data, el) {
					befor_open_win();
				}
			});
	}, 2000);
});

</script>
	<div class = "btnClodeMenu">
		<img src = "<?php bloginfo("template_url");?>/img/close.svg" />
	</div>
	<div class = "newMenuMob">
		
		<ul class="mobile-menu">
			<li id="menu-bizibord">
				<a href="#">Бизиборды</a>
				<ul class="sub-menu">
					<li class="cat-item cat-item-zz"><a href="<?php echo get_category_link(3);?>">Смотреть все товары</a></li>
					<?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 3, 'title_li' => "", 'orderby' => 'term_order', 'use_desc_for_title' => false) ); ?>
				</ul>
			</li>
			<li id="menu-motorika">
				<a href="#">Мелкая моторика</a>
				<ul class="sub-menu">
					<li class="cat-item cat-item-zz"><a href="<?php echo get_category_link(51);?>">Смотреть все товары</a></li>
					<?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 51, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
				</ul>
			</li>
			<li id="menu-pesok">
				<a href="#">Кинетический песок</a>
				<ul class="sub-menu">
					<li class="cat-item cat-item-zz"><a href="<?php echo get_category_link(32);?>">Смотреть все товары</a></li>
					<?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 32, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
				</ul>
			</li>
			
			<li id="menu-muzigr">
				<a href="#">Музыкальные игрушки</a>
				<ul class="sub-menu">
					<li class="cat-item cat-item-zz"><a href="<?php echo get_category_link(21);?>">Смотреть все товары</a></li>
					<?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 21, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
				</ul>
			</li>
			
			<li id="menu-kovriki">
				<a href="#">Детские коврики</a>
				<ul class="sub-menu">
					<li class="cat-item cat-item-zz"><a href="<?php echo get_category_link(58);?>">Смотреть все коврики</a></li>
					<?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 58, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
				</ul>
			</li>
			
			<li id="menu-kostruktori">
				<a href="#">Конструкторы</a>
				<ul class="sub-menu">
					<!-- <li class="cat-item cat-item-zz"><a href="<?php //echo get_category_link(22);?>">Смотреть все товары</a></li> -->
					<?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 22, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
				</ul>
			</li>
			
			<li id="menu-kubiki">
				<a href="#">Деревянные кубики</a>
				<ul class="sub-menu">
					<!--<li class="cat-item cat-item-zz"><a href="<?php //echo get_category_link(25);?>">Смотреть все товары</a></li>-->
					<?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 25, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
				</ul>
			</li>
			
			<li id="menu-transport">
				<a href="#">Спорт и отдых</a>
				<ul class="sub-menu">
					<li class="cat-item cat-item-zz"><a href="<?php echo get_category_link(56);?>">Смотреть весе товары</a></li>
					<?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 80, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
				</ul>
			</li>
		
			<li id="menu-plastilin">
				<a href="#">Пластилин</a>
				<ul class="sub-menu">
					<li class="cat-item cat-item-zz"><a href="<?php echo get_category_link(33);?>">Кинетический plush</a></li>
					<?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 33, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
				</ul>
			</li>
			
			<li id="menu-tvorkhestvo">
				<a href="#">Наборы для творчества</a>
				<ul class="sub-menu">
					<li class="cat-item cat-item-zz"><a href="<?php echo get_category_link(60);?>">Все наборы</a></li>
					<?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 60, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
				</ul>
			</li>
			
			<li id="menu-magconstr">
				<a href="#">Магнитный конструктор</a>
				<ul class="sub-menu">
					<li class="cat-item cat-item-zz"><a href="<?php echo get_category_link(69);?>">Все наборы</a></li>
					<?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 69, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
				</ul>
			</li>

			<li id="menu-rol">
				<a href="#">Сюжетно-Ролевые игры</a>
				<ul class="sub-menu">
					<li class="cat-item cat-item-zz"><a href="<?php echo get_category_link(74);?>">Смотреть все игры</a></li>
					<?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 74, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
				</ul>
			</li>


			
		</ul>
		
		<div class ="workMenuMobile">
			
				<?php wp_nav_menu( array('menu' => 'Мобильное меню внизу окна', 'container' => false )); ?>
			

			<div class = "menuNewPhone">
				<a href = "tel:<?php echo $options[phoneLnk]; ?>"><?php echo $options[phoneViev]; ?></a>
			</div>
		</div>
		
		
		
	</div>
	
    <header class="site-header clearfix">
      <!--
		<div class = "workInPrWraper" id = "workInPrWraperMob">
			<div class = "workInPr">
				Режим работы в празднечные дни
			</div>
			
			<div class = "grafWin">
выходные дни: <span style = "color:red;">1,2,3,7</span>	<br/>
						короткие дни: <span style = "color:blue;">4,5,6</span> с 12:00 до 19:00<br/>
				<br/>
				<span class = "prizivV">
				Оставляйте заявку на сайте<br/>
				мы в любом случае Вам перезвоним
				</span>
			</div>
        </div>
		-->
		
		<div class = "newMobhead">
			<div id = "menuBtnOpen" class = "newHeadElem newHeadBtn menuWraper">
				<img src = "<?php bloginfo("template_url");?>/img/menu.svg" />
			</div>
			
			<div class = "newHeadElem logoWraper">
				<a href = "<?php bloginfo("url");?>"><img  src = "<?php bloginfo("template_url");?>/img/moblog.svg" /></a>
			</div>
			
			<div class = "newHeadElem newHeadBtn phoneWraper">
				<a href = "tel:<?php echo $options[phoneLnk]; ?>"><img src = "<?php bloginfo("template_url");?>/img/phone.svg" /></a>
			</div>
		</div>
		
			<?php 
								$is_bot = preg_match("~(Google|Yahoo|Rambler|Bot|Yandex|Spider|Snoopy|Crawler|Finder|Mail|curl)~i", $_SERVER['HTTP_USER_AGENT']);
								
								if (!$is_bot) {
								if ((empty($_COOKIE["staitinfo"]))&&(empty($_COOKIE["cityinfo"]))) { ?>


							<?php
								$obj = json_decode(file_get_contents("http://api.sypexgeo.net/un5Kq/json/".$_SERVER['REMOTE_ADDR']));

								if (!empty($obj->country->name_ru)) setcookie("staitinfo", $obj->country->name_ru, 0, "/", "xn--80ablmoh8a2h.xn--p1ai");
								if (!empty($obj->city->name_ru)) setcookie("cityinfo", $obj->city->name_ru, 0, "/", "xn--80ablmoh8a2h.xn--p1ai");
								if (!empty($obj->region->name_ru)) setcookie("provinceinfo", $obj->region->name_ru, 0, "/", "xn--80ablmoh8a2h.xn--p1ai");
								} 
								}
			?>
			
			

		
		<div class="u-wrapper clearfix">
            <div class="h1 u-logo">
                <a href="/">
				<!-- <?php  echo get_template_directory_uri(); ?> -->
				
                    <img title = "магазин детских развивающих товаров Елисямба.рф" class="hide-685 lazy" data-src="<?php  echo get_template_directory_uri(); ?>/img/zaitso_russo.svg" alt="магазин детских развивающих товаров Елисямба.рф">  
					<!--
					<span class="logo-text">
						
						<strong style = "font-size:16px;">
							Ели<span style = "font-style: italic;display: inline;color: black;font-size: 20px;">C</span>ямба
						</strong> 
						- Магазин <br/>детских развивающих товаров <br/>с доставкой по России и СНГ
					</span>
					-->
					
                    <!--<span>Елисямба</span>-->
					
					<img class = "mobLogo" src = "<?php bloginfo("template_url");?>/img/moblog.svg" />
                </a>
            </div>
			


			
            <div class="u-right-header">
                <div class="u-right-header-top">
                    <div class="u-right-header-top-item city_in_top">
							
							
							
							
							<div id = "cityElem_top" class = "new_delivery_elem_top">
								<?php 
									$city = (!empty($_COOKIE["cityinfo"]))?$_COOKIE["cityinfo"]:$obj->city->name_ru;
									$GLOBALS['city'] = $city;
								?>
								Ваш город: <br/><span class = "value city_sel_elem"><?php echo $city; ?></span>
								<div class = "city_vsp_vin" style = "display:<?php echo (!empty($_COOKIE["cwclose"]))?"none":"block";?>">
									<div class = "qq">Ваш город <span style = "city_in_win"><?php echo $city; ?></span>?</div>
									<div class = "qq_btn">
										<div class = "yes_no_btn yes_btn btn btn-pink" >Да, спасибо</div> <div class = "yes_no_btn no_btn btn btn-pink">Нет, другой</div>
									</div>
								</div>
							</div>
                    </div>
					
					<div class="u-right-header-top-item hide-1200">
                        <div class="u-right-header-top-description">
                            Звоните в любой день с 9:00 до 21:00
                            Заказывайте через сайт в любое время суток!
                        </div>
                    </div>
                    <div class="u-right-header-top-item hide-1200">
                         <a onclick="yaCounter48236084.reachGoal('knopkazvonok');" href="#callback-form" class ="fancybox-callback noeffect">
						<div class="u-right-header-top-call">
                          <span class="u-right-header-top-call-btn needhelp noeffect">Заказать звонок</span>
						</div>
						</a>
                    </div>
					
					
                    <div class="u-right-header-top-item hide-685">
                        <div class="u-right-header-top-phone">
                            <a onclick="yaCounter48236084.reachGoal('nazaltel');" href="tel:<?php echo $options[phoneLnk]; ?> "><?php echo $options[phoneViev]; ?>                          </a>
                            <p>Бесплатный звонок по России</p>
							<!--<p style = "color:red; line-height: 1; font-size: 12px;">&larr; Телефон временно недоступен, нажмите на кнопку и мы перезвоним!</p>-->
                        </div>
                    </div>
                    <div class="u-right-header-top-item">
                        <div class="u-right-header-top-call">
                            <a onclick="yaCounter48236084.reachGoal('knopkazvonok');" href="tel:<?php echo $options[phoneLnk]; ?>" class="u-right-header-top-call-btn needhelp">Позвонить Вам?</a>
                        </div>
                    </div>
                </div>
                
<?php 	
				require_once 'Mobile_Detect.php';
					$detect = new Mobile_Detect;
					if( !$detect->isMobile() ){
				?>

          <div class="u-right-header-bottom">
            <div class="u-right-header-bottom-block">
              <div class="u-right-header-bottom-border">
                <div title="Доставка по всей России от 2-х дней до вашей двери прямо в руки!">
                  <i class="icon icon-car"></i>
                  <p class="hide-1200">Бесконтактная доставка до <br/>Ваших дверей!</p>
                  <p class="show-1200">Безконтактная доставка.</p>
                </div>
                <div title="Оплата после получения и осмотра заказа. Никаких рисков!">
                  <i class="icon icon-money"></i>
                  <!-- <p class="hide-1200">Оставайтесь дома! Берегите себя! Здоровья Вам и Вашим близким!</p>
                  <p class="show-1200">Здоровья Вам и Вашим близким!</p> -->
                  <p>Создаем Гениев вместе! <br/>Магазин развивающих игрушек №1 в России</p>
                </div>
                <div class="market-wrapper" title="Магазин развивающих игрушек №1 в России">
                  <!--<i class="icon icon-quality"></i>-->
                  <!-- <p class="hide-1200">Магазин развивающих игрушек №1 в России</p>
                  <p class="show-1200">Магазин развивающих игрушек №1 в России</p> -->
                  <a  target="_blank" href="https://clck.yandex.ru/redir/dtype=stred/pid=47/cid=73582/path=dynamic.88x31/*https://market.yandex.ru/shop--elisiamba/475987/reviews"> <img src="https://clck.yandex.ru/redir/dtype=stred/pid=47/cid=73581/path=dynamic.88x31/*https://grade.market.yandex.ru/?id=475987&action=image&size=0" border="0" alt="Читайте отзывы покупателей и оценивайте качество магазина ЕлиСямба на Яндекс.Маркете" /> </a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
				
				<script>
					jQuery(document).ready(function () {
						jQuery(".workInPr").click(function () {
							jQuery(".grafWin").toggle();
						});
						
					});
				</script>
				
				<div class = "workInPrWraper">
					<div class = "workInPr">
						Режим работы в празднечные дни
					</div>
					
					<div class = "grafWin">
						выходные дни: <span style = "color:red;">1,2,3,7</span>	<br/>
						короткие дни: <span style = "color:blue;">4,5,6</span> с 12:00 до 19:00<br/>
						<br/>
						<span class = "prizivV">
							Оставляйте заявку на сайте<br/>
							мы в любом случае Вам перезвоним
						</span>
					</div>
                </div>
				
				
				
            </div>
        </div>
        <div class="responsive-menu-wrapper">
            <div class="responsive-menu">
                <div class="menu-button">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div id="r-menu-title" class="responsive-menu-totle">Меню</div>
                
				
				<?php wp_nav_menu( array('menu' => 'Главное меню', 'container' => false, 'menu_class' => 'r-menu', 'menu_id'  => 'r-menu' )); ?>  
			</div>
        </div>
        <nav class="main-menu">
            <div class="wrapper">
                <ul>
					<?php wp_nav_menu( array('menu' => 'Главное меню', 'container' => false )); ?>
			</div>
        </nav>
    </header>

