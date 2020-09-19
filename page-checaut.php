<?php
/*
Template Name: Страница оформления заказа
*/
?>
<?php get_header(); ?>

<main>
    <div class="wrapper">
        <?php include ("baner-timer.php"); ?>
        <?php include ("show-960.php"); ?>
            
		<div class="clearfix d-flex-main">
            
			<?php get_sidebar("left"); ?>                

			<section class="page-content">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h1 style = "display:none;"><?php the_title();?></h1>
					<?php the_content();?>
					
					<?php
						
						if (empty($_REQUEST["Order"]["client_name"])) {
							echo "<h2>Нет данных для оформления заказа!</h2>";
						} else {
							/*
							$headers = array(
								'From: Сайт Елисямба <noreply@elisyamba.ru>',
								'content-type: text/html',
							);
						
							$message = "<h1>На сайте оформлен новый заказ:</h1>";
							$message .= "<strong>Наименование товара: </strong>".$_REQUEST["Order"]["product_title"]."<br/>";
							$message .= "<strong>ID товара: </strong><a target = '_blank' href = '".get_the_permalink($_REQUEST["Order"]["post_id"])."'>".$_REQUEST["Order"]["product_id"]."</a><br/>";
							$message .= "<strong>Цена: </strong>".$_REQUEST["Order"]["product_price"]."<br/>";
							//$message .= "<strong>Время оформления: </strong>".date("d.m.Y h:i", (int)($_REQUEST["Order"]["client_time"]/1000))."<br/><br/>";
							$message .= "<strong>Время оформления: </strong>".date("d.m.Y H:i", strtotime("+3 hours"))."<br/><br/>";
							$message .= "<strong>Имя клиента: </strong>".$_REQUEST["Order"]["client_name"]."<br/>";
							$message .= "<strong>Телефон клиента: </strong>".$_REQUEST["Order"]["client_tel"]."<br/><br/>";
							$message .= "<h2>Комментарий к заказу: </h2>";
							$message .= $_REQUEST["Order"]["client_comment"];
						
							add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
							if (wp_mail(array('elisyamba@yandex.ru','asmi046@gmail.com', 'rabota221246@yandex.ru', 'Rabota221246@yandex.ru'), 'Заказ на сайте Elisyamba', $message, $headers))
							{ 
								echo "<p style = 'color:green;font-size:3em'>Ваш заказ принят. Мы свяжемся с Вами в ближайшее время.</p>";
							}
							else { 
								echo "<p style = 'color:red;'>Произошла техническая ошибка. Попробуйте оформить заказ позднее!</p>";
							}
							*/
						}
					?>
					
				<?php endwhile;?>
				<?php endif; ?>
				
						<h1 class="int tac" style="margin-bottom: 25px">С Вашим товаром часто покупают:</h1>
						<div class="clearfix">
							<?php
											
											$category = get_the_category($_REQUEST["Order"]["post_id"]);						
											//print_r($category);
											
											$catsSerch = "3, 20, 25, 21, 20";
											if ($category[0]->term_id == 3) $catsSerch = "-3, 20, 25, 21, 22";
											if ($category[0]->term_id == 20) $catsSerch = "3, -20, 25, 21, 22";
											if ($category[0]->term_id == 25) $catsSerch = "3, 20, -25, 21, 22";
											if ($category[0]->term_id == 21) $catsSerch = "3, 20, 25, -21, 22";
											if ($category[0]->term_id == 22) $catsSerch = "3, 20, 25, 21, -22";
												
											
											$args = array(
														'numberposts' => 30,
														'category'    => $catsSerch,
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