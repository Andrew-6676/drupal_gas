<?php
 if ($is_front) {
 	global $theme;
	drupal_add_css(drupal_get_path('theme', $theme) . '/css/front-page.css', array('group' => CSS_THEME, 'type' => 'file'));
}
?>

<?php include('header.tpl.php'); ?>




<div class='content_wr front-page'>

<!-- слайдшоу вверху страницы -->
<div id="slider-container-top">
	<?php print render($page['top_slider']) ?>
</div>
<!-- **конец слайдшоу вверху страницы*************************************************************** -->


<div class='c_wrapper'>
	<div class='c_left'>
		<div class='c_left_ear'></div>
		БЕЗОПАСНОСТЬ
	</div>

	<div class='c_right'>
		<div class='c_right_ear'></div>
		АБОНЕНТАМ
	</div>
</div>

<div class='l_r_wrapper'>
<!-- ************************************************************** -->
	<!-- слайдшоу по безопасности-->
	<div class='l_content'>
		<div id='slider-container-left'>
		<?php print render($page['left_slider']) ?>
		</div>		<!-- slide-container-left -->
	</div>  <!-- l_content -->

<!-- ************************************************************** -->

	<div class='r_content'>
		<?php print render($page['abonentam'])?>
	</div>  <!-- r_content -->

<!-- ************************************************************** -->
</div>		<!-- l_r_wrapper -->



</div>	<!-- content_wr -->
<br><br>

<?php include('footer.tpl.php') ?>

