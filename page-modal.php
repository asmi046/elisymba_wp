<?php
/**
 * The template for displaying all pages
 * Template Name: Модальное окно
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package eli
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
	    <?php get_template_part('template-parts/header-action');?>
	    <section class="content-section">
	      <div class="container">
	        <?php //get_sidebar();?>
		      <section class="main-content">
		      	<a href="#" class="button present-modal">Получить подарок</a>
		      	<a href="#" class="button vip_present-modal">Получить подарок VIP</a>
			<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
		      </section>
	      </div>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
