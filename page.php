<?php get_header(); ?>

<main>
    <div class="wrapper">
        <?php include ("baner-timer.php"); ?>
            
		<div class="clearfix d-flex-main">
            
		<?php 
			require_once 'Mobile_Detect.php';
			$detect = new Mobile_Detect;
			
			if( !$detect->isMobile() ){
				if ($_REQUEST["nh"] != 1)
					get_sidebar("left"); 
			}

		?>                

			<section class="page-content page-content-arial <? if ($_REQUEST["nh"] == 1) echo "page-content-full"?>">
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