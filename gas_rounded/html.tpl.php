 <?php
	   // настройки для CKEditor
    $_SESSION['KCFINDER'] = array();
    $_SESSION['KCFINDER']['disabled'] = false;
        // пути берутся из конфига сайта
    $_SESSION['KCFINDER']['uploadURL'] = 'http://'.$_SERVER['SERVER_NAME'].'/drupal/sites/gas';
    $_SESSION['KCFINDER']['uploadDir'] = "/var/www/drupal/sites/gas";
?>
<!DOCTYPE HTML>
<html lang="ru" >
<head>
	<?php print $head; ?>
	<?php print $styles;?>
	<?php print $scripts;?>
	<title><?php print $head_title;?></title>
</head>
<body>
    <?php print $page_top;?>
    <?php print $page;?>
    <?php print $page_bottom;?>
</body>
</html>

<!--

$css - данная переменная содержит массив стилевых таблиц для страницы
$language – объект, содержащий язык страницы
$language->language - содержит код языка (ru, en)
$language->dir – задаёт направление('ltr' - слева на право,'rtl' - справа на лево – для арабских стран)
$rdf_namespaces - содержит все RDF префиксы документа
$grddl_profile- GRDDL профиль, позволяющий извлеч RDF данные
$head_title - заголовок страницы, который используется в теге title
$head_title_array - ассоциативный массив, содержаший части заголовка страницы
$head- содержимое тега head (в основном различные мета-теги)
$styles – подключает все необходимые стилевые таблицы для страницы
$scripts – подключает все необходимые скрипты для страницы
$page_top - открывает разметку модулей, изменяющих содержимое страницы. Обязательно должна выводится перед контентом
$page - содержание страницы (данные подгружаются из файла page.tpl.php)
$page_bottom- закрывает разметку модулей, изменяющие содержание страницы. Обязательно должна выводится после всего контента
$classes - строка с CSS классами, которые могут быть использованы для изменения вывода содержания, через CSS

-->