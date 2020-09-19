<?php
add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );
 
function theme_options_init(){
register_setting( 'wpuniq_options', 'wpuniq_theme_options');
}
 
function theme_options_add_page() {
add_theme_page( __( 'Настройки Темы', 'WP-Unique' ), __( 'Настройки Темы', 'WP-Unique' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}
function theme_options_do_page() { global $select_options; if ( ! isset( $_REQUEST['settings-updated'] ) ) $_REQUEST['settings-updated'] = false;
?>
 
<div class="wrap">
<?php screen_icon(); echo "<h2>". __( 'Настройки Темы', 'WP-Unique' ) . "</h2>"; ?>
<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
<div id="message" class="updated">
<p><strong><?php _e( 'Настройки сохранены', 'WP-Unique' ); ?></strong></p>
</div>
<?php endif; ?>
</div>
 
<form method="post" action="options.php">
<?php settings_fields( 'wpuniq_options' ); ?>
<?php $options = get_option( 'wpuniq_theme_options' ); ?>
<table width="600" border="0">
<tr>
<td>Телефон отображаемый:</td>
<td><input type="text" name="wpuniq_theme_options[phoneViev]" id="wpuniq_theme_options[phoneViev]" value="<?php echo $options[phoneViev];?>" /></td>
</tr>

<tr>
<td>Телефон для ссылки:</td>
<td><input type="text" name="wpuniq_theme_options[phoneLnk]" id="wpuniq_theme_options[phoneLnk]" value="<?php echo $options[phoneLnk];?>" /></td>
</tr>

<tr>
<td>e-mail:</td>
<td><input type="text" name="wpuniq_theme_options[mail]" id="wpuniq_theme_options[mail]" value="<?php echo $options[mail];?>" /></td>
</tr>

<tr>
<td>e-mail директора:</td>
<td><input type="text" name="wpuniq_theme_options[maildir]" id="wpuniq_theme_options[maildir]" value="<?php echo $options[maildir];?>" /></td>
</tr>


<tr>
<td>Адрес:</td>
<td><input type="text" name="wpuniq_theme_options[adres]" id="wpuniq_theme_options[adres]" value="<?php echo $options[adres];?>" /></td>
</tr>

<tr>
<td>Время работы:</td>
<td><input type="text" name="wpuniq_theme_options[timeWork]" id="wpuniq_theme_options[timeWork]" value="<?php echo $options[timeWork];?>" /></td>
</tr>

<tr>
<td>Дни работы:</td>
<td><input type="text" name="wpuniq_theme_options[dayWork]" id="wpuniq_theme_options[dayWork]" value="<?php echo $options[dayWork];?>" /></td>
</tr>

<tr>
<td>ИП:</td>
<td><input type="text" name="wpuniq_theme_options[ipe]" id="wpuniq_theme_options[ipe]" value="<?php echo $options[ipe];?>" /></td>
</tr>

<tr>
<td>ОГРН:</td>
<td><input type="text" name="wpuniq_theme_options[ogrn]" id="wpuniq_theme_options[ogrn]" value="<?php echo $options[ogrn];?>" /></td>
</tr>

<tr>
<td>ИНН:</td>
<td><input type="text" name="wpuniq_theme_options[inn]" id="wpuniq_theme_options[inn]" value="<?php echo $options[inn];?>" /></td>
</tr>


<tr>
<td>Рассылка:</td>
<td><input type="text" name="wpuniq_theme_options[mails]" id="wpuniq_theme_options[mails]" value="<?php echo $options[mails];?>" /></td>
</tr>

<tr>
<td>Подписчиков в VK:</td>
<td><input type="text" name="wpuniq_theme_options[subVK]" id="wpuniq_theme_options[subVK]" value="<?php echo $options[subVK];?>" /></td>
</tr>

<tr>
<td colspan="2"><input type="submit" value="Сохранить" /></td>
</tr>

</table>
</form>
 
<?php
}  
?>