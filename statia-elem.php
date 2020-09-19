<div class = "statia-elem">
	<div class = "statia-img">
		<a href = "<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
	</div>
	
	<div class = "statia-text">
		
		<a href = "<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
		<a href = "<?php the_permalink(); ?>">
			<span class = "statDate"><?php echo get_the_date('d.m.Y'); ?></span>
			<span class = "exc">
				<?php the_excerpt(); ?>
			</span>
		</a>
		<a class = "btn btn-pink smileBtn" href = "<?php the_permalink(); ?>">Подробнее</a>
	</div>
</div>