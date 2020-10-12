function dellbascet(idelem) {
	var idelemCl = jQuery(idelem).data("elemid");
	console.log(idelemCl);
	var  jqXHR = jQuery.post(
		allAjax.ajaxurl,
		{
			action: 'del_bascet',		
			nonce: allAjax.nonce,	
			idelem: idelemCl,
		}
		
	);
	
	
	jqXHR.done(function (responce) {
		location.reload();

		/*
		jQuery(".bascetWriper .bCorcle .countInCart").html(responce);
		
		if (responce == "0")
		{
			jQuery(".bascetAllWriper").hide();
			jQuery(".bascetAllWriperMsg").html("<h2>Ваша корзина пуста!</h2>");
			jQuery(".bascetAllWriperMsg").show();
			jQuery(".bascetWriper").hide();
			jQuery(".tobascetInCatC").show();
				jQuery(".tobascetInCatB").hide();
			return;
		}
		
		var  jqXHR = jQuery.post(
			allAjax.ajaxurl,
			{
				action: 'get_bascet_sod',		
				nonce: allAjax.nonce,
			}
			
		);
		
		
		jqXHR.done(function (responce) { 
			jQuery("#bascetblk .bascetsod").html(responce); 
		});
		
		jqXHR.fail(function (responce) { console.log("ERROR!"); });
		*/
		
		
	});
	
	jqXHR.fail(function (responce) {
		console.log("ERROR!");
	});	
}

function recalcbascet(elem) {
	var idelemCl = jQuery(elem).data("elemid");
	var elcount = jQuery(elem).val();
	var cart_item = jQuery(elem).parents('.cart-item');
	var current_price_element = jQuery(cart_item).children('.product-name-price-qty__wrap').children('.product-price').children('.current-price');
	var current_price = jQuery(cart_item).children('.product-name-price-qty__wrap').children('.product-price').children('.current-price').text();
	var total_price_element = jQuery(cart_item).children('.product-subtotal').children('.amount');

	if (elcount<=0) elcount = 1;
	
	// console.log(elcount);
	
	var  jqXHR = jQuery.post(
		allAjax.ajaxurl,
		{
			action: 'rec_bascet',		
			nonce: allAjax.nonce,	
			idelem: idelemCl,
			elcount: elcount,
		}
		
	);
	
	
	jqXHR.done(function (responce) {
		jQuery(".bascetWriper .bCorcle .countInCart").html(responce);
		location.reload();
		/*
		var  jqXHR = jQuery.post(
			allAjax.ajaxurl,
			{
				action: 'get_bascet_sod',		
				nonce: allAjax.nonce,
			}
			
		);
		
		
		jqXHR.done(function (responce) { 
			// location.reload();
			jQuery("#bascetblk .bascetsod").html(responce);
			// var price_product = jQuery(elem + ' .current-price').text();
			jQuery(total_price_element).text(current_price * elcount);

		});
		
		jqXHR.fail(function (responce) { console.log("ERROR!"); });
		*/
	});
	
	jqXHR.fail(function (responce) {
		console.log("ERROR!");
	});	
}

function toBascetFnk (elem) {
		jQuery(".bascetWriper").show();		
				
		var postidInEl = jQuery(elem).data("postid");
		var openbs = jQuery(elem).data("openbs");

		var  jqXHR = jQuery.post(
					allAjax.ajaxurl,
					{
						action: 'to_bascet',		
						nonce: allAjax.nonce,
						postid: jQuery(elem).data("postid"),
						nsale:jQuery(elem).data("nsale"),
					}
					
				);
				
				
				jqXHR.done(function (responce) {
					var rezm = responce.split("|");
					jQuery(".bascetWriper .bCorcle .countInCart").html(rezm[0]);
					jQuery("#bascetblk .bascetsod").html(rezm[1]);
					
					if (Number(rezm[0]) <= 1 ) {
						jQuery('#bascetblk').arcticmodal();
					} else {
						var that = jQuery(elem).parents().siblings(".item-image").find("img");
						console.log(that);
						if (that.length == 0) 
						{
							that = jQuery(".owl-carousel").find(".active").find("img");
							console.log(that);
						}

						var bascket = jQuery(".bCorcle");
						var w = that.width(that);
						
						   that.clone()
							   .css({'width' : w,
							'position' : 'absolute',
							'z-index' : '9999',
							top: that.offset().top,
							left:that.offset().left})
							   .appendTo("body")
							   .animate({opacity: 0.05,
								   left: bascket.offset()['left'],
								   top: bascket.offset()['top'],
								   width: 20}, 1000, function() {	
									jQuery(this).remove();
								});
					}
				});
				
				jqXHR.fail(function (responce) {
					console.log("ERROR!");
				});
}

function checkInputs() {
	jQuery('.checkout-form__block input, .checkout-form__block textarea').focusout(function() {
		

		if(jQuery(this).val() !== '' && jQuery(this).hasClass('mascedphoneclass')) {
			var regex = /^((8|\+7)[\-]?)?(\(?\d{3}\)?[\-]?)?[\d\-]{7,10}$/;
			var phone = jQuery(this).val();
			var valid = regex.test(phone);
			if(valid) {
				jQuery(this).next().show();
				jQuery(this).siblings('.checkout-form__block-wrong').hide();
			}
			else {
				jQuery(this).siblings('.checkout-form__block-wrong').show();
				jQuery(this).next().hide();
			}
		} else if(jQuery(this).hasClass("checkout-form__email")) {
			var regex = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
			var email = jQuery(this).val();
			var valid_email = regex.test(email);
			if(valid_email || jQuery(this).val() == '') {
				jQuery(this).next().show();
				jQuery(this).siblings('.checkout-form__block-wrong').hide();
			} else {
				jQuery(this).siblings('.checkout-form__block-wrong').show();
				jQuery(this).next().hide();
			}
		} else if(jQuery(this).val() !== '') {
			jQuery(this).next().show();
			jQuery(this).siblings('.checkout-form__block-wrong').hide();
		} else {
			jQuery(this).next().hide();
			jQuery(this).siblings('.checkout-form__block-wrong').show();
		}
	});
}

checkInputs();

jQuery(document).ready(function() {
		
		jQuery('.cart-recommend__slider').owlCarousel({
						'items': 3,
						'nav': true,
						'loop': true,
						'responsive': {
							320: {
								items: 1,
							},
							500: {
								items: 2,
							},
							700: {
								items: 3,
							}
						}
					});

	
		jQuery(".continue-shopping_link").click(function(){
			jQuery('#bascetblk').arcticmodal("close");
		});


		jQuery(".prodPok").click(function(){
			jQuery.fancybox.close();
			jQuery(".tobascetInCatC").hide();
			jQuery(".tobascetInCatB").show();
		});
		
		//jQuery(".tobascet").click(function(){ 
		
				
				
				
				
				/*
				var postidInEl = jQuery(this).data("postid");
				
				 jQuery("#item-image"+postidInEl)
					.clone()
					.css({'position' : 'absolute', "width":"100px", "height":"100px", 'z-index' : '11100', top: jQuery(this).offset().top-300, left:jQuery(this).offset().left-100})
					.appendTo("body")
					.animate({opacity: 0.05,
						width:"30px",
						height:"30px",
						left: jQuery(".bascetWriper").offset()['left'],
						top: jQuery(".bascetWriper").offset()['top'],
						width: 20}, 1000, function() {
						jQuery(this).remove();
				});
			*/
				
			
	//});
	
	jQuery(".bascetWriper").click(function(){
		//yaCounter48236084.reachGoal('openkorzina');
	});
	
	jQuery("#checkout-form input").click(function(){
		jQuery(this).css("background", "white");
	});
	
	jQuery(".oformlenieZak").click(function(){
		
		
		if (jQuery("#checkout-form__phone").val() == "")
		{
			jQuery("#checkout-form__phone").css("background", "#f69679");
			return;
		}
		
		if (jQuery("#checkout-form__name").val() == "")
		{
			jQuery("#checkout-form__name").css("background", "#f69679");
			return;
		}
		

		//alert("start-end");
		
		var podarok1 = localStorage.getItem("lot1");
		
		
		var podarki = "";
		
		if (podarok1 != null){
			podarki = " Выигранный подарок #1: "+allTovar[podarok1].name;
		}
	
		
		var  jqXHR = jQuery.post(
			allAjax.ajaxurl,
			{
				action: 'oformit_zak',		
				nonce: allAjax.nonce,
				namecl:jQuery("#checkout-form__name").val(),
				phonecl:jQuery("#checkout-form__phone").val(),
				emailcl:jQuery("#checkout-form__email").val(),
				sdostcl:jQuery("#checkout-form__delivery").val(),
				adrdost:jQuery("#checkout-form__address").val(),
				msgst:jQuery("#checkout-form__comment").val()+podarki
			}
			
		);
		
		
		jqXHR.done(function (responce) {
			jQuery(".bascetWriper .bCorcle .countInCart").html("0");
			jQuery("#bascetblk .bascetsod").html(responce);
			jQuery(".bascetAllWriper").hide();
			jQuery(".bascetAllWriperMsg").html("<h2>"+responce+"</h2>");
			jQuery(".bascetAllWriperMsg").show();
			
			localStorage.removeItem("lot1");
			
			yaCounter48236084.reachGoal('oform_str_korzina');
			
			window.location.replace("https://xn--80ablmoh8a2h.xn--p1ai/vash-zakaz-oformlen-korzina/?innerid="+JSON.parse(responce).order.number+"&summ="+JSON.parse(responce).order.totalSumm);
		});
		
		jqXHR.fail(function (responce) {
			console.log("ERROR!");
		});	
		
		
	});
	
	jQuery(".oneClikZal").click(function(){
		
		if (jQuery("#order-client_name").val() == "")
		{
			jQuery("#order-client_name").css("background", "#f69679");
			return;
		}
		
		if ((jQuery("#order-client_tel").val() == "")||(jQuery("#order-client_tel").val().indexOf("_")>0))
		{
			jQuery("#order-client_tel").css("background", "#f69679");
			return;
		}
		
		var  jqXHR = jQuery.post(
			allAjax.ajaxurl,
			{
				action: 'oformit_one',		
				nonce: allAjax.nonce,
				order_product_id:jQuery("#order-product_id").val(),
				order_client_time:jQuery("#order-client_time").val(),
				order_product_title:jQuery("#order-product_title").val(),
				order_product_price:jQuery("#order-product_price").val(),
				order_post_id:jQuery("#order-post_id").val(),
				order_client_name:jQuery("#order-client_name").val(),
				order_client_tel:jQuery("#order-client_tel").val(),
				order_client_comment:jQuery("#order-client_comment").val(),
			}
			
		);
		
		
		jqXHR.done(function (responce) {
			console.log(JSON.parse(responce));
			window.location.replace("https://xn--80ablmoh8a2h.xn--p1ai/vash-zakaz-oformlen-korzina/?innerid="+JSON.parse(responce).order.number+"&summ="+JSON.parse(responce).order.totalSumm);
		});
		
		jqXHR.fail(function (responce) {
			console.log("ERROR!");
		});	
		
		
	});
});
