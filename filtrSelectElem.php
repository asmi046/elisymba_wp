<?php //if (!empty($_REQUEST["filter"])): ?>

	<?php  
		if (is_category())
			$pId = get_category_link($wp_query->get_queried_object_id());
		else
			$pId = get_bloginfo("url");
	?>
	
	<div class = "filtersText" id = "filterStart">
		<div id = "fFilter" class = "filtersBtn">Фильтры:</div>
		<?php if ((!empty($_REQUEST["hp"]))||(!empty($_REQUEST["sortparam"]))): ?>
		<?php
			if ($_REQUEST["hp"] === "saleFlag") echo "<span class = 'fText'>Отображены: Товары со скидкой <a href = '".$pId."#filterStart'><i class='fas fa-times'></i><span class = 'mobFiltecClose'>Сбросить</span></a></span>"; 
			if ($_REQUEST["hp"] === "newFlag") echo "<span class = 'fText'>Отображены: Новинки <a href = '".$pId."#filterStart'><i class='fas fa-times'></i><span class = 'mobFiltecClose'>Сбросить</span></a></span>"; 
			if ($_REQUEST["hp"] === "hitFlag") echo "<span class = 'fText'>Отображены: Хиты продаж <a href = '".$pId."#filterStart'><i class='fas fa-times'></i><span class = 'mobFiltecClose'>Сбросить</span></a></span>"; 
			if (($_REQUEST["sortparam"] === "price")&&($_REQUEST["ordn"] === "ASC")) echo "<span class = 'fText'>Применен: По возростанию цены <a href = '".$pId."#filterStart'><i class='fas fa-times'></i><span class = 'mobFiltecClose'>Сбросить</span></a></span>"; 
			if (($_REQUEST["sortparam"] === "price")&&($_REQUEST["ordn"] === "DESC")) echo "<span class = 'fText'>Применен: По убыванию цены <a href = '".$pId."#filterStart'><i class='fas fa-times'></i><span class = 'mobFiltecClose'>Сбросить</span></a></span>"; 
		?>
		<?php endif; ?>
	</div>
	

	
	
	<div class = "filteBlk">
		<div class = "filterElem filterLeft">
			<a id = "fPriceup" href = "<?php echo $pId; ?>?sortparam=price&ordn=ASC&filter=1">&uarr; По возростанию цены</a>
			<a id = "fPricedn" href = "<?php echo $pId; ?>?sortparam=price&ordn=DESC&filter=1">&darr; По убыванию цены</a>
		</div>
		
		<div class = "filterElem filterRight">
			<a id = "fSales" href = "<?php echo $pId; ?>?hp=saleFlag&ordn=ASC&filter=1">Скидки</a>
			<a id = "fNew" href = "<?php echo $pId; ?>?hp=newFlag&ordn=ASC&filter=1">Новинки</a>
			<a id = "fHits" href = "<?php echo $pId; ?>?hp=hitFlag&ordn=ASC&filter=1">Хиты продаж</a>
		</div>
	</div>
	
	
	
<?php //endif; ?>