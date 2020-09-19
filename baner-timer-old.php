<div class="content-header clearfix <?php echo is_home();?>" id = "<?php echo (is_home())?"tbHome":"tbNoHome"; ?>">
                <div class="timer-block ">
                    <style>
						.podarokToMob {
							display:none;
						}
						
						
                        .akc-block-center .title {
                            font: 700 20px "Roboto Slab", Arial, Helvetica, sans-serif;
                        }

                        .akc-block-discount {
                            margin-right: 5px;
                        }

                        @media screen and (max-width: 639px) {
							#mobPodImg2{
								width:35px;
							}
							.wriperSmlImg{
								float:left;
								width:100%;
								text-align: center;
							}
							
							.mobPodImg {
								    width: 50px;
								
							}
							
							.podarokToMob { 
								display: block;
								float: left;
								width: 96%;
								margin-top: 15px;
								font-size: 1.3em;
								padding: 0 2%;
							}
							
							.leftElem {
								width:45%;
								float:left;
							}
							
							.plusElem {
								width:10%;
								float:left;
								text-align:center;
							}
							
							.rightElem{
								width:45%;
								float:left;
							}
							
							.rightElem span{ 
								font-size:0.8em;
							}
							
							.akc-block-center {
								margin:0;
							}
							
							#imgBoll, #img1p, #img2p {
								display:none;
							}
							
							.podarki .podarok {
								    min-height: 55px;
								width: 100%;
								line-height:55px;
								display:none;
							}
							
							.podarki .podarok:last-child {
								display:none;
							}
							
							.podarki .podarok text {
								width:auto;
								    font-size: 12px;
							}
							
							#text1{
								position: relative;
								left: auto;
								bottom: auto;
								float: left;
								font-size:14px;
								display:none;
							}
							
							#text2{
								position: relative;
								left: auto;
								bottom: auto;
								right: auto;
								float: left;
								font-size:14px;
								display:none;
							}
							
							.podarki {
								width: 100%;
								margin-top: 3px;
							}
							
                            .akc-block-discount {
                                text-align: center;
                                height: 25px;
                                position: relative;
                                width: 100%;
                                background: #39b54a;
                                margin: 0;
                            }

                            .akc-block-discount p {
                                margin: 0;
                                display: inline;
                                font-size: 18px !important;
                                line-height: 18px;
                                position: relative;
                                top: -151px;
                            }

                            .akc-block-discount span {
                                font-size: 18px;
                                text-align: left;
                                display: inline;
                            }

                            .akc-block-discount p:last-child {
                                display: inline;
                                width: auto;
                                margin: 0;
                                text-align: left;
                                font-size: 16px;
                                line-height: 18;
                            }

                            .content-header .timer-block {
                                background-position: center;
								    height: 175px;
									margin-bottom:10px;
                            }
							
							.podarki .flagStrong {
								background-size:auto;
								text-transform:uppercase;
							}
							
							.akc-block-discount p br {
								display:none;
							}
							
							.akc-block-discount p:first-child {
								    display: inline-block;
									width: 115px;
									margin-top: 3px;
									text-align: left;
									font-size: 26px;
									line-height: 30px;
									text-align: center;
									margin-bottom: 11px;
							}
							
							.akc-block-discount p:last-child {
								display: inline;
								width: auto;
								margin: 0;
								text-align: left;
								font-size: 16px;
								line-height: 18;
							}
                        }
						
						@media screen and (max-width: 320px) {
							.podarokToMob {  
								font-size:1.0em;
								    margin-top: 5px;
							}
							
							.rightElem span{ 
								font-size:0.7em;
							}
							
							.content-header .timer-block {
                                    height: 155px;
								
                            }
						}
                    </style>
                    <div class="akc-block-discount">
                        <p>скидка<br/> до</p>
						<p>-50<span>%</span></p>
                    
                    </div>
                    <div class="akc-block-center">
                        <div style = "width: 61%;" class="titles titlesNoM">
                            <p class="title">Сделай заказ сегодня</p>
                        </div>
                        
						<div class = "podarki">
						<a class = "noborderLine" href = "<?php echo get_the_permalink(18);?>"><div class = "flagStrong "> И получи целых 2 подарка</div></a>
							<div class = "podarok">
								<!--<div class = "flag">при заказе от 2 тысяч<br/>1 подарок</div>-->
								<a  class = "fancybox" data-fancybox-group="baner1" href = "<?php bloginfo("template_url"); ?>/img/1podarka.png">
									<img id = "img1p" src = "<?php bloginfo("template_url"); ?>/img/1podarka.png">
								</a>
								<text id = "text1">
									Игрушка познавательные <br/>фигуры
								</text>
							</div>
							<div class = "plusPm">
							
							</div>
							
							<div class = "podarok">
								<!--<div class = "flag">при заказе от 7 тысяч<br/>2 подарка</div>-->
								<a class = "fancybox" data-fancybox-group="baner1" href = "<?php bloginfo("template_url"); ?>/img/2podarka-2.png">
									<img  id = "img2p" src = "<?php bloginfo("template_url"); ?>/img/2podarka-2.png">
								</a>
								<text  id = "text2">
									Мягкие пазлы "Теремок" при заказе <br/>от 7 500 руб.

								</text>
							</div>
							
							<div class = "podarok">
								<img  id = "imgBoll" src = "<?php bloginfo("template_url"); ?>/img/ball.png">
								<!--	
								<div class = "flag">при заказе от 12 тысяч<br/>целых 3 подарка</div>
								<a class = "fancybox" data-fancybox-group="baner1" href = "<?php bloginfo("template_url"); ?>/img/3podarka.png">
									<img  id = "img3p" src = "<?php bloginfo("template_url"); ?>/img/3podarka.png">
								</a>
								<text  id = "text3">
									геометрическая доска и <br/>мини бизиборд на выбор <br/>и ученый набор
								</text>
								-->
							</div>
							
							<div class = "podarokToMob">
								<div class = "leftElem">
									<div class = "wriperSmlImg"><img class = "mobPodImg" id = "mobPodImg1" src = "<?php bloginfo("template_url"); ?>/img/1podarka.png"></div>
									Познавательные фигуры
								</div>
								<div class = "plusElem">+</div>
								<div class = "rightElem"> 
									<div class = "wriperSmlImg"><img class = "mobPodImg" id = "mobPodImg2" src = "<?php bloginfo("template_url"); ?>/img/2podarka-2.png"></div>
									Пазлы "Теремок"<br/><span>при заказе от 7 500р.</span>
								</div>
							</div>
							
						</div>
						
                    </div>
                    <div class="akc-block-timer" style="float: right;">
                       <!-- <p>До конца акции осталось</p>
                        <div id="timer1" class="is-countdown">

                        </div>
						-->
						<div class = "videoWriper">
							<?php 
								//$video_url = 'https://www.youtube.com/watch?v=f42v5I4Kpak&feature=youtu.be';
								$video_url = 'https://youtu.be/f42v5I4Kpak';
								//echo do_shortcode('[embed]https://youtu.be/f42v5I4Kpak[/embed]'); 
								
								global $wp_embed;
								echo $wp_embed->run_shortcode( '[embed]' . $video_url . '[/embed]' );
							
							?>
						</div>
                    </div>
                </div>
                
            </div>