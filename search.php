<?php get_header(); ?>

<main>
    <div class="wrapper">
        <?php include ("baner-timer.php"); ?>
            
		<div class="clearfix d-flex-main">
                          

			<section class="page-content page-content-full">
			
			<?php 
				require_once 'Mobile_Detect.php';
				$detect = new Mobile_Detect;
				
				if( $detect->isMobile() )
					//include("search-form.php");
			?>
			<?
				global $query_string;
				parse_str($query_string, $args);	
				
				$args = array_diff($args, [$_REQUEST["s"]]);

				$metaquery = array(
					'relation' => 'AND',
					'orderCatM' => array (
						'key'     => '_tovar_order',
						'compare' => 'EXIST',
						'type'    => 'NUMERIC',
					),
					
					'priceM' => array (
						'key'     => 'price',
						'value' => '0',
						'compare' => '>',
						'type'    => 'NUMERIC',
					),
				
					'predzak' => array (
						'key'     => '_sclad_count',
						'value' => '0',
						'compare' => '>',
						'type'    => 'NUMERIC',
					),
				
				
				);
				
				
				$orderby = ($_REQUEST["sortparam"] === "price")?"priceM":"orderCatM";  
				$metakey = empty($_REQUEST["sortparam"])?"_tovar_order":$_REQUEST["sortparam"];  
				$order = empty($_REQUEST["ordn"])?"ASC":$_REQUEST["ordn"];  
				
				
		
				$args['meta_query'] = $metaquery;
				$args['orderby'] = $orderby;
				$args['order'] = $order;	
				
				$search_term = $_REQUEST["s"];	
				
				add_filter( 'posts_where', 'title_like_posts_where', 10, 2 );
				function title_like_posts_where( $where, $wp_query ) {
					global $wpdb;
					if ( $post_title_like = $wp_query->get( 'post_title_like' ) ) {
						$where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( $wpdb->esc_like( $post_title_like ) ) . '%\'';
					}
					return $where;
				}

				$args['post_title_like'] = $search_term;
				
				
				query_posts( $args );
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