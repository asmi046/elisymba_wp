            <div id = "cityElem_top" class = "new_delivery_elem_top new_delivery_elem_top_mob">
								<?php 
									$city = $GLOBALS['city'];
								?>
								Ваш город: <br/><span class = "value city_sel_elem"><?php echo $city; ?></span>
								<div class = "city_vsp_vin" style = "display:<?php echo (!empty($_COOKIE["cwclose"]))?"none":"block";?>">
									<div class = "qq">Ваш город <span style = "city_in_win"><?php echo $city; ?></span>?</div>
									<div class = "qq_btn">
										<div class = "yes_no_btn yes_btn btn btn-pink" >Да, спасибо</div> <div class = "yes_no_btn no_btn btn btn-pink">Нет, другой</div>
									</div>
								</div>
			</div>

<?php if (!is_single()):?>

	<?php if (is_home()||!is_home()):?>
	<script>
	jQuery(document).ready(function() {  
	  if (jQuery(window).width() < 916) {
			jQuery('.baner-new__presents-1 .baner-new__presents-title').html('Получи<br> до 2-х подарков');
			jQuery('.baner-new__presents-2 .baner-new__presents-title').html('Выиграй<br> магнитный конструктор');
		}
		
	  if (jQuery(window).width() < 916) {
			jQuery('.dt-z').hide();
			jQuery('.mob-z').show();
		}
	});
	</script>
	<!--
	<section class="baner-new">
		<div class="baner-new__content">
			<div class="baner-new__content">
				<div class="baner-new__title"></div>
				<div class="baner-new__offer">Сделай заказ</div>
				<div class="baner-new__presents-wrap">
					<div class="baner-new__presents baner-new__presents-1">
						<div class="baner-new__presents-title tt1">Получи <br/>до 2-х гарантированных подарков</div>
						<div class="baner-new__presents-1-1"></div>
						<div class="baner-new__presents-1-2"></div>
					</div>
					<div class="baner-new__presents baner-new__presents-2 ">
						<div class="baner-new__presents-title tt2">Выиграй <br/>магнитный конструктор <br/>"Комета" МК-30</div>
						<a href="<?php echo get_the_permalink(6895);?>" class=" btn btn-dark-pink">Подробнее</a>
						<div class="baner-new__presents-2-bg"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="baner-new__bg-left"></div>
		<div class="baner-new__bg-center"></div>
		<div class="baner-new__bg-right"></div>
	</section>
	-->

					
	<section class="baner-new-img dt-z ">
			<img class = "lazy" data-src = "<?php bloginfo("template_url")?>/img/elisymba-a-1.jpg?v=1.0.16" />
			<a href="#" class="baner-new__link baner-new__link-more bg-blue">Подробнее<div class="order-form__coupon-note">Сделайте заказ сегодня и примите участие в Мега розыгрыше с гарантированными призами! Вас ждет 30 000 подарок!</div></a>
			<a href="<?php echo get_permalink(12597);?>" class="baner-new__link">Смотреть все призы</a>
		<!--<a href = "<?php echo get_the_permalink(18);?>">-->
			<!--<img class = "lazy" data-src = "<?php bloginfo("template_url")?>/img/athum-bn1.jpg?v=1.0.11" />-->
			<!--<div class = "banner_Btn present-modal">ИГРАТЬ</div>-->
		<!--</a>-->
		
	</section>

	<section class="baner-new-img-m mob-z present-modal1">
			<img class = "lazy" data-src = "<?php bloginfo("template_url")?>/img/roz-mob.jpg?v=1.0.11" />
			<div class="baner-new-img-m-block">
				<a href="#" class="baner-new__link baner-new__link-more bg-blue">Подробнее<div class="order-form__coupon-note">Оформите заказ сегодня и получите 1 купон на участие в золотом розыгрыше</div></a>
				<a href="<?php echo get_permalink(12597);?>" class="baner-new__link">Все призы</a>
			</div>
		<!--<a href = "<?php echo get_the_permalink(18);?>">-->
			<!--<img class = "lazy" data-src = "<?php bloginfo("template_url")?>/img/athum-bn-mob1.jpg?v=1.0.11" />-->
		<!--</a>-->
		
	</section>
	
	<?php endif;?>
<?php endif;?>