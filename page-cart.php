<?php
/*
Template Name: Корзина
*/

get_header();

?>

	<!-- Не переносить в стили-->
	<style>
		.bascetWriper{
			display:none;
		}
	</style>

	<script type="text/javascript" >
		jQuery(document).ready(function() {	
		
		var podarok1 = localStorage.getItem("lot1");
			
			if (podarok1 != null) {
				
				jQuery('.cart-item-newpdr .newpdr_img').attr("src", "<?php bloginfo("template_url"); ?>/img/gift/"+allTovar[podarok1].picture);
				
				
				jQuery('.present-modal__win, .present-modal__present').css("display","flex");
				
				jQuery('.present-modal__present_inbascet .present-modal__present-img').css("background-image", "url(<?php bloginfo("template_url"); ?>/img/gift/"+allTovar[podarok1].picture);
				jQuery('.present-modal__present_inbascet .present-modal__present-title').html(allTovar[podarok1].name);
				
				jQuery('.cart-item-newpdr .newpdr_name').html(allTovar[podarok1].name);
				jQuery('.cart-item-newpdr').show();
			}				
	
	
			jQuery('.cart-recommend').owlCarousel({
				items: 6,
				nav: true,
				navText: ['<span aria-label="Previous"></span>', '<span aria-label="Previous"></span>'],
				loop: true,
				responsive: {
					320: {
						items: 1,
					},
					400: {
						items: 2,
					},
					600: {
						items: 3,
					},
					750: {
						items: 4,
					},
					900: {
						items: 5,
					},
					1160: {
						items: 6,
					}
				}
			});

			//jQuery(".form-cart select").niceSelect();
			if(jQuery(window).width() > 964) {
				var height_product_name_qty_wrap = jQuery("td.product-thumbnail").height();
				jQuery('.product-name-price-qty__wrap').height(height_product_name_qty_wrap);
			}
			

			
		});
	</script>
	<div class="wrapper">
		
	<div id = "cityElem_top" class = "new_delivery_elem_top new_delivery_elem_top_mob">
								<?php 
									$city = $GLOBALS['city'];
								?>
								Ваш город: <br/><span class = "value city_sel_elem"><?php echo $city; ?></span>
								<div class = "city_vsp_vin" style = "display:<?php echo (!empty($_COOKIE["cwclose"]))?"none":"block";?>; <? echo ($detect->isMobile())?"display:none":"display:block";?>">
									<div class = "qq">Ваш город <span style = "city_in_win"><?php echo $city; ?></span>?</div>
									<div class = "qq_btn">
										<div class = "yes_no_btn yes_btn btn btn-pink" >Да, спасибо</div> <div class = "yes_no_btn no_btn btn btn-pink">Нет, другой</div>
									</div>
								</div>
			</div>
		
		<div class="breadcrumbs" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
        	<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('','');
			}
			?>							
		</div>
		<header class="entry-header ehh1">
			
		</header><!-- .entry-header -->	
	</div>
	 <div class="wrapper">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="cart-buttons__top">
			<div onclick="yaCounter48236084.reachGoal('prod_pokupki_str_korzina'); history.back(1);" class="cart-buttons__top-link-continue">Продолжить покупки</div>
			<!--<a href="<?php //echo get_the_permalink(7086); ?>/#scrollToH" class="cart-buttons__top-link-order" onclick="yaCounter48236084.reachGoal('oform_str_korzina');" >Оформить заказ</a>-->
		</div>
	</div> 
	<div class="wrapper">
		
		<?php 
			$rezstr = "";		
			if (!empty($_COOKIE["bascet"]))
			{
				
				$bascetsod = explode(",", $_COOKIE["bascet"]);	
				$postInBascet = "";
				foreach ($bascetsod as $be) {
					$elempart = explode("|", $be);	
					$postInBascet .= $elempart[0]." "; 
					$elems[$elempart[0]] = $elempart[1]; 
					$elemsSale[$elempart[0]] = $elempart[2]; 
				}
		?>
	
		<form action="" class="form-cart">
			
			<table>
				<thead>
					<tr>
						<th></th>
						<th></th>
						<th style="text-align: right">Цена за штуку &nbsp;&nbsp;&nbsp;Количество</th>
						<th style="text-align: center;">Сумма</th>
					</tr>
					
				</thead>
				<tbody>
					<?php 				
					
						$pinclude = get_posts( array ("include" => $postInBascet) );
				
						$summ = 0;
						$flag = false;
						foreach ($pinclude as $pe)				
						{	
						 //if ($pe->ID == 10330) $flag = true;
					?>
					
							<tr class="cart-item">
								<td class="product-delete" >
									<div class = "dellBtnNew" onclick = "dellbascet(this);" data-elemid = "<?php echo $pe->ID; ?>">
										<span class="product-delete__top"></span>
										<span class="product-delete__bottom"></span>
									</div>
								</td>
								<td class="product-thumbnail">
									<a href="<?php echo get_the_permalink($pe->ID); ?>">
										<img src="<?php bloginfo("url")?>/galery/<?php echo get_post_meta($pe->ID, "_sku", true); ?>.1.jpg" alt="">
									</a>
								</td>
								<td class="product-name-price-qty__wrap">
									<div class="product-name">
										<a href="<?php echo get_the_permalink($pe->ID); ?>" class="product-name__link"><?php echo $pe->post_title; ?></a>
									</div>
										
								<?php
										$pricr_cur = 0;
										$pricr_old = 0;
										$old_price = "";
										$pricr_cur = get_post_meta($pe->ID, "_price", true);
										$pricr_old = get_post_meta($pe->ID, "_old_price", true);
										
										if (!empty($elemsSale[$pe->ID])) {
											$pricr_old = $pricr_cur;
											$pricr_cur = $pricr_cur - $elemsSale[$pe->ID]; 
										}
										
										if((!empty($pricr_old)) && ((int)$pricr_old > (int)$pricr_cur)) {
											$old_price = '<span class="price-old">'. $pricr_old .' ₽</span></br>';
										}
								?>
									
								<div class="product-price">
									<span class="product-price-title__mobile">Цена:</span>
									<?php echo $old_price." <span class='current-price'>".$pricr_cur . "</span>"; ?> ₽</div>
								<div class="product-quantity">
									<div class="quantity">
										<!-- <input type="number" id="" class="input-text qty text" step="1" min="0" max="" name="" value="1" title="Кол-во" size="4" pattern="[0-9]*" inputmode="numeric"> -->
										<span class="product-price-qty__mobile">Количество:</span>
										<select name="cart-qty-product" id="cart-qty-product" data-elemid = "<?php echo $pe->ID; ?>" onchange = "recalcbascet(this);">
											<option value="1" <?php if ($elems[$pe->ID] == 1) echo "selected"; ?> >1</option>
											<option value="2" <?php if ($elems[$pe->ID] == 2) echo "selected"; ?>>2</option>
											<option value="3" <?php if ($elems[$pe->ID] == 3) echo "selected"; ?>>3</option>
											<option value="4" <?php if ($elems[$pe->ID] == 4) echo "selected"; ?>>4</option>
											<option value="5" <?php if ($elems[$pe->ID] == 5) echo "selected"; ?>>5</option>
											<option value="6" <?php if ($elems[$pe->ID] == 6) echo "selected"; ?>>6</option>
											<option value="7" <?php if ($elems[$pe->ID] == 7) echo "selected"; ?>>7</option>
											<option value="8" <?php if ($elems[$pe->ID] == 8) echo "selected"; ?>>8</option>
											<option value="9" <?php if ($elems[$pe->ID] == 9) echo "selected"; ?>>9</option>
											<option value="10" <?php if ($elems[$pe->ID] == 10) echo "selected"; ?>>10</option>
										</select>
									</div>
								</div>
								</td>
								
								
								<td class="product-subtotal">
									<span class="product-subtotal__title">Сумма:</span>
									<span class="amount"><?php echo $elems[$pe->ID]*$pricr_cur; ?></span>
									<span class="currency-cymbol"> ₽</span>
								</td>
							</tr>
							
							
							
					<?php 
							$summ += $elems[$pe->ID]*$pricr_cur;
						}	
					?>
					
						
						<?php if (($summ > 5000)||($flag)):?>	
						
						
						<?php endif;?>	
						
						
				</tbody>
			</table>
		</form>

		<div class="cart-subtotal__price">
			<div class="order-form__coupon order-form__coupon-1 center-mobile">
	               <div class="order-form__coupon-photo"></div>
	               <div class="order-form__coupon-text">Золотой<br> розыгрыш</div>
	               <div class="order-form__coupon-question">?</div>
	               <div class="order-form__coupon-note">Оформите заказ сегодня и получите 1 купон на участие в золотом розыгрыше</div>
	        </div>
			
			<div class="cart-subtotal__price-content">
				<span class="cart-subtotal__price-content-label">Стоимость заказа:</span>
				<span class="cart-subtotal__price-content-price"><?php echo $summ; ?> </span>
				<span class="cart-subtotal__price-content-currency">₽</span>
			</div>
		</div>
		<form action="" class="checkout-form" method="post" id="checkout-form">
				
			
			<div class="checkout-form__block">
				<!-- <label for="checkout-form__name">Ваше Имя <span>*</span></label> -->
				<input type="text" required name="name" id="checkout-form__name" placeholder="Имя *" class="checkout-form__name">
				<div class="checkout-form__block-checked"></div>
				<div class="checkout-form__block-wrong"></div>
			</div>
			<div class="checkout-form__block">
				<!-- <label for="checkout-form__phone">Ваш Телефон <span>*</span></label> -->
				<input type="tel" class = "mascedphoneclass" required name="phone" placeholder="Телефон *" pattern="^((8|\+7)[\-]?)?(\(?\d{3}\)?[\-]?)?[\d\-]{7,10}$" id="checkout-form__phone">
				<div class="checkout-form__block-checked"></div>
				<div class="checkout-form__block-wrong"></div>
			</div>
			<div class="checkout-form__block">
				<!-- <label for="checkout-form__email">Электронная почта</label> -->
				<input type="email" placeholder="Email" required name="email" id="checkout-form__email" class="checkout-form__email">
				<div class="checkout-form__block-checked"></div>
				<div class="checkout-form__block-wrong"></div>
			</div>
			
			<div class="checkout-form__block">
				<input type="text" placeholder="Адрес" name="address" id="checkout-form__address">
				<div class="checkout-form__block-checked"></div>
			</div>
			
			<?if ($_COOKIE["cityinfo"] === "Курск") {?>
				<div class="checkout-form__block">
					<input type="checkbox" name="samovivoz" id="checkout-form__samov">
					<label for = "checkout-form__samov">Самовывоз г. Курск Максима Горького д. 70</label>
				</div>
			<?
				}
			?>
			
			
			<div class="checkout-form__block">
				<!-- <label for="checkout-form__comment">Комментарий</label> -->
				<textarea name="comment" placeholder="Комментарий" id="checkout-form__comment" cols="30" rows="10"></textarea>
				<div class="checkout-form__block-checked"></div>
			</div>
			

			
			
			
			<div class="checkout-form__block checkout-form__block-submit">
				<!-- <div class="checkout-form__block-submit-total"><span>Итого <span class="checkout-form__block-submit-qty"><?php echo $bscetcount; ?></span> товар на сумму <span class="checkout-form__block-submit-summ"><?php echo $summ; ?></span> руб.</span></div> -->
				<button id = "allBascetCart" class="checkout-form__block-submit-btn oformlenieZak" onclick="yaCounter48236084.reachGoal('oform_str_korzina');" >Оставить заявку</button>
			</div>
			
			<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
			
					<!-- Блок доставки -->
				<div class="checkout-form__block " style = "justify-content: end;">
					<div class = "new_delivery_blk">
						<div id = "deliveryDeyElem" class = "new_delivery_elem">
							Доставим за: <br/><span class = "value"></span>
						</div>
								
						<!-- <div id = "deliveryPriceElem" class = "new_delivery_elem">
							Цена: <br/><span class = "value"></span>
						</div> -->
								
						<span class = "viev_map">Показать пункты выдачи</span>	
							
						<div class = "map_pvt_all">
							<img class = "delivery_logo delivery_logo_dpd" src = "<? bloginfo("template_url"); ?>/img/DPD.svg" alt = "Пункты выдачи DPD" title = "Пункты выдачи DPD" />
							<img class = "delivery_logo delivery_logo_sdek" src = "<? bloginfo("template_url"); ?>/img/sdek.jpg" alt = "Пункты выдачи СДЕК" title = "Пункты выдачи СДЕК" />
							
							<div id = "map_pvt_dpd"></div>	
							<div id = "map_pvt"></div>
							
						</div>
						<span style = "display:none;" class = "not__city_finde">
							Мы не смогли автоматически рассчитать сроки и стоимость доставки до Вас. Пожалуйста оставьте заявку, и наш менеджер сделает это в ручном режиме. <br/> С Любовью, ЕлиСямба!
						</span>
					</div>	
			</div>	
			
		</form>
				<?php } else {?>
				
					<h2>Ваша корзина пуста!</h2>
					<div class="present-modal__content present-modal__content_bascet">
						<div class="present-modal__win">
							<div class="present-modal__present present-modal__present_inbascet" >
								<div class="present-modal__present-wrap">
								  <div class="present-modal__title present-modal__title_bot">Подарок к заказу</div>
								  <div class="present-modal__present-img" style="background-image: url(<?php echo get_template_directory_uri()?>/img/present.png);"></div>
								  <div class="present-modal__present-title">Мягкий паззл</div>
								</div>
							 </div>
						</div>
					</div>
					
			<?php }?>
	</div>


	<div class="wrapper">
		<h3 class="cart-product__title">Рекомендуем:</h3>
		<div class="cart-recommend owl-carousel">
			
			<?php echo bascetinputDop(1);?>
		</div>
	</div>

<?php get_footer();