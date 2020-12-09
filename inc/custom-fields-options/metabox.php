<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;
Container::make('post_meta', 'review_custom_post', 'Отзывы о магазине')
	//->show_on_template(array("single-otziv.php"))
	->add_fields(array(
		Field::make('text', 'review_sity', 'Город')
			->set_width(20),
		Field::make('text', 'review_photo', 'Фото пользователя')
			->set_help_text( 'Ссылка на аватар пользователя в Вконтакте' )
			->set_width(30),
		Field::make('text', 'review_link', 'Ссылка на профиль пользователя в Вконтакте')
			->set_width(20),
		Field::make('text', 'review_date_time', 'Дата и время отзыва')
			->set_width(20),
		Field::make('complex', 'review_photos', 'Фотографии')
			->add_fields(array(
				Field::make('image', 'review_photos_item')
					->set_value_type( 'url' ),
			)),
));

Container::make('post_meta', 'product_review', 'Отзывы')
    ->add_fields(array(
        Field::make('text', 'reviews_awerage_rating', 'Cредняя оценка')
            ->set_width(30),
        Field::make('text', 'reviews_qty', 'Колличество отмодерированных отзывов')
            ->set_width(30),
        Field::make('complex', 'complex_reviews', 'Отзывы')
            ->add_fields(array(
                Field::make('text', 'complex_reviews_name', 'Имя')
                    ->set_width(30),
                Field::make('text', 'complex_reviews_stars', 'Оценка от 1 до 5')
                    ->set_width(30),
                Field::make('date', 'complex_reviews_date', 'Дата')
                    ->set_width(30),
                Field::make('textarea', 'complex_reviews_text', 'Текст отзыва')
                    ->set_width(30),
                Field::make('image', 'complex_reviews_img', 'Фото с товаром')
                    ->set_value_type('url')
                    ->set_width(20),
                Field::make('image', 'complex_reviews_img_1', 'Фото с товаром')
                    ->set_value_type('url')
                    ->set_width(20),
                Field::make('image', 'complex_reviews_img_2', 'Фото с товаром')
                    ->set_value_type('url')
                    ->set_width(20),
                Field::make('image', 'complex_reviews_img_3', 'Фото с товаром')
                    ->set_value_type('url')
                    ->set_width(20),
                Field::make('image', 'complex_reviews_img_4', 'Фото с товаром')
                    ->set_value_type('url')
                    ->set_width(20),
                Field::make('image', 'complex_reviews_ava', 'Аватар автора пользователя')
                    ->set_width(20),
                Field::make('checkbox', 'complex_reviews_is_show', 'Отображать отзыв')
                    ->set_width(20),
                Field::make('text', 'complex_reviews_is_use_yes', 'Отзыв полезен (Да)')
                    ->set_width(20),
                Field::make('text', 'complex_reviews_is_use_no', 'Отзыв полезен (Нет)')
                    ->set_width(20),
            ))
    ));

Container::make('post_meta', 'product_specifications', 'Новое описание товара')
    ->show_on_post_type('post')
    ->add_fields(array(
        Field::make('rich_text', 'product_specifications_char', 'Краткое описание товара'),
        Field::make('rich_text', 'product_specifications_complect', 'Комплектация товара'),
        Field::make('rich_text', 'product_specifications_video', 'Видео о товаре'),
		Field::make('rich_text', 'product_specifications_cerecter', 'Характеристики товара'),
    ));

Container::make('post_meta', 'tovar_custom_post', 'Поля товара')
	->show_on_post_type('post')
	->add_fields(array(
        Field::make( 'complex', 'offer_color_set', "Варианты цвета" )
			->add_fields( array(
				Field::make('color', 'clr_c1', 'Цвет 1')->set_width(10),
                Field::make('color', 'clr_c2', 'Цвет 2')->set_width(10),
                Field::make('checkbox', 'clr_raduga', 'Радужный цвет' )->set_width(10),
                Field::make('checkbox', 'clr_active', 'Активный цвет' )->set_width(10),
				Field::make('text', 'clr_name', 'Наименование модификации')->set_width(25),
				Field::make('text', 'clr_lnk', 'Ссылка на страницу')->set_width(25),
			) ),
        Field::make('text', 'yamarket_name', 'Наименование на маркете')->set_width(30),
		Field::make('text', 'yamarket_proizv', 'Производитель на маркете')->set_width(30),
		Field::make('text', 'yamarket_proizv_sku', 'Артикул производителя на маркете')->set_width(30),
        Field::make('text', 'sku', 'Артикул (SKU)')->set_width(30),
		Field::make('text', 'yamarket_cat', 'Категория на маркете')->set_width(50),
		Field::make('text', 'yamarket_subcat', 'Подкатегория на маркете')->set_width(50),
		Field::make('text', 'yamarket_strproizv', 'Страна производитель на маркете')->set_width(100),
        Field::make('text', 'price', 'Цена')->set_width(30),
        Field::make('text', 'old_price', 'Старая цена')->set_width(30),
		Field::make('text', 'ves', 'Вес товара')->set_width(30),
		
		Field::make('rich_text', 'yamarket_description', 'Описание на маркете'),
		Field::make('text', 'sclad_count', 'Колличество на складе')->set_width(30),
		Field::make('text', 'tovar_order', 'Порядок сортировки')->set_width(30),
		Field::make('checkbox', 'tovar_sklad_drop', 'Дропшип товар')->set_width(30),
		Field::make('text', 'tovar_cheng_label', 'Пометка об изменениях')->set_width(100),
	));

Container::make( 'theme_options', 'Settings', 'Настройки магазина' )
->add_tab('Контент главной страницы', array(
    Field::make('rich_text', 'main_up_tex', 'Текст над товаром'),
    Field::make('rich_text', 'main_down_tex', 'Текст под товаром'),
  ))  
->add_tab('Баннер', array(
    Field::make('text', 'banner_v', 'Версия баннера'),
  ))
  ->add_tab('Акция', array(
    Field::make('rich_text', 'auto_action', 'О розыгрыше в деталях'),
    Field::make('text', 'roz_data', 'Дата очередного розыгрыша'),
  ))->add_tab('Участники акции', array(
	Field::make('text', 'konkurs_number', 'Номер конкурса')->set_width(100),
    Field::make('text', 'uh1', 'Участник №1')->set_width(33),
    Field::make('text', 'uh2', 'Участник №2')->set_width(33),
    Field::make('text', 'uh3', 'Участник №3')->set_width(33),
    Field::make('text', 'uh4', 'Участник №4')->set_width(33),
    Field::make('text', 'uh5', 'Участник №5')->set_width(33),
    Field::make('text', 'uh6', 'Участник №6')->set_width(33),
    Field::make('text', 'uh7', 'Участник №7')->set_width(33),
    Field::make('text', 'uh8', 'Участник №8')->set_width(33),
    Field::make('text', 'uh9', 'Участник №9')->set_width(33),
    Field::make('text', 'uh10', 'Участник №10')->set_width(33),
	
    Field::make('text', 'uh11', 'Участник №11')->set_width(33),
    Field::make('text', 'uh12', 'Участник №12')->set_width(33),
    Field::make('text', 'uh13', 'Участник №13')->set_width(33),
    Field::make('text', 'uh14', 'Участник №14')->set_width(33),
    Field::make('text', 'uh15', 'Участник №15')->set_width(33),
    Field::make('text', 'uh16', 'Участник №16')->set_width(33),
    Field::make('text', 'uh17', 'Участник №17')->set_width(33),
    Field::make('text', 'uh18', 'Участник №18')->set_width(33),
    Field::make('text', 'uh19', 'Участник №19')->set_width(33),
    Field::make('text', 'uh20', 'Участник №20')->set_width(33),

    Field::make('text', 'uh21', 'Участник №21')->set_width(33),
    Field::make('text', 'uh22', 'Участник №22')->set_width(33),
    Field::make('text', 'uh23', 'Участник №23')->set_width(33),
    Field::make('text', 'uh24', 'Участник №24')->set_width(33),
    Field::make('text', 'uh25', 'Участник №25')->set_width(33),
    Field::make('text', 'uh26', 'Участник №26')->set_width(33),
    Field::make('text', 'uh27', 'Участник №27')->set_width(33),
    Field::make('text', 'uh28', 'Участник №28')->set_width(33),
    Field::make('text', 'uh29', 'Участник №29')->set_width(33),
    Field::make('text', 'uh30', 'Участник №30')->set_width(33),
	
    Field::make('text', 'uh31', 'Участник №31')->set_width(33),
    Field::make('text', 'uh32', 'Участник №32')->set_width(33),
    Field::make('text', 'uh33', 'Участник №33')->set_width(33),
    Field::make('text', 'uh34', 'Участник №34')->set_width(33),
    Field::make('text', 'uh35', 'Участник №35')->set_width(33),
    Field::make('text', 'uh36', 'Участник №36')->set_width(33),
    Field::make('text', 'uh37', 'Участник №37')->set_width(33),
    Field::make('text', 'uh38', 'Участник №38')->set_width(33),
    Field::make('text', 'uh39', 'Участник №39')->set_width(33),
    Field::make('text', 'uh40', 'Участник №40')->set_width(33),
	
    Field::make('text', 'uh41', 'Участник №41')->set_width(33),
    Field::make('text', 'uh42', 'Участник №42')->set_width(33),
    Field::make('text', 'uh43', 'Участник №43')->set_width(33),
    Field::make('text', 'uh44', 'Участник №44')->set_width(33),
    Field::make('text', 'uh45', 'Участник №45')->set_width(33),
    Field::make('text', 'uh46', 'Участник №46')->set_width(33),
    Field::make('text', 'uh47', 'Участник №47')->set_width(33),
    Field::make('text', 'uh48', 'Участник №48')->set_width(33),
    Field::make('text', 'uh49', 'Участник №49')->set_width(33),
    Field::make('text', 'uh50', 'Участник №50')->set_width(33),
	
    Field::make('text', 'uh51', 'Участник №51')->set_width(33),
    Field::make('text', 'uh52', 'Участник №52')->set_width(33),
    Field::make('text', 'uh53', 'Участник №53')->set_width(33),
    Field::make('text', 'uh54', 'Участник №54')->set_width(33),
    Field::make('text', 'uh55', 'Участник №55')->set_width(33),
    Field::make('text', 'uh56', 'Участник №56')->set_width(33),
    Field::make('text', 'uh57', 'Участник №57')->set_width(33),
    Field::make('text', 'uh58', 'Участник №58')->set_width(33),
    Field::make('text', 'uh59', 'Участник №59')->set_width(33),
    Field::make('text', 'uh60', 'Участник №60')->set_width(33),
	
    Field::make('text', 'uh61', 'Участник №61')->set_width(33),
    Field::make('text', 'uh62', 'Участник №62')->set_width(33),
    Field::make('text', 'uh63', 'Участник №63')->set_width(33),
    Field::make('text', 'uh64', 'Участник №64')->set_width(33),
    Field::make('text', 'uh65', 'Участник №65')->set_width(33),
    Field::make('text', 'uh66', 'Участник №66')->set_width(33),
    Field::make('text', 'uh67', 'Участник №67')->set_width(33),
    Field::make('text', 'uh68', 'Участник №68')->set_width(33),
    Field::make('text', 'uh69', 'Участник №69')->set_width(33),
    Field::make('text', 'uh70', 'Участник №70')->set_width(33),
	
	Field::make('text', 'uh71', 'Участник №71')->set_width(33),
    Field::make('text', 'uh72', 'Участник №72')->set_width(33),
    Field::make('text', 'uh73', 'Участник №73')->set_width(33),
    Field::make('text', 'uh74', 'Участник №74')->set_width(33),
    Field::make('text', 'uh75', 'Участник №75')->set_width(33),
    Field::make('text', 'uh76', 'Участник №76')->set_width(33),
    Field::make('text', 'uh77', 'Участник №77')->set_width(33),
    Field::make('text', 'uh78', 'Участник №78')->set_width(33),
    Field::make('text', 'uh79', 'Участник №79')->set_width(33),
    Field::make('text', 'uh80', 'Участник №80')->set_width(33),
	
    Field::make('text', 'uh81', 'Участник №81')->set_width(33),
    Field::make('text', 'uh82', 'Участник №82')->set_width(33),
    Field::make('text', 'uh83', 'Участник №83')->set_width(33),
    Field::make('text', 'uh84', 'Участник №84')->set_width(33),
    Field::make('text', 'uh85', 'Участник №85')->set_width(33),
    Field::make('text', 'uh86', 'Участник №86')->set_width(33),
    Field::make('text', 'uh87', 'Участник №87')->set_width(33),
    Field::make('text', 'uh88', 'Участник №88')->set_width(33),
    Field::make('text', 'uh89', 'Участник №89')->set_width(33),
    Field::make('text', 'uh90', 'Участник №90')->set_width(33),
	
	Field::make('text', 'uh91', 'Участник №91')->set_width(33),
    Field::make('text', 'uh92', 'Участник №92')->set_width(33),
    Field::make('text', 'uh93', 'Участник №93')->set_width(33),
    Field::make('text', 'uh94', 'Участник №94')->set_width(33),
    Field::make('text', 'uh95', 'Участник №95')->set_width(33),
    Field::make('text', 'uh96', 'Участник №96')->set_width(33),
    Field::make('text', 'uh97', 'Участник №97')->set_width(33),
    Field::make('text', 'uh98', 'Участник №98')->set_width(33),
    Field::make('text', 'uh99', 'Участник №99')->set_width(33),
    Field::make('text', 'uh100', 'Участник №100')->set_width(33),
  ));
