<?php 
/*
Template Name: Страница конкурса
*/
?>
<?php get_header();?>
<style>

</style>

<script>	
		jQuery(document).ready(function() {
			jQuery('.list-person-show').click(function(e) {
				e.preventDefault();
				if(jQuery(this).prev().hasClass('hide')) {
					jQuery(this).prev().removeClass('hide');
					jQuery(this).text('Свернуть');
				} else {
					jQuery(this).prev().addClass('hide');
					jQuery(this).text('Показать всех участников');
				}
		   });

		
			jQuery('.owl-konkurs').owlCarousel({
				items: 3,
				margin: 4,
				startPosition: 3,
				loop: true,
				nav: true,
				navText: ['<span class="owl-arrow arrow-left"></span>', '<span class="owl-arrow arrow-right"></span>'],
				responsive: {
					320: {
						items: 1,
					},
					660: {
						items: 2,
					},
					990: {
						items: 3,
					},
					1200: {
						items: 3,
					}
				}
			});
		});
</script>	

<main>
    <div class="wrapper">
        <?php include ("baner-timer.php"); ?>
        <?php include ("baner-new.php")?>
            
		<div class="clearfix d-flex-main konkurs">
            
		<?php 
			require_once 'Mobile_Detect.php';
			$detect = new Mobile_Detect;
			
			// if( !$detect->isMobile() ){
			// 	if ($_REQUEST["nh"] != 1)
			// 		get_sidebar("left"); 
			// }

		?>                 

			<section class="page-content konkurs-page page-content-full">
				<h1><?php the_title();?></h1>
				<?php the_content();?>
				<div class="konkurs-page__bg"></div>
				<div class="konkurs-condition__wrapper">
					<div class="konkurs-condition__item condition__item-1">
						<div class="konkurs-condition__item-title">Выиграй <span class="color-green">магнитный конструктор <span class = "comete"> <br>"Старт" МК 14</span></span><br> или денежный сертификат</div>
						<div class="konkurs-condition__item-place">
							<span class="color-red">1 место</span> - магнитный конструктор
						</div>
						<div class="konkurs-condition__item-place">
							<span class="color-red">2 место</span> - 500 руб. на покупки <span class = "comete"> в нашем магазине</span>
						</div>
						<div class="konkurs-condition__item-place">
							<span class="color-red">3 место</span> - 300 руб. на покупки <span class = "comete"> в нашем магазине</span>
						</div>
						<div class="condition__item-1-bg"></div>
					</div>
					<div class="konkurs-condition__item condition__item-2">
						<div>
						Для участия пришлите на почту<br> <a href="mailto:info@elisyamba.ru">info@elisyamba.ru</a> Ваше ФИО и номер <span class = "comete">Вашего</span> заказа. <br> В течение 48 часов Ваш номер заказа появится в списке участников на этой странице
						</div>
						<div class="condition__item-2-bg"></div>
					</div>
					
				</div>
				<div class="konkurs-steps__wrapper">
					<div class="konkurs-steps__item steps__item-1">
						<span class="steps__item-title">1. В конкурсе набирается 100 участников</span>
						<div class="steps__item-1-bg"></div>
					</div>
					<div class="konkurs-steps__item steps__item-2">
						<span class="steps__item-title">2. Объявляется дата и время розыгрыша</span>
						<div class="steps__item-2-bg"></div>
					</div>
					<div class="konkurs-steps__item steps__item-3">
						<span class="steps__item-title">3. В установленное время с помощью генератора случайных чисел выбираем победителя. Снимаем видео и выкладываем на сайт.</span>
					</div>
					<div class="konkurs-steps__item steps__item-4">
						<span class="steps__item-title">4. Связываемся с победителем и начинаем новый розыгрыш.</span>
					</div>
				</div>
				<section class="video-contest-result">
					<h2>Видео с итогами конкурсов</h2>
					<div class="owl-carousel owl-konkurs">
						<div class="owl-konkurs__item">
							<iframe width="273" height="152" src="https://www.youtube.com/embed/02rV6r12d0I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							
							<!--<img src = "<?php bloginfo("template_url");?>/img/konkurs/rezKon.jpg" />-->
						</div>
						
						<div class="owl-konkurs__item">
							
							<iframe width="273" height="152" src="https://www.youtube.com/embed/Qv0rtVK86To" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							
							<!--<img src = "<?php bloginfo("template_url");?>/img/konkurs/rezKon.jpg" />-->
						</div>
						
						<div class="owl-konkurs__item">
							<iframe  width="273" height="152" src="https://www.youtube.com/embed/etUHdLUqXdk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							
						</div>
						
						
						<div class="owl-konkurs__item">
							<iframe src="//vk.com/video_ext.php?oid=-162994836&id=456239074&hash=5fac33c92391f5c2&hd=2" width="273" height="152" frameborder="0" allowfullscreen></iframe>
						</div>
						
						<div class="owl-konkurs__item">
							<iframe src="//vk.com/video_ext.php?oid=-162994836&id=456239077&hash=2a5f307a17d99fa2&hd=2" width="273" height="152" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</section>
				<section class="konkurs-date">
					<h2>Дата розыгрыша конкурса №<?php echo carbon_get_theme_option('konkurs_number');?></h2>
					<div class="konkurs-date__number"><?php echo carbon_get_theme_option('roz_data');?></div>
					<div class="konkurs-date__notify">
						Дата будет объявлена после того, как наберется 100 участников
					</div>
				</section>
				<section class="list-persons">
					<h2 class = "spisokUh">Список участников</h2>
					<div class="list-persons__wrapper hide">
						<span>1 - <?php echo carbon_get_theme_option('uh1');?></span>
						<span>2 - <?php echo carbon_get_theme_option('uh2');?></span>
						<span>3 - <?php echo carbon_get_theme_option('uh3');?></span>
						<span>4 - <?php echo carbon_get_theme_option('uh4');?></span>
						<span>5 - <?php echo carbon_get_theme_option('uh5');?></span>
						<span>6 - <?php echo carbon_get_theme_option('uh6');?></span>
						<span>7 - <?php echo carbon_get_theme_option('uh7');?></span>
						<span>8 - <?php echo carbon_get_theme_option('uh8');?></span>
						<span>9 - <?php echo carbon_get_theme_option('uh9');?></span>
						<span>10 - <?php echo carbon_get_theme_option('uh10');?></span>
						<span>11 - <?php echo carbon_get_theme_option('uh11');?></span>
						<span>12 - <?php echo carbon_get_theme_option('uh12');?></span>
						<span>13 - <?php echo carbon_get_theme_option('uh13');?></span>
						<span>14 - <?php echo carbon_get_theme_option('uh14');?></span>
						<span>15 - <?php echo carbon_get_theme_option('uh15');?></span>
						<span>16 - <?php echo carbon_get_theme_option('uh16');?></span>
						<span>17 - <?php echo carbon_get_theme_option('uh17');?></span>
						<span>18 - <?php echo carbon_get_theme_option('uh18');?></span>
						<span>19 - <?php echo carbon_get_theme_option('uh19');?></span>
						<span>20 - <?php echo carbon_get_theme_option('uh20');?></span>
						<span>21 - <?php echo carbon_get_theme_option('uh21');?></span>
						<span>22 - <?php echo carbon_get_theme_option('uh22');?></span>
						<span>23 - <?php echo carbon_get_theme_option('uh23');?></span>
						<span>24 - <?php echo carbon_get_theme_option('uh24');?></span>
						<span>25 - <?php echo carbon_get_theme_option('uh25');?></span>
						<span>26 - <?php echo carbon_get_theme_option('uh26');?></span>
						<span>27 - <?php echo carbon_get_theme_option('uh27');?></span>
						<span>28 - <?php echo carbon_get_theme_option('uh28');?></span>
						<span>29 - <?php echo carbon_get_theme_option('uh29');?></span>
						<span>30 - <?php echo carbon_get_theme_option('uh30');?></span>
						<span>31 - <?php echo carbon_get_theme_option('uh31');?></span>
						<span>32 - <?php echo carbon_get_theme_option('uh32');?></span>
						<span>33 - <?php echo carbon_get_theme_option('uh33');?></span>
						<span>34 - <?php echo carbon_get_theme_option('uh34');?></span>
						<span>35 - <?php echo carbon_get_theme_option('uh35');?></span>
						<span>36 - <?php echo carbon_get_theme_option('uh36');?></span>
						<span>37 - <?php echo carbon_get_theme_option('uh37');?></span>
						<span>38 - <?php echo carbon_get_theme_option('uh38');?></span>
						<span>39 - <?php echo carbon_get_theme_option('uh39');?></span>
						<span>40 - <?php echo carbon_get_theme_option('uh40');?></span>
						<span>41 - <?php echo carbon_get_theme_option('uh41');?></span>
						<span>42 - <?php echo carbon_get_theme_option('uh42');?></span>
						<span>43 - <?php echo carbon_get_theme_option('uh43');?></span>
						<span>44 - <?php echo carbon_get_theme_option('uh44');?></span>
						<span>45 - <?php echo carbon_get_theme_option('uh145');?></span>
						<span>46 - <?php echo carbon_get_theme_option('uh46');?></span>
						<span>47 - <?php echo carbon_get_theme_option('uh47');?></span>
						<span>48 - <?php echo carbon_get_theme_option('uh48');?></span>
						<span>49 - <?php echo carbon_get_theme_option('uh49');?></span>
						<span>50 - <?php echo carbon_get_theme_option('uh50');?></span>
						<span>51 - <?php echo carbon_get_theme_option('uh51');?></span>
						<span>52 - <?php echo carbon_get_theme_option('uh52');?></span>
						<span>53 - <?php echo carbon_get_theme_option('uh53');?></span>
						<span>54 - <?php echo carbon_get_theme_option('uh54');?></span>
						<span>55 - <?php echo carbon_get_theme_option('uh55');?></span>
						<span>56 - <?php echo carbon_get_theme_option('uh56');?></span>
						<span>57 - <?php echo carbon_get_theme_option('uh57');?></span>
						<span>58 - <?php echo carbon_get_theme_option('uh58');?></span>
						<span>59 - <?php echo carbon_get_theme_option('uh59');?></span>
						<span>60 - <?php echo carbon_get_theme_option('uh60');?></span>
						<span>61 - <?php echo carbon_get_theme_option('uh61');?></span>
						<span>62 - <?php echo carbon_get_theme_option('uh62');?></span>
						<span>63 - <?php echo carbon_get_theme_option('uh63');?></span>
						<span>64 - <?php echo carbon_get_theme_option('uh64');?></span>
						<span>65 - <?php echo carbon_get_theme_option('uh65');?></span>
						<span>66 - <?php echo carbon_get_theme_option('uh66');?></span>
						<span>67 - <?php echo carbon_get_theme_option('uh67');?></span>
						<span>68 - <?php echo carbon_get_theme_option('uh68');?></span>
						<span>69 - <?php echo carbon_get_theme_option('uh69');?></span>
						<span>70 - <?php echo carbon_get_theme_option('uh70');?></span>
						<span>71 - <?php echo carbon_get_theme_option('uh71');?></span>
						<span>72 - <?php echo carbon_get_theme_option('uh72');?></span>
						<span>73 - <?php echo carbon_get_theme_option('uh73');?></span>
						<span>74 - <?php echo carbon_get_theme_option('uh74');?></span>
						<span>75 - <?php echo carbon_get_theme_option('uh75');?></span>
						<span>76 - <?php echo carbon_get_theme_option('uh76');?></span>
						<span>77 - <?php echo carbon_get_theme_option('uh77');?></span>
						<span>78 - <?php echo carbon_get_theme_option('uh78');?></span>
						<span>79 - <?php echo carbon_get_theme_option('uh79');?></span>
						<span>80 - <?php echo carbon_get_theme_option('uh80');?></span>
						<span>81 - <?php echo carbon_get_theme_option('uh81');?></span>
						<span>82 - <?php echo carbon_get_theme_option('uh82');?></span>
						<span>83 - <?php echo carbon_get_theme_option('uh83');?></span>
						<span>84 - <?php echo carbon_get_theme_option('uh84');?></span>
						<span>85 - <?php echo carbon_get_theme_option('uh85');?></span>
						<span>86 - <?php echo carbon_get_theme_option('uh86');?></span>
						<span>87 - <?php echo carbon_get_theme_option('uh87');?></span>
						<span>88 - <?php echo carbon_get_theme_option('uh88');?></span>
						<span>89 - <?php echo carbon_get_theme_option('uh89');?></span>
						<span>90 - <?php echo carbon_get_theme_option('uh90');?></span>
						<span>91 - <?php echo carbon_get_theme_option('uh91');?></span>
						<span>92 - <?php echo carbon_get_theme_option('uh92');?></span>
						<span>93 - <?php echo carbon_get_theme_option('uh93');?></span>
						<span>94 - <?php echo carbon_get_theme_option('uh94');?></span>
						<span>95 - <?php echo carbon_get_theme_option('uh95');?></span>
						<span>96 - <?php echo carbon_get_theme_option('uh96');?></span>
						<span>97 - <?php echo carbon_get_theme_option('uh97');?></span>
						<span>98 - <?php echo carbon_get_theme_option('uh98');?></span>
						<span>99 - <?php echo carbon_get_theme_option('uh99');?></span>
						<span>100 - <?php echo carbon_get_theme_option('uh100');?></span>
					</div>
					<a href="#" class="list-person-show btn btn-dark-pink">Показать всех участников</a>

				</section>

				<section class = "fqu faq-page">
					<h2 class = "page-title">О Розыгрыше в деталях</h2>
					<?php echo wpautop( carbon_get_theme_option('auto_action') );?>
					<!--
					<h2>1) Кто может участвовать в розыгрыше?</h2>
					Любой клиент совершивший заказ в нашем магазине. (статус оплаты Вашего заказа должен быть “оплачено”). 
					  Пояснение: Если Вы сделали сегодня заказ, и оплатили его картой, то Вы можете участвовать в конкурсе сразу же. Если вы сделали заказ сегодня, но выбрали способ оплаты “при получении”, то Вы сможете участвовать в конкурсе только после выкупа Вашего заказа.

					<h2>2) Как мне узнать номер моего заказа?</h2> 
					Мы отправляем номер Вашего заказа в СМС-ке после отгрузки Вашего заказа в транспортнуюу компанию. 
					Так же Вы можете написать или позвонить нам и уточнить номер Вашего заказа.

					<h2>3) Что и куда я должен отправить чтобы участвовать в конкурсе?</h2>
					Вам необходимо отправить к нам на почту info@elisyamba.ru  номер Вашего заказа, а также ФИО ( на кого был сделан заказ) или номер телефона. Это необходимо для проведения проверки. Мы сверяем Ваши данные с данными из нашей системы. Чтобы не было никакого обмана :)

					<h2>4) Я отправил свои ФИО и номер заказа, но меня нет в списке. Почему?</h2>
					Мы проверяем все письма отправленные к нам на почту в течение 48 часов. Мы сверяем Ваши данные с данными системы. На Вашу почту мы присылаем ответ.

					<h2>5) Сколько раз я могу участвовать в конкурсе?</h2>
					На каждый совершенный Вами заказ мы выдаем от 1 купона на участие в розыгрыше. Купоны одноразовые.
					При покупке 
					до 6 000 руб. - 1 купон 
					от 6 000 до 9 000 руб. - 2 купона 
					от 9 000 руб. - 3 купона 
					(учитывается только стоимость товара, стоимость доставки не учитывается)
					-->

									</section>
			</section>
			
<!--
																<section class = "fqu faq-page">
					<h2>1) Кто может участвовать в розыгрыше?</h2>
Любой клиент совершивший заказ в нашем магазине. (статус оплаты Вашего заказа должен быть “оплачено”). 
  Пояснение: Если Вы сделали сегодня заказ, и оплатили его картой, то Вы можете участвовать в конкурсе сразу же. Если вы сделали заказ сегодня, но выбрали способ оплаты “при получении”, то Вы сможете участвовать в конкурсе только после выкупа Вашего заказа.

<h2>2) Как мне узнать номер моего заказа?</h2> 
Мы отправляем номер Вашего заказа в СМС-ке после отгрузки Вашего заказа в транспортнуюу компанию. 
Так же Вы можете написать или позвонить нам и уточнить номер Вашего заказа.

<h2>3) Что и куда я должен отправить чтобы участвовать в конкурсе?</h2>
Вам необходимо отправить к нам на почту info@elisyamba.ru  номер Вашего заказа, а также ФИО ( на кого был сделан заказ) или номер телефона. Это необходимо для проведения проверки. Мы сверяем Ваши данные с данными из нашей системы. Чтобы не было никакого обмана :)

<h2>4) Я отправил свои ФИО и номер заказа, но меня нет в списке. Почему?</h2>
Мы проверяем все письма отправленные к нам на почту в течение 48 часов. Мы сверяем Ваши данные с данными системы. На Вашу почту мы присылаем ответ.

<h2>5) Сколько раз я могу участвовать в конкурсе?</h2>
На каждый совершенный Вами заказ мы выдаем от 1 купона на участие в розыгрыше. Купоны одноразовые.
 При покупке до 5 000 руб.  - 1 купон
 от 5 000 до 8 000 руб.  - 2 купона
 от 8 000 до 11 000 руб.  - 3 купона
 от 11 000 руб.  - 4 купона
(учитывается только стоимость товара, стоимость доставки не учитывается)
Вывод: Чем больше Вы покупаете - тем больше шансов выиграть в конкурсе

				</section> -->



			        </div>
	    </div>
</main>

<?php get_footer();?>