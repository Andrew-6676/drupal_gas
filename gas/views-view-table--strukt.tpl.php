<?php

/**
 * @file
 * Template to display a view as a table.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $header: An array of header labels keyed by field id.
 * - $caption: The caption for this table. May be empty.
 * - $header_classes: An array of header classes keyed by field id.
 * - $fields: An array of CSS IDs to use for each field id.
 * - $classes: A class or classes to apply to the table, based on settings.
 * - $row_classes: An array of classes to apply to each row, indexed by row
 *   number. This matches the index in $rows.
 * - $rows: An array of row items. Each row is an array of content.
 *   $rows are keyed by row number, fields within rows are keyed by field ID.
 * - $field_classes: An array of classes to apply to each field, indexed by
 *   field id, then row number. This matches the index in $rows.
 * @ingroup views_templates
 */
?>

<?php

    $res = $rows;
    $i = 1; $j = -1;
    print "<table class='div-table'>";
    foreach ($res as $man) {
      $j++;
      $colspan = '';
      $class_td = '';
      $last_line = 0;

        // если первый выводимый человек - его в отдельную строку (директор)
      if ($j == 0) {
        $class = ' first_line';
        $colspan = 'colspan="4"';
      }
        // если второй, третий, четвёртый - во вторую строку
      if ($j > 3 && $j < 8) {
        $class = ' second_line';
        //$colspan = 'colspan="4"';
      }
        // всех остальных выводим одинаково
      if ($j > 7) {
        $class = ' line';
      }

        // предпоследняя строка
      if (count($res)-$j-7 < 0) {
        $class=' prelast_line line';
      }
        // если последняя строка не полная
      if (count($res)-$j-3 < 0) {
        $class=' last_line';
        $last_line++;
      }

        // начинаем новую строку таблицы, если выводимый номер кратен 4
      if (($j%4) == 0) {
        print '<tr class="div-row'.$class.'">';
        //$class_td = ' left';
      }
        // если начало второй строки - вставляем в неё подтаблицу
      if ($j == 4 || ((count($res)-$j < 0) && $last_line==1) && ($j%4) == 0) {
        print   '<td colspan="4"><table class="sub_table"><tr class="div_row'.$class.'">';
        //echo '###';
      }

  $str = $man['field_photo_1'];
  $mass= array();
  preg_match_all('/src="([^\s]*)"/', $str, $mass);
  $photo = $mass[1][0];


      print     '<td class="div-cell'.$class_td.'" '.$colspan.'>';
      print       '<div class="man">';
      print         '<img src="'.$photo.'">';
      print         '<div class="post">'.$man['field_dolzn'].'</div>';
      print         '<div class="fio" title="'.$man['field_prim'].'">'.preg_replace('/ /','<br>',$man['field_fio']).'</div>';
      print       '</div>'; // end div-man
      print     '</td>';  // end div-cell

        // закрываем подтаблицу во второй строке и последней
      // if ($j == 6 ) {
      //   print   '</tr></table></td>';
      // }

      if ($j == 6 || ((count($res)-$j == -3) ) ) {
        print '</tr></table></td>';
      }

        // закрываем строку после первого, четвёртого и каждого четвёртого
      if (($j%4) == 3 || $j == 0 || $j == 6) {
        print   '</tr>';  // end div-row
      }

        // если выведен первый
      if ($j == 0) {
        $j += 3;
      }
        // если выведен 7
      if ($j == 6) {
        $j += 1;
      }

    } // end foreach

    print   '</table>'; // end div-table

