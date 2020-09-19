<?php
/*
Template Name: Как сделать заказ
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
 
					<p class="pink-text">Вы можете сделать заказ в нашем магазине несколькими способами</p>
					<article>
						<div class="howto-page-article-left order">
							<p>Заказать</p>
						</div>
						<div class="howto-page-article-right ">
							<div>
								<h5>Нажмите кнопку «Заказать» рядом с понравившимся товаром</h5>
								<p>В появившемся окне введите номер телефона. Через 20-30 минут наш сотрудник свяжется с Вами, чтобы обсудить все детали (адрес, сроки, оплату и т.п.)</p>
							</div>
						</div>
					</article>
					<article>
						<div class="howto-page-article-left phone">
							<p><i class="icon"></i></p>
						</div>
						<div class="howto-page-article-right">
							<div>
								<h5>Оформите заказ по телефону</h5>
								<p>В появившемся окне введите свой номер телефона, и наш сотрудник Вам позвонит.</p>
							</div>
						</div>
					</article>
					<article>
						<div class="howto-page-article-left call-you">
							<p>Позвонить<br>вам?</p>
						</div>
						<div class="howto-page-article-right">
							<div>
								<h5>Нажмите «Позвонить вам?» вверху сайта</h5>
								<p>Позвоните по номеру <?php echo $options[phoneViev]; ?> (звонок для всей России бесплатный)</p>
							</div>
						</div>
					</article>
					<article>
						<div class="howto-page-article-left email">
							<p><i class="icon"></i></p>
						</div>
						<div class="howto-page-article-right">
							<div>
								<h5>Напишите нам на электронную почту</h5>
								<p><a href="mailto:i<?php echo $options[mail]; ?>"><?php echo $options[mail]; ?></a></p>
							</div>
						</div>
					</article>


				<?php endwhile;?>
				<?php endif; ?>
			</section>
        </div>
    </div>
</main>
	
<?php get_footer(); ?>