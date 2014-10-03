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
<table class='abon_menu_table'>
    <?php $i=0; ?>
    <?php foreach ($rows as $row_count => $row):
        $str = $row['field_background'];
        $mass= array();
        preg_match_all('/src="([^\s]*)"/', $str, $mass);
        $img = $mass[1][0];
    ?>
        <?php
          if (($i%2)==0) { echo '<tr class="row_'.((int)($i/2)+1).'">';}
          $i++;
        ?>
    <td>
        <a href='<?php print $row["field_href"];?>'>
          <div class='item' style="background-image: url(<?php print $img; ?>)">
            <span class='wr_animation_bg'><span class='animation_bg'></span></span>
            <div>
                <?php print $row['title']; ?>
            </div>
          </div>
        </a>
      </td>
        <?php
          if (($i%2)==0) { echo '</tr>';}
        ?>

    <?php endforeach; ?>


</table>