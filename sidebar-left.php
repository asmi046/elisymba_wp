<?php $options = get_option( 'wpuniq_theme_options' ); ?>

			<aside class="main-sidebar">
				<?php 
					include ("catalogMenu.php");
				?>
				

<p></p>




<?php //include ("ymarket.php")?>
<?php include ("bl-pismo.php")?>
<?php include ("vk-rew.php")?>

				
<div class="socBlk">
	<div class="vk color2">
        <div id="community_groups_main" class="community_groups_main clear_fix" style="height: 210px;">
            <a href="https://vk.com/elisyamba" target="_blank" class="community_head color3_bg" onmouseover="Community.headerOver(event);" onmouseout="Community.headerOut(event);">
                <span class="wcommuinty_logo fl_r" href="http://vk.com/" target="_blank" style="margin: 0 0 -2px 0;" title="ВКонтакте"></span>
                <img width="22" height="22" src="https://pp.userapi.com/c847218/v847218982/1461c/tvOq7LIE9Zs.jpg?ava=1">
                <div id="wcommunity_name_cont" style="width: 183px;" class="">
                    <span id="wcommunity_name_anim" class="wcommunity_name" style="margin-left: 0;">Бизиборды | Развивающие игрушки</span>
                </div>
            </a>
            <div class="community_soft_head">
                <a id="community_count_state1" onmousedown="return cancelEvent(event);" onclick="Community.toggleStat(-75729351, 255);" class="color2" style="display: none;"><!--7<span class="num_delim"> </span>355--> <?php echo $options[subVK]; ?> участника</a>
                <a id="community_count_state2" onmousedown="return cancelEvent(event);" onclick="Community.toggleStat(-75729351, 255);" class="color2"><!--7<span class="num_delim"> </span>355--><?php echo $options[subVK]; ?> участника</a>
            </div>
            <div class="community_content" id="community_content" style="">
                <div id="page_wall_posts" class="wall_module">
                    <div class="anim_row" style="width:239px;">
                        <div id="anim_row" style="width:340px;">


                            <div class="community_square_user">
                                <div class="community_square_pic">
                                    <a href="https://vk.com/id299185" target="_blank"><img width="50" height="50" src="https://pp.userapi.com/c841635/v841635073/969b/7J2L-Ioz3sg.jpg?ava=1"></a>
                                </div>
                                <a href="https://vk.com/id299185" target="_blank" class="color2">Юлия</a>
                            </div>

                            <div class="community_square_user">
                                <div class="community_square_pic">
                                    <a href="https://vk.com/id312617" target="_blank"><img width="50" height="50" src="https://pp.userapi.com/c847221/v847221939/c275d/qcv1PEgCk9Q.jpg?ava=1"></a>
                                </div>
                                <a href="https://vk.com/id312617" target="_blank" class="color2">Вика</a>
                            </div>

                            <div class="community_square_user">
                                <div class="community_square_pic">
                                    <a href="https://vk.com/alenax06" target="_blank"><img width="50" height="50" src="https://sun1-3.userapi.com/c830309/v830309736/6a2ff/maWOVa85uWk.jpg?ava=1"></a>
                                </div>
                                <a href="https://vk.com/alenax06" target="_blank" class="color2">Алена</a>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="community_square_user">
                        <div class="community_square_pic">
                            <a href="https://vk.com/id303405" target="_blank"><img width="50" height="50" src="https://pp.userapi.com/c627719/v627719405/f45d/Z4_7Zj9sHM8.jpg?ava=1"></a>
                        </div>
                        <a href="https://vk.com/id303405" target="_blank" class="color2">Alenka</a>
                    </div>
                    <div class="community_square_user">
                        <div class="community_square_pic">
                            <a href="https://vk.com/id48140" target="_blank"><img width="50" height="50" src="https://pp.userapi.com/c824200/v824200816/f8e94/9wPHldePj3U.jpg?ava=1"></a>
                        </div>
                        <a href="https://vk.com/id48140" target="_blank" class="color2">Александра</a>
                    </div>
                    <div class="community_square_user">
                        <div class="community_square_pic">
                            <a href="https://vk.com/id86182" target="_blank"><img width="50" height="50" src="https://sun1-8.userapi.com/c831309/v831309316/11333/z_BL7eIYpnA.jpg?ava=1"></a>
                        </div>
                        <a href="https://vk.com/id86182" target="_blank" class="color2">Наталья</a>
                    </div>
                </div>

            </div>

        </div>
        <div id="community_like" class="community_widget_bottom">
            <a href="https://vk.com/elisyamba" target="_blank" id="join_community" class="join_community  color3_bg clear_fix">
                Подписаться на новости
            </a>
        </div>

    </div>
</div>

<div class = "socBlk">			
<!--
	<iframe src='<?php bloginfo("template_url"); ?>/inwidget/index.php?skin=modern-green' data-inwidget scrolling='no' frameborder='no' style='border:none;width:260px;height:315px;overflow:hidden;'></iframe>
-->
	
</div>				
				
			</aside>