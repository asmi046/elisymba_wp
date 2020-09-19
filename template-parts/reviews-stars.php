<?php
if(carbon_get_the_post_meta('complex_reviews')):
	
	$inc = carbon_get_the_post_meta('reviews_qty');
	$awerage = carbon_get_the_post_meta('reviews_awerage_rating');
	if(empty($inc)) {
		$rating_total = 0;
		$inc = 0;
		$arr_reviews = carbon_get_the_post_meta('complex_reviews');
		foreach($arr_reviews as $review):

			if($review['complex_reviews_is_show']):
				$rating_total += $review['complex_reviews_stars'];
				$inc++;
			endif;
		endforeach;
		$awerage = (float)$rating_total / (float)$inc;
		$awerage = round($awerage, 1);
	}
?>
<div class="review-item__header-stars">
	<?php $stars_qty = round($awerage);
	for ($i=0; $i < 5; $i++): ?>
		<?php if($stars_qty <= $i):?>
		<div class="star_review star_review-gray"></div>
		<?php else:?>
		<div class="star_review"></div>
		<?php endif;?>
	<?php endfor;?>
	<a href="#reviews-title" class="round-awerage"><?php echo $inc;?></a>
</div>
<?php endif;?>