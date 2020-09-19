<?php
/*
Template Name: Контакты
*/
?>
<?php get_header(); ?>

<main>
    <div class="wrapper">
        <?php include ("baner-timer.php"); ?>
        <?php include ("show-960.php"); ?>
            
		<div class="clearfix d-flex-main">
            
			<?php get_sidebar("left"); ?>                

			<section class="page-content contacts-page page-content-arial">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h1><?php the_title();?></h1>
					<?php the_content();?>
					
					<?php $options = get_option( 'wpuniq_theme_options' ); ?>
					<div>
					<div class="contacts">
						<div class="icon-block">
							<i class="icon"></i>
						</div>
						<ul>
							<li>
								<p>Звоните в любой день с <span>9:00</span> до <span>21:00</span> по Московскому времени</p>
								<p>Заказывайте через сайт в любое время суток!</p>
							</li>
							
							<li class="contacts-phone">
								<p class="contacts-phone-region">Бесплатный звонок по России</p>
								<p class="contacts-phone-number"><a style = "color: initial; text-decoration: none;" href = "tel:<?php echo $options[phoneLnk]; ?>"><?php echo $options[phoneViev]; ?></a></p>
							</li>
							<li><a href="#callback-form" class="btn btn-dark-pink lightbox fancybox-callback" style="width: 162px">Позвонить вам?</a></li>
						</ul>
					</div>
					<ul class="contacts-internet">
						<li>
							<div class="icon-block">
								<i class="icon email"></i>
							</div>
							<div class="contacts-internet-block">
								<p>E-mail для клиентов:</p>
								<p><a href="mailto:<?php echo $options[mail]; ?>"><?php echo $options[mail]; ?></a></p>
							</div>
							
							
							<br/>
							<br/>
							<br/>
							<br/>
							<div class="icon-block">
								<i class="icon email"></i>
							</div>
							
							<div class="contacts-internet-block">
								<p>E-mail для сотрудничества:</p>
								<p><a href="mailto:<?php echo $options[maildir]; ?>"><?php echo $options[maildir]; ?></a></p>
							</div>
							<br/>
							
							<div class="contacts-internet-block contacts-internet-block-online">
							<strong>Он-лайн связь через</strong> <br/>WhatsApp, Telegram или Viber<br/>

							<div class = "socialIcon">
								<img src = "<?php bloginfo("template_url");?>/img/viberIcon.svg">
								<img src = "<?php bloginfo("template_url");?>/img/whatsappIcon.png">
								<img src = "<?php bloginfo("template_url");?>/img/telegram.svg">
							</div>
							<br/>
							пишите на номер телефона <br/>+7 (930) 857-78-44<br/>
							</div>
						</li>
						
					</ul>
				</div>
				
				<section class="adress">
					<div class="h6">
						<div class="icon-block">
							<i class="icon"></i>
						</div>
						<h6>Наш адрес и реквизиты</h6>
					</div>
					<ul>
						<li><?php echo $options[ipe]; ?></li>
						
						<li>ИНН: <?php echo $options[inn]; ?></li>
						<li>ОГРН: <?php echo $options[ogrn]; ?></li>
						<li>Адрес: <?php echo $options[adres]; ?></li>
						<li><span style = "color:red;">Важно:</span> Пожалуйста позвоните нам перед тем как приехать</li>
					</ul>
					<div class="map">
						<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4107bacf422ef104fb507e6b94eb7201cd15d4a058fe35b3a842ea072bf26376&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
				</section>
				
				<?php endwhile;?>
				<?php endif; ?>
			</section>
        </div>
    </div>
</main>
	
<?php get_footer(); ?>