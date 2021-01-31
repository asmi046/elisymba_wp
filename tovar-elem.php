<div class="catalog-item" data-key="562" data-sortnew="<?php echo get_post_meta(get_the_ID(), "_tovar_order", true); ?>" data-sortold="<?php echo get_post_meta(get_the_ID(), "orderCat", true); ?>">
	
	<?php
		$main_sales = $_REQUEST["nsale"];
		
		$linc = get_the_permalink();
		
		$pricr_cur = get_post_meta(get_the_ID(), "_price", true);
		$pricr_old = get_post_meta(get_the_ID(), "_old_price", true);
		
		if (!empty($main_sales)) {
			$pricr_old = $pricr_cur;
			$pricr_cur = $pricr_cur - $main_sales; 
			$linc .= "?nsale=".$main_sales; 
		}	
	?>
	
	<?php if ((!empty($pricr_old))&&((int)$pricr_old > (int)$pricr_cur)):?>
	<div class="item-discount">
		-<?php echo 100 - round(((float)$pricr_cur / (float)$pricr_old) * 100);?><span>%</span>
	</div>
	<?php endif;?>
	
	<?php 
		$is_hit = 0;
		$is_new = 0;
		$is_sale = 0;
		if ((!empty($pricr_old))&&((int)$pricr_old > (int)$pricr_cur)):
			$is_sale = 1;
	    endif;
	    $post_date = get_the_date('U');
	    $two_month = 3600 * 24 * 60;
	    $current_date = round(microtime(true));
	    if(($post_date + $two_month) > $current_date) {
	    	$is_new = 1;
	    }
	    $order_count = get_post_meta(get_the_ID(), "order_count", true);
	    if($order_count > 100) {
	    	$is_hit = 1;
	    }
	    if($is_hit):?>
			<img class="stiker-elem lazy" data-src = "<?php bloginfo("template_url")?>/img/stiker/hit2.png">
	    <?php elseif ($is_new):?>
			<img class="stiker-elem lazy" data-src = "<?php bloginfo("template_url")?>/img/stiker/new.png">
	    <?php elseif($is_sale):?>
			<img class="stiker-elem lazy" data-src = "<?php bloginfo("template_url")?>/img/stiker/sale1.png">
	    <?php endif; ?>
	
	
	<div class="item-image" >
		<a class = "oneImg" href="<?php echo $linc;?>">
			<?php
				$img1 = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "_sku", true).".1.jpg";
				$img2 = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "_sku", true).".1.jpg";
				
				if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "_sku", true).".2.jpg")) {
					$img2 = get_bloginfo("url")."/galery/".get_post_meta(get_the_ID(), "_sku", true).".2.jpg";
				}
				
				if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/miniature/min-".get_post_meta(get_the_ID(), "_sku", true).".1.jpg")) {
					$img1 = get_bloginfo("url")."/galery/miniature/min-".get_post_meta(get_the_ID(), "_sku", true).".1.jpg";
				}
				
				if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/miniature/min-".get_post_meta(get_the_ID(), "_sku", true).".2.jpg")) {
					$img2 = get_bloginfo("url")."/galery/miniature/min-".get_post_meta(get_the_ID(), "_sku", true).".2.jpg";
				}
				
				if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/webpmin/min-".get_post_meta(get_the_ID(), "_sku", true).".1.webp")) {
					$img1_webp = get_bloginfo("url")."/galery/webpmin/min-".get_post_meta(get_the_ID(), "_sku", true).".1.webp";
				}
				
				if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/webpmin/min-".get_post_meta(get_the_ID(), "_sku", true).".2.webp")) {
					$img2_webp = get_bloginfo("url")."/galery/webpmin/min-".get_post_meta(get_the_ID(), "_sku", true).".2.webp";
				}
				
			?>
			<picture>
				<?
					if (!empty ($img1_webp)) {
				?>
						<source srcset="<? echo $img1_webp ?>" type="image/webp"> 
				<?
					}
				?>
			
				<img loading="lazy" id = "item-image<?php echo get_the_ID();?>" class = "lazy" src = "<?php echo $img1; ?>" />
			</picture>
			
		</a>
		
		<a class = "toImg"  href="<?php echo $linc;?>">
			<picture >
				<?
					if (!empty ($img2_webp)) {
				?>
						<source srcset="<? echo $img2_webp ?>" type="image/webp"> 
				<?
					}
				?>
			<img class = "lazy" loading="lazy" src = "<?php echo $img2; ?>" />
			</picture>
		</a>
		
	</div>
	


	<div class="item-title">
		<a href="<?php echo $linc;?>">
			<?php echo $post->post_title;?> 
		</a>
	</div>
	
	<div class="price">
		<?php if ((!empty($pricr_old))&&((int)$pricr_old > (int)$pricr_cur)):?>
			<span class="price-old"> <span class = "price_formator"><?php echo $pricr_old; ?></span> <span>₽</span></span>
		<?php endif;?>
		<span class="price-cur"><span class = "price_formator"><?php echo $pricr_cur; ?></span> <span>₽</span></span>
		
		<span onclick="toBascetFnk(this); yaCounter48236084.reachGoal('korzina-katalog-new');" class = "tobascetInCatWrap tobascetInCat tobascet" style = "display:inline-block;" title = "Добавить в корзину" data-postid = "<?php echo get_the_ID();?>" data-nsale = "<?php echo $main_sales;?>">В корзину</span>
	
	</div>
	

	
	<div class="item-actions clearfix">
		<a class="more" href="<?php echo $linc;?>">Подробнее</a>
		<a onclick="ym(48236084,'reachGoal','zakazv1klik')" class="order tobascetInCat fancybox-order <?php if (empty(carbon_get_post_meta(get_the_ID(), "sclad_count")) && (empty(carbon_get_post_meta(get_the_ID(), "tovar_sklad_drop")))) echo "pre-order-link";?>"  style = "display:block;" href="#order-form"  data-sale="-<?php echo 100 - round(((float)$pricr_cur / (float)$pricr_old) * 100);?><span>%</span>" data-price="<?php echo $pricr_cur;?>" data-price-old = "<?php echo $pricr_old;?>" data-size-price-s="<?php echo $pricr_cur;?>" data-size-price-old-s="<?php echo $pricr_old;?>" data-image="<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "_sku", true)?>.1.jpg" data-title="<?php the_title(); ?>" data-product = "<?php echo get_post_meta(get_the_ID(), "_sku", true)?>" data-postid = "<?php echo get_the_ID();?>">
		<?php
			if (empty(carbon_get_post_meta(get_the_ID(), "sclad_count")) && (empty(carbon_get_post_meta(get_the_ID(), "tovar_sklad_drop"))))
				echo "Предзаказ";
			else 
				echo "Заказать";
		?>
		
		</a>

	</div>
</div>