<?php include('header.tpl.php'); ?>


<div class='content_wr'>

	<div class='page'>
		<?php print render($tabs)?>
		<?php print $messages; ?>

		<?php print render($title_prefix); ?>
		<?php if($title):?> <h1> <?php print $title; ?> </h1> <?php endif; ?>
		<?php print render($title_suffix); ?>
		<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

	    <?php print render($page['pre_content']); /* Выводим регион "контент_1" */ ?>
	    <?php print render($page['content']); /* Выводим регион "контент" */ ?>
	</div>		<!-- page -->


</div>	<!-- content_wr -->


<?php include('footer.tpl.php') ?>