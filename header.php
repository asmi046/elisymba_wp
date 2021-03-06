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
	<meta name="cmsmagazine" content="f7245597f5b3579a3db3d69ddef2a8bf" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&amp;amp;subset=cyrillic" rel="stylesheet">



  <!-- Global site tag (gtag.js) - Google Ads: 809508635 -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-809508635"></script>
	
  <script src="//code.jivosite.com/widget/OuiLwJXODx" async></script>
  
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-809508635');

  </script>

  <script type="text/javascript">
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-131042282-1', 'auto');

    function getRetailCrmCookie(name) {
      var matches = document.cookie.match(new RegExp(
        '(?:^|; )' + name + '=([^;]*)'
      ));

      return matches ? decodeURIComponent(matches[1]) : '';
    }

    ga('set', 'dimension1', getRetailCrmCookie('_ga'));

    ga('send', 'pageview');

  </script>



  <?php wp_head();?>
</head>

<body data-variant="v0">

  <script>
    stait = "<?php echo $_COOKIE["staitinfo"]; ?>";
    city = "<?php echo $_COOKIE["cityinfo"]; ?>";
    province = "<?php echo $_COOKIE["provinceinfo"]; ?>";
    postcode = "<?php echo $_COOKIE["postcode"]; ?>";

  </script>

  <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
    (function(m, e, t, r, i, k, a) {
      m[i] = m[i] || function() {
        (m[i].a = m[i].a || []).push(arguments)
      };
      m[i].l = 1 * new Date();
      k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(48236084, "init", {
      id: 48236084,
      clickmap: true,
      trackLinks: true,
      accurateTrackBounce: true,
      webvisor: true
    });

  </script>
  <noscript>
    <div><img src="https://mc.yandex.ru/watch/48236084" style="position:absolute; left:-9999px;" alt="" /></div>
  </noscript>
  <!-- /Yandex.Metrika counter -->

  <script type="text/javascript">
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


    jQuery(document).ready(function() {
      jQuery(".workInPr").click(function() {
        jQuery(".grafWin").toggle();
      });

    });

  </script>


  <div class="main-wrapper">

    <div style="display: none;">
      <div class="box-modal" id="recalWin">
        <div class="box-modal_close arcticmodal-close arcticmodal-close-btn"></div>
          
          
          <form id="callback_form" class = "sendetMsgForm" action="#" method="post">
            <div class="title" style="text-align: center">Мы вам позвоним</div>
            <p style='font: 14px/22px "Trebuchet MS",Helvetica,sans-serif; color: #111;'>Оставьте свой телефон и мы позвоним вам в ближайшие несколько минут</p>

            <input type="hidden" name="_csrf-kartina-rus" value="Wlg4RDRHNTIRPlQGcnNhVxFvbAxdEgB0GB16FmAeBnAwMEsocy1aZA==">    <input type="hidden" id="call-client_time" name="Call[client_time]">    
            <div class="form-group field-call-client_name">
              <label class="control-label" for="call-client_name">Ваше имя:</label>
              <input type="text" id="call-client_name" class="form-control" name="Call[client_name]">
              <p class="help-block help-block-error"></p>
            </div>    
            
            <div class="form-group field-call-client_tel required">
              <label class="control-label" for="call-client_tel">Номер телефона:</label>
              <input type="text" id="call-client_tel" class="form-control" name="Call[client_tel]" data-plugin-inputmask="inputmask_96e76a5f">
              <p class="help-block help-block-error"></p>
            </div>    

            <div style="text-align: center;">
              <button  onclick="yaCounter48236084.reachGoal('zvonokpodtverd');" type="submit" name = "sendmailcall" class="btn btn-pink sendRecall" style="height: 58px; margin: 20px auto; font-size: 25px; line-height: 20px;">Позвоните мне</button>    
            </div>
          </form>

          <div style = "display:none" class = "msgSendet">
              <h2>Мы перезвоним Вам в течение 5 минут!</h2>
          </div>
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
              <div class="present-cart__item wow animated" style="visibility: visible; animation-name: flipInX; animation-delay: <?php echo $del/10;?>s">?</div>
            <?php $del = $del + 1; $inc++; endwhile;?>
       
          </div>
          
        </div>
      </div>
    </div>

    <div style="display: none;">
      <div class="box-modal" id="vip_present-modal">
        <div class="box-modal_close arcticmodal-close">закрыть</div>
        <div class="modalline" id="lineIcon">

        </div>

        <div class="modalline" id="lineMsg">
          <div class="vip_present-modal__content">
            <div class="vip_present-modal__title">Выиграй <span>ценный приз от</span></div>
            <div class="vip_present-modal__logo" style="background-image: url(<?php echo get_template_directory_uri();?>/img/moblog.svg);"></div>
            <div class="vip_present-modal__text">
              <div class="">
                У вас 1 ход
                <div class="vip_present-modal__steps">1</div>
              </div>
              <div class="">
                Выбери карточку
                <div class="vip_present-modal__choice"></div>
              </div>
            </div>
            <div class="vip_present-modal__win">
				
				<div class="present-modal__present present-modal__present_mini vip_present-modal__present_mini">
					<div class="present-modal__present-wrap">
						<div class="present-modal__title present-modal__title_bot">Подарок к заказу</div>
						<div class="present-modal__present-img" style="background-image: url(<?php echo get_template_directory_uri()?>/img/present.png);"></div>
						<div class="present-modal__present-title">Мягкий паззл</div>
					</div>
				</div>
			  
              <a href="#" class="vip_present-modal__win-link">Продолжить покупки</a>
            </div>
          </div>
          <div class="vip_present-modal__carts">
            <?php 
            $inc = 0;
            $del = 1;
            while($inc < 12):?>
              <div class="vip_present-cart__item wow animated" style="background-image: url(<?php echo get_template_directory_uri();?>/img/p_<?php echo $del?>.png);visibility: visible; animation-name: flipInX; animation-delay: <?php echo $del/10;?>s"></div>
            <?php $del = $del + 1; $inc++; endwhile;?>
          </div>
          <div class="vip_present-modal__present">
            <div class="vip_present-modal__present-wrap">
              <div class="vip_present-modal__title">Ваш приз</div>
              <div class="vip_present-modal__present-img" style="background-image: url(<?php echo get_template_directory_uri()?>/img/present.png);"></div>
              <div class="vip_present-modal__present-title">Мягкий паззл</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- КОРЗИНА--->
    <div style="display: none;">
      <div class="box-modal" id="messgeModal">
        <div class="box-modal_close arcticmodal-close">закрыть</div>
        <div class="modalline" id="lineIcon">
        </div>

        <div class="modalline" id="lineMsg">
        </div>
      </div>
    </div>

    <div style="display: none;">
      <div class="box-modal" id="review-modal">
        <div class="arcticmodal-close arcticmodal-close-btn"></div>

        <div class="bascetAllWriper">
          <form action="" class="" enctype="multipart/form-data">
            <h2>Оставить отзыв</h2>
            <input type="text" name="name" placeholder="Ваше имя">
            <label for="">Ваша оценка</label>
            <div id="reviewStars-input">
              <label title="gorgeous" for="star-1"></label>
              <input id="star-1" value="1" type="radio" name="reviewStars" />

              <label title="good" for="star-2"></label>
              <input id="star-2" value="2" type="radio" name="reviewStars" />

              <label title="regular" for="star-3"></label>
              <input id="star-3" value="3" type="radio" name="reviewStars" />

              <label title="poor" for="star-4"></label>
              <input id="star-4" value="4" type="radio" name="reviewStars" />

              <label title="bad" for="star-5"></label>
              <input id="star-5" value="5" checked type="radio" name="reviewStars" />
            </div>
            <textarea name="review" placeholder="Отзыв" id=""></textarea>
            <label for="">Фото</label>
            <?php wp_nonce_field( 'my_file_upload', 'fileup_nonce' ); ?>
            <label class="loadFileElem" name="photo" id="ishmat1">
              <span class="loadet" style="display: none;"></span>
              <span class="elId"></span>
              <span class="elFn">Файл не выбран </span>
              <span class="btn"><i class="fas fa-download"></i> Загрузить</span>
              <input type="file" multiple="" name="photo" accept="image/*">
            </label>
            <!-- <input type="file" multiple name="photo" accept="image/*"> -->
            <!-- <div class="file-path"></div> -->
            <input type="hidden" class="file-path">
            <input type="text" name="vk" placeholder="Email">
            <div class="btn-wrap">
              <a href="#" class="btn btn-pink uniSendBtn" data-id="<?php echo get_the_ID();?>" data-link="https://xn--80ablmoh8a2h.xn--p1ai/wp-admin/post.php?post=<?php echo get_the_ID();?>&action=edit" data-product="<?php the_title();?>">Отправить</a>
            </div>
          </form>
        </div>
        <div class="bascetAllWriperMsg">

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

        <div class="arcticmodal-close arcticmodal-close-btn"></div>

        <div class="bascetAllWriper">
          <h3 class="bascetAllWriper-title">Товар добавлен в корзину</h3>
          <div class="bascetsod">

           <div class="order-form__coupon order-form__coupon-1">
               <div class="order-form__coupon-photo"></div>
               <div class="order-form__coupon-text">Золотой<br> розыгрыш</div>
               <div class="order-form__coupon-question">?</div>
               <div class="order-form__coupon-note">Оформите заказ сегодня и получите 1 купон на участие в золотом розыгрыше</div>
           </div>
          </div>

          <div class="cart-btn__wrapper">
            <div class="continue-shopping_link" onclick="yaCounter48236084.reachGoal('prod_pokupki_okno');">Продолжить покупки</div>
            <a href="<?php echo get_the_permalink(7084); ?>" class="cart-checkout__link cart-buttons__top-link-order" onclick="yaCounter48236084.reachGoal('oform_okno');">Оформить заказ</a>
          </div>
          
          <!-- <div class="cart-recommend__wrap">
            <h3 class="cart-product__title">Рекомендуем:</h3>
            <div class="owl-carousel cart-recommend__slider" id="bascetCarusel">
              <?php echo bascetinputDop(0); ?>


            </div>
          </div> -->


        </div>
        <div class="bascetAllWriperMsg">

        </div>
      </div>
    </div>

    <div style="display: none;">
      <div class="box-modal" id="nsapunkts">
        <div class="arcticmodal-close arcticmodal-close-btn"></div>
        <h2>Выберите населенный пункт:</h2>
        <span>От выбранного города зависят доступные способы доставки и ее стоимость</span>
		
			<div class="search-widget search-widget-modal search-widget-in-content city_all_search">
			  <form action="<?php echo home_url( '/' ) ?>">
				<input name="city_all" id = "city_all" placeholder="Введите название населенного пункта" value = "">
			  </form>
			</div> 
	
		
        <ul class="nas_tunkt_in_win">
          <li class='city_sel_elem city_sel_elem_popular'>Москва</li>
          <li class='city_sel_elem city_sel_elem_popular'>Санкт-петербург</li>
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


    <a href="<?php echo get_the_permalink(7084); ?>">
      <div class="bascetWriper <?php if (empty($_COOKIE["bascet"])) echo "bascetWriperHidden"; ?>" onclick="yaCounter48236084.reachGoal('openkorzina_new');">

        <div class="bCorcle">
			<!-- <div class="countInCart countInCart-gift"></div> Элемент с подарком -->
				
          <div class="countInCart">
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


    <?php $options = get_option( 'wpuniq_theme_options' ); ?>
    <div class = "mm_overley"></div>
    <div class="btnClodeMenu">
      <img src="<?php bloginfo("template_url");?>/img/close.svg" />
    </div>
    <div class="newMenuMob">

      <ul class="mobile-menu">
        <li id="menu-bizibord">
          <a href="#">Бизиборды</a>
          <ul class="sub-menu">
            <li class="cat-item cat-item-zz"><a href="<?php echo get_category_link(3);?>">Смотреть все товары</a></li>
            <?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 3, 'title_li' => "", 'orderby' => 'term_order', 'use_desc_for_title' => false) ); ?>
          </ul>
        </li>

        <li id="menu-mr">
          <a href="#">Авторские методики развития</a>
          <ul class="sub-menu">
            <li class="cat-item cat-item-zz"><a href="<?php echo get_category_link(84);?>">Смотреть все товары</a></li>
            <?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 84, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
          </ul>
        </li>

        <li id="menu-motorika">
          <a href="#">Мелкая моторика</a>
          <ul class="sub-menu">
            <li class="cat-item cat-item-zz"><a href="<?php echo get_category_link(51);?>">Смотреть все товары</a></li>
            <?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 51, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
          </ul>
        </li>
		  
		
		<li id="menu-sr">
          <a href="#">Спортивное развитие</a>
          <ul class="sub-menu">
            <li class="cat-item cat-item-zz"><a href="<?php echo get_category_link(92);?>">Смотреть все игры</a></li>
            <?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 92, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
          </ul>
        </li>  
		  
		  
		<li id="menu-magconstr">
          <a href="#">Магнитный конструктор</a>
          <ul class="sub-menu">
            <li class="cat-item cat-item-zz"><a href="<?php echo get_category_link(69);?>">Все наборы</a></li>
            <?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 69, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
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



        <li id="menu-sport">
          <a href="#">Спорт и отдых</a>
          <ul class="sub-menu">
            <li class="cat-item cat-item-zz"><a href="<?php echo get_category_link(80);?>">Смотреть все товары</a></li>
            <?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 80, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
          </ul>
        </li>

        <li id="menu-knigi">
          <a href="#">Книги</a>
          <ul class="sub-menu">
            <li class="cat-item cat-item-zz"><a href="<?php echo get_category_link(60);?>">Все книги</a></li>
            <?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 60, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
          </ul>
        </li>

		<li id="menu-blockconstr">
          <a href="#">Блочный конструктор</a>
          <ul class="sub-menu">
            <li class="cat-item cat-item-zz"><a href="<?php echo get_category_link(90);?>">Все наборы</a></li>
            <?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 90, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
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

      <div class="workMenuMobile">
        <a href="https://wa.me/79308577844" target="_blank" class="whatsapp-btn">Напишите нам в WhatsApp</a>

        <?php wp_nav_menu( array('menu' => 'Мобильное меню внизу окна', 'container' => false )); ?>


        <div class="menuNewPhone">
          <a href="tel:<?php echo $options[phoneLnk]; ?>"><?php echo $options[phoneViev]; ?></a>
        </div>
      </div>



    </div>

    <?php 
				$is_bot = preg_match("~(Google|Yahoo|Rambler|Bot|Yandex|Spider|Snoopy|Crawler|Finder|Mail|curl|MSN|AbachoBOT|Accoona|MSRBOT)~i", $_SERVER['HTTP_USER_AGENT']);
								
        if (!$is_bot) 
        {
          if ((empty($_COOKIE["staitinfo"]))&&(empty($_COOKIE["cityinfo"]))) 
          { 


								$obj = json_decode(file_get_contents("http://api.sypexgeo.net/un5Kq/json/".$_SERVER['REMOTE_ADDR']));
								
								if (!empty($obj->country->name_ru)) setcookie("staitinfo", $obj->country->name_ru, 0, "/", "xn--80ablmoh8a2h.xn--p1ai");
								if (!empty($obj->city->name_ru)) setcookie("cityinfo", $obj->city->name_ru, 0, "/", "xn--80ablmoh8a2h.xn--p1ai");
								if (!empty($obj->region->name_ru)) setcookie("provinceinfo", $obj->region->name_ru, 0, "/", "xn--80ablmoh8a2h.xn--p1ai");
									if (!empty($obj->city->post)) {
										 setcookie("postcode", str_replace("x","0",$obj->city->post), 0, "/", "xn--80ablmoh8a2h.xn--p1ai");
									}
					} 
        }
        
        $city = (!empty($_COOKIE["cityinfo"]))?$_COOKIE["cityinfo"]:$obj->city->name_ru;
									
				$postcode = (!empty($_COOKIE["postcode"]))?$_COOKIE["postcode"]:str_replace("x","0",$obj->city->post);
				
				$GLOBALS['city'] = $city;
				$GLOBALS['postcode'] = $postcode;

			?> 


  <header id="header" class="new_head header">

  <div class="newMobhead">
        <div id="menuBtnOpen" class="newHeadElem newHeadBtn menuWraper">
          <img src="<?php bloginfo("template_url");?>/img/menu.svg" />
        </div>

        <div class="newHeadElem logoWraper">
          <a href="<?php bloginfo("url");?>"><img src="<?php bloginfo("template_url");?>/img/moblog.svg" /></a>
        </div>

        <div class="newHeadElem instaWraper">
          <a target="_blank" href="https://www.instagram.com/elisyamba/"><img src="<?php bloginfo("template_url");?>/img/instagram_color.svg" /></a>
        </div>

        <div class="newHeadElem newHeadBtn phoneWraper">
          <a href="tel:<?php echo $options[phoneLnk]; ?>"><img src="<?php bloginfo("template_url");?>/img/phone.svg" /></a>
        </div>
  </div>

  <div class="container">        
    <div class="header__row">
    <!-- Обертка Всей Шапки -->
      <div class="header-top">
        
        <div class="header-top__menu-contact">
          <!-- Блок Иконок: Курск-Доставка-Акции -->
          <div class="header-top__menu ul-clean">
            <a href="#" class="header-top-icon header-top__map"><?php echo (empty($_COOKIE["cityinfo"]))?"Москва":$_COOKIE["cityinfo"]; ?></a>
              <div class="city_vsp_vin" style="display:<?php echo (!empty($_COOKIE["cwclose"]))?"none":"block";?>">
                  <div class="qq">Ваш город <span style="city_in_win"><?php echo $city; ?></span>?</div>
                  <div class="qq_btn">
                    <div class="yes_no_btn yes_btn btn btn-pink">Да, спасибо</div>
                    <div class="yes_no_btn no_btn btn btn-pink">Нет, другой</div>
                  </div>
              </div>
            <a href="<?php echo get_permalink(6)?>" class="header-top-icon header-top__delivery">Доставка</a>
            <a href="<?php echo get_permalink(18)?>" class="header-top-icon header-top__actions">Акции</a>
            <a href="<?php echo get_permalink(4)?>" class="header-top-icon header-top__about">О нас</a>
            <a href="<?php echo get_permalink(10)?>" class="header-top-icon header-top__contacts">Контакты</a>
            <a href="https://www.instagram.com/elisyamba/" target="_blank" class="header-top-icon header-top__insta">Наш инстаграмм</a>
          </div>
          
          <!-- <div class = "work_in_ng">
              <span style = "color:red">1,2,3,7 января</span> - выходные дни <br/>
              <span style = "color:green">4,5,6 января</span> - короткие дни до 17:00
          </div> -->

          <!-- Телефон -->
          <a onclick="yaCounter48236084.reachGoal('knopkazvonok');" href="#" class=" noeffect baner-new__link_phone_a">
            <div class = "baner-new__link baner-new__link_phone noeffect btn-pink">Заказать звонок</div>
          </a>
          <a onclick="yaCounter48236084.reachGoal('nazaltel');" class="header-phone" href="tel:<?php echo $options[phoneLnk]; ?> "><?php echo $options[phoneViev]; ?> </a>
          <!-- <a href="tel:88005110179" class="header-phone">8 800 511-01-79</a> -->
        </div>
      
      <!-- Блок Логотипа и Меню -->
      <div class="header-middle">
        <!-- Блок logo -->
        <div class="header-block-logo">
          <a href="<?php echo home_url('/');?>" class="header-block-logo__svg"></a>
        </div>
        
        <!-- Блок Заголовка и Форма поиска -->
        <div class="header-search">
          <!-- Блок Заголовка -->
          <div class="header-title">
            <h1 class="header-title__text">Магазин развивающих игрушек №1 в России</h1>
          </div>

          <!-- Форма поиска -->
          <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
            <div class ="searchformWraper">  
              <input type="text" tabindex = "1" autocomplete="off" value = "<? echo $_REQUEST["s"];?>" placeholder="Я ищу..." name="s" id="s" />
              <button type="button" tabindex = "3"  id="searchsubmit" class="searchsubmit sub-clear" value=""></button>
              <button type="submit" tabindex = "2" id="searchsubmit" class="searchsubmit sub-search" value=""></button>
            </div>
            <div class="preSearchWrap" style="display: none;"></div>
          </form>
        </div>
        
        <!-- Блок Кабинет Корзина -->
        <div class="header-user">
          <a target = "_blanck" href="https://clck.yandex.ru/redir/dtype=stred/pid=47/cid=73582/path=dynamic.88x31/*https://market.yandex.ru/shop--elisiamba/475987/reviews"> <img src="https://clck.yandex.ru/redir/dtype=stred/pid=47/cid=73581/path=dynamic.88x31/*https://grade.market.yandex.ru/?id=475987&action=image&size=0" border="0" alt="Читайте отзывы покупателей и оценивайте качество магазина ЕлиСямба на Яндекс.Маркете" /> </a>
          <!-- <a href="#" class="header-user__btn header-user__user">Кабинет</a> -->
          <a target="_blank" href="https://vk.com/topic-162994836_37858104?offset=420" class="header-user__btn header-user__cart">Отзывы в Vk</a>
        </div>
      </div>
      
        <!-- Меню Основное -->
        <? get_template_part( 'template-parts/main-menu' ); ?>
    </div>
  </div>
</header>