<?php
/**
 * @file
 * Ctools plugin definition file.
 */

module_load_include('inc', 'ding_speedware', 'ding_speedware.service');

/**
 * General ctools plugin settings.
 */
$plugin = array(
  'title' => t('Concerts pane'),
  'category' => t('Speedware'),
  'description' => t('Display list of defined number of concerts'),
  'single' => TRUE,
  'render callback' => 'ding_speedware_concerts_pane_render',
  'admin title' => 'ding_speedware_content_type_admin_title',
  'edit form' => 'ding_speedware_concerts_pane_plugin_edit_form',
);

/**
 * Plugin rendering.
 */
function ding_speedware_concerts_pane_render($subtype, $conf, $panel_args, $context) {
  $block = new stdClass();

  $i = 1;
  $items = array();
  foreach (_speedware_get_all_concerts() as $concert) {
    $details = get_object_vars($concert);
    if (isset($details['Dato'])) {
      if (($date = DateTime::createFromFormat('Y-m-d\TH:i:s', $details['Dato']))) {
        $details['Dato'] = $date;
      }
    }

    if (isset($details['Starttid'])) {
      if (($date = DateTime::createFromFormat('Y-m-d\TH:i:s', $details['Starttid']))) {
        $details['Starttid'] = $date;
      }
    }

    if (isset($details['Sluttid'])) {
      if (($date = DateTime::createFromFormat('Y-m-d\TH:i:s', $details['Sluttid']))) {
        $details['Sluttid'] = $date;
      }
    }

    $items[] = $details;

    // @TODO limit on service level.
    if ($i++ >= $conf['concerts_pane_amount']) {
      break;
    }
  }

  $block->title = t($conf['override_title'] ? $conf['override_title_text'] : 'Concerts');
  $block->content = theme('speedware_concerts_pane', array('items' => $items));
  return $block;
}

/**
 * Plugin edit form.
 */
function ding_speedware_concerts_pane_plugin_edit_form($form, &$form_state) {
  $form['concerts_pane_amount'] = array(
    '#type' => 'select',
    '#options' => drupal_map_assoc(range(1, 20)),
    '#title' => t('Amount of concerts'),
    '#default_value' => !empty($form_state['conf']['concerts_pane_amount']) ? $form_state['conf']['concerts_pane_amount'] : 4,
  );

  return $form;
}

/**
 * Plugin edit form submit handler.
 * Saves the data from the form.
 */
function ding_speedware_concerts_pane_plugin_edit_form_submit($form, &$form_state) {
  $form_state['conf']['concerts_pane_amount'] = $form_state['values']['concerts_pane_amount'];
}
