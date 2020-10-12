<div class="search-widget search-widget-in-content">
	
	<?php if (!is_single()) {?>
		<div class="search-widget__title">Магазин развивающих игрушек №1 в России</div>
	<?}?>

	<form action="<?php echo home_url( '/' ) ?>">
		<div class = "searchWraper">
			<input name="s" id = "s" placeholder="Поиск по сайту" autocomplete="off" value = "<?php echo get_search_query() ?>">
			<div class = "preSearchWrap">
			</div>
		</div>

		<button type="submit" class="btn btn-dark-pink" style="">Найти</button>
	</form>
</div>  