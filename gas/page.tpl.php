<!-- <div id='body'> -->
<header id="header_wr">
		<div class="left_ear"></div>
	<div class="right_ear"></div>

	<div class='left_logo'>
	</div>

	<div class='logo_wrapper'>
		<div class='top_logo'>

			<div class='slogan'>БЕЗАВАРИЙНОЕ И БЕСПЕРЕБОЙНОЕ ОБЕСПЕЧЕНИЕ ГАЗОМ ПОТРЕБИТЕЛЕЙ</div>
			<!-- <div class='search'> -->
			<!-- form name='search' method='GET' action='/search/node/' >
				<input name='str' id='search_input' type='text' placeholder='Поиск'>
				<input type="submit" style='display:none'>
			</form -->

			<?php print render($page['r_header']); ?>
			<!-- </div> -->
		</div>
	</div>    <!-- end logo_wrapper -->

	<div class='menu_wrapper'>
		<nav id="main_menu">
			<?php print render($page['main_menu']); /* Выводим регион "main_menu" */ ?>
			<?php global $user; ?>
			<div class='login_href <?php if($user->uid>0) {print "login";} ?>'></div>
		</nav>  <!-- #main menu  -->
	</div>


	<div id='breadcrumbs'>
		<?php print render($page['breadcrumbs']); ?>
		<?php print $breadcrumb; ?>
	</div>		<!-- breadcrumbs -->
</header>



				<!-- <div class='login_href'></div> -->
				<div id='login_form'>
					<!--span id='result'></span>
					<form action='/gas/site/login' method='POST'>
						<input placeholder="Логин" name="LoginForm[login]" id="LoginForm_login" type="text" />
						<input placeholder="Пароль" name="LoginForm[pass]" id="LoginForm_pass" type="password" />
						<span><a href='/gas/site/register' >[Регистрация]</a></span>
						<input class="button" type="submit" name="yt0" value="Вход" id="yt0" />
					</form -->
					<?php print render($page['login']); ?>
				</div>	<!-- login_form -->




<div class='content_wr'>

<!-- <h1>content</h1> -->
	<div class='page'>

		<h1>
			<?php if($title): print $title; endif; ?>
			<!-- ?php print render($page['title']); /* Выводим регион "заголовок" */ ? -->
		</h1>

	    <?php print render($page['content']); /* Выводим регион "контент" */ ?>


			<pre>
				<?php
					//  print_r(get_defined_vars());
					// print_r($main_menu);
				?>
			</pre>

	</div>		<!-- page -->


</div>	<!-- content_wr -->

<footer id="footer_wr">
 	<div class="f_left_ear">		</div>
	<div class="f_right_ear">		</div>

	<div class="links">
		<div class="f_wrap_img">
			<a href="http://www.topgas.by/">
				<img src="/gas_html/images/topgas2.png"/>
			</a>
		</div>
		<div class="f_wrap_img">
			<a href="http://www.pravo.by/">
				<img src="/gas_html/images/pravoby.png"/>
			</a>
		</div>
		<div class="f_wrap_img">
			<a href="http://www.minenergo.gov.by/">
				<img src="/gas_html/images/minenergoby.png"/>
			</a>
		</div>
		<div class="f_wrap_img">
			<a href="http://president.gov.by/ru/">
				<img src="/gas_html/images/portal.png"/>
			</a>
		</div>
		<div class="f_wrap_img">
			<a href="http://ncpi.gov.by/">
				<img src="/gas_html/images/ncpi.png"/>
			</a>
		</div>
	</div>		<!-- links -->

	<!-- <div class="f_right">
	    <small><p>Copyright (c) 2015</p></small>
	    <address>
  			Разработчик: <a href='mailto:
  				Andrew@vitebsk.oblgas.by'>
  					Шавнёв А.Л.  (Andrew@vitebsk.oblgas.by)
  					</a>
  					<br>
		</address>
		Powered by <a href="http://www.yiiframework.com/" rel="external">Yii Framework</a>.			</div> -->
</footer>

<div class="ff">
	<small>Copyright © 2014</small>
	<small>	Разработчик: <a href='mailto: Andrew@vitebsk.oblgas.by'>Шавнёв А.Л.  (Andrew@vitebsk.oblgas.by)</a></small>
	<small> Powered by <a href="http://drupal.org/" rel="external">Drupal</a>. </small>
</div>

<a id="to_bottom" href='#footer_wr'>
	<div>
	</div>
</a>

<a id="to_top" href='#header_wr'>
	<div>
	</div>
</a>
	<!-- </div> -->    <!-- #body  -->