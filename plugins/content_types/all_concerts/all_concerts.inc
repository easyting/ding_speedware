<?php
/**
 * @file
 * Ctools plugin definition file.
 */

/**
 * General ctools plugin settings.
 */
$plugin = array(
  'title' => t('All concerts'),
  'category' => t('Speedware'),
  'description' => t('Display list of all contents'),
  'single' => TRUE,
  'render callback' => 'ding_speedware_all_concerts_render',
  'admin title' => 'ding_speedware_content_type_admin_title',
  'edit form' => 'ding_speedware_all_concerts_plugin_edit_form',
);

/**
 * Plugin rendering.
 */
function ding_speedware_all_concerts_render() {
  $block = new stdClass();

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
  }

  $block->content = theme('speedware_concerts', array('items' => $items));
  return $block;
}

/**
 * Plugin edit form.
 */
function ding_speedware_all_concerts_plugin_edit_form($form, &$form_state) {
  // Use specific title handling - hide pane title if no content is present.
  // Standard pane title handling does not provide such functionality,
  // so use custom title field and hide the standard ones.
  unset($form['override_title']);
  unset($form['override_title_text']);
  unset($form['override_title_markup']);

  $form['all_concerts_custom_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Pane title'),
    '#default_value' => t(!empty($form_state['conf']['all_concerts_custom_title']) ? $form_state['conf']['all_concerts_custom_title'] : t('Concerts')),
  );

  return $form;
}
