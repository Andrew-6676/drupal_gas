<header id="header_wr">
	<div class="left_ear">
		<div class='d_top'></div>
		<div class='d_bott'></div>
	</div>
	<div class="right_ear">
		<div class='d_top'></div>
		<div class='d_bott'></div>
	</div>
	<div class='left_logo'>
	</div>

	<div class='logo_wrapper'>
		<div class='top_logo'>
			<div class='slogan'><?php print $site_slogan; ?></div>
			<?php print render($page['r_header']); ?>
		</div>
	</div>    <!-- end logo_wrapper -->

	<div class='menu_wrapper'>
		<nav id="main_menu">
			<?php print render($page['main_menu']); /* Выводим регион "main_menu" */ ?>
			<?php global $user; ?>
			<div class='login_href <?php if($user->uid>0) {print "login";} ?>'></div>
			<div class='main-menu_right'>
				<?php print render($page['main_menu_right']); /* Выводим регион "main_menu_right" */ ?>
			</div>
		</nav>  <!-- #main menu  -->
	</div>		<!-- #menu_wrapper -->


	<div id='breadcrumbs'>
		<?php print render($page['breadcrumbs']); ?>
		<?php print $breadcrumb; ?>
	</div>		<!-- breadcrumbs -->
</header>


<!-- <div class='login_href'></div> -->
<div id='login_form'>
	<?php print render($page['login']); ?>
</div>	<!-- login_form -->
