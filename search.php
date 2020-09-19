<?php get_header(); ?>

<main>
    <div class="wrapper">
        <?php include ("baner-timer.php"); ?>
        <?php include ("show-960.php"); ?>
            
		<div class="clearfix d-flex-main">
            
			<?php get_sidebar("left"); ?>                

			<section class="page-content">
			
			<?php 
				include("search-form.php");
			?>
			
				<?php if ( have_posts() ) : ?>
					<h1>Результаты поиска по запросу: <?php echo $_REQUEST["s"];?></h1>
					<div id="w0" class="list-view">
						<?php  while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'tovar', 'elem' );?>
						<?php endwhile;?>
					</div>
					
					<div class="bg-gray-pagination">
				<div class="pink-pagination">
					<?php if ( function_exists( 'wp_pagenavi' ) ) wp_pagenavi(); ?>
				</div>
			</div>
					
				<?php endif; ?>
			</section>
			
			
			
        </div>
    </div>
</main>
	
<?php get_footer(); ?>