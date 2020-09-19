<a class="sidebar-title" href="<?php echo get_category_link(3);?>" style="font-size: 18px; text-decoration: none;">Бизиборды</a>
<nav style = "
<?php 
	$categoryIDm = get_queried_object()->term_id;
	if (is_home() || is_page() || in_category( 3, $post->ID ) || cat_is_ancestor_of(3, $categoryIDm) || is_category(3) ) 
		echo "display:block; ";
?>
">
	<ul>
		<li><a href="<?php echo get_category_link(3);?>">Смотреть все бизиборды</a></li>
		<?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 3, 'title_li' => "", 'orderby' => 'term_order', 'use_desc_for_title' => false) ); ?>
	</ul>
</nav>  

<a class="sidebar-title" href="<?php echo get_category_link(84);?>" style="font-size: 14px; text-decoration: none;">Методики развития</a>
<nav style = "
<?php 
	if (  (!is_home()&&in_category( 84, $post->ID )) || (get_cat_ID("General") == 84) || cat_is_ancestor_of(84, $categoryIDm) || is_category(84)) 
		echo "display:block;";
?>
">
	<ul>
		<li><a href="<?php echo get_category_link(84);?>">Смотреть все товары</a></li>
		<?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 84, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
	</ul>
</nav> 

<a class="sidebar-title" href="<?php echo get_category_link(51);?>" style="font-size: 14px; text-decoration: none;">Мелкая моторика</a>
<nav  style = "
<?php 
	//if (  (!is_home()&&in_category( 51, $post->ID )) || (get_cat_ID() == 51) || cat_is_ancestor_of(51, $categoryIDm) || is_category(51) ) 
	if (  (!is_category()&&!is_home()&&in_category( 51, $post->ID )) || (get_cat_ID("General") == 51) || cat_is_ancestor_of(51, $categoryIDm) || is_category(51) ) 
		echo "display:block;";
?>
">
	<ul>
		<li><a href="<?php echo get_category_link(51);?>">Смотреть все товары</a></li>
		<?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 51, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
	</ul>
</nav> 


<a class="sidebar-title" href="<?php echo get_category_link(92);?>" style="font-size: 14px; text-decoration: none;">Спортивное развитие</a>
<nav style = "
<?php 
	if (  (!is_home()&&in_category( 92, $post->ID )) || (get_cat_ID("General") == 92) || cat_is_ancestor_of(92, $categoryIDm) || is_category(92)) 
		echo "display:block;";
?>
">
	<ul>
		<li><a href="<?php echo get_category_link(92);?>">Смотреть все товары</a></li>
		<?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 92, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
	</ul>
</nav>



<a class="sidebar-title" href="<?php echo get_category_link(69);?>" style="font-size: 14px; text-decoration: none;">Магнитные конструкторы</a>
<nav style = "
<?php 
	if (!is_home() && ( in_category( 69, $post->ID ) || (get_cat_ID("General") == 69) || cat_is_ancestor_of(69, $categoryIDm) || is_category(69)))
		echo "display:block;";
?>
">
	<ul>

		<li><a href="<?php echo get_category_link(69);?>">Смотреть все товары</a></li>
		<?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 69, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
	</ul>
</nav>


  

<a class="sidebar-title" href="<?php echo get_category_link(21);?>" style="font-size: 14px; text-decoration: none;">Музыкальные игрушки</a>
<nav style = "
<?php 
	if (  (!is_home()&&in_category( 21, $post->ID )) || (get_cat_ID("General") == 21) || cat_is_ancestor_of(21, $categoryIDm) || is_category(21)) 
		echo "display:block;";
?>
">
	<ul>
		<li><a href="<?php echo get_category_link(21);?>">Смотреть все товары</a></li>
		<?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 21, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
	</ul>
</nav>

<a class="sidebar-title" href="<?php echo get_category_link(58);?>" style="font-size: 14px; text-decoration: none;">Коврики пазлы</a>
<nav style = "
<?php 
	if ( !is_home() && in_category( 58, $post->ID ) || (get_cat_ID("General") == 58) || cat_is_ancestor_of(58, $categoryIDm) || is_category(58)) 
		echo "display:block;";
?>
">
	<ul>
		<li><a href="<?php echo get_category_link(58);?>">Смотреть все товары</a></li>
		<?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 58, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
	</ul>
</nav> 
<!--
<a class="sidebar-title" href="<?php echo get_category_link(22);?>" style="font-size: 14px; text-decoration: none;">Конструкторы</a>
<nav style = "
<?php 
	if (  (!is_home()&&in_category( 22, $post->ID )) || (get_cat_ID("General") == 22) || cat_is_ancestor_of(22, $categoryIDm) || is_category(22)) 
		echo "display:block;";
?>
">
	<ul>
		<li><a href="<?php echo get_category_link(22);?>">Смотреть все товары</a></li>
		<?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 22, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
	</ul>
</nav> 
-->

<!--
<a class="sidebar-title" href="<?php echo get_category_link(25);?>" style="font-size: 14px; text-decoration: none;">Деревянные кубики</a>
<nav style = "
<?php 
	if (  (!is_home()&&in_category( 25, $post->ID )) || (get_cat_ID("General") == 25) || cat_is_ancestor_of(25, $categoryIDm) || is_category(25)) 
		echo "display:block;";
?>">
	<ul>
		<li><a href="<?php echo get_category_link(25);?>">Смотреть все товары</a></li>
		<?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 25, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
	</ul>
</nav> 
-->

<a class="sidebar-title" href="<?php echo get_category_link(80);?>" style="font-size: 14px; text-decoration: none;">Спорт и отдых</a>
<nav style = "
<?php 
	if (  (!is_home()&&in_category( 80, $post->ID )) || (get_cat_ID("General") == 80) || cat_is_ancestor_of(80, $categoryIDm) || is_category(80)) 
		echo "display:block;";
?>
">
	<ul>
		<li><a href="<?php echo get_category_link(80);?>">Смотреть все товары</a></li>
		<?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 80, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
	</ul>
</nav> 

<!--
<a class="sidebar-title" href="<?php echo get_category_link(33);?>" style="font-size: 14px; text-decoration: none;">Пластилин</a>
<nav style = "
<?php 
	if (  (!is_home()&&in_category( 33, $post->ID )) || (get_cat_ID("General") == 33) || cat_is_ancestor_of(33, $categoryIDm) || is_category(33)) 
		echo "display:block;";
?>
">
	<ul>
		<li><a href="<?php echo get_category_link(33);?>">Смотреть весь пластилин</a></li>
		<?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 33, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
	</ul>
</nav>
  -->

<!--
<a class="sidebar-title" href="<?php //echo get_category_link(20);?>" style="font-size: 14px; text-decoration: none;">Деревянные конструкторы</a>
<nav>
	<ul>
		<?php //wp_list_categories( array('hide_empty' => 0, 'child_of' => 20, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "") ); ?>
	</ul>
</nav> 
-->


<a class="sidebar-title" href="<?php echo get_category_link(60);?>" style="font-size: 14px; text-decoration: none;">Книги</a>
<nav style = "
<?php 
	if (  (!is_home()&&in_category( 60, $post->ID )) || (get_cat_ID("General") == 60) || cat_is_ancestor_of(60, $categoryIDm) || is_category(60)) 
		echo "display:block;";
?>
">
	<ul>
		<li><a href="<?php echo get_category_link(60);?>">Смотреть все товары</a></li>
		<?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 60, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
	</ul>
</nav> 


<a class="sidebar-title" href="<?php echo get_category_link(90);?>" style="font-size: 14px; text-decoration: none;">Блочный конструктор</a>
<nav style = "
<?php 
	if (!is_category() && !is_home() && ( in_category( 90, $post->ID ) || (get_cat_ID("General") == 90) || cat_is_ancestor_of(90, $categoryIDm) || is_category(90)))
		echo "display:block;";
?>
">
	<ul>

		<li><a href="<?php echo get_category_link(90);?>">Смотреть все конструкторы</a></li>
		<?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 90, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
	</ul>
</nav> 

<!-- <a class="sidebar-title" href="<?php echo get_category_link(32);?>" style="font-size: 14px; text-decoration: none;">Все для творчества</a>
<nav style = "
<?php 
	if (  (!is_home()&&in_category( 32, $post->ID )) || (get_cat_ID("General") == 32) || cat_is_ancestor_of(32, $categoryIDm) || is_category(32) ) 
		echo "display:block;";
?>
">
	<ul>
		<li><a href="<?php echo get_category_link(32);?>">Смотреть все товары</a></li>
		<?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 32, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
	</ul>
</nav>   -->

 

<a class="sidebar-title" href="<?php echo get_category_link(74);?>" style="font-size: 14px; text-decoration: none;">Сюжетно-ролевые игры</a>
<nav style = "
<?php 
	if (  (!is_home()&&in_category( 74, $post->ID )) || (get_cat_ID("General") == 74) || cat_is_ancestor_of(74, $categoryIDm) || is_category(74)) 
		echo "display:block;";
?>
">
	<ul>
		<li><a href="<?php echo get_category_link(74);?>">Смотреть все товары</a></li>
		<?php wp_list_categories( array('hide_empty' => 0, 'child_of' => 74, 'title_li' => "", 'orderby' => 'term_order', 'show_option_none' => "", 'use_desc_for_title' => false) ); ?>
	</ul>
</nav>






<?php echo wp_reset_postdata();?>
<style>
	.main-sidebar nav {
		display: none;
	}
</style>
<script type="text/javascript">
	jQuery(document).ready(function($) {

		$('.sidebar-title').on('click', function(e) {
			if($(this).next().children().children().length != 0) {

				e.preventDefault();
				var text = $(this).text();
				
				$('.sidebar-title').each(function(){
					if(text != $(this).text()) {

					$(this).next('nav').slideUp('10');
					}
				});
				$(this).next('nav').slideDown();
			} else {
				return true;
			}
		});
	});
</script>