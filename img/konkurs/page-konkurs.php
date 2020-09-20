<?php 
/*
Template Name: Страница конкурса
*/
?>
<?php get_header();?>
<style>
	.konkurs-page {
		position: relative;
		/*overflow-x: hidden;*/
	}
	.konkurs-page__bg {
		position: absolute;
		top: 0;
		right: -20px;
		width: 220px;
		height: 220px;
		background-repeat: no-repeat;
		background-position: center;
		-webkit-background-size: contain;
		background-size: contain;
		background-image: url(<?php echo get_template_directory_uri();?>/img/konkurs/christmas-decorations.png);
	}
	.konkurs-condition__wrapper {
		position: relative;
		margin-top: 40px;
	}
	.color-green {
		color: #67d100;
	}
	.color-red {
		color: #fb0029;
	}
	.konkurs-condition__item {
		position: absolute;
		text-align: center;
		color: #577ab2;
		font-size: 16px;
		width: 450px;
		background-repeat: no-repeat;
		background-position: center;
		-webkit-background-size: contain;
		background-size: contain;
	}
	.konkurs-condition__item:before {
		content: '';
		position: absolute;
		top: -10px;
		right: -10px;
		bottom: -10px;
		left: -10px;
		background-repeat: no-repeat;
		background-position: center;
		-webkit-background-size: contain;
		background-size: contain;
	}
	.konkurs-condition__item-title {
		padding-top: 18px;
	}
	.condition__item-1 {
		width: 500px;
		height: 250px;
		padding-top: 72px;
		background-image: url(<?php echo get_template_directory_uri();?>/img/konkurs/condition__item-1.png);
	}
	.condition__item-2 {
		top: 20px;
		right: 0;
		padding-top: 224px;
		padding-right: 36px;
		padding-left: 36px;
		width: 400px;
		background-image: url(<?php echo get_template_directory_uri();?>/img/konkurs/condition__item-1.png);
		height: 300px;
		transform: rotate(6deg);
	}
	.condition__item-1 > div {
		transform: rotate(-5deg);
	}
	.condition__item-1-bg {
		position: absolute;
		top: 55px;
		right: 51px;
		width: 80px;
		height: 80px;
		background-repeat: no-repeat;
		background-position: center;
		-webkit-background-size: contain;
		background-size: contain;
		background-image: url(<?php echo get_template_directory_uri()?>/img/konkurs/condition__item-1-bg.png);
		transform: rotate(0)!important;
	}
	.condition__item-2-bg {
		position: absolute;
		bottom: 95px;
	    left: 106px;
	    width: 90px;
	    height: 90px;
		background-repeat: no-repeat;
		background-position: center;
		-webkit-background-size: contain;
		background-size: contain;
		background-image: url(<?php echo get_template_directory_uri()?>/img/konkurs/condition__item-22-bg.png);
		transform: rotate(-11deg)!important;
	}
	.konkurs-steps__wrapper {
		position: relative;
		top: 420px;
	}
	.konkurs-steps__item {
		text-align: center;
		font-size: 16px;
		width: 320px;
		min-height: 74px;
		margin-bottom: 20px;
		border: 5px solid;
		border-radius: 3px;
		color: #577ab2;
		padding: 10px;
		background-repeat: no-repeat;

		-webkit-box-shadow: 10px -7px 32px 0px rgba(0, 0, 0, 0.27),
				inset 10px -7px 32px 0px rgba(0, 0, 0, 0.29);
		-moz-box-shadow: 10px -7px 32px 0px rgba(0, 0, 0, 0.27),
				inset 10px -7px 32px 0px rgba(0, 0, 0, 0.29);
	    box-shadow: 10px -7px 32px 0px rgba(0, 0, 0, 0.27), 
			    inset 10px -7px 32px 0px rgba(0, 0, 0, 0.29);
	}

	.steps__item-1 {
		transform: rotate(-6deg);
		border-color: #01f81e;
		position: relative;
		left: 50px;
		top: -45px;
	}
	.steps__item-1-bg {
		width: 80%;
		margin-left: auto;
		margin-right: auto;
		height: 54px;
		background-repeat: no-repeat;
		background-position: bottom;
		-webkit-background-size: contain;
		background-size: contain;
		background-image: url(<?php echo get_template_directory_uri()?>/img/konkurs/people.png);
	}
	.steps__item-2 {
		position: absolute;
		top: 50px;
		right: 0px;
		transform: rotate(6deg);
		border-color: #ffc600;
	}
	.steps__item-2:before {
		position: absolute;
		content: '';
		width: 80px;
		height: 47px;
		background-repeat: no-repeat;
		background-position: center;
		-webkit-background-size: contain;
		background-size: contain;
		background-image: url(<?php echo get_template_directory_uri()?>/img/konkurs/steps__item-2-bg-1.png);
		right: -25px;
		bottom: -23px;
	}
	.steps__item-2-bg {
		position: absolute;
		bottom: 0;
		left: 50%;
		transform: translate(-50%);
		width: 75px;
		height: 61px;
		background-repeat: no-repeat;
		background-position: center;
		-webkit-background-size: contain;
		background-size: contain;
		background-image: url(<?php echo get_template_directory_uri()?>/img/konkurs/calend.png);
	}
	.steps__item-3 {
		position: absolute;
		min-height: 120px;
		top: 150px;
		left: 50px;
		transform: rotate(-6deg);
		border-color: #f801ef;
	}
	.steps__item-3:before {
		position: absolute;
		content:'';
		bottom: -50px;
		left: 10px;
		width: 59px;
		height: 110px;
		background-repeat: no-repeat;
		background-position: center;
		-webkit-background-size: contain;
		background-size: contain;
		background-image: url(<?php echo get_template_directory_uri()?>/img/konkurs/presents.png);
	}
	.steps__item-3:after {
		position: absolute;
		content:'';
		bottom: 0px;
		right: 10px;
		width: 59px;
		height: 66px;
		background-repeat: no-repeat;
		background-position: center;
		-webkit-background-size: contain;
		background-size: contain;
		background-image: url(<?php echo get_template_directory_uri()?>/img/konkurs/movie.png);
	}
	.steps__item-4 {
		position: absolute;
		top: 300px;
		right: 0;
		transform: rotate(6deg);
		border-color: #00ccff;
	}
	.steps__item-4:before {
		position: absolute;
		content: '';
		bottom: -10px;
		left: 20px;
		width: 84px;
		height: 50px;
		background-repeat: no-repeat;
		background-position: 0;
		-webkit-background-size: contain;
		background-size: contain;
		background-image: url(<?php echo get_template_directory_uri()?>/img/konkurs/presents-2.png);
		transform: rotate(-11deg)
	}
	.steps__item-4:after {
		position: absolute;
		content: '';
		bottom: 7px;
		right: 20px;
		width: 48px;
		height: 53px;
		background-repeat: no-repeat;
		background-position: 0;
		-webkit-background-size: contain;
		background-size: contain;
		background-image: url(<?php echo get_template_directory_uri()?>/img/konkurs/boy.png);
		transform: rotate(-11deg)
	}
	.konkurs-video__wrapper {
		position: relative;
		top: 900px;
	}
	.owl-konkurs__item {
		border: 1px solid #000;
		min-height: 150px;
	}
	.video-contest-result {
		position: relative;
		top: 700px;
	}
	.owl-nav {
		position: absolute;
		top: 35%;
		width: 100%;
		margin-left: -15px;
	}
	.owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev, .owl-carousel button.owl-dot {
		position: absolute;
		width: 40px;
		height: 30px;

	}
	.owl-carousel .owl-nav button.owl-prev {
		left: -40px;
	}
	.owl-carousel .owl-nav button.owl-next {
		right: -70px;
	}
	.owl-konkurs {
		position: relative;
		width: 90%;
		margin-left: auto;
		margin-right: auto;
	}
	.owl-konkurs:after {
		content: '';
		position: absolute;
		top: 90%;
		width: 50%;
		height: 100px;
		left: 50%;
		transform: translate(-50%);
		background-repeat: no-repeat;
		background-position: top center;
		-webkit-background-size: contain;
		background-size: contain;
		background-image: url(<?php echo get_template_directory_uri()?>/img/konkurs/flowers.png);
	}
	.owl-arrow {
		display: block;
		width: 100%;
		height: 100%;
		background-repeat: no-repeat;
		background-position: center;
		-webkit-background-size: contain;
		background-size: contain;
	}
	.arrow-left {
		background-image: url(<?php echo get_template_directory_uri()?>/img/konkurs/arrow-left.png);
	}
	.arrow-right {
		background-image: url(<?php echo get_template_directory_uri()?>/img/konkurs/arrow-right.png);
	}
	.konkurs-date {
		display: -webkit-flex;
		display: -moz-flex;
		display: -ms-flex;
		display: -o-flex;
		display: flex;
		justify-content: center;
		-webkit-flex-wrap: wrap;
		-moz-flex-wrap: wrap;
		-ms-flex-wrap: wrap;
		-o-flex-wrap: wrap;
		flex-wrap: wrap;
		position: relative;
		top: 800px;
	}
	.konkurs-date h2 {
		line-height: 1.1;
		margin-top: 0;
		margin-bottom: 0;
	}
	.konkurs-date__number {
		border: 2px solid #000;
		border-radius: 4px;
		margin-left: 20px;
		min-width: 200px;
	}
	.konkurs-date__notify {
		margin-top: 14px;
		color: #577ab2;
		font-size: 16px;
		width: 53%;
	}
	.list-persons {
		position: relative;
		top: 850px;
	}

	.list-persons__wrapper {
		display: -webkit-flex;
		display: -moz-flex;
		display: -ms-flex;
		display: -o-flex;
		display: flex;
		-webkit-flex-direction: column;
		-moz-flex-direction: column;
		-ms-flex-direction: column;
		-o-flex-direction: column;
		flex-direction: column;
		-webkit-flex-wrap: wrap;
		-moz-flex-wrap: wrap;
		-ms-flex-wrap: wrap;
		-o-flex-wrap: wrap;
		flex-wrap: wrap;
		height: 1400px;
		display:none;
		cursor:pointer;
		
	}
	.list-persons__wrapper span {
		width: 48%;
		font-size: 20px;
		color: #577ab2;
	}

	@media only screen and (max-width:1200px) {
		.condition__item-2 {
			top: 0;
		}
		.konkurs-page h1 {
			margin-bottom: 0;
		}
		.konkurs-condition__wrapper {
			margin-top: 0;
		}
		.konkurs-steps__wrapper {
			top: 450px;
		}
		.steps__item-1 {
			position: relative;
			left: 130px;
		}
		.steps__item-3 {
			left: 130px;
		}
		.steps__item-2 {
			right: 130px;
		}
		.steps__item-4 {
			right: 130px;
		}
		.video-contest-result {
			top: 700px;
		}
		.konkurs-date {
			top: 800px;
		}
		.list-persons {
			top: 850px;
		}
		.konkurs .main-sidebar {
			position: relative;
			top: 1100px;
		}
	}
	@media only screen and (max-width:1090px) {
		.condition__item-2 {
		    top: 100px;
		}

		.konkurs-steps__wrapper {
		    top: 550px;
		}
		.video-contest-result {
		    top: 850px;
		}
		.konkurs-date {
		    top: 950px;
		}
		.list-persons {
		    top: 1000px;
		}
		.owl-carousel .owl-nav button.owl-prev {
			left: -28px;
		}
		.owl-carousel .owl-nav button.owl-next {
			right: -58px;
		}
	}
	@media only screen and (max-width:996px) { 
		.condition__item-2 {
			top: 50px;
		}

		.steps__item-1 {
		    left: 100px;
		}
		.steps__item-3 {
		    left: 100px;
		}
		.steps__item-2 {
		    right: 30px;
		}
		.steps__item-4 {
		    right: 30px;
		}
	}
	@media only screen and (max-width:880px) {
		.condition__item-2 {
		    top: 120px;
		}
		.konkurs-steps__wrapper {
		    top: 650px;
		}
		.video-contest-result {
		    top: 950px;
		}
		.konkurs-date {
		    top: 1050px;
		}
		.list-persons {
		    top: 1100px;
		}
		.konkurs .main-sidebar {
			position: relative;
			top: 1300px;
		}
	}
	@media only screen and (max-width:862px) {
		.steps__item-1 {
			left: 30px;
		}
		.steps__item-3 {
			left: 30px;
		}
	}
	@media only screen and (max-width:832px) {
		.steps__item-1 {
			left: 80px;
			top: 0;
		}
		.steps__item-2 {
			top: 140px;
			right: 80px;
		}
		.steps__item-3 {
			top: 290px;
			left: 80px;
		}
		.steps__item-4 {
			top: 490px;
			right: 80px;
		}

		.owl-konkurs {
			width: 80%;
		}

		.owl-konkurs__item {
			min-height: 250px;
		}

		.video-contest-result {
		    top: 1150px;
		}
		.konkurs-date {
		    top: 1250px;
		}
		.list-persons {
		    top: 1300px;
		}

	}
	@media only screen and (max-width:700px) {
		.condition__item-2 {
		    top: 208px;
		}
	}
	@media only screen and (max-width: 630px)  {
		.konkurs-date__notify {
			width: 100%;
			text-align: center;
		}
		.konkurs-date__number {
			margin-top: 14px;
			height: 30px;
		}
	}
	@media only screen and (max-width:580px) {
		.condition__item-1 {
			width: 100%;
		}
		.condition__item-2 {
			width: 100%;
		}
	}
	@media only screen and (max-width:532px) {
		.konkurs-condition__item {
			font-size: 16px;
		}
		.condition__item-2 > div {
			padding-left: 20px;
			padding-right: 20px;
		}

		.condition__item-2 {
			padding-top: 228px;
		}
	}
	@media only screen and (max-width:502px) {
		.condition__item-1-bg {
			display: none;
		}
		.condition__item-1 > div {
			transform: rotate(0);
		}
		.condition__item-1 {
			/*background-image: none;*/
			font-size: 12px;
		}
		.condition__item-2 > div {
			padding-top: 40px;
		}
		.condition__item-2 {
			/*background-image: none;*/
		    transform: rotate(0);
		    padding-top: 173px;
		    padding-left: 0;
		    padding-right: 0;
		    font-size: 11px;
		    top: 157px;
		}
		.konkurs-steps__wrapper {
		    top: 554px;
		}
		.video-contest-result {
			top: 1060px;
		}
		.konkurs-date {
		    top: 1120px;
		}
		.list-persons {
		    top: 1150px;
		}
	}
	@media only screen and (max-width:462px) {
		.steps__item-1 {
			left: 0;
			transform: rotate(0);
		}
		.steps__item-3 {
			left: 0;
			transform: rotate(0);
		}
		.steps__item-2 {
			right: 0;
			transform: rotate(0);
		}
		.steps__item-4 {
			right: 0;
			transform: rotate(0);
		}
		.konkurs-steps__item {
			left: 0px;
			right: 0;
			width: 90%;
		}
		.steps__item-2:before {
			display: none;
		}
		.konkurs-page__bg {
			right: 0;
		}

		.condition__item-2-bg {
			display: none;	
		}
		.steps__item-2 {
			height: 100px;
		}
		.owl-konkurs__item {
			min-height: 170px;
		}
		.owl-carousel .owl-nav button.owl-prev {
			left: 0;
		}
		.owl-carousel .owl-nav button.owl-right {
			right: -30px;
		}
		.konkurs-page__bg {
			display: none;
		}
		.konkurs-condition__item:before {
			display: none;
		}
		.owl-carousel .owl-nav button.owl-next {
			right: -35px;
		}
		.list-persons__wrapper {
			height: 1400px;
		}
		.list-persons__wrapper span {
			width: 48%;
		}
		.konkurs .main-sidebar {
			top: 1150px;
		}
	}

	@media only screen and (max-width:428px) {
		.condition__item-1 {
			padding-top: 100px;
		}
	}
	@media only screen and (max-width:398px) {
		.condition__item-1 {
			padding-top: 2px;
		}
		.condition__item-1 {
			font-size: 14px;
		    background-image: url(http://work.xn--80ablmoh8a2h.xn--p1ai/wp-content/themes/Elesiamba/img/konkurs/condition__item-1.png);
		}
		.konkurs-condition__item-title {
			padding-top: 75px;
		}
		.condition__item-1 > div {
			font-size: 11px;
		}
		.condition__item-2 {
			    background-image: url(<?php echo get_template_directory_uri();?>/img/konkurs/condition__item-1.png);
		}
		.condition__item-2 > div {
			padding-top: 40px;
		}
		.konkurs-condition__item {
			font-size: 11px;
		}
	}
</style>

<script>	
		jQuery(document).ready(function() { 
			jQuery(".spisokUh").click(function(){
				if (jQuery(".list-persons__wrapper").is(':visible')) {
					jQuery(".list-persons__wrapper").hide();
				} else {
					jQuery(".list-persons__wrapper").css("display", "flex");
				}
				
			});
			
			
		});
</script>	

<main>
    <div class="wrapper">
        <?php include ("baner-timer.php"); ?>
        <?php include ("baner-new.php")?>
        <?php include ("show-960.php"); ?>
            
		<div class="clearfix d-flex-main konkurs">
            
			<?php get_sidebar("left"); ?>                

			<section class="page-content konkurs-page">
				<h1><?php the_title();?></h1>
				<?php the_content();?>
				<div class="konkurs-page__bg"></div>
				<div class="konkurs-condition__wrapper">
					<div class="konkurs-condition__item condition__item-1">
						<div class="konkurs-condition__item-title">Выиграй <span class="color-green">магнитный конструктор<br> "Комета" МК 30</span><br> или денежный сертификат</div>
						<div class="konkurs-condition__item-place">
							<span class="color-red">1 место</span> - магнитный конструктор
						</div>
						<div class="konkurs-condition__item-place">
							<span class="color-red">2 место</span> - 500 руб. на покупки в нашем магазине
						</div>
						<div class="konkurs-condition__item-place">
							<span class="color-red">3 место</span> - 300 руб. на покупки в нашем магазине
						</div>
						<div class="condition__item-1-bg"></div>
					</div>
					<div class="konkurs-condition__item condition__item-2">
						<div>
						Для участия пришлите на почту<br> <a href="mailto:info@elisyamba.ru">info@elisyamba.ru</a> Ваше ФИО и номер Вашего заказа. <br> В течение 48 часов Ваш номер заказа появится в списке участников на этой странице
						</div>
						<div class="condition__item-2-bg"></div>
					</div>
					
				</div>
				<div class="konkurs-steps__wrapper">
					<div class="konkurs-steps__item steps__item-1">
						<span class="steps__item-title">1. В конкурсе набирается 100 участников</span>
						<div class="steps__item-1-bg"></div>
					</div>
					<div class="konkurs-steps__item steps__item-2">
						<span class="steps__item-title">2. Объявляется дата и время розыгрыша</span>
						<div class="steps__item-2-bg"></div>
					</div>
					<div class="konkurs-steps__item steps__item-3">
						<span class="steps__item-title">3. В установленное время с помощью генератора случайных чисел выбираем победителя. Снимаем видео и выкладываем на сайт.</span>
					</div>
					<div class="konkurs-steps__item steps__item-4">
						<span class="steps__item-title">4. Связываемся с победителем и начинаем новый розыгрыш.</span>
					</div>
				</div>
				<section class="video-contest-result">
					<h2>Видео с итогами конкурсов</h2>
					<div class="owl-carousel owl-konkurs">
						<div class="owl-konkurs__item">
							<!-- <iframe width="300" height="185" src="https://www.youtube.com/embed/o3N21N-lclc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
						</div>
						<div class="owl-konkurs__item">
							<!-- <iframe width="300" height="185" src="https://www.youtube.com/embed/o3N21N-lclc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
						</div>
						<div class="owl-konkurs__item">
							<!-- <iframe width="300" height="185" src="https://www.youtube.com/embed/o3N21N-lclc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
						</div>
						<div class="owl-konkurs__item">
							<!-- <iframe width="300" height="185" src="https://www.youtube.com/embed/o3N21N-lclc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
						</div>
					</div>
				</section>
				<section class="konkurs-date">
					<h2>Дата розыгрыша конкурса №1</h2>
					<div class="konkurs-date__number"></div>
					<div class="konkurs-date__notify">
						Дата будет объявлена после того, как наберется 100 участников
					</div>
				</section>
				<section class="list-persons">
					<h2 class = "spisokUh">Список участников</h2>
					<div class="list-persons__wrapper">
						<span>1</span>
						<span>2</span>
						<span>3</span>
						<span>4</span>
						<span>5</span>
						<span>6</span>
						<span>7</span>
						<span>8</span>
						<span>9</span>
						<span>10</span>
						<span>11</span>
						<span>12</span>
						<span>13</span>
						<span>14</span>
						<span>15</span>
						<span>16</span>
						<span>17</span>
						<span>18</span>
						<span>19</span>
						<span>20</span>
						<span>21</span>
						<span>22</span>
						<span>23</span>
						<span>24</span>
						<span>25</span>
						<span>26</span>
						<span>27</span>
						<span>28</span>
						<span>29</span>
						<span>30</span>
						<span>31</span>
						<span>32</span>
						<span>33</span>
						<span>34</span>
						<span>35</span>
						<span>36</span>
						<span>37</span>
						<span>38</span>
						<span>39</span>
						<span>40</span>
						<span>41</span>
						<span>42</span>
						<span>43</span>
						<span>44</span>
						<span>45</span>
						<span>46</span>
						<span>47</span>
						<span>48</span>
						<span>49</span>
						<span>50</span>
						<span>51</span>
						<span>52</span>
						<span>53</span>
						<span>54</span>
						<span>55</span>
						<span>56</span>
						<span>57</span>
						<span>58</span>
						<span>59</span>
						<span>60</span>
						<span>61</span>
						<span>62</span>
						<span>63</span>
						<span>64</span>
						<span>65</span>
						<span>66</span>
						<span>67</span>
						<span>68</span>
						<span>69</span>
						<span>70</span>
						<span>71</span>
						<span>72</span>
						<span>73</span>
						<span>74</span>
						<span>75</span>
						<span>76</span>
						<span>77</span>
						<span>78</span>
						<span>79</span>
						<span>80</span>
						<span>81</span>
						<span>82</span>
						<span>83</span>
						<span>84</span>
						<span>85</span>
						<span>86</span>
						<span>87</span>
						<span>88</span>
						<span>89</span>
						<span>90</span>
						<span>91</span>
						<span>92</span>
						<span>93</span>
						<span>94</span>
						<span>95</span>
						<span>96</span>
						<span>97</span>
						<span>98</span>
						<span>99</span>
						<span>100</span>
					</div>
					

				</section>

				
			</section>
			
<!--
																<section class = "fqu faq-page">
					<h2>1) Кто может участвовать в розыгрыше?</h2>
Любой клиент совершивший заказ в нашем магазине. (статус оплаты Вашего заказа должен быть “оплачено”). 
  Пояснение: Если Вы сделали сегодня заказ, и оплатили его картой, то Вы можете участвовать в конкурсе сразу же. Если вы сделали заказ сегодня, но выбрали способ оплаты “при получении”, то Вы сможете участвовать в конкурсе только после выкупа Вашего заказа.

<h2>2) Как мне узнать номер моего заказа?</h2> 
Мы отправляем номер Вашего заказа в СМС-ке после отгрузки Вашего заказа в транспортнуюу компанию. 
Так же Вы можете написать или позвонить нам и уточнить номер Вашего заказа.

<h2>3) Что и куда я должен отправить чтобы участвовать в конкурсе?</h2>
Вам необходимо отправить к нам на почту info@elisyamba.ru  номер Вашего заказа, а также ФИО ( на кого был сделан заказ) или номер телефона. Это необходимо для проведения проверки. Мы сверяем Ваши данные с данными из нашей системы. Чтобы не было никакого обмана :)

<h2>4) Я отправил свои ФИО и номер заказа, но меня нет в списке. Почему?</h2>
Мы проверяем все письма отправленные к нам на почту в течение 48 часов. Мы сверяем Ваши данные с данными системы. На Вашу почту мы присылаем ответ.

<h2>5) Сколько раз я могу участвовать в конкурсе?</h2>
На каждый совершенный Вами заказ мы выдаем от 1 купона на участие в розыгрыше. Купоны одноразовые.
 При покупке до 5 000 руб.  - 1 купон
 от 5 000 до 8 000 руб.  - 2 купона
 от 8 000 до 11 000 руб.  - 3 купона
 от 11 000 руб.  - 4 купона
(учитывается только стоимость товара, стоимость доставки не учитывается)
Вывод: Чем больше Вы покупаете - тем больше шансов выиграть в конкурсе

				</section> -->



			        </div>
	    </div>
</main>

<?php get_footer();?>