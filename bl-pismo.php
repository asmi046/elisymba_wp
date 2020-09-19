<?php $name_mail = 1;
$name_mail = rand(1, 9);

		require_once 'Mobile_Detect.php';
		$detect = new Mobile_Detect;
					
		if( !$detect->isMobile() ){
?>

<div class="widget-mail">
    <a href="<?php echo get_template_directory_uri();?>/img/mails/<?php echo $name_mail?>-b.jpg" class = "fancybox" data-fancybox-group = "grM-1">
        <img  data-src="<?php echo get_template_directory_uri();?>/img/mails/<?php echo $name_mail?>.jpg" alt="" class="widget-mail-img lazy">
    </a>
</div>
<?
		}
?>