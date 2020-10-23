	<?php $footer_class = '';
	if(is_page(6895)) {
		$footer_class = 'footer_class-konkurs';
	}?>
	<footer class="site-footer <?php echo $footer_class;?>">
        <div class="wrapper clearfix">
            <div class="footer-copy">
			
			
			
			<?php $options = get_option( 'wpuniq_theme_options' ); ?>
						<p>ИП <?php echo $options[ipe]; ?></p>		
						<p>ИНН: <?php echo $options[inn]; ?></p>
						<p>ОГРН: <?php echo $options[ogrn]; ?></p>
						<!--<p>Адрес: <?php //echo $options[adres]; ?></p>-->
                <p><a href="<?php echo get_the_permalink(544);?>" class="ooft">Политика конфиденциальности</a></p>
				<p>Разработка сайта <a target="_blank" href = "https://asmi-studio.ru/">Asmi-Studio.ru</a></p>
                <a href="https://webmaster.yandex.ru/sqi?host=елисямба.рф"><img width="88" height="31" alt="" border="0" src="https://yandex.ru/cycounter?%D0%B5%D0%BB%D0%B8%D1%81%D1%8F%D0%BC%D0%B1%D0%B0.%D1%80%D1%84&theme=light&lang=ru"/></a>
            </div>
            <div class="footer-menu">

				<?php wp_nav_menu( array('menu' => 'Главное меню', 'container' => false )); ?>
            </div>
            <div class="footer-pay">
                <p class="pay-title">Способы оплаты</p>
                <ul>
                    <li><a href="#"><img class = "lazy" data-src="<?php  echo get_template_directory_uri(); ?>/img/visa.png" alt="Картинка"></a></li>
                    <li><a href="#"><img class = "lazy" data-src="<?php  echo get_template_directory_uri(); ?>/img/mastercard.png" alt="Картинка"></a>
                    </li>
                    <li><a href="#"><img class = "lazy" data-src="<?php  echo get_template_directory_uri(); ?>/img/webmoney.png" alt="Картинка"></a></li>
                    <li><a href="#"><img class = "lazy" data-src="<?php  echo get_template_directory_uri(); ?>/img/yandexmoney.png" alt="Картинка"></a>
                    </li>
                </ul>
                <p class="pay-desc">Вы можете оплатить покупки<br>
                    наличными при получении,<br>
                    либо онлайн.</p>
            </div>
            
			
            <div class="footer-contacts">
                
				<p>Звоните в любой день с <strong>9:00</strong> до <strong>21:00</strong><br>
                    Заказывайте через сайт в любое время суток!</p>
                <p class="footer-tel">
                    <?php echo $options[phoneViev]; ?>                 </p>
                <p class="footer-tel-desc">Бесплатный звонок по России</p>
                
            </div>
        </div>
    </footer>

</div>
<div id="order-form" class="order-form">
    <form id="order_form" action="#<?php //echo get_the_permalink(40);?>" method="post">   
		<input type="hidden" name="_pname" class="_pname" value="">    
		<input type="hidden" name="_pprice" class="_pprice" value="">       

<?php
		$pricr_cur = get_post_meta(get_the_ID(), "price", true);
		$pricr_old = get_post_meta(get_the_ID(), "old_price", true);
	?>

<div class="clearfix desc-wrapper">
        <p class="title"></p>
        <div id = "order-image-block" class="order-image-block">
            <div class="order-img"></div>
            <div class="discount">-<?php echo 100-round(((float)$pricr_cur / (float)$pricr_old) * 100);?><span>%</span></div>
        </div>
        <div class="description">
           
			<p class="price">Цена сейчас:</p>
            <p><span class="price-count"></span></p>
			

           <div class="order-form__coupon">
               <div class="order-form__coupon-photo"></div>
               <div class="order-form__coupon-text">Золотой<br> розыгрыш</div>
               <div class="order-form__coupon-question">?</div>
               <div class="order-form__coupon-note">Оформите заказ сегодня и получите 1 купон на участие в золотом розыгрыше</div>
           </div>
      
        </div>
    </div>
    <div style="text-align: center; margin: 0 auto;">
        <input type="hidden" id="order-product_id" name="Order[product_id]">        
		<input type="hidden" id="order-client_time" name="Order[client_time]">        
		<input type="hidden" id="order-product_title" name="Order[product_title]">        
		<input type="hidden" id="order-product_price" name="Order[product_price]">        
		<input type="hidden" id="order-post_id" name="Order[post_id]">        
		<div class="form-group field-order-client_name">
<label class="control-label" for="order-client_name">Ваше имя:</label>
<input type="text" id="order-client_name" class="form-control" name="Order[client_name]">
<div class="hint-block">чтобы мы знали, как к Вам обратиться</div>
<div class="help-block"></div>
</div>        <div class="form-group field-order-client_tel required">
<label class="control-label" for="order-client_tel">Ваш номер телефона:</label>
<input type="text" id="order-client_tel" class="form-control" name="Order[client_tel]" data-plugin-inputmask="inputmask_96e76a5f">
<div class="hint-block">
<?
	$start = strtotime('today  09:00');
	$end = strtotime('today  21:00');
	$find = strtotime('now')+10800;
	//echo date("Y-m-d H:i:s",$start);
	//echo date("Y-m-d H:i:s",$end);
	//echo date("Y-m-d H:i:s",$find);
	if (($start <= $find)&&($end >= $find)) {
		echo "Мы свяжемся с Вами в течение 10 мин.";
	} else {
		echo "чтобы мы смогли с Вами связаться и уточнить детали заказа";
	}
	
?>
</div>
<div class="help-block"></div>
</div>        

 
<span onclick="yaCounter48236084.reachGoal('zakaz');" class="btn btn-pink oneClikZal" style="margin: 0 auto">Оставить заявку</span>

</div>

</form>    

<div class="minicat cat-ani" >
    <div class="minicat-text">введите ваше имя</div>
        <div class="cat-lap" style="left: 70px"></div>
    </div>
</div>


    <div id="order-popup2" class="order-form designer">
        <div class="title" style="text-align: center">БЕСПЛАТНАЯ ПОМОЩЬ ПРОФЕССИОНАЛЬНОГО <br> ДИЗАЙНЕРА</div>
        <form id="designer_order" action="/order/designer/" method="post" enctype="multipart/form-data">
<input type="hidden" name="_csrf-kartina-rus" value="Wlg4RDRHNTIRPlQGcnNhVxFvbAxdEgB0GB16FmAeBnAwMEsocy1aZA==">        <div class="form-group field-designer-name">
<label class="control-label" for="designer-name">Ваше имя</label>
<input type="text" id="designer-name" class="form-control" name="Designer[name]">
<p class="help-block">чтобы мы знали как к Вам обращаться</p>
<p class="help-block help-block-error"></p>
</div>        <div class="form-group field-designer-email">
<label class="control-label" for="designer-email">E-Mail</label>
<input type="text" id="designer-email" class="form-control" name="Designer[email]">
<p class="help-block">на него мы пришлём варианты картин</p>
<p class="help-block help-block-error"></p>
</div>        <div class="form-group field-designer-phone required">
<label class="control-label" for="designer-phone">Телефон</label>
<input type="text" id="designer-phone" class="form-control" name="Designer[phone]" data-plugin-inputmask="inputmask_96e76a5f">
<p class="help-block">чтобы дизайнер мог с вами связаться</p>
<p class="help-block help-block-error"></p>
</div>        <div class="form-group field-designer-comment">
<label class="control-label" for="designer-comment">пожелания/комментарии</label>
<textarea id="designer-comment" class="form-control" name="Designer[comment]"></textarea>

<p class="help-block help-block-error"></p>
</div>        <div>
            <div class="form-group field-file-input">
<label class="control-label" for="file-input">Загрузите фотографию:</label>
<input type="hidden" name="Designer[file][]" value=""><input type="file" id="file-input" name="Designer[file][]" style="display:none;">

<p class="help-block help-block-error"></p>
</div>            <a href="#" id="select-file" class="btn btn-dark-pink" style="width: 160px; margin: 0 auto;">Выбрать фаил</a>
        </div>
        <div id="file-duplicate">

        </div>
        <p><a id="add-file" href="#" class="btn btn-default">Загрузить ещё одну фотографию</a></p>
        <div style="text-align: center;">
            <button type="submit" class="btn btn-pink" style="margin: 0 auto">Отправить</button>        </div>
        </form>     
    </div>
<div id="ipad-form" class="order-form call-back">
    <div class="title" style="text-align: center">Участвовать в розыгрыше</div>
    <p style='font: 14px/22px "Trebuchet MS",Helvetica,sans-serif; color: #111;'>Для того чтобы участвовать в розыгрыше - заполните форму ниже</p>
    <form id="w2" action="/promo.php" method="post">
<input type="hidden" name="_csrf-kartina-rus" value="Wlg4RDRHNTIRPlQGcnNhVxFvbAxdEgB0GB16FmAeBnAwMEsocy1aZA==">    <div class="form-group field-ipad-name required">
<label class="control-label" for="ipad-name">Имя:</label>
<input type="text" id="ipad-name" class="form-control" name="Ipad[name]">

<p class="help-block help-block-error"></p>
</div>    <div class="form-group field-ipad-tel required">
<label class="control-label" for="ipad-tel">Номер телефона:</label>
<input type="text" id="ipad-tel" class="form-control" name="Ipad[tel]" data-plugin-inputmask="inputmask_96e76a5f">

<p class="help-block help-block-error"></p>
</div>    <div class="form-group field-ipad-promo required">
<label class="control-label" for="ipad-promo">Промокод:</label>
<input type="text" id="ipad-promo" class="form-control" name="Ipad[promo]">

<p class="help-block help-block-error"></p>
</div>    <div style="text-align: center;">
        <button type="submit" class="btn btn-pink" style="height: 58px; margin-top: 20px; font-size: 25px; line-height: 20px;">Учавствовать в акции</button>    </div>
    </form>    <p style='font: 14px/22px "Trebuchet MS",Helvetica,sans-serif; color: #111;'>Промокод находится в вашей посылке вместе с картиной.<br />Если у вас нет промокода пожалуйста позвоните нашим менеджерам -<br />8 800 770-72-93 (Бесплатно по всей России)</p>
</div>





<script type="text/javascript">
    window.criteo_q = window.criteo_q || [];
    window.criteo_q.push(
        {event: "setAccount", account: 27568},
        {event: "setSiteType", type: "d"},
        {event: "viewHome"}
    );
</script>


<script type="text/javascript">

	jQuery(document).ready(function () {


	var inputmask_96e76a5f = {"mask":"+7(999)9999999"};
	jQuery("#order-client_tel").inputmask(inputmask_96e76a5f);
	jQuery("#bascetphone, .mascedphoneclass").inputmask(inputmask_96e76a5f);
	
	jQuery("#call-client_tel").inputmask(inputmask_96e76a5f);

	jQuery('#select-file').on('click',function(e){
		$('#file-input').click();
		return false;
	});


	var phoneError = jQuery("form#designer_order .field-designer-phone p");

	phoneError
		.css('line-height', '32px')
		.css('outline', '1px solid red')
		.css('outline-offset', '-1px')
		.css('padding-left', '5px')
		.css('margin-bottom', '-32px')
		.css('display','none')
		.css('background','white')
		;


	phoneError.on('click', function(){
		$(this).text('');
		$(this).css('display','none');
		$(this).prev().focus();
	});

	jQuery("form#designer_order").on('submit', function(){
		setTimeout(function(){

			if(phoneError.text().length>0){
				phoneError.css('margin-bottom', '-32px');
				phoneError.css('display','block');
			}

		}, 200)

	})

	jQuery("#ipad-tel").inputmask(inputmask_96e76a5f);
	
	//jQuery('#w2').yiiActiveForm([{"id":"ipad-name","name":"name","container":".field-ipad-name","input":"#ipad-name","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Пожалуйста, введите имя..."});}},{"id":"ipad-tel","name":"tel","container":".field-ipad-tel","input":"#ipad-tel","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Пожалуйста, введите телефон..."});yii.validation.regularExpression(value, messages, {"pattern":/\+\d\(\d\d\d\)\d\d\d\d\d\d\d/i,"not":false,"message":"Пожалуйста, введите телефон корректно...","skipOnEmpty":1});}},{"id":"ipad-promo","name":"promo","container":".field-ipad-promo","input":"#ipad-promo","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {value = yii.validation.trim($form, attribute, []);yii.validation.required(value, messages, {"message":"Пожалуйста, введите промокод..."});yii.validation.range(value, messages, {"range":["6805kartina","6805 kartina","6805ikartina","rby465z"],"not":false,"message":"Введенный вами промокод не существует. Введите корректный промокод или позвоните по телефону 8 800 707-53-93 (Бесплатно по всей России)","skipOnEmpty":1});}}], []);
	console.log('test');
	
	jQuery('#ipad-promo').on('change blur focus',function(e){
		$(this).val($(this).val().toLowerCase())
	});
	
	jQuery(".oneImg").mouseover(function(){
		if (jQuery(this).siblings(".toImg").css("display") == "none") {
			jQuery(this).hide();
			jQuery(this).siblings(".toImg").show();
		}
		

	});
	
	jQuery(".toImg").mouseleave(function(){ 
			jQuery(this).hide();
			jQuery(this).siblings(".oneImg").show();
	});
	
	
	});
</script>



	<?php wp_footer(); ?>
	
</body>
</html>



