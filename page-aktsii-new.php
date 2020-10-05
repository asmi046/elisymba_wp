<?php
/*
Template Name: Акции (NEW)
*/
?>
<?php get_header(); ?>

<main>
    <div class="wrapper">
        <?php include ("baner-timer.php"); ?>
            
		<div class="clearfix d-flex-main">
            
			<?php 
				require_once 'Mobile_Detect.php';
				$detect = new Mobile_Detect;
				
				// if( !$detect->isMobile() ){
				// 	if ($_REQUEST["nh"] != 1)
				// 		get_sidebar("left"); 
				// }

			?>               

			<section class="page-content howto-page page-content-arial page-content-full">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h1><?php the_title();?></h1>
					<?php the_content();?>
					
					<?php $options = get_option( 'wpuniq_theme_options' ); ?>
					
				
					<div class="action-item">
						<h2 class="action-item__title"> К каждому заказу подарки</h2>
						<div class="action-item__img-wrapper">
							<img src="<?php echo get_template_directory_uri();?>/img/actions/presents.png" alt="">
						</div>
						<div class="action-item__text">
							<p>Делая заказ у нас Вы принимаете участие в беспроигрышной лотерее и получаете возможность выйграть один из <a href = "https://xn--80ablmoh8a2h.xn--p1ai/prizy-rozygrysha/">развивающих призов</a>. Вы гарантированно получаете подарок к каждому заказу.</p>
							<!--<p>Делая заказ у нас Вы получайте развивающий подарок на выбор, из представленных на баннере сайта. </p>-->
						</div>
					</div>
					<div class="action-item">
						<h2 class="action-item__title"> Скидки до 50%</h2>
						<div class="action-item__img-wrapper">
							<img src="<?php echo get_template_directory_uri();?>/img/actions/sales.png" alt="">
						</div>
						<div class="action-item__text">
							<p>Покупайте игрушки со скидкой 50%</p>
						</div>
					</div>
					<div class="action-item">
						<h2 class="action-item__title"> Благодарность за отзывы</h2>
						<div class="action-item__img-wrapper">
							<img src="<?php echo get_template_directory_uri();?>/img/actions/reviews.jpg" alt="">
						</div>
						<div class="action-item__text">
							<p>После того, как Вы получите заказ, мы пришлем Вам сообщение с просьбой оставить отзыв в группе ВКонтакте и на Яндекс Маркете. За каждый отзыв мы положим 50 руб. Вам на телефон.</p>
						</div>
					</div>
					<div class="action-item">
						<h2 class="action-item__title"> 500 руб. за рекомендацию</h2>
						<div class="action-item__img-wrapper">
							<img src="<?php echo get_template_directory_uri();?>/img/actions/recommend.jpg" alt="">
						</div>
						<div class="action-item__text">
							<p>Если по Вашей рекомендации у нас совершают покупку от 3000 руб., то Вы получаете 500 руб. на карту или телефон.</p>
						</div>
						<div class="action-item">
						<h2 class="action-item__title">Розыгрыш магнитного конструктора</h2>
						<div class="action-item__img-wrapper">
							<img src="<?php echo get_template_directory_uri();?>/img/actions/constructor.jpg" alt="">
						</div>
						<div class="action-item__text">
							<p>Сделайте заказ и получите шанс выиграть крутой магнитный конструктор</p>
						</div>
						<a href="<?php echo get_the_permalink(6895);?>" class="action-item__btn">Подробнее</a>
					</div>
					</div>
				<?php endwhile;?>
				<?php endif; ?>
			</section>
        </div>
    </div>
</main>
	
<?php get_footer(); ?>