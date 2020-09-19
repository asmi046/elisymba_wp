<?php

/*
Template Name: Оформление заказа
*/

?>
<?php get_header(); ?>


<main>
    <div class="wrapper">
        <?php include ("baner-timer.php"); ?>
        <?php include ("show-960.php"); ?>
            
		<div class="clearfix d-flex-main">
            
			<?php get_sidebar("left"); ?>                
			<!-- Не переносить в стили-->
			<style>
				.bascetWriper{
					display:none;
				}
			</style>
			
			<section id = "scrollToH" class="page-content page-bascet-checaut">
					<div class="breadcrumbs"  itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
			        	<?php
						if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb('','');
						}
						?>							
					</div>
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', ' <span class = "steps">Шаг 2 из 2</span></h1>' ); ?>
					</header><!-- .entry-header -->
					<form action="" class="checkout-form" method="post" id="checkout-form">
						<div class="checkout-form__block">
							<label for="checkout-form__name">Ваше Имя <span>*</span></label>
							<input type="text" required name="name" id="checkout-form__name" placeholder="Имя *" class="checkout-form__name">
							<div class="checkout-form__block-checked"></div>
							<div class="checkout-form__block-wrong"></div>
						</div>
						<div class="checkout-form__block">
							<label for="checkout-form__phone">Ваш Телефон <span>*</span></label>
							<input type="tel" class = "mascedphoneclass" required name="phone" placeholder="Телефон *" pattern="^((8|\+7)[\-]?)?(\(?\d{3}\)?[\-]?)?[\d\-]{7,10}$" id="checkout-form__phone">
							<div class="checkout-form__block-checked"></div>
							<div class="checkout-form__block-wrong"></div>
						</div>
						<div class="checkout-form__block">
							<label for="checkout-form__email">Электронная почта</label>
							<input type="email" placeholder="Email" required name="email" id="checkout-form__email">
							<div class="checkout-form__block-checked"></div>
						</div>
						
						<div class="checkout-form__block">
							<label for="checkout-form__address">Адрес</label>
							<input type="text" placeholder="Адрес" name="address" id="checkout-form__address">
							<div class="checkout-form__block-checked"></div>
						</div>
						
						<!--
						<div class="checkout-form__block">
							<label for="checkout-form__delivery">Способ доставки</label>
							<select name="delivery" id="checkout-form__delivery">
								<option value="" selected disabled>Выберите способ доставки</option>
								<option value="Доставка до пункта выдачи">Доставка до пункта выдачи</option>
								<option value="Доставка курьером до дома">Доставка курьером до дома</option>
								<option value="Самовывоз">Самовывоз</option>
							</select>
							<div class="checkout-form__block-checked"></div>
						</div>
						-->
						<p class = "odostavke">
							Доставка от 150 руб. по России
						</p>
						
						
						<div class="checkout-form__block">
							<label for="checkout-form__comment">Комментарий</label>
							<textarea name="comment" placeholder="Комментарий" id="checkout-form__comment" cols="30" rows="10"></textarea>
							<div class="checkout-form__block-checked"></div>
						</div>
						
											<?php 				
					
						if (!empty($_COOKIE["bascet"]))
						{
							
							$bascetsod = explode(",", $_COOKIE["bascet"]);	
							$postInBascet = "";
							foreach ($bascetsod as $be) {
								$elempart = explode("|", $be);	
								$postInBascet .= $elempart[0]." "; 
								$elems[$elempart[0]] = $elempart[1]; 
							}
						
						
							$pinclude = get_posts( array ("include" => $postInBascet) );
					
							$summ = 0;
							$bscetcount = 0;
							foreach ($pinclude as $pe)				
							{
								$summ += $elems[$pe->ID]*get_post_meta($pe->ID, "price", true);
								$bscetcount+=$elems[$pe->ID];
							}							
						}
					?>
						
						<div class="checkout-form__block-submit">
							<div class="checkout-form__block-submit-total"><span>Итого <span class="checkout-form__block-submit-qty"><?php echo $bscetcount; ?></span> товар на сумму <span class="checkout-form__block-submit-summ"><?php echo $summ; ?></span> руб.</span></div>
							<div class="checkout-form__block-submit-btn oformlenieZak" onclick="yaCounter48236084.reachGoal('oform_zakaz_konec');" >Оставить заявку</div>
						</div>
					</form>
			</section>
        </div>
    </div>
</main>
	
<?php get_footer(); ?>
