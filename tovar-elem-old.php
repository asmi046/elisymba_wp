<div class="catalog-item" data-key="562">
	
	<?php
		$pricr_cur = get_post_meta(get_the_ID(), "price", true);
		$pricr_old = get_post_meta(get_the_ID(), "old_price", true);
	?>
	
	<?php if ((!empty($pricr_old))&&((int)$pricr_old > (int)$pricr_cur)):?>
	<div class="item-discount">
		-<?php echo 100 - round(((float)$pricr_cur / (float)$pricr_old) * 100);?><span>%</span>
	</div>
	<?php endif;?>
	
	<div class="item-image" >
		<a class = "oneImg" href="<?php echo get_the_permalink()."#tovar";?>">
			<img id = "item-image<?php echo get_the_ID();?>" src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true);?>.1.jpg" />
		</a>
		
		<a class = "toImg"  href="<?php echo get_the_permalink()."#tovar";?>">
			<?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/galery/".get_post_meta(get_the_ID(), "SKU", true).".2.jpg")):?>                
				<img src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true);?>.2.jpg" />
			<?php else: ?>
				<img  src = "<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true);?>.1.jpg" />
			<?php endif; ?>
		</a>
	</div>
	
	<div class="item-title"><a href="<?php echo get_the_permalink()."#tovar";?>"><?php echo $post->post_title;?> (<?php echo get_post_meta(get_the_ID(), "size", true);?>)</a></div>
	
	<div class="price">
		<?php if ((!empty($pricr_old))&&((int)$pricr_old > (int)$pricr_cur)):?>
			<span class="price-old"><?php echo $pricr_old; ?> <span>руб.</span></span>
		<?php endif;?>
		<span class="price-cur"><?php echo $pricr_cur; ?> <span>руб.</span></span>
		
		<span onclick="yaCounter48236084.reachGoal('korzina-katalog');" class = "tobascetInCatWrap tobascetInCat tobascet" style = "display:inline-block;" title = "Добавить в корзину" data-postid = "<?php echo get_the_ID();?>" ><i class="fas fa-shopping-basket fa-lg "  ></i> В корзину</span>
	
	</div>
	
	<div class = "informersTm">
		<div class = "informerElem">
			<strong>Возраст: </strong><span class = "vozrostBlk"><?php echo get_post_meta(get_the_ID(), "vozrost", true);?></span>
		</div>
		
		<?php if ((!empty($pricr_old))&&((int)$pricr_old > (int)$pricr_cur)):?>
			<div class = "informerElem">
				Выгода: <span class = "vigodaBlk"><?php echo (float)$pricr_old - (float)$pricr_cur;?> руб.</span>
			</div>
		<?php endif;?>
	</div>
	
	<div class="action_count" style="font-size: 18px; font-weight: bold;">
		<?php if ((!empty($pricr_old))&&((int)$pricr_old > (int)$pricr_cur)):?>
			<p>Осталось по акции: <?php echo rand(1,3); ?> </p> 
		<?php else:?>
			<p>&nbsp;</p>
		<?php endif;?>
	</div>
	
	
	<div class="item-actions clearfix">
		<a class="more" href="<?php echo get_the_permalink()."#tovar";?>">Подробнее</a>
		<a onclick="yaCounter48236084.reachGoal('knopka');" class="order tobascetInCat fancybox-order"  style = "display:block;" href="#order-form"  data-sale="-<?php echo 100 - round(((float)$pricr_cur / (float)$pricr_old) * 100);?><span>%</span>" data-price="<?php echo $pricr_cur;?>" data-price-old = "<?php echo $pricr_old;?>" data-size-price-s="<?php echo $pricr_cur;?>" data-size-price-old-s="<?php echo $pricr_old;?>" data-image="<?php bloginfo("url")?>/galery/<?php echo get_post_meta(get_the_ID(), "SKU", true)?>.1.jpg" data-title="<?php the_title(); ?>" data-product = "<?php echo get_post_meta(get_the_ID(), "SKU", true)?>" data-postid = "<?php echo get_the_ID();?>">Заказать</a>

	</div>
</div>