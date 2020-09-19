<?php
/*
Template Name: Акции
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
					<?php the_content();?>
					
					<?php $options = get_option( 'wpuniq_theme_options' ); ?>
 
			
					<article>
						<div class="howto-page-article-left saleMain">
							<p><i class="icon"></i></p>
						</div>
						<div class="howto-page-article-right">
							<div>
								<h5>Скидка!</h5>
								<p>У нас действует невероятная скидка до 50% ищите товары с максимальной выгодой!</p>
							</div>
						</div>
					</article>
					<article>
						<div class="howto-page-article-left podarkiMain">
							<p><i class="icon"></i></p>
						</div>
						<div class="howto-page-article-right">
							<div>
								<h5>Подарки! </h5>
								<p>Получите целых 2 подарка</p>
								<ul>
								<li>К каждому заказу мы дарим Игрушку познавательные фигуры</li>
								</ul>
								<p>А при заказе от 7 500 руб. Вы получаете 2 подарка:</p>
								<ul>
									<li>Игрушка познавательные фигуры</li>
									<li>Мягкие пазлы "Теремок"</li>
								</ul>
								

							</div>
						</div>
					</article>
					<!--
					<article>
						<div class="howto-page-article-left cbMain">
							<p><i class="icon"></i></p>
						</div>
						<div class="howto-page-article-right">
							<div>
								<h5>Кэшбэк за фото-отзыв!</h5>
								<p>Мы возвращаем 3% от стоимости товара на телефон за Ваш фото-отзыв, отправленный в мессенджере.</p>
							</div>
						</div>
					</article>
					
					<article>
						<div class="howto-page-article-left onlineMain">
							<p><i class="icon"></i></p>
						</div>
						<div class="howto-page-article-right">
							<div>
								<h5>Благодарность за онлайн-оплату! Доп скидка 3%</h5>
								<p>Если Вы сделаете онлайн-оплату, то Вам не придется платить комиссионные почте за перевод денег. И мы даем Вам дополнительную скидку в 3% на весь заказ. Очень выгодно!</p>
							</div>
						</div>
					</article>
					-->

				<?php endwhile;?>
				<?php endif; ?>
			</section>
        </div>
    </div>
</main>
	
<?php get_footer(); ?>