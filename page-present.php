<?php
/*
Template Name: Призы розыгрыша
*/
?>
<?php get_header(); ?>

<main>
    <div class="wrapper">
        <?php include ("baner-timer.php"); ?>
        <?php include ("show-960.php"); ?>
            
		<div class="clearfix d-flex-main">
            
			<?php get_sidebar("left"); ?>                

			<section class="page-content howto-page page-content-arial">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h1><?php the_title();?></h1>
					<div class="present-content">
					<?php the_content();?>
					</div>
					
					<?php $options = get_option( 'wpuniq_theme_options' ); ?>
					<div class="presents-page__wrapper">
						<!-- Бизиборд Большая развивайка -->
						<div class="presents-page__item">
							<div class="present-modal__present present-modal__present_mini vip_present-modal__present_mini" style="display: block;">
								<a href = "https://елисямба.рф/bolshaya-razvivajka-so-svetom-i-muzykoj/">
									<div class="present-modal__present-wrap">
										<div class = "present-modal__present-img" style="background-image: url(<?php echo get_template_directory_uri();?>/img/gift/page_B260.1.jpg);"> </div>
										<!-- <a href="<?php echo get_template_directory_uri();?>/img/gift/page_B260.1.jpg" class="present-modal__present-img fancybox" style="background-image: url(<?php echo get_template_directory_uri();?>/img/gift/page_B260.1.jpg);"></a>-->
									</div>
								</a>
							</div>
								<div class="presents-page__qty">3 шт.</div>
								
						</div>
						<!-- Пособие Кубики Зайцева, 61 шт. -->
						<div class="presents-page__item">
							<div class="present-modal__present present-modal__present_mini vip_present-modal__present_mini" style="display: block;">
								<a href = "https://елисямба.рф/kubiki-zajceva-61-sht/">
									<div class="present-modal__present-wrap">
										<div class = "present-modal__present-img" style="background-image: url(<?php echo get_template_directory_uri();?>/img/gift/page_DK59.1.jpg);"> </div>
									</div>
								</a>
							</div>
								<div class="presents-page__qty">5 шт.</div>
								
						</div>
						<!-- Бизидом "Я умею" 30х30х40 см -->
						<div class="presents-page__item">
							<div class="present-modal__present present-modal__present_mini vip_present-modal__present_mini" style="display: block;">
								<a href = "https://елисямба.рф/bizidom-ya-umeyu-30x30x40-sm/">
									<div class="present-modal__present-wrap">
										<div class = "present-modal__present-img" style="background-image: url(<?php echo get_template_directory_uri();?>/img/gift/page_B535.1.jpg);"> </div>
										
									</div>
								</a>
							</div>
								<div class="presents-page__qty">10 шт.</div>
								
						</div>
						<!-- Конструктор Магникон МК-68 «Электропоезд» -->
						<div class="presents-page__item">
							<div class="present-modal__present present-modal__present_mini vip_present-modal__present_mini" style="display: block;">
								<a href = "https://елисямба.рф/konstruktor-magnikon-mk-68-elektropoezd/">
									<div class="present-modal__present-wrap">
										<div class = "present-modal__present-img" style="background-image: url(<?php echo get_template_directory_uri();?>/img/gift/page_KM09.1.jpg);"> </div>
									</div>
								</a>
							</div>
								<div class="presents-page__qty">15 шт.</div>
								
						</div>
						<!-- Вундеркинд с пеленок "Мегачемодан" -->
						<div class="presents-page__item">
							<div class="present-modal__present present-modal__present_mini vip_present-modal__present_mini" style="display: block;">
								<a href = "https://елисямба.рф/podarochnyj-nabor-vunderkind-s-pelenok-megachemodan/">
									<div class="present-modal__present-wrap">
										<div class = "present-modal__present-img" style="background-image: url(<?php echo get_template_directory_uri();?>/img/gift/page_Kd60.1.jpg);"> </div>
									</div>
								</a>
							</div>
								<div class="presents-page__qty">20 шт.</div>
								
						</div>
						<!-- Детское пианино с микрофоном и стульчиком -->
						<div class="presents-page__item">
							<div class="present-modal__present present-modal__present_mini vip_present-modal__present_mini" style="display: block;">
								<a href = "https://елисямба.рф/elektropianino-s-funkciej-zapisi-7-ton/">
									<div class="present-modal__present-wrap">
										<div class = "present-modal__present-img" style="background-image: url(<?php echo get_template_directory_uri();?>/img/gift/page_MI10.1.jpg);"> </div>
									</div>
								</a>
							</div>
								<div class="presents-page__qty">25 штук</div>
								
						</div>
						<!-- Коврик-пазл ортопедический Микс Универсальный -->
						<div class="presents-page__item">
							<div class="present-modal__present present-modal__present_mini vip_present-modal__present_mini" style="display: block;">
								<a href = "https://елисямба.рф/kovrik-pazl-sharlotka-zemlyanichka-8-segmentov-2/">
									<div class="present-modal__present-wrap">
										<div class = "present-modal__present-img" style="background-image: url(<?php echo get_template_directory_uri();?>/img/gift/page_KOV32.1.jpg);"> </div>
									</div>
								</a>
							</div>
								<div class="presents-page__qty">30 шт.</div>
								
						</div>
						<!-- Деревянный сортер Веселые фигурки -->
						<div class="presents-page__item">
							<div class="present-modal__present present-modal__present_mini vip_present-modal__present_mini" style="display: block;">
								<a href = "https://елисямба.рф/derevyannyj-sorter-veselye-figurki/">
									<div class="present-modal__present-wrap">
										<div class = "present-modal__present-img" style="background-image: url(<?php echo get_template_directory_uri();?>/img/gift/page_Sor06.1.jpg);"> </div>
									</div>
								</a>
							</div>
								<div class="presents-page__qty">50 шт.</div>
								
						</div>
						<!-- Конструктор - каталка "Паровозик" 7 деталей -->
						<div class="presents-page__item">
							<div class="present-modal__present present-modal__present_mini vip_present-modal__present_mini" style="display: block;">
								<a href = "https://елисямба.рф/konstruktor-katalka-parovozik-7-detalej/">
									<div class="present-modal__present-wrap">
										<div class = "present-modal__present-img" style="background-image: url(<?php echo get_template_directory_uri();?>/img/gift/page_Kk01.1.jpg);"> </div>
									</div>
								</a>
							</div>
								<div class="presents-page__qty">75 шт.</div>
								
						</div>
						<!-- КОНСТРУКТОР "ГОРОД МАСТЕРОВ" СМЕШАР -->
						<div class="presents-page__item">
							<div class="present-modal__present present-modal__present_mini vip_present-modal__present_mini" style="display: block;">
								<a href = "https://елисямба.рф/?s=КОНСТРУКТОР+%22ГОРОД+МАСТЕРОВ%22+СМЕШАР">
									<div class="present-modal__present-wrap">
										<div class = "present-modal__present-img" style="background-image: url(<?php echo get_template_directory_uri();?>/img/gift/page_DK98.1.jpg);"> </div>
									</div>
								</a>
							</div>
								<div class="presents-page__qty">120 шт.</div>
								
						</div>
						<!-- Музыкальная книга "Бременские музыканты" -->
						<div class="presents-page__item">
							<div class="present-modal__present present-modal__present_mini vip_present-modal__present_mini" style="display: block;">
								<a href = "https://елисямба.рф/muzykalnaya-kniga-bremenskie-muzykanty-1-klav/">
									<div class="present-modal__present-wrap">
										<div class = "present-modal__present-img" style="background-image: url(<?php echo get_template_directory_uri();?>/img/gift/page_DK48.1.jpg);"> </div>
									</div>
								</a>
							</div>
								<div class="presents-page__qty">250 шт.</div>
								
						</div>
						
						<div class="presents-page__item">
							<div class="present-modal__present present-modal__present_mini vip_present-modal__present_mini" style="display: block;">
								
									<div class="present-modal__present-wrap">
										<div class = "present-modal__present-img" style="background-image: url(<?php echo get_template_directory_uri();?>/img/gift/page_2000.jpg);"> </div>
										<span  style = "text-align: center; margin: 3%;">Вы можете оплатить до 20% от стоимости следующей покупки</span>
									</div>
								
							</div>
								<div class="presents-page__qty">500 шт.</div>
								
						</div>

						<div class="presents-page__item">
							<div class="present-modal__present present-modal__present_mini vip_present-modal__present_mini" style="display: block;">
								
									<div class="present-modal__present-wrap">
										
										<div class = "present-modal__present-img" style="background-image: url(<?php echo get_template_directory_uri();?>/img/gift/page_1000.jpg);"> </div>
										<span style = "text-align: center; margin: 3%;">Вы можете оплатить до 20% от стоимости следующей покупки</span>
									</div>
								
							</div>
								<div class="presents-page__qty">1000 шт.</div>
								
						</div>

						<div class="presents-page__item">
							<div class="present-modal__present present-modal__present_mini vip_present-modal__present_mini" style="display: block;">
								
									<div class="present-modal__present-wrap">
										<div class = "present-modal__present-img" style="background-image: url(<?php echo get_template_directory_uri();?>/img/gift/page_500.jpg);"> </div>
										<span style = "text-align: center; margin: 3%;">Вы можете оплатить до 20% от стоимости следующей покупки</span>
									</div>
								
							</div>
								<div class="presents-page__qty">2500 шт.</div>
								
						</div>
						<!-- Сказки с наклейками -->
						<div class="presents-page__item">
							<div class="present-modal__present present-modal__present_mini vip_present-modal__present_mini" style="display: block;">
								<!-- <a href = "https://елисямба.рф/skazki-s-naklejkami/"> -->
									<div class="present-modal__present-wrap">
										<div class = "present-modal__present-img" style="background-image: url(<?php echo get_template_directory_uri();?>/img/gift/nakl.jpg);"> </div>
									</div>
								<!-- </a> -->
							</div>
								<div class="presents-page__qty">2500 шт.</div>
								
						</div>
						<!-- Раскраска Азбука сказок -->
						<div class="presents-page__item">
							<div class="present-modal__present present-modal__present_mini vip_present-modal__present_mini" style="display: block;">
									<div class="present-modal__present-wrap">
										<div class = "present-modal__present-img" style="background-image: url(<?php echo get_template_directory_uri();?>/img/gift/page_r.jpg);"> </div>
									</div>
							</div>
								<div class="presents-page__qty">13000 шт.</div>
								
						</div>
						<!-- Мыльные пузыри -->
						<div class="presents-page__item">
							<div class="present-modal__present present-modal__present_mini vip_present-modal__present_mini" style="display: block;">
									<div class="present-modal__present-wrap">
										<div class = "present-modal__present-img" style="background-image: url(<?php echo get_template_directory_uri();?>/img/gift/puziri.jpg);"> </div>
									</div>
							</div>
								<div class="presents-page__qty">10400 шт.</div>
								
						</div>
					</div>
					<div class="btn-wrap">
						<a href="<?php echo home_url();?>" class="btn btn-pink">На главную</a>
					</div>
				<?php endwhile;?>
				<?php endif; ?>
			</section>
        </div>
    </div>
</main>
	
<?php get_footer(); ?>