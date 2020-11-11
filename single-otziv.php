<?php 
/*
Template Name: Шаблон для отзыва
Template Post Type: post
*/

get_header(); ?>

<main>
    <div class="wrapper">
        <?php include ("baner-timer.php"); ?>
        <?php include ("show-960.php"); ?>
            
		<div class="clearfix">
            
			<?php get_sidebar("left"); ?>                

			<section class="page-content">
				<div class="breadcrumbs" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                          

					<?php
					if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb('','');
					}
					?>							
				</div>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h1><?php the_title();?></h1>
					<?php the_content();?>
				<?php endwhile;?>
				<?php endif; ?>
			</section>
        </div>
    </div>
</main>
	
<?php get_footer(); ?>