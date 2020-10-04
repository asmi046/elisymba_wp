<?php
/*
Template Name: Страница оформления заказа - корзина
*/
?>
<?php get_header("thencs"); ?>

<main>

	
	
	<div class="wrapper">
        <?php include ("baner-timer.php"); ?>
            
		<div class="clearfix d-flex-main">
                     

			<section class="page-content page-content-full">

					<p style = 'color:green;font-size:3em'>Ваш заказ принят. Мы свяжемся с Вами в ближайшее время.</p>
					
					<a href="#" class="button present-modal">Получить подарок</a>
					
					<a onclick="ipayCheckout({
												amount:<?php echo $_REQUEST["summ"]; ?>,
												currency:'RUB',
												order_number:'<?php echo $_REQUEST["innerid"]; ?>',
												description: 'Оплата за заказ <?php echo $_REQUEST["innerid"]; ?>'},
												function(order) { showSuccessfulPurchase(order) },
												function(order) { showFailurefulPurchase(order) })"
						 
						class="btn btn-pink grnbtn btn-xs btn-outline btn-primary btn-pay">Оплатить заказ</a>
				
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