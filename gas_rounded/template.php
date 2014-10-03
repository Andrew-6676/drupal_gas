<?php
function gas_rounded_menu_tree__main_abon($variables) {
  return '<ul class="abon">' . $variables['tree'] . '</ul>';
}

function gas_rounded_preprocess_page(&$variables, $hook) {
  // echo '<pre>';
  //   print_r($variables['node']->nid);
  // echo '</pre>';
  if (isset($variables['node'])) {
    if ($variables['node']->nid==8) {
      $js = drupal_get_path('theme', 'gas_rounded') . '/js/podpis.js';
      drupal_add_js($js);
    }
  }
  // if (isset($variables['node'])) {
  //   $variables['theme_hook_suggestions'][] = 'page__type__'. $variables['node']->type;
  //   $variables['theme_hook_suggestions'][] = "page__node__" . $variables['node']->nid;
  // }
}


function gas_rounded_views_pre_render(&$view) {
  //if ($view->name=='vakansii') {
   // echo '-----'.$view->name;
    $css = drupal_get_path('theme', 'gas_rounded') . '/css/views/'.$view->name.'.css';
    if (file_exists($css)) {
      drupal_add_css($css, array('group' => CSS_THEME, 'type' => 'file'));
    }
    $js = drupal_get_path('theme', 'gas_rounded') . '/js/views/'.$view->name.'.js';
    if (file_exists($js)) {
      drupal_add_js($js);
    }
  //}
}


	/*----------- Добавляем placeholder -----------*/
function gas_rounded_form_alter(&$form, &$form_state, $form_id) {
		// в форму поиска
  if ($form_id == 'search_block_form') {
    $form['search_block_form']['#attributes']['placeholder'] = t('Поиск');
  }
  	// в форму авторизации
  if ( TRUE === in_array( $form_id, array( 'user_login', 'user_login_block') ) ) {
    $form['name']['#attributes']['placeholder'] = t('Логин');
    $form['pass']['#attributes']['placeholder'] = t('Пароль');
  }
}


/**
 * Implements hook_preprocess_html().
 */
function gas_rounded_preprocess_html(&$vars) {
 //  $vars['html_attributes_array'] = array();
 //  $vars['body_attributes_array'] = array();

 //  // HTML element attributes.
 // // $vars['html_attributes_array']['lang'] = $vars['language']->language;
 //  $vars['html_attributes_array']['dir']  = $vars['language']->dir;

 //  // Adds RDF namespace prefix bindings in the form of an RDFa 1.1 prefix
 //  // attribute inside the html element.
 //  if (function_exists('rdf_get_namespaces')) {
 //    $vars['rdf'] = new stdClass;
 //    foreach (rdf_get_namespaces() as $prefix => $uri) {
 //      $vars['rdf']->prefix .= $prefix . ': ' . $uri . "\n";
 //    }
 //    $vars['html_attributes_array']['prefix'] = $vars['rdf']->prefix;
 //  }

 //  // BODY element attributes.
 //  $vars['body_attributes_array']['class'] = $vars['classes_array'];
 //  $vars['body_attributes_array'] += $vars['attributes_array'];
 //  $vars['attributes_array'] = '';
}

/**
 * Implements hook_process_html().
 */
function gas_rounded_process_html(&$vars) {
  // // Flatten out html_attributes and body_attributes.
  // $vars['html_attributes'] = drupal_attributes($vars['html_attributes_array']);
  // $vars['body_attributes'] = drupal_attributes($vars['body_attributes_array']);
}

/**
 * Implements hook_html_head_alter().
 */
function gas_rounded_html_head_alter(&$head_elements) {
  // Simplify the meta charset declaration.
  // $head_elements['system_meta_content_type']['#attributes'] = array(
  //   'charset' => 'utf-8',
  // );
}